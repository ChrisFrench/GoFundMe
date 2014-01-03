<?php 

require 'app/restaurants.php';

$restaurants = New Restaurants();
$list = $restaurants->getList();



?>

<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simple add fpr goFundMe">
    <meta name="author" content="Chris French">
    <link rel="shortcut icon" href="/favicon.ico">

    <title>Simple goFundMe App</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/gofundme.css" rel="stylesheet">
    <link href="/plugins/select2/select2.css" rel="stylesheet"/>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="">

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">GoFundMe</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GoFundMe</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Restaurants</a></li>
            <li><a href="/about">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        <h1>Search for your Favorite Place on this short list!</h1>
        <p class="lead">Awesome One Page Mini App</p>
      </div>

    </div><!-- /.container -->
 

    <div class="container">

      <div class="starter-template">
        
        <h3>Choose a Restaurant</h3>
        <select id="restaurants">
        <?php foreach ($list as $restaurant) :  ?>
		<option  cuisine="<?=$restaurant['cuisine_type']?>" value="<?=$restaurant['cuisine_type']?>"><?=$restaurant['restaurant_name']?></option>
		
		<?php endforeach; ?>
</select>
       
      </div>

    </div><!-- /.container -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

  	 <script src="/plugins/select2/select2.js"></script>
<script>
$(document).ready(function() { $("#restaurants").select2({
matcher: function(term, text, opt) {
return text.toUpperCase().indexOf(term.toUpperCase())>=0
|| opt.attr("cuisine").toUpperCase().indexOf(term.toUpperCase())>=0;


}}); 



});
</script>

</body></html>