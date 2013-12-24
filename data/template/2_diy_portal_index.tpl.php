<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');
0
|| checktplrefresh('data/diy/./template/travel_linzi//portal/index.htm', './template/travel_linzi/common/header.htm', 1387533463, 'diy', './data/template/2_diy_portal_index.tpl.php', 'data/diy/./template/travel_linzi/', 'portal/index')
|| checktplrefresh('data/diy/./template/travel_linzi//portal/index.htm', './template/travel_linzi/common/footer.htm', 1387533463, 'diy', './data/template/2_diy_portal_index.tpl.php', 'data/diy/./template/travel_linzi/', 'portal/index')
|| checktplrefresh('data/diy/./template/travel_linzi//portal/index.htm', './template/travel_linzi/common/header_common.htm', 1387533463, 'diy', './data/template/2_diy_portal_index.tpl.php', 'data/diy/./template/travel_linzi/', 'portal/index')
|| checktplrefresh('data/diy/./template/travel_linzi//portal/index.htm', './template/travel_linzi/common/pubsearchform.htm', 1387533463, 'diy', './data/template/2_diy_portal_index.tpl.php', 'data/diy/./template/travel_linzi/', 'portal/index')
;
block_get('43,40,44,45,46,23,24,25,26,28,27,30,29,32,33,31,34,36,35,39,37,38,53,54,47,48,12,13,14,15,16,56,55,49,50,51,52,57,41,11,19,18,17,22,42,21,20');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> lvyouyizhan.com</title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2013 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_common.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?>    <script src="<?php echo $_G['style']['styleimgdir'];?>/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $_G['style']['styleimgdir'];?>/js/jquery.SuperSlide.js" type="text/javascript"></script>
    <script src="<?php echo $_G['style']['styleimgdir'];?>/js/wbox-min.js" type="text/javascript"></script>  
