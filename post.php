<?php 
require_once("admin/bootstrap.php");

?>

<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<meta name="description" content="description">
 
<title>Masonry</title>
 
<link rel="stylesheet" type="text/css" media="screen" href="css/masonry.css"/>
<link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/layout.css">

<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
 
</head>
 
<body>
 

   
  <div class="container" id="container">


    
    <?php region('showPost') ;?>
   
  
    
    
   
  
  </div>
   
   <script src="js/jquery-1.7.1.min.js"></script>
   <script src="js/jquery.masonry.min.js"></script>
   <script>
     $(function(){
   
       var $container = $('#container');
     
       $container.imagesLoaded( function(){
         $container.masonry({
           itemSelector : '.masonryImage'
         });
       });
     
     });
   </script>
 
</body>
</html>