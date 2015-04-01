
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en-US" > <!--<![endif]-->


<!-- Mirrored from batakoo.themesawesome.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Feb 2015 09:25:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<!--[if ie]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
	
<title>FlowTech</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<title>FlowTech</title>
<link rel="alternate" type="application/rss+xml" title="batakoo &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="batakoo &raquo; Comments Feed" href="comments/feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="batakoo &raquo; Home Comments Feed" href="home/feed/index.html" />
<link rel='stylesheet' id='aqpb-view-css-css'  href='wp-content/plugins/aqua-page-builder/assets/stylesheets/aqpb-view6a18.css?ver=1423472057' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='wp-content/plugins/contact-form-7/includes/css/stylesfa0c.css?ver=4.0.3' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='wp-content/plugins/revslider/rs-plugin/css/settings1dc6.css?ver=4.6.5' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
.tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}
</style>
<link rel='stylesheet' id='batakoo-bootstrap-css'  href='wp-content/themes/batakoo/css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='batakoo-plugin-css-css'  href='wp-content/themes/batakoo/css/plugin.css' type='text/css' media='all' />
<link rel='stylesheet' id='batakoo-style-css'  href='wp-content/themes/batakoo/style2f54.css?ver=4.1' type='text/css' media='all' />
<link rel='stylesheet' id='batakoo-font-css'  href='wp-content/themes/batakoo/css/font.css' type='text/css' media='all' />
<link rel='stylesheet' id='redux-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C700%7CPT+Serif&amp;ver=1422016063' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jquery90f9.js?ver=1.11.1'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
<script type='text/javascript' src='wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.tools.min1dc6.js?ver=4.6.5'></script>
<script type='text/javascript' src='wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min1dc6.js?ver=4.6.5'></script>
<script type='text/javascript' src='wp-content/themes/batakoo/js/modernizr2f54.js?ver=4.1'></script>
<script type='text/javascript' src='wp-content/themes/batakoo/js/respond2f54.js?ver=4.1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.1" />
<link rel='canonical' href='index.html' />
<link rel='shortlink' href='index.html' />
		<script type="text/javascript">
			jQuery(document).ready(function() {
				// CUSTOM AJAX CONTENT LOADING FUNCTION
				var ajaxRevslider = function(obj) {
				
					// obj.type : Post Type
					// obj.id : ID of Content to Load
					// obj.aspectratio : The Aspect Ratio of the Container / Media
					// obj.selector : The Container Selector where the Content of Ajax will be injected. It is done via the Essential Grid on Return of Content
					
					var content = "";

					data = {};
					
					data.action = 'revslider_ajax_call_front';
					data.client_action = 'get_slider_html';
					data.token = 'f1682bc8ee';
					data.type = obj.type;
					data.id = obj.id;
					data.aspectratio = obj.aspectratio;
					
					// SYNC AJAX REQUEST
					jQuery.ajax({
						type:"post",
						url:"http://batakoo.themesawesome.com/wp-admin/admin-ajax.php",
						dataType: 'json',
						data:data,
						async:false,
						success: function(ret, textStatus, XMLHttpRequest) {
							if(ret.success == true)
								content = ret.data;								
						},
						error: function(e) {
							console.log(e);
						}
					});
					
					 // FIRST RETURN THE CONTENT WHEN IT IS LOADED !!
					 return content;						 
				};
				
				// CUSTOM AJAX FUNCTION TO REMOVE THE SLIDER
				var ajaxRemoveRevslider = function(obj) {
					return jQuery(obj.selector+" .rev_slider").revkill();
				};

				// EXTEND THE AJAX CONTENT LOADING TYPES WITH TYPE AND FUNCTION
				var extendessential = setInterval(function() {
					if (jQuery.fn.tpessential != undefined) {
						clearInterval(extendessential);
						if(typeof(jQuery.fn.tpessential.defaults) !== 'undefined') {
							jQuery.fn.tpessential.defaults.ajaxTypes.push({type:"revslider",func:ajaxRevslider,killfunc:ajaxRemoveRevslider,openAnimationSpeed:0.3});   
							// type:  Name of the Post to load via Ajax into the Essential Grid Ajax Container
							// func: the Function Name which is Called once the Item with the Post Type has been clicked
							// killfunc: function to kill in case the Ajax Window going to be removed (before Remove function !
							// openAnimationSpeed: how quick the Ajax Content window should be animated (default is 0.3)
						}
					}
				},30);
			});
		</script>
		<style type="text/css">.site-header, .scroll-run .site-header{background-color:#242533}.site-navigation li a{color:#ffffff}.site-navigation li ul, .site-navigation li:hover > a{background-color:#2f3043}.site-navigation li ul li a{border-left-color:#2f3043}.site-navigation li ul li a:hover{border-color:#f6c606}.small-icon i{color:#f6c606}.small-icon{border-color:#f6c606}.col-service h4{color:#ffffff}.small-icon-text p{color:#cccccc}.aq-block-batakoo_about_block .home-title{color:#ffffff}.aq-block-batakoo_about_block .btn-default{border-color:#ffffff}.aq-block-batakoo_about_block .home-title, .aq-block-batakoo_about_block .btn-default:hover{border-color:#f6c606}.aq-block-batakoo_about_block p{color:#cccccc}.contact-hero{background-color:#242533}.contact-hero p{color:#ffffff}.home-title .wrap-1:before, .widget-title .wrap-1:before{background-color:#f6c606}.home-title, .widget-title{color:#242533}.testimonial-item .context, .testimonial-item .flex-direction-nav a{color:#ffffff}.testimonial-item .flex-control-paging li a.flex-active{background-color:#ffffff}.testimonial-item .flex-control-paging li a{border-color:#ffffff}.aq-block-batakoo_services_block .filter{background-color:#4a4d71}.aq-block-batakoo_services_block .filter ul span{color:#ffffff}.aq-block-batakoo_services_block .filter ul li:hover, .aq-block-batakoo_services_block .filter ul li.active{background-color:#f6c606}.service .info .title, .service .info p{color:#000000}ul#options li a.selected, ul#options li a:hover{background-color:#242533}ul#options li a{color:#242533}ul#options li a.selected, ul#options li a:hover{color:#ffffff}.foliobox{background:#f6c606}.foliobox figcaption, .foliobox .foltitle a, .foliobox .goto{color:#ffffff}.foliobox .goto, .foliobox figcaption::before{border-color:#ffffff}.entry-title a, #secondary .widget ul li a{color:#333333}.entry-title a:hover, #secondary .widget ul li a:hover{color:#e18f00}.content-area p, .entry-meta .comment-link .comment-number, .entry-meta div.social-shares a, .entry-meta div.comment-link, .entry-meta div.social-shares{color:#878787}.cat-links a, #secondary .post-category a{color:#e18f00}.cat-links a:hover, #secondary .post-category a:hover{color:#fb9f00}.pagination > .active > a, .pagination > .active > a:hover, .pagination > .active > a:focus, .pagination > .active > span, .pagination > .active > span:hover, .pagination > .active > span:focus{color:#ffffff}.pagination > li > a, .pagination > li > span{background-color:#ffffff}.pagination > .active > a, .pagination > .active > a:hover, .pagination > .active > a:focus, .pagination > .active > span, .pagination > .active > span:hover, .pagination > .active > span:focus{background-color:#e18f00}.pagination > .active > a, .pagination > .active > a:hover, .pagination > .active > a:focus, .pagination > .active > span, .pagination > .active > span:hover, .pagination > .active > span:focus{border-color:#e18f00}.pagination > li > a, .pagination > li > span, .pagination > li > a:hover, .pagination > li > a:focus, .pagination > li > span:hover, .pagination > li > span:focus{color:#e18f00}.pagination > li > a:hover, .pagination > li > a:focus, .pagination > li > span:hover, .pagination > li > span:focus{background-color:#eeeeee}.post.format-quote blockquote, .format-quote.search-result blockquote{background-color:#242533}.post.format-quote blockquote, .format-quote.search-result blockquote{color:#ffffff}.btn-default, .comment-respond .submit, .contact .wpcf7-submit{background-color:#f6c606}.btn-default, .comment-respond .submit, .contact .wpcf7-submit{border-color:#f6c606}.btn-default, .btn-default:hover, .btn-default:focus, .btn-default.focus, .btn-default:active, .btn-default.active, .open > .btn-default.dropdown-toggle, .comment-respond .submit, .contact .wpcf7-submit{color:#ffffff}.btn-default:hover, .btn-default:focus, .btn-default.focus, .btn-default:active, .btn-default.active, .open > .btn-default.dropdown-toggle, .comment-respond .submit:hover, .contact .wpcf7-submit:hover{background-color:#c49e05}.comment-respond .submit:hover, .contact .wpcf7-submit:hover{border-color:#c49e05}.footer-credit{background-color:#242533}.list-socmed li a{color:#929299}.list-socmed li a:hover{color:#ffffff}.footer-credit{color:#ffffff}</style> <style type="text/css" title="dynamic-css" class="options-output">body{font-family:Open Sans;font-weight:400;font-style:normal;}h1,h2,h3,h4,h5,h6{font-family:Open Sans;font-weight:400;font-style:normal;}.site-navigation li a{font-family:Open Sans;font-weight:700;font-style:normal;}.entry-content{font-family:PT Serif;font-weight:normal;font-style:400;}</style>
</head>

<body class="home page page-id-3857 page-template page-template-template page-template-page-builder-template page-template-templatepage-builder-template-php">

	<?php
		$con=mysqli_connect("localhost","root","","flowteach");


		$result = mysqli_query($con,"SELECT * FROM second");

			$i=1;
			while($row = mysqli_fetch_array($result))
			{
				${"header".$i} = $row['news1'];
				${"content".$i} = $row['news2'];
				${"image".$i}= $row['image_name'];
				$i++;
			}
	?>
	

			<header id="masthead" class="site-header navbar-fixed-top">
    		<div class="header-navigation">
    			<div class="container-fluid">
    				<div class="row" style="background: #4098FF;">

    				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".site-navigation" aria-expanded="false">
			        	<span class="sr-only">Toggle navigation</span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			        </button>

    					<div class="logo navbar-brand">
								
	<div class="logo-image">
	<a href="index.html"><img src="wp-content/uploads/2015/01/ss.jpg" class="image-logo" alt="logo" /></a>
	</div>
	
	    					</div><!-- end logo -->

    					<nav id="primary-navigation" class="site-navigation navbar-collapse collapse" role="navigation">
    						<nav class="nav-menu">
    							<ul id="menu-main-menu" class="menu"><li id="menu-item-3953" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-3857 current_page_item menu-item-3953"><a href="index.php">Home</a></li>
<li id="menu-item-3963" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3963"><a href="services/index.html">Products</a></li>
<li id="menu-item-3961" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3961"><a href="portfolio/index.html">Projects</a></li>
<li id="menu-item-3964" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3964"><a href="testimonial/index.html">Sustainability</a></li>
<!--<li id="menu-item-3966" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3966"><a href="#">Pages</a>
<ul class="sub-menu">
	<li id="menu-item-3971" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3971"><a href="frequently-asked-questions/index.html">Frequently Asked Question</a></li>
	<li id="menu-item-3969" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3969"><a href="index623c.html?s=a">Serch Result</a></li>
	<li id="menu-item-3970" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3970"><a href="404.html">404 Page</a></li>
</ul>
</li>-->
<li id="menu-item-3954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3954"><a href="blog/index.php">Blog</a>
<!--<ul class="sub-menu">
	<li id="menu-item-3960" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3960"><a href="masonry-grid-blog/index.html">Masonry Grid Blog</a></li>
</ul>-->
</li>
<li id="menu-item-3955" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3955"><a href="contact-2/index.html">Contact</a></li>
</ul>    						</nav><!-- end nav-menu -->
    					</nav><!-- primary-navigation -->   				
                    </div><!-- end row -->
    			</div><!-- end container-fluid -->
    		</div><!-- end header-navigation -->
    	</header><!-- end #masthead -->
<div id="main" class="site-main clearfix">


	

        <article  id="page-3857" class="post-3857 page type-page status-publish hentry page-builder">

                                                            
 

<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:640px;">
<!-- START REVOLUTION SLIDER 4.6.5 fullwidth mode -->
	<div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;max-height:640px;height:640px;">
<ul>	<!-- SLIDE  -->
	<li data-transition="incube-horizontal" data-slotamount="7" data-masterspeed="500"  data-saveperformance="off" >
		<!-- MAIN IMAGE -->
		<img src="wp-content/uploads/2015/01/slider-01.jpg"  alt="slider-01"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
		<!-- LAYERS -->

		<!-- LAYER NR. 1 -->
		<div class="tp-caption batakoomainslide skewfromrightshort tp-resizeme" 
			 data-x="72" 
			 data-y="center" data-voffset="-5" 
			data-speed="800" 
			data-start="500" 
			data-easing="Power3.easeInOut" 
			data-splitin="none" 
			data-splitout="none" 
			data-elementdelay="0.1" 
			data-endelementdelay="0.1" 
			 data-endspeed="800" 

			style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Your Trust towards us 
		</div>

		<!-- LAYER NR. 2 -->
		<div class="tp-caption batakoomainslide skewfromrightshort tp-resizeme" 
			 data-x="71" 
			 data-y="368"  
			data-speed="1000" 
			data-start="500" 
			data-easing="Power3.easeInOut" 
			data-splitin="none" 
			data-splitout="none" 
			data-elementdelay="0.1" 
			data-endelementdelay="0.1" 
			 data-endspeed="1000" 

			style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">is your trust against fire 
		</div>

		<!-- LAYER NR. 3 -->
		<div class="tp-caption batakoomainslidebtn skewfromrightshort tp-resizeme" 
			 data-x="60" 
			 data-y="center" data-voffset="175" 
			data-speed="1200" 
			data-start="500" 
			data-easing="Power3.easeInOut" 
			data-splitin="none" 
			data-splitout="none" 
			data-elementdelay="0.1" 
			data-endelementdelay="0.1" 
			 data-endspeed="1200" 

			style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
		</div>
	</li>
	<!-- SLIDE  -->
	<li data-transition="curtain-2" data-slotamount="7" data-masterspeed="500"  data-saveperformance="off" >
		<!-- MAIN IMAGE -->
		<img src="wp-content/uploads/2015/01/slider-02.jpg"  alt="slider-02"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
		<!-- LAYERS -->

		<!-- LAYER NR. 1 -->
		<div class="tp-caption batakoomainslide lft tp-resizeme" 
			 data-x="72" 
			 data-y="center" data-voffset="-5" 
			data-speed="800" 
			data-start="500" 
			data-easing="Power3.easeInOut" 
			data-splitin="none" 
			data-splitout="none" 
			data-elementdelay="0.1" 
			data-endelementdelay="0.1" 
			 data-endspeed="800" 

			style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Technical presentation 
		</div>

		<!-- LAYER NR. 2 -->
		<div class="tp-caption batakoomainslide lft tp-resizeme" 
			 data-x="71" 
			 data-y="368"  
			data-speed="1000" 
			data-start="500" 
			data-easing="Power3.easeInOut" 
			data-splitin="none" 
			data-splitout="none" 
			data-elementdelay="0.1" 
			data-endelementdelay="0.1" 
			 data-endspeed="1000" 

			style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">for better understanding
		</div>

		<!-- LAYER NR. 3 -->
		<div class="tp-caption batakoomainslidebtn lft tp-resizeme" 
			 data-x="60" 
			 data-y="center" data-voffset="175" 
			data-speed="1000" 
			data-start="500" 
			data-easing="Power3.easeInOut" 
			data-splitin="none" 
			data-splitout="none" 
			data-elementdelay="0.1" 
			data-endelementdelay="0.1" 
			 data-endspeed="1200" 

			style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
		</div>
	</li>
	<!-- SLIDE  -->
	<li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="500"  data-saveperformance="off" >
		<!-- MAIN IMAGE -->
		<img src="wp-content/uploads/2015/01/slider-03.jpg"  alt="slider-03"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
		<!-- LAYERS -->

		<!-- LAYER NR. 1 -->
		<div class="tp-caption batakoomainslide lfr tp-resizeme" 
			 data-x="72" 
			 data-y="center" data-voffset="-5" 
			data-speed="800" 
			data-start="450" 
			data-easing="Power3.easeInOut" 
			data-splitin="none" 
			data-splitout="none" 
			data-elementdelay="0.1" 
			data-endelementdelay="0.1" 
			 data-endspeed="800" 

			style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">System connected with  
		</div>

		<!-- LAYER NR. 2 -->
		<div class="tp-caption batakoomainslide lfr tp-resizeme" 
			 data-x="71" 
			 data-y="368"  
			data-speed="1000" 
			data-start="550" 
			data-easing="Power3.easeInOut" 
			data-splitin="none" 
			data-splitout="none" 
			data-elementdelay="0.1" 
			data-endelementdelay="0.1" 
			 data-endspeed="1000" 

			style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">all items
		</div>

		<!-- LAYER NR. 3 -->
		<div class="tp-caption batakoomainslidebtn skewfromright tp-resizeme" 
			 data-x="60" 
			 data-y="center" data-voffset="175" 
			data-speed="1200" 
			data-start="550" 
			data-easing="Power3.easeInOut" 
			data-splitin="none" 
			data-splitout="none" 
			data-elementdelay="0.1" 
			data-endelementdelay="0.1" 
			 data-endspeed="1200" 

			style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
		</div>
	</li>
</ul>
<div class="tp-bannertimer"></div>	</div>
			

			<style scoped>.tp-caption.batakoomainslide,.batakoomainslide{font-size:60px;line-height:1.55em;font-weight:300;font-family:"Open Sans",sans-serif;color:#ffffff;text-decoration:none;padding:5px 15px 5px 15px;text-shadow:none;margin:0px;display:inline;text-align:center;background-color:rgba(0,0,0,0.498039);border-width:0px;border-color:rgb(255,255,255);border-style:none}.tp-caption.batakoomainslidebtn,.batakoomainslidebtn{font-size:12px;line-height:20px;font-weight:300;font-family:"Open Sans",sans-serif;color:rgb(255,255,255);text-decoration:none;padding:5px 10px;text-shadow:none;margin:0px;white-space:nowrap;background-color:rgba(246,198,6,0);border-width:0px;border-color:rgb(255,255,255);border-style:none}</style>

			<script type="text/javascript">

				/******************************************
					-	PREPARE PLACEHOLDER FOR SLIDER	-
				******************************************/
				

				var setREVStartSize = function() {
					var	tpopt = new Object();
						tpopt.startwidth = 1170;
						tpopt.startheight = 640;
						tpopt.container = jQuery('#rev_slider_1_1');
						tpopt.fullScreen = "off";
						tpopt.forceFullWidth="on";

					tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh;}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);}
				};

				/* CALL PLACEHOLDER */
				setREVStartSize();


				var tpj=jQuery;
				tpj.noConflict();
				var revapi1;

				tpj(document).ready(function() {

				if(tpj('#rev_slider_1_1').revolution == undefined){
					revslider_showDoubleJqueryError('#rev_slider_1_1');
				}else{
				   revapi1 = tpj('#rev_slider_1_1').show().revolution(
					{	
												dottedOverlay:"none",
						delay:7000,
						startwidth:1170,
						startheight:640,
						hideThumbs:200,

						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:3,
						
												
						simplifyAll:"off",

						navigationType:"bullet",
						navigationArrows:"solo",
						navigationStyle:"round",

						touchenabled:"on",
						onHoverStop:"on",
						nextSlideOnWindowFocus:"off",

						swipe_threshold: 75,
						swipe_min_touches: 1,
						drag_block_vertical: false,
						
												
													panZoomDisableOnMobile:"on",
													
						keyboardNavigation:"off",

						navigationHAlign:"center",
						navigationVAlign:"bottom",
						navigationHOffset:0,
						navigationVOffset:20,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,

						shadow:0,
						fullWidth:"on",
						fullScreen:"off",

												spinner:"spinner2",
												
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						shuffle:"off",

						autoHeight:"on",
						forceFullWidth:"on",
						
						
						
						hideThumbsOnMobile:"on",
						hideBulletsOnMobile:"on",
						hideArrowsOnMobile:"on",
						hideThumbsUnderResolution:0,

												hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0					});



									}
				});	/*ready*/

			</script>


			<style type="text/css">
	#rev_slider_1_1_wrapper .tp-loader.spinner2{ background-color: #FFFFFF !important; }