<script src="<?php echo $_G['style']['styleimgdir'];?>/js/msclass.js" type="text/javascript"></script>
      
    
<script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>', DYNAMICURL = '<?php echo $_G['dynamicurl'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php if(empty($_GET['diy'])) { $_GET['diy'] = '';?><?php } if(!isset($topic)) { $topic = array();?><?php } ?>
    <!--[if IE 6]>
    <script src="<?php echo $_G['style']['styleimgdir'];?>/js/png.js" type="text/javascript" ></script>
     <script type="text/javascript">
     DD_belatedPNG.fix('#top_nav, .search_form, .header h2 img, .c1,.jv_nav li a:hover, .nv .jv_nav li, .nv .jv_nav li.on a, h2 img, .part1 span, .part2 span, .part3 span, .part4 span, .contents, .btmbg, #top_nav h1 a, #con .bottomcover, .i_qq, .i_wb, .wBox_overlayBG, .jv_c5 em, .f_hd, .f_hd, .f_hd_s, .show_next, .show_prev, .food_bt_con a.view, .travel_hd li, .travel_hd li.on, .travel_ico, .home_ico, .bulletin, .stat, .recommend, .r_con_btn, .yd, .pub_tits dt, .slideBox .bd em, .FriendLink, .lside_prev,.lside_next, .yd, .r_con_btn a, .more');
    </script>
    <![endif]-->
<meta name="application-name" content="<?php echo $_G['setting']['bbname'];?>" />
<meta name="msapplication-tooltip" content="<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['setting']['portalstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['1']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G['siteurl'].'portal.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/portal.ico" /><?php } ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['2']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G['siteurl'].'forum.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/bbs.ico" />
<?php if($_G['setting']['groupstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['3']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G['siteurl'].'group.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/group.ico" /><?php } if(helper_access::check_module('feed')) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['4']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G['siteurl'].'home.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/home.ico" /><?php } if($_G['basescript'] == 'forum' && $_G['setting']['archiver']) { ?>
<link rel="archives" title="<?php echo $_G['setting']['bbname'];?>" href="<?php echo $_G['siteurl'];?>archiver/" />
<?php } if(!empty($rsshead)) { ?><?php echo $rsshead;?><?php } if(widthauto()) { ?>
<link rel="stylesheet" id="css_widthauto" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_widthauto.css?<?php echo VERHASH;?>" />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<?php } if($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'home' || $_G['basescript'] == 'userapp') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'portal') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<link rel="stylesheet" type="text/css" id="diy_common" href="data/cache/style_<?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>" />
<?php } ?>
</head>

<body id="nv_<?php echo $_G['basescript'];?>" class="pg_<?php echo CURMODULE;?><?php if($_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)) { ?> <?php echo $cat['bodycss'];?><?php } ?>" onkeydown="if(event.keyCode==27) return false;">
    <div id="append_parent"></div><div id="ajaxwaitid"></div>
    <?php if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
    <?php include template('common/header_diy'); ?>    <?php } ?>
    <?php if(check_diy_perm($topic)) { ?>
    <?php include template('common/header_diynav'); ?>    <?php } ?>
    <?php if(CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)) { ?>
    <?php echo $diynav;?>
    <?php } ?>
    <?php if(empty($topic) || $topic['useheader']) { ?>
    <?php if($_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')) { ?>
    <div class="xi1 bm bm_c">
        请选择 <a href="<?php echo $_G['siteurl'];?>forum.php?mobile=yes">进入手机版</a> <span class="xg1">|</span> <a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>">继续访问电脑版</a>
    </div>
    <?php } ?>
    <?php if($_G['setting']['shortcut'] && $_G['member']['credits'] >= $_G['setting']['shortcut']) { ?>
    <div id="shortcut">
        <span><a href="javascript:;" id="shortcutcloseid" title="关闭">关闭</a></span>
        您经常访问 <?php echo $_G['setting']['bbname'];?>，试试添加到桌面，访问更方便！
        <a href="javascript:;" id="shortcuttip">添加 <?php echo $_G['setting']['bbname'];?> 到桌面</a>

    </div>
    <script type="text/javascript">setTimeout(setShortcut, 2000);</script>
    <?php } ?>



    <!-- 顶部导航 开始 -->
    <div id="top_nav">
    <div class="wp">
        <?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_top'])) echo $_G['setting']['pluginhooks']['global_cpnav_top'];?>
            <h1><a href="./" title="<?php echo $_G['setting']['bbname'];?>" class="fixpng" hidefocus="true"><?php echo $_G['setting']['bbname'];?></a></h1>
            <div id="top_mainnav"> 
                <!-- menu begin -->
                <div class="nav_box">
                    <ul>
                        <?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { ?> 
                        <?php if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
                        <li <?php if($mnid == $nav['navid']) { ?>class="on" <?php } ?><?php echo $nav['nav'];?>></li>
                        <?php } ?> 
                        <?php } ?> 
                        <?php if(!empty($_G['setting']['pluginhooks']['global_nav_extra'])) echo $_G['setting']['pluginhooks']['global_nav_extra'];?>
                    </ul>
                </div>
                <!-- menu end --> 


                <?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra1'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra1'];?> 
            </div>
            <?php if(!empty($_G['setting']['pluginhooks']['global_nav_extra'])) echo $_G['setting']['pluginhooks']['global_nav_extra'];?> 
            <?php if($_G['setting']['search']) { $slist = array();?><?php if($_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group') { ?><?php
$slist[forumfid] = <<<EOF
<li><a href="javascript:;" rel="curforum" fid="{$_G['fid']}" >本版</a></li>
EOF;
?><?php } if($_G['setting']['portalstatus'] && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?><?php
$slist[portal] = <<<EOF
<li><a href="javascript:;" rel="article">文章</a></li>
EOF;
?><?php } if($_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)) { ?><?php
$slist[forum] = <<<EOF
<li><a href="javascript:;" rel="forum" class="curtype">帖子</a></li>
EOF;
?><?php } if(helper_access::check_module('blog') && $_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)) { ?><?php
$slist[blog] = <<<EOF
<li><a href="javascript:;" rel="blog">日志</a></li>
EOF;
?><?php } if(helper_access::check_module('album') && $_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)) { ?><?php
$slist[album] = <<<EOF
<li><a href="javascript:;" rel="album">相册</a></li>
EOF;
?><?php } if($_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)) { ?><?php
$slist[group] = <<<EOF
<li><a href="javascript:;" rel="group">{$_G['setting']['navs']['3']['navname']}</a></li>
EOF;
?><?php } ?><?php
$slist[user] = <<<EOF
<li><a href="javascript:;" rel="user">用户</a></li>
EOF;
?>
<?php } if($_G['setting']['search'] && $slist) { ?>
<div id="scbar" class="cl">
<form id="scbar_form" class="search_form" method="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?>get<?php } else { ?>post<?php } ?>" autocomplete="off" onSubmit="searchFocus($('scbar_txt'))" action="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?><?php echo $searchparams['url'];?><?php } else { ?>search.php?searchsubmit=yes<?php } ?>" target="_blank">
<input type="hidden" name="mod" id="scbar_mod" value="forum" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="srhlocality" value="<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>" />
<?php if(!empty($searchparams['params'])) { if(is_array($searchparams['params'])) foreach($searchparams['params'] as $key => $value) { $srchotquery .= '&' . $key . '=' . rawurlencode($value);?><input type="hidden" name="<?php echo $key;?>" value="<?php echo $value;?>" />
<?php } ?>
<input type="hidden" name="source" value="discuz" />
<input type="hidden" name="fId" id="srchFId" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="q" id="cloudsearchquery" value="" />

<style>
#scbar { overflow: visible; position: relative; }
#sg{ background: #FFF; width:456px; border: 1px solid #B2C7DA; }
.scbar_narrow #sg { width: 316px; }
#sg li { padding:0 8px; line-height:30px; font-size:14px; }
#sg li span { color:#999; }
.sml { background:#FFF; cursor:default; }
.smo { background:#E5EDF2; cursor:default; }
            </style>
            <div style="display: none; position: absolute; top:37px; left:44px;" id="sg">
                <div id="st_box" cellpadding="2" cellspacing="0"></div>
            </div>
<?php } ?>
<table cellspacing="0" cellpadding="0">
<tr>
<td class="scbar_txt_td" valign="top"><input type="text" name="srchtxt" id="scbar_txt" placeholder="请输入搜索内容" autocomplete="off" x-webkit-speech speech /></td>
<td class="scbar_btn_td" valign="top"><button type="submit" name="searchsubmit" id="scbar_btn" class="pnc" value="true"><strong class="xi2 xs2">搜索</strong></button></td>
</tr>
</table>
</form>
</div>
<ul id="scbar_type_menu" class="p_pop" style="display: none;"><?php echo implode('', $slist);; ?></ul>
<script type="text/javascript">
//initSearchmenu('scbar', '<?php echo $searchparams['url'];?>');
</script>
<?php } ?>            <div id="top_usermenu"> 
                <?php $mnid = getcurrentnav();?> 
                <?php if($_G['uid']) { ?> 
                <!-- 登录状态 -->
                <div class="status_loginned"> 
                    <?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?> 
                    <?php $upgradecredit = $_G['uid'] && $_G['group']['grouptype'] == 'member' && $_G['group']['groupcreditslower'] != 999999999 ? $_G['group']['groupcreditslower'] - $_G['member']['credits'] : false;?>                    <a id="mn_mymsg" onMouseOver="showMenu({ctrlid:this.id, pos:'34'});"><span class="showmenu">消息<?php if($_G['member']['newpm']) { ?>(<?php echo $_G['member']['newpm'];?>)<?php } ?></span></a> <a id="mn_myaccount" onMouseOver="showMenu({ctrlid:this.id, pos:'34'});"><span class="showmenu">帐号</span></a> </div>
                <?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
                <div class="status_notlogin"> <a id="loginuser" class="noborder"><?php echo htmlspecialchars($_G['cookie']['loginuser']); ?></a> <a href="member.php?mod=logging&amp;action=login" onClick="showWindow('login', this.href)">激活</a>
                    </li>
                    <a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a> </div>
                <?php } elseif(!$_G['connectguest']) { ?>
                <div class="status_notlogin"> 
                    <a href="connect.php?mod=login&amp;op=init&amp;referer=forum.php&amp;statfrom=login"><i class="i_qq"></i></a> <a href="plugin.php?id=sina_login:index&amp;operation=init"><i class="i_wb"></i></a><a href="member.php?mod=logging&amp;action=login" onClick="showWindow('login', this.href)">登录</a> <span class="sp">|</span> <a href="member.php?mod=<?php echo $_G['setting']['regname'];?>">注册</a></div>
                <?php } else { ?>
                <div class="status_loginned"> 
                    <?php if(!empty($_G['style']['extstyle'])) { ?><span id="sslct" href="javascript:;" title="切换风格" onMouseOver="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});"></span> <?php } ?> 
                    <a href="home.php?mod=follow&amp;uid=<?php echo $_G['uid'];?>&amp;do=view&amp;from=space"><?php echo $_G['member']['username'];?></a> <a id="mn_mymsg" onMouseOver="showMenu({ctrlid:this.id, pos:'34'});"><span class="showmenu">消息<?php if($_G['member']['newpm']) { ?>(<?php echo $_G['member']['newpm'];?>)<?php } ?></span></a> <a id="mn_myaccount" onMouseOver="showMenu({ctrlid:this.id, pos:'34'});"><span class="showmenu">帐号</span></a> 
                </div>
                <?php } ?> 
            </div>
            </div>
    </div>
    <!-- 社区 -->
    <div id="mn_forum_menu" class="top_popmenu" style="display:none;">
        <div class="top_poptitle"><a class="showmenu" href="forum.php" style="font-size:14px;">热版</a></div>
        <div class="divider"></div>
    </div>
    <?php if($_G['uid'] || $_G['connectguest']) { ?> 
    <?php if($_G['member']['newpm']) { ?> 
    <!-- 我的消息 -->
    <div id="mn_mymsg_prompt" class="top_popmenu" style="display:none;"> <a class="close" onClick="hideMenu('mn_mymsg_prompt', 'prompt')">关闭</a>
        <ul>
            <li><?php echo $_G['member']['newpm'];?>条新消息，<a class="light" href="home.php?mod=space&amp;do=pm&amp;filter=newpm">查看消息</a></li>
        </ul>
    </div>
    <script type="text/ecmascript">
        showMenu({ctrlid:'mn_mymsg', menuid:'mn_mymsg_prompt', pos:'34', mtype:'prompt', duration:3});
    </script> 
    <?php } elseif($_G['member']['newprompt']) { ?> 
    <!-- 弹出提示 -->
    <div id="mn_mymsg_prompt" class="top_popmenu" style="display:none;"> <a class="close" onClick="hideMenu('mn_mymsg_prompt', 'prompt')">关闭</a>
        <ul>
            <li><?php echo $_G['member']['newprompt'];?>条新通知，<a class="light" href="home.php?mod=space&amp;do=notice">查看通知</a></li>
        </ul>
    </div>
    <script type="text/ecmascript">
        showMenu({ctrlid:'mn_mymsg', menuid:'mn_mymsg_prompt', pos:'34', mtype:'prompt', duration:3});
    </script> 
    <?php } ?> 
    <!-- 弹出菜单 -->
    <div id="mn_mymsg_menu" class="top_popmenu" style="display:none;">
        <div class="top_poptitle"><span class="showmenu">消息<?php if($_G['member']['newpm']) { ?>(<?php echo $_G['member']['newpm'];?>)<?php } elseif($_G['member']['newprompt']) { ?>(<?php echo $_G['member']['newprompt'];?>)<?php } ?></span></span></div>
        <?php if($_G['member']['newpm']) { ?>
        <ul>
            <li><?php echo $_G['member']['newpm'];?>条新消息，<a class="light" href="home.php?mod=space&amp;do=pm&amp;filter=newpm">查看消息</a></li>
        </ul>
        <div class="divider"></div>
        <?php } elseif($_G['member']['newprompt']) { ?>
        <ul>
            <li><?php echo $_G['member']['newprompt'];?>条新通知，<a class="light" href="home.php?mod=space&amp;do=notice">查看通知</a></li>
        </ul>
        <div class="divider"></div>
        <?php } ?>
        <ul class="listmenu">
            <li><a href="home.php?mod=space&amp;do=notice&amp;type=post&amp;isread=1"><i class="ic16"></i>查看所有回复</a></li>
            <li><a href="home.php?mod=space&amp;do=notice&amp;type=at&amp;isread=1"><i class="ic17"></i>查看@我</a></li>
            <li><a href="home.php?mod=space&amp;do=pm&amp;isread=1"><i class="ic18"></i>查看短消息</a></li>
            <li><a href="home.php?mod=space&amp;do=notice&amp;isread=1"><i class="ic20"></i>查看通知</a></li>
        </ul>
    </div>
    <!-- 我的帐号 -->
    <div id="mn_myaccount_menu" class="top_popmenu" style="display:none;">
        <div class="top_poptitle"><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=profile&amp;from=space" class="showmenu">帐号</a></div>
        <div class="my_avatar"> <a class="avatar" href="home.php?mod=spacecp&amp;ac=avatar"><img src="uc_server/avatar.php?uid=<?php echo $_G['uid'];?>&amp;size=small" /></a>
            <p class="avatar_info"> <a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=profile&amp;from=space"><?php echo $_G['member']['username'];?></a><br>
                <a href="home.php?mod=spacecp&amp;ac=avatar" class="light">修改头像</a> </p>
        </div>


        <div class="divider"></div>
        <ul class="listmenu">
            <li><a href="home.php?mod=spacecp"><i class="ic21"></i>个人资料</a></li>
            <li><a href="home.php?mod=spacecp&amp;ac=plugin&amp;id=qqconnect:spacecp"><i class="ic22"></i>帐号绑定</a></li>
            <li><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password"><i class="ic23"></i>修改密码</a></li>
        </ul>
        <div class="divider"></div>
        <ul class="listmenu">
            <li><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=thread&amp;view=me&amp;from=space"><i class="ic24"></i>我的帖子</a></li>
            <li><a href="home.php?mod=space&amp;do=favorite&amp;view=me"><i class="ic25"></i>我的收藏</a></li>
            <li><a href="home.php?mod=medal"><i class="ic26"></i>荣誉勋章</a></li>
        </ul>
        <div class="divider"></div>
        <ul class="listmenu">
            <?php if(check_diy_perm($topic)) { ?>
            <li><a href="javascript:openDiy();" title="打开 DIY 面板"><i class="ic21"></i>打开DIY</a></li>
            <?php } ?>
            <?php if(($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))) { ?>
            <li><a href="portal.php?mod=portalcp"><i class="ic24"></i><?php if($_G['setting']['portalstatus'] ) { ?>门户管理<?php } else { ?>模块管理<?php } ?></a></li>
            <?php } ?> 
            <?php if($_G['uid'] && $_G['group']['radminid'] > 1) { ?>
            <li><a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><i class="ic24"></i><?php echo $_G['setting']['navs']['2']['navname'];?>管理</a></li>
            <?php } ?> 
            <?php if($_G['uid'] && $_G['adminid'] == 1 && $_G['setting']['cloud_status']) { ?>
            <li><a href="admin.php?frames=yes&amp;action=cloud&amp;operation=applist" target="_blank"><i class="ic22"></i>云平台</a></li>
            <?php } ?> 
            <?php if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
            <li><a href="admin.php" target="_blank"><i class="ic20"></i>管理中心</a></li>
            <?php } ?>
            <li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>"><i class="ic27"></i>退出</a></li>
        </ul>
    </div>
    <?php } ?> 
    <!-- 顶部导航 结束 -->
    <div style=" height:50px;"></div>
    <?php if(!IS_ROBOT) { ?> 

    <?php if(!empty($_G['style']['extstyle'])) { ?>
    <!-- 配色选择 -->
    <div id="styleBox" style="display:none">
        <?php if(!$_G['style']['defaultextstyle']) { ?><span class="sslct_btn" onClick="extstyle('')" title="默认"><i><em>默认</em></i></span><?php } ?>
        <?php if(is_array($_G['style']['extstyle'])) foreach($_G['style']['extstyle'] as $extstyle) { ?>        <span class="sslct_btn" onClick="extstyle('<?php echo $extstyle['0'];?>')" title="<?php echo $extstyle['1'];?>"><i style='background:url(<?php echo $extstyle['0'];?>/jeavi_style.jpg) no-repeat 0px 0px'>
                <em style="background:<?php echo $extstyle['2'];?>"><?php echo $extstyle['1'];?></em>
            </i></span>
        <?php } ?>
        <!-- 配色选择 -->
    </div>
    <?php } ?>



    <div id="qmenu_menu" class="p_pop <?php if(!$_G['uid']) { ?>blk<?php } ?>" style="display: none;"> 
        <?php if($_G['uid']) { ?>
        <ul>
            <?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { ?> 
            <?php if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
            <li><?php echo $nav['code'];?></li>
            <?php } ?> 
            <?php } ?>
        </ul>
        <?php } elseif($_G['connectguest']) { ?>
        <div class="ptm pbw hm"> 请先<br /><a class="xi2" href="member.php?mod=connect"><strong>完善帐号信息</strong></a> 或 <a href="member.php?mod=connect&amp;ac=bind" class="xi2 xw1"><strong>绑定已有帐号</strong></a><br />后使用快捷导航 </div>
        <?php } else { ?>
        <div class="ptm pbw hm"> 请 <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>登录</strong></a> 后使用快捷导航<br />没有帐号？<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2 xw1"><?php echo $_G['setting']['reglinkname'];?></a> </div>
        <?php } ?> 
    </div>
    <?php } ?> 

    <?php echo adshow("headerbanner/wp a_h");?>    <?php if($_G['basescript'] != 'member' && $_G['basescript'] != 'connect') { ?>

    <!-- logo end -->
    <div class="nav_contents">
        <div class="c1">
            <?php echo adshow("subnavbanner/a_mu");?>            <?php if(!empty($_G['setting']['pluginhooks']['global_header'])) echo $_G['setting']['pluginhooks']['global_header'];?>
            <?php } ?>

        </div>
    </div>
    <?php } ?> 
    <div  id="wp" class="wp">
        <div class="jv_bbs">
