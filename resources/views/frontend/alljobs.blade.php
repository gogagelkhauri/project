@extends('layouts.front-layout')
@section('content')

<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="ten columns">
			<span>We found {{$count_jobs}} jobs matching:</span>
			<h2>All Jobs</h2>
		</div>

		<div class="six columns">
			<a href="add-job.html" class="button">Post a Job, It’s Free!</a>
		</div>

	</div>
</div>

<!-- Content
================================================== -->
<div class="container">
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		
		<form method="get" action="/jobs/search" class="list-search">
			<button><i class="fa fa-search"></i></button>
			<input type="text" placeholder="job title, keywords or company name" name="name" />
			
			<div class="clearfix"></div>
		</form>

		<ul class="job-list full">
            @foreach($jobs as $job)

			<li><a href="show/job/{{$job->id}}">
				<img src="/uploads/{{$job->logo}}" alt="">
				<div class="job-list-content">
					<h4>{{$job->title}}<span class="{{$job->job_type}}">{{$job->job_type}}</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> {{$job->user->name}}</span>
						<span><i class="fa fa-map-marker"></i> {{$job->location}}</span>
						<span><i class="fa fa-money"></i> ${{$job->salary}} / {{$job->salary_type}}</span>
					</div>
					<p>{!!$job->description!!}</p>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>
            @endforeach

			
		</ul>
		<div class="clearfix"></div>

		{{ $jobs->links('vendor.pagination.default') }}

	</div>
	</div>


	<!-- Widgets -->
	<div class="five columns">

		<!-- Sort by -->
		<div class="widget">
			<h4>Sort by</h4>
            <form action="/alljobs" method="get" >
			<!-- Select -->
			<select name="sort" data-placeholder="Choose Category" class="chosen-select-no-single" onchange="this.form.submit()">
				<option value=""></option>
				<option value="asc">Newest</option>
				<option value="desc">Oldest</option>
			</select>
            </form>

		</div>
	</div>
	<!-- Widgets / End -->


</div>


@endsection