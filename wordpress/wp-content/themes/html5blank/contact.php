<!--?php
/*
Template Name: Contact
*/
?-->

<?php get_header(); ?>
<body class="content-area-2 <php body_class();?>">


<div class="layout-fix">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1"style="background-color: #fff;">
        <h1 class="text-center" style="font-size: 45px;"> Contact Me! </h1>
        <hr>
        <div class="col-xs-6 col-xs-offset-3 text-center">
          <form role="form" method="post" action="php/contact-form.php">
            <div class="form-group">
               <label for="exampleInputEmail1" class="pull-left">Name / Corporation:</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="What's your name?">
            </div>
            <div class="form-group">
               <label for="exampleInputEmail1" class="pull-left">Email:</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
            <label class="pull-left"for="message"> Message: </label>
        <textarea name="number"class="form-control" placeholder="What would you like to say?"rows="3"></textarea>
      </div>
       <button type="submit" class="btn btn-primary pull-left" style="margin-bottom: 10px;">Submit</button>
      </form>
      
      <div style="clear: both;"></div>
        </div>

     
    </div>
  </div>
  </div>

  <?php get_footer(); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//use.typekit.net/xfz5twe.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</body>