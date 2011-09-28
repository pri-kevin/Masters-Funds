<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>"><head>
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>
<?php print $scripts ?>
<script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script>

<!-- Bio Popup -->
<script language="javascript" src="/scripts/jquery.js"></script>
<script language="javascript" src="/scripts/modal.popup.js"></script>
<script language="javascript" src="/scripts/managers.js"></script>

<!-- Google -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1004798-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script>
$(document).ready(function() {	

	//select all the a tag with name equal to modal
	$('a[name=modal]').click(function(e) {
		//Cancel the link behavior
		e.preventDefault();
		
		//Get the A tag
		var id = $(this).attr('href');
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(2000); 
	
	});
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});			
	
});

</script>

<!--[if lte IE 6]>
<script type="text/javascript"> 
    $(document).ready(function(){ 
        $(document).pngFix(); 
    }); 
</script> 
<script type="text/javascript" src="<?php print $GLOBALS['base_url']."/"; print $directory; ?>/js/suckerfish.js"></script>
<![endif]-->

<!-- include jQuery Library From Google Code
<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.js"></script>

<!-- include jQuery UI  From Google Code
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>

<script type="text/javascript">
 $(document).ready(function() {

           
        $("ul.blockeasing li.main").mouseover(function(){ //When mouse over ...
        	   //Following event is applied to the subnav itself (making height of subnav 60px)
		      $(this).find('.subnav').stop().animate({height: '60px', opacity:'1'},{queue:false, duration:1500, easing: 'easeOutElastic'})
		});
	
	    $("ul.blockeasing li.main").mouseout(function(){ //When mouse out ...
	          //Following event is applied to the subnav itself (making height of subnav 0px)
		      $(this).find('.subnav').stop().animate({height:'0px', opacity:'0'},{queue:false, duration:1600, easing: 'easeOutElastic'})
		});

          	
        //menu itembackground color animation			
		$("ul.blockeasing li").hover(function() {
              $(this).stop().animate({ backgroundColor: "none"}, 600);},
           function() {
              $(this).stop().animate({ backgroundColor: "none" }, 600);
        });
		
});
</script> -->
</head>

<body>

<div id="above" class="clear-block">
	<?php if ($above): ?><?php print $above; ?><?php endif; ?>
</div>

<div id="page">

	<div id="masthead">

		<div id="header" class="clear-block">
			<div class="header-right">
				<div class="header-left">
				<?php print $search_box; ?>
				<div id="logo">
					<?php if ($logo): ?>
						<a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>">
							<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
						</a>
					<?php endif; ?>
				</div> <!-- /logo --> 
					<div id="name-and-slogan">
					<?php if ($site_name): ?>
						<h1 id="site-name">
							<a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>">
								<?php print $site_name; ?>
							</a>
						</h1>
					<?php endif; ?>
					<?php if ($site_slogan): ?>
						<div id="site-slogan">
							<?php print $site_slogan; ?>
						</div>
					<?php endif; ?>
					</div> <!-- /name-and-slogan -->
				<?php if ($header): ?> 
					<?php print $header; ?>
				<?php endif; ?>
				</div> <!-- /header-left -->
			</div> <!-- /header-right -->
		</div> <!-- /header -->

	</div>

	<div id="prenav"></div>
<?php
if ($suckerfish) {
  include 'psuckerfish.php';
} else {
  include 'pmenu.php';
}
?>
	<div id="postnav"></div>

	<?php if ($breadcrumb): ?>
		<div id="breadcrumb">
			<?php print $breadcrumb; ?>
		</div>
	<?php endif; ?>

<?php
	$section1count = 0;
	$user1count = 0;
	$user2count = 0;
	$user3count = 0;
	
	if ($user1)
	{
	  $section1count++;
	  $user1count++;
	}
	
	if ($user2)
	{
	  $section1count++;
	  $user2count++;
	}
	
	if ($user3)
	{
	  $section1count++;
	  $user3count++;
	}
?>

