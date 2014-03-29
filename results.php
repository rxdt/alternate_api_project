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

        <li class=""><a href="<?php echo URL_ROOT; ?>/index.php">Input List</a></li>

        <li class="active"><a href="#">Word List</a></li>
      
      </ul>
    </div>
  </nav>

<div class="container">

  <div class="page-header">
    <h1>Input A Word</h1>
  </div>


  <div class="row">
    <div class="span8">
<!-- This is where you would interact with the API
     I would do it above this and then from all the data
     Parse through it. 

     Good tools for PHP Debugging are:
     die($variable);
     var_dump($variable);
     print_r($variable);

     -->

      <?php 
        // Grabbing the "word" from the Form Page
        $new_word = $_POST['word'];
        
        // Create an array called words
        $words = array();

        // Add it to the array
        $words .= $new_word;

        

        foreach ($words as $word) {
          
            #code... this gives you an idea
        }
      ?>  

        
    </div>
  </div><!-- End row -->

  </div><!-- End container -->

</body>
</html>
