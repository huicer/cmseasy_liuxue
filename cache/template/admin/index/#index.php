<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php if (!defined('ADMIN')) exit('Can\'t Access !'); ?>
 
<style>

.i_box {
width:100%;
border:1px solid #ccc;
border-radius: 3px;  
background:white;
text-align:left;
}
.i_box ul {padding:20px 10px;}
.i_box ul li {
height:38px;line-height:38px;
}
.i_box h5 {height:38px;
line-height:38px;
margin:0px;
padding:0px 20px;
background:#eee;
font-size:1.0em;
}



.quick-btn {min-height:83px; margin:0px 10px 35px 5px; padding:5px 0px; background: #d9edf7;border:1px solid #bce8f1;
    color: #3a87ad; border-radius:2px; text-align:center;}

.quick-btn a {display:block; height:83px; line-height:122px; color: #3a87ad;background:url(<?php echo $skin_path;?>/images/q-1.png) center 12px no-repeat;}
.quick-btn a.q2 {background:url(<?php echo $skin_path;?>/images/q-2.png) center 8px no-repeat;
}
.quick-btn a.q3 {background:url(<?php echo $skin_path;?>/images/q-3.png) center 8px no-repeat;
}
.quick-btn a.q4 {margin:0px; background:url(<?php echo $skin_path;?>/images/q-4.png) center 8px no-repeat;
}
.quick-btn a.q5 {background:url(<?php echo $skin_path;?>/images/q-5.png) center 8px no-repeat;
}

.quick-btn:hover {background:#c4e3f5;}



.list-group-item {margin:0px 10px 10px 10px; }
.list-group-item:last-child {border-radius:2px; }

a.list-group-item-info {border-color: #bce8f1;
    color: #3a87ad;
}

a.list-group-item-warning {
    border-color: #fbeed5;
    color: #c09853;
}

a.list-group-item-success {
    border-color: #d6e9c6;
    color: #468847;
}

a.list-group-item-danger {
    border-color: #eed3d7;
    color: #b94a48;
}

@media(max-width:468px) {
a.list-group-item-success,a.list-group-item-danger {
margin-top:10px;
}
.system-info,.i_table_b,.information {display:none;}
}


.table {margin:0px;}
.table a.btn {margin:0px 10px 0px 0px;padding:3px 5px; background: #4993c6; color:white; font-size:0.8em; }
.website-a {font-weight:bold;padding:0px 10px 0px 0px;}

.i_links_bg {line-height:200%; border-top:5px solid #fffbc1; padding:15px 20px;background:#fffcdf;}
.i_table_b ul {padding:12px 20px;}
.i_table_b strong {padding:3px 10px; background: #d9edf7;border:1px solid #bce8f1;color: #3a87ad; border-radius:2px;}


.blank25 {clear:both; height:25px;}

</style>

<div class="blank20"></div>

<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <span class="glyphicon glyphicon-warning-sign"></span>	 欢迎使用	<strong>CmsEasy</strong> 易通企业网站系统，通过后台系统您可以轻松管理网站内容。在感谢您使用的同时，我们为您准备了超过一百套的免费网站模板供用户选择使用，点击左侧导航中的	[	模板	]	&rarr;	[	<a href="<?php echo $base_url;?>/index.php?case=template&act=downlist&admin_dir=<?php echo get('admin_dir');?>&site=default">更多模板</a>	]	进行选择！</a>
</div>


<div class="row" style="padding:0px 3px 0px 5px;">

<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3" style="padding:0px;">
<a title="点击查看" href="<?php echo $base_url;?>/index.php?case=table&act=list&table=archive&admin_dir=<?php echo get('admin_dir');?>&site=default" class="list-group-item list-group-item-info"><span class="glyphicon glyphicon-file"></span> 内容	<?php echo $archivenum;?></a>
</div>



<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3" style="padding:0px;">
<a title="点击查看" href="<?php echo $base_url;?>/index.php?case=table&act=list&table=comment&admin_dir=<?php echo get('admin_dir');?>&site=default" class="list-group-item list-group-item-warning">
<span class="glyphicon glyphicon-comment"></span> 评论	<?php echo $commentnum;?></a>
</div>

<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3" style="padding:0px;">
<a title="点击查看" href="<?php echo $base_url;?>/index.php?case=table&act=list&table=guestbook&admin_dir=<?php echo get('admin_dir');?>&site=default" class="list-group-item list-group-item-success"><span class="glyphicon glyphicon-list-alt"></span> 留言	<?php echo $guestbooknum;?></a>
</div>

<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3" style="padding:0px;">
<a title="点击查看" href="<?php echo $base_url;?>/index.php?case=table&act=list&table=orders&admin_dir=<?php echo get('admin_dir');?>&site=default" class="list-group-item list-group-item-danger">
<span class="glyphicon glyphicon-shopping-cart"></span> 订单	<?php echo $ordernum;?></a>
</div>

</div>

<div class="blank25"></div>

<div class="row">

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
<div class="row quick-box">
<div style="padding:0px 0px 0px 10px;">

<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
<div class="quick-btn">
<a href="<?php echo $base_url;?>/index.php?case=config&act=system&set=site&admin_dir=<?php echo get('admin_dir');?>&site=default" class="q1">网站设置</a>
</div>
</div>

<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
<div class="quick-btn">
<a href="<?php echo $base_url;?>/index.php?case=table&act=add&table=archive&admin_dir=<?php echo get('admin_dir');?>&site=default" class="q2">添加内容</a>
</div>
</div>

<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
<div class="quick-btn">
<a href="<?php echo $base_url;?>/index.php?case=table&act=list&table=orders&admin_dir=<?php echo get('admin_dir');?>&site=default" class="q3">订单管理</a>
</div>
</div>

<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
<div class="quick-btn">
<a href="<?php echo $base_url;?>/index.php?case=cache&act=make_show&admin_dir=<?php echo get('admin_dir');?>&site=default" class="q4">生成HTML</a>
</div>
</div>

<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
<div class="quick-btn">
<a href="<?php echo $base_url;?>/index.php?case=config&act=remove&admin_dir=<?php echo get('admin_dir');?>&site=default" class="q5">更新缓存</a>
</div>
</div>

<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
<div class="quick-btn">
<a href="<?php echo $base_url;?>/index.php?case=table&act=list&table=category&admin_dir=<?php echo get('admin_dir');?>&site=default" class="q6">栏目管理</a>
</div>
</div>

<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
<div class="quick-btn">
<a href="<?php echo $base_url;?>/index.php?case=table&act=list&table=type&admin_dir=<?php echo get('admin_dir');?>&site=default" class="q7">分类管理</a>
</div>
</div>

<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
<div class="quick-btn">
<a href="<?php echo $base_url;?>/index.php?case=table&act=list&table=usergroup&admin_dir=<?php echo get('admin_dir');?>&site=default" class="q8">用户组管理</a>
</div>
</div>

</div>
</div>
</div>

<div class="system-info col-xs-12 col-sm-6 col-md-6 col-lg-6">

<table class="table table-striped table-bordered table-hover">
<tr>
<td width="25%" align="right">服务器环境：</td>
<td width="75%"><?php echo $_SERVER['SERVER_SOFTWARE'];?> php:<?php echo PHP_VERSION;?> <?php echo config::get('database','type').':'.$dbversion;?></td>
</tr>

<tr>
<td align="right">服务器IP：</td>
<td><?php echo $_SERVER['SERVER_ADDR']?$_SERVER['SERVER_ADDR']:$_SERVER['LOCAL_ADDR'];?></td>
</tr>

<tr>
<td align="right">当前网站语言：</td>
<td><?php echo config::get('lang_type');?></td>
</tr>

<tr>
<td align="right">集团网站：</td>
<td>
<?php if(is_array(getwebsite()))
foreach(getwebsite() as $d) { ?><a href="<?php echo $d['addr'];?>" target="_blank" class="website-a"><span><?php echo $d['name'];?></span></a><?php } ?>
</td>
</tr>

<tr>
<td align="right">系统版本：</td>
<td><span><?php echo _VERSION;?></span>&nbsp;
&nbsp;<a href="http://info.cmseasy.cn/help/checkver.php?ver=<?php echo _VERNUM;?>" target="_blank" class="btn">检查更新</a></td>
</tr>
</table>


</div>
</div>


<div class="clearfix"></div>

<div class="row">

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 information">
<div class="i_box" style="margin:0px 0px 0px 2px;">
<h5>官方信息，以及优惠活动！</h5>

<div class="i_links_bg">
[ 授权版本：<a><?php echo htmlspecialchars_decode(stripslashes(session::get('passinfo')));?></a> ]<br />
[ 联系客服： <span id="__buy"><a href="tencent://Message/?Uin=<?php echo get('871148347');?>&websiteName=<?php echo get('site_url');?>=&Menu=yes" target="_blank"><span style="color:green;">购买咨询</span></a></span> ]<br />
[ 开发团队：CmsEasy Team ]<br />
</div>
</div>

</div>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 i_table_b">
<div class="i_box ">
<h5>使用指南</h5>
<ul>
<li><strong>设置</strong>&nbsp;&nbsp;设置基本信息、网站语言、底部信息等 </li>
<li><strong>模板</strong>&nbsp;&nbsp;选择网站模板风格</li>
<li><strong>栏目</strong>&nbsp;&nbsp;配置中设置网站栏目及相关参数</li>
<li><strong>营销</strong>&nbsp;&nbsp;设置优化推广及其他信息</li>
<li><strong>内容</strong>&nbsp;&nbsp;中添加网站内容</li>
</ul>

</div>
</div>

</div>
