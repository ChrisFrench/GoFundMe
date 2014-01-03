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
            <li ><a href="/">Restaurants</a></li>
            <li class="active"><a href="/about">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        <h1>Christopher French</h1>
        <img src="/profile.jpg">
        <p class="lead">Awesome Web Developer</p>
      </div>

    </div><!-- /.container -->
 

    <div class="container">

      <div class="starter-template">
        
        <h3>Githubs</h3>
        <ul class="no-style">
        <li><a target="_blank" href="https://github.com/ChrisFrench">https://github.com/ChrisFrench</a></li>
        <li><a target="_blank" href="https://github.com/AmmoniteNetworks">https://github.com/AmmoniteNetworks</a></li>
        </ul>
        <h3>Social and stuff</h3>
        <ul class="no-style">
        <li><a target="_blank" href="https://www.facebook.com/chrissneakattack">https://www.facebook.com/chrissneakattack</a></li>
        <li><a target="_blank" href="http://ammonitenetworks.com">http://ammonitenetworks.com</a></li>
        </ul>
        <h3>Recent Apps</h3>
        <ul class="no-style">
        <li><a target="_blank" href="http://icrowdfund.com">http://icrowdfund.com</a></li>
        <li><a  target="_blank" href="https://cards.isismst.com/verizon">https://cards.isismst.com/verizon</a></li>
        <li><a target="_blank" href="https://locator.isismst.com/verizon">https://locator.isismst.com/verizon</a></li>
        <li><a target="_blank" href="https://demo.isismst.com/verizon/">https://demo.isismst.com/verizon/</a></li>

        
        </ul>
       
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