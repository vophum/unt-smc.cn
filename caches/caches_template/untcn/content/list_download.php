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
                 
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f3ce1cc9d867ab39bce847733fa8c22b&action=category&catid=%24catid&num=0&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                     <dl class="category">
                     <dt><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><img alt="<?php echo $r['catname'];?>" src="<?php echo thumb($r[image],200,150);?>" width="200"  height="150"/></a></dt>
                      <dd>
                      <h3><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a></h3>
                       <div class="description"><?php echo str_cut($r[description],'580');?></div>
                       <div class="more"><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>">>>详情</a></div>
                      </dd>
                         </dl>
                   <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        
                </div>
            </div>
        </div>
   	  </div>
  <!----rihgt end--->

    </div>
 </div>
<?php include template("content","footer"); ?>


