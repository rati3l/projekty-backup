<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" id="vbulletin_html">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta id="e_vb_meta_bburl" name="vb_meta_bburl" content="https://ubuntuforums.org" />
<base href="https://ubuntuforums.org/" /><!--[if IE]></base><![endif]-->
<meta name="generator" content="vBulletin 4.2.2" />
<meta http-equiv="X-UA-Compatible" content="IE=9" />

	<link rel="Shortcut Icon" href="favicon.ico" type="image/x-icon" />








<script type="text/javascript">
<!--
	if (typeof YAHOO === 'undefined') // Load ALL YUI Local
	{
		document.write('<script type="text/javascript" src="clientscript/yui/yuiloader-dom-event/yuiloader-dom-event.js?v=422"><\/script>');
		document.write('<script type="text/javascript" src="clientscript/yui/connection/connection-min.js?v=422"><\/script>');
		var yuipath = 'clientscript/yui';
		var yuicombopath = '';
		var remoteyui = false;
	}
	else	// Load Rest of YUI remotely (where possible)
	{
		var yuipath = 'clientscript/yui';
		var yuicombopath = '';
		var remoteyui = true;
		if (!yuicombopath)
		{
			document.write('<script type="text/javascript" src="clientscript/yui/connection/connection-min.js?v=422"><\/script>');
		}
	}
	var SESSIONURL = "s=75ed28c9b9400f01a06c3fd96e90ea53&";
	var SECURITYTOKEN = "guest";
	var IMGDIR_MISC = "images/ubuntu-VB4/misc";
	var IMGDIR_BUTTON = "images/ubuntu-VB4/buttons";
	var vb_disable_ajax = parseInt("0", 10);
	var SIMPLEVERSION = "422";
	var BBURL = "https://ubuntuforums.org";
	var LOGGEDIN = 0 > 0 ? true : false;
	var THIS_SCRIPT = "showthread";
	var RELPATH = "showthread.php?t=1363999";
	var PATHS = {
		forum : "",
		cms   : "",
		blog  : ""
	};
	var AJAXBASEURL = "https://ubuntuforums.org/";
// -->
</script>
<script type="text/javascript" src="https://ubuntuforums.org/clientscript/vbulletin-core.js?v=422"></script>



	<link rel="alternate" type="application/rss+xml" title="Ubuntu Forums RSS Feed" href="https://ubuntuforums.org/external.php?type=RSS2" />
	
		<link rel="alternate" type="application/rss+xml" title="Ubuntu Forums - Programming Talk - RSS Feed" href="https://ubuntuforums.org/external.php?type=RSS2&amp;forumids=39" />
	



	<link rel="stylesheet" type="text/css" href="css.php?styleid=117&amp;langid=3&amp;d=1509525483&amp;td=ltr&amp;sheet=bbcode.css,editor.css,popupmenu.css,reset-fonts.css,vbulletin.css,vbulletin-chrome.css,vbulletin-formcontrols.css," />

	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="css.php?styleid=117&amp;langid=3&amp;d=1509525483&amp;td=ltr&amp;sheet=popupmenu-ie.css,vbulletin-ie.css,vbulletin-chrome-ie.css,vbulletin-formcontrols-ie.css,editor-ie.css" />
	<![endif]-->

<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700,700italic|Ubuntu+Mono:400,700' rel='stylesheet' type='text/css'>
	
	<meta name="description" content="Hello, 
 
I recently installed python3.1 python3.1-minimal and python3.1-doc 
 
The package python3.1-doc is supposed to contain python documentation, right? 
 
Ok, but I don't know how I can access it?? 
 
Ok, I know that If I do" />

	<title>[SOLVED] How to access python documentation from shell</title>
	<link rel="canonical" href="showthread.php?t=1363999&s=75ed28c9b9400f01a06c3fd96e90ea53" />
	
	
	
	
	
	
	
	
	

	
		<link rel="stylesheet" type="text/css" href="css.php?styleid=117&amp;langid=3&amp;d=1509525483&amp;td=ltr&amp;sheet=toolsmenu.css,postlist.css,showthread.css,postbit.css,options.css,attachment.css,poll.css,lightbox.css" />
	
	<!--[if lt IE 8]><link rel="stylesheet" type="text/css" href="css.php?styleid=117&amp;langid=3&amp;d=1509525483&amp;td=ltr&amp;sheet=toolsmenu-ie.css,postlist-ie.css,showthread-ie.css,postbit-ie.css,poll-ie.css" /><![endif]-->
<link rel="stylesheet" type="text/css" href="css.php?styleid=117&amp;langid=3&amp;d=1509525483&amp;td=ltr&amp;sheet=additional.css" />

</head>

<body>

<div class="above_body"> <!-- closing tag is in template navbar -->
<div id="header" class="floatcontainer doc_header">
	<div><a name="top" href="index.php?s=75ed28c9b9400f01a06c3fd96e90ea53" class="logo-image"><img src="/images/ubuntu-VB4/ubuntulogo-o-small.png" alt="Ubuntu Forums" /></a></div>
	<div id="toplinks" class="toplinks">
		
			<ul class="nouser">
			
				<li><a rel="faq" href="faq.php?s=75ed28c9b9400f01a06c3fd96e90ea53">FAQ</a></li>
                <li>
                    <!-- OpenID Login Button -->
<form class="logindetails" action="login.php" method="post">
<input type="hidden" name="do" value="login" />
<input type="hidden" name="openid" value="https://login.ubuntu.com" />
<input type="submit" class="loginbutton" value="Login with SSO" /><br />
</form>
<!-- / OpenID Login Button -->
                </li>

				
			</ul>
		
	</div>
	<div class="ad_global_header">
		
		
	</div>
	<hr />
</div>
<div id="navbar" class="navbar">
	<ul id="navtabs" class="navtabs floatcontainer">
		
		
	
		<li class="selected" id="vbtab_forum">
			<a class="navtab" href="forum.php?s=75ed28c9b9400f01a06c3fd96e90ea53">Forum</a>
		</li>
		
		
			<ul class="floatcontainer">
				
					
						<li class="popupmenu" id="vbmenu_qlinks">
							<a href="javascript://" class="popupctrl">Quick Links</a>
							<ul class="popupbody popuphover">
								
									<li id="link_mje2_914"><a href="search.php?do=process&type[]=1&replyless=1&replylimit=0">Unanswered Posts</a></li>
								
									<li id="link_mjm0_271"><a href="search.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=getnew&contenttype=vBForum_Post">New Posts</a></li>
								
									<li id="link_odiw_103"><a href="http://ubuntuforums.org/showgroups.php">View Forum Leaders</a></li>
								
									<li id="link_mdy0_388"><a href="http://ubuntuforums.org/faq.php">FAQ</a></li>
								
									<li id="link_nzqx_135"><a href="http://ubuntuforums.org/faq.php?faq=vb3_reading_posting#faq_vb3_contact_admin">Contact an Admin</a></li>
								
							</ul>
						</li>
					
				
					
						<li class="popupmenu" id="menu_mja2_174">
							<a href="javascript://" class="popupctrl">Forum Community</a>
							<ul class="popupbody popuphover">
								
									<li id="link_mja2_178"><a target="_blank" href="https://wiki.ubuntu.com/ForumCouncil">Forum Council</a></li>
								
									<li id="link_mja2_759"><a target="_blank" href="https://wiki.ubuntu.com/ForumCouncilAgenda"><span> FC Agenda</span></a></li>
								
									<li id="link_mja2_602"><a target="_blank" href="https://wiki.ubuntu.com/ForumsGovernance">Forum Governance</a></li>
								
									<li id="link_ntk3_139"><a href="http://ubuntuforums.org/showgroups.php/">Forum Staff</a></li>
								
									<li id="link_mja2_802"><a href="http://ubuntuforums.org/misc.php?do=showrules">Ubuntu Forums Code of Conduct</a></li>
								
									<li id="link_mja2_447"><a target="_blank" href="http://webchat.freenode.net/?channels=ubuntuforums">Forum IRC Channel</a></li>
								
							</ul>
						</li>
					
				
					
						<li class="popupmenu" id="menu_mja2_686">
							<a href="javascript://" class="popupctrl">Ubuntu Community</a>
							<ul class="popupbody popuphover">
								
									<li id="link_mja2_167"><a target="_blank" href="http://community.ubuntu.com/">Ubuntu</a></li>
								
									<li id="link_mja2_232"><a target="_blank" href="http://www.ubuntu.com/download/desktop">Get <b style="color: #dd4814">Ubuntu</b></a></li>
								
									<li id="link_mja2_426"><a target="_blank" href="http://www.kubuntu.org/getkubuntu">Get <b style="color:#10147e">Kubuntu</b></a></li>
								
									<li id="link_mja2_138"><a target="_blank" href="http://xubuntu.org/getxubuntu/">Get <b style="color: #04a">Xubuntu</b></a></li>
								
									<li id="link_mja2_351"><a target="_blank" href="https://help.ubuntu.com/community/Lubuntu/GetLubuntu">Get <b style="color: #033C71">Lubuntu</b></a></li>
								
									<li id="link_nzmw_867"><a target="_blank" href="http://ubuntustudio.org/download/">Get <b style="color:#116286">Ubuntu Studio</b></a></li>
								
									<li id="link_nzmw_456"><a target="_blank" href="http://www.mythbuntu.org/download-type">Get <b style="color: #dd4814">Mythbuntu</b></a></li>
								
									<li id="link_nzmw_464"><a target="_blank" href="http://www.edubuntu.org/download">Get <b style="color: #a30b00">Edubuntu</b></a></li>
								
									<li id="link_nzmw_559"><a target="_blank" href="http://ubuntugnome.org/download/">Get <b style="color: #dd4814">Ubuntu GNOME</b></a></li>
								
									<li id="link_nzmw_633"><a target="_blank" href="http://www.ubuntukylin.com/downloads/show.php?lang=en&id=122">Get <b style="color: #dd4814">Ubuntu Kylin</b></a></li>
								
									<li id="link_nzy1_643"><a target="_blank" href="https://ubuntubudgie.org/downloads">Get <b style="color: #8B008B">Ubuntu Budgie</b></a></li>
								
									<li id="link_nzy1_968"><a target="_blank" href="https://ubuntu-mate.org/download/">Get <b style="color: #87A556">Ubuntu Mate</b></a></li>
								
									<li id="link_mja2_877"><a target="_blank" href="http://www.ubuntu.com/project/about-ubuntu/conduct">Ubuntu Code of Conduct</a></li>
								
									<li id="link_mja2_199"><a target="_blank" href="https://wiki.ubuntu.com/">Ubuntu Wiki</a></li>
								
									<li id="link_mja2_891"><a target="_blank" href="https://help.ubuntu.com/community/">Community Wiki</a></li>
								
							</ul>
						</li>
					
				
					
						<li class="popupmenu" id="menu_mja2_593">
							<a href="javascript://" class="popupctrl">Other Support</a>
							<ul class="popupbody popuphover">
								
									<li id="link_mja2_994"><a target="_blank" href="https://answers.launchpad.net/">Launchpad Answers</a></li>
								
									<li id="link_mja2_430"><a target="_blank" href="http://webchat.freenode.net/?channels=ubuntu">Ubuntu IRC Support</a></li>
								
									<li id="link_mja2_646"><a target="_blank" href="http://askubuntu.com">AskUbuntu</a></li>
								
									<li id="link_mja2_817"><a target="_blank" href="https://help.ubuntu.com">Official Documentation</a></li>
								
									<li id="link_mja2_745"><a target="_blank" href="https://help.ubuntu.com/community">User Documentation</a></li>
								
							</ul>
						</li>
					
				
					
						<li class="popupmenu" id="menu_mtaz_185">
							<a href="javascript://" class="popupctrl">Social Media</a>
							<ul class="popupbody popuphover">
								
									<li id="link_mtaz_522"><a target="_blank" href="https://www.facebook.com/UbuntuForums">Facebook</a></li>
								
									<li id="link_mtaz_149"><a target="_blank" href="https://twitter.com/ubuntuforums">Twitter</a></li>
								
							</ul>
						</li>
					
				
					
						<li class="popupmenu" id="menu_ode5_930">
							<a href="javascript://" class="popupctrl">Useful Links</a>
							<ul class="popupbody popuphover">
								
									<li id="link_ode5_240"><a target="_blank" href="http://distrowatch.com/table.php?distribution=ubuntu">Distrowatch</a></li>
								
									<li id="link_ode5_738"><a target="_blank" href="https://bugs.launchpad.net/ubuntu/">Bugs: Ubuntu</a></li>
								
									<li id="link_ode5_821"><a target="_blank" href="https://launchpad.net/ubuntu/+ppas">PPAs: Ubuntu</a></li>
								
									<li id="link_ode5_923"><a target="_blank" href="http://www.webupd8.org/">Web Upd8: Ubuntu</a></li>
								
									<li id="link_ode5_916"><a target="_blank" href="http://www.omgubuntu.co.uk/">OMG! Ubuntu</a></li>
								
									<li id="link_ode5_248"><a target="_blank" href="https://insights.ubuntu.com/">Ubuntu Insights</a></li>
								
									<li id="link_ode5_244"><a target="_blank" href="http://planet.ubuntu.com/">Planet Ubuntu</a></li>
								
							</ul>
						</li>
					
				
					
						
					
				
			</ul>
		

	
		<li  id="vbtab_whatsnew">
			<a class="navtab" href="activity.php?s=75ed28c9b9400f01a06c3fd96e90ea53">Activity Page</a>
		</li>
		
		

	
		<li  id="tab_nti4_938">
			<a target="_blank" class="navtab" href="http://ubuntuforums.org/showthread.php?t=2230004">Please read before SSO login</a>
		</li>
		
		

		
	</ul>
	
		<div id="globalsearch" class="globalsearch">
			<form action="search.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=process" method="post" id="navbar_search" class="navbar_search">
				
				<input type="hidden" name="securitytoken" value="guest" />
				<input type="hidden" name="do" value="process" />
				<span class="textboxcontainer"><span><input type="text" value="" name="query" class="textbox" tabindex="99"/></span></span>
				<span class="buttoncontainer"><span><input type="image" class="searchbutton" src="images/ubuntu-VB4/buttons/search.png" name="submit" onclick="document.getElementById('navbar_search').submit;" tabindex="100"/></span></span>
			</form>
			<ul class="navbar_advanced_search">
				<li><a href="search.php?s=75ed28c9b9400f01a06c3fd96e90ea53?search_type=1" accesskey="4">Advanced Search</a></li>
				
			</ul>
		</div>
	
