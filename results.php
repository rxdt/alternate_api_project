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
      </button>
      <a class="navbar-brand" href="#">All Translated Lists</a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">

      <ul class="nav navbar-nav pull-center">

        <li class="active"><a href="http://thecity.sfsu.edu/~rxdt/current.php#">Input Words Homepage</a></li>
      
      </ul>
    </div>
  </nav>

<div class="container">

  <div class="row">
    <div class="span8">
        
        
<!-- This is where we interact with the API -->

    <?php 

        // Grabbing the "words list" from the Form Page
        $list = $_POST['list'];
        // Create an array called words
        $words = explode(" ", $list);
        
        foreach ($words as $value)                        // start outer foreach
        {
            $word = strtoupper($value);
            echo "<br><br><br><b> $word </b><br>";
       
            //Calls API and interprets a string of XML into a simpleXML object
            $xml = simplexml_load_string(grab_xml_definition($value, "spanish", "75da9658-d5ee-4b0d-8c00-1dfe4eaca8a4"));
            
            // $result = $xml->xpath('//ref-link[1]'); //this works but not correctly for every word
            // echo $result[0] . "<br>" . $result[1];
            
            $translations = array();
           
            // if this path exists use this... it's the more typical path of definition locations - 
            // (e.g. doesn't print non-typical xml for cat/"gato" 
            if($xml->entry->def->dt->{'ref-link'})
            {
                foreach ($xml->entry->def->dt->{'ref-link'}  as $dt) 
                {
                    $translations[] = $dt->asXML();
                }
                if($translations[0])
                {
                    echo $translations[0] . "<br>";
                }
            }
         
            //if the translation should be pulled from the 1st entry in DOM
            if($xml->entry[1]->def->dt)
            {
                foreach ($xml->entry[1]->def->dt as $dt) 
                {
                    $translations[] = $dt->asXML();
                }
                echo $translations[1];
            }
            
            if(!$translations[0] || !$translations[1])
            {
                echo "Sorry! No translation found for that word.";
            }
            
        }                                                 // close outer foreach
        
        
        
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
