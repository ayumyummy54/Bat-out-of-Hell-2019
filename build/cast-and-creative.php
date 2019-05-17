<?php 
	require_once('inc/data.php');
	$title = "Cast and Creative | Bat Out of Hell";
	$body_id = "cast-creatives";

	require_once('inc/header.php');
?>
	
	<section class="general-section--with-bg general-section--border-top">
		
		<div class="container contain">
			<div class="row">
				
				<div class="col-sm-offset-1 col-sm-10">
					<!-- <div class="col-sm-offset-2 col-sm-8 col-md-6 col-md-offset-3">
						<header class="gen-padding-top">
							<h2 class="tab-block">Cast</h2>
						</header>
					</div> -->
					<ul class="nav nav-tabs nav-tabs--custom" role="tablist">
						<li role="presentation" class="active"><a href="#cast" aria-controls="cast" role="tab" data-toggle="tab">Cast</a></li>
						<li role="presentation"><a href="#creative" aria-controls="creative" role="tab" data-toggle="tab">Creative</a></li>
					</ul>	

					<!-- Tab panes -->
					 <div class="tab-content">
						<div role="tabpanel" class="tab-pane active gen-padding-top gen-padding-bottom" id="cast">
	
							<div class="custom_collapse">
								<?php $count = 0; foreach ($cast as $c): ?>

								<div class="custom_collapse_item">
									<a class="custom_collapse_button trigger">
										<span class="sr-only">Toggle bio</span>
										<img src="<?php if ($c['castPhoto'] != ""): echo $c['castPhoto']; else: echo "http://placehold.it/200x200?text=No image"; endif;?>" alt="<?php echo $c['castName']; ?>">
										<div class="custom_collapse_name-container">
											<h3><?php echo $c['castName']; ?></h3>
											<h4><?php echo $c['castRole']; ?></h4>
										</div>
									</a>
									<div class="custom_collapse_content">
										<?php echo $c['castBio']?>
										<p class="text-center custom_collapse_close"><a href="#">x Close </a></p>
										<hr>
									</div>
								</div>							


								<?php $count++; endforeach; ?>
							</div>
							
						</div>
						<div role="tabpanel" class="tab-pane" id="creative">
							<div class="panel-group panel-group--custom" id="accordion" role="tablist" aria-multiselectable="true">
									
								<?php $count = 0; foreach ($creatives as $c): ?>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="heading<?php echo $count; ?>">
											<h4 class="panel-title">
												<?php //if ($count !== 0) echo "collapsed"; ?><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $count; ?>" aria-expanded="true" aria-controls="collapse<?php echo $count; ?>">
													<?php echo $c['castName']; ?> <br/><span class="red"><?php echo $c['castRole']; ?></span>
												</a>
											</h4>
										</div>
										<div id="collapse<?php echo $count; ?>" class="panel-collapse collapse <?php if ($count == 0) //echo "in"; ?>" role="tabpanel" aria-labelledby="heading<?php echo $count; ?>">
											<div class="panel-body">
												<?php echo $c['castBio']; ?>	
												<p class="text-center close">x Close</p>					
											</div>
												
										</div>
									</div>
								<?php $count++; endforeach; ?>

							</div>
						</div>
					</div> 
				</div>

			</div>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="row">
						<div class="col-sm-6">
							<a href="<?php echo $root; ?>about" class="btn full-width gen-margin-bottom">About the show</a>
						</div>
						<div class="col-sm-6">
							<a href="<?php echo $booking_link_london; ?>" class="btn full-width gen-margin-bottom">Get your tickets</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

<?php require_once('inc/footer.php'); ?>