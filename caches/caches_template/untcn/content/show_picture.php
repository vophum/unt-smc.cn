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
                 
               <div id="Product">
        	<h1><?php echo $title;?></h1>
            <div class="tool"><a name="pic"></a>
        <a class="up fl" href="javascript:;" title="上一张" onclick="showpic('pre')"><span>上一张</span></a><a class="next fr" href="javascript:;" onclick="showpic('next')" title="下一张"><span>下一张</span></a></div>
            <div class="baseinfo">
                <dt>
      <div class="big-pic" style="height:200px;">
		<div id="big-pic"></div>
    	<div class="photo_prev"><a id="photoPrev" title="&lt;上一页" class="btn_pphoto" target="_self" hidefocus="true" href="javascript:;" onclick="showpic('pre');"></a></div>
        <div class="photo_next"><a id="photoNext" title="下一页&gt;"class="btn_nphoto" target="_self" hidefocus="true" href="javascript:;" onclick="showpic('next')"></a></div>
        <a href="javascript:;" class="max" onclick="showpic('big');">查看原图</a>
        
        <div id="endSelect" style="display: none;">
			<div id="endSelClose" onclick="$('#endSelect').hide();"></div>
			<div class="bg"></div>
			<div class="E_Cont">
				<p>您已经浏览完所有图片</p>
				<p><a id="rePlayBut" href="javascript:void(0)" onclick="showpic('next', 1);"></a><a id="nextPicsBut" href="<?php echo $next_page['url'];?>"></a></p>	
			</div>
		</div>
        
        <div class="list-pic">
         <a href="javascript:;" onclick="showpic('pre')" class="pre-bnt"><span></span></a>
		<div class="cont" style="position:relative">
			<ul class="cont picbig" id="pictureurls"  style="position:absolute">
			<?php $n=1; if(is_array($pictureurls)) foreach($pictureurls AS $pic_k => $r) { ?>
			 <li><div class="img-wrap"><a href="javascript:;" hidefocus="true"><img src="<?php echo thumb($r[url], 100, 137, 0);?>" alt="<?php echo $r['alt'];?>" rel="<?php echo $r['url'];?>"/></a></div></li>
			<?php $n++;}unset($n); ?>
			</ul>
		</div>
        <a href="javascript:;" onclick="showpic('next')" class="next-bnt"><span></span></a>
        </div>
        
    </div>
                
                </dt>
                <dd>
                <?php if($description) { ?><div class="summary" ><?php echo $description;?></div><?php } ?>
                <div class="add-to"><script language='javascript' src='<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=13&action=js&siteid=1'></script></div>
                </dd>
            </div>
			
            <div class="clear"></div>
			<div class="product_content">
            <div class="title">产品详情</div>
			<?php if($allow_visitor==1) { ?>
				<?php echo $content;?>
				<!--内容关联投票-->
				<?php if($voteid) { ?><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=vote&c=index&a=show&action=js&subjectid=<?php echo $voteid;?>&type=2"></script><?php } ?>
                
			<?php } else { ?>
				<CENTER><a href="<?php echo APP_PATH;?>index.php?m=content&c=readpoint&allow_visitor=<?php echo $allow_visitor;?>"><font color="red">阅读此信息需要您支付 <B><I><?php echo $readpoint;?> <?php if($paytype) { ?>元<?php } else { ?>点<?php } ?></I></B>，点击这里支付</font></a></CENTER>
			<?php } ?>
			</div>
<?php if($titles) { ?>
<fieldset>
	<legend class="f14">本文导航</legend><ul class="list blue row-2">
<?php $n=1;if(is_array($titles)) foreach($titles AS $r) { ?>
	<li><?php echo $n;?>、<a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
<?php $n++;}unset($n); ?>
</ul>
</fieldset>
<?php } ?>
			<div id="pages" class="text-c"><?php echo $pages;?></div>
            <div class="hot_search">
            <strong>相关热词搜索：</strong><?php $n=1;if(is_array($keywords)) foreach($keywords AS $keyword) { ?><a href="<?php echo APP_PATH;?>index.php?m=content&c=tag&a=lists&tag=<?php echo urlencode($keyword);?>" class="blue"><?php echo $keyword;?></a> 	<?php $n++;}unset($n); ?>
            </div>
            <div class="f14">
                <strong>上一篇：</strong><a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a><br />
                <strong>下一篇：</strong><a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a>
            </div>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=59d3146c936b0bbb61d83c4d89437c20&action=relation&relation=%24relation&id=%24id&catid=%24catid&num=5&keywords=%24rs%5Bkeywords%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'relation')) {$data = $content_tag->relation(array('relation'=>$relation,'id'=>$id,'catid'=>$catid,'keywords'=>$rs[keywords],'limit'=>'5',));}?>
              <?php if($data) { ?>
                <div class="related">
                    <h5 class="blue">延伸阅读：</h5>
                    <ul class="list blue lh24 f14">
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li>·<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a><span>(<?php echo date('Y-m-d',$r[inputtime]);?>)</span></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </div>
              <?php } ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          <div class="bk15"></div>
            <?php if(module_exists('mood')) { ?><script type="text/javascript" src="<?php echo APP_PATH;?>index.php?m=mood&c=index&a=init&id=<?php echo id_encode($catid,$id,$siteid);?>"></script><?php } ?>
      </div>
      <div class="Article-Tool">
          分享到：
		  <img src="http://v.t.qq.com/share/images/s/weiboicon16.png" style="padding-bottom:3px;" onclick="postToWb();" class="cu" title="分享到腾讯微博"/><script type="text/javascript">
	function postToWb(){
		var _t = encodeURI(document.title);
		var _url = encodeURIComponent(document.location);
		var _appkey = encodeURI("cba3558104094dbaa4148d8caa436a0b");
		var _pic = encodeURI('<?php echo $thumb;?>');
		var _site = '';
		var _u = 'http://v.t.qq.com/share/share.php?url='+_url+'&appkey='+_appkey+'&site='+_site+'&pic='+_pic+'&title='+_t;
		window.open( _u,'', 'width=700, height=680, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );
	}
</script>
          <script type="text/javascript">document.write('<a href="http://v.t.sina.com.cn/share/share.php?url='+encodeURIComponent(location.href)+'&appkey=3172366919&title='+encodeURIComponent('<?php echo new_addslashes($title);?>')+'" title="分享到新浪微博" class="t1" target="_blank">&nbsp;</a>');</script>
		  <script type="text/javascript">document.write('<a href="http://www.douban.com/recommend/?url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent('<?php echo new_addslashes($title);?>')+'" title="分享到豆瓣" class="t2" target="_blank">&nbsp;</a>');</script>
		  <script type="text/javascript">document.write('<a href="http://share.renren.com/share/buttonshare.do?link='+encodeURIComponent(location.href)+'&title='+encodeURIComponent('<?php echo new_addslashes($title);?>')+'" title="分享到人人" class="t3" target="_blank">&nbsp;</a>');</script>
		  <script type="text/javascript">document.write('<a href="http://www.kaixin001.com/repaste/share.php?rtitle='+encodeURIComponent('<?php echo new_addslashes($title);?>')+'&rurl='+encodeURIComponent(location.href)+'&rcontent=" title="分享到开心网" class="t4" target="_blank">&nbsp;</a>');</script>
		  <script type="text/javascript">document.write('<a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='+encodeURIComponent(location.href)+'" title="分享到QQ空间" class="t5" target="_blank">&nbsp;</a>');</script>
      
	  <span id='favorite'>
		<a href="javascript:;" onclick="add_favorite('<?php echo addslashes($title);?>');" class="t6">收藏</a>
	  </span>

	  </div>

       </div>
    </div>
        </div>
   	  </div>
  <!----rihgt end--->

    </div>
    <div id="load_pic" style="display:none;" rel="<?php echo IMG_PATH;?>msg_img/loading_d.gif">
 </div>
 <script language="JavaScript">
<!--
	function add_favorite(title) {
		$.getJSON('<?php echo APP_PATH;?>api.php?op=add_favorite&title='+encodeURIComponent(title)+'&url='+encodeURIComponent(location.href)+'&'+Math.random()+'&callback=?', function(data){
			if(data.status==1)	{
				$("#favorite").html('收藏成功');
			} else {
				alert('请登录');
			}
		});
	}
//-->
</script>
<script type="text/javascript" src="<?php echo JS_PATH;?>show_picture.js"></script>
<script type="text/javascript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("content","footer"); ?>