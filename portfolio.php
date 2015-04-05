<?php include_once('includes/header.php'); ?>

<!-- ==============================================
	PORTFOLIO
=============================================== -->	
<section id="portfolio" class="gray-bg padding-top-bottom">
	<div class="container">
		<header class="section-header text-center">
			<h1 class="scrollimation scale-in in">My Works</h1>
			<p>I've worked with many serious brands in the Design and Code industry.<br>See a collection of works I am proud of!</p>
		</header>
				
		<!--==== Portfolio Filters ====-->
		<div id="filter-works">
			<ul>
				<li class="scrollimation fade-right d1 in active">
					<a href="#" data-filter="*">All</a>
				</li>
				<li class="scrollimation fade-right in">
					<a href="#" data-filter=".mock-up">Mock-Ups</a>
				</li>
				<li class="scrollimation fade-left in">
					<a href="#" data-filter=".icons">Icons</a>
				</li>
				<li class="scrollimation fade-left d1 in">
					<a href="#" data-filter=".ui-kits">UI Kits</a>
				</li>
			</ul>
		</div><!--End portfolio filters -->			
	</div><!--End portfolio header -->
			
	<div class="container masonry-wrapper scrollimation fade-in in">
		<div class="masonry" style="visibility: visible; position: relative; height: 735px; width: 1010px;" id="projects-container">
				
			<!-- ==============================================
				SINGLE PROJECT ITEM
			=============================================== -->	
			<article style="position: absolute; top: 0px; left: 0px;" class="project-item mock-up masonry-brick">
				<img class="img-responsive project-image" src="assets/projects/dribbble_1.jpg" alt=""><!--Project thumb -->
				<div class="hover-mask">
					<h2 class="project-title">Flat iDevices</h2><!--Project Title -->
					<p>Mock-Up</p><!--Project Subtitle -->
				</div>
						
				<!--==== Project Preview HTML ====-->
				<div class="sr-only project-description" data-category="Mock-Up" data-date="February 2014" data-client="Google Inc." data-link="www.google.com,http://www.google.com" data-descr="This is a place for a quick description of the project. Use it or not to say a little things about the project." data-images="assets/projects/preview_1_1.jpg,assets/projects/preview_1_2.jpg,assets/projects/preview_1_3.jpg">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
						
					<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
					<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
					<p class="text-right"><a class="btn btn-meflat icon-right" href="#external-link">Visit Website<i class="fa fa-arrow-right"></i></a></p>
				</div>						
			</article>
			
			<!-- ==============================================
				END PROJECT ITEM
			=============================================== -->						
			<article style="position: absolute; top: 0px; left: 345px;" class="project-item icons masonry-brick">
				<img class="img-responsive project-image" src="assets/projects/dribbble_2.jpg" alt=""><!--Project thumb -->
				<div class="hover-mask">
					<h2 class="project-title">Social Icons</h2><!--Project Title -->
					<p>Icons</p><!--Project Subtitle -->
				</div>
						
				<!--==== Project Preview HTML ====-->
				<div class="sr-only project-description" data-category="Icons" data-date="January 2014" data-client="Pixel Industry" data-link="www.example.com,http://www.google.com" data-descr="This is a place for a quick description of the project. Use it or not to say a little things about the project." data-images="assets/projects/preview_2.jpg">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
							
					<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
					<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
					<p class="text-right"><a class="btn btn-meflat icon-right" href="#external-link">Visit Website<i class="fa fa-arrow-right"></i></a></p>
				</div>						
			</article><!--End Project Item -->

			<article style="position: absolute; top: 0px; left: 690px;" class="project-item mock-up masonry-brick">
				<img class="img-responsive project-image" src="assets/projects/dribbble_3.jpg" alt=""><!--Project thumb -->
				<div class="hover-mask">
					<h2 class="project-title">Browsers Mock-up</h2><!--Project Title -->
					<p>Mock-Up</p><!--Project Subtitle -->
				</div>
						
				<!--==== Project Preview HTML ====-->
				<div class="sr-only project-description" data-category="Mock-Up" data-client="Myself" data-descr="All of the Project Attributes above this text are optional. This project doesn't include a date or link attribute." data-images="assets/projects/preview_3_1.jpg,assets/projects/preview_3_2.jpg,assets/projects/preview_3_3.jpg">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
					
					<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
					<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
					<p class="text-right"><a class="btn btn-meflat icon-left" href="#external-link"><i class="fa fa-dribbble"></i>View on Dribble</a></p>
				</div>						
			</article><!--End Project Item -->

			<article style="position: absolute; top: 245px; left: 0px;" class="project-item ui-kits masonry-brick">
				<img class="img-responsive project-image" src="assets/projects/blog-ui-sm_1x.jpg" alt=""><!--Project thumb -->
				<div class="hover-mask">
					<h2 class="project-title">Blog UI-Kit</h2><!--Project Title -->
					<p>UI-Kit</p><!--Project Subtitle -->
				</div>
						
				<!--==== Project Preview HTML ====-->
				<div class="sr-only project-description" data-category="UI-Kits" data-date="November 2013" data-link="www.example.com,http://www.google.com" data-descr="This is a place for a quick description of the project. Use it or not to say a little things about the project." data-images="assets/projects/blog-ui-full-1.jpg,assets/projects/blog-ui-full-2.jpg,assets/projects/blog-ui-full-3.jpg">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
							
					<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
					<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
				</div>						
			</article><!--End Project Item -->

			<article style="position: absolute; top: 245px; left: 345px;" class="project-item mock-up masonry-brick">
				<img class="img-responsive project-image" src="assets/projects/dribbble_5.jpg" alt=""><!--Project thumb -->
				<div class="hover-mask">
					<h2 class="project-title">iPhone Mock-ups</h2><!--Project Title -->
					<p>Mock-Up</p><!--Project Subtitle -->
				</div>
						
				<!--==== Project Preview HTML ====-->
				<div class="sr-only project-description" data-descr="This project doesn't include attributes in the sidebar. Just a small description is enough." data-images="assets/projects/preview_5_1.jpg,assets/projects/preview_5_2.jpg">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
						
					<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
					<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
					<p class="text-right"><a class="btn btn-meflat icon-left" href="#external-link"><i class="fa fa-dribbble"></i>View on Dribble</a></p>
				</div>						
			</article><!--End Project Item -->

			<article style="position: absolute; top: 245px; left: 690px;" class="project-item icons masonry-brick">
				<img class="img-responsive project-image" src="assets/projects/dribbble_6.jpg" alt=""><!--Project thumb -->
				<div class="hover-mask">
					<h2 class="project-title">Line Icons</h2><!--Project Title -->
					<p>Icons</p><!--Project Subtitle -->
				</div>
						
				<!--==== Project Preview HTML ====-->
				<div class="sr-only project-description" data-category="Icons" data-client="Google Inc." data-link="www.google.com,http://www.google.com" data-descr="All of the Project Attributes above this text are optional. This project doesn't include a date attribute." data-images="assets/projects/preview_6_1.jpg,assets/projects/preview_6_2.jpg">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
							
					<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
					<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
					<p class="text-right"><a class="btn btn-meflat icon-right" href="#external-link">Visit Website<i class="fa fa-arrow-right"></i></a></p>
				</div>						
			</article><!--End Project Item -->
					
			<article style="position: absolute; top: 490px; left: 0px;" class="project-item ui-kits masonry-brick">
				<img class="img-responsive project-image" src="assets/projects/flat-ui-sm_1x.jpg" alt=""><!--Project thumb -->
				<div class="hover-mask">
					<h2 class="project-title">Flat UI-Kit</h2><!--Project Title -->
					<p>UI-Kit</p><!--Project Subtitle -->
				</div>
						
				<!--==== Project Preview HTML ====-->
				<div class="sr-only project-description" data-category="UI-Kits" data-date="August 2013" data-link="www.example.com,http://www.google.com" data-descr="All of the Project Attributes above this text are optional. This project doesn't include a client attribute." data-images="assets/projects/flat-ui-full-1.jpg,assets/projects/flat-ui-full-2.jpg">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
						
					<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
					<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
				</div>						
			</article><!--End Project Item -->

			<article style="position: absolute; top: 490px; left: 345px;" class="project-item ui-kits icons masonry-brick">
				<img class="img-responsive project-image" src="assets/projects/dribbble_8.jpg" alt=""><!--Project thumb -->
				<div class="hover-mask">
					<h2 class="project-title">Infographics</h2><!--Project Title -->
					<p>UI-Kit, Icons</p><!--Project Subtitle -->
				</div>
					
				<!--==== Project Preview HTML ====-->
				<div class="sr-only project-description" data-category="UI-Kits" data-date="July 2013" data-client="Company Inc." data-link="www.example.com,http://www.google.com" data-descr="This is a place for a quick description of the project. Use it or not to say a little things about the project." data-images="assets/projects/preview_8_1.jpg,assets/projects/preview_8_2.jpg">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
							
					<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
					<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
					<p class="text-right"><a class="btn btn-meflat icon-left" href="#external-link"><i class="fa fa-dribbble"></i>View on Dribble</a></p>
				</div>						
			</article><!--End Project Item -->

			<article style="position: absolute; top: 490px; left: 690px;" class="project-item mock-up icons masonry-brick">
				<img class="img-responsive project-image" src="assets/projects/dribbble_9.jpg" alt=""><!--Project thumb -->
				<div class="hover-mask">
					<h2 class="project-title">iDevices Outline</h2><!--Project Title -->
					<p>Mock-Up, Icons</p><!--Project Subtitle -->
				</div>
						
				<!--==== Project Preview HTML ====-->
				<div class="sr-only project-description" data-category="Mock-Up" data-client="Myself" data-link="www.example.com,http://www.google.com" data-descr="All of the Project Attributes above this text are optional. This project doesn't include a date attribute." data-images="assets/projects/preview_9_1.jpg,assets/projects/preview_9_2.jpg,assets/projects/preview_9_3.jpg">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>
							
					<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
					<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
					<p class="text-right"><a class="btn btn-meflat icon-right" href="#external-link">Visit Website<i class="fa fa-arrow-right"></i></a></p>
				</div>						
			</article><!--End Project Item -->	
		</div><!-- End projects --> 				
	</div><!-- End container --> 
			
	<!-- ==============================================
		PROJECT PREVIEW MODAL (Do not alter this markup)
	=============================================== -->	
	<div id="project-modal" class="modal fade" data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="container">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h1 id="hdr-title" class="text-center"></h1>
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="image-wrapper">
									<img class="img-responsive" src="assets/chrome.png" alt="">
									<div class="loader"></div>
									<div class="screen"></div>
								</div>
							</div>
						</div>
					</div>							
				</div>
						
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div id="project-sidebar" class="col-md-3">
								<h2 id="sdbr-title"></h2>
								<p id="sdbr-category"></p>
								<p id="sdbr-date"></p>
								<p id="sdbr-client"></p>
								<p id="sdbr-link"><a href="#link" target="_blank"></a></p>
								<p id="sdbr-descr"></p>
							</div>
							<div id="project-content" class="col-md-8 col-md-offset-1"></div>
						</div>
					</div>
				</div><!-- End modal-body -->						
			</div><!-- End modal-content -->					
		</div><!-- End modal-dialog -->				
	</div><!-- End modal -->			
</section>

<?php include_once('includes/footer.php'); ?>