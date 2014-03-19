<?php 
$items= array_reverse($items);



foreach ($items as $item) {
      $titulo=$item['titulo'];
      $subtitulo=$item['subtitulo'];
        echo '<item>
        ';
        echo '<title>' . $titulo . '</title>
        ';
        echo '<description>' . $subtitulo . '</description>
        ';
        echo '<link>' . $link . '</link>
        ';
        echo '<pubDate>' . date("D, d M Y H:i:s O", strtotime($date)) . '</pubDate>
        ';
        echo '</item>
        ';
	// echo '<div class="masonryImage">
     
      
 //       <div class="title">'.$item['titulo'].'
        
 //       </div>';
 //       $np=(sizeof($items)-$cnt);
 //       echo '<a href=post.php?id='.$np.'&cat=posts>';
 //       $img=  substr($item['foto'], 5);
 //       $data = getimagesize($img);
	// 	 $width = $data[0];
	// 	 $height = $data[1];
	// 	 $prop = ($width * 200 ) / $height;
 //   thumbnail($item['foto'], 200 , $prop);
 //   echo '</a>';
 //       echo '<div class="desc">'.$item['subtitulo'].
         
      
      
 //       '</div>
 //       <div class="line"></div>
 //    </div>';
 //    $cnt++;
}


?>



