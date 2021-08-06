@extends('layouts.front-layout')
@section('content')

<!-- Titlebar
================================================== -->
<div id="titlebar" class="resume">
	<div class="container">
		<div class="ten columns">
			<div class="resume-titlebar">
				<img src="{{asset('frontend/images/resumes-list-avatar-01.png')}}" alt="">
				<div class="resumes-list-content">
					<h4>{{$user->name}} <span>{{$user->resume->title}}</span></h4>
					<span class="icons"><i class="fa fa-map-marker"></i> Mountain View, CA</span>
					<span class="icons"><i class="fa fa-money"></i> ${{$user->resume->salary}} / {{$user->resume->salary_type}}</span>
					<span class="icons"><a href="#"><i class="fa fa-link"></i> {{$user->resume->website}}</a></span>
					<span class="icons"><a href="mailto:john.doe@example.com"><i class="fa fa-envelope"></i>{{$user->email}}</a></span>
					<div class="skills">
						@foreach($user->resume->skills as $skill)
						<span>{{$skill->name}}</span>
						@endforeach
					</div>
					<div class="clearfix"></div>

				</div>
			</div>
		</div>

		<div class="six columns">

				
				<a href="#" class="button dark"><i class="fas fa-user-edit"></i> Edit profile</a>


			
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<!-- Recent Jobs -->
	<div class="eight columns">
	<div class="padding-right">

		<h3 class="margin-bottom-15">About Me</h3>

		<p class="margin-reset">
			{{$user->resume->about}}
		</p>


	</div>
	</div>


	<!-- Widgets -->
	<div class="eight columns">

		<h3 class="margin-bottom-20">Education</h3>

		<!-- Resume Table -->
		<dl class="resume-table">
		@foreach($user->resume->educations as $edu)
			<dt>
				<small class="date">{{$edu->from}} - {{$edu->to}}</small>
				<strong>{{$edu->degree}}</strong>
			</dt>
			<dd>
				<p>{{$edu->description}}</p>
			</dd>
		@endforeach
		

		</dl>

	</div>

</div>


@endsection