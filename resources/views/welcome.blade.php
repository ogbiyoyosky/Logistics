
@extends('layouts.app')
@section('content')
 <!-- Intro Header -->
 <header id="home" >
 
 <section class="mbr-slider mbr-section mbr-section--no-padding carousel slide" data-ride="carousel" data-wrap="true" data-interval="5000" id="slider-5" style="background-color: #4c6972;">
    <div class="mbr-section__container">
        <div>
            <ol class="carousel-indicators">
                <li data-app-prevent-settings="" data-target="#slider-5" data-slide-to="0" class="active"></li><li data-app-prevent-settings="" data-target="#slider-5" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider-5" class="" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height active" style="background-image: url(../img/3.jpg); ">
                    <div class="mbr-box__magnet mbr-box__magnet--center-right mbr-box__magnet--sm-padding">
                                            
                        <div class=" container">
                            
                            <div class="row">
                                <div class=" col-md-6 col-md-offset-5">  

                                <div class="mbr-hero">
                                    <h1 class="mbr-hero__text">Logistics / Courier Services</h1>

                                    <p class="mbr-hero__subtext">We deliver the best services when it comes to courier</p>
                                </div>
                                <div class="mbr-buttons btn-inverse mbr-buttons--left mbr-buttons--center"><a class="mbr-buttons__btn btn btn-lg btn-primary" href="{{url('/track_shipment')}}">Track Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height" style="background-image: url(../img/1.jpg); ">
                    <div class="mbr-box__magnet mbr-box__magnet--center-center mbr-box__magnet--sm-padding">
                                            
                        <div class=" container">
                            
                            <div class="row">
                                <div class=" col-md-8 col-md-offset-2">  

                                <div class="mbr-hero">
                                    <h1 class="mbr-hero__text">We deliver on time</h1>

                                    <p class="mbr-hero__subtext">Be  assured to get your goods in the right condition</p>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div><div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height" style="background-image: url(../img/2.jpg); ">
                    <div class="mbr-box__magnet mbr-box__magnet--center-left mbr-box__magnet--sm-padding">
                                            
                        <div class=" container">
                            
                            <div class="row">
                                <div class=" col-md-6 col-md-offset-1">  

                                <div class="mbr-hero">
                                    <h1 class="mbr-hero__text">We are here to help</h1>

                                    <p class="mbr-hero__subtext">The best service, with good customer service </p>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-5">
                <span aria-hidden="true"><</span>
                <span class="sr-only">Previous</span>
            </a>
            <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-5">
                <span aria-hidden="true">></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
</header>

<style>
  @media (min-width: 220px) {
    hero-heading {
      font-size: 24px !important;
    }
  }