<style type="text/css">
   body{background:url("template/travel_linzi/style/bg.jpg") repeat-x scroll 0 0 #FFFFFF}
</style>
<style id="diy_style" type="text/css">#framedZDh11 {  margin-top:20px !important;}#portal_block_52 {  margin-top:10px !important;}#portal_block_55 {  margin-top:20px !important;}</style>

<div class="wp"> 
    <!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]--> 
</div>

<!-- 首页幻灯区 -->
<div class="layout cl">
    <div class="services"> 
        <!--[diy=services]--><div id="services" class="area"><div id="frameYunSzC" class="frame move-span cl frame-1"><div id="frameYunSzC_left" class="column frame-1-c"><div id="frameYunSzC_left_temp" class="move-span temp"></div><?php block_display('43');?></div></div></div><!--[/diy]--> 
    </div>
    <div class="recommend">
        <div class="r_con" id="r_con"> 
            <!--[diy=page_con]--><div id="page_con" class="area"><div id="frameQA5i9Q" class="frame move-span cl frame-1"><div id="frameQA5i9Q_left" class="column frame-1-c"><div id="frameQA5i9Q_left_temp" class="move-span temp"></div><?php block_display('40');?></div></div></div><!--[/diy]--> 
        </div>
        <script type="text/javascript">jQuery("#r_con").slide({ titCell:".page ul",mainCell:"#page_con .list_con",effect:"leftLoop",vis:1,scroll:1,autoPlay:true,autoPage:true});</script> 
    </div>
    
