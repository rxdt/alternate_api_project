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
      <a class="navbar-brand" href="#">All Translated Lists</a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">

      <ul class="nav navbar-nav pull-right">

        <li class="active"><a href="http://thecity.sfsu.edu/~rxdt/current.php#">Input Words Homepage</a></li>
      
      </ul>
    </div>
  </nav>

<div class="container">

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

        // Grabbing the "words list" from the Form Page
        $list = $_POST['list'];
        // Create an array called words
        $words = explode(" ", $list);
        
        foreach ($words as $value) 
        {
            $word = strtoupper($value);
            echo "<br><br><b> $word </b> <br>";
       
            //Calls API and interprets a string of XML into an object
            $xdef = simplexml_load_string(grab_xml_definition("$value", "spanish", "75da9658-d5ee-4b0d-8c00-1dfe4eaca8a4"));
            //echo $xdef->entry[0]->def->dt;
           
            print_r($xdef);
            print_r($xdef->def);
        }
    
        
        
        
        function grab_xml_definition ($word, $ref, $key)
        {	
        $uri = "http://www.dictionaryapi.com/api/v1/references/" . urlencode($ref) . "/xml/" . 
        urlencode($word) . "?key=" . urlencode($key);
  
        return file_get_contents($uri);
        };

        
        
      ?>  

        
    </div>
  </div><!-- End row -->

  </div><!-- End container -->

</body>
</html>
