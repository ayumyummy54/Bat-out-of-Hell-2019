<?php 
	require_once('inc/data.php');
	$title = "Media | Bat Out of Hell";
	$body_id = "media";

	require_once('inc/header.php');
?>
	<section class="bg-section general-section--border-top">
        <div class="offset-sm-2 col-sm-8 col-md-6 offset-md-3">
            <header class="gen-padding-top">
                <h2 class="tab-block">Media</h2>
            </header>
        </div>
        <div class="container">
        <div class="col-12 gallery">
        <h2>Videos</h2>
              <div class="vid-main-wrapper clearfix">
                <!-- THE YOUTUBE PLAYER -->
                <div class="vid-container">
                  <iframe id="vid_frame" src="https://www.youtube.com/embed/Vm0JdAdBuIw?rel=0&showinfo=0&autohide=1&autoplay=0" frameborder="0" width="560" height="315" allow="autoplay" allowfullscreen></iframe>
                    
                </div>
                  </div>

              <section id="extra wrapper" class="wrapper">

                <!-- CUSTOM ARROWS -->
                <button title="Next" class="swiper-custom-next d-none d-sm-inline-block">     
            <svg style="position: relative; top: 1px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><g class="nc-icon-wrapper" fill="#ec2420"><polygon fill="#ec2420" points="4.9,15.7 3.4,14.3 9.7,8 3.4,1.7 4.9,0.3 12.6,8 "></polygon></g></svg>
                  </button>
                <button title="Prev" class="swiper-custom-prev d-none d-sm-inline-block">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><g class="nc-icon-wrapper" fill="#ec2420"><polygon fill="#ec2420" points="11.1,15.7 3.4,8 11.1,0.3 12.6,1.7 6.3,8 12.6,14.3 "></polygon></g></svg>
                </button>

                <!-- Swiper -->
                <nav class="swiper-container swiper-container-videos slider-produtos-destaque">
                  <div class="swiper-wrapper" style="list-style-type: none; padding: 0px;">
                    <li class="swiper-slide">
                      <a class="" href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/Vm0JdAdBuIw?autoplay=1&rel=0&showinfo=0&autohide=1'">
                      <span class="vid-thumb">
                 <img src="https://img.youtube.com/vi/Vm0JdAdBuIw/mqdefault.jpg" />
                    </span>
                             
                            </a>
                    </li>

                    <li class="swiper-slide">
                         <a class="" href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/e9jyzhJ5EnU?autoplay=1&rel=0&showinfo=0&autohide=1'">
                         <span class="vid-thumb">
                    <img src="https://img.youtube.com/vi/e9jyzhJ5EnU/mqdefault.jpg" />
                       </span>
                               </a>
                       </li>
              

                  </div>
                 
                
                </nav>
               
              </section>
          
        </div>

        <div class="container">
            
                 <div class="col-12">
                 <?php $galcount = 0; foreach($gallery as $key => $val): ?>

                     <div class="gallery <?php if ($val === end($gallery)) echo 'gen-padding-bottom'; ?>">
                         <h2>Photographs</h2>
                    <div id="photo-gallery">
                         <div>
                             <?php $count = 0; foreach($val as $image) :?>
                                 <div class="item" data-src="<?php echo $image['photo']; ?>" >
                                     <img src="<?php echo $image['thumb']; ?>"/>
                                     <i class="icon icon-search"></i>
                                 </div>
                                
                             <?php $count++; endforeach;?>

                         </div>

                     </div>
                    <?php $galcount++; endforeach; ?>
                
                 </div>
             </div>
            <p class="text-center">London 2018 Cast. Photography by Specular</p>
         </div>
      
  

     </section>
    
<?php require_once('inc/footer.php'); ?>