</div>
<!-- 首页幻灯区 end --> 

<!-- AD广告 begin 若删除该位置广告 请将此住注释至下部注释 内代码全部删除 -->
<div class="pub_columns">
    <div class="tonglanAd"> 
        <!--[diy=jeavi_ad2]--><div id="jeavi_ad2" class="area"></div><!--[/diy]--> 
    </div>
</div>
<!--AD广告 end--> 

<!-- 社区部分 -->

<div class="f_column">
    <div class="f_main">
        <div class="f_main_l">

            <!--旅游攻略开始 -->
            <div class="gonglue">
                <!--[diy=diy2]--><div id="diy2" class="area"><div id="frameIL9d9S" class="frame move-span cl frame-1"><div id="frameIL9d9S_left" class="column frame-1-c"><div id="frameIL9d9S_left_temp" class="move-span temp"></div><?php block_display('44');?><?php block_display('45');?><?php block_display('46');?></div></div></div><!--[/diy]-->

            </div>
            <!--旅游攻略结束 -->


            <div class="f_box f_t1">
                <dl class="f_hd">
                    <!--[diy=jeavi_f_t1]--><div id="jeavi_f_t1" class="area"><div id="framea1R5Po" class="frame move-span cl frame-1"><div id="framea1R5Po_left" class="column frame-1-c"><div id="framea1R5Po_left_temp" class="move-span temp"></div><?php block_display('23');?></div></div></div><!--[/diy]-->
                </dl>
                <div class="f_con">
                    <div class="con_top">
                        <dl>
                            <!--[diy=jeavi_f_t2]--><div id="jeavi_f_t2" class="area"><div id="frameNqIgAQ" class="frame move-span cl frame-1"><div id="frameNqIgAQ_left" class="column frame-1-c"><div id="frameNqIgAQ_left_temp" class="move-span temp"></div><?php block_display('24');?></div></div></div><!--[/diy]-->

                        </dl>
                        <div class="f_hot"> 
                            <!--[diy=jeavi_f_t3]--><div id="jeavi_f_t3" class="area"><div id="framej121Nk" class="frame move-span cl frame-1"><div id="framej121Nk_left" class="column frame-1-c"><div id="framej121Nk_left_temp" class="move-span temp"></div><?php block_display('25');?></div></div></div><!--[/diy]--> 
                        </div>
                        <div class="f_newlist"> 
                            <!--[diy=jeavi_f_t4]--><div id="jeavi_f_t4" class="area"><div id="frameIwLlAA" class="frame move-span cl frame-1"><div id="frameIwLlAA_left" class="column frame-1-c"><div id="frameIwLlAA_left_temp" class="move-span temp"></div><?php block_display('26');?></div></div></div><!--[/diy]--> 

                        </div>
                    </div>
                    <div class="shopshow">
                        <dl class="f_hd_s">
                            <!--[diy=jeavi_f_t5t]--><div id="jeavi_f_t5t" class="area"><div id="frameI6dXJA" class="frame move-span cl frame-1"><div id="frameI6dXJA_left" class="column frame-1-c"><div id="frameI6dXJA_left_temp" class="move-span temp"></div><?php block_display('28');?></div></div></div><!--[/diy]-->

                        </dl>
                        <div class="showbox"> 
                            <!--[diy=jeavi_f_t5]--><div id="jeavi_f_t5" class="area"><div id="framecjSfPL" class="frame move-span cl frame-1"><div id="framecjSfPL_left" class="column frame-1-c"><div id="framecjSfPL_left_temp" class="move-span temp"></div><?php block_display('27');?></div></div></div><!--[/diy]-->
                        </div>
                    </div>
                    <script type="text/javascript">jQuery("#showbox").slide({ mainCell:".bd",effect:"leftLoop",vis:1,scroll:1,autoPlay:true});</script> 
                </div>
            </div>
            <div class="f_box f_t2 f_last">
                <dl class="f_hd">
                    <!--[diy=jeavi_f_t6]--><div id="jeavi_f_t6" class="area"><div id="frameZUtvHt" class="frame move-span cl frame-1"><div id="frameZUtvHt_left" class="column frame-1-c"><div id="frameZUtvHt_left_temp" class="move-span temp"></div><?php block_display('30');?></div></div></div><!--[/diy]-->
                </dl>
                <div class="food_con">
                    <div class="food_con_l"> 
                        <!--[diy=jeavi_f_t7]--><div id="jeavi_f_t7" class="area"><div id="frameqRAcWe" class="frame move-span cl frame-1"><div id="frameqRAcWe_left" class="column frame-1-c"><div id="frameqRAcWe_left_temp" class="move-span temp"></div><?php block_display('29');?></div></div></div><!--[/diy]--> 

                    </div>
                    <div class="food_con_r">
                        <div class="food_top"> 
                            <!--[diy=jeavi_f_t8]--><div id="jeavi_f_t8" class="area"><div id="framexDiO4c" class="frame move-span cl frame-1"><div id="framexDiO4c_left" class="column frame-1-c"><div id="framexDiO4c_left_temp" class="move-span temp"></div><?php block_display('32');?></div></div></div><!--[/diy]--> 
                        </div>
                        <div class="food_bt">
                            <dl class="f_hd_s">
                                <!--[diy=jeavi_f_t9]--><div id="jeavi_f_t9" class="area"><div id="framejDwuq9" class="frame move-span cl frame-1"><div id="framejDwuq9_left" class="column frame-1-c"><div id="framejDwuq9_left_temp" class="move-span temp"></div><?php block_display('33');?></div></div></div><!--[/diy]-->

                            </dl>
                            <div class="food_bt_con"> 

                                <!--[diy=jeavi_f_t10]--><div id="jeavi_f_t10" class="area"><div id="frameFW4EZo" class="frame move-span cl frame-1"><div id="frameFW4EZo_left" class="column frame-1-c"><div id="frameFW4EZo_left_temp" class="move-span temp"></div><?php block_display('31');?></div></div></div><!--[/diy]--> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f_box f_t3">
                <dl class="f_hd">
                    <!--[diy=jeavi_f_t11]--><div id="jeavi_f_t11" class="area"><div id="framebnxsom" class="frame move-span cl frame-1"><div id="framebnxsom_left" class="column frame-1-c"><div id="framebnxsom_left_temp" class="move-span temp"></div><?php block_display('34');?></div></div></div><!--[/diy]-->
                </dl>
                <div class="wedding_con">
                    <div class="wedding_con_top"> 
                        <!--[diy=jeavi_f_t13]--><div id="jeavi_f_t13" class="area"><div id="framen774JO" class="frame move-span cl frame-1"><div id="framen774JO_left" class="column frame-1-c"><div id="framen774JO_left_temp" class="move-span temp"></div><?php block_display('36');?></div></div></div><!--[/diy]--> 
                    </div>
                    <div class="wedding_con_bt"> 
                        <!--[diy=jeavi_f_t12]--><div id="jeavi_f_t12" class="area"><div id="frameCKT4Wk" class="frame move-span cl frame-1"><div id="frameCKT4Wk_left" class="column frame-1-c"><div id="frameCKT4Wk_left_temp" class="move-span temp"></div><?php block_display('35');?></div></div></div><!--[/diy]--> 
                    </div>
                </div>
            </div>
            <div class="f_box f_t4 f_last">
                <dl class="f_hd">
                    <!--[diy=jeavi_f_t14t]--><div id="jeavi_f_t14t" class="area"><div id="frameWtk446" class="frame move-span cl frame-1"><div id="frameWtk446_left" class="column frame-1-c"><div id="frameWtk446_left_temp" class="move-span temp"></div><?php block_display('39');?></div></div></div><!--[/diy]-->

                </dl>
                <div class="travel_con">
                    <div class="travrl_top" id="travrl_top"> 
                        <!--[diy=jeavi_f_t14]--><div id="jeavi_f_t14" class="area"><div id="frameHlUdQd" class="frame move-span cl frame-1"><div id="frameHlUdQd_left" class="column frame-1-c"><div id="frameHlUdQd_left_temp" class="move-span temp"></div><?php block_display('37');?></div></div></div><!--[/diy]--> 
                    </div>
                    <script type="text/javascript">jQuery("#travrl_top").slide({ titCell:".travel_hd ul",mainCell:".bd",effect:"leftLoop",vis:1,scroll:1,autoPlay:true,autoPage:true});</script>
                    <div class="travel_bt"> <i class="travel_ico"></i> 
                        <!--[diy=jeavi_f_t15]--><div id="jeavi_f_t15" class="area"><div id="framexJWk3T" class="frame move-span cl frame-1"><div id="framexJWk3T_left" class="column frame-1-c"><div id="framexJWk3T_left_temp" class="move-span temp"></div><?php block_display('38');?></div></div></div><!--[/diy]--> 
                    </div>
                </div>
            </div>
            
            <div class="ind_sldline2"></div>

            <!--最新精华开始-->
                        <div id="indbbs">
                         <!--[diy=hot_huiyuan2]--><div id="hot_huiyuan2" class="area"><div id="framea97yFU" class="frame move-span cl frame-1"><div id="framea97yFU_left" class="column frame-1-c"><div id="framea97yFU_left_temp" class="move-span temp"></div><?php block_display('53');?><?php block_display('54');?></div></div></div><!--[/diy]--> 
            </div>
            <!--最新精华结束-->


        </div>
        <div class="f_main_r">
            <div class="citysBox"> 
                <!--[diy=jeavi_8.3]--><div id="jeavi_8.3" class="area"><div id="framer73ekY" class="frame move-span cl frame-1"><div id="framer73ekY_left" class="column frame-1-c"><div id="framer73ekY_left_temp" class="move-span temp"></div><?php block_display('47');?><?php block_display('48');?></div></div><div id="framedZDh11" class=" frame move-span cl frame-1"><div id="framedZDh11_left" class="column frame-1-c"><div id="framedZDh11_left_temp" class="move-span temp"></div><?php block_display('12');?></div></div></div><!--[/diy]-->
                <div class="citysTitle hd">
                    <ul>
                        <li><a href="forum.php?mod=guide&amp;view=hot">热议</a></li>
                        <li><a href="forum.php?mod=guide&amp;view=index">关注</a></li>
                        <li><a href="forum.php?mod=guide&amp;view=digest">推荐</a></li>
                        <li><a href="forum.php?mod=guide&amp;view=new">新帖</a></li>
                    </ul>
                </div>
                <div class="citysCons bd" >
                    <ul class="citys_bbs infoList">
                        <!--[diy=j_4]--><div id="j_4" class="area"><div id="frameuxDtcN" class="frame move-span cl frame-1"><div id="frameuxDtcN_left" class="column frame-1-c"><div id="frameuxDtcN_left_temp" class="move-span temp"></div><?php block_display('13');?></div></div></div><!--[/diy]-->
                    </ul>
                    <ul class="citys_bbs infoList">
                        <!--[diy=j_4.1]--><div id="j_4.1" class="area"><div id="frameyQXTtk" class="frame move-span cl frame-1"><div id="frameyQXTtk_left" class="column frame-1-c"><div id="frameyQXTtk_left_temp" class="move-span temp"></div><?php block_display('14');?></div></div></div><!--[/diy]-->
                    </ul>
                    <ul class="citys_bbs infoList">
                        <!--[diy=j_4.2]--><div id="j_4.2" class="area"><div id="framej2b48D" class="frame move-span cl frame-1"><div id="framej2b48D_left" class="column frame-1-c"><div id="framej2b48D_left_temp" class="move-span temp"></div><?php block_display('15');?></div></div></div><!--[/diy]-->
                    </ul>
                    <ul class="citys_bbs infoList">
                        <!--[diy=j_4.3]--><div id="j_4.3" class="area"><div id="frameha86JE" class="frame move-span cl frame-1"><div id="frameha86JE_left" class="column frame-1-c"><div id="frameha86JE_left_temp" class="move-span temp"></div><?php block_display('16');?></div></div></div><!--[/diy]-->
                    </ul>
                </div>
            </div>
            <script type="text/javascript">jQuery(".citysBox").slide({delayTime:0});</script>
            <div class="citysBox2">
                <div class="rightTop"> 
                    <!--[diy=hot_lianzai]--><div id="hot_lianzai" class="area"><div id="frameZ35h5x" class="frame move-span cl frame-1"><div id="frameZ35h5x_left" class="column frame-1-c"><div id="frameZ35h5x_left_temp" class="move-span temp"></div><?php block_display('56');?><?php block_display('55');?><?php block_display('49');?><?php block_display('50');?></div></div></div><!--[/diy]--> 
                </div>
                <div class="right_huiyuan">
                    <!--[diy=hot_huiyuan]--><div id="hot_huiyuan" class="area"><div id="frameO5wklE" class="frame move-span cl frame-1"><div id="frameO5wklE_left" class="column frame-1-c"><div id="frameO5wklE_left_temp" class="move-span temp"></div><?php block_display('51');?><?php block_display('52');?></div></div><div id="frames3THdn" class="frame move-span cl frame-1"><div id="frames3THdn_left" class="column frame-1-c"><div id="frames3THdn_left_temp" class="move-span temp"></div><?php block_display('57');?></div></div></div><!--[/diy]--> 
                </div>
                
                
                
                
                
            </div>


        </div>
    </div>
