<li style=" list-style-type: none;">
        <?php if( isset($category['childs']) ):?>
            <?php if( isset($category['name']) ):?>
            <a class="collection-item level_opener
                <?php if(!empty($current)) :?>
                <?php foreach ($current as $checker) :?>
                <?php if($category['id']== $checker) :?>
                         active
                <?php endif;?>
                <?php endforeach;?>
                <?php endif;?>" href="#" title="<?=$category['name']?>"><?=$category['name']?><i class="fa fa-angle-down" aria-hidden="true" style="display: inline;float: right;"></i>
            </a>
            <div class="clear"></div>
            <ul style="display:none;">
                <?= $this->getMenuHtml($category['childs'],$key,$byprice,$current,$url)?>
            </ul>
            <?php endif;?>
        <?php else:?>
                <a class="collection-item
                <?php if(!empty($current)) :?>
                <?php foreach ($current as $checker) :?>
                <?php if($category['id']== $checker) :?>
                         active
                <?php endif;?>
                <?php endforeach;?>
                <?php endif;?>
                "
                 href="<?=$url.$category['url'].'/'.$category['id'].'/byprice/'.$byprice['name'].'/'.$byprice['id']?>"><?=$category['name']?> ( <?=$count?> )</a>
        <?php endif;?>
</li>