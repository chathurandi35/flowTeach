<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en-US" > <!--<![endif]-->


<!-- Mirrored from batakoo.themesawesome.com/blog/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Feb 2015 09:25:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<!--[if ie]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
	
<title>Blog | FlowTech</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<title>Blog | FlowTech</title>
<link rel="alternate" type="application/rss+xml" title="batakoo &raquo; Feed" href="../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="batakoo &raquo; Comments Feed" href="../comments/feed/index.html" />
<link rel='stylesheet' id='aqpb-view-css-css'  href='../wp-content/plugins/aqua-page-builder/assets/stylesheets/aqpb-view64b2.css?ver=1423473487' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='../wp-content/plugins/contact-form-7/includes/css/stylesfa0c.css?ver=4.0.3' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='../wp-content/plugins/revslider/rs-plugin/css/settings1dc6.css?ver=4.6.5' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
.tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}
</style>
<link rel='stylesheet' id='batakoo-bootstrap-css'  href='../wp-content/themes/batakoo/css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='batakoo-plugin-css-css'  href='../wp-content/themes/batakoo/css/plugin.css' type='text/css' media='all' />
<link rel='stylesheet' id='batakoo-style-css'  href='../wp-content/themes/batakoo/style2f54.css?ver=4.1' type='text/css' media='all' />
<link rel='stylesheet' id='batakoo-font-css'  href='../wp-content/themes/batakoo/css/font.css' type='text/css' media='all' />
<link rel='stylesheet' id='redux-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C700%7CPT+Serif&amp;ver=1422016063' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/jquery/jquery90f9.js?ver=1.11.1'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
<script type='text/javascript' src='../wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.tools.min1dc6.js?ver=4.6.5'></script>
<script type='text/javascript' src='../wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min1dc6.js?ver=4.6.5'></script>
<script type='text/javascript' src='../wp-content/themes/batakoo/js/modernizr2f54.js?ver=4.1'></script>
<script type='text/javascript' src='../wp-content/themes/batakoo/js/respond2f54.js?ver=4.1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.1" />
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

<body class="blog">


	<?php
		$con=mysqli_connect("localhost","root","","flowteach");


		$result = mysqli_query($con,"SELECT * FROM second");

			$i=1;
			while($row = mysqli_fetch_array($result))
			{
				${"header".$i} = $row['news1'];
				${"content".$i} = $row['news2'];
				$i++;
			}
		 
		 	/*$row = mysqli_fetch_array($result);

		 	$result1 = mysqli_query($con,"SELECT * FROM second WHERE id =35");
		 
		 	$row1 = mysqli_fetch_array($result1);

		 	$result2 = mysqli_query($con,"SELECT * FROM second WHERE id =36");
		 
		 	$row2 = mysqli_fetch_array($result2);*/
 	
	?>

			<header id="masthead" class="site-header navbar-fixed-top">
    		<div class="header-navigation">
    			<div class="container-fluid">
    				<div class="row">

    				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".site-navigation" aria-expanded="false">
			        	<span class="sr-only">Toggle navigation</span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			        </button>

    					<div class="logo navbar-brand">
								
	<div class="logo-image">
	<a href="../index.html"><img src="../wp-content/uploads/2015/01/header-logo.png" class="image-logo" alt="logo" /></a>
	</div>
	
	    					</div><!-- end logo -->

    					<nav id="primary-navigation" class="site-navigation navbar-collapse collapse" role="navigation">
    						<nav class="nav-menu">
    							<ul id="menu-main-menu" class="menu"><li id="menu-item-3953" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3953"><a href="../index.html">Home</a></li>
