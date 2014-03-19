
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<meta name="description" content="description">
 
<title>Masonry</title>
 
<link rel="stylesheet" type="text/css" media="screen" href="css/masonry.css"/>
 
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
 
</head>
 
<body>
 
 	<div class="nav">
 		<ul>
	 		<li><a href="#" class="current">Masonry</a></li>
	 		<li><a href="wookmark.html">Wookmark</a></li>
	 		<li><a href="css.html">CSS</a></li>
	 		<li><a href="http://designshack.net/articles/css/masonry/">Back to DS</a></li>
 		</ul>
 	</div>
   <?php $ipsum="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vel rutrum odio, lacinia mollis metus. Vestibulum tincidunt arcu eget eros malesuada, in luctus elit condimentum. Etiam at sollicitudin nulla. Ut scelerisque sodales volutpat. Maecenas auctor rutrum orci, eu pellentesque diam elementum ac. Donec nec consequat risus. Sed vel nibh at est lacinia malesuada. Aliquam aliquam neque eu mi mattis, id placerat velit dapibus. Vestibulum non fermentum turpis. Fusce et pretium nibh. Aliquam aliquet sapien non consequat tincidunt. Curabitur libero massa, congue non massa id, euismod viverra mauris. Quisque tempus, metus et elementum pellentesque, sem elit elementum turpis, eu convallis nunc turpis vitae est. Nullam id tincidunt libero, ac auctor arcu."; ?>
	<div id="container">
		<?php for ($i=0; $i < 50 ; $i++) : ?>
    
    
      <?php $dd=$i % 11;?>
     <div class="masonryImage">
     
      
       <div class="title">
       
          <?php echo str_split( $ipsum, rand(40, 130))[0] ;?>
        
       </div>
       
       <img src="images/<?php echo $dd;?>.jpg" alt="" />
       <div class="desc">
         
        <?php echo str_split( $ipsum, rand(40, 530))[0] ;?>
      
       </div>
       <div class="line"></div>
    </div>
  <?php endfor; ?>
	
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