
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cache Cache</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/myStyle.css" rel="stylesheet">
    <style>
    body{
      padding-top: 100px;
    }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container espTop">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Cache Cache</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        <!--
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        -->
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

     <div id="content">       
	   <img id="img" src="assets/img/image.jpg">

        <br><br>

        <form id="form">
        <input type="text" name="width" placeholder="Largeur">
        <input type="text" name="height" placeholder="Hauteur">
        <br><br>
        <button class="btn btn-default" id="modif">Modifier</button>
        </form>
	  </div>

      <button class="btn btn-primary" id="cacher"> Toggle</button>
      <button class="btn btn-primary" id="afficher" style="display:none;"> Afficher</button>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>
