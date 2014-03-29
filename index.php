<!DOCTYPE html>
<?php require('config.php'); ?>
<html>
<head>
  <meta charset="utf-8">
  <title>Home | project1</title>

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
      <a class="navbar-brand" href="#">Word Translator</a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">

      <ul class="nav navbar-nav pull-right">

        <li class="active"><a href="#">Input Word</a></li>
      
        <li class=""><a href="<?php echo URL_ROOT; ?>/results.php">Word List</a></li>
      
      </ul>
    </div>
  </nav>
 
<div class="container">

  <div class="page-header">
    <h1>Input A Word</h1>
  </div>


  <div class="row">
      <div class="span8">

      <form action="results.php" method="post">

        <label for="word">Word</label>
        <input type="text" class="span6" name="word" id="word" value="<?php echo $word; ?>">

        <input type="hidden" name="" value=""/>
        <button id="submit" type="submit" class="btn btn-primary" >Translate List</button>

      </form>
        
    </div>
  </div>

  </div>

</body>
</html>
