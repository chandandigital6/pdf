
@extends('frontLayouts.main')
@section('title', 'Home - DentCare')

{{--@section('content)--}}
    @section('content')

        <main id="main">

            <!-- About Section Start-->
            <section id="about">
                <div class="container">
                    @foreach($about as $aboutData)

                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-col-left">
                                <img class="img-fluid" src="{{asset('storage/'.$aboutData->image)}}" />
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-6">
                            <div class="about-col-right">
                                <header class="section-header">
                                    <h3>{{$aboutData->title}}</h3>
                                </header>
                                <ul class="icon">
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-pinterest"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                </ul>
                               <p>{!! $aboutData->description !!}</p>
                                <a href="about.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="about-col">
                                <h4>Education</h4>
                                <p>Medical School - University of Dulton Health Science Center.</p>
                                <p>Residency in Family Medicine - University of Dulton Health Science Center.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-col">
                                <h4>Experience</h4>
                                <p>Medical School - University of Dulton Health Science Center.</p>
                                <p>Residency in Family Medicine - University of Dulton Health Science Center.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Section End-->

            <!-- Services Section Start -->
            <section id="services">
                <div class="container">
                    <header class="section-header">
                        <h3>Services</h3>
                    </header>
                    <div class="row">
                        @foreach($services as $service)


                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="single-service">
                                <div class="icon icon-1"></div>
                                <h4>{{$service->heading}}</h4>
{{--                                <span>20 Min | $50.00</span>--}}
                        <p>{{$service->title}}</p>
                                <a href="booking.html">Book Now</a>
                            </div>
                        </div>

                        @endforeach





                    </div>
                </div>
            </section>
            <!-- Service Section End-->

            <!-- Team Section Start -->
            <section id="team">
                <div class="container">
                    <div class="section-header">
                        <h3>Meet My Assistant</h3>
                    </div>

                    <div class="row">
                        @foreach($teams as $team)


                        <div class="col-md-4">
                            <div class="box8">
                                <img src="{{asset('storage/'.$team->image)}}" alt="">
                                <div class="box-content">
                                    <ul class="icon">
                                        <li><a href="{{$team->wat_url}}" class="fa fa-whatsapp "></a></li>
                                        <li><a href="{{$team->fb_url}}" class="fa fa-facebook"></a></li>
                                        <li><a href="{{$team->in_url}}" class="fa fa-instagram"></a></li>

                                    </ul>
                                </div>
                            </div>
                            <h4>{{$team->name}}</h4>
                            <span>{{$team->title}}</span>
                            <p>
                            {!! $team->msg !!}
                            </p>
                        </div>
                        @endforeach


                    </div>
                </div>
            </section>
            <!-- Team Section End -->

            <!-- Testimonials Section Start -->
            <section id="testimonials" class="section-bg wow fadeInUp">
                <div class="container">
                    <div class="section-header">
                        <h3>Happy Client</h3>
                    </div>

                    <div class="owl-carousel testimonials-carousel">
{{--                        <div class="row testimonial-item">--}}
{{--                            --}}
{{--                            <div class="col-sm-8">--}}
{{--                                <div class="content">--}}
{{--                                    <h3>Jamie D. Boyd</h3>--}}
{{--                                    <h4>Oral Radiologist</h4>--}}
{{--                                    <p>--}}
{{--                                        <i class="fa fa-quote-left"></i>--}}
{{--                                        Commodo sed hendrerit id, posuere tempus odio. Phasellus vel leo aliquam, interdum massa quis, aliquam sapien. Aliquam erat volutpat. Etiam nec feugiat libero. Phasellus in ipsum nunc.--}}
{{--                                        <i class="fa fa-quote-right"></i>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                      @foreach($testimonials as $testimonial)


                        <div class="row testimonial-item">
                            <div class="col-sm-4">
                                <div class="box8">
                                    <img src="{{asset('storage/'.$testimonial->image)}}" class="testimonial-img" alt="">
                                    <div class="box-content">
                                        <ul class="icon">
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                            <li><a href="#" class="fa fa-pinterest"></a></li>
                                            <li><a href="#" class="fa fa-google-plus"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content">
                                    <h3>{{$testimonial->name}}</h3>
{{--                                    <h4>Craft Artist</h4>--}}
                                    <p>
                                        <i class="fa fa-quote-left"></i>
                                   {!! $testimonial->msg !!}
                                        <i class="fa fa-quote-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
{{--                        <div class="row testimonial-item">--}}
{{--                            <div class="col-sm-4">--}}
{{--                                <div class="box8">--}}
{{--                                    <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">--}}
{{--                                    <div class="box-content">--}}
{{--                                        <ul class="icon">--}}
{{--                                            <li><a href="#" class="fa fa-twitter"></a></li>--}}
{{--                                            <li><a href="#" class="fa fa-facebook"></a></li>--}}
{{--                                            <li><a href="#" class="fa fa-pinterest"></a></li>--}}
{{--                                            <li><a href="#" class="fa fa-google-plus"></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-8">--}}
{{--                                <div class="content">--}}
{{--                                    <h3>Theresa R. Wood</h3>--}}
{{--                                    <h4>Prepress Technician</h4>--}}
{{--                                    <p>--}}
{{--                                        <i class="fa fa-quote-left"></i>--}}
{{--                                        Dictum ligula condimentum cursus commodo sed hendrerit id, posuere tempus odio. Phasellus vel leo aliquam, interdum massa quis, aliquam sapien. Aliquam erat volutpat. Etiam nec ultricies semper risus.--}}
{{--                                        <i class="fa fa-quote-right"></i>--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </section>
            <!-- Testimonials Section End -->

            <!-- Contact Section Start -->
            <section id="contact" class="section-bg wow fadeInUp">
                <div class="container">
                    <div class="section-header">
                        <h3>Contact Us</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-detail">
                                <div class="contact-hours">
                                    <h4>Opening Hours</h4>
                                    <p>Monday-Friday: 9am to 7pm</p>
                                    <p>Saturday: 9am to 4pm</p>
                                    <p>Sunday: Closed</p>
                                </div>

                                <div class="contact-info">
                                    <h4>Contact Info</h4>
                                    <p>4137  State Street, CA, USA</p>
                                    <p><a href="tel:+1-234-567-8900">+1-234-567-8900</a></p>
                                    <p><a href="mailto:info@example.com">info@example.com</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-form">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" placeholder="Your Name" required="required" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="email" class="form-control" placeholder="Your Email" required="required" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" placeholder="Message" required="required" ></textarea>
                                    </div>
                                    <div><button type="submit">Send Message</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact end -->

            <!-- Subscriber Section Start -->
            <section id="subscriber">
                <div class="container">
                    <h3>Get Free Consultation</h3>
                    <form class="form-inline">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email Goes Here">
                        </div>
                        <button type="submit" class="btn">Submit</button>
                    </form>
                </div>
            </section>
            <!-- Subscriber Section end -->

            <!-- Support Section Start -->
            <section id="support">
                <div class="container">
                    <h1>
                        Need help? Call me 24/7 at +1-234-567-8900
                    </h1>
                </div>
            </section>
            <!-- Support Section end -->

        </main>
    @endsection
