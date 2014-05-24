<!--?php
/*
Template Name: Splash
*/
?-->

<head>
	<title> Chad Schaub Graphic Design </title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">>
</head>

<body class="content-area-2" <?php body_class(); ?>>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2 text-center" style="background-color: #fff;">
        <h2 class="text-center" style="font-size: 60px; margin-bottom: -20px;"> Welcome To </h2>
<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="center-block"style="width: 100%; max-width: 500px;"alt="Chad Schaub Graphic Design">
    <h2> What would you like to see? </h2>
    <hr>
    <div class="col-sm-3 text-center">
    <a href="http://chadschaub.scotch/wordpress/?p=4"><img src="<?php echo get_template_directory_uri(); ?>/img/work.png" class="home-nav" alt="Link to Gallery"></a>
    <h3> Work </h3>
    </div>
   <div class="col-sm-3 text-center">
    <a href="http://chadschaub.scotch/wordpress/?p=8"><img src="<?php echo get_template_directory_uri(); ?>/img/about.png" class="home-nav" alt="Link to About"></a>
    <h3> About </h3>
  </div><div class="col-sm-3 text-center">
    <a href="http://chadschaub.scotch/wordpress/?p=20"><img src="<?php echo get_template_directory_uri(); ?>/img/contact.png" class="home-nav" alt="Link to Contact"></a>
    <h3> Contact </h3>
  </div><div class="col-sm-3 text-center">
    <a href="http://chadschaub.scotch/wordpress/?p=22"><img src="<?php echo get_template_directory_uri(); ?>/img/blog.png" class="home-nav" alt="Link to Blog"></a>
    <h3> Blog </h3>
  </div>
  <div class="col-xs-12">

    <hr>
  </div>
  <div class="col-xs-10 col-xs-offset-1">
    <h2> Here's some recent work </h2>
    <a id="post1" href="#"><img class="index-item"src="img/miraculous_thumb.jpg"></a>
       <a id="post2" href="#"><img class="index-item"src="img/transform_thumb.jpg"></a>
       <a id="post3" href="#"><img class="index-item"src="img/easter-party-thumb.png"></a>
  </div>
  </div>
</div>
<?php get_footer(); ?>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="//use.typekit.net/xfz5twe.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>