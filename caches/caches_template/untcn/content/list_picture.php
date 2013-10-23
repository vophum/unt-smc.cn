<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div id="content" class="main">
   <!----left begin--->
    <div id="bd_leftg">
    
    <?php include template("content","left"); ?>
   
    </div>
    <!----left end--->
    
     <div id="bd_rightg">
        <div class="rightg_content">
        <?php include template("content","position"); ?>
       		 <div class="content2">
                 <div id="content" class="pd">
                 
               <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=11e982198282a77f17ebf8d7a1dede5e&action=lists&catid=%24catid&num=10&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                     <dl class="list">
                     <dt><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><img alt="<?php echo $r['catname'];?>" src="<?php echo thumb($r[thumb],110,80);?>" width="110"  height="80"/></a></dt>
                      <dd>
                      <h3><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo str_cut($r[title],28);?></a></h3>
                       <div class="description"><?php echo str_cut($r[description],'480');?></div>
                       <div class="more"><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>">>>详情</a></div>
                      </dd>
                         </dl>
                   <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <div id="pages" class="text-c"><?php echo $pages;?></div>  
                </div>
            </div>
        </div>
   	  </div>
  <!----rihgt end--->

    </div>
 </div>
<?php include template("content","footer"); ?>