<li id="menu-item-3963" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3963"><a href="../services/index.html">Products</a></li>
<li id="menu-item-3961" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3961"><a href="../portfolio/index.html">Projects</a></li>
<li id="menu-item-3964" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3964"><a href="../testimonial/index.html">Sustainability</a></li>
<li id="menu-item-3954" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-703 current_page_item current_page_parent menu-item-has-children menu-item-3954"><a href="index.php">Blog</a></li>
<li id="menu-item-3955" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3955"><a href="../contact-2/index.html">Contact</a></li>
</ul>    						</nav><!-- end nav-menu -->
    					</nav><!-- primary-navigation -->

    					  <div class="header-feature"><a href="../contact-2/index.html" class="btn btn-lg btn-default"> Get a Quote </a></div>
    				
                    </div><!-- end row -->
    			</div><!-- end container-fluid -->
    		</div><!-- end header-navigation -->
    	</header><!-- end #masthead -->
<div id="main" class="site-main clearfix">


	

			<div class="container">
				<div class="row">

					<div class="content-area col-md-8" id="primary">
						<div class="site-content" id="content">

		<article class="post-4007 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized tag-build tag-costruction tag-people tag-standard tag-work">

	<header class="entry-header">
		<div class="entry-format">
			<div class="entry-meta">

				<div class="pull-left">

					<span class="cat-links">
						<a href="../category/uncategorized/index.html" rel="category tag">Uncategorized</a>					</span><!-- end cat-links -->

					<span class="entry-date">
						January 21, 2015					</span><!-- end entry-date -->

					<span class="author vcard">
						Posted <a href="../author/akmanda/index.html">by akmanda</a>
					</span><!-- end author -->

				</div><!-- end pull-left -->

				<div class="pull-right">
					<div class="comment-link">
						<i class="fa fa-fw fa-comments-o"></i>
						<span class="comment-number"> 0 Comments</span>
					</div>

					<div class="social-shares">
						<i class="fa fa-fw fa-share-alt"></i>
						<a href="#">Share This</a>
						
						  <div class="other-share">
    <a href="http://www.facebook.com/sharer.php?u=http://batakoo.themesawesome.com/consuetudium-lectorum-mirum-est-notare-quam/" class="product_share_facebook facebook" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');return false;"><i class="fa fa-fw fa-facebook"></i><span>Facebook</span></a>
    <a href="https://twitter.com/share?url=http://batakoo.themesawesome.com/consuetudium-lectorum-mirum-est-notare-quam/&amp;text=Consuetudium+Lectorum+Mirum+Est+Notare+quam" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;" class="product_share_twitter twitter"><i class="fa fa-fw fa-twitter"></i><span>Twitter</span></a>   
    <a href="https://plus.google.com/share?url=http://batakoo.themesawesome.com/consuetudium-lectorum-mirum-est-notare-quam/" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="google-plus"><i class="fa fa-fw fa-google-plus"></i><span>Google Plus</span></a>
    <a href="http://pinterest.com/pin/create/button/?url=http://batakoo.themesawesome.com/consuetudium-lectorum-mirum-est-notare-quam/&amp;description=Consuetudium%20Lectorum%20Mirum%20Est%20Notare%20quam" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=320,width=600');return false;" class="product_share_pinterest pinterest"><i class="fa fa-fw fa-pinterest"></i><span>Pinterest</span></a>
</div><!-- Social Share Wrapper -->

					</div><!-- end social-share -->

				</div><!-- end pull-right -->

			</div><!-- end entry-meta -->
		</div><!-- end entry-format -->

				<div class="entry-media">

					<div class="post-thumb">
					<a href="../consuetudium-lectorum-mirum-est-notare-quam/index.html" title="Consuetudium Lectorum Mirum Est Notare quam">
						<img width="800" height="379" src="../wp-content/uploads/2015/01/img400_pic4900_producto.jpg" class="attachment-post-thumbnail wp-post-image" alt="img400_pic4900_producto" />					</a>
					</div><!-- post thumb -->
	
		</div><!-- end entry-media -->
				
		<h1 class="entry-title">
			<a href="../consuetudium-lectorum-mirum-est-notare-quam/index.html" title="Consuetudium Lectorum Mirum Est Notare quam">
			<?php echo $header1	?>	</a>
		</h1>

	</header><!-- end entry-header -->

	<div class="entry-content">
		<p><?php echo $content1 ?></p>
	</div>

