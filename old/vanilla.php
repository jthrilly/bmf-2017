<?php
/**
 * Template Name: Vanilla Forum Template
 *
 * A custom page template for a Vanilla Forum.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */
?>
<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-gb" http-equiv="Content-Language" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
			
	<!--[if IE 6]>
	<script src="js/belated.js"></script>
<script>
  /* EXAMPLE */
  DD_belatedPNG.fix('#wrapper,#footer,#toplogo');
  
  /* string argument can be any CSS selector */
  /* .png_bg example is unnecessary */
  /* change it to what suits you! */
</script>
<![endif]-->	
	
	
<link rel="stylesheet" type="text/css" href="css/glowbutton.css" media="screen"/> 
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

		<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
   		<script type="text/javascript" src="js/jquery.metadata.min.js"></script> 
  		<script type="text/javascript" src="js/jquery.color.js"></script> 
  		<script type="text/javascript" src="js/jquery.glowbuttons.js"></script>

<script type="text/javascript">
        $(document).ready(function(){   
            $('.glow').glowbuttons();
        });  
    	</script>
<script type="text/javascript">
$(document).ready(function(){
	$(".trigger").click(function(){
		$(".panel").toggle("fast");
		$(this).toggleClass("active");
		return false;
	});
});
</script> 
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<?php include('toolbar.php'); ?>
<div id="wrapper" style="width: 900px">
			<div class="headertext" style="height: 214px">
				<img alt="" src="images/toplogo.png" id="toplogo" style="float:left"/><h1 class="maintitle">
				Leicester City Parent and Carer's Forum.</h1></div>	

			
			<div style="width:100%;text-align:center;margin-bottom:10px;"> 
				
						<span name="Button1" value="The Forum" id="Button1" class="glow {from: '#0061B2', to: '#6EB8F6', className: 'dark2'}" onclick="window.location.href='?page_id=53'">Forum</span>&nbsp;&nbsp; 
						
					    <span name="Button2" value="News" id="Button2" class="glow {from: '#990000', to: '#ff2b2b', className: 'dark2'}" onclick="window.location.href='?page_id=27'">News</span>&nbsp;&nbsp;
						
         				<span name="Button2" value="Resources" id="Button2" class="glow {from: '#4E8915', to: '#82D638', className: 'dark2'}" onclick="window.location.href='?page_id=7'">Resources</span>&nbsp;&nbsp;
						
        				<span name="Button3" value="Events" id="Button3" class="glow {from: '#F19914', to: '#f9d81c', className: 'dark2'}"  onclick="window.location.href='?cat=3'">Events</span>&nbsp;&nbsp;
					        				         
       				    <span name="Button4" value="About Us" id="Button4" class="glow {from: '#7A006D', to: '#F09AE9', className: 'dark2'}"  onclick="window.location.href='?page_id=13'">About Us</span>&nbsp;&nbsp;                              
    				
					</div>
	<div id="forumcontent">	
<?php
the_content();
?>
	</div><!-- #main -->
	<div class="push"></div> 
  
 
</div>	
	
<div class="forumfooter">
	<div style="width:900px; margin-left:auto;margin-right:auto;text-align:center;padding-left:90px;">
	
	<a href="http://tap.leicester.gov.uk" alt="The Access Point"><img src="images/taplogo.png" alt="footer" id="footer" /></a>
	<a href="http://cafamily.org.uk/" alt="Contact a Family"><img src="images/caflogo.png" alt="footer" id="footer" /></a>
	<a href="http://www.ncb.org.uk/edcm/home.aspx" alt="Every Disabled Child Matters"><img src="images/edcmlogo.png" alt="footer" id="footer" /></a>

	
	<p style="text-align:right;padding-right:250px">Copyright 2010 Leicester Parent and Carer's Forum. <a href="about.html">About this website</a>. <?php wp_register('', '. '); ?><?php wp_loginout(); ?></p></div>
</div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>