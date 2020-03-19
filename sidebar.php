<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Medelec
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

	<div class="col-lg-3 test">
		<!--testimonials-->

		<div id="myCarousel3" class="carousel slide" data-ride="carousel" data-interval="false">
			<div class="container" id="test">
				<div class="container position-relative" id="indi-no-1">
					<ol class="carousel-indicators" id="indi-no-2">
						<li data-target="myCarousel3" data-slide-to="0" class="active"></li>
						<li data-target="myCarousel3" data-slide-to="1"></li>
						<li data-target="myCarousel3" data-slide-to="2"></li>
					</ol>
				</div>
			</div>
			<!--controls-->
			<nav class="navbar">
				<div class="row">
					<div class="col-md-8">
						<p style="size:16pt;">Testimonials</p>
					</div>
					<div class="col-md-4">
						<ul style="float:right;">
							<li style="list-style-type:none;">
								<a class="carousel-control-prev " id="test-prev" href="#myCarousel3" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" id="test-next" href="#myCarousel3" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="carousel-inner" style="height:430px;display:inline-flex;">
				<div class="carousel-item active">
					<div class="card" style="width:202;">
						<div class="card-body" alt="first slide">
							<p>"Jason has slowly shown just how talented the really is with this template highly enough in words. It`s just absolutely fantastic!"
								<br>
								<br>
								<span style="font-size:15pt;">Joe Brigs</span>
								<br>
								<span style="color:red;">Company Name</span>
							</p>

						</div>
					</div>
				</div>
				<div class="carousel-item">

					<div class="card" style="width:202;">
						<div class="card-body" alt="second slide">
							<p>"Jason has slowly shown just how talented the really is with this template highly enough in words. It`s just absolutely fantastic!"
								<br>
								<br>
								<span style="font-size:15pt;">Joe Brigs 2</span>
								<br>
								<span style="color:red;">Company Name</span>
							</p>

						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="card" style="width:202;">
						<div class="card-body" alt="third slide">
							<p>"Jason has slowly shown just how talented the really is with this template highly enough in words. It`s just absolutely fantastic!"
								<br>
								<br>
								<span style="font-size:15pt;">Joe Brigs 3</span>
								<br>
								<span style="color:red;">Company Name</span>
							</p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</aside><!-- #secondary -->