</article><!-- #4007 -->
<article class="post-4003 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized tag-build tag-costruction tag-people tag-standard tag-work">

	<header class="entry-header">
		<div class="entry-format">
			<div class="entry-meta">

				<div class="pull-left">

					<span class="cat-links">
						<a href="../category/uncategorized/index.html" rel="category tag">Uncategorized</a>					</span><!-- end cat-links -->

					<span class="entry-date">
						January 21, 2015					</span><!-- end entry-date -->

					<span class="author vcard">
						Posted <a href="../author/akmanda/index.html">by akmanda</a>
					</span><!-- end author -->

				</div><!-- end pull-left -->

				<div class="pull-right">
					<div class="comment-link">
						<i class="fa fa-fw fa-comments-o"></i>
						<span class="comment-number"> 0 Comments</span>
					</div>

					<div class="social-shares">
						<i class="fa fa-fw fa-share-alt"></i>
						<a href="#">Share This</a>
						
						  <div class="other-share">
    <a href="http://www.facebook.com/sharer.php?u=http://batakoo.themesawesome.com/investigationes-demonstraverunt-lectores/" class="product_share_facebook facebook" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');return false;"><i class="fa fa-fw fa-facebook"></i><span>Facebook</span></a>
    <a href="https://twitter.com/share?url=http://batakoo.themesawesome.com/investigationes-demonstraverunt-lectores/&amp;text=Investigationes+Demonstraverunt+Lectores" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;" class="product_share_twitter twitter"><i class="fa fa-fw fa-twitter"></i><span>Twitter</span></a>   
    <a href="https://plus.google.com/share?url=http://batakoo.themesawesome.com/investigationes-demonstraverunt-lectores/" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="google-plus"><i class="fa fa-fw fa-google-plus"></i><span>Google Plus</span></a>
    <a href="http://pinterest.com/pin/create/button/?url=http://batakoo.themesawesome.com/investigationes-demonstraverunt-lectores/&amp;description=Investigationes%20Demonstraverunt%20Lectores" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=320,width=600');return false;" class="product_share_pinterest pinterest"><i class="fa fa-fw fa-pinterest"></i><span>Pinterest</span></a>
</div><!-- Social Share Wrapper -->

					</div><!-- end social-share -->

				</div><!-- end pull-right -->

			</div><!-- end entry-meta -->
		</div><!-- end entry-format -->

				<div class="entry-media">

					<div class="post-thumb">
					<a href="../investigationes-demonstraverunt-lectores/index.html" title="Investigationes Demonstraverunt Lectores">
						<img width="637" height="331" src="../wp-content/uploads/2015/01/sendbinary1.jpg" class="attachment-post-thumbnail wp-post-image" alt="sendbinary" />					</a>
					</div><!-- post thumb -->
	
		</div><!-- end entry-media -->
				
		<h1 class="entry-title">
			<a href="../investigationes-demonstraverunt-lectores/index.html" title="Investigationes Demonstraverunt Lectores">
			<?php echo $header2	?>			</a>
		</h1>

	</header><!-- end entry-header -->

	<div class="entry-content">
		<p><?php echo $content2	?></p>
	</div>

