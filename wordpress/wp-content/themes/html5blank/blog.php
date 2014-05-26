<?php
/*
Template Name: Blog Page
*/
?>
<?php get_header(); ?>
<div id="main">
<div id="content" class="narrowcolumn">

<?php
query_posts('cat=4');
while (have_posts()) : the_post();
the_content();
endwhile;
?>

</div>

</div>
<?php get_footer(); ?>