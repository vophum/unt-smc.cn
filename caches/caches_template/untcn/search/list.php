<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php $result = $data; ?>
<?php include template("search","header"); ?>
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
                  <?php $n=1; if(is_array($result)) foreach($result AS $i => $r) { ?>
                 <dl class="list">
                 <dt>  <?php if($r['thumb']) { ?><a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],110,90);?>" width="110" height="90" /></a><?php } ?></dt>
                  <dd>
                  <h3><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><?php if($r['posids']) { ?><img src="<?php echo IMG_PATH;?>icon/small_elite.gif"><?php } ?></h3>
                   <div class="description"><?php echo str_cut($r[description],'480','...');?></div>
                    <div class="adds fl"><?php echo L('create_time');?><?php echo format::date($r[inputtime], 1);?></div><div class="more"><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>">>><?php echo L('more');?></a></div>
                  </dd>
                     </dl>
                <?php $n++;}unset($n); ?>
                <?php if(empty($result)) { ?><?php echo L('no_result');?><?php } ?>
            
                <div id="pages" class="text-c mg_t20"><?php echo $pages;?></div>     
                </div>
            </div>
        </div>
   	  </div>
  <!----rihgt end--->

    </div>
 </div>
 
<script type="text/javascript" src="<?php echo JS_PATH;?>search_history.js"></script>
<?php if($setting['suggestenable']) { ?>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.suggest.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_suggest.js"></script>
<?php } ?>
<?php include template("content","footer"); ?>