</style>

 <div id="track" class="tracker text-white text-center">
      <div class="overlay"></div>
      <div class="container">
      @if (count($errors) > 0)
                <div class="alert alert-danger mb-4">
                    <strong>Whoops!</strong> Please Enter a tracking code <br><br>  
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
      @endif
        <div class="row">
          <div class="col-xl-9  col-sm-12 mx-auto py-3 ">
            <h2 class="mt-5">Its Simple, Fast and Easy. Track your Goods now</h2>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7  py-3 mx-auto">
            <form action="{{url('track_shipment')}}" method="POST">
              {{csrf_field()}}
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="text" class="form-control form-control-lg" name="tracking_code" placeholder="Enter Code...">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Track</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
</div>
    

    <!-- About Section -->
    <section id="about" class="content-section text-center ">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto ">
            <h3 class="section-title">Our Identity</h3>
            <p>{{config('app.name')}} is a logistics company with focus on Excellence, 
              Accuracy and Speed as our core value, we value our customers business and thats
               why we are the best in customer service relationship, which makes us a customer
                friendly company. Over the years we have provided excellent delivery services to 
                our customers from accross the globe, with a 100% satisfactory feedback from our 
                customers both locally and internationally. </p>
          </div>
        </div>
      </div>
    </section>

    
		<section class="service" id="service">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h2 class="text-center section-title mt-5">What we do</h2>
						</div>
						<div class="row pb-5">
							<div class="col-md-3">
								<div class="st-feature">
									<div class="st-feature-icon"><i class="fa fa-globe"></i></div>
									 <h4 class="subtitle" >Global Services</h4>
									<p>Our services know no border barriers, we are a global company with reach to both businesses and individuals.</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="st-feature">
									<div class="st-feature-icon"><i class="fa fa-plane"></i></div>
									<h4 class="subtitle">Air Cargo Delivery</h4>
									<p>Our Air delivery service quarantees speed and maximum security for your packages.</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="st-feature">
									<div class="st-feature-icon"><i class="fa fa-truck"></i></div>
									<h4 class="subtitle">Door-to-Door</h4>
									<p>We deliver straight to your doorstep and business environments with speed and accuracy..</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="st-feature">
									<div class="st-feature-icon"><i class="fa fa-shield"></i></div>
                  <h4 class="subtitle">Security</h4>
									<p>Our most priority is to ensure the maximum security of our clients packages and cargos, 
									our watch dogs are always active to ensure maximum security.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h3 class="testimonial__title">What people are saying...</h3>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="{{url('img/testimonials-1.jpg')}}" alt="">
              <h5 class="testimonial__color">Margaret E.</h5>
              <p class="font-weight-light mb-0 ">"This is fantastic! Thanks so much guys!"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="{{url('img/testimonials-2.jpg')}}" alt="">
              <h5 class="testimonial__color">Fred S.</h5>
              <p class="font-weight-light mb-0 testimonial__color "> "Fast quick and reliable"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="{{url('img/testimonials-3.jpg')}}" alt="">
              <h5 class="testimonial__color">Sarah	W.</h5>
              <p class="font-weight-light mb-0 testimonial__color ">"The best Courier service so far."</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 ">
            <h2>Contact Us</h2>
              <form class="form-signin">

                  <div class="form-label-group">
                    <input type="name" id="inputName" class="form-control" placeholder="Full Name" required >
                    <label class="text-left" for="inputName">Name</label>
                  </div>
                  <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required >
                    <label class="text-left" for="inputEmail">Email address</label>
                  </div>

                  <div class="form-label-group">
                    <textarea name="" id="text-area" class="form-control"cols="10" placeholder="Enter message" rows="4"></textarea>
                  </div>
                  <button class="btn btn-lg btn-success btn-block" type="submit">Contact Us</button>
            </form>
          </div>
          <div class="col-md-6">
					<br>	<p>Kindly complete the form to make an enquiry or ask any question. We will be happy to hear from you; we will reply you within 24hrs. Kindly remember to leave your email address.</p>
						<address>
							<br>
						
						<br>
							
						</address>
						<address>
						Email: info@lassoexpress.com | info.lassoexpress@consultant.com
						 </address>
					</div>
        </div>
        </div>
      </div>
    </section>

  <div id="site-footer" class="site-footer">
        <section class="container content-section">
            <div class="row" style="margin-bottom: 120px;">
                <div class="col-lg-3 u-mb-md">
                        <div class="footer-brand">
                            <img src="/img/logo.png" class="brand-logo"> 
                            <span class="brand-name">{{config('app.name')}}</span>
                        </div>
                    </div>

                    <div class="col-lg-5 u-mb-md">
                        <h3 class="footer-title">Using {{config('app.name')}}</h3>

                        <ul class="list list-unstyled">
                            <li><a href="#">Our identity</a></li>
                            <li><a href="#">Why you can trust us</a></li>
                            <li><a href="#">Log in</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 u-mb-md">
                        <h3 class="footer-title">Supported Devices</h3>

                        <ul class="devices-icons list list-unstyled">
                            <li class="device-icon">
                                <i class="fa fa-3x fa-android"></i>
                            </li>
                            <li class="device-icon">
                                <i class="fa fa-3x fa-apple"></i>
                            </li>
                            <li class="device-icon">
                                <i class="fa fa-3x fa-desktop"></i>
                            </li>
                            <li class="device-icon">
                                <i class="fa fa-3x fa-windows"></i>
                            </li>
                            <li class="device-icon">
                                <i class="fa fa-3x fa-linux"></i>
                            </li>
                        </ul>
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-5 col-lg-offset-3">
                        <p class="copyright" style="display:inline-block; margin-bottom: 20px; font-size: 14px;">&copy; 2016-2017 {{config('app.name')}}} </p>

                        <ul class="list list-unstyled list-inline">
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </section>    
    </div>
    
@endsection