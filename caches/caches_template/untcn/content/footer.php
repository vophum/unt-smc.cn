<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="clear"></div>
<div id="footer" class="footer">
    	<div class="bottom_nav">
    	  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
       <ul id="bottom_navmenu"> 
			<li><a href="<?php echo siteurl($siteid);?>"><span>首页</span></a></li>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			 <li><img src="<?php echo SKIN_PATH;?>untcn/images/index_new_55.jpg" /></li>
			<li><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a></li>
			<?php $n++;}unset($n); ?>
            </ul>
           <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

    	</div>
        <div class="bottom_cprt"> <a title="<?php echo get('sitename');?>" href="<?php echo siteurl($siteid);?>"><?php echo site($name);?></a> All Rights Reserved. </div>
    </div><!--fooder部结束-->
</div>
</body>
</html>