</div>
</div><!-- closing div for above_body -->

<div class="body_wrapper">
<div id="breadcrumb" class="breadcrumb">
	<ul class="floatcontainer">
		<li class="navbithome"><a href="index.php?s=75ed28c9b9400f01a06c3fd96e90ea53" accesskey="1"><img src="images/ubuntu-VB4/misc/navbit-home.png" alt="Home" /></a></li>
		
	<li class="navbit"><a href="index.php?s=75ed28c9b9400f01a06c3fd96e90ea53">Forum</a></li>

	<li class="navbit"><a href="forumdisplay.php?f=130&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">The Ubuntu Forum Community</a></li>

	<li class="navbit"><a href="forumdisplay.php?f=125&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Ubuntu Specialised Support</a></li>

	<li class="navbit"><a href="forumdisplay.php?f=310&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Development &amp; Programming</a></li>

	<li class="navbit"><a href="forumdisplay.php?f=39&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Programming Talk</a></li>

		
	<li class="navbit lastnavbit"><span>[SOLVED] How to access python documentation from shell</span></li>

	</ul>
	<hr />
</div>









	<div id="above_postlist" class="above_postlist">
		
		<div id="pagination_top" class="pagination_top">
		
			<form action="showthread.php?t=1363999&amp;page=2&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" method="get" class="pagination popupmenu nohovermenu">
<input type="hidden" name="t" value="1363999" /><input type="hidden" name="s" value="75ed28c9b9400f01a06c3fd96e90ea53" />
	
		<span><a href="javascript://" class="popupctrl">Page 1 of 2</a></span>
		
		
		
		<span class="selected"><a href="javascript://" title="Results 1 to 10 of 11">1</a></span><span><a href="showthread.php?t=1363999&amp;page=2&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="Show results 11 to 11 of 11">2</a></span>
		
		
		<span class="prev_next"><a rel="next" href="showthread.php?t=1363999&amp;page=2&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="Next Page - Results 11 to 11 of 11"><img src="images/ubuntu-VB4/pagination/next-right.png" alt="Next" /></a></span>
		
		
		<span class="first_last"><a href="showthread.php?t=1363999&amp;page=2&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="Last Page - Results 11 to 11 of 11">Last<img src="images/ubuntu-VB4/pagination/last-right.png" alt="Last" /></a></span>
		
	
	<ul class="popupbody popuphover">
		<li class="formsubmit jumptopage"><label>Jump to page: <input type="text" name="page" size="4" /></label> <input type="submit" class="button" value="Go" /></li>
	</ul>
</form>
		
			<div id="postpagestats_above" class="postpagestats">
				Results 1 to 10 of 11
			</div>
		</div>
	</div>
	<div id="pagetitle" class="pagetitle">
		<h1>
			Thread: <span class="threadtitle"><a href="showthread.php?t=1363999&s=75ed28c9b9400f01a06c3fd96e90ea53" title="Reload this Page">How to access python documentation from shell</a></span>
		</h1>
		
			
<span id="fb-root"></span>
<script type="text/javascript" src="//connect.facebook.net/en_US/all.js#appId=&amp;xfbml=1"></script>

<fb:like href="https://ubuntuforums.org/showthread.php?t=1363999" font="tahoma" layout="standard" show_faces="false" width="260" action="like" colorscheme="light"></fb:like>
		
	</div>
	<div id="thread_controls" class="thread_controls toolsmenu">
		<div>
		<ul id="postlist_popups" class="postlist_popups popupgroup">
			
			
			<li class="popupmenu" id="threadtools">
				<h6><a class="popupctrl" href="javascript://">Thread Tools</a></h6>
				<ul class="popupbody popuphover">
					<li><a href="printthread.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;t=1363999&amp;pp=10&amp;page=1" accesskey="3" rel="nofollow">Show Printable Version</a></li>
					
					<li>
						
							<a href="subscription.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=addsubscription&amp;t=1363999" rel="nofollow">Subscribe to this Thread&hellip;</a>
						
					</li>
					

						
					
				</ul>
			</li>

			

			

			

			
				<li class="popupmenu" id="displaymodes">
					<h6><a class="popupctrl" href="javascript://">Display</a></h6>
					<ul class="popupbody popuphover">
						<li><label>Linear Mode</label></li>
						<li><a href="showthread.php?t=1363999&amp;s=75ed28c9b9400f01a06c3fd96e90ea53&amp;mode=hybrid"> Switch to Hybrid Mode</a></li>
						<li><a href="showthread.php?t=1363999&amp;s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8556884&amp;mode=threaded#post8556884"> Switch to Threaded Mode</a></li>
					</ul>
				</li>
			

			
			</ul>
		</div>
	</div>

<div id="postlist" class="postlist restrain">
	

	
		<ol id="posts" class="posts" start="1">
			
<li class="postbit postbitim postcontainer old" id="post_8556884">
	<div class="postdetails_noavatar">
		<div class="posthead">
                        
                                <span class="postdate old">
                                        
                                                <span class="date">December 25th, 2009</span>
                                        
                                </span>
                                <span class="nodecontrols">
                                        
                                                <a name="post8556884" href="showthread.php?t=1363999&amp;s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8556884#post8556884" class="postcounter">#1</a><a id="postcount8556884" name="1"></a>
                                        
                                        
                                        
                                </span>
                        
		</div>

		<div class="userinfo_noavatar">
			<div class="contact">
				
				<div class="username_container">
					
						<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="member.php?u=331087&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="thebrotherofasis is offline"><strong><span style="color: #000000;">thebrotherofasis</span></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="member.php?u=331087&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" class="siteicon_profile">
				View Profile
			</a>
		</li>
		
		<li class="right">
			<a href="search.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=finduser&amp;userid=331087&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				View Forum Posts
			</a>
		</li>
		
		
		<li class="left">
			<a href="private.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=newpm&amp;u=331087" class="siteicon_message" rel="nofollow">
				Private Message
			</a>
		</li>
		
		
		
		
		
		
		

		

		
		
	</ul>
</div>
						<img class="inlineimg onlinestatus" src="images/ubuntu-VB4/statusicon/user-offline.png" alt="thebrotherofasis is offline" border="0" />

					
					<span class="usertitle">
						Just Give Me the Beans!
					</span>
					
						<span class="rank"><img src="images/rank_3.png" alt="" border="" /></span>
					

                                        
					
					
						<div class="imlinks">
							    
						</div>
					
				</div>
			</div>
			
				<div class="userinfo_extra">
					<dl class="userstats">
						<dt>Join Date</dt> <dd>Jun 2007</dd>
						
						
						<!-- <dt>Beans</dt> <dd>60</dd>	 -->
<dt>Beans</dt> <dd>60</dd>

                                                 
						
					</dl>
					
					
				</div>
			
		</div>
	</div>

	<div class="postbody">
		
		<div class="postrow">
		
		<h2 class="posttitle icon">
			How to access python documentation from shell
		</h2>
		
				
					
					
				
				
		<div class="content">
			<div id="post_message_8556884">
				<blockquote class="postcontent restore">
					Hello,<br />
<br />
I recently installed python3.1 python3.1-minimal and <b>python3.1-doc</b><br />
<br />
The package python3.1-doc is supposed to contain python documentation, right?<br />
<br />
Ok, but I don't know how I can access it??<br />
<br />
Ok, I know that If I do <br />
<br />
<div class="bbcode_container">
	<div class="bbcode_description">Code:</div>
	<pre class="bbcode_code" style="height:36px;">man python</pre>
</div>... it shows some stuff, but nothing compared to this (which is the description from synaptic of python3.1-doc).<br />
<br />
<div class="bbcode_container">
	<div class="bbcode_quote">
		<div class="quote_container">
			<div class="bbcode_quote_container"></div>
			
				  * What's New in Python3.1<br />
  * Tutorial<br />
  * Python Library Reference<br />
  * Macintosh Module Reference<br />
  * Python Language Reference<br />
  * Extending and Embedding Python<br />
  * Python/C API Reference<br />
  * Installing Python Modules<br />
  * Documenting Python<br />
  * Distributing Python Modules
			
		</div>
	</div>
