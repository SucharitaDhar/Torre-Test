<?php
	include 'inc/head-inc.php';
?>
	<!--HEADER-->
	<header>
		<div class='container-fluid'>
			<div class='jumbotron text-center'>
				<h1>Jobs World</h1>
				<?php
					if(isset($_SESSION['username'])){
						echo '<p>Welcome back, '.$_SESSION['username'].'!</p>';
					}
					else{
						echo '<p>Hire the best talent from around the world</p>';
					}
				?>
			</div>
		</div>
	</header>
	<!--MAIN-->
	<main class='container'>
		<div class='row'>
			<div class='col-md-3'><!--SECONDARY NAV MENU - COULD ANOTHER TAG BE USED INSTEAD OF DIV HERE? -->
				<p class='lead'><strong>Top Freelancers for you</strong></p>
				
			</div>
			<br>
			<br>

		
				<div class='row'>
				 <div class='col-sm-4 col-lg-4 col-md-4'>
						<div class='thumbnail'>
							<img src='http://placehold.it/320x150' alt=''>
							<div class='caption'>
								<h4 class='pull-right'>$25+/hourly</h4>
								<h4><a href='inc/productimages.php'>John Nam</a>
								</h4>
								<p>Former Business Franchise Partner</p>
							</div>
							<div class='ratings'>
								<p class='pull-right'>15 reviews</p>
								<p>
									<span class='glyphicon glyphicon-star'></span>
									<span class='glyphicon glyphicon-star'></span>
									<span class='glyphicon glyphicon-star'></span>
									<span class='glyphicon glyphicon-star'></span>
									<span class='glyphicon glyphicon-star'></span>
								</p>
							</div>
						</div>
					</div>

					<div class='col-sm-4 col-lg-4 col-md-4'>
						<div class='thumbnail'>
							<img src='http://placehold.it/320x150' alt=''>
							<div class='caption'>
								<h4 class='pull-right'>$800+/monthly</h4>
								<h4><a href='inc/productimages.php'>Henry Belmonte128</a>
								</h4>
								<p>Front End Developer, SEO/SEM Analyst</p>
							</div>
							<div class='ratings'>
								<p class='pull-right'>12 reviews</p>
								<p>
									<span class='glyphicon glyphicon-star'></span>
									<span class='glyphicon glyphicon-star'></span>
									<span class='glyphicon glyphicon-star'></span>
									<span class='glyphicon glyphicon-star'></span>
									<span class='glyphicon glyphicon-star-empty'></span>
								</p>
							</div>
						</div>
					</div>

					<div class='col-sm-4 col-lg-4 col-md-4'>
						<div class='thumbnail'>


							<img src='http://placehold.it/320x150' alt=''>
							<div class='caption'>
								<h4 class='pull-right'>$70+/hourly</h4>
								<h4><a href='inc/productimages.php'>Nicolaz David Perez Mesa</a>
								</h4>
								<p>Software Engineer and Education Lead</p>
							</div>
							<div class='ratings'>
								<p class='pull-right'>31 reviews</p>
								<p>
									<span class='glyphicon glyphicon-star'></span>
									<span class='glyphicon glyphicon-star'></span>
									<span class='glyphicon glyphicon-star'></span>
									<span class='glyphicon glyphicon-star'></span>
									<span class='glyphicon glyphicon-star-empty'></span>
								</p>
							</div>
						</div>
					</div>

					<div class='col-sm-4 col-lg-4 col-md-4'>
						<div class='thumbnail'>
							<img src='http://placehold.it/320x150' alt=''>
							<div class='caption'>
								<h4 class='pull-right'>$60+/hourly</h4>
								<h4><a href='inc/productimages.php'>Jorge Andres</a>
								</h4>
								<p>Systems Engineer</p>
							</div>
							<div class='ratings'>
								<p class='pull-right'>6 reviews</p>
								<p>
									<span class='glyphicon glyphicon-star'></span>
									<span class='glyphicon glyphicon-star'></span>
									<span class='glyphicon glyphicon-star'></span>
									<span class='glyphicon glyphicon-star-empty'></span>
									<span class='glyphicon glyphicon-star-empty'></span>
								</p>
							</div>
						</div>
					</div>

					<div class='col-sm-4 col-lg-4 col-md-4'>
						<div class='thumbnail'>
							<img src='http://placehold.it/320x150' alt=''>
							<div class='caption'>
								<h4 class='pull-right'>$4k+/monthly</h4>
								<h4><a href='inc/productimages.php'>David Jara</a>
								</h4>
								<p>Software Developer</p>
							</div>
							<div class='ratings'>
								<p class='pull-right'>18 reviews</p>
								<p>
									<span class='glyphicon glyphicon-star'></span>
									<span class='glyphicon glyphicon-star'></span>
									<span class='glyphicon glyphicon-star'></span>
									<span class='glyphicon glyphicon-star'></span>
									<span class='glyphicon glyphicon-star-empty'></span>
								</p>
							</div>
						</div>
					</div>

				
					<div class='text-center'>
						<nav aria-label='Page navigation'>
							<ul class='pagination'>
								<li>
									<a href='#' aria-label='Previous'>
										<span aria-hidden='true'>&laquo;</span>
									</a>
								</li>
								<li><a href='#'>1</a></li>
								<li><a href='#'>2</a></li>
								<li><a href='#'>3</a></li>
								<li><a href='#'>4</a></li>
								<li><a href='#'>5</a></li>
								<li>
									<a href='#' aria-label='Next'>
										<span aria-hidden='true'>&raquo;</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>	
	</main>
	<!--FOOTER-->
	<?php
		include 'inc/foot.inc.php';
	?>