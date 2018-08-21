<!DOCTYPE HTML>

<?php

if($_POST['input'])
{
   $city=$_POST['input'];
   for($i=0;$i<sizeof($city);$i++)
   {
     $city = str_replace(" ", "-", $city);
   }
    $html = file_get_contents("http://completewebdevelopercourse.com/locations/$city");

    $pageArray=explode('3 Day Weather Forecast Summary:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">',$html);
    $secondPageArray=explode('</span></span></span>',$pageArray[1]);
    $weather="<div class=\"alert alert-success\" role=\"alert\">$secondPageArray[0]</div>"; 
}

?>
<html>
    
    <head>
        
    <meta charset="utf-8">
      
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
        
    <style type="text/css">
        
        body
        {
            background-image: url("Resources/bg.jpg");
        }
        
        .jumbotron
        {
            margin-top: 125px;
            text-align-last: center;
            background: rgba(255, 255, 255, 0.15); 
            font-family: 'Nanum Gothic', sans-serif;
        }
        
        #Input
        {
            text-align-last: left;
            width: 500px;
            margin-left: 270px;
        }
        
        #button-addon2
        {
            margin-left: 470px;
            margin-top: 20px;
        }
        
        .alert
        {
            width: 550px;
            height: 130px;
            margin-left: 265px;
        }   
        
        
    </style>    
   
        
    </head>
    
    <body>
        
        
    <div class="container">    
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-4">What's the weather ?</h1>
                <p class="lead">Enter your city name to get started !</p>
                <div class="input-group mb-3">
                  <form name="form" action="" method="post">
                      <input type="text" class="form-control input-sm" placeholder="Enter City eg.Dubai" aria-label="Recipient's username" aria-describedby="button-addon2" id="Input" name="input">
                      <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" id="button-addon2" value="Submit">
                      </div>
                    </form>
              </div>
            </div>
            <p><? echo $weather?></p>
        </div>
        
        
    </div>
        
    
        
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
         
    </body>
</html>