<?php if ($section1count): ?>
	<?php $section1width = 'width' . floor(99 / $section1count); ?>
	<?php $block2div = ($user1count and ($user2count or $user3count)) ? " divider" : ""; ?>
	<?php $block3div = ($user3count and ($user1count or $user2count)) ? " divider" : ""; ?>

	<div class="clr" id="section1">

	<table class="sections" cellspacing="0" cellpadding="0">
		<tr valign="top">
		<?php if ($user1): ?>
			<td class="section <?php echo $section1width ?>">
				<?php print $user1; ?>
			</td>
		<?php endif; ?>  
		<?php if ($user2): ?>
			<td class="section <?php echo $section1width . $block2div; ?>">
				<?php print $user2; ?>
			</td>
		<?php endif; ?>  
		<?php if ($user3): ?>
			<td class="section <?php echo $section1width . $block3div; ?>">
				<?php print $user3; ?>
			</td>
		<?php endif; ?>
		</tr>
	</table>

	</div>  <!-- /section1 -->
<?php endif; ?>

<div id="middlecontainer">
<table border="0" cellpadding="0" cellspacing="0" id="content">
	<tr>
		<?php if ($sidebar_left) { ?><td id="sidebar-left">
			<?php print $sidebar_left ?>
		</td><?php } ?>
		<td valign="top">
			<?php if ($mission) { ?><div id="mission"><?php print $mission ?></div><?php } ?>
			<div id="main">
				<?php if ($section1count > 0): ?>
					<?php if ($breadcrumb): ?><div id="breadcrumb2"><?php print $breadcrumb; ?></div><?php endif; ?>
				<?php endif; ?>
				<?php if ($content_top):?><div id="content-top"><?php print $content_top; ?></div><?php endif; ?>
				<h1 class="title"><?php print $title ?></h1>
				<div class="tabs"><?php print $tabs ?></div>
				<?php print $help ?>
				<?php if ($show_messages) { print $messages; } ?>
				<?php print $content; ?>
				<?php print $feed_icons; ?>
				<?php if ($content_bottom): ?><div id="content-bottom"><?php print $content_bottom; ?></div><?php endif; ?>
			</div>
		</td>
		<?php if ($sidebar_right) { ?><td id="sidebar-right">
			<?php print $sidebar_right ?>
		</td><?php } ?>
	</tr>
</table>
</div>
<?php
	$section2count = 0;
	$user4count = 0;
	$user5count = 0;
	$user6count = 0;
	
	if ($user4)
	{
	  $section2count++;
	  $user4count++;
	}
	
	if ($user5)
	{
	  $section2count++;
	  $user5count++;
	}
	
	if ($user6)
	{
	  $section2count++;
	  $user6count++;
	}
?>

<?php if ($section2count): ?>
	<?php $section2width = 'width' . floor(99 / $section2count); ?>
	<?php $block2div = ($user4count and ($user5count or $user6count)) ? " divider" : ""; ?>
	<?php $block3div = ($user6count and ($user4count or $user5count)) ? " divider" : ""; ?>

	<div id="bar"></div>

	<div class="clr" id="section2">

	<table class="sections" cellspacing="0" cellpadding="0">
		<tr valign="top">
		<?php if ($user4): ?>
			<td class="section <?php echo $section2width ?>">
				<?php print $user4; ?>
			</td>
		<?php endif; ?>  
		<?php if ($user5): ?>
			<td class="section <?php echo $section2width . $block2div; ?>">
				<?php print $user5; ?>
			</td>
		<?php endif; ?>  
		<?php if ($user6): ?>
			<td class="section <?php echo $section2width . $block3div; ?>">
				<?php print $user6; ?>
			</td>
		<?php endif; ?>  
		</tr>
	</table>

	</div>  <!-- /section2 -->
<?php endif; ?>

<div id="footer-wrapper" class="clear-block">
	<div id="footer">
<?php if ($below) { ?><div id="below"><?php print $below; ?></div><?php } ?>

	</div>
	<div class="footer-right">
		<div class="footer-left">
		</div> <!-- /footer-left -->
	</div> <!-- /footer-right -->
</div> <!-- /footer-wrapper -->

<div id="shadow" class="clear-block">
	<div class="shadow-right">
		<div class="shadow-left">

		</div>
	</div>
</div>

</div>

<?php print $closure ?>
</body>
</html>
