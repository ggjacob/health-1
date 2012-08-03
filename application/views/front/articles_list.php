<div class="block_cont_left">
     <?php if ($articles) : ?>
		<?php foreach ($articles as $article) : ?>
            <div class="block_blog_type2">

                    <div class="post_pic shadow_img">
                    	<div>
                        	<a href="<?=$article['id']?>"><img src="<?=$articles_images[$article['id']]['path']?>" alt="" title="" /></a>
                        </div>
                    </div>
                    <div class="block_content">
	                    <div class="title">
	                    	<div class="date blog_date">
	                        	<p>Nov <b>22</b></p>
	                        </div>
	                        <div class="blog_info">
	                        	<h3><a href="<?=base_url()?>blog/get_article/<?=$article['id']?>"><?=$article['title_ru']?></a></h3>
	                            <ul>
	                            	<li><i>Автор</i> <a href="#">Admin</a></li>
	                                <!--li><i>in</i> <a href="#">Web Design</a></li>
	                                <li><a href="#">7</a> comments</li-->
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="blog_content">
	                    	<p><?=$article['anons_ru']?></p>
							<a href="<?=base_url()?>blog/get_article/<?=$article['id']?>" class="button">
	                        	<span class="left">
	                                <span class="right">
	                                    Подробнее
	                                </span>
	                            </span>
	                        </a>
	                    </div>
                	</div>
                </div>
                <div class="separator_3"></div>
                <div class="line"></div>
                <div class="separator_4"></div>

		<?php endforeach; ?>
		<?php endif; ?>
             </div> 