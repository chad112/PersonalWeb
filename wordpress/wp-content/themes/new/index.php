	<?php get_header(); ?>

  <div class="container-fluid">
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2 text-center" style="background-color: #fff;">
        <?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
        <div class="date"><?php the_time( 'M j y' ); ?></div>
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <div class="author"><?php the_author(); ?></div>
    </div><!--end post header-->
    <div class="entry clear">
        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
        <?php the_content(); ?>
        <?php edit_post_link(); ?>
        <?php wp_link_pages(); ?>
    </div><!--end entry-->
    <div class="post-footer">
        <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </div><!--end post footer-->
  </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  <div class="navigation index">
    <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
    <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
  </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>
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

  <?php get_footer(); ?>