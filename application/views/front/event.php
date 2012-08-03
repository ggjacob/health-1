<div class="block_cont_left">
    <div class="block_blog post_type1">
        <div class="post_pic shadow_img">
            <div>
                <a href="<?=$event['main_img']?>" rel="prettyPhoto[gallery2]"><img src="<?=$event['main_img']?>" alt="" title="" /></a>
            </div>
        </div>
        <div class="title">
            <div class="date">
                <p><b><?=substr($event['time'], 0, 5);?></b></p>
            </div>
            <div class="blog_info">
                <h3><?=$event['title']?></h3>
                <ul>
                    <li><i>posted by</i> <a href="#">Admin</a></li>
                    <li><i>in</i> <a href="#">Web Design</a></li>
                    <li><a href="#comments">5</a> comments</li>
                </ul>
            </div>
        </div>
        <div class="blog_content">
            <p><?=$event['description']?></p>
            <div class="share_block">
            <div class="share_btn">
                <a href="https://www.facebook.com/sharer.php?u=<?=$meta['link']?>" target="_blank">
                    <img src="<?=base_url()?>public/img/fb.png" />
                </a>
            </div>
            <div class="share_btn">
                <a href="http://vkontakte.ru/share.php?url=<?=$meta['link']?>" target="_blank">
                    <img src="<?=base_url()?>public/img/vk.png" />
                </a>
            </div>
            <div class="share_btn">
                <a href="http://twitter.com/home?status=<?=$meta['description']?><?=$meta['link']?>"  title="Click to share this post on Twitter" target="_blank">
                    <img src="<?=base_url()?>public/img/tw.png" />
                </a>
            </div>
            </div>
        </div>
    </div>
</div>