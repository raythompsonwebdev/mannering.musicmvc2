<html lang="en" class="no-js" >

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=yes">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mannering Music</title>
     <link rel="stylesheet" href="assets/css/style.css" >
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css" >
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  />
    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ie.css">
      <script src="assets/js/old-browser-scripts/Respond-master/dest/respond.src.js"></script>
      <script src="assets/js/old-browser-scripts/html5shiv.min.js"></script>
      <script src="assets/js/old-browser-scripts/selectivizr.js"></script>
    <![endif]-->
    <title><?=$title?></title>
  </head>
  
  <body>

    <div id="wrapper">

    <header role="banner">

      <span class="social">
        <ul id="social">
   
          <?php if ($loggedIn): ?>
          <li class="social-item"><a href="/logout">Log out</a>
          </li>
          
          <?php else: ?>
          <li class="social-item"><a href="/login">Log in</a></li>
          <li class="social-item"><a href="/register">Register</a></li>

          <?php endif; ?>
          
        </ul>
      </span>

      <!---logo-->
      <hgroup>
        <h1 id="logo"><span>MANNERING</span><span>MU</span>SIC</h1>
        <h2 class="site-description">Jazz, Hip Hop & Country</h2>
      </hgroup>

    </header>

      <!--navigation here-->
      <nav role="navigation" >
                  
        <ul id="inner_nav">
        <?php if (!$loggedIn): ?>
          <li><a rel='tab' href="/">Home</a></li>
            <li><a rel='tab' href="/search">Search</a></li>
            <li><a rel='tab' href="/video">Video</a></li>
            
            <li><a rel='tab' href="/contact">Contact</a></li>
            <?php else: ?> 
            <li><a rel='tab' href="/">Home</a></li>
            <li><a rel='tab' href="/search">Search</a></li>
         <li><a href="/reviews">Reviews</a></li>
		<!--	<li><a href="/editreviews">Add Review</a></li>-->
      <?php endif; ?>
        </ul>

      </nav>

      <!-- /.container -->
      <main id="content">

              
       
              <?php echo $output; ?>

       

      </main>

      
<!--footer here-->
<footer role="navigation">

   <div class="social-btns">
  <ul>
    <li><a href="#"><i class="fa fa-twitter soc"></i></a></li>
      <li><a href="#"><i class="fa fa-facebook soc"></i></a></li>
        <li><a href="#"><i class="fa fa-rss soc"></i></a></li>
      <li><a href="#"><i class="fa fa-dribbble soc"></i></a></li>
    <li><a href="#"><i class="fa fa-instagram soc"></i></a></li>
  </ul>
</div>
  <ul id="inner_footer">
    <li><a href="#">Terms</a></li>
      <li><a href="#">Privacy</a></li>
      <li><a href="#">About</a></li>
      
  </ul>

</footer><!--Footer end-->

<!--google analytics here-->

    </div><!-- /.wrapper end -->
    
  </body>
</html>