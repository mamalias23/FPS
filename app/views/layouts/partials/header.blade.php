<header>
	<section id="main">
		<div class="row">
			<div class="col-md-9" style="padding-left:0px;">
				<img src="{{ asset('assets/img/FPS-web-design1_01.png') }}">
			</div>
			<div class="col-md-3" style="padding-right:0px;">
				<div class="row head">
					<div class="col-md-12" id="social">
						<a href="#"><img src="{{ asset('assets/img/fb-icon.png') }}"></a>
						<a href="#"><img src="{{ asset('assets/img/twitter-icon.png') }}"></a>
						<a href="#"><img src="{{ asset('assets/img/googleplus-icon.png') }}"></a>
					</div>
				</div>

				<div class="row head">
					<div class="col-md-12" id="search">
						<div class="input-group">
					    	<input type="text" placeholder="Search..." class="form-control-brown has-radius-left">
					    	<span class="input-group-btn">
					    		<a class="btn btn-brown" href="#">
								  <i class="fa fa-search"></i>
								</a>
					    	</span>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="navigation">
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9" style="padding-left:0px">
					<ul class="nav navbar-nav">
						<li class="{{\Request::is('/') ? 'active':''}}"><a href="{{ url('/') }}">Home</a></li>
						<li class="{{\Request::is('about-us') ? 'active':''}}"><a href="{{ url('about-us') }}">About Us</a></li>
						<li class="{{\Request::is('contact-us') ? 'active':''}}"><a href="{{ url('contact-us') }}">Contact Us</a></li>
						<li class="{{\Request::is('web-development') ? 'active':''}}"><a href="{{ url('web-development') }}">Web Development</a></li>
						<li class="{{\Request::is('web-design') ? 'active':''}}"><a href="{{ url('web-design') }}">Web Design</a></li>
						<li class="{{\Request::is('seo') ? 'active':''}}"><a href="{{ url('seo') }}">SEO</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</section>
	<section id="banner">
		<div class="row"><div class="col-md-12">&nbsp;</div></div>
	</section>
</header>