</div>So, how can I access this documentation from my local machine? (Yes, I know it is available online... but I want to be able to access it while being offline)<br />
<br />
On the other hand, but related to this question, is, I am learning Emacs, including its *info* commands. However, If I go to the main info directory (by typing &quot;d&quot;), I can't see a python manual in the menu list (there are no manual nodes for python in the main *info* node)<br />
<br />
Is there a way to access python documentation from the python3.1-doc package, from inside emacs, using its *info* console?<br />
<br />
Thank you for your help.
				</blockquote>
			</div>

			


		</div>
			
			<!-- edit note -->
			<blockquote class="postcontent lastedited">
				
					Last edited by thebrotherofasis; December 25th, 2009 at <span class="time">01:51 PM</span>.
				
				
			</blockquote>
			<!-- / edit note -->
			
				
			
				
			
			
			
		</div>
	</div>
	<div class="postfoot">
		<div class="textcontrols floatcontainer">
			<span class="postcontrols">
				<img style="display:none" id="progress_8556884" src="images/ubuntu-VB4/misc/progress.gif" alt="" />
				
				
<!-- added advance reply -->
                    
                        <a class='quickreply' href="newreply.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8556884&amp;noquote=1" rel="nofollow"><img id="replyimg_8556884" src="clear.gif" alt="Advanced reply" /> Adv Reply</a>
                        <span class="seperator">&nbsp;</span>
                    
<!-- end added advance reply -->
<!-- the next id was qrwq_8556884 -->
				
				
			</span>
			<span class="postlinking">
				
					
				
				

				 
				

					

					
					 

					
					
					
					
					
			</span>
		</div>
	</div>
	<hr />
</li>

<li class="postbit postbitim postcontainer old" id="post_8557814">
	<div class="postdetails_noavatar">
		<div class="posthead">
                        
                                <span class="postdate old">
                                        
                                                <span class="date">December 25th, 2009</span>
                                        
                                </span>
                                <span class="nodecontrols">
                                        
                                                <a name="post8557814" href="showthread.php?t=1363999&amp;s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8557814#post8557814" class="postcounter">#2</a><a id="postcount8557814" name="2"></a>
                                        
                                        
                                        
                                </span>
                        
		</div>

		<div class="userinfo">
			<div class="contact">
				
					<a class="postuseravatarlink" href="member.php?u=534212&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="Barriehie is offline">
						
							<img src="customavatars/avatar534212_6.gif" alt="Barriehie's Avatar" />
						
					</a>
				
				<div class="username_container">
					
						<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="member.php?u=534212&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="Barriehie is offline"><strong><span style="color: #000000;">Barriehie</span></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="member.php?u=534212&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" class="siteicon_profile">
				View Profile
			</a>
		</li>
		
		<li class="right">
			<a href="search.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=finduser&amp;userid=534212&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				View Forum Posts
			</a>
		</li>
		
		
		<li class="left">
			<a href="private.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=newpm&amp;u=534212" class="siteicon_message" rel="nofollow">
				Private Message
			</a>
		</li>
		
		
		
		
		
		
		

		

		
		
	</ul>
</div>
						<img class="inlineimg onlinestatus" src="images/ubuntu-VB4/statusicon/user-offline.png" alt="Barriehie is offline" border="0" />

					
					<span class="usertitle">
						Fresh Brewed Ubuntu
					</span>
					
						<span class="rank"><img src="images/rank_17.png" alt="" border="" /></span>
					

                                        
					
					
						<div class="imlinks">
							    
						</div>
					
				</div>
			</div>
			
				<div class="userinfo_extra">
					<dl class="userstats">
						<dt>Join Date</dt> <dd>Mar 2008</dd>
						<dt>Location</dt> <dd>Las Vegas</dd>
						
						<!-- <dt>Beans</dt> <dd>1,148</dd>	 -->
<dt>Beans</dt> <dd>1,148</dd>

                                                 
						
					</dl>
					
					
				</div>
			
		</div>
	</div>

	<div class="postbody">
		
		<div class="postrow">
		
		<h2 class="posttitle icon">
			Re: How to access python documentation from shell
		</h2>
		
				
				
		<div class="content">
			<div id="post_message_8557814">
				<blockquote class="postcontent restore">
					Can't help with the emacs ? although I'm a fan myself <img src="images/smilies/icon_smile.gif" border="0" alt="" title="Smile" class="inlineimg" />  If you go back into synaptic and look at the installed files for the python3.1-doc package you MIGHT find where it's installed html versions.  That's what I do on my end and then point your browser at the local file.  I'm using python 2.5 so I point my browser:<br />
<div class="bbcode_container">
	<div class="bbcode_description">Code:</div>
	<pre class="bbcode_code" style="height:36px;">file:///usr/share/doc/python2.5/html/index.html</pre>
</div> here.<br />
<br />
HTH<br />
Barrie<br />
<br />
Edit: I just remember seeing the other day where you can tell emacs to open your browser and view a url/file.  M-x browse-url-firefox and then you're prompted for the url.
				</blockquote>
			</div>

			


		</div>
			
			<!-- edit note -->
			<blockquote class="postcontent lastedited">
				
					Last edited by Barriehie; December 25th, 2009 at <span class="time">07:07 PM</span>.
				
				
			</blockquote>
			<!-- / edit note -->
			
				
			
			
				<blockquote class="signature restore"><div class="signaturecontainer"><div style="text-align: center;"><b><i><font color="Red">Debian Stable</font></i><br />
</b></div><div style="text-align: center;"><i><b><font color="blue">FluxBox</font></b></i></div><b>Mark Your Thread Solved</b></div></blockquote>
			
			
		</div>
	</div>
	<div class="postfoot">
		<div class="textcontrols floatcontainer">
			<span class="postcontrols">
				<img style="display:none" id="progress_8557814" src="images/ubuntu-VB4/misc/progress.gif" alt="" />
				
				
<!-- added advance reply -->
                    
                        <a class='quickreply' href="newreply.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8557814&amp;noquote=1" rel="nofollow"><img id="replyimg_8557814" src="clear.gif" alt="Advanced reply" /> Adv Reply</a>
                        <span class="seperator">&nbsp;</span>
                    
<!-- end added advance reply -->
<!-- the next id was qrwq_8557814 -->
				
				
			</span>
			<span class="postlinking">
				
					
				
				

				 
				

					

					
					 

					
					
					
					
					
			</span>
		</div>
	</div>
	<hr />
</li>

<li class="postbit postbitim postcontainer old" id="post_8557848">
	<div class="postdetails_noavatar">
		<div class="posthead">
                        
                                <span class="postdate old">
                                        
                                                <span class="date">December 25th, 2009</span>
                                        
                                </span>
                                <span class="nodecontrols">
                                        
                                                <a name="post8557848" href="showthread.php?t=1363999&amp;s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8557848#post8557848" class="postcounter">#3</a><a id="postcount8557848" name="3"></a>
                                        
                                        
                                        
                                </span>
                        
		</div>

		<div class="userinfo">
			<div class="contact">
				
					<a class="postuseravatarlink" href="member.php?u=366174&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="Can+~ is offline">
						
							<img src="customavatars/avatar366174_13.gif" alt="Can+~'s Avatar" />
						
					</a>
				
				<div class="username_container">
					
						<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="member.php?u=366174&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="Can+~ is offline"><strong><span style="color: #000000;">Can+~</span></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="member.php?u=366174&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" class="siteicon_profile">
				View Profile
			</a>
		</li>
		
		<li class="right">
			<a href="search.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=finduser&amp;userid=366174&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				View Forum Posts
			</a>
		</li>
		
		
		<li class="left">
			<a href="private.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=newpm&amp;u=366174" class="siteicon_message" rel="nofollow">
				Private Message
			</a>
		</li>
		
		
		
		
		
		
		

		

		
		
	</ul>
</div>
						<img class="inlineimg onlinestatus" src="images/ubuntu-VB4/statusicon/user-offline.png" alt="Can+~ is offline" border="0" />

					
					<span class="usertitle">
						Ubuntu Cappuccino Scuro
					</span>
					
						<span class="rank"><img src="images/rank_20.png" alt="" border="" /></span>
					

                                        
					
					
						<div class="imlinks">
							    
						</div>
					
				</div>
			</div>
			
				<div class="userinfo_extra">
					<dl class="userstats">
						<dt>Join Date</dt> <dd>Aug 2007</dd>
						<dt>Location</dt> <dd>127.0.0.1</dd>
						
						<!-- <dt>Beans</dt> <dd>1,800</dd>	 -->
<dt>Beans</dt> <dd>1,800</dd>

                                                 <dt>Distro</dt><dd>Ubuntu 10.04 Lucid Lynx</dd>
						
					</dl>
					
					
				</div>
			
		</div>
	</div>

	<div class="postbody">
		
		<div class="postrow">
		
		<h2 class="posttitle icon">
			Re: How to access python documentation from shell
		</h2>
		
				
				
		<div class="content">
			<div id="post_message_8557848">
				<blockquote class="postcontent restore">
					Install gnomes' <a href="apt:devhelp" target="_blank">devhelp</a>, and you can read all the html documentation available.
				</blockquote>
			</div>

			


		</div>
			
				
			
			
				<blockquote class="signature restore"><div class="signaturecontainer"><div style="text-align: center;">&quot;<i>Just in terms of allocation of time resources, religion is not very efficient. There's a lot more I could be doing on a Sunday morning.</i>&quot;<br />
-Bill Gates</div></div></blockquote>
			
			
		</div>
	</div>
	<div class="postfoot">
		<div class="textcontrols floatcontainer">
			<span class="postcontrols">
				<img style="display:none" id="progress_8557848" src="images/ubuntu-VB4/misc/progress.gif" alt="" />
				
				
<!-- added advance reply -->
                    
                        <a class='quickreply' href="newreply.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8557848&amp;noquote=1" rel="nofollow"><img id="replyimg_8557848" src="clear.gif" alt="Advanced reply" /> Adv Reply</a>
                        <span class="seperator">&nbsp;</span>
                    
<!-- end added advance reply -->
<!-- the next id was qrwq_8557848 -->
				
				
			</span>
			<span class="postlinking">
				
					
				
				

				 
				

					

					
					 

					
					
					
					
					
			</span>
		</div>
	</div>
	<hr />
</li>

<li class="postbit postbitim postcontainer old" id="post_8558318">
	<div class="postdetails_noavatar">
		<div class="posthead">
                        
                                <span class="postdate old">
                                        
                                                <span class="date">December 25th, 2009</span>
                                        
                                </span>
                                <span class="nodecontrols">
                                        
                                                <a name="post8558318" href="showthread.php?t=1363999&amp;s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8558318#post8558318" class="postcounter">#4</a><a id="postcount8558318" name="4"></a>
                                        
                                        
                                        
                                </span>
                        
		</div>

		<div class="userinfo_noavatar">
			<div class="contact">
				
				<div class="username_container">
					
						<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="member.php?u=406639&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="tom66 is offline"><strong><span style="color: #000000;">tom66</span></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="member.php?u=406639&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" class="siteicon_profile">
				View Profile
			</a>
		</li>
		
		<li class="right">
			<a href="search.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=finduser&amp;userid=406639&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				View Forum Posts
			</a>
		</li>
		
		
		<li class="left">
			<a href="private.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=newpm&amp;u=406639" class="siteicon_message" rel="nofollow">
				Private Message
			</a>
		</li>
		
		
		
		
		
		
		

		

		
		
	</ul>
