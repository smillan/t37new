<?php 

$items= array_reverse($items);
$cnt=0;

 ?>


<div class="container">
	
    <div class="sixteen columns">
      <h1 class="remove-bottom" style="margin-top: 40px"><?php echo $menuItems["titulo"] ;?></h1>
     
      <hr />
    </div>
    <div class="sixteen columns">
		<img src="<?php echo substr($menuItems["foto"], 5) ;?>">
	</div>
    <div class="one-third column">
      <h3><?php echo $menuItems["subtitulo"] ;?></h3>
      <p><?php echo $menuItems["texto"] ;?></p>
    </div>
    <div class="one-third column">
      <h3>Three Core Principles</h3>
      <p>Skeleton is built on three core principles:</p>
      <ul class="square">
        <li><strong>A Responsive Grid Down To Mobile</strong>: Elegant scaling from a browser to tablets to mobile.</li>
        <li><strong>Fast to Start</strong>: It's a tool for rapid development with best practices</li>
        <li><strong>Style Agnostic</strong>: It provides the most basic, beautiful styles, but is meant to be overwritten.</li>
      </ul>
    </div>
    <div class="one-third column">
      <h3>Docs &amp; Support</h3>
      <p>The easiest way to really get started with Skeleton is to check out the full docs and info at <a href="http://www.getskeleton.com">www.getskeleton.com.</a>. Skeleton is also open-source and has a <a href="https://github.com/dhgamache/skeleton">project on git</a>, so check that out if you want to report bugs or create a pull request. If you have any questions, thoughts, concerns or feedback, please don't hesitate to email me at <a href="mailto:hi@getskeleton.com">hi@getskeleton.com</a>.</p>
    </div>

  </div><!-- container -->
