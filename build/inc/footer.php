			<footer class="main-footer">
				<div class="container">
					
					<div class="row">
						<div class="col-12 text-center">
							<p>
								<a href="<?php echo $root; ?>terms-and-conditions">Terms &amp; Conditions</a><span class="mx-2"> | </span> 
								<a href="<?php echo $root; ?>cookies-policy">Cookies & Privacy policy</a><br/>
							
                            </p>
                            <?php if ($page !== "index.php"): ?>
                            <div class="row d-flex">
                                <div class="col">
                                    <div class="social">
                                        <a href="<?php echo $facebook_link;?>" target="_blank"><span class="icon icon-facebook"></span></a>
                                        <a href="<?php echo $twitter_link;?>" target="_blank"><span class="icon icon-twitter"></span></a>
                                        <a href="<?php echo $instagram_link;?>" target="_blank"><span class="icon icon-instagram-1"></span></a>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
							<p>
                                &copy; 2019 Bat Out Of Hell | All rights reserved<br>
                                Website by <a href="//dewynters.com" target="_blank">Dewynters</a>
							</p>
						
						</div>
					
					</div>
				</div>
			</footer>

		</div>
	</div>

	<script src="<?php echo $root ;?>assets/js/main.min.js?v=1.0" id="main-js"></script>
	<link rel="stylesheet" href="//fast.fonts.net/t/1.css?apiType=css&projectid=f3a283f6-a0d1-4db7-b8e4-3e1c8bb7dcc0">
  </body>
</html>