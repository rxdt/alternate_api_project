<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>rxdt | project1</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
  <script src="js/bootstrap.js"></script>
</head>


<body>
  
  <nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        
      <a class="navbar-brand" href="#">Current List to Translate</a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav pull-right">

    <li class=""><a href="http://thecity.sfsu.edu/~rxdt/results.php#">All Translated Lists</a></li>
      
      </ul>
    </div>
  </nav>

<div class="container">

  <div class="page-header">
    <h1>Input Words</h1>
    <h3>Separate with spaces</h3>
  </div>

  <div class="row">
      <div class="span8">

      <!-- Word Form -->
      <form action="results.php" method="post">

        <textarea type="text" class="span6" name="list" id="list" rows="15" columns="50" value=></textarea>
        <input type="submit" value="Translate List">
        
      </form><!-- End form -->
        
    </div>
  </div><!-- End row -->

  </div><!-- End container -->

</body>
</html>
