<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
 </div>
 </div></div>
<?php if(empty($topic) || ($topic['usefooter'])) { $focusid = getfocus_rand($_G[basescript]);?><?php if($focusid !== null) { $focus = $_G['cache']['focus']['data'][$focusid];?><?php $focusnum = count($_G['setting']['focus'][$_G[basescript]]);?><div class="focus" id="sitefocus">
<div class="bm">
<div class="bm_h cl">
<a href="javascript:;" onclick="setcookie('nofocus_<?php echo $_G['basescript'];?>', 1, <?php echo $_G['cache']['focus']['cookie'];?>*3600);$('sitefocus').style.display='none'" class="y" title="�ر�">�ر�</a>
<h2>
<?php if($_G['cache']['focus']['title']) { ?><?php echo $_G['cache']['focus']['title'];?><?php } else { ?>վ���Ƽ�<?php } ?>
<span id="focus_ctrl" class="fctrl"><img src="<?php echo IMGDIR;?>/pic_nv_prev.gif" alt="��һ��" title="��һ��" id="focusprev" class="cur1" onclick="showfocus('prev');" /> <em><span id="focuscur"></span>/<?php echo $focusnum;?></em> <img src="<?php echo IMGDIR;?>/pic_nv_next.gif" alt="��һ��" title="��һ��" id="focusnext" class="cur1" onclick="showfocus('next')" /></span>
</h2>
</div>
<div class="bm_c" id="focus_con">
</div>
</div>
</div><?php $focusi = 0;?><?php if(is_array($_G['setting']['focus'][$_G['basescript']])) foreach($_G['setting']['focus'][$_G['basescript']] as $id) { ?><div class="bm_c" style="display: none" id="focus_<?php echo $focusi;?>">
<dl class="xld cl bbda">
<dt><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2" target="_blank"><?php echo $_G['cache']['focus']['data'][$id]['subject'];?></a></dt>
<?php if($_G['cache']['focus']['data'][$id]['image']) { ?>
<dd class="m"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" target="_blank"><img src="<?php echo $_G['cache']['focus']['data'][$id]['image'];?>" alt="<?php echo $_G['cache']['focus']['data'][$id]['subject'];?>" /></a></dd>
<?php } ?>
<dd><?php echo $_G['cache']['focus']['data'][$id]['summary'];?></dd>
</dl>
<p class="ptn cl"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2 y" target="_blank">�鿴 &raquo;</a></p>
</div><?php $focusi ++;?><?php } ?>
<script type="text/javascript">
var focusnum = <?php echo $focusnum;?>;
if(focusnum < 2) {
$('focus_ctrl').style.display = 'none';
}
if(!$('focuscur').innerHTML) {
var randomnum = parseInt(Math.round(Math.random() * focusnum));
$('focuscur').innerHTML = Math.max(1, randomnum);
}
showfocus();
var focusautoshow = window.setInterval('showfocus(\'next\', 1);', 5000);
</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<div class="focus patch" id="patch_notice"></div>
<?php } ?><?php echo adshow("footerbanner/wp a_f/1");?><?php echo adshow("footerbanner/wp a_f/2");?><?php echo adshow("footerbanner/wp a_f/3");?><?php echo adshow("float/a_fl/1");?><?php echo adshow("float/a_fr/2");?><?php echo adshow("couplebanner/a_fl a_cb/1");?><?php echo adshow("couplebanner/a_fr a_cb/2");?><?php echo adshow("cornerbanner/a_cn");?><?php if(!empty($_G['setting']['pluginhooks']['global_footer'])) echo $_G['setting']['pluginhooks']['global_footer'];?>

    
    
    
<!-- footer begin -->
<div id="ft" class="footer qyer_footer"> 
    
    <div class="qyer_footerBox">
<ul class="qyer_footer_about">
<li>
<dl>
<dt>��������</dt>
<dd><a target="_blank" href="/misc.php?mod=faq">��վ���</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq">��ϵ����</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq">��������</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq">�������</a></dd>
</dl>
</li>
<li>
<dl>
<dt>��������</dt>
<dd><a target="_blank" href="/misc.php?mod=faq">��Ƹְλ</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq">��������</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq">������</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq">��������</a></dd>
</dl>
</li>
<li>
<dl>
<dt>��վ����</dt>
<dd><a target="_blank" href="/misc.php?mod=faq&amp;action=faq&amp;id=1">��Ա����</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq&amp;action=faq&amp;id=15">����ָ��</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq&amp;action=faq&amp;id=6&amp;messageid=34">��Ȩ����</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq&amp;action=faq&amp;id=6">��������</a></dd>
</dl>
</li>
<li>
<dl>
<dt>��������</dt>
<dd><a target="_blank" href="/misc.php?mod=faq&amp;action=faq&amp;id=10">������·</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq&amp;action=faq&amp;id=15">ʹ�ð���</a></dd>
<dd><a target="_blank" href="/forum.php?mod=forumdisplay&amp;fid=106">����Ͷ��</a></dd>
<dd><a target="_blank" href="/">��վ��ͼ</a></dd>
</dl>
</li>
<li>
<dl>
<dt>��ע����</dt>
<dd class="qyer_footer_attention"><img width="80" border="0" height="50" alt="" src="template/travel_linzi/style/icon_attention.png">
<map id="Map_go2att" name="Map_go2att">
<area data-bn-ipg="foot-concern-1" onclick="_gaq.push(['_trackEvent','outlink','buttomlink','weibo',1]);" title="#" alt="#" rel="nofollow" target="_blank" href="#" coords="0,0,20,20" shape="rect">
<area data-bn-ipg="foot-concern-2" onclick="_gaq.push(['_trackEvent','outlink','buttomlink','flickr',1]);" title="#" alt="#" rel="nofollow" target="_blank" href="#" coords="30,0,50,20" shape="rect">
<area data-bn-ipg="foot-concern-3" onclick="_gaq.push(['_trackEvent','outlink','buttomlink','renren',1]);" title="#" alt="#" rel="nofollow" target="_blank" href="#" coords="60,0,80,20" shape="rect">
<area data-bn-ipg="foot-concern-4" onclick="_gaq.push(['_trackEvent','outlink','buttomlink','douban',1]);" title="#" alt="#" rel="nofollow" target="_blank" href="#" coords="0,30,20,50" shape="rect">
<area data-bn-ipg="foot-concern-5" onclick="_gaq.push(['_trackEvent','outlink','buttomlink','facebook',1]);" title="#" alt="#" rel="nofollow" target="_blank" href="#" coords="30,30,50,50" shape="rect">
<area data-bn-ipg="foot-concern-6" onclick="_gaq.push(['_trackEvent','outlink','buttomlink','twitter',1]);" title="#" alt="#" rel="nofollow" target="_blank" href="#" coords="60,30,82,50" shape="rect">
</map>
</dd>
</dl>
</li>
</ul>
        <div class="qyer_footer_appStore"><a target="_blank" href="app.php"><img width="118" height="39" title="App Store" alt="App Store" src="template/travel_linzi/style/appstore.png"></a></div>
</div>
<p>
    <?php if(is_array($_G['setting']['footernavs'])) foreach($_G['setting']['footernavs'] as $nav) { if($nav['available'] && ($nav['type'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1)) ||
                    !$nav['type'] && ($nav['id'] == 'stat' && $_G['group']['allowstatdata'] || $nav['id'] == 'report' && $_G['uid'] || $nav['id'] == 'archiver' || $nav['id'] == 'mobile'))) { ?><?php echo $nav['code'];?><em></em><?php } } ?>
                    <a href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a><em></em>
            <?php if($_G['setting']['icp']) { ?>(<a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $_G['setting']['icp'];?></a>)<em></em><?php } ?>
            <?php if(!empty($_G['setting']['pluginhooks']['global_footerlink'])) echo $_G['setting']['pluginhooks']['global_footerlink'];?>
            <?php if($_G['setting']['statcode']) { ?><?php echo $_G['setting']['statcode'];?><em></em><?php } ?>  
            <?php if($_G['setting']['site_qq']) { ?><a href="http://wpa.qq.com/msgrd?V=3&amp;Uin=<?php echo $_G['setting']['site_qq'];?>&amp;Site=<?php echo $_G['setting']['bbname'];?>&amp;Menu=yes&amp;from=discuz" target="_blank" title="QQ"><img src="<?php echo IMGDIR;?>/site_qq.jpg" alt="QQ" style="vertical-align: middle;" /></a><?php } ?> 