</div>
						<img class="inlineimg onlinestatus" src="images/ubuntu-VB4/statusicon/user-offline.png" alt="tom66 is offline" border="0" />

					
					<span class="usertitle">
						Quad Shot of Ubuntu
					</span>
					
						<span class="rank"><img src="images/rank_5.png" alt="" border="" /></span>
					

                                        
					
					
						<div class="imlinks">
							    
						</div>
					
				</div>
			</div>
			
				<div class="userinfo_extra">
					<dl class="userstats">
						<dt>Join Date</dt> <dd>Oct 2007</dd>
						<dt>Location</dt> <dd>UK</dd>
						
						<!-- <dt>Beans</dt> <dd>484</dd>	 -->
<dt>Beans</dt> <dd>484</dd>

                                                 <dt>Distro</dt><dd>Ubuntu 9.10 Karmic Koala</dd>
						
					</dl>
					
					
				</div>
			
		</div>
	</div>

	<div class="postbody">
		
		<div class="postrow">
		
		<h2 class="posttitle icon">
			Re: How to access python documentation from shell
		</h2>
		
				
				
		<div class="content">
			<div id="post_message_8558318">
				<blockquote class="postcontent restore">
					<span style="font-family: monospace">pydoc &lt;name of type or function or syntax element to look up&gt;</span><br />
<br />
for example, try these:<br />
<span style="font-family: monospace"><br />
pydoc print -&gt; to show information on the &quot;print&quot; statement.<br />
pydoc TypeError -&gt; to show information on built-in class &quot;TypeError&quot;.<br />
pydoc gtk -&gt; to show information on module gtk.<br />
pydoc gtk.Window -&gt; to show information on class Window in module gtk.<br />
pydoc gtk.Window.__init__ -&gt; to show information on method __init__() in class Window in module gtk.<br />
</span><br />
You might need to have the pydoc package installed.<br />
<br />
Alternatively, for types ONLY, you can use the help() function in the interpreter. However, help() works with instances also, because you can't create objects on the pydoc command-line.<br />
<br />
<div class="bbcode_container">
	<div class="bbcode_description">Code:</div>
	<pre class="bbcode_code" style="height:372px;">Python 2.6.4 (r264:75706, Dec  7 2009, 18:43:55) 
[GCC 4.4.1] on linux2
Type &quot;help&quot;, &quot;copyright&quot;, &quot;credits&quot; or &quot;license&quot; for more information.
&gt;&gt;&gt; x = 8.4
&gt;&gt;&gt; help(x)
Help on float object:

class float(object)
 |  float(x) -&gt; floating point number
 |  
 |  Convert a string or number to a floating point number, if possible.
 |  
 |  Methods defined here:
 |  
 |  __abs__(...)
 |      x.__abs__() &lt;==&gt; abs(x)
 |  
 |  __add__(...)
 |      x.__add__(y) &lt;==&gt; x+y
 |  
 |  __coerce__(...)
 |      x.__coerce__(y) &lt;==&gt; coerce(x, y)
 |  
 |  __div__(...)
 |      x.__div__(y) &lt;==&gt; x/y
 |  
 |  __divmod__(...)
 |      x.__divmod__(y) &lt;==&gt; divmod(x, y)
:
&gt;&gt;&gt; help(print) # Note that you can't use statements, only types!
  File &quot;&lt;stdin&gt;&quot;, line 1
    help(print)
             ^
SyntaxError: invalid syntax</pre>
</div>Press 'Q' to exit from the listing on either the pydoc program or the help() builtin.
				</blockquote>
			</div>

			


		</div>
			
			<!-- edit note -->
			<blockquote class="postcontent lastedited">
				
					Last edited by tom66; December 25th, 2009 at <span class="time">09:33 PM</span>.
				
				
			</blockquote>
			<!-- / edit note -->
			
				
			
			
				<blockquote class="signature restore"><div class="signaturecontainer"><b>Lucid Beta 2 powered</b> Studio 15 (Core 2 Duo 2.0GHz, 3 GB RAM, HD 3450) &amp; <b>Windows XP powered</b> Scaleo E (Celeron D 3.06GHz, 1.5GB RAM, Intel GMA 915G). Please see <a href="http://youtube.com/ubuntututorials" target="_blank">Ubuntu Tutorials (my YouTube channel)</a>.</div></blockquote>
			
			
		</div>
	</div>
	<div class="postfoot">
		<div class="textcontrols floatcontainer">
			<span class="postcontrols">
				<img style="display:none" id="progress_8558318" src="images/ubuntu-VB4/misc/progress.gif" alt="" />
				
				
<!-- added advance reply -->
                    
                        <a class='quickreply' href="newreply.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8558318&amp;noquote=1" rel="nofollow"><img id="replyimg_8558318" src="clear.gif" alt="Advanced reply" /> Adv Reply</a>
                        <span class="seperator">&nbsp;</span>
                    
<!-- end added advance reply -->
<!-- the next id was qrwq_8558318 -->
				
				
			</span>
			<span class="postlinking">
				
					
				
				

				 
				

					

					
					 

					
					
					
					
					
			</span>
		</div>
	</div>
	<hr />
</li>

<li class="postbit postbitim postcontainer old" id="post_8560476">
	<div class="postdetails_noavatar">
		<div class="posthead">
                        
                                <span class="postdate old">
                                        
                                                <span class="date">December 26th, 2009</span>
                                        
                                </span>
                                <span class="nodecontrols">
                                        
                                                <a name="post8560476" href="showthread.php?t=1363999&amp;s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8560476#post8560476" class="postcounter">#5</a><a id="postcount8560476" name="5"></a>
                                        
                                        
                                        
                                </span>
                        
		</div>

		<div class="userinfo">
			<div class="contact">
				
					<a class="postuseravatarlink" href="member.php?u=273037&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="nvteighen is offline">
						
							<img src="customavatars/avatar273037_2.gif" alt="nvteighen's Avatar" />
						
					</a>
				
				<div class="username_container">
					
						<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="member.php?u=273037&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="nvteighen is offline"><strong><span style="color: #000000;">nvteighen</span></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="member.php?u=273037&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" class="siteicon_profile">
				View Profile
			</a>
		</li>
		
		<li class="right">
			<a href="search.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=finduser&amp;userid=273037&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				View Forum Posts
			</a>
		</li>
		
		
		<li class="left">
			<a href="private.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=newpm&amp;u=273037" class="siteicon_message" rel="nofollow">
				Private Message
			</a>
		</li>
		
		
		
		
		
		
		

		

		
		
	</ul>
</div>
						<img class="inlineimg onlinestatus" src="images/ubuntu-VB4/statusicon/user-offline.png" alt="nvteighen is offline" border="0" />

					
					<span class="usertitle">
						Ubuntu addict and loving it
					</span>
					
						<span class="rank"><img src="images/rank_25.png" alt="" border="" /></span>
					

                                        
					
					
						<div class="imlinks">
							    
						</div>
					
				</div>
			</div>
			
				<div class="userinfo_extra">
					<dl class="userstats">
						<dt>Join Date</dt> <dd>Apr 2007</dd>
						<dt>Location</dt> <dd>(X,Y,Z) = (0,0,0)</dd>
						
						<!-- <dt>Beans</dt> <dd>3,715</dd>	 -->
<dt>Beans</dt> <dd>3,715</dd>

                                                 
						
					</dl>
					
					
				</div>
			
		</div>
	</div>

	<div class="postbody">
		
		<div class="postrow">
		
		<h2 class="posttitle icon">
			Re: How to access python documentation from shell
		</h2>
		
				
				
		<div class="content">
			<div id="post_message_8560476">
				<blockquote class="postcontent restore">
					<div class="bbcode_container">
	<div class="bbcode_quote">
		<div class="quote_container">
			<div class="bbcode_quote_container"></div>
			
				<div class="bbcode_postedby">
					<img src="images/ubuntu-VB4/misc/quote_icon.png" alt="Quote" /> Originally Posted by <strong>tom66</strong>
					<a href="showthread.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8558318#post8558318" rel="nofollow"><img class="inlineimg" src="images/ubuntu-VB4/buttons/viewpost-right.png" alt="View Post" /></a>
				</div>
				<div class="message">Alternatively, for types ONLY, you can use the help() function in the interpreter. However, help() works with instances also, because you can't create objects on the pydoc command-line.</div>
			
		</div>
	</div>
</div>help() reads the docstrings in whatever it encounters. It can be a function, classes or even a module. It isn't just for types (I suppose you refer to classes).
				</blockquote>
			</div>

			


		</div>
			
				
			
			
				<blockquote class="signature restore"><div class="signaturecontainer"><b><a href="http://github.com/emvigo" target="_blank">GitHub</a></b></div></blockquote>
			
			
		</div>
	</div>
	<div class="postfoot">
		<div class="textcontrols floatcontainer">
			<span class="postcontrols">
				<img style="display:none" id="progress_8560476" src="images/ubuntu-VB4/misc/progress.gif" alt="" />
				
				
<!-- added advance reply -->
                    
                        <a class='quickreply' href="newreply.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8560476&amp;noquote=1" rel="nofollow"><img id="replyimg_8560476" src="clear.gif" alt="Advanced reply" /> Adv Reply</a>
                        <span class="seperator">&nbsp;</span>
                    
<!-- end added advance reply -->
<!-- the next id was qrwq_8560476 -->
				
				
			</span>
			<span class="postlinking">
				
					
				
				

				 
				

					

					
					 

					
					
					
					
					
			</span>
		</div>
	</div>
	<hr />
</li>

<li class="postbit postbitim postcontainer old" id="post_8562677">
	<div class="postdetails_noavatar">
		<div class="posthead">
                        
                                <span class="postdate old">
                                        
                                                <span class="date">December 26th, 2009</span>
                                        
                                </span>
                                <span class="nodecontrols">
                                        
                                                <a name="post8562677" href="showthread.php?t=1363999&amp;s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8562677#post8562677" class="postcounter">#6</a><a id="postcount8562677" name="6"></a>
                                        
                                        
                                        
                                </span>
                        
		</div>

		<div class="userinfo">
			<div class="contact">
				
					<a class="postuseravatarlink" href="member.php?u=915368&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="dhillonv10 is offline">
						
							<img src="customavatars/avatar915368_2.gif" alt="dhillonv10's Avatar" />
						
					</a>
				
				<div class="username_container">
					
						<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="member.php?u=915368&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="dhillonv10 is offline"><strong><span style="color: #000000;">dhillonv10</span></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="member.php?u=915368&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" class="siteicon_profile">
				View Profile
			</a>
		</li>
		
		<li class="right">
			<a href="search.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=finduser&amp;userid=915368&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				View Forum Posts
			</a>
		</li>
		
		
		<li class="left">
			<a href="private.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=newpm&amp;u=915368" class="siteicon_message" rel="nofollow">
				Private Message
			</a>
		</li>
		
		
		
		
		
		
		

		

		
		
	</ul>
