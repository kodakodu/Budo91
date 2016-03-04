<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Admin - Budo91</title>
	
	<link href="http://localhost:8095/Budo91/assets/css/layout.css" rel="stylesheet" media="screen">
	<!--<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />-->
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="http://localhost:8095/Budo91/assets/javascript/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="http://localhost:8095/Budo91/assets/javascript/hideshow.js" type="text/javascript"></script>
	<script src="http://localhost:8095/Budo91/assets/javascript/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://localhost:8095/Budo91/assets/javascript/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="http://localhost:8095/Budo91/index.php/admin">Website Admin</a></h1>
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a href="http://localhost:8095/Budo91/">View Site</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>John Doe (<a href="#">3 Messages</a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="http://localhost:8095/Budo91/index.php/admin">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<form class="quick_search">
			<input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>
		<h3>Clubs</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="http://localhost:8095/Budo91/index.php/admin/club" style="font-weight: bold;">Ajouter un club</a></li>
			<li class="icn_categories"><a href="http://localhost:8095/Budo91/index.php/admin_clubs">Lister les clubs</a></li>
			<!--<li class="icn_categories"><a href="#">Categories</a></li>
			<li class="icn_tags"><a href="#">Tags</a></li>-->
		</ul>
		<h3>Disciplines</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="#">Ajouter une discipline</a></li>
			<li class="icn_categories"><a href="http://localhost:8095/Budo91/index.php/admin_disciplines">Lister les disciplines</a></li>
			<!--<li class="icn_profile"><a href="#">Your Profile</a></li>-->
		</ul>
		<!--<h3>Media</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="#">File Manager</a></li>
			<li class="icn_photo"><a href="#">Gallery</a></li>
			<li class="icn_audio"><a href="#">Audio</a></li>
			<li class="icn_video"><a href="#">Video</a></li>
		</ul>
		<h3>Admin</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="#">Options</a></li>
			<li class="icn_security"><a href="#">Security</a></li>
			<li class="icn_jump_back"><a href="#">Logout</a></li>
		</ul>-->
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; 2015 Underwood Yann</strong></p>
			<!--<p>Theme by <a href="http://www.medialoot.com">MediaLoot</a></p>-->
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		<h4 class="alert_info">Bienvenue sur l'interface d'administratiion de Budo91</h4>
		
		<article class="module width_full">
			<header><h3>Ajout d'un club</h3></header>
               <form action="<?php echo site_url('admin/add_club'); ?>" method="post">
                        <div class="module_content">
				<div class="module_content">
						<fieldset>
							<label>Nom</label>
							<input type="text" name="nom">
						</fieldset>
						<fieldset>
							<label>Description</label>
							<textarea rows="2" name="desc"></textarea>
						</fieldset>
                                    						<fieldset>
							<label>Adresse</label>
							<textarea rows="2" name="adresse"></textarea>
						</fieldset>
                                    						<fieldset>
							<label>Code postal</label>
							<textarea rows="1" name="cp"></textarea>
						</fieldset>
                                    						<fieldset>
							<label>Ville</label>
							<textarea rows="1" name="ville"></textarea>
						</fieldset>
						
				</div>
                            		<input type="submit" value="Publish" class="alt_btn">
					<input type="submit" value="Reset">
                                        </form>
				<div class="clear"></div>
			</div>
		</article><!-- end of stats article -->
		
		
		
		
		
		<div class="clear"></div>
		
		
		<div class="spacer"></div>
	</section>


</body>

</html>