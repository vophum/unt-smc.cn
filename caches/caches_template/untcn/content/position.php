<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="rightg_title">
<div class="title"><h2><?php echo $CATEGORYS[$catid]['catname'];?></h2></div>
<div class="position">
       <a href="<?php echo siteurl($siteid);?>">首页</a> > <?php echo catpos($catid);?>
</div>
</div>