</div>

<!-- 社区部分 end --> 

<!-- AD广告 begin 若删除该位置广告 请将此住注释至下部注释 内代码全部删除 -->
<div class="contents">
    <div class="tonglanAd"> 
        <!--[diy=jeavi_ad1]--><div id="jeavi_ad1" class="area"><div id="framenIBtTP" class="frame move-span cl frame-1"><div id="framenIBtTP_left" class="column frame-1-c"><div id="framenIBtTP_left_temp" class="move-span temp"></div><?php block_display('41');?></div></div></div><!--[/diy]--> 
    </div>
</div>
<!--AD广告 end--> 

<!-- 图片部分 begin -->
<div class="contents">
    <div class="pub_column mb0">
        <dl class="pub_tits photo">
            <!--[diy=jeavi_10t]--><div id="jeavi_10t" class="area"><div id="frameeXLsB9" class="frame move-span cl frame-1"><div id="frameeXLsB9_left" class="column frame-1-c"><div id="frameeXLsB9_left_temp" class="move-span temp"></div><?php block_display('11');?></div></div></div><!--[/diy]-->

        </dl>
        <div class="pub_columnCon">
            <div class="jv_c5">
                <div class="jv_c5_left"> 
                    <!--[diy=jeavi_20]--><div id="jeavi_20" class="area"><div id="frameQ7CZ90" class="frame move-span cl frame-1"><div id="frameQ7CZ90_left" class="column frame-1-c"><div id="frameQ7CZ90_left_temp" class="move-span temp"></div><?php block_display('19');?></div></div></div><!--[/diy]--> 
                </div>
                <div class="jv_c5_center"> 
                    <!--[diy=jeavi_21]--><div id="jeavi_21" class="area"><div id="framel1Ldh1" class="frame move-span cl frame-1"><div id="framel1Ldh1_left" class="column frame-1-c"><div id="framel1Ldh1_left_temp" class="move-span temp"></div><?php block_display('18');?></div></div></div><!--[/diy]--> 
                </div>
                <div class="jv_c5_right"> 
                    <!--[diy=jeavi_22]--><div id="jeavi_22" class="area"><div id="frameqQu772" class="frame move-span cl frame-1"><div id="frameqQu772_left" class="column frame-1-c"><div id="frameqQu772_left_temp" class="move-span temp"></div><?php block_display('17');?></div></div></div><!--[/diy]--> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 图片部分 end --> 
