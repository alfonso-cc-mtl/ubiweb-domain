@extends('layouts.onepager')

@section('content')

	@component('components.video-section', [
		'video' => 'https://www.sample-videos.com/video/mp4/720/big_buck_bunny_720p_2mb.mp4',
		'poster' => 'https://images.unsplash.com/photo-1478109214826-170faed7985c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4febb66efe5ab519ca620b947289f798&auto=format&fit=crop&w=1950&q=80',
		'class' => 'video-section-caption--bottom video-section-caption--fade'
	])
	<h1>Bedrock Template</h1>
@endcomponent

@component('components.cta-bar')
	<a href="#" class="cta-bar__tilt">
		<span>
			<span class="icon-circle mr-2"><i class="fa fa-money"></i></span> Free Estimates
		</span>
	</a>
	<a href="#" class="cta-bar__tilt">
		<span>
			<span class="icon-circle mr-2"><i class="fa fa-phone"></i></span> 514-555-4567
		</span>
	</a>
	<a href="#" class="cta-bar__tilt">
		<span>
			<span class="icon-circle mr-2"><i class="fa fa-certificate"></i></span> 7 Year Guarantee
		</span>
	</a>
@endcomponent

@component('components.split-screen', [
	'image' => 'https://source.unsplash.com/600x400/?dessert',
	'caption' => 'Dessert'
])
<h3>Split Screen</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
@endcomponent

@component('components.split-screen', [
	'reverse' => true,
	'image' => 'https://source.unsplash.com/600x400/?lunch',
	'caption' => 'Lunch'
])
<h3>Split Screen</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
@endcomponent


<div class="wow section py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>What our customers have to say</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div class="col-md-6">
				@component("components.slider", ['site' => $site,
				'id' => 'testimonials',
				'data' => 	['interval' => 2000],
			])
			<div class="carousel-item active">
				<blockquote>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
					<small>John Smith</small>
				</blockquote>
			</div>
			<div class="carousel-item">
				<blockquote>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
					<small>Jane Doe</small>
				</blockquote>
			</div>
			<ol class="carousel-indicators">
				<li data-target="#testimonials" data-slide-to="0" class="active"></li>
				<li data-target="#testimonials" data-slide-to="1"></li>
			</ol>
		@endcomponent
	</div>
</div>
</div>
</div>

<div class="container" id="gallery">
	<div class="row justify-content-center my-5">

		<div class="wow col-lg-3">
			<h2>This is an image gallery</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="wow col-lg-9">
			@component("components.gallery-filter", ['site' => $site, 'filter' => true])
				<div class="text-center">
					<h2>Filter this Gallery</h2>
					<div class="form-inline justify-content-center my-2">
						<input class="form-control search mr-1" placeholder="Search"/>
						<div class="btn-group">
							<button class="btn btn-secondary sort" data-sort="country">Sort by Country</button>
							<button class="btn btn-secondary sort" data-sort="city">Sort by City</button>
						</div>
					</div>
				</div>
				<div class="row">
					<ul class="list grid grid--sm-2 grid--md-3">
						<li class="card" data-id="1">
							<a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="home" data-title="A Random title">
								<img src="https://unsplash.it/400.jpg?image=251" class="img-thumbnail">
							</a>
							<div class="card-body">
								<h4 class="card-title country">Canada</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</li>

						<li class="card" data-id="2">
							<a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="home" data-title="Another caption">
								<img src="https://unsplash.it/400.jpg?image=255" class="img-thumbnail">
							</a>
							<div class="card-body">
								<h4 class="card-title city">Montreal</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</li>

						<li class="card" data-id="3">
							<a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="home" data-title="A Random title">
								<img src="https://unsplash.it/400.jpg?image=251" class="img-thumbnail">
							</a>
							<div class="card-body">
								<h4 class="card-title city">Toronto</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
							</div>
						</li>

						<li class="card" data-id="4">
							<a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="home" data-title="Another caption">
								<img src="https://unsplash.it/400.jpg?image=255" class="img-thumbnail">
							</a>
							<div class="card-body">
								<h4 class="card-title country">USA</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</li>

						<li class="card" data-id="5">
							<a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="home" data-title="Another caption">
								<img src="https://unsplash.it/400.jpg?image=255" class="img-thumbnail">
							</a>
							<div class="card-body">
								<h4 class="card-title country">Mexico</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</li>
					</ul>
				</div>
			@endcomponent
		</div>
	</div>
</div><!-- .container -->

<section id="about" data-in-view="header" class="wow">
	@component('components.section', ['class' => 'py-5 mt-5'])
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<h1>About Section</h1>
					<p class="lead">This is the about section.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
	@endcomponent
</section>

<section id="contact" data-in-view="header" class="wow">
	@component('components.section', ['class' => 'py-5', 'light' => true])
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<h1>Contact Section</h1>
					<p class="lead">This is the contact section.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					@if( isset($_GET['success']) )
						<div class="alert alert-success">
							{{ $_GET['success'] }}
						</div>
					@endif
					@if( isset($_GET['error']) )
						<div class="alert alert-error">
							{{ $_GET['error'] }}
						</div>
					@endif
					<form action="{{ $site->url('/contact') }}" method="post" enctype="multipart/form-data">
						<input type="file" name="attachments[Doc]"/>
						<input type="file" name="attachments[Another Doc]"/>
						<input type="hidden" name="to" value="greg@codecomment.io" />
						<input type="hidden" name="subject" value="Contact from Ubiweb" />
						<input type="hidden" name="_redirect" value="{{ $site->url()->current() }}" />
						<input type="hidden" name="_success" value="Success Message" />
						<input type="text" name="message[Field_1]"/>
						<input type="text" name="message[Field_2]"/>
						<button>Send</button>
					</form>

				</div>
			</div>
		</div>
	@endcomponent
</section>

<h1>Instagram</h1>
<div class="social-feed">
	@foreach( $site->display()->socialFeed('instagram', ['num' => 8]) as $media )
	<a href="{{ $media['url'] }}">
		<img src="{{ $media['image'] }}"/>
	</a>
	@endforeach
</div>

<h1>Facebook</h1>
<div class="social-feed">
	@foreach( $site->display()->socialFeed('facebook', [
	    'fields' => 'permalink_url, created_time, full_picture, message, shares',
	    'limit' => 6,
	]) as $media )
	@if( isset($media['full_picture']) )
	<a href="{{ $media['permalink_url'] }}">
		<img src="{{ $media['full_picture'] }}" />
	</a>
	@endif
	@endforeach
</div>

@endsection