</div>
						<img class="inlineimg onlinestatus" src="images/ubuntu-VB4/statusicon/user-offline.png" alt="dhillonv10 is offline" border="0" />

					
					<span class="usertitle">
						5 Cups of Ubuntu
					</span>
					
						<span class="rank"><img src="images/rank_2.png" alt="" border="" /></span>
					

                                        
					
					
						<div class="imlinks">
							    
						</div>
					
				</div>
			</div>
			
				<div class="userinfo_extra">
					<dl class="userstats">
						<dt>Join Date</dt> <dd>Sep 2009</dd>
						<dt>Location</dt> <dd>Orlando, FL</dd>
						
						<!-- <dt>Beans</dt> <dd>27</dd>	 -->
<dt>Beans</dt> <dd>27</dd>

                                                 <dt>Distro</dt><dd>Ubuntu Development Release</dd>
						
					</dl>
					
					
				</div>
			
		</div>
	</div>

	<div class="postbody">
		
		<div class="postrow">
		
		<h2 class="posttitle icon">
			Re: How to access python documentation from shell
		</h2>
		
				
				
		<div class="content">
			<div id="post_message_8562677">
				<blockquote class="postcontent restore">
					Gnome's Devhelp would make things really easy for you, not only python but you would be able to do a lot more with that <img src="images/smilies/star.png" border="0" alt="" title="KDE Star" class="inlineimg" />
				</blockquote>
			</div>

			


		</div>
			
				
			
			
			
		</div>
	</div>
	<div class="postfoot">
		<div class="textcontrols floatcontainer">
			<span class="postcontrols">
				<img style="display:none" id="progress_8562677" src="images/ubuntu-VB4/misc/progress.gif" alt="" />
				
				
<!-- added advance reply -->
                    
                        <a class='quickreply' href="newreply.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8562677&amp;noquote=1" rel="nofollow"><img id="replyimg_8562677" src="clear.gif" alt="Advanced reply" /> Adv Reply</a>
                        <span class="seperator">&nbsp;</span>
                    
<!-- end added advance reply -->
<!-- the next id was qrwq_8562677 -->
				
				
			</span>
			<span class="postlinking">
				
					
				
				

				 
				

					

					
					 

					
					
					
					
					
			</span>
		</div>
	</div>
	<hr />
</li>

<li class="postbit postbitim postcontainer old" id="post_8569597">
	<div class="postdetails_noavatar">
		<div class="posthead">
                        
                                <span class="postdate old">
                                        
                                                <span class="date">December 28th, 2009</span>
                                        
                                </span>
                                <span class="nodecontrols">
                                        
                                                <a name="post8569597" href="showthread.php?t=1363999&amp;s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8569597#post8569597" class="postcounter">#7</a><a id="postcount8569597" name="7"></a>
                                        
                                        
                                        
                                </span>
                        
		</div>

		<div class="userinfo">
			<div class="contact">
				
					<a class="postuseravatarlink" href="member.php?u=36735&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="jpkotta is offline">
						
							<img src="customavatars/avatar36735_6.gif" alt="jpkotta's Avatar" />
						
					</a>
				
				<div class="username_container">
					
						<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="member.php?u=36735&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="jpkotta is offline"><strong><span style="color: #000000;">jpkotta</span></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="member.php?u=36735&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" class="siteicon_profile">
				View Profile
			</a>
		</li>
		
		<li class="right">
			<a href="search.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=finduser&amp;userid=36735&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				View Forum Posts
			</a>
		</li>
		
		
		<li class="left">
			<a href="private.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=newpm&amp;u=36735" class="siteicon_message" rel="nofollow">
				Private Message
			</a>
		</li>
		
		
		
		
		
		
		

		

		
		
	</ul>
</div>
						<img class="inlineimg onlinestatus" src="images/ubuntu-VB4/statusicon/user-offline.png" alt="jpkotta is offline" border="0" />

					
					<span class="usertitle">
						Tall Cafè Ubuntu
					</span>
					
						<span class="rank"><img src="images/rank_20.png" alt="" border="" /></span>
					

                                        
					
					
						<div class="imlinks">
							    
						</div>
					
				</div>
			</div>
			
				<div class="userinfo_extra">
					<dl class="userstats">
						<dt>Join Date</dt> <dd>Aug 2005</dd>
						<dt>Location</dt> <dd>Fargo, ND, USA</dd>
						
						<!-- <dt>Beans</dt> <dd>1,499</dd>	 -->
<dt>Beans</dt> <dd>1,499</dd>

                                                 <dt>Distro</dt><dd>Kubuntu 10.04 Lucid Lynx</dd>
						
					</dl>
					
					
				</div>
			
		</div>
	</div>

	<div class="postbody">
		
		<div class="postrow">
		
		<h2 class="posttitle icon">
			Re: How to access python documentation from shell
		</h2>
		
				
				
		<div class="content">
			<div id="post_message_8569597">
				<blockquote class="postcontent restore">
					<a href="http://stackoverflow.com/questions/1054903/how-do-you-get-python-documentation-in-texinfo-info-format" target="_blank">http://stackoverflow.com/questions/1...fo-info-format</a><br />
<br />
Seems like Python docs are no longer in texinfo format.  You can do pretty well in Emacs with this:<br />
<br />
<div class="bbcode_container">
	<div class="bbcode_description">Code:</div>
	<pre class="bbcode_code" style="height:240px;">;; modified from http://www.emacswiki.org/emacs/PythonMode
