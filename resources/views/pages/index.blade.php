@extends('layouts.app')

@section('content')
<section class="showcase">
	<div class="container">
		<h1>WELCOME!</h1>
		<p class="lead">Hello I'm Rob. I'd like to help you turn your great idea into an awesome website. If your building your first site and need a little help or just want to get some new coding skills, this site is for you. So let's get started.</p>
		<a href="about.html" class="btn btn-primary">Read More...</a>
    </div><!-- /container -->
</section><!-- /showcase -->
<section class="section-a">
	<div class="container">
	    <div class="row">
	        <div class="col-xs-12 col-md-4">
	            <img src="{{ URL::to('/') }}/images/tv-wamp-setup.svg" />
	        </div><!-- /col-md-4 -->
	        <div class="col-xs-12 col-md-4">
	            <img src="{{ URL::to('/') }}/images/coming-soon1.svg" />
	        </div><!-- /col-md-4 -->
	        <div class="col-xs-12 col-md-4">
	            <img src="{{ URL::to('/') }}/images/tv-frame-dark-ci.svg" />
	        </div><!-- /col-md- -->
	    </div><!-- /row -->
	</div><!-- /container -->
</section><!-- /section-a -->
@endsection