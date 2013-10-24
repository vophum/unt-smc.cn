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
                      <?php echo $content;?>
                </div>
            </div>
        </div>
   	  </div>
  <!----rihgt end--->

    </div>
 </div>
<?php include template("content","footer"); ?>