(defun pydoc (w)
  &quot;Launch PyDOC on the Word at Point&quot;
  (interactive
   (list (let* ((word (thing-at-point 'word))
                (input (read-string 
                        (format &quot;pydoc entry%s: &quot; 
                                (if (not word) 
                                    &quot;&quot; 
                                  (format &quot; (default %s)&quot; word))))))
           (if (string= input &quot;&quot;) 
               (if (not word) (error &quot;No pydoc args given&quot;)
                 word) ;sinon word
             input)))) ;sinon input
  (save-window-excursion
    (shell-command (concat &quot;pydoc &quot; w) &quot;*PYDOCS*&quot;))
    ;;(view-buffer-other-window &quot;*PYDOCS*&quot; nil 'bury-buffer))
    (view-buffer &quot;*PYDOCS*&quot; 'bury-buffer))</pre>
</div>
				</blockquote>
			</div>

			


		</div>
			
				
			
			
				<blockquote class="signature restore"><div class="signaturecontainer">Help yourself: <u><a href="http://search.ubuntuwire.com/" target="_blank">Search the  community docs</a></u> or <u><a href="http://rute.2038bug.com/index.html.gz" target="_blank">try</a></u> <u><a href="http://forums.gentoo.org/" target="_blank">other</a></u> <u><a href="http://www.ubuntuguide.org/" target="_blank">resources</a></u>.<br />
<div class="bbcode_container">
	<div class="bbcode_quote">
		<div class="quote_container">
			<div class="bbcode_quote_container"></div>
			
				<div class="bbcode_postedby">
					<img src="images/ubuntu-VB4/misc/quote_icon.png" alt="Quote" /> Originally Posted by <strong>Henry Spencer</strong>
					
				</div>
				<div class="message">Those who do not understand Unix are condemned to reinvent it, poorly.</div>
			
		</div>
	</div>
</div><b>Let science use your computer when you aren't: <a href="https://help.ubuntu.com/community/FoldingAtHome" target="_blank">Folding@Home</a>.</b></div></blockquote>
			
			
		</div>
	</div>
	<div class="postfoot">
		<div class="textcontrols floatcontainer">
			<span class="postcontrols">
				<img style="display:none" id="progress_8569597" src="images/ubuntu-VB4/misc/progress.gif" alt="" />
				
				
<!-- added advance reply -->
                    
                        <a class='quickreply' href="newreply.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8569597&amp;noquote=1" rel="nofollow"><img id="replyimg_8569597" src="clear.gif" alt="Advanced reply" /> Adv Reply</a>
                        <span class="seperator">&nbsp;</span>
                    
<!-- end added advance reply -->
<!-- the next id was qrwq_8569597 -->
				
				
			</span>
			<span class="postlinking">
				
					
				
				

				 
				

					

					
					 

					
					
					
					
					
			</span>
		</div>
	</div>
	<hr />
</li>

<li class="postbit postbitim postcontainer old" id="post_8581864">
	<div class="postdetails_noavatar">
		<div class="posthead">
                        
                                <span class="postdate old">
                                        
                                                <span class="date">December 30th, 2009</span>
                                        
                                </span>
                                <span class="nodecontrols">
                                        
                                                <a name="post8581864" href="showthread.php?t=1363999&amp;s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8581864#post8581864" class="postcounter">#8</a><a id="postcount8581864" name="8"></a>
                                        
                                        
                                        
                                </span>
                        
		</div>

		<div class="userinfo_noavatar">
			<div class="contact">
				
				<div class="username_container">
					
						<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="member.php?u=331087&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="thebrotherofasis is offline"><strong><span style="color: #000000;">thebrotherofasis</span></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="member.php?u=331087&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" class="siteicon_profile">
				View Profile
			</a>
		</li>
		
		<li class="right">
			<a href="search.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=finduser&amp;userid=331087&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				View Forum Posts
			</a>
		</li>
		
		
		<li class="left">
			<a href="private.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=newpm&amp;u=331087" class="siteicon_message" rel="nofollow">
				Private Message
			</a>
		</li>
		
		
		
		
		
		
		

		

		
		
	</ul>
</div>
						<img class="inlineimg onlinestatus" src="images/ubuntu-VB4/statusicon/user-offline.png" alt="thebrotherofasis is offline" border="0" />

					
					<span class="usertitle">
						Just Give Me the Beans!
					</span>
					
						<span class="rank"><img src="images/rank_3.png" alt="" border="" /></span>
					

                                        
					
					
						<div class="imlinks">
							    
						</div>
					
				</div>
			</div>
			
				<div class="userinfo_extra">
					<dl class="userstats">
						<dt>Join Date</dt> <dd>Jun 2007</dd>
						
						
						<!-- <dt>Beans</dt> <dd>60</dd>	 -->
<dt>Beans</dt> <dd>60</dd>

                                                 
						
					</dl>
					
					
				</div>
			
		</div>
	</div>

	<div class="postbody">
		
		<div class="postrow">
		
		<h2 class="posttitle icon">
			Re: How to access python documentation from shell
		</h2>
		
				
				
		<div class="content">
			<div id="post_message_8581864">
				<blockquote class="postcontent restore">
					<div class="bbcode_container">
	<div class="bbcode_quote">
		<div class="quote_container">
			<div class="bbcode_quote_container"></div>
			
				<div class="bbcode_postedby">
					<img src="images/ubuntu-VB4/misc/quote_icon.png" alt="Quote" /> Originally Posted by <strong>jpkotta</strong>
					<a href="showthread.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8569597#post8569597" rel="nofollow"><img class="inlineimg" src="images/ubuntu-VB4/buttons/viewpost-right.png" alt="View Post" /></a>
				</div>
				<div class="message"><a href="http://stackoverflow.com/questions/1054903/how-do-you-get-python-documentation-in-texinfo-info-format" target="_blank">http://stackoverflow.com/questions/1...fo-info-format</a><br />
<br />
Seems like Python docs are no longer in texinfo format.  You can do pretty well in Emacs with this:<br />
<br />
<div class="bbcode_container">
	<div class="bbcode_description">Code:</div>
	<pre class="bbcode_code" style="height:240px;">;; modified from http://www.emacswiki.org/emacs/PythonMode
(defun pydoc (w)
  &quot;Launch PyDOC on the Word at Point&quot;
  (interactive
   (list (let* ((word (thing-at-point 'word))
                (input (read-string 
                        (format &quot;pydoc entry%s: &quot; 
                                (if (not word) 
                                    &quot;&quot; 
                                  (format &quot; (default %s)&quot; word))))))
           (if (string= input &quot;&quot;) 
               (if (not word) (error &quot;No pydoc args given&quot;)
                 word) ;sinon word
             input)))) ;sinon input
  (save-window-excursion
    (shell-command (concat &quot;pydoc &quot; w) &quot;*PYDOCS*&quot;))
    ;;(view-buffer-other-window &quot;*PYDOCS*&quot; nil 'bury-buffer))
    (view-buffer &quot;*PYDOCS*&quot; 'bury-buffer))</pre>
</div></div>
			
		</div>
	</div>
</div>Thank you all for lighting up my mind here.<br />
<br />
If I were to include this text (above), where should I include it? Is there an emacs conf file where I can put this?
				</blockquote>
			</div>

			


		</div>
			
				
			
			
			
		</div>
	</div>
	<div class="postfoot">
		<div class="textcontrols floatcontainer">
			<span class="postcontrols">
				<img style="display:none" id="progress_8581864" src="images/ubuntu-VB4/misc/progress.gif" alt="" />
				
				
<!-- added advance reply -->
                    
                        <a class='quickreply' href="newreply.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8581864&amp;noquote=1" rel="nofollow"><img id="replyimg_8581864" src="clear.gif" alt="Advanced reply" /> Adv Reply</a>
                        <span class="seperator">&nbsp;</span>
                    
<!-- end added advance reply -->
<!-- the next id was qrwq_8581864 -->
				
				
			</span>
			<span class="postlinking">
				
					
				
				

				 
				

					

					
					 

					
					
					
					
					
			</span>
		</div>
	</div>
	<hr />
</li>

<li class="postbit postbitim postcontainer old" id="post_8581892">
	<div class="postdetails_noavatar">
		<div class="posthead">
                        
                                <span class="postdate old">
                                        
                                                <span class="date">December 30th, 2009</span>
                                        
                                </span>
                                <span class="nodecontrols">
                                        
                                                <a name="post8581892" href="showthread.php?t=1363999&amp;s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8581892#post8581892" class="postcounter">#9</a><a id="postcount8581892" name="9"></a>
                                        
                                        
                                        
                                </span>
                        
		</div>

		<div class="userinfo_noavatar">
			<div class="contact">
				
				<div class="username_container">
					
						<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="member.php?u=331087&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="thebrotherofasis is offline"><strong><span style="color: #000000;">thebrotherofasis</span></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="member.php?u=331087&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" class="siteicon_profile">
				View Profile
			</a>
		</li>
		
		<li class="right">
			<a href="search.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=finduser&amp;userid=331087&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				View Forum Posts
			</a>
		</li>
		
		
		<li class="left">
			<a href="private.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=newpm&amp;u=331087" class="siteicon_message" rel="nofollow">
				Private Message
			</a>
		</li>
		
		
		
		
		
		
		

		

		
		
	</ul>
</div>
						<img class="inlineimg onlinestatus" src="images/ubuntu-VB4/statusicon/user-offline.png" alt="thebrotherofasis is offline" border="0" />

					
					<span class="usertitle">
						Just Give Me the Beans!
					</span>
					
						<span class="rank"><img src="images/rank_3.png" alt="" border="" /></span>
					

                                        
					
					
						<div class="imlinks">
							    
						</div>
					
				</div>
			</div>
			
				<div class="userinfo_extra">
					<dl class="userstats">
						<dt>Join Date</dt> <dd>Jun 2007</dd>
						
						
						<!-- <dt>Beans</dt> <dd>60</dd>	 -->
<dt>Beans</dt> <dd>60</dd>

                                                 
						
					</dl>
					
					
				</div>
			
		</div>
	</div>

	<div class="postbody">
		
		<div class="postrow">
		
		<h2 class="posttitle icon">
			Re: How to access python documentation from shell
		</h2>
		
				
				
		<div class="content">
			<div id="post_message_8581892">
				<blockquote class="postcontent restore">
					I did all of the above, and everything seems just great.<br />
<br />
After playing a little with devhelp, it seems that it's just what I was looking for.<br />
<br />
By the way. the html docs are also accessible from here (didn't know that)!<br />
<br />
file:///usr/share/doc/python3.1/html/index.html<br />
<br />
Thank you all .<img src="images/smilies/icon_razz.gif" border="0" alt="" title="Capital Razz" class="inlineimg" /><br />
<br />
Now, since I am getting more and more comfortable with emacs, I'd really like to know (maybe just for the sake of curiousity) how to tweak emacs to see the python docs into the *info* mode. That is what jpkotta suggested, right?
				</blockquote>
			</div>

			


		</div>
			
			<!-- edit note -->
			<blockquote class="postcontent lastedited">
				
					Last edited by thebrotherofasis; December 30th, 2009 at <span class="time">04:20 PM</span>.
				
				
			</blockquote>
			<!-- / edit note -->
			
				
			
			
			
		</div>
	</div>
	<div class="postfoot">
		<div class="textcontrols floatcontainer">
			<span class="postcontrols">
				<img style="display:none" id="progress_8581892" src="images/ubuntu-VB4/misc/progress.gif" alt="" />
				
				
<!-- added advance reply -->
                    
                        <a class='quickreply' href="newreply.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8581892&amp;noquote=1" rel="nofollow"><img id="replyimg_8581892" src="clear.gif" alt="Advanced reply" /> Adv Reply</a>
                        <span class="seperator">&nbsp;</span>
                    
<!-- end added advance reply -->
<!-- the next id was qrwq_8581892 -->
				
				
			</span>
			<span class="postlinking">
				
					
				
				

				 
				

					

					
					 

					
					
					
					
					
			</span>
		</div>
	</div>
	<hr />
</li>

<li class="postbit postbitim postcontainer old" id="post_8582803">
	<div class="postdetails_noavatar">
		<div class="posthead">
                        
                                <span class="postdate old">
                                        
                                                <span class="date">December 30th, 2009</span>
                                        
                                </span>
                                <span class="nodecontrols">
                                        
                                                <a name="post8582803" href="showthread.php?t=1363999&amp;s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8582803#post8582803" class="postcounter">#10</a><a id="postcount8582803" name="10"></a>
                                        
                                        
                                        
                                </span>
                        
		</div>

		<div class="userinfo">
			<div class="contact">
				
					<a class="postuseravatarlink" href="member.php?u=36735&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="jpkotta is offline">
						
							<img src="customavatars/avatar36735_6.gif" alt="jpkotta's Avatar" />
						
					</a>
				
				<div class="username_container">
					
						<div class="popupmenu memberaction">
	<a class="username offline popupctrl" href="member.php?u=36735&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="jpkotta is offline"><strong><span style="color: #000000;">jpkotta</span></strong></a>
	<ul class="popupbody popuphover memberaction_body">
		<li class="left">
			<a href="member.php?u=36735&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" class="siteicon_profile">
				View Profile
			</a>
		</li>
		
		<li class="right">
			<a href="search.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=finduser&amp;userid=36735&amp;contenttype=vBForum_Post&amp;showposts=1" class="siteicon_forum" rel="nofollow">
				View Forum Posts
			</a>
		</li>
		
		
		<li class="left">
			<a href="private.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=newpm&amp;u=36735" class="siteicon_message" rel="nofollow">
				Private Message
			</a>
		</li>
		
		
		
		
		
		
		

		

		
		
	</ul>
</div>
						<img class="inlineimg onlinestatus" src="images/ubuntu-VB4/statusicon/user-offline.png" alt="jpkotta is offline" border="0" />

					
					<span class="usertitle">
						Tall Cafè Ubuntu
					</span>
					
						<span class="rank"><img src="images/rank_20.png" alt="" border="" /></span>
					

                                        
					
					
						<div class="imlinks">
							    
						</div>
					
				</div>
			</div>
			
				<div class="userinfo_extra">
					<dl class="userstats">
						<dt>Join Date</dt> <dd>Aug 2005</dd>
						<dt>Location</dt> <dd>Fargo, ND, USA</dd>
						
						<!-- <dt>Beans</dt> <dd>1,499</dd>	 -->
<dt>Beans</dt> <dd>1,499</dd>

                                                 <dt>Distro</dt><dd>Kubuntu 10.04 Lucid Lynx</dd>
						
					</dl>
					
					
				</div>
			
		</div>
	</div>

	<div class="postbody">
		
		<div class="postrow">
		
		<h2 class="posttitle icon">
			Re: How to access python documentation from shell
		</h2>
		
				
				
					
				
		<div class="content">
			<div id="post_message_8582803">
				<blockquote class="postcontent restore">
					<div class="bbcode_container">
	<div class="bbcode_quote">
		<div class="quote_container">
			<div class="bbcode_quote_container"></div>
			
				<div class="bbcode_postedby">
					<img src="images/ubuntu-VB4/misc/quote_icon.png" alt="Quote" /> Originally Posted by <strong>thebrotherofasis</strong>
					<a href="showthread.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8581892#post8581892" rel="nofollow"><img class="inlineimg" src="images/ubuntu-VB4/buttons/viewpost-right.png" alt="View Post" /></a>
				</div>
				<div class="message">Now, since I am getting more and more comfortable with emacs, I'd really like to know (maybe just for the sake of curiousity) how to tweak emacs to see the python docs into the *info* mode. That is what jpkotta suggested, right?</div>
			
		</div>
	</div>
</div>No, what I posted was a function that takes the word the cursor is on, looks it up with pydoc, and puts the pydoc output in a buffer.  The pydoc buffer is in view mode, and is not part of the info system in any way.  I completely agree that it would be great if the python docs were in info format, but it seems like they're not and I couldn't find a way to convert them.  <br />
<br />
You can put the code in ~/.emacs, or if you prefer (and I do) ~/.emacs.d/init.el which is used if ~/.emacs doesn't exist.
				</blockquote>
			</div>

			


		</div>
			
				
			
			
				<blockquote class="signature restore"><div class="signaturecontainer">Help yourself: <u><a href="http://search.ubuntuwire.com/" target="_blank">Search the  community docs</a></u> or <u><a href="http://rute.2038bug.com/index.html.gz" target="_blank">try</a></u> <u><a href="http://forums.gentoo.org/" target="_blank">other</a></u> <u><a href="http://www.ubuntuguide.org/" target="_blank">resources</a></u>.<br />
<div class="bbcode_container">
	<div class="bbcode_quote">
		<div class="quote_container">
			<div class="bbcode_quote_container"></div>
			
				<div class="bbcode_postedby">
					<img src="images/ubuntu-VB4/misc/quote_icon.png" alt="Quote" /> Originally Posted by <strong>Henry Spencer</strong>
					
				</div>
				<div class="message">Those who do not understand Unix are condemned to reinvent it, poorly.</div>
			
		</div>
	</div>
</div><b>Let science use your computer when you aren't: <a href="https://help.ubuntu.com/community/FoldingAtHome" target="_blank">Folding@Home</a>.</b></div></blockquote>
			
			
		</div>
	</div>
	<div class="postfoot">
		<div class="textcontrols floatcontainer">
			<span class="postcontrols">
				<img style="display:none" id="progress_8582803" src="images/ubuntu-VB4/misc/progress.gif" alt="" />
				
				
<!-- added advance reply -->
                    
                        <a class='quickreply' href="newreply.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;p=8582803&amp;noquote=1" rel="nofollow"><img id="replyimg_8582803" src="clear.gif" alt="Advanced reply" /> Adv Reply</a>
                        <span class="seperator">&nbsp;</span>
                    
<!-- end added advance reply -->
<!-- the next id was qrwq_8582803 -->
				
				
			</span>
			<span class="postlinking">
				
					
				
				

				 
				

					

					
					 

					
					
					
					
					
			</span>
		</div>
	</div>
	<hr />
</li>

		</ol>
		<div class="separator"></div>
		<div class="postlistfoot">
			
		</div>

	

</div>

<div id="below_postlist" class="noinlinemod below_postlist">
	
	<div id="pagination_bottom" class="pagination_bottom">
	
		<form action="showthread.php?t=1363999&amp;page=2&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" method="get" class="pagination popupmenu nohovermenu">
<input type="hidden" name="t" value="1363999" /><input type="hidden" name="s" value="75ed28c9b9400f01a06c3fd96e90ea53" />
	
		<span><a href="javascript://" class="popupctrl">Page 1 of 2</a></span>
		
		
		
		<span class="selected"><a href="javascript://" title="Results 1 to 10 of 11">1</a></span><span><a href="showthread.php?t=1363999&amp;page=2&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="Show results 11 to 11 of 11">2</a></span>
		
		
		<span class="prev_next"><a rel="next" href="showthread.php?t=1363999&amp;page=2&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="Next Page - Results 11 to 11 of 11"><img src="images/ubuntu-VB4/pagination/next-right.png" alt="Next" /></a></span>
		
		
		<span class="first_last"><a href="showthread.php?t=1363999&amp;page=2&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" title="Last Page - Results 11 to 11 of 11">Last<img src="images/ubuntu-VB4/pagination/last-right.png" alt="Last" /></a></span>
		
	
	<ul class="popupbody popuphover">
		<li class="formsubmit jumptopage"><label>Jump to page: <input type="text" name="page" size="4" /></label> <input type="submit" class="button" value="Go" /></li>
	</ul>
</form>
	
		<div class="clear"></div>
<div class="navpopupmenu popupmenu nohovermenu" id="showthread_navpopup">
	
		<span class="shade">Quick Navigation</span>
		<a href="showthread.php?t=1363999&amp;s=75ed28c9b9400f01a06c3fd96e90ea53" class="popupctrl"><span class="ctrlcontainer">Programming Talk</span></a>
		<a href="showthread.php?t=1363999#top" class="textcontrol" onclick="document.location.hash='top';return false;">Top</a>
	
	<ul class="navpopupbody popupbody popuphover">
		
		<li class="optionlabel">Site Areas</li>
		<li><a href="usercp.php?s=75ed28c9b9400f01a06c3fd96e90ea53">Settings</a></li>
		<li><a href="private.php?s=75ed28c9b9400f01a06c3fd96e90ea53">Private Messages</a></li>
		<li><a href="subscription.php?s=75ed28c9b9400f01a06c3fd96e90ea53">Subscriptions</a></li>
		<li><a href="online.php?s=75ed28c9b9400f01a06c3fd96e90ea53">Who's Online</a></li>
		<li><a href="search.php?s=75ed28c9b9400f01a06c3fd96e90ea53">Search Forums</a></li>
		<li><a href="index.php?s=75ed28c9b9400f01a06c3fd96e90ea53">Forums Home</a></li>
		
			<li class="optionlabel">Forums</li>
			
		
			
				<li><a href="forumdisplay.php?f=130&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">The Ubuntu Forum Community</a>
					<ol class="d1">
						
		
			
				<li><a href="forumdisplay.php?f=327&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Ubuntu Official Flavours Support</a>
					<ol class="d2">
						
		
			
				<li><a href="forumdisplay.php?f=326&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">New to Ubuntu</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=331&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">General Help</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=333&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Installation &amp; Upgrades</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=332&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Hardware</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=329&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Desktop Environments</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=336&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Networking &amp; Wireless</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=334&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Multimedia Software</a></li>
			
		
			
					</ol>
				</li>
			
		
			
				<li><a href="forumdisplay.php?f=125&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Ubuntu Specialised Support</a>
					<ol class="d2">
						
		
			
				<li><a href="forumdisplay.php?f=427&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Ubuntu Development Version</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=338&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Security</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=308&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Virtualisation</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=441&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Ubuntu Servers, Cloud and Juju</a>
					<ol class="d3">
						
		
			
				<li><a href="forumdisplay.php?f=339&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Server Platforms</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=392&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Ubuntu Cloud and Juju</a></li>
			
		
			
					</ol>
				</li>
			
		
			
				<li><a href="forumdisplay.php?f=93&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Gaming &amp; Leisure</a>
					<ol class="d3">
						
		
			
				<li><a href="forumdisplay.php?f=413&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Emulators</a></li>
			
		
			
					</ol>
				</li>
			
		
			
				<li><a href="forumdisplay.php?f=313&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Wine</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=310&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Development &amp; Programming</a>
					<ol class="d3">
						
		
			
				<li><a href="forumdisplay.php?f=44&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Packaging and Compiling Programs</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=201&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Development CD/DVD Image Testing</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=417&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Ubuntu Application Development</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=307&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Ubuntu Dev Link Forum</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=39&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Programming Talk</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=41&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Repositories &amp; Backports</a>
					<ol class="d4">
						
		
			
				<li><a href="forumdisplay.php?f=47&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Ubuntu Backports</a>
					<ol class="d5">
						
		
			
				<li><a href="forumdisplay.php?f=82&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Bug Reports / Support</a></li>
			
		
			
					</ol>
				</li>
			
		
			
					</ol>
				</li>
			
		
			
					</ol>
				</li>
			
		
			
				<li><a href="forumdisplay.php?f=341&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">System76 Support</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=328&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Apple Hardware Users</a></li>
			
		
			
					</ol>
				</li>
			
		
			
				<li><a href="forumdisplay.php?f=175&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Ubuntu Community Discussions</a>
					<ol class="d2">
						
		
			
				<li><a href="forumdisplay.php?f=434&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Ubuntu, Linux and OS Chat</a>
					<ol class="d3">
						
		
			
				<li><a href="forumdisplay.php?f=302&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Recurring Discussions</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=270&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Full Circle Magazine</a></li>
			
		
			
					</ol>
				</li>
			
		
			
				<li><a href="forumdisplay.php?f=11&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">The Cafe</a>
					<ol class="d3">
						
		
			
				<li><a href="forumdisplay.php?f=298&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Cafe Games</a></li>
			
		
			
					</ol>
				</li>
			
		
			
				<li><a href="forumdisplay.php?f=38&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Market</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=426&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Mobile Technology Discussions</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=13&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Announcements &amp; News</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=243&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Weekly Newsletter</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=404&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Membership Applications</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=122&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">The Fridge Discussions</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=357&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Forum Council Agenda</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=48&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Forum Feedback &amp; Help</a>
					<ol class="d3">
						
		
			
				<li><a href="forumdisplay.php?f=181&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Request a LoCo forum</a></li>
			
		
			
					</ol>
				</li>
			
		
			
				<li><a href="forumdisplay.php?f=123&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Resolution Centre</a></li>
			
		
			
					</ol>
				</li>
			
		
			
				<li><a href="forumdisplay.php?f=423&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Other Discussion and Support</a>
					<ol class="d2">
						
		
			
				<li><a href="forumdisplay.php?f=446&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Other OS Support and Projects</a>
					<ol class="d3">
						
		
			
				<li><a href="forumdisplay.php?f=447&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Other Operating Systems</a>
					<ol class="d4">
						
		
			
				<li><a href="forumdisplay.php?f=452&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Ubuntu/Debian BASED</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=161&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Debian</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=453&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">MINT</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=321&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Arch and derivatives</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=162&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Fedora/RedHat and derivatives</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=344&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Mandriva/Mageia</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=163&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Slackware and derivatives</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=164&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">openSUSE and SUSE Linux Enterprise</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=165&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Mac OSX</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=457&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">PCLinuxOS</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=166&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Gentoo and derivatives</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=170&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Windows</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=171&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">BSD</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=401&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Any Other OS</a></li>
			
		
			
					</ol>
				</li>
			
		
			
					</ol>
				</li>
			
		
			
				<li><a href="forumdisplay.php?f=145&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Assistive Technology &amp; Accessibility</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=16&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Art &amp; Design</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=169&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Education &amp; Science</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=428&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Documentation and Community Wiki Discussions</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=100&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Tutorials</a>
					<ol class="d3">
						
		
			
				<li><a href="forumdisplay.php?f=255&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Outdated Tutorials &amp; Tips</a></li>
			
		
			
					</ol>
				</li>
			
		
			
				<li><a href="forumdisplay.php?f=76&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Ubuntu Women</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=183&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Ubuntu LoCo Team Forums</a>
					<ol class="d3">
						
		
			
				<li><a href="forumdisplay.php?f=245&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Americas LoCo Teams</a>
					<ol class="d4">
						
		
			
				<li><a href="forumdisplay.php?f=189&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Argentina Team</a>
					<ol class="d5">
						
		
			
				<li><a href="forumdisplay.php?f=349&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Software</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=350&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Hardware</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=351&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Comunidad</a></li>
			
		
			
					</ol>
				</li>
			
		
			
				<li><a href="forumdisplay.php?f=209&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Arizona Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=208&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Arkansas Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=445&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Brazil Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=188&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">California Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=395&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Canada Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=397&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Centroamerica Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=362&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Chile Team</a>
					<ol class="d5">
						
		
			
				<li><a href="forumdisplay.php?f=363&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Comunidad</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=364&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Hardware</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=365&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Software</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=366&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Instalación y Actualización</a></li>
			
		
			
					</ol>
				</li>
			
		
			
				<li><a href="forumdisplay.php?f=197&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Colombia Team - Colombia</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=210&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Georgia Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=247&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Illinois Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=213&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Indiana - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=203&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Kentucky Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=292&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Maine Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=282&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Minnesota Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=276&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Mississippi Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=371&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Nebraska Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=187&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">New Mexico Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=212&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">New York - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=278&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">North Carolina Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=191&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Ohio Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=286&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Oklahoma Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=345&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Oregon Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=228&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Pennsylvania Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=393&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Peru Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=379&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Texas Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=414&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Uruguay Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=184&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Utah Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=236&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Virginia Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=312&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">West Virginia Team - US</a></li>
			
		
			
					</ol>
				</li>
			
		
			
				<li><a href="forumdisplay.php?f=389&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Asia and Oceania LoCo Teams</a>
					<ol class="d4">
						
		
			
				<li><a href="forumdisplay.php?f=399&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Australia Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=409&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Bangladesh Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=382&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Hong Kong Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=431&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Myanmar Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=303&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Philippine Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=433&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Singapore Team</a></li>
			
		
			
					</ol>
				</li>
			
		
			
				<li><a href="forumdisplay.php?f=388&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Europe, Middle East, and African (EMEA) LoCo Teams</a>
					<ol class="d4">
						
		
			
				<li><a href="forumdisplay.php?f=372&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Albania Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=206&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Catalan Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=462&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Portugal Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=258&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Egypt Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=304&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Georgia Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=195&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Ireland Team - Ireland</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=193&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Kenyan Team - Kenya</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=196&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Kurdish Team - Kurdistan</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=272&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Lebanon Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=390&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Morocco Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=264&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Saudi Arabia Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=261&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Sudan Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=227&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Tunisia Team</a></li>
			
		
			
					</ol>
				</li>
			
		
			
				<li><a href="forumdisplay.php?f=204&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Other Forums &amp; Teams</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=458&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">LoCo Archive</a>
					<ol class="d4">
						
		
			
				<li><a href="forumdisplay.php?f=396&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Afghanistan Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=232&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Alabama Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=280&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Alaska Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=383&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Algerian Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=202&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Andhra Pradesh Team - India</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=400&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Austria Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=309&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Bangalore Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=373&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Bolivia Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=291&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Cameroon Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=207&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Colorado Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=248&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Connecticut Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=262&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Costa Rica Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=347&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Delhi Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=290&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Ecuador Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=374&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">El Salvador Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=225&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Florida Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=356&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Galician LoCo Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=461&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Greek team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=314&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Hawaii Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=369&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Honduras Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=398&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Idaho Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=381&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Iowa Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=320&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Jordan Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=275&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Kansas Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=378&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Libya Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=288&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Louisiana Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=224&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Maryland Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=260&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Massachusetts Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=271&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Michigan Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=277&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Missouri Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=229&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Montana Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=410&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Namibia Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=283&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Nevada Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=289&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">New Hampshire Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=185&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">New Jersey Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=190&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Northeastern Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=281&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Panama Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=273&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Paraguay Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=429&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Qatar Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=375&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Quebec Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=287&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Rhode Island Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=250&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Senegal Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=311&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">South Carolina Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=285&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">South Dakota Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=319&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Switzerland Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=186&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Tamil Team - India</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=259&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Tennessee Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=386&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Trinidad &amp; Tobago Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=384&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Uganda Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=274&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">United Kingdom Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=284&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">US LoCo Teams</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=300&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Venezuela Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=360&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Wales Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=252&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Washington DC Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=380&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Washington State Team - US</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=263&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Wisconsin Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=387&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Yemen Team</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=194&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Za Team - South Africa</a></li>
			
		
			
				<li><a href="forumdisplay.php?f=299&amp;s=75ed28c9b9400f01a06c3fd96e90ea53">Zimbabwe Team</a></li>
			
		
			
					</ol>
				</li>
			
		
			
					</ol>
				</li>
			
		
			
					</ol>
				</li>
			
		
			
					</ol>
				</li>
			
		
		
	</ul>
</div>
<div class="clear"></div>
	</div>
</div>








	<!-- next / previous links -->
	<div class="navlinks">
		
			<strong>&laquo;</strong>
			<a href="showthread.php?t=1363999&amp;s=75ed28c9b9400f01a06c3fd96e90ea53&amp;goto=nextoldest" rel="nofollow">Previous Thread</a>
			|
			<a href="showthread.php?t=1363999&amp;s=75ed28c9b9400f01a06c3fd96e90ea53&amp;goto=nextnewest" rel="nofollow">Next Thread</a>
			<strong>&raquo;</strong>
		
	</div>
	<!-- / next / previous links -->

<div id="thread_info" class="thread_info block">
	
	
	
	
	
	
	<div class="options_block_container">
		
		<div class="options_block2">
			<h4 class="blockhead options_correct">Bookmarks</h4>
			<div id="social_bookmarks_list" class="thread_info_block blockbody formcontrols floatcontainer options_correct">
				<h5 class="blocksubhead">Bookmarks</h5>
				<ul class="icon_list"><li class="smallfont">
	
		<a href="http://digg.com/submit?phrase=2&amp;url=https%3A%2F%2Fubuntuforums.org%2Fshowthread.php%3Ft%3D1363999&amp;title=How+to+access+python+documentation+from+shell" target="socialbookmark"><img src="images/ubuntu-VB4/misc/bookmarksite_digg.gif" alt="Submit to Digg" /></a>
	
	<a href="http://digg.com/submit?phrase=2&amp;url=https%3A%2F%2Fubuntuforums.org%2Fshowthread.php%3Ft%3D1363999&amp;title=How+to+access+python+documentation+from+shell" target="socialbookmark">Digg</a>
</li><li class="smallfont">
	
		<a href="http://del.icio.us/post?url=https%3A%2F%2Fubuntuforums.org%2Fshowthread.php%3Ft%3D1363999&amp;title=How+to+access+python+documentation+from+shell" target="socialbookmark"><img src="images/ubuntu-VB4/misc/bookmarksite_delicious.gif" alt="Submit to del.icio.us" /></a>
	
	<a href="http://del.icio.us/post?url=https%3A%2F%2Fubuntuforums.org%2Fshowthread.php%3Ft%3D1363999&amp;title=How+to+access+python+documentation+from+shell" target="socialbookmark">del.icio.us</a>
</li><li class="smallfont">
	
		<a href="http://www.stumbleupon.com/submit?url=https%3A%2F%2Fubuntuforums.org%2Fshowthread.php%3Ft%3D1363999&amp;title=How+to+access+python+documentation+from+shell" target="socialbookmark"><img src="images/ubuntu-VB4/misc/bookmarksite_stumbleupon.gif" alt="Submit to StumbleUpon" /></a>
	
	<a href="http://www.stumbleupon.com/submit?url=https%3A%2F%2Fubuntuforums.org%2Fshowthread.php%3Ft%3D1363999&amp;title=How+to+access+python+documentation+from+shell" target="socialbookmark">StumbleUpon</a>
</li><li class="smallfont">
	
		<a href="http://www.google.com/bookmarks/mark?op=edit&amp;output=popup&amp;bkmk=https%3A%2F%2Fubuntuforums.org%2Fshowthread.php%3Ft%3D1363999&amp;title=How+to+access+python+documentation+from+shell" target="socialbookmark"><img src="images/ubuntu-VB4/misc/bookmarksite_google.gif" alt="Submit to Google" /></a>
	
	<a href="http://www.google.com/bookmarks/mark?op=edit&amp;output=popup&amp;bkmk=https%3A%2F%2Fubuntuforums.org%2Fshowthread.php%3Ft%3D1363999&amp;title=How+to+access+python+documentation+from+shell" target="socialbookmark">Google</a>
</li></ul>
			</div>
		</div>
		
		<div class="options_block">
			<h4 class="collapse blockhead options_correct">
				<a class="collapse" id="collapse_posting_rules" href="showthread.php?t=1363999#top"><img src="images/ubuntu-VB4/buttons/collapse_40b.png" alt="" /></a>
				Posting Permissions
			</h4>
			<div id="posting_rules" class="thread_info_block blockbody formcontrols floatcontainer options_correct">
				
<div id="forumrules" class="info_subblock">

	<ul class="youcandoblock">
		<li>You <strong>may not</strong> post new threads</li>
		<li>You <strong>may not</strong> post replies</li>
		<li>You <strong>may not</strong> post attachments</li>
		<li>You <strong>may not</strong> edit your posts</li>
		<li>&nbsp;</li>
	</ul>
	<div class="bbcodeblock">
		<ul>
			<li><a href="misc.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=bbcode" target="_blank">BB code</a> is <strong>On</strong></li>
			<li><a href="misc.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=showsmilies" target="_blank">Smilies</a> are <strong>On</strong></li>
			<li><a href="misc.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=bbcode#imgcode" target="_blank">[IMG]</a> code is <strong>On</strong></li>
			<li><a href="misc.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=bbcode#videocode" target="_blank">[VIDEO]</a> code is <strong>Off</strong></li>
			<li>HTML code is <strong>Off</strong></li>
		</ul>
	</div>
	<p class="rules_link"><a href="misc.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;do=showrules" target="_blank">Ubuntu Forums Code of Conduct</a></p>

</div>

			</div>
		</div>
	</div>
</div>








<div id="footer" class="floatcontainer footer">

	<form action="index.php" method="get" id="footer_select" class="footer_select">

		
			<select name="styleid" onchange="switch_id(this, 'style')">
				<optgroup label="Quick Style Chooser"><option class="hidden"></option></optgroup>
				
					
					<optgroup label="&nbsp;Standard Styles">
									
					
	<option value="117" class="" selected="selected">-- Ubuntu vB4.x</option>

					
					</optgroup>
										
				
				
					
					<optgroup label="&nbsp;Mobile Styles">
					
					
	<option value="118" class="" >-- Ubuntu Mobile Style</option>

					
					</optgroup>
										
				
			</select>	
		
		
		
	</form>

	<ul id="footer_links" class="footer_links">
		
		<li><a href="https://ubuntuforums.org">Ubuntu Forums</a></li>
		
		
		<li><a href="archive/index.php?s=75ed28c9b9400f01a06c3fd96e90ea53">Archive</a></li>
		
		
		
		<li><a href="showthread.php?t=1363999#top" onclick="document.location.hash='top'; return false;">Top</a></li>
	</ul>
	
	
	
	
	<script type="text/javascript">
	<!--
		// Main vBulletin Javascript Initialization
		vBulletin_init();
	//-->
	</script>
        
</div>
</div> <!-- closing div for body_wrapper -->

<div class="below_body">
<div id="footer_time" class="shade footer_time">All times are GMT +1. The time now is <span class="time">09:45 PM</span>.</div>

<div id="footer_copyright" class="shade footer_copyright">
	<!-- Do not remove this copyright notice -->
	vBulletin  ©2000 - 2018, Jelsoft Enterprises Ltd. Ubuntu Logo, Ubuntu and Canonical © Canonical Ltd. Tango Icons © Tango Desktop Project. 
<br>
User contributions on this site are licensed under the  <a href="https://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution Share Alike 4.0 International License</a>. For details and our forum data attribution, retention and privacy policy, see <a href="http://ubuntuforums.org/showthread.php?t=2231107">here</a> 

	<!-- Do not remove this copyright notice -->	
</div>
<div id="footer_morecopyright" class="shade footer_morecopyright">
	<!-- Do not remove cronimage or your scheduled tasks will cease to function -->
	<img src="https://ubuntuforums.org/cron.php?s=75ed28c9b9400f01a06c3fd96e90ea53&amp;rand=1537908300" alt="" width="1" height="1" border="0" />
	<!-- Do not remove cronimage or your scheduled tasks will cease to function -->
	
	
</div>
 

</div>
</body>
</html>