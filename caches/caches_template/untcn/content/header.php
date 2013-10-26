<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo SKIN_PATH;?>untcn/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo SKIN_PATH;?>untcn/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
<script>
function addToFavorite()
{
   if (document.all)
   {
      window.external.addFavorite('<?php echo siteurl($siteid);?>',"UNT-SMC.CN &ndash;");
   }
   else if (window.sidebar)
   {
      window.sidebar.addPanel("UNT-SMC.CN &ndash;", '<?php echo siteurl($siteid);?>', "");
   }else{
       alert("您的浏览器不支持点击收藏，请按快捷键 Ctrl+D 收藏UNT-SMC");
    }
   
}
</script>


</head>
<body>
<div class="header">

<div class="head">
  	<div class="logo"><a href="<?php echo siteurl($siteid);?>/"><img src="<?php echo IMG_PATH;?>v9/logo.gif" /></a></div>
    <div class="top">
	<div class="top_a">
    <a  href="javascript:addToFavorite()" rel="nofollow" title="加入收藏" class="STYLE3">加入收藏</a>
    &nbsp;|&nbsp;
    <a href="http://www.unt-smc.com" title="ENGLISH" class="STYLE3">ENGLISH<img src="<?php echo SKIN_PATH;?>untcn/images/2d2.gif"></a>
     &nbsp;|&nbsp;
    <a href="http://www.unt-smc.cn" title="中文版" class="STYLE3">中文版<img src="<?php echo SKIN_PATH;?>untcn/images/2d2.gif"></a>
	</div>
	
 </div>
</div>	
  
<!---nav begin---->
    <div id="nav">
    <div class="navsearch">
         <form action="<?php echo APP_PATH;?>index.php" method="get" target="_blank">
            <input type="hidden" name="m" value="search"/>
            <input type="hidden" name="c" value="index"/>
            <input type="hidden" name="a" value="init"/>
            <input type="hidden" name="typeid" value="3" id="typeid"/>
            <input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
           <div class="input">搜索 <input type="text" name="q" id="q" onfocus="if(this.value=='请查询值') {this.value=''}" onblur="if(this.value=='') this.value='请查询值'"/></div>
            <div  class="inputimg"><input type="submit" name="submit" style="width:37px; height:22px;" value="搜 索"/></div>
        </form>
    </div>
     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
        	<ul  id="navmenu">
			<li><a href="<?php echo siteurl($siteid);?>"><span>首页</span></a></li>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			 <li><img src="<?php echo SKIN_PATH;?>untcn/images/index_new_55.jpg" /></li>
			<li><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a></li>
			<?php $n++;}unset($n); ?>
            </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	 <?php echo runhook('glogal_menu')?>
    </div>
    <!---nav end---->
     <div class="banner"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=1"></script></div>
</div>