</style>
</div><!-- END REVOLUTION SLIDER -->
<div id="aq-template-wrapper-3808" class="aq-template-wrapper aq_row"><div id="features" class="section-builder" style="background-color: #242533; padding:70px 0;"><div class="container inner"><div id="aq-block-3808-2" class="aq-block aq-block-batakoo_features_block aq_span4 aq-first clearfix">
			
					<div class="col-service">
												<span class="small-icon">
							<i class="fa fa-fw fa-group"></i>						</span>
						<div class="small-icon-text">
							<h4>Professional Team</h4>
							<p>Industry expertiseand Highly capable with technical support & knowledge.</p>
						</div><!-- end text -->
					</div><!-- end column -->


		</div><div id="aq-block-3808-3" class="aq-block aq-block-batakoo_features_block aq_span4  clearfix">
			
					<div class="col-service">
												<span class="small-icon">
							<i class="fa fa-fw fa-gears"></i>						</span>
						<div class="small-icon-text">
							<h4>Operations &amp; Supply </h4>
							<p>effective and efficient work processes to meet customer requirements and higher satisfaction.</p>
						</div><!-- end text -->
					</div><!-- end column -->


		</div><div id="aq-block-3808-4" class="aq-block aq-block-batakoo_features_block aq_span4  clearfix">
			
					<div class="col-service">
												<span class="small-icon">
							<i class="fa fa-fw fa-clipboard"></i>						</span>
						<div class="small-icon-text">
							<h4>Service,Testing &amp; commissioning</h4>
							<p>On-site support for better results and customer convenience.</p>
						</div><!-- end text -->
					</div><!-- end column -->


		</div></div></div><div id="aq-block-3808-5" class="aq-block aq-block-batakoo_clear_block aq_span12 aq-first clearfix"><hr class="aq-block-clear aq-block-hr-single" style="background:#313248; height:1px"/></div><div id="About" class="section-builder" style="background-color: #242533; padding:70px 0;"><div class="container inner"><div id="aq-block-3808-7" class="aq-block aq-block-batakoo_about_block aq_span12 aq-first clearfix">
			<div class="container">
				<div class="row">
					<div class="about-text">
						<h3 class="home-title">WHO WE ARE</h3>
						<p class="trigger animated fadeInUp"><u>“Managing water within a system is always like controlling the bond of whole system” </u>
						<br><br>Flow Tech Engineering (Pvt) Ltd is Sri Lanka’s premier Mechanical and Plumbing equipment sourcing company.  We are also involved with water supply projects for the National Water Supply and Drainage board. <br><br>

						Our premium product range includes MAS – DAF Pumps from Turkey, Wavin plastic piping systems from Netherlands, Tapflo chemical transfer pumps from  Sweden , WATTS valve systems from USA, VRI Valve system from Italy and Valco pumps from Italy. <br><br>

						Flow Tech has many solutions for your Mechanical and Plumbing needs. Our pumps range includes, Water transfer pumps, Booster systems, Fire pumping systems, AC Pumping systems, Submersible pumping range for all the sewer application and also Chemical transfer pumps. <br><br>

						Our plastic piping range includes PPR pipes and fittings from Turkey for hot water, cold water, Chilled water, chemical and Gas applications. We also carry any type of valves for all the major Mechanical and Plumbing systems.<br><br>

						Up to now we have installed more than 700 pumping units in Sri Lanka as well as in the Maldives, Bangladesh and Seychelles. Our rapid growth over the years has been a result of our professional and dedicated team who will always go beyond boundaries to give our fullest support to our customers.




						</p>
						
					</div><!-- end column -->
					<div class="about-figure">
						<figure>
							<img src="wp-content/uploads/2015/01/about-img.jpg" alt="WHO WE ARE">
						</figure>
					</div><!-- end column -->
				</div><!-- end row -->
			</div>




		</div></div></div><div id="blog" class="section-builder" style="background-color: #ffffff; padding:70px 0;"><div class="container inner"><div id="aq-block-3808-12" class="aq-block aq-block-batakoo_thetitle_block aq_span12 aq-first clearfix"><h3 class="home-title">latest news</h3></div><div id="aq-block-3808-13" class="aq-block aq-block-batakoo_latestblog_block aq_span12 aq-first clearfix">
		    <div class="container">
				<div class="row">

			
		            <div class="col-sm-4">
		            <div class="inner">
		           



		           <figure class="w-thumb">
					<a href="consuetudium-lectorum-mirum-est-notare-quam/index.html" title="Consuetudium Lectorum Mirum Est Notare quam">
						<img width="330" height="160" src="uploads/<?php echo $image1;?>" class="attachment-batakoo-latest-builder-thumb wp-post-image" alt="img_news1" />
						
					</a>
					</figure>

				<div class="entry-header">
					<div class="published entry-date">January 21, 2015</div>
					<h2 class="post-title entry-title">
						<a href="consuetudium-lectorum-mirum-est-notare-quam/index.html" title="Consuetudium Lectorum Mirum Est Notare quam"  class="post-title"><?php echo $header1;?></a>
					</h2>
				</div><!-- end entry-header -->
				
				<div class="entry-content">
					<?php echo $content1; ?>	
						<a href="consuetudium-lectorum-mirum-est-notare-quam/index.html" class="more">Read More</a>
				</div><!-- entry-content -->

					</div><!-- end of inner -->
		           	</div><!-- end of col-sm-4  -->

	            
		            <div class="col-sm-4">
		            <div class="inner">
		           
		            					<figure class="w-thumb">
					<a href="investigationes-demonstraverunt-lectores/index.html" title="Investigationes Demonstraverunt Lectores">
						<img width="330" height="160" src="uploads/<?php echo $image2;?>" class="attachment-batakoo-latest-builder-thumb wp-post-image" alt="sendbinary" />
						
					</a>
					</figure>

				<div class="entry-header">
					<div class="published entry-date">January 21, 2015</div>
					<h2 class="post-title entry-title">
						<a href="investigationes-demonstraverunt-lectores/index.html" title="Investigationes Demonstraverunt Lectores"  class="post-title"><?php echo $header2; ?></a>
					</h2>
				</div><!-- end entry-header -->
				
				<div class="entry-content">
					<?php echo $content2; ?>
						<a href="investigationes-demonstraverunt-lectores/index.html" class="more">Read More</a>
				</div><!-- entry-content -->

					</div><!-- end of inner -->
		           	</div><!-- end of col-sm-4  -->

	            
		            <div class="col-sm-4">
		            <div class="inner">
		           
		            					<figure class="w-thumb">
					<a href="claritas-est-etiam-processus-dynamicus/index.html" title="Claritas Est Etiam Processus Dynamicus">
						<img width="330" height="160" src="uploads/<?php echo $image3;?>" class="attachment-batakoo-latest-builder-thumb wp-post-image" alt="gvs-1082" />
						
					</a>
					</figure>

				<div class="entry-header">
					<div class="published entry-date">January 21, 2015</div>
					<h2 class="post-title entry-title">
						<a href="claritas-est-etiam-processus-dynamicus/index.html" title="Claritas Est Etiam Processus Dynamicus"  class="post-title"><?php echo $header3; ?></a>
					</h2>
				</div><!-- end entry-header -->
				
				<div class="entry-content">
					<?php echo $content3; ?>
						<a href="claritas-est-etiam-processus-dynamicus/index.html" class="more">Read More</a>
				</div><!-- entry-content -->

					</div><!-- end of inner -->
		           	</div><!-- end of col-sm-4  -->

	            
				</div><!-- end row -->
			</div>

			</div></div></div><div id="testi" class="parallax section-builder" style="background-image: url(wp-content/uploads/2015/01/testimoni-bg.jpg); padding:120px 0;"><div class="container inner"><div id="aq-block-3808-15" class="aq-block aq-block-batakoo_testimonials_block aq_span12 aq-first clearfix">			<div class="container">
				<div class="row">
				<div id="testimonial-home" class="testimonial-item flexslider">
				<ul class="slides">
	            

	                    	<li>
	                    	<div class="item">
	                    		<figure class="ava">
	                    			<img width="170" height="170" src="wp-content/uploads/2015/01/ava-03.jpg" class="attachment-post-thumbnail wp-post-image" alt="ava-03" />	                    		</figure>
	                    		<div class="context">
	                    			<div class="inner">
		                    			<blockquote><p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta</p>
