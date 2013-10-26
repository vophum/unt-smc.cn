<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
    <div class="box1"> 
        <div class="title2"> 
        <div class="chinese">产品中心</div> 
        </div> 
        <div class="content"> 
        <script type="text/javascript">
        <!--//---------------------------------+
        //  Developed by lain2k 
        //  Visit http://code.maimb.net for this script and more.
        //  This notice MUST stay intact for legal use
        // --------------------------------->
        $(document).ready(function()
        {
            $(".parent").click(function()
            {
                $(this).addClass('open').removeClass('close').next("dd.child").show().siblings("dd.child").hide();
                $(this).siblings().removeClass('open').addClass('close');
            });
        
            //预先打开 id为p1的菜单
            $("#p1").addClass('open').removeClass('close').next("dd.child").show().siblings("dd.child").hide();
        
        
        
        });
        </script>
        <dl id="leftmenu" class="treemenu mb20">
        <!--只展开当前栏目所在一级栏目下的分类-->
        
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cd9cdfa90d9322648ac5c94f7423f898&action=category&catid=6&num=0&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'6','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		     <dt class="parent" <?php if($catid==6 || $catid==7) { ?>id="p1"<?php } ?>><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a></dt>
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f6772d9f01b300a8da1172cd23a790dd&action=lists&catid=%24r%5Bcatid%5D&num=10&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'order'=>'id DESC','limit'=>'10',));}?>
              <dd class="child">
                <ul>
                 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img alt="<?php echo $arc['title'];?>" src="<?php echo thumb($r[thumb],40,29);?>" width="40"  height="29"/></a><a title="<?php echo $arc['title'];?>" target="_blank" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],28);?></a></li>
                 <?php $n++;}unset($n); ?>
                </ul> 
             </dd>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
         <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </dl>
        </div> 
</div> 


 <div class="box1"> 
    	   <div class="title2"> <div class="chinese">联系我们</div></div> 
           <div class="content"> 
               <div class="p1g"> 
                  <ul class="ul2g"> <li>地 址：深圳市优耐特自动化有限公司</li>
<li>电 话：0755-27103957</li>
<li>传 真： 0755-22639723</li> 
<li>邮 箱： <a href="mailto: yanglw861908@163.com"> yanglw861908@163.com</a></li> </ul>
               </div>
           </div>
    </div>