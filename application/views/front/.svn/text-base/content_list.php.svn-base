<div class="content-contacts">
<div class="content-top">
<div class="content-bottom">
<h2 class="topheading"><span><?=lang('content')?></span></h2>
<br />

<div id="page_wrapper">
	<div id="content_top"></div>
		<div class="content_body">
		<?php if ($contents) : ?>
		<?php foreach ($contents as $content) : ?>
		<div class="content_anons">
			<h2><a href="<?=$base_url.'content/'.$content['id']?>"><?=$content['title']?></a></h2>
			<div class="gray"><?=lang('publication date')?>: <?=date('d.m.Y H:i', strtotime($content['pub_date']))?></div>
			<div>
				<?=$content['anons']?>
				<a href="<?=$base_url.'content/'.$content['id']?>"><?=lang('read more')?></a>
			</div>
		</div>        
		<?php endforeach; ?>
		<?php endif; ?>
		</div>
	<div id="content_bottom"></div>
</div>

</div>
</div>
</div>