</blockquote>
		                    			<p class="who">ALEX WAGIMAN, 
		                    		CONTRACTOR</p>
		                    		</div>
	                    		</div>
	                    		</div>
	                    	</li><!-- end item -->

	            

	                    	<li>
	                    	<div class="item">
	                    		<figure class="ava">
	                    			<img width="170" height="170" src="wp-content/uploads/2015/01/ava-02.jpg" class="attachment-post-thumbnail wp-post-image" alt="ava-02" />	                    		</figure>
	                    		<div class="context">
	                    			<div class="inner">
		                    			<blockquote><p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta</p>
</blockquote>
		                    			<p class="who">KUNCORO BHAKTI, 
		                    		ENGINEER</p>
		                    		</div>
	                    		</div>
	                    		</div>
	                    	</li><!-- end item -->

	            

	                    	<li>
	                    	<div class="item">
	                    		<figure class="ava">
	                    			<img width="170" height="170" src="wp-content/uploads/2015/01/ava-01.jpg" class="attachment-post-thumbnail wp-post-image" alt="ava-01" />	                    		</figure>
	                    		<div class="context">
	                    			<div class="inner">
		                    			<blockquote><p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta</p>
</blockquote>
		                    			<p class="who">REZA KURNIAWAN, 
		                    		CO-FOUNDER & CEO</p>
		                    		</div>
	                    		</div>
	                    		</div>
	                    	</li><!-- end item -->

	            

				</ul>
				</div><!-- end carousel -->
				<script type="text/javascript">
				jQuery(window).load(function() {
					jQuery('#testimonial-home').flexslider({
				    	animation: "fade"
				  	});
				});
			</script>
				</div>
			</div>

			</div></div></div><div id="partner" class="section-builder" style="background-color: #f3f3f3; padding:70px 0;"><div class="container inner"><div id="aq-block-3808-17" class="aq-block aq-block-batakoo_thetitle_block aq_span12 aq-first clearfix"><h3 class="home-title">our partner</h3></div><div id="aq-block-3808-18" class="aq-block aq-block-batakoo_partner_block aq_span12 aq-first clearfix">
			<div class="container">

				<div class="row">



	            




					<div class="col-partner">

							<div>

								<img width="162" height="41" src="wp-content/uploads/2015/01/partner-01.png" class="attachment-post-thumbnail wp-post-image" alt="partner-01" />
							</div>

						</div><!-- end column -->



	            




					<div class="col-partner">

							<div>

								<img width="154" height="37" src="wp-content/uploads/2015/01/partner-02.png" class="attachment-post-thumbnail wp-post-image" alt="partner-02" />
							</div>

						</div><!-- end column -->



	            




					<div class="col-partner">

							<div>

								<img width="167" height="39" src="wp-content/uploads/2015/01/partner-03.png" class="attachment-post-thumbnail wp-post-image" alt="partner-03" />
							</div>

						</div><!-- end column -->



	            




					<div class="col-partner">

							<div>

								<img width="187" height="54" src="wp-content/uploads/2015/01/partner-04.png" class="attachment-post-thumbnail wp-post-image" alt="partner-04" />
							</div>

						</div><!-- end column -->



	            




					<div class="col-partner">

							<div>

								<img width="150" height="36" src="wp-content/uploads/2015/01/partner-05.png" class="attachment-post-thumbnail wp-post-image" alt="partner-05" />
							</div>

						</div><!-- end column -->



	            




					<div class="col-partner">

							<div>

								<img width="158" height="58" src="wp-content/uploads/2015/01/partner-06.png" class="attachment-post-thumbnail wp-post-image" alt="partner-06" />
							</div>

						</div><!-- end column -->



	            




					<div class="col-partner">

							<div>

								<img width="167" height="50" src="wp-content/uploads/2015/01/partner-07.png" class="attachment-post-thumbnail wp-post-image" alt="partner-07" />
							</div>

						</div><!-- end column -->



	            




					<div class="col-partner">

							<div>

								<img width="131" height="74" src="wp-content/uploads/2015/01/partner-08.png" class="attachment-post-thumbnail wp-post-image" alt="partner-08" />
							</div>

						</div><!-- end column -->



	            




					<div class="col-partner">

							<div>

								<img width="177" height="32" src="wp-content/uploads/2015/01/partner-09.png" class="attachment-post-thumbnail wp-post-image" alt="partner-09" />
							</div>

						</div><!-- end column -->



	            




					<div class="col-partner">

							<div>

								<img width="163" height="45" src="wp-content/uploads/2015/01/partner-10.png" class="attachment-post-thumbnail wp-post-image" alt="partner-10" />
							</div>

						</div><!-- end column -->



	            


				</div>

			</div>



			</div></div></div></div>

