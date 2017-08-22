<?php

namespace app\components;
use yii\base\Widget;
use yii\db\ActiveRecord;
use app\models\Category;
use app\models\Product;


class MenuWidget extends  Widget{

    public $tpl;
    public $data;
    public $tree;
    public $menuHtml;
    public $url;
    public $current;
    public $managed;
    public $tr = [
        "А"=>"a","Б"=>"b","В"=>"v","Г"=>"g","Д"=>"d",
        "Е"=>"e","Ё"=>"yo","Ж"=>"j","З"=>"z","И"=>"i",
        "Й"=>"y","К"=>"k","Л"=>"l","М"=>"m","Н"=>"n",
        "О"=>"o","П"=>"p","Р"=>"r","С"=>"s","Т"=>"t",
        "У"=>"u","Ф"=>"f","Х"=>"h","Ц"=>"c","Ч"=>"ch",
        "Ш"=>"sh","Щ"=>"sch","Ъ"=>"","Ы"=>"yi","Ь"=>"",
        "Э"=>"e","Ю"=>"yu","Я"=>"ya","а"=>"a","б"=>"b",
        "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ё"=>"yo","ж"=>"j",
        "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
        "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
        "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
        "ц"=>"c","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
        "ы"=>"y","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya",
        " "=> "_", "."=> "", "/"=> "_",
    ];
    public $required;
    public function init(){
        parent::init();
        if( $this->tpl === null){
            $this->tpl='menu';
        }
        $this->tpl.='.php';
    }
    public function run(){
        $arr=explode('/',$this->url);
        $url_str=$this->url;
        if($arr[1]!='category' || ($arr[1]=='category' && $arr[2]=='index')){//0=>''1=>category,2=>category_parent,3=>category_name,4=>category_id,5=>spec_1name,...4=>spec_id,5=>spec_2name,6=>spec_id,7=>spec_3name,8=>spec_id,9=>spec_4name,10=>spec_id,11=>spec_5name,12=>spec_id,13=>spec_6name,14=>spec_id,
            $arr[1]='category';
            $arr[2]='';
            $arr[3]='';
            $arr[4]='0';
            $arr[5]='byprice';
            $arr[6]='po-popularnosti';
            $arr[7]='0';
        }

        //для передачи id и ключа для url
        $i=2;
        $sub_url='';
        while(isset($arr[$i])){
            if($arr[$i]!='page'){
               if($i==2){
                   $sub_url .= '/' . $arr[$i] . '/' . $arr[$i + 1] . '/' . $arr[$i + 2];
                   $this->managed['category']['id'] = $arr[$i + 2];
                   $this->managed['category']['name'] = $arr[$i + 1];
                   $current=$arr[$i + 2];
                   $i = $i + 3;
               }
               else {
                   $sub_url .= '/' . $arr[$i] . '/' . $arr[$i + 1] . '/' . $arr[$i + 2];
                   $this->managed[$arr[$i]]['id'] = $arr[$i + 2];
                   $this->managed[$arr[$i]]['name'] = $arr[$i + 1];
                   $i = $i + 3;
               }
            }
            else{
                break;
            }
        }
        $managed=Category::find()->where(['id' => $this->managed['category']['id']])->one();
        if(isset($managed->parent_id)) {
            $this->current[] = $managed->parent_id;
            $this->current[] = $managed->id;
        }
        $url='/category/';//для будущего формирования url основных категорий

        $this->data = Category::find()->where(['name' => 'Товары'])->orWhere(['parent_name' => 'Товары'])->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml=$this->getMenuHtml($this->tree,'category',$managed,0,$url);

        $this->data = Category::find()->where(['name' => 'Проекты'])->orWhere(['parent_name' => 'Проекты'])->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml=$this->menuHtml.$this->getMenuHtml($this->tree,'category',$managed,0,$url);

        $this->data = Category::find()->where(['name' => 'Продукция'])->orWhere(['parent_name' => ['Управляющие платы','Продукция']])->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml=$this->menuHtml.$this->getMenuHtml($this->tree,'category',$managed,0,$url);

        $end_url=substr($sub_url,strpos($sub_url,'byprice'));
        $sub_url=substr($sub_url,0,(strpos($sub_url,'byprice')));
        $arrayRequired=explode(',',$this->required);
        foreach ($arrayRequired as $key){
            $key_name=$key;
            if (preg_match('/[^A-Za-z0-9_\-]/', $key)) {

                $key = strtr($key,$this->tr);
                $key = preg_replace('/[^A-Za-z0-9_\-]/', '', $key);
            }

            $buf_url='';
            $i=0;
            $arrayParams=explode('/',$sub_url);
            //отлов выбраных категорий(Тип+2=айди)
            while(isset($arrayParams[$i])){
                $i++;
                if($i%3==0 && $i!=0 && isset($this->current)){
                    $flag=true;
                    foreach ($this->current as $item) {
                        if($item==$arrayParams[$i]){
                            $flag=false;
                            break;
                        }
                    }
                    if($flag==true)
                    $this->current[] = $arrayParams[$i];
                }
                if(!empty($arrayParams[$i]) && $arrayParams[$i]==$key){
                    $i=$i+2;
                    $this->managed[$key_name]['id']=$arrayParams[$i];
                    $processed=Category::find()->where(['id' => $arrayParams[$i]])->one();
                    $this->current[]=$processed->parent_id;
                }
                elseif(!empty($arrayParams[$i])) {
                    $buf_url .= '/' . $arrayParams[$i];
                }
            }
            $buf_url.='/';
            $this->data = Category::find()->where(['name' => $key_name])->orWhere(['parent_name' => $key_name])->indexBy('id')->asArray()->all();
            $this->tree = $this->getTree();
            $this->menuHtml=$this->menuHtml.$this->getMenuHtml($this->tree,$key_name,$managed,$current,'/category'.$buf_url);
        }
        return '<ul>'.$this->menuHtml.'</ul>';
    }