<!--AD广告 begin-->
<div class="tonglanAd"> 
    <!--[diy=jeavi_Fad]--><div id="jeavi_Fad" class="area"></div><!--[/diy]--> 
</div>
<!--AD广告 end--> 

<!-- 社区导航 begin -->
<div class="contents">
    <div class="pub_column b0">
        <dl class="pub_tits forum">
            <!--[diy=jeavi_ft]--><div id="jeavi_ft" class="area"><div id="framed0aATz" class="frame move-span cl frame-1"><div id="framed0aATz_left" class="column frame-1-c"><div id="framed0aATz_left_temp" class="move-span temp"></div><?php block_display('22');?></div></div></div><!--[/diy]-->

        </dl>
        <div class="pub_columnCon">
            <div class="seccontent"> 
                <!--[diy=jeavi_fs]--><div id="jeavi_fs" class="area"><div id="framex955i9" class="frame move-span cl frame-1"><div id="framex955i9_left" class="column frame-1-c"><div id="framex955i9_left_temp" class="move-span temp"></div><?php block_display('42');?></div></div></div><!--[/diy]--> 

            </div>
        </div>
    </div>
</div>
</div>
<!-- 社区导航 end --> 

<!-- AD广告 begin 若删除该位置广告 请将此住注释至下部注释 内代码全部删除 -->
<div class="contents">
    <div class="tonglanAd"> 
        <!--[diy=jeavi_Lad]--><div id="jeavi_Lad" class="area"><div id="framejUF636" class="frame move-span cl frame-1"><div id="framejUF636_left" class="column frame-1-c"><div id="framejUF636_left_temp" class="move-span temp"></div><?php block_display('21');?></div></div></div><!--[/diy]--> 
    </div>