</article><!-- #page3931 -->
</div><!-- site-main -->

<footer id="footer-section" class="site-footer">
			<div class="container">
				<div class="row">
					<div class="footer-widget-wrapper widget clearfix">
					  
        <div class="footer-widget col-md-4">
            <div id="text-2" class="widget-inner widget_text"><div class="widget-title"><h4><span>ABOUT US</span></h4></div>			<div class="textwidget"><img src="wp-content/uploads/2015/01/logo-light.png" alt="logo-light"><br>
<br>
<p>Lusioto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p></div>
		</div>        </div>
        
        <div class="footer-widget col-md-4">
            <div id="text-3" class="widget-inner widget_text"><div class="widget-title"><h4><span>OFFICE ADDRESS</span></h4></div>			<div class="textwidget"><p>Our Office Address :</p>
								<table>
									<tbody><tr>
										<td><strong>Location</strong></td>
										<td> : 201-B, High Level Road, 

, <br>&nbsp;&nbsp;Nugegoda, Sri Lanka.</td>
									</tr>
									<tr>
										<td><strong>Telp</strong></td>
										<td> : +94 117 675 675</td>
									</tr>
									<tr>
										<td><strong>Fax</strong></td>
										<td> : +94 117 675 676</td>
									</tr>
									<tr>
										<td><strong>Email</strong></td>
										<td> : <a href="www.w3school.com">sales@flowtecheng.com</a>
											<a href="www.w3school.com">flowtech@sltnet.lk</a>
										</td>
									</tr>
									
								</tbody></table></div>
		</div>        </div>
        
        <div class="footer-widget col-md-4">
            <div id="text-4" class="widget-inner widget_text"><div class="widget-title"><h4><span>BUY NOW</span></h4></div>			<div class="textwidget"><p>If you come all the way down here, you probably really like our Batakoo theme. To save you all the troubles finding where to buy this theme, we have a solution for that too. Just click the button below. </p>
