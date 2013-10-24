<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<?php include template("content","header"); ?>
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
                              
                <table cellspacing="1" cellpadding="0" align="center" class="down_info">
                    <caption>
                    <h5><?php echo $title;?></h5>
                    </caption>
                    <tbody><tr>
                      <th>授权形式：</th>
                      <td><?php echo $copytype;?></td>
                      <td width="260" rowspan="7" align="center" valign="middle"><?php if($thumb) { ?><img src="<?php echo $thumb;?>" width="250" height="220" /><?php } ?></td>
                    </tr>
                    <tr>
                      <th>更新时间：</th>
                      <td><?php echo $updatetime;?></td>
                    </tr>
                    <tr>
                      <th>软件语言：</th>
                      <td><?php echo $language;?></td>
                    </tr>
                    <tr>
                      <th>软件平台：</th>
                      <td><?php echo $systems;?></td>
                    </tr>
                    <tr>
                      <th>软件类别：</th>
                      <td> <?php echo $classtype;?></td>
                    </tr>
                    <tr>
                      <th>文件大小：</th>
                      <td> <?php echo $filesize;?></td>
                    </tr>
                    <tr>
                      <th>评论等级：</th>
                      <td class="c_orange"> <?php echo $stars;?></td>
                    </tr>
            <tr>
                      <th>浏览次数：</th>
                      <td colspan="2"><span id="hits"></span>（今日：<span id="todaydowns"></span>，本周：<span id="weekdowns"></span>，本月：<span id="monthdowns"></span>）</td>
                    </tr>
                  </tbody></table>
                  <h5 class="tit">软件简介</h5>
                  <div class="down_intro"><h4 class="tits"><?php echo $title;?></h4><?php echo $content;?></div>
                  <h5 class="tit">下载地址</h5>
                  <div class="down_address divl wrap">
                        <ul class="l xz_a wrap blue">
                        <?php $n=1;if(is_array($downfile)) foreach($downfile AS $r) { ?>
                            <li><?php echo $r;?></li>
                        <?php $n++;}unset($n); ?>
                        <?php $n=1;if(is_array($downfiles)) foreach($downfiles AS $r) { ?>
                            <li><?php echo $r;?></li>
                        <?php $n++;}unset($n); ?>			
                        </ul>
                    <div class="ad"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=12"></script></div>
                  </div>
                  <div class="Article-Tool">分享到：
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
                  </div>
                  </div>
                  </div>
                                      
                </div>
            </div>
        </div>
   	  </div>
  <!----rihgt end--->

    </div>
 </div>
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("content","footer"); ?>



