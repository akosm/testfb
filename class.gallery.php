<?php

class PGX_APP_GALLERY{
	
				public function Handler()
					{
						$method = $_GET['m'];
						if($method){
							$this->$method();
						}else{
							$this->index();
						}
						
					}
					
				public function index(){
					$this->show_all_photos_thumnails();
				}
				
				public function view (){
					
					$photos_thumbnail = $this->show_all_photos_thumnails();
					

					include("templates/thumbnails.html");
					
				}
				public function more_photos(){
					$counter = $_GET['counter'];
					$mycount = 0;
					$images = $this->show_all_photos_thumnails();
					$tr  = "";
					$i = 1;
						$tr.='<div class="photo_container">';
							foreach($images as $photo){
								if($mycount == $counter)
									break;
								if( $i%4 == 0)
								$class= " margin_r_zero";
								else 
								$class= "";
					$tr.='<div class="photo_box '.$class.'"><img src="'.$photo['img'].'"/></div>';		
					$i++;
					$mycount++;

					} 
					$tr .= '</div><br clear="all" />
					<div class="load_more">';
					$counter = $counter + 16;
					$tr.='<a href="#" onClick = "morephotos('.$counter.');return false;">Load More <img src="images/load_more_btn.png" /></a></div>';

				echo $tr;
					
				}
				
				
				function photo_slider(){
					
						
					$images = array(	
							array("img"=>'images/p1.png','date'=>'February 15th, 2011','desc'=>'Taken of my First Trip'),
							array("img"=>'images/p1.png','date'=>'February 15th, 2011','desc'=>'Alway nice to see this photo'),
							array("img"=>'images/p2.png','date'=>'February 15th, 2011','desc'=>"Taken when on holidays, I couldn't believe the amount and variety of butterflies. The place we stayed at had beautiful cottage gardens."),
							array("img"=>'images/p3.png','date'=>'February 15th, 2011','desc'=>'My best Picture'),
							array("img"=>'images/p4.png','date'=>'February 15th, 2011','desc'=>'Taken of my First Trip'),
							array("img"=>'images/p5.png','date'=>'February 15th, 2011','desc'=>'My best Picture'),
							array("img"=>'images/p6.png','date'=>'February 15th, 2011','desc'=>'Alway nice to see this photo'),
							array("img"=>'images/p7.png','date'=>'February 15th, 2011','desc'=>'My best Picture'),
							array("img"=>'images/p1.png','date'=>'February 15th, 2011','desc'=>'Alway nice to see this photo'),
							array("img"=>'images/p2.png','date'=>'February 15th, 2011','desc'=>'My best Picture'),
							array("img"=>'images/p2.png','date'=>'February 15th, 2011','desc'=>'Taken of my First Trip'),
							array("img"=>'images/p3.png','date'=>'February 15th, 2011','desc'=>'My best Picture'),
							array("img"=>'images/p4.png','date'=>'February 15th, 2011','desc'=>'My best Picture'),
							array("img"=>'images/p5.png','date'=>'February 15th, 2011','desc'=>'Taken of my First Trip'),
							array("img"=>'images/new.png','date'=>'February 15th, 2011','desc'=>'Alway nice to see this photo'),
							array("img"=>'images/p6.png','date'=>'February 15th, 2011','desc'=>'My best Picture'),
							array("img"=>'images/p7.png','date'=>'February 15th, 2011','desc'=>'Taken of my First Trip'),
							array("img"=>'images/p1.png','date'=>'February 15th, 2011','desc'=>'Taken of my First Trip'),
							array("img"=>'images/p2.png','date'=>'February 15th, 2011','desc'=>'My best Picture'),
							array("img"=>'images/p2.png','date'=>'February 15th, 2011','desc'=>"Taken when on holidays, I couldn't believe the amount and variety of butterflies. The place we stayed at had beautiful cottage gardens."),
							array("img"=>'images/p3.png','date'=>'February 15th, 2011','desc'=>'Taken of my First Trip'),
							array("img"=>'images/p4.png','date'=>'February 15th, 2011','desc'=>'My best Picture'),
							array("img"=>'images/p5.png','date'=>'February 15th, 2011','desc'=>"Taken when on holidays, I couldn't believe the amount and variety of butterflies. The place we stayed at had beautiful cottage gardens."),
							array("img"=>'images/p6.png','date'=>'February 15th, 2011','desc'=>'Taken of my First Trip'),
							array("img"=>'images/p8.png','date'=>'February 15th, 2011','desc'=>'My best Picture')	
							);

							
							 $tr  = "";
							
							$tr .= '<div id="content_wraper">

							<div class="gallery">

							<a href="class.gallery.php?m=photo_slider" class="slider_btn select"></a>
							<a href="class.gallery.php?m=view" class="thumbnail_btn"></a>
							<br clear="all" />
						
							</div>
			  
							<div class="slider">
							<div class="slider_lf_btn"><a href="#" style="z-index:10000"><img src="images/slider_lf_btn.png" /></a></div>
							<div id="photoslider">';
					   
							  foreach($images as $photo)
							  {
							   $tr .= '<div><img src="'.$photo['img'].'" />';
							   $tr .= '<div class="foter_text">
								  '.$photo['desc'].'
								  <span>Uploaded On '.$photo['date'].'  |  <a href="#">Share</a>  |  <a href="#">Like</a></span>
								 </div></div>';
							  }
			  
							$tr .=  '</div>
							<div class="slider_rt_btn"><a href="#"><img src="images/slider_rt_btn.png" /></a></div>
							</div>
							</div>'; 
				
						include("templates/photo_slider.html");
				
				}
				
				function show_all_photos_thumnails(){
				
					
					
					$images = array(	
							array("img"=>'images/p1.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p1.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p2.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p3.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p4.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p5.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p6.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p7.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p1.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p2.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p2.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p3.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p4.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p5.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p6.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p6.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p7.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p1.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p2.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p2.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p3.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p4.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p5.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p6.png','date'=>'February 15th, 2011','desc'=>'desc'),
							array("img"=>'images/p8.png','date'=>'February 15th, 2011','desc'=>'desc')	
							);
							
						return $images;
				}

	
	}
	
	


$ab = new PGX_APP_GALLERY();
$ab->Handler();

?>