</p>
Powered by <a href="http://www.discuz.net" target="_blank">Discuz!</a><?php echo $_G['setting']['version'];?> <a href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a>, All rights reserved.<span></span><a href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a> ��Ȩ����<br/>
</div>
<!-- footer end --> 

    
    <?php updatesession();?><?php if($_G['uid'] && $_G['group']['allowinvisible']) { ?>
<script type="text/javascript">
var invisiblestatus = '<?php if($_G['session']['invisible']) { ?>����<?php } else { ?>����<?php } ?>';
var loginstatusobj = $('loginstatusid');
if(loginstatusobj != undefined && loginstatusobj != null) loginstatusobj.innerHTML = invisiblestatus;
</script>
<?php } ?>
</div>
<?php } if(!$_G['setting']['bbclosed']) { if($_G['uid'] && !isset($_G['cookie']['checkpm'])) { ?>
<script src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && helper_access::check_module('follow') && !isset($_G['cookie']['checkfollow'])) { ?>
<script src="home.php?mod=spacecp&ac=follow&op=checkfeed&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if(!isset($_G['cookie']['sendmail'])) { ?>
<script src="home.php?mod=misc&ac=sendmail&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && !isset($_G['cookie']['checkpatch'])) { ?>
<script src="misc.php?mod=patch&action=checkpatch&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } } if($_GET['diy'] == 'yes') { if(check_diy_perm($topic) && (empty($do) || $do != 'index')) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>portal_diy<?php if(!check_diy_perm($topic, 'layout')) { ?>_data<?php } ?>.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($space['self'] && CURMODULE == 'space' && $do == 'index') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>space_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<script type="text/javascript">patchNotice();</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && empty($_G['cookie']['pluginnotice'])) { ?>
<div class="focus plugin" id="plugin_notice"></div>
<script type="text/javascript">pluginNotice();</script>
<?php } if(!$_G['setting']['bbclosed'] && $_G['setting']['disableipnotice'] != 1 && $_G['uid'] && !empty($_G['cookie']['lip'])) { ?>
<div class="focus plugin" id="ip_notice"></div>
<script type="text/javascript">ipNotice();</script>
<?php } if($_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G['uid']]) || $_G['cookie']['promptstate_'.$_G['uid']] != $_G['member']['newprompt']) && $_GET['do'] != 'notice') { ?>
<script type="text/javascript">noticeTitle();</script>
<?php } if(($_G['member']['newpm'] || $_G['member']['newprompt']) && empty($_G['cookie']['ignore_notice'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>html5notification.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var h5n = new Html5notification();
if(h5n.issupport()) {
<?php if($_G['member']['newpm'] && $_GET['do'] != 'pm') { ?>
h5n.shownotification('pm', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=pm', '<?php echo avatar($_G[uid],small,true);?>', '�µĶ���Ϣ', '���µĶ���Ϣ����ȥ������');
<?php } if($_G['member']['newprompt'] && $_GET['do'] != 'notice') { if(is_array($_G['member']['category_num'])) foreach($_G['member']['category_num'] as $key => $val) { $noticetitle = lang('template', 'notice_'.$key);?>h5n.shownotification('notice_<?php echo $key;?>', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=notice&view=<?php echo $key;?>', '<?php echo avatar($_G[uid],small,true);?>', '<?php echo $noticetitle;?> (<?php echo $val;?>)', '���µ����ѣ���ȥ������');
<?php } } ?>
}
</script>
<?php } userappprompt();?><?php if($_G['basescript'] != 'userapp') { ?>
<div id="scrolltop">
<?php if($_G['fid'] && $_G['mod'] == 'viewthread') { ?>
<span><a href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onclick="showWindow('reply', this.href)" class="replyfast" title="���ٻظ�"><b>���ٻظ�</b></a></span>
<?php } ?>
<span hidefocus="true"><a title="���ض���" onclick="window.scrollTo('0','0')" class="scrolltopa" ><b>���ض���</b></a></span>
<?php if($_G['fid']) { ?>
<span>
<?php if($_G['mod'] == 'viewthread') { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>" hidefocus="true" class="returnlist" title="�����б�"><b>�����б�</b></a>
<?php } else { ?>
<a href="forum.php" hidefocus="true" class="returnboard" title="���ذ��"><b>���ذ��</b></a>
<?php } ?>
</span>
<?php } ?>
</div>
<script type="text/javascript">_attachEvent(window, 'scroll', function () { showTopLink(); });checkBlind();</script>
<?php } if(isset($_G['makehtml'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>html2dynamic.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var html_lostmodify = <?php echo TIMESTAMP;?>;
htmlGetUserStatus();
<?php if(isset($_G['htmlcheckupdate'])) { ?>
htmlCheckUpdate();
<?php } ?>
</script>
<?php } output();?></body>
</html>