@extends('layouts.master')

{{ HTML::style('css/page_coming_soon_v4.css'); }}


@section('content')

	<div class="container-fluid bg-top content-md">
		<div class="cover-bg-top"></div>
		<div class="container">
			<div class="coming-soon-v4-top text-center">
				<img src="img/SSTransparentLogo.png" class="logoStyle logoStyleResponse" alt="logo">
				<div class="margin-bottom-20 cSFont">Coming Soon</div>
				<p>  Sexton Staffing is a burgeoning company built on connecting highly qualified candidates to prominent estates in Texas. We are an elite employment agency that places housekeepers, cooks/chefs, nannies, home healthcare providers, personal assistants, and estate managers. We take great pride in hand selecting highly qualified applicants for each position. Our success is not only measured by the happiness of our clients, but also our candidates.
</p>
				<!-- Coming Soon Plugin -->
				<!-- <div class="coming-soon-plugin">
					<div id="defaultCountdown"></div>
				</div> -->
				<!-- End Coming Soon Plugin -->
			</div>
		</div><!--/container-->
	</div><!--/container-fluid-->
	<!-- End Top -->

	<!-- Middle -->
	<div class="container-fluid content-md no-padding-bottom marginAdjust">
		<div class="container">
			<!-- Coming Soon Content -->
			<div class="coming-soon-v4-middle text-center">
				<div class="heading">
					<h2 class="wow pulse title-v2 title-center marginAdjustHeader2">About Us</h2>
				</div>
				<!-- Service Box -->
				<div class="service-box row text-center margin-bottom-60">
					<div class="col-md-4 md-margin-bottom-50">
						<img class="leftPicture wow bounceInLeft" src="/img/image-coming-soon.png">
						<h2 class="wow pulse title-v3-md margin-bottom-15">Genna Sexton</h2>
						<p class="wow bounceInLeft text-left"> Genna grew up in northern California's beautiful wine country where she learned the art of wine and the importance of family. Her early introduction into human services and working at her family business gave her a "hit the ground running" attitude, gaining respect and admiration among those who have corroborated with her. Working for many years with her family gave Genna the entrepreneurial spirit and hands on management style we see today.</p><br>

						<div id="gennaBio" class="collapse">

							<p class="text-left">  Genna relocated to South Texas and quickly established the largest youth program in the state of Texas that aided underprivileged teens. She headed an after school program that offered hundreds of teens homework assistance, art and dance classes, community volunteer work, and educational trips. She also spearheaded a monthly project where teens could display their artwork during their town's monthly "Art Walk" to raise funds for the local school's dwindling arts program.</p><br>                                                                       
							<p class="text-left">  Genna's years of organizational planning, fundraising, budgeting, and large scale event planning culminated with her venture into estate management. She is proud of her services to two Fortune 500 families amongst a vetted roster of high profile clients. Genna's ongoing education and professional development has given her a unique combination of talents that sets her apart from others in her field: certified sommelier, wine cellar management, art and antique knowledge and preservation, event organizer, project lead in the renovation of estates, project lead in interior design, and lead in landscape architecture. Genna also worked with contractors to retrofit an existing floor into a state of the art extensive wine cellar cataloging wines from around the world.</p>
						</div>

						<button type="button" class="btn btn-group btn-group-xs btn-info roundCorners glyphicon glyphicon-menu-down" data-toggle="collapse" data-target="#gennaBio"></button>
  						
					</div>

					<div class="col-md-4 flat-service md-margin-bottom-50">
						<img class="wow bounceIn middlePicture" src="/img/globe2.png">
						<!-- <h2 class="wow pulse title-v3-md margin-bottom-15">Services</h2> -->
						<ul class="wow pulse text-center bold18"> Staffing Services
  							<div class="text-left bold14">
								<li>Butlers</li>
								<li>Cooks/Chefs</li>
								<li>Estate Management</li>
								<li>Gardeners</li>
								<li>Home Health Aid</li>
								<li>Housekeepers</li>
								<li>Nanny/Au Pair</li>
								<li>Personal Assistant</li>
								<li>Event Staffing (Bartenders, Caterers, Waitstaff)</li>	
							</div>
						</ul>

						<div id="services" class="collapse">

							<ul class="text-center bold18"> Vendor Services
								<div class="text-left bold14">
									<li>Carpet Cleaners</li>
									<li>Contractors</li>
									<li>Electricians</li>
									<li>Handymen</li>
									<li>HVAC Services</li>
									<li>Landscapers</li>
									<li>Landscape Architects</li>
									<li>Pool Cleaners</li>
									<li>Painters</li>
									<li>Window/Gutter Cleaners</li>
								</div>
							</ul>
							<ul class="text-center bold18"> Concierge Services
								<div class="text-left bold14">
									<li>Antique Repair/Care</li>
									<li>Babysitters</li>
									<li>Event planners</li>
									<li>Florists</li>
									<li>House sitting</li>
									<li>Interior Designers</li>
									<li>Movers</li>
									<li>Pet Sitting/Training/Grooming</li>
									<li>Photographers</li>
									<li>Sommelier Services</li>
									<li>Tutors</li>
									<li>Wedding Coordinators</li>
									<li>Wine Cellar Management</li>
								</div>
							</ul>
						</div>

						<button type="button" class="btn btn-group btn-group-xs btn-info roundCorners glyphicon glyphicon-menu-down" data-toggle="collapse" data-target="#services"></button>
  						
  						
					</div>
					
					<div class="col-md-4 flat-service">
						<img class="wow bounceInRight rightPicture" src="/img/image-coming-soon.png">
						<h2 class="wow pulse title-v3-md margin-bottom-15">Laura Sexton</h2>
						<p class="wow bounceInRight text-left">  Laura has over 40 years of experience working in many facets of healthcare including: home healthcare, hospitals, private practice, and many administrative positions. From her early start in high school volunteering as a "candy striper" to the Executive Director for a successful non-profit organization, Laura's professional attitude towards quality healthcare has left a lasting legacy.
						</p>

						<div id="lauraBio" class="collapse">

  							<p class="text-left">  Before settling in the Rio Grande Valley of Texas, she founded a successful home care agency, operating for over 20 years in Sonoma County, California. While living in the Rio Grande Valley she managed many healthcare facilities and ran a successful medical billing company from her home office.</p><br>

							<p class="text-left">  One of her greatest accomplishments was moving from board member of a large service provider for persons with disabilities to the Executive Director. During her tenure in this organization she expanded services into two more communities, with fifty plus direct employees as well as increasing their operating budget to over one million dollars annually.</p><br>

							<p class="margin-bottom-15 text-left">  Laura is extremely proud to be partnering with her daughter in providing unsurpassed home healthcare services to the greater Austin area.</p>

						</div>

						<button type="button" class="btn btn-group btn-group-xs btn-info roundCorners botMargin glyphicon glyphicon-menu-down" data-toggle="collapse" data-target="#lauraBio"></button>
  						
					</div>
				</div>
				<!-- End Service Box -->
				<!-- <img class="img-responsive center-block wow animated fadeInUp" src="img/SSTransparentLogo.png" alt=""> -->
			</div>
		</div><!--/container-->
	</div><!--/container-fluid-->
	<!-- End Middle -->

	<!-- Bottom -->
	<div class="container-fluid bg-bottom content-md sticky-footer text-center">
		<div class="cover-bg-bottom"></div>
		<div class="container">
			<!-- Coming Soon Content -->
			<div class="coming-soon-v4-bottom text-center">
				<div class="heading white">
					<h2 class="wow pulse title-v2 title-center marginAdjustHeader2">Get in touch</h2>
				</div>
				<ul class="list-unstyled social-links margin-bottom-20 marginRightAdjust">
					<li class=" wow pulse contactStyle"><a href="tel:1-512-574-7045"><i class="icon-custom icon rounded icon-bg-light fa fa-phone"></i></a>1.512.574.7045 </li>
				</ul>

				<div class="wow fadeInDown cSStyle">Interested in joining the team?</div>
				<form action="#">
					<div class="col-md-8">
						<span class="input-group-btn">
							<a href="mailto:sextongenna@gmail.com?Subject='Resume'"><button class="btn-u btn-u-dark-blue btnResponse" type="button">Email Your Resumé</button></a>
						</span>
					</div><!-- /input-group -->
				</form>

				<!--=== Subfooter ===-->
				<div class="subfooter">
					<div class="container ">
						<div class="row">
							<div class="col-sm-12">
								<ul class="list-unstyled list-inline social-links margin-bottom-20 marginRightAdjust">
									<li><a href="https://www.facebook.com/sextonstaffing" target="_blank"><i class="icon-custom icon rounded icon-bg-light fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com/SextonStaffing" target="_blank"><i class="icon-custom icon rounded icon-bg-light fa fa-twitter"></i></a></li>
									<li><a href="https://www.instagram.com/SextonStaffing" target="_blank"><i class="icon-custom icon rounded icon-bg-light fa fa-instagram"></i></li>
								</ul>
							</div>

							<div class="col-sm-12">
								<p class="copyright"> 2016 &copy; ALL Rights Reserved. Sexton Staffing. </p>
							</div>
						</div>
					</div>
				</div>
				<!--=== End Subfooter ===-->
			</div>
		</div><!--/container-->
	</div><!--/container-fluid-->

	

@stop

@section('scripts')

	<script src="text/javascript"></script>
@stop