<a href="http://themeforest.net/item/batakoo-modern-construction-wp-theme/10181349?ref=themesawesome" class="btn btn-lg btn-default"> BUY NOW </a></div>
		</div>        </div>
    
  					</div>
				</div><!-- end widget -->
			</div>
</footer>

		<div class="footer-credit">
			<ul class="list-socmed">
				  <li class="facebook"><a href="http://facebook.com/#"><i class="fa fa-fw fa-facebook"></i></a></li>
  <li class="linkedin"><a href="http://linkedin.com/#"><i class="fa fa-fw fa-linkedin"></i></a></li>
  <li class="youtube"><a href="http://youtube.com/#"><i class="fa fa-fw fa-youtube"></i></a></li>
  <li class="google"><a href="http://google.com/#"><i class="fa fa-fw fa-google-plus"></i></a></li>
			</ul>
			<div class="copy">© Flow Tech Engineering (PVT) Ltd Srilanka</div>
		</div><!-- end footer-credit -->

<script type='text/javascript' src='wp-content/plugins/aqua-page-builder/assets/javascripts/aqpb-view6a18.js?ver=1423472057'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var mejsL10n = {"language":"en-US","strings":{"Close":"Close","Fullscreen":"Fullscreen","Download File":"Download File","Download Video":"Download Video","Play\/Pause":"Play\/Pause","Mute Toggle":"Mute Toggle","None":"None","Turn off Fullscreen":"Turn off Fullscreen","Go Fullscreen":"Go Fullscreen","Unmute":"Unmute","Mute":"Mute","Captions\/Subtitles":"Captions\/Subtitles"}};
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-includes/js/mediaelement/mediaelement-and-player.min4165.js?ver=2.15.1'></script>
<script type='text/javascript' src='wp-includes/js/mediaelement/wp-mediaelement2f54.js?ver=4.1'></script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/batakoo.themesawesome.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ...","cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scriptsfa0c.js?ver=4.0.3'></script>
<script type='text/javascript' src='wp-content/themes/batakoo/js/bootstrap.min2f54.js?ver=4.1'></script>
<script type='text/javascript' src='wp-content/themes/batakoo/js/flexslider2f54.js?ver=4.1'></script>
<script type='text/javascript' src='wp-content/themes/batakoo/js/main2f54.js?ver=4.1'></script>
<script type='text/javascript' src='wp-content/themes/batakoo/js/isotope2f54.js?ver=4.1'></script>
<script type='text/javascript' src='wp-content/themes/batakoo/js/portfolio2f54.js?ver=4.1'></script>

</body>

<!-- Mirrored from batakoo.themesawesome.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Feb 2015 09:25:32 GMT -->
</html>
<!-- Performance optimized by W3 Total Cache. Learn more: http://www.w3-edge.com/wordpress-plugins/

Page Caching using disk: enhanced
Database Caching 10/60 queries in 0.056 seconds using disk
Object Caching 2314/2504 objects using disk

 Served from: batakoo.themesawesome.com @ 2015-02-09 08:54:18 by W3 Total Cache -->