</article><!-- #4003 -->
<article class="post-4000 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized tag-build tag-costruction tag-people tag-standard tag-work">

	<header class="entry-header">
		<div class="entry-format">
			<div class="entry-meta">

				<div class="pull-left">

					<span class="cat-links">
						<a href="../category/uncategorized/index.html" rel="category tag">Uncategorized</a>					</span><!-- end cat-links -->

					<span class="entry-date">
						January 21, 2015					</span><!-- end entry-date -->

					<span class="author vcard">
						Posted <a href="../author/akmanda/index.html">by akmanda</a>
					</span><!-- end author -->

				</div><!-- end pull-left -->

				<div class="pull-right">
					<div class="comment-link">
						<i class="fa fa-fw fa-comments-o"></i>
						<span class="comment-number"> 0 Comments</span>
					</div>

					<div class="social-shares">
						<i class="fa fa-fw fa-share-alt"></i>
						<a href="#">Share This</a>
						
						  <div class="other-share">
    <a href="http://www.facebook.com/sharer.php?u=http://batakoo.themesawesome.com/claritas-est-etiam-processus-dynamicus/" class="product_share_facebook facebook" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');return false;"><i class="fa fa-fw fa-facebook"></i><span>Facebook</span></a>
    <a href="https://twitter.com/share?url=http://batakoo.themesawesome.com/claritas-est-etiam-processus-dynamicus/&amp;text=Claritas+Est+Etiam+Processus+Dynamicus" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;" class="product_share_twitter twitter"><i class="fa fa-fw fa-twitter"></i><span>Twitter</span></a>   
    <a href="https://plus.google.com/share?url=http://batakoo.themesawesome.com/claritas-est-etiam-processus-dynamicus/" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="google-plus"><i class="fa fa-fw fa-google-plus"></i><span>Google Plus</span></a>
    <a href="http://pinterest.com/pin/create/button/?url=http://batakoo.themesawesome.com/claritas-est-etiam-processus-dynamicus/&amp;description=Claritas%20Est%20Etiam%20Processus%20Dynamicus" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=320,width=600');return false;" class="product_share_pinterest pinterest"><i class="fa fa-fw fa-pinterest"></i><span>Pinterest</span></a>
</div><!-- Social Share Wrapper -->

					</div><!-- end social-share -->

				</div><!-- end pull-right -->

			</div><!-- end entry-meta -->
		</div><!-- end entry-format -->

				<div class="entry-media">

					<div class="post-thumb">
					<a href="../claritas-est-etiam-processus-dynamicus/index.html" title="Claritas Est Etiam Processus Dynamicus">
						<img width="800" height="550" src="../wp-content/uploads/2015/01/gvs-10821.jpg" class="attachment-post-thumbnail wp-post-image" alt="gvs-1082" />					</a>
					</div><!-- post thumb -->
	
		</div><!-- end entry-media -->
				
		<h1 class="entry-title">
			<a href="../claritas-est-etiam-processus-dynamicus/index.html" title="Claritas Est Etiam Processus Dynamicus">
			<?php echo $header3	?>			</a>
		</h1>

	</header><!-- end entry-header -->

	<div class="entry-content">
		<p><?php echo $content3	?></p>
	</div>

