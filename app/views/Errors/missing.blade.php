@extends ('layouts.master')

{{ HTML::style('css/page_404_error.css'); }}
	
@section ('content')
	<!--=== Error V4 ===-->
	<div class="container-fluid bg-top content-md">
		<div class="cover-bg-top"></div>
			<div class="content valign__middle">
				<!--Error Block-->
				<footer class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div>
							<a href="#"><img src="img/SSTransparentLogo.png" class="marginAdjustErrorLogo" alt="logo"></a>
							<div class="errorStyle">404</div>
							<div class="errorStyle2">Sorry, the page you were looking for could not be found!</div>
							
							<div class="row">
								<div class="col-md-6 col-md-offset-3">
									<a class="btn btn-group btn-primary btn-lg roundCorners btnMargin" href="http://www.sextonstaffing.com"> Go Back to Main Page</a>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="col-sm-12">
					<p class="copyright csStyleBottom text-center"> 2016 &copy; ALL Rights Reserved. Sexton Staffing. </p>
				</div>				
			</div>
		</div>
	</div>

@stop