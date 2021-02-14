@extends('layouts.app')
@php
    $title = 'Home'
@endphp

@section('content')
	
	<!--Main Image - large news item (below the navigation)-->
	<section class="main-image-section position-relative">
		<div class="position-relative">
		<picture class="img-responsive div-fill-min div-fill-max">
			<source srcset="/asset-resources/page-assets/images/afrfood-640.jpg" media="(max-width: 668px)">
			<source srcset="/asset-resources/page-assets/images/afrfood-1280.jpg">
			<img class="img-responsive div-fill-min div-fill-max" src="/asset-resources/page-assets/images/afrfood-1280.jpg" alt="African food">
		</picture>
		<div class="carousel-caption text-left caption-text">
			<p>29.31.2017</p>
			<h1>HEALTHY FOOD<br>ON A BUDGET</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Sed accumsan euismod sem. Phasellus tellus dui, tincidunt </p>
			<a href="csoon.html"><button class="btn btn-light">Read More</button></a>
		</div>
		</div>
	</section>
	
	<!--Blog post items CSS Grid-->
	<section class="blog-grid"> 
		<div class="blog-post-grid"> 
			
			@if (count($posts) > 1)
				@foreach ($posts as $post)
					<div class="blog-post">  
						<img src="/asset-resources/page-assets/images/blogpost1.jpg" class="img-responsive" alt="Blog post"> 
						<div class="carousel-caption blog-title text-left no-padding">
							<h6 class="small">BLOG</h6>
						</div>
						<div class="carousel-caption blog-icons">
							<a href="#">
								<img class="blog-icon" src="/asset-resources/page-assets/images/facebook.png">
							</a>
							<a href="#">
								<img class="blog-icon" src="/asset-resources/page-assets/images/twitter.png">
							</a>
							<a href="csoon.html">
								<img class="blog-icon" src="/asset-resources/page-assets/images/heart.png">
							</a>
						</div>
						<a href="/posts/{{$post->id}}">
							<div class=" carousel-caption text-left blog-text">
								<p>{{$post->created_at}}</p>
								<h3><small>{{$post->title}}</small></h3>
								<p>{{$post->body}}</p>
							</div>
						</a>
					</div>
				@endforeach
			@else
				<p>No Posts Found</p>
			@endif
			<!--
			<div class="blog-post">  
				<img src="/asset-resources/page-assets/images/blogpost1.jpg" class="img-responsive" alt="Blog post"> 
				<div class="carousel-caption blog-title text-left no-padding">
					<h6 class="small">BLOG</h6>
				</div>
				<div class="carousel-caption blog-icons">
					<a href="#">
						<img class="blog-icon" src="/asset-resources/page-assets/images/facebook.png">
					</a>
					<a href="#">
						<img class="blog-icon" src="/asset-resources/page-assets/images/twitter.png">
					</a>
					<a href="csoon.html">
						<img class="blog-icon" src="/asset-resources/page-assets/images/heart.png">
					</a>
				</div>
				<a href="csoon.html">
					<div class=" carousel-caption text-left blog-text">
						<p>29.11.2017</p>
						<h3><small>FRUIT SALAD</small>
						<br>AND MARKETS</h3>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
				</a>
			</div>

			<div class="blog-post"> 
				<img src="/asset-resources/page-assets/images/blogpost2.jpg" class="img-responsive" alt="Blog post">
				<div class="carousel-caption blog-title text-left no-padding">
					<h6 class="small">BLOG</h6>
				</div>
				<div class="carousel-caption blog-icons">
					<a href="#">
						<img class="blog-icon" src="/asset-resources/page-assets/images/facebook.png">
					</a>
					<a href="#">
						<img class="blog-icon" src="/asset-resources/page-assets/images/twitter.png">
					</a>
					<a href="csoon.html">
						<img class="blog-icon" src="/asset-resources/page-assets/images/heart.png">
					</a>
				</div>
				<a href="csoon.html">
					<div class=" carousel-caption text-left blog-text">
						<p>29.11.2017</p>
						<h3><small>FRUIT SALAD</small>
						<br>AND MARKETS</h3>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
				</a>
			</div>				

			<div class="blog-post"> 
				<img src="/asset-resources/page-assets/images/blogpost3.jpg" class="img-responsive" alt="Blog post">
				<div class="carousel-caption blog-title text-left no-padding">
					<h6 class="small">BLOG</h6>
				</div>
				<div class="carousel-caption blog-icons">
					<a href="#">
						<img class="blog-icon" src="/asset-resources/page-assets/images/facebook.png">
					</a>
					<a href="#">
						<img class="blog-icon" src="/asset-resources/page-assets/images/twitter.png">
					</a>
					<a href="csoon.html">
						<img class="blog-icon" src="/asset-resources/page-assets/images/heart.png">
					</a>
				</div>
				<a href="csoon.html">
					<div class=" carousel-caption text-left blog-text">
						<p>29.11.2017</p>
						<h3><small>FRUIT SALAD</small>
						<br>AND MARKETS</h3>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
				</a>
			</div>-->
							

			<!--Rows two and three - First item spans two rows
			<div class="row bottom-margin">
				Blog post 4 - first column - two-row-span
				<div class="col-md-8 no-padding">
					<img src="/asset-resources/page-assets/images/blogpostmain.jpg" class="major-blog-image" alt="Blog post">
					<div class="carousel-caption major-blog-icons">
						<a href="#">
							<img class="blog-icon" src="/asset-resources/page-assets/images/facebook.png">
						</a>
						<a href="#">
							<img class="blog-icon" src="/asset-resources/page-assets/images/twitter.png">
						</a>
					</div>
					<div class="carousel-caption text-left major-blog-text">
						<p>Aug 30 2019</p>
						<h2>MOST TALKED ABOUT AFRICAN FOOD</h2>
						<p>There is a never ending war in Africa that passes on from generation to generations. And with the ever-evolving ways of doing things on social...</p>
						<a target="_blank" href="csoon.html"><button class="btn btn-light">Read More</button></a>
					</div>
				</div>
				Second column for blog post 5 and 6
				<div class="col-md-4 no-padding">
					Blog post 5
					<div>
						<img class="rtt-image" src="/asset-resources/page-assets/images/blogpost5.jpg" alt="Blog post">
						<a href="csoon.html">
						<div class=" carousel-caption small-blog-text1 text-left">
							<p>MOST SHARED</p>
							<h4 class="font-weight-bolder">5 African ingredients that smell bad but taste better when cooked</h4>
						</div>
						</a>
					</div>
					Blog post 6
					<div>
						<img class="rtt-image" src="/asset-resources/page-assets/images/blogpost6.jpg" alt="Blog post">
						<a href="csoon.html">
						<div class="carousel-caption small-blog-text2 text-left">
							<p>MOST SHARED</p>
							<h4 class="font-weight-bolder">5 African ingredients that smell bad but taste better when cooked</h4>
						</div>
						</a>
					</div>
				</div>
			</div>-->
			<!--
			<div class="blog-post"> 
				<img src="/asset-resources/page-assets/images/blogpost7.jpg" class="img-responsive" alt="Blog post">
				<div class="carousel-caption blog-title text-left no-padding">
					<h6 class="small">BLOG</h6>
				</div>
				<div class="carousel-caption blog-icons">
					<a href="#">
						<img class="blog-icon" src="/asset-resources/page-assets/images/facebook.png">
					</a>
					<a href="#">
						<img class="blog-icon" src="/asset-resources/page-assets/images/twitter.png">
					</a>
					<a href="csoon.html">
						<img class="blog-icon" src="/asset-resources/page-assets/images/heart.png">
					</a>
				</div>
				<a href="csoon.html">
					<div class=" carousel-caption text-left blog-text">
						<p>29.11.2017</p>
						<h3><small>VEGETABLES</small>
						<br>AND SEEDS</h3>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
				</a>
			</div>

			<div class="blog-post"> 
				<img src="/asset-resources/page-assets/images/blogpost8.jpg" class="img-responsive" alt="Blog post">
				<div class="carousel-caption blog-title text-left no-padding">
					<h6 class="small">BLOG</h6>
				</div>
				<div class="carousel-caption blog-icons">
					<a href="#">
						<img class="blog-icon" src="/asset-resources/page-assets/images/facebook.png">
					</a>
					<a href="#">
						<img class="blog-icon" src="/asset-resources/page-assets/images/twitter.png">
					</a>
					<a href="csoon.html">
						<img class="blog-icon" src="/asset-resources/page-assets/images/heart.png">
					</a>
				</div>
				<a href="csoon.html">
					<div class=" carousel-caption text-left blog-text">
						<p>29.11.2017</p>
						<h3><small>STEAK</small>
						<br>AND CARBS</h3>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
				</a>
			</div>

			<div class="blog-post"> 
				<img src="/asset-resources/page-assets/images/blogpost9.jpg" class="img-responsive" alt="Blog post">
				<div class="carousel-caption blog-title text-left no-padding">
					<h6 class="small">BLOG</h6>
				</div>
				<div class="carousel-caption blog-icons">
					<a href="#">
						<img class="blog-icon" src="/asset-resources/page-assets/images/facebook.png">
					</a>
					<a href="#">
						<img class="blog-icon" src="/asset-resources/page-assets/images/twitter.png">
					</a>
					<a href="csoon.html">
						<img class="blog-icon" src="/asset-resources/page-assets/images/heart.png">
					</a>
				</div>
				<a href="csoon.html">
					<div class=" carousel-caption text-left blog-text">
						<p>29.11.2017</p>
						<h3><small>VEGETABLES</small>
						<br>AND SEEDS</h3>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
				</a>
			</div>
			

			<div class="blog-post"> 
				<img src="/asset-resources/page-assets/images/blogpost10.jpg" class="img-responsive" alt="Blog post">
				<div class="carousel-caption blog-title text-left no-padding">
					<h6 class="small">BLOG</h6>
				</div>
				<div class="carousel-caption blog-icons">
					<a href="#">
						<img class="blog-icon" src="/asset-resources/page-assets/images/facebook.png">
					</a>
					<a href="#">
						<img class="blog-icon" src="/asset-resources/page-assets/images/twitter.png">
					</a>
					<a href="csoon.html">
						<img class="blog-icon" src="/asset-resources/page-assets/images/heart.png">
					</a>
				</div>
				<a href="csoon.html">
					<div class=" carousel-caption text-left blog-text">
						<p>29.11.2017</p>
						<h3><small>STEAK</small>
						<br>AND CARBS</h3>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
				</a>
			</div>

			<div class="blog-post"> 
				<img src="/asset-resources/page-assets/images/blogpost11.jpg" class="img-responsive" alt="Blog post">
				<div class="carousel-caption blog-title text-left no-padding">
					<h6 class="small">BLOG</h6>
				</div>
				<div class="carousel-caption blog-icons">
					<a href="#">
						<img class="blog-icon" src="/asset-resources/page-assets/images/facebook.png">
					</a>
					<a href="#">
						<img class="blog-icon" src="/asset-resources/page-assets/images/twitter.png">
					</a>
					<a href="csoon.html">
						<img class="blog-icon" src="/asset-resources/page-assets/images/heart.png">
					</a>
				</div>
				<a href="csoon.html">
					<div class=" carousel-caption text-left blog-text">
						<p>29.11.2017</p>
						<h3><small>VEGETABLES</small>
						<br>AND SEEDS</h3>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
				</a>
			</div>

			<div class="blog-post"> 
				<img src="/asset-resources/page-assets/images/blogpost12.jpg" class="img-responsive" alt="Blog post">
				<div class="carousel-caption blog-title text-left no-padding">
					<h6 class="small">BLOG</h6>
				</div>
				<div class="carousel-caption blog-icons">
					<a href="#">
						<img class="blog-icon" src="/asset-resources/page-assets/images/facebook.png">
					</a>
					<a href="#">
						<img class="blog-icon" src="/asset-resources/page-assets/images/twitter.png">
					</a>
					<a href="csoon.html">
						<img class="blog-icon" src="/asset-resources/page-assets/images/heart.png">
					</a>
				</div>
				<a href="csoon.html">
					<div class="carousel-caption text-left blog-text">
						<p>29.11.2017</p>
						<h3><small>STEAK</small>
						<br>AND CARBS</h3>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
				</a>
			</div>-->
		</div>	
	</section>

	<!--Call to action section-->
	<section class="row no-margin position-relative">
		<div class="col-md-12 no-padding position-relative">
			<picture class="img-responsive div-fill-min div-fill-max">
				<source srcset="/asset-resources/page-assets/images/cta-image-640.jpg" media="(max-width: 668px)">
				<source srcset="/asset-resources/page-assets/images/cta-image-1280.jpg">
				<img class="img-responsive div-fill-min div-fill-max" src="/asset-resources/page-assets/images/cta-image-1280.jpg" alt="African food">
			</picture>
			<div class="carousel-caption cta-container">
				<div class="cta-text text-left">
					<h5> STAY WITH US</h5>
					<p> Leave us your details to subscribe to our weekly newsletter for insightful updates and more!</p>
				</div>
				<form id="cta" class="cta-form">
					<div class="form-row">
   						<div class="form-group col-6">
     					<input type="text" class="form-control" placeholder="First Name">
    					</div>
    					<div class="form-group col-6">
      					<input type="text" class="form-control" placeholder="Last Name">
    					</div>
					</div>
					<div class="form-row">
  						<div class="form-group col-md-12">
    						<input type="email" class="form-control" placeholder="Your E-mail">
 						</div>
 					</div>
				</form>
			</div>
		</div>
	</section>

@endsection