</article><!-- #4000 -->
<article class="post-3891 post type-post status-publish format-image has-post-thumbnail hentry category-building category-photography tag-image tag-photography tag-post-format">

	<header class="entry-header">
		<div class="entry-format">
			<div class="entry-meta">

				<div class="pull-left">

					<span class="cat-links">
						<a href="../category/building/index.html" rel="category tag">BUILDING</a>, <a href="../category/photography/index.html" rel="category tag">PHOTOGRAPHY</a>					</span><!-- end cat-links -->

					<span class="entry-date">
						January 16, 2015					</span><!-- end entry-date -->

					<span class="author vcard">
						Posted <a href="../author/akmanda/index.html">by akmanda</a>
					</span><!-- end author -->

				</div><!-- end pull-left -->

				<div class="pull-right">
					<div class="comment-link">
						<i class="fa fa-fw fa-comments-o"></i>
						<span class="comment-number"> 0 Comments</span>
					</div>

					<div class="social-shares">
						<i class="fa fa-fw fa-share-alt"></i>
						<a href="#">Share This</a>
						
						  <div class="other-share">
    <a href="http://www.facebook.com/sharer.php?u=http://batakoo.themesawesome.com/typi-non-habent-claritatem-insitam-est-usus-legentis-in-qui-facit-eorum-claritatem-2/" class="product_share_facebook facebook" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');return false;"><i class="fa fa-fw fa-facebook"></i><span>Facebook</span></a>
    <a href="https://twitter.com/share?url=http://batakoo.themesawesome.com/typi-non-habent-claritatem-insitam-est-usus-legentis-in-qui-facit-eorum-claritatem-2/&amp;text=Typi+Non+Habent+Claritatem+Insitam+Est+Usus+Legentis+in+Qui+Facit+Eorum+Claritatem" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;" class="product_share_twitter twitter"><i class="fa fa-fw fa-twitter"></i><span>Twitter</span></a>   
    <a href="https://plus.google.com/share?url=http://batakoo.themesawesome.com/typi-non-habent-claritatem-insitam-est-usus-legentis-in-qui-facit-eorum-claritatem-2/" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="google-plus"><i class="fa fa-fw fa-google-plus"></i><span>Google Plus</span></a>
    <a href="http://pinterest.com/pin/create/button/?url=http://batakoo.themesawesome.com/typi-non-habent-claritatem-insitam-est-usus-legentis-in-qui-facit-eorum-claritatem-2/&amp;description=Typi%20Non%20Habent%20Claritatem%20Insitam%20Est%20Usus%20Legentis%20in%20Qui%20Facit%20Eorum%20Claritatem" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=320,width=600');return false;" class="product_share_pinterest pinterest"><i class="fa fa-fw fa-pinterest"></i><span>Pinterest</span></a>
</div><!-- Social Share Wrapper -->

					</div><!-- end social-share -->

				</div><!-- end pull-right -->

			</div><!-- end entry-meta -->
		</div><!-- end entry-format -->

		<div class="entry-media">

							<div class="entry-media">

					<div class="post-thumb">
					<a href="../typi-non-habent-claritatem-insitam-est-usus-legentis-in-qui-facit-eorum-claritatem-2/index.html" title="Typi Non Habent Claritatem Insitam Est Usus Legentis in Qui Facit Eorum Claritatem">
						<img width="1000" height="508" src="../wp-content/uploads/2015/01/iSGu85T8TXS9zXJ20iBU__MG_9585.jpg" class="attachment-post-thumbnail wp-post-image" alt="iSGu85T8TXS9zXJ20iBU__MG_9585" />					</a>
					</div><!-- post thumb -->
	
				</div><!-- end entry-media -->
			
		</div><!-- end entry-media -->

		<h1 class="entry-title">
			<a href="../typi-non-habent-claritatem-insitam-est-usus-legentis-in-qui-facit-eorum-claritatem-2/index.html" title="Typi Non Habent Claritatem Insitam Est Usus Legentis in Qui Facit Eorum Claritatem">
			<?php echo $header4	?>		</a>
		</h1>

	</header><!-- end entry-header -->

	<div class="entry-content">
		<p><?php echo $content4	?></p>
	</div>

