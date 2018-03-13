<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>
<div class="box box2">
<div class="box2_t"></div>
<div class="box2_b"></div>
<div class="left">
<?php echo template('left.html'); ?>
</div>
<div class="right">
<div class="right_t"></div>
<div class="right_b"></div>
<div class="title20">
<?php echo template('position.html'); ?>
<h5><?php echo $category[$catid]['catname'];?></h5><span><?php echo $category[$catid]['htmldir'];?></span>

</div>
<div id="content">


<div class="blank20"></div>
<!-- 栏目标题结束 -->

<!-- 内容列表开始 -->
<?php if(is_array($archives))
foreach($archives as $i => $arc) { ?>
<div class="news_text_pic">
<div class="list_text_pic"><div class="img-wrap"><a title="<?php echo $arc['stitle'];?>" target="_blank" href="<?php echo $arc['url'];?>"><?php if($arc['sthumb']) { ?><img alt="<?php echo $arc['stitle'];?>" src="<?php echo $arc['thumb'];?>" /><?php } else { ?><img src="<?php echo config::get('onerror_pic');?>" /><?php } ?></a></div></div>
<div class="down_text">
<h5><span class="date"><?php echo $arc['adddate'];?></span><a  style="color:<?php echo $arc['color'];?>;" title="<?php echo $arc['stitle'];?>" href="<?php echo $arc['url'];?>"><?php echo $arc['title'];?></a></h5>
<p><?php echo cut(strip_tags($arc['introduce']),80);?>…<a title="<?php echo $arc['stitle'];?>" href="<?php echo $arc['url'];?>">[<?php echo lang(more);?>]</a></p>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<?php } ?>
<!-- 内容列表结束 -->

<div class="blank30"></div>

<!-- 内容列表分页开始 -->
<?php if(isset($pages)) { ?>
<?php echo category_pagination($catid);?>
<?php } ?>
<!-- 内容列表分页结束 -->

<div class="blank30"></div>
<a title="<?php echo lang(gotop);?>" href="#" class="clear floatright"><img alt="<?php echo lang(gotop);?>" src="<?php echo $skin_url;?>/images/gotop.gif"></a>
<div class="blank30"></div>
<div class="clear"></div>
</div>
</div>
<!-- 右侧结束 -->

<div class="c_bottom"></div>
<div class="clear"></div>
</div>
<!-- 中部结束 -->
<?php echo template('footer.html'); ?>