<div class="block_cont_left">

		<?php if ($events) : ?>
		<?php foreach ($events as $event) : ?>
    <div class="block_blog">
        <div class="title">
            <div class="date">
                <p> <b><?=substr($event['time'], 0, 5);?></b></p>
            </div>
            <div class="blog_info">
                <h3><a href="<?=base_url().'events/event/'.$event['id']?>"><?=$event['title']?></a></h3>
                <ul>
                    <li><i>место проведения </i> <a href="#"><?=$event['name']?></a></li>
                    <li><i>категория</i> <a href="<?=base_url().'events/category/'.$event['alias']?>"><?=$event['category_name']?></a></li>
                    <!--li><a href="#">7</a> comments</li-->
                </ul>
            </div>
        </div>
        <div class="post_pic shadow_img">
            <div>
                <a href="<?=base_url().'events/event/'.$event['id']?>"><img src="<?=$event['main_img']?>" alt="" title="" /></a>
            </div>
        </div>
        <div class="blog_content">
            <p><? $words=explode(" ",$event['description']); echo implode(" ",array_splice($words,0,50))?></p>
            <a  href="<?=base_url().'events/event/'.$event['id']?>" class="button">
                        	<span class="left">
                                <span class="right">
                                    Подробнее
                                </span>
                            </span>
            </a>
        </div>
    </div>

    <div class="line"></div>


		<?php endforeach; ?>
		<?php endif; ?>
</div>