</article><!-- #3891 -->
<article class="post-3888 post type-post status-publish format-video has-post-thumbnail hentry category-video tag-post-format tag-video tag-youtube">

	<header class="entry-header">
		<div class="entry-format">
			<div class="entry-meta">

				<div class="pull-left">

					<span class="cat-links">
						<a href="../category/video/index.html" rel="category tag">VIDEO</a>					</span><!-- end cat-links -->

					<span class="entry-date">
						January 16, 2015					</span><!-- end entry-date -->

					<span class="author vcard">
						Posted <a href="../author/akmanda/index.html">by akmanda</a>
					</span><!-- end author -->

				</div><!-- end pull-left -->

				<div class="pull-right">
					<div class="comment-link">
						<i class="fa fa-fw fa-comments-o"></i>
						<span class="comment-number"> 0 Comments</span>
					</div>

					<div class="social-shares">
						<i class="fa fa-fw fa-share-alt"></i>
						<a href="#">Share This</a>
						
						  <div class="other-share">
    <a href="http://www.facebook.com/sharer.php?u=http://batakoo.themesawesome.com/typi-non-habent-claritatem-insitam-est-usus-legentis-in-qui-facit-eorum-claritatem/" class="product_share_facebook facebook" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');return false;"><i class="fa fa-fw fa-facebook"></i><span>Facebook</span></a>
    <a href="https://twitter.com/share?url=http://batakoo.themesawesome.com/typi-non-habent-claritatem-insitam-est-usus-legentis-in-qui-facit-eorum-claritatem/&amp;text=Typi+Non+Habent+Facit+Eorum+Claritatem" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;" class="product_share_twitter twitter"><i class="fa fa-fw fa-twitter"></i><span>Twitter</span></a>   
    <a href="https://plus.google.com/share?url=http://batakoo.themesawesome.com/typi-non-habent-claritatem-insitam-est-usus-legentis-in-qui-facit-eorum-claritatem/" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="google-plus"><i class="fa fa-fw fa-google-plus"></i><span>Google Plus</span></a>
    <a href="http://pinterest.com/pin/create/button/?url=http://batakoo.themesawesome.com/typi-non-habent-claritatem-insitam-est-usus-legentis-in-qui-facit-eorum-claritatem/&amp;description=Typi%20Non%20Habent%20Facit%20Eorum%20Claritatem" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=320,width=600');return false;" class="product_share_pinterest pinterest"><i class="fa fa-fw fa-pinterest"></i><span>Pinterest</span></a>
</div><!-- Social Share Wrapper -->

					</div><!-- end social-share -->

				</div><!-- end pull-right -->

			</div><!-- end entry-meta -->
		</div><!-- end entry-format -->

		<div class="entry-media">

					<iframe width="1170" height="658" src="http://www.youtube.com/embed/XSGBVzeBUbk?feature=oembed" frameborder="0" allowfullscreen></iframe>	
		</div><!-- end entry-media -->

		<h1 class="entry-title">
			<a href="../typi-non-habent-claritatem-insitam-est-usus-legentis-in-qui-facit-eorum-claritatem/index.html" title="Typi Non Habent Facit Eorum Claritatem">
			<?php echo $header5	?>		</a>
		</h1>

	</header><!-- end entry-header -->

	<div class="entry-content">
		<p><?php echo $content5	?></p>
	</div>

</article><!-- #3888 -->
<article class="post-3886 post type-post status-publish format-link hentry category-link tag-link tag-post-format tag-store">

	<header class="entry-header">
		<div class="entry-format">
			<div class="entry-meta">

				<div class="pull-left">

					<span class="cat-links">
						<a href="../category/link/index.html" rel="category tag">LINK</a>					</span><!-- end cat-links -->

					<span class="entry-date">
						January 16, 2015					</span><!-- end entry-date -->

					<span class="author vcard">
						Posted <a href="../author/akmanda/index.html">by akmanda</a>
					</span><!-- end author -->

				</div><!-- end pull-left -->

				<div class="pull-right">
					<div class="comment-link">
						<i class="fa fa-fw fa-comments-o"></i>
						<span class="comment-number"> 0 Comments</span>
					</div>

					<div class="social-shares">
						<i class="fa fa-fw fa-share-alt"></i>
						<a href="#">Share This</a>
						
						  <div class="other-share">
    <a href="http://www.facebook.com/sharer.php?u=http://batakoo.themesawesome.com/themes-awesome/" class="product_share_facebook facebook" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');return false;"><i class="fa fa-fw fa-facebook"></i><span>Facebook</span></a>
    <a href="https://twitter.com/share?url=http://batakoo.themesawesome.com/themes-awesome/&amp;text=Themes+Awesome" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;" class="product_share_twitter twitter"><i class="fa fa-fw fa-twitter"></i><span>Twitter</span></a>   
    <a href="https://plus.google.com/share?url=http://batakoo.themesawesome.com/themes-awesome/" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="google-plus"><i class="fa fa-fw fa-google-plus"></i><span>Google Plus</span></a>
    <a href="http://pinterest.com/pin/create/button/?url=http://batakoo.themesawesome.com/themes-awesome/&amp;description=Themes%20Awesome" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=320,width=600');return false;" class="product_share_pinterest pinterest"><i class="fa fa-fw fa-pinterest"></i><span>Pinterest</span></a>
