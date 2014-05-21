<?php get_header(); ?>
<body class="content-area-2">



	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2 text-center" style="background-color: #fff;">
        <h2 class="text-center" style="font-size: 60px; margin-bottom: -20px;"> Welcome To </h2>
  <img class="center-block" style="width: 100%; max-width: 500px;"src="img/logo.png">
    <h2> What would you like to see? </h2>
    <hr>
    <div class="col-sm-3 text-center">
    <a href="gallery.html"><img id="work-icon"class="home-nav"src="img/work.png"></a>
    <h3> Work </h3>
  </div>
   <div class="col-sm-3 text-center">
    <a href="about.html"><img class="home-nav"src="img/about.png"></a>
    <h3> About </h3>
  </div><div class="col-sm-3 text-center">
    <a href="contact.html"><img class="home-nav"src="img/contact.png"></a>
    <h3> Contact </h3>
  </div><div class="col-sm-3 text-center">
    <a href="blog.html"><img class="home-nav"src="img/blog.png"></a>
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
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>