</div>
<!-- AD广告 end--> 

<!-- 友情链接 开始 -->

<div class="linkBox">
    <div class="youlian"> <span class="FriendLink">友情链接</span> </div>
    <div class="textLink"> 
        <!--[diy=jeavi_linkcon]--><div id="jeavi_linkcon" class="area"><div id="framehrcgg3" class="frame move-span cl frame-1"><div id="framehrcgg3_left" class="column frame-1-c"><div id="framehrcgg3_left_temp" class="move-span temp"></div><?php block_display('20');?></div></div></div><!--[/diy]--> 
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.full').hover(function(){
            jQuery(".imgtext", this).stop().animate({height:'40px'},{queue:false,duration:200});
        }, function() {
            jQuery(".imgtext", this).stop().animate({height:'20px'},{queue:false,duration:200});
        });
    });
</script>
</div> </div>
 </div></div>
<?php if(empty($topic) || ($topic['usefooter'])) { $focusid = getfocus_rand($_G[basescript]);?><?php if($focusid !== null) { $focus = $_G['cache']['focus']['data'][$focusid];?><?php $focusnum = count($_G['setting']['focus'][$_G[basescript]]);?><div class="focus" id="sitefocus">
<div class="bm">
<div class="bm_h cl">
<a href="javascript:;" onclick="setcookie('nofocus_<?php echo $_G['basescript'];?>', 1, <?php echo $_G['cache']['focus']['cookie'];?>*3600);$('sitefocus').style.display='none'" class="y" title="关闭">关闭</a>
<h2>
<?php if($_G['cache']['focus']['title']) { ?><?php echo $_G['cache']['focus']['title'];?><?php } else { ?>站长推荐<?php } ?>
<span id="focus_ctrl" class="fctrl"><img src="<?php echo IMGDIR;?>/pic_nv_prev.gif" alt="上一条" title="上一条" id="focusprev" class="cur1" onclick="showfocus('prev');" /> <em><span id="focuscur"></span>/<?php echo $focusnum;?></em> <img src="<?php echo IMGDIR;?>/pic_nv_next.gif" alt="下一条" title="下一条" id="focusnext" class="cur1" onclick="showfocus('next')" /></span>
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
<p class="ptn cl"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2 y" target="_blank">查看 &raquo;</a></p>
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
<dt>关于我们</dt>
<dd><a target="_blank" href="/misc.php?mod=faq">网站简介</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq">联系我们</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq">关于我们</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq">合作伙伴</a></dd>
</dl>
</li>
<li>
<dl>
<dt>加入我们</dt>
<dd><a target="_blank" href="/misc.php?mod=faq">招聘职位</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq">分销加盟</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq">广告合作</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq">友情连接</a></dd>
</dl>
</li>
<li>
<dl>
<dt>网站条款</dt>
<dd><a target="_blank" href="/misc.php?mod=faq&amp;action=faq&amp;id=1">会员条款</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq&amp;action=faq&amp;id=15">社区指南</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq&amp;action=faq&amp;id=6&amp;messageid=34">版权声明</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq&amp;action=faq&amp;id=6">免责声明</a></dd>
</dl>
</li>
<li>
<dl>
<dt>帮助中心</dt>
<dd><a target="_blank" href="/misc.php?mod=faq&amp;action=faq&amp;id=10">新手上路</a></dd>
<dd><a target="_blank" href="/misc.php?mod=faq&amp;action=faq&amp;id=15">使用帮助</a></dd>
<dd><a target="_blank" href="/forum.php?mod=forumdisplay&amp;fid=106">建议投诉</a></dd>
<dd><a target="_blank" href="/">网站地图</a></dd>
</dl>
</li>
<li>
<dl>
<dt>关注我们</dt>
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
Powered by <a href="http://www.discuz.net" target="_blank">Discuz!</a><?php echo $_G['setting']['version'];?> <a href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a>, All rights reserved.<span></span><a href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a> 版权所有<br/>
</div>
<!-- footer end --> 

    
    <?php updatesession();?><?php if($_G['uid'] && $_G['group']['allowinvisible']) { ?>
<script type="text/javascript">
var invisiblestatus = '<?php if($_G['session']['invisible']) { ?>隐身<?php } else { ?>在线<?php } ?>';
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
h5n.shownotification('pm', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=pm', '<?php echo avatar($_G[uid],small,true);?>', '新的短消息', '有新的短消息，快去看看吧');
<?php } if($_G['member']['newprompt'] && $_GET['do'] != 'notice') { if(is_array($_G['member']['category_num'])) foreach($_G['member']['category_num'] as $key => $val) { $noticetitle = lang('template', 'notice_'.$key);?>h5n.shownotification('notice_<?php echo $key;?>', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=notice&view=<?php echo $key;?>', '<?php echo avatar($_G[uid],small,true);?>', '<?php echo $noticetitle;?> (<?php echo $val;?>)', '有新的提醒，快去看看吧');
<?php } } ?>
}
</script>
<?php } userappprompt();?><?php if($_G['basescript'] != 'userapp') { ?>
<div id="scrolltop">
<?php if($_G['fid'] && $_G['mod'] == 'viewthread') { ?>
<span><a href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onclick="showWindow('reply', this.href)" class="replyfast" title="快速回复"><b>快速回复</b></a></span>
<?php } ?>
<span hidefocus="true"><a title="返回顶部" onclick="window.scrollTo('0','0')" class="scrolltopa" ><b>返回顶部</b></a></span>
<?php if($_G['fid']) { ?>
<span>
<?php if($_G['mod'] == 'viewthread') { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>" hidefocus="true" class="returnlist" title="返回列表"><b>返回列表</b></a>
<?php } else { ?>
<a href="forum.php" hidefocus="true" class="returnboard" title="返回版块"><b>返回版块</b></a>
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