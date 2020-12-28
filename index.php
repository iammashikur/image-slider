<?php

 $slider =  array(

     array(
        "image" => "http://via.placeholder.com/700x300",
        "caption" => "This is caption",
        "text" => "This is text",
    ),

    array(
        "image" => "http://via.placeholder.com/700x300",
        "caption" => "This is caption",
        "text" => "This is text",
    ),

    array(
        "image" => "http://via.placeholder.com/700x300",
        "caption" => "This is caption",
        "text" => "This is text",
    ),

    array(
        "image" => "http://via.placeholder.com/700x300",
        "caption" => "This is caption",
        "text" => "This is text",
    ),


    array(
        "image" => "http://via.placeholder.com/700x300",
        "caption" => "This is caption",
        "text" => "This is text",
    ),


    array(
        "image" => "http://via.placeholder.com/700x300",
        "caption" => "This is caption",
        "text" => "This is text",
    ),


    array(
        "image" => "http://via.placeholder.com/700x300",
        "caption" => "This is caption",
        "text" => "This is text",
    ),
    array(
        "image" => "http://via.placeholder.com/700x300",
        "caption" => "This is caption",
        "text" => "This is text",
    ),

      array(
        "image" => "http://via.placeholder.com/700x300",
        "caption" => "This is caption",
        "text" => "This is text",
    ),
    array(
        "image" => "http://via.placeholder.com/700x300",
        "caption" => "This is caption",
        "text" => "This is text",
    ),
    array(
        "image" => "http://via.placeholder.com/700x300",
        "caption" => "This is caption",
        "text" => "This is text",
    ),
    array(
        "image" => "http://via.placeholder.com/700x300",
        "caption" => "This is caption",
        "text" => "This is text",
    ),
    

 );


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.3/materia/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Slider</title>
</head>

<body>

   <div id="carouselId" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">

       <?php $index = 0; foreach($slider as $slides): ?>
           <li data-target="#carouselId" data-slide-to="<?= $index ?>" <?php if($index == '1'){ echo "class='active'" ; }?> ></li>
        <?php $index++; endforeach; ?>

       </ol>
       <div class="carousel-inner" role="listbox">


       <?php $index = 0; foreach($slider as $slides): ?>
           <div class="carousel-item <?php if($index == '0'){ echo "active" ; }?>">
               <img src="<?= $slides['image']?>" alt="First slide" class="w-100">
           </div>
        <?php $index++; endforeach; ?>

       </div>
       <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
       </a>
   </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
</body>

</html>