</div><!-- Social Share Wrapper -->

					</div><!-- end social-share -->

				</div><!-- end pull-right -->

			</div><!-- end entry-meta -->
		</div><!-- end entry-format -->

				
		<h1 class="entry-title">
	        <a href="http://www.themesawesome.com/">			
				<div class="post-format-link">
					<i class="icon icon-link-2"></i>
					<h2>Themes Awesome</h2>
				</div>
			</a>
		</h1>

	</header><!-- end entry-header -->


</article><!-- #3886 -->
	


		</div><!-- end site-content -->

						<div class="page-wrap">
							<ul class='pagination pagination-sm'><li class='active'><a href='#'>1</a></li><li><a href='page/2/index.html' class='inactive' >2</a></li></ul>
						</div><!-- end page-wrap -->
						
					</div><!-- end content-area -->
					<aside id="secondary" class="col-md-4" role="complementary">
<div class="sidebar">
	
		
</div>
</aside><!-- #primary-sidebar -->					</div>
					</div>



</div><!-- site-main -->

<footer id="footer-section" class="site-footer">
			<div class="container">
				<div class="row">
					<div class="footer-widget-wrapper widget clearfix">
					  
        <div class="footer-widget col-md-4">
            <div id="text-2" class="widget-inner widget_text"><div class="widget-title"><h4><span>ABOUT US</span></h4></div>			<div class="textwidget"><img src="../wp-content/uploads/2015/01/logo-light.png" alt="logo-light"><br>
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

<script type='text/javascript' src='../wp-content/plugins/aqua-page-builder/assets/javascripts/aqpb-view64b2.js?ver=1423473487'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var mejsL10n = {"language":"en-US","strings":{"Close":"Close","Fullscreen":"Fullscreen","Download File":"Download File","Download Video":"Download Video","Play\/Pause":"Play\/Pause","Mute Toggle":"Mute Toggle","None":"None","Turn off Fullscreen":"Turn off Fullscreen","Go Fullscreen":"Go Fullscreen","Unmute":"Unmute","Mute":"Mute","Captions\/Subtitles":"Captions\/Subtitles"}};
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-includes/js/mediaelement/mediaelement-and-player.min4165.js?ver=2.15.1'></script>
<script type='text/javascript' src='../wp-includes/js/mediaelement/wp-mediaelement2f54.js?ver=4.1'></script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/batakoo.themesawesome.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ...","cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scriptsfa0c.js?ver=4.0.3'></script>
<script type='text/javascript' src='../wp-content/themes/batakoo/js/bootstrap.min2f54.js?ver=4.1'></script>
<script type='text/javascript' src='../wp-content/themes/batakoo/js/flexslider2f54.js?ver=4.1'></script>
<script type='text/javascript' src='../wp-content/themes/batakoo/js/main2f54.js?ver=4.1'></script>

</body>

<!-- Mirrored from batakoo.themesawesome.com/blog/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Feb 2015 09:25:59 GMT -->
</html>
<!-- Performance optimized by W3 Total Cache. Learn more: http://www.w3-edge.com/wordpress-plugins/

Page Caching using disk: enhanced
Database Caching 8/16 queries in 0.005 seconds using disk
Object Caching 1780/1802 objects using disk

 Served from: batakoo.themesawesome.com @ 2015-02-09 09:18:08 by W3 Total Cache -->