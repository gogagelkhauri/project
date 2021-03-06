@extends('layouts.front-layout')
@section('content')

<!-- Banner
================================================== -->
<div id="banner" style="background: url(images/banner-home-01.jpg)">
	<div class="container">
		<div class="sixteen columns">
			
			<div class="search-container">

                <!-- Form -->
                <form method="get" action="/jobs/search">
                    <h2>Find job</h2>
                    <input type="text" name="name" class="ico-01" placeholder="job title, keywords or company name" value=""/>
                    <select class="form-control" name="categories[]" id="categories">
                    @foreach($categories as $cat)
                        <option value="{{$cat->name}}">{{$cat->name}}</option>
                    @endforeach
                    </select>
                    
                    
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
				<!-- Browse Jobs -->
				<div class="browse-jobs">
					Browse job offers by <a href="browse-categories.html"> category</a> or <a href="#">location</a>
				</div>
				
				<!-- Announce -->
				<div class="announce">
					We’ve over <strong>15 000</strong> job offers for you!
				</div>

			</div>

		</div>
	</div>
</div>


<!-- Content
================================================== -->

<!-- Categories -->
<div class="container">
	<div class="sixteen columns">
		<h3 class="margin-bottom-25">Popular Categories</h3>
		<ul id="popular-categories">
		@foreach($categories as $cat)
			<li><a href="/jobs/search?categories[]={{$cat->name}}"><i class="{{$cat->icon}}"></i> {{$cat->name}}</a></li>
		@endforeach
			
		</ul>

		<div class="clearfix"></div>
		<div class="margin-top-30"></div>

		<a href="/allcategories" class="button centered">Browse All Categories</a>
		<div class="margin-bottom-50"></div>
	</div>
</div>


<div class="container">
	
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		<h3 class="margin-bottom-25">Recent Jobs</h3>
		<ul class="job-list">
    	@foreach($jobs as $job) 
			<li class="highlighted"><a href="/show/job/{{$job->id}}">
				<img src="uploads/{{$job->logo}}" alt="">
				<div class="job-list-content">
					<h4>{{$job->title}} <span class="{{$job->job_type}}">{{$job->job_type}}</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> {{$job->user->name}}</span>
						<span><i class="fa fa-map-marker"></i> {{$job->location}}</span>
						<span><i class="fa fa-money"></i> ${{$job->salary}} / {{$job->salary_type}}</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>
		@endforeach
		</ul>

		<a href="/alljobs" class="button centered"><i class="fa fa-plus-circle"></i> Show More Jobs</a>
		<div class="margin-bottom-55"></div>
	</div>
	</div>

	<!-- Job Spotlight -->
	<div class="five columns">
		<h3 class="margin-bottom-5">Job Spotlight</h3>

		<!-- Navigation -->
		<div class="showbiz-navigation">
			<div id="showbiz_left_1" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
			<div id="showbiz_right_1" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
		</div>
		<div class="clearfix"></div>
		
		<!-- Showbiz Container -->
		<div id="job-spotlight" class="showbiz-container">
			<div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1" >
				<div class="overflowholder">

					<ul>
						@foreach($spotlights as $spot)
						<li>
							<div class="job-spotlight">
								<a href="#"><h4>{{$spot->job->title}}<span class="{{$spot->job->job_type}}">{{$spot->job->job_type}}</span></h4></a>
								<span><i class="fa fa-briefcase"></i> {{$spot->job->user->name}}</span>
								<span><i class="fa fa-map-marker"></i>{{$spot->job->location}}</span>
								<span><i class="fa fa-money"></i> ${{$spot->job->salary}} / {{$spot->job->salary_type}}</span>
								<p>{!!$spot->job->description!!}</p>
								<a href="job-page.html" class="button">Apply For This Job</a>
							</div>
						</li>
						@endforeach


					</ul>
					<div class="clearfix"></div>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>

	</div>
</div>


<!-- Testimonials -->
<div id="testimonials">
	<!-- Slider -->
	<div class="container">
		<div class="sixteen columns">
			<div class="testimonials-slider">
				  <ul class="slides">
				    <li>
				      <p>I have already heard back about the internship I applied through Job Finder, that's the fastest job reply I've ever gotten and it's so much better than waiting weeks to hear back.
				      <span>Collis Ta’eed, Envato</span></p>
				    </li>

				    <li>
				      <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat. Donec dapibus efficitur arcu, a rhoncus lectus egestas elementum.
				      <span>John Doe</span></p>
				    </li>
				    
				    <li>
				      <p>Maecenas congue sed massa et porttitor. Duis placerat commodo ex, ut faucibus est facilisis ac. Donec eleifend arcu sed sem posuere aliquet. Etiam lorem metus, suscipit vel tortor vitae.
				      <span>Tom Smith</span></p>
				    </li>

				  </ul>
			</div>
		</div>
	</div>
</div>


<!-- Infobox -->
<div class="infobox">
	<div class="container">
		<div class="sixteen columns">Start Building Your Own Job Board Now <a href="my-account.html">Get Started</a></div>
	</div>
</div>


<!-- Recent Posts -->
<div class="container">
	<div class="sixteen columns">
		<h3 class="margin-bottom-25">Recent Posts</h3>
	</div>


	<div class="one-third column">

		<!-- Post #1 -->
		<div class="recent-post">
			<div class="recent-post-img"><a href="blog-single-post.html"><img src="{{asset('frontend/images/recent-post-01.jpg')}}" ></a><div class="hover-icon"></div></div>
			<a href="blog-single-post.html"><h4>Hey Job Seeker, It’s Time To Get Up And Get Hired</h4></a>
			<div class="meta-tags">
				<span>October 10, 2015</span>
				<span><a href="#">0 Comments</a></span>
			</div>
			<p>The world of job seeking can be all consuming. From secretly stalking the open reqs page of your dream company to sending endless applications.</p>
			<a href="blog-single-post.html" class="button">Read More</a>
		</div>

	</div>


	<div class="one-third column">

		<!-- Post #2 -->
		<div class="recent-post">
			<div class="recent-post-img"><a href="blog-single-post.html"><img src="{{asset('frontend/images/recent-post-02.jpg')}}"></a><div class="hover-icon"></div></div>
			<a href="blog-single-post.html"><h4>How to "Woo" a Recruiter and Land Your Dream Job</h4></a>
			<div class="meta-tags">
				<span>September 12, 2015</span>
				<span><a href="#">0 Comments</a></span>
			</div>
			<p>Struggling to find your significant other the perfect Valentine’s Day gift? If I may make a suggestion: woo a recruiter. </p>
			<a href="blog-single-post.html" class="button">Read More</a>
		</div>

	</div>

	<div class="one-third column">

		<!-- Post #3 -->
		<div class="recent-post">
			<div class="recent-post-img"><a href="blog-single-post.html"><img src="{{asset('frontend/images/recent-post-03.jpg')}}" ></a><div class="hover-icon"></div></div>
			<a href="blog-single-post.html"><h4>11 Tips to Help You Get New Clients Through Cold Calling</h4></a>
			<div class="meta-tags">
				<span>August 27, 2015</span>
				<span><a href="#">0 Comments</a></span>
			</div>
			<p>If your dream employer appears on this list, you’re certainly in good company. But it also means you’re up for some intense competition.</p>
			<a href="blog-single-post.html" class="button">Read More</a>
		</div>
	</div>

</div>

@endsection