    protected function getTree(){
        $tree =[];
        foreach ($this->data as $id=>&$node){
            if(!$node['parent_id']){
                $tree[$id]=&$node;
            }
            else{
                $this->data[$node['parent_id']]['childs'][$node['id']]=&$node;
            }
        }
        return $tree;
    }

    public function getMenuHtml($tree,$key,$managed,$current,$url){
        $byprice=$this->managed['byprice'];
        $str='';
        foreach ($tree as $category){
            $category['url']=$category['name'];
            if (preg_match('/[^A-Za-z0-9_\-]/', $category['url'])) {
                $category['url'] = strtr($category['url'],$this->tr);
                $category['url'] = preg_replace('/[^A-Za-z0-9_\-]/', '', $category['url']);
            }
            $query =Product::find()->Where('category_id =' . $category['id'] . ' or spec1_id =' . $category['id'] . ' or spec2_id =' . $category['id'] . ' or spec3_id =' . $category['id'] . ' or spec4_id =' . $category['id'] . ' or spec5_id =' . $category['id'] . ' or spec6_id =' . $category['id'] . ' or spec7_id =' . $category['id'] . ' or spec8_id =' . $category['id'] . ' or spec9_id =' . $category['id'] . ' or spec10_id =' . $category['id'] . ' or spec11_id =' . $category['id'] . ' or spec12_id =' . $category['id'] . ' or spec13_id =' . $category['id'] . ' or spec14_id =' . $category['id'] . ' or spec15_id =' . $category['id'] . ' or spec16_id =' . $category['id'] . ' or spec17_id =' . $category['id'] . ' or spec18_id =' . $category['id'] . ' or spec19_id =' . $category['id'] . ' or spec20_id =' . $category['id'] . ' or spec21_id =' . $category['id'] . ' or spec22_id =' . $category['id'] . ' or spec23_id =' . $category['id'] . ' or spec24_id =' . $category['id'] . ' or spec25_id =' . $category['id']);

            if(!empty($this->current))
                foreach ($this->current as $spec){
                    if(empty(Category::findOne(['parent_id' => $spec]) ) && Category::findOne(['id' => $spec])->parent_name != 'Товары' && Category::findOne(['id' => $spec])->parent_name!='Проекты' && Category::findOne(['id' => $spec])->parent_name!='Продукция') {
                            $query = $query->andWhere('category_id =' . $spec . ' or spec1_id =' . $spec . ' or spec2_id =' . $spec . ' or spec3_id =' . $spec . ' or spec4_id =' . $spec . ' or spec5_id =' . $spec . ' or spec6_id =' . $spec . ' or spec7_id =' . $spec . ' or spec8_id =' . $spec . ' or spec9_id =' . $spec . ' or spec10_id =' . $spec . ' or spec11_id =' . $spec . ' or spec12_id =' . $spec . ' or spec13_id =' . $spec . ' or spec14_id =' . $spec . ' or spec15_id =' . $spec . ' or spec16_id =' . $spec . ' or spec17_id =' . $spec . ' or spec18_id =' . $spec . ' or spec19_id =' . $spec . ' or spec20_id =' . $spec . ' or spec21_id =' . $spec . ' or spec22_id =' . $spec . ' or spec23_id =' . $spec . ' or spec24_id =' . $spec . ' or spec25_id =' . $spec);
                    }
                    else {
                        $query = $query->andWhere('category_id =' . $category['id'] . ' or spec1_id =' . $category['id'] . ' or spec2_id =' . $category['id'] . ' or spec3_id =' . $category['id'] . ' or spec4_id =' . $category['id'] . ' or spec5_id =' . $category['id'] . ' or spec6_id =' . $category['id'] . ' or spec7_id =' . $category['id'] . ' or spec8_id =' . $category['id'] . ' or spec9_id =' . $category['id'] . ' or spec10_id =' . $category['id'] . ' or spec11_id =' . $category['id'] . ' or spec12_id =' . $category['id'] . ' or spec13_id =' . $category['id'] . ' or spec14_id =' . $category['id'] . ' or spec15_id =' . $category['id'] . ' or spec16_id =' . $category['id'] . ' or spec17_id =' . $category['id'] . ' or spec18_id =' . $category['id'] . ' or spec19_id =' . $category['id'] . ' or spec20_id =' . $category['id'] . ' or spec21_id =' . $category['id'] . ' or spec22_id =' . $category['id'] . ' or spec23_id =' . $category['id'] . ' or spec24_id =' . $category['id'] . ' or spec25_id =' . $category['id']);
                    }
                    if($spec==$category['id']) {
                        if(strlen($category['specs'])>1){
                            $this->required .= $category['specs'];
                        }
                    }
                }

            if(!isset($category['childs'])) {
                $parent= Category::findOne(['id' => $category['parent_id']]);
                $translit_parent=$parent->name;
                if (preg_match('/[^A-Za-z0-9_\-]/', $translit_parent)) {

                    $translit_parent = strtr($translit_parent,$this->tr);
                    $translit_parent = preg_replace('/[^A-Za-z0-9_\-]/', '', $translit_parent);
                }
                $category['url']=$translit_parent.'/'.$category['url'];
                if($parent->name!='Товары' && $parent->name!='Проекты' && $parent->name!='Продукция' && $parent->name!='Управляющие платы') {
                    $count = $query->andWhere(['category_id' => $current])->count();
                    if($count!=0)
                        $str .= $this->catToTemplate($category, $key, $byprice, $count, $this->current, $url);
                }
                else {
                    $count = $query->count();
                    $str .= $this->catToTemplate($category, $key, $byprice, $count, $this->current, $url);
                }
            }
            else{
                $current_cat=Category::findOne(['id'=>$current]);
                $count = $query->count();
                $buf = $this->catToTemplate($category,$key,$byprice,$count,$this->current,$url);
                //echo $buf;
                if(substr_count($buf,'</li>')>=2 || $category['name']=='Управляющие платы')
                    $str.=$buf;
            }
        }
        return $str;
    }

    public function translitIt($str){

        return ;
    }
    protected function catToTemplate($category,$key,$byprice,$count,$current,$url){
        ob_start();
        include __DIR__.'/menu_tpl/'.$this->tpl;
        return ob_get_clean();
    }
}