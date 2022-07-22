<x-guest-layout>

    <div class="rsdf-header" style="background-image: url({{asset($page->photo)}})">
        <div>
{{--            <h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>--}}
            <h1 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">Roberto Save <br> Dreams Foundation</h1>
            <p class="wow cssanimation fadeInTop" data-wow-delay="1s">A Non-Profit and Non-Governmental Organization initiated in October 2021 to help spearhead community
                driven development initiatives and enable needy community groups participate in integrated activities to
                achieve quality livelihood and be self-sustainable. RSDF operates in Zambia, Angola and other surrounding regions. To learn the latest developments about our NGO, subscribe to our newsletter</p>
            <a data-scroll href="#subscribe" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Subscribe</a>
        </div>
        @auth
        <!-- Button trigger modal -->
        <button type="button" class="error-btn edit-photo" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="ti-pencil"></i> Photo
        </button>
        @endauth
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="" class="form-wrap material" method="post" action="{{route('pages.upload-photo')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Photo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="code" value="{{$page->code}}">
                        <input type="file" name="photo" id="photo" class="form-control-file material__input pt-8" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="secondary-btn" data-dismiss="modal">Close</button>
                        <button type="submit" class="default-btn">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

{{--
    <section class="slider-section">
        <div class="slider-wrapper">
            <div id="main-slider" class="nivoSlider">
                <img src="img/slider-1.jpg" alt="" title="#slider-caption-1"/>
--}}{{--                <img src="img/slider-2.jpg" alt="" title="#slider-caption-2"/>--}}{{--
--}}{{--                <img src="img/slider-3.jpg" alt="" title="#slider-caption-3"/>--}}{{--
            </div><!-- /#main-slider -->

            <div id="slider-caption-1" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>
                                <h1 class="wow cssanimation leFadeInRight sequence">Roberto Save Dreams Foundation</h1>
                                <p class="wow cssanimation fadeInTop" data-wow-delay="1s">A Non-Profit and Non-Governmental Organization initiated in October 2021 to help spearhead community
                                    driven development initiatives and enable needy community groups participate in integrated activities to
                                    achieve quality livelihood and be self-sustainable.</p>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#slider-caption-1 -->
          --}}{{--  <div id="slider-caption-2" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h1 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">Together we  <br>can make a Difference</h1>
                                <p class="wow cssanimation fadeInBottom" data-wow-delay="1s">Help today because tomorrow you may be the one who needs helping! <br>Forget what you can get and see what you can give.</p>
--}}{{----}}{{--                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join With Us</a>--}}{{----}}{{--
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#slider-caption-2 -->
            <div id="slider-caption-3" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>
                                <h1 class="wow cssanimation lePushReleaseFrom sequence" data-wow-delay="1s">Give a little. Change a lot.</h1>
                                <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Help today because tomorrow you may be the one who needs helping! <br>Forget what you can get and see what you can give.</p>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join With Us</a>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donet Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#slider-caption-3 -->--}}{{--
        </div>
    </section><!-- /#slider-Section -->--}}

    {{--<section class="promo-section bd-bottom">
        <div class="promo-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 xs-padding">
                        <div class="promo-content" style="padding: 40px">
                                <img src="img/icon-1.png" alt="prmo icon">
                            <h3>Our Activities</h3>
--}}{{--                            <p>Placeholder text.</p>--}}{{--
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 xs-padding">
                        <div class="promo-content" style="padding: 40px">
                                <img src="img/icon-1.png" alt="prmo icon">
                            <h3>Our Achievements</h3>
--}}{{--                            <p>Placeholder text.</p>--}}{{--
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 xs-padding">
                        <div class="promo-content" style="padding: 40px">
                                <img src="img/icon-1.png" alt="prmo icon">
                            <h3>Sustainability</h3>
--}}{{--                            <p>Placeholder text.</p>--}}{{--
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 xs-padding">
                        <div class="promo-content" style="padding: 40px">
                                <img src="img/icon-1.png" alt="prmo icon">
                            <h3>Holistic Approach</h3>
--}}{{--                           <p>Placeholder text.</p>--}}{{--
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Promo Section -->--}}

    <section class="causes-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>What we do</h2>
                <span class="heading-border"></span>
                {{--                <p>We hold the following values;</p>--}}
            </div><!-- /Section Heading -->
            <div class="causes-wrap row">
                <div class="col-sm-6 xs-padding">
                   <div class="profile-wrap">
                       <h3>Our Activities</h3>
                       <a href="{{route('our-activities')}}" class="secondary-btn">Read More</a>
                    </div>
                </div>
                <div class=" col-sm-6 xs-padding">
                    <div class="profile-wrap">
                        <h3>Our Achievements</h3>
                        <a href="{{route('our-achievements')}}" class="secondary-btn">Read More</a>
                    </div>
                </div>
                <div class="col-sm-6 xs-padding">
                    <div class="profile-wrap">
                        <h3>Partnerships</h3>
                        <a href="{{route('partnerships')}}" class="secondary-btn">Read More</a>
                    </div>
                </div>
                <div class="col-sm-6 xs-padding">
                    <div class="profile-wrap">
                        <h3>Future Plans</h3>
                        <a href="{{route('future-plans')}}" class="secondary-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Causes Section -->

    <section class="blog-section bd-bottom shape circle padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Latest News</h2>
                <span class="heading-border"></span>
{{--                <p>!</p>--}}
            </div><!-- /Section Heading -->
            <div class="row">
                <div class="col-lg-12 xs-padding">
                    <div class="blog-items grid-list row">
                        @foreach($news as $article)
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <div class="image-placeholder" style="background-image: url({{asset($article->photo)}}); height: 230px"></div>
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> {{date("F, d.Y",$article->created_at->getTimestamp())}}</span>
                                        <h3><a href="{{route('news.show',['slug'=>$article->slug])}}">{{$article->title}}</a></h3>

                                        <p>{{$article->description}}</p>
                                        <a href="{{route('news.show',['slug'=>$article->slug])}}" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div><!-- Blog Posts -->
            </div>
        </div>
    </section>

    <section class="causes-section bg-grey bd-bottom padding">
        <div class="container">
            <div style="padding-top:60px" class="section-heading text-center mb-40">
                <h2>Our Core Values</h2>
                <span class="heading-border"></span>
{{--                <p>We hold the following values;</p>--}}
            </div><!-- /Section Heading -->
            <div class="causes-wrap row">
                <div class="col-lg-3 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="{{asset('images/people.png')}}" alt="prmo icon">
                        <h3>People</h3>
                        <p>People are at the very center and heart of development; they are the forces behind all we
                            do and every endeavor we undertake.</p>
                        {{--                            <a href="#">Read More</a>--}}
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="{{asset('images/transparency.png')}}" alt="prmo icon">
                        <h3>Transparency</h3>
                        <p>Transparency and accountability drive our
                            actions.</p>
                        {{--                            <a href="#">Read More</a>--}}
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="{{asset('images/sustainability.png')}}" alt="prmo icon">
                        <h3>Sustainability</h3>
                        <p>Sustainability is built into every intervention
                            we pursue</p>
                        {{--                            <a href="#">Read More</a>--}}
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="{{asset('images/holistic-approach.png')}}" alt="prmo icon">
                        <h3>Holistic Approach</h3>
                        <p>A holistic approach is essential to our treatment of ourselves and one another, with the
                            aim of developing the whole person: health
                            body, healthy mind, and healthy spirit.</p>
                        {{--                            <a href="#">Read More</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Causes Section -->


    {{--<section class="about-section bd-bottom shape circle padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 xs-padding">
                    <div class="profile-wrap">
                        <img style="max-height: 250px; margin-bottom: 10px;" src="{{asset('images/roberto-chiteta.jpg')}}" alt="profile">
                        <h3>Roberto C. Chiteta <span>Investment Analyst.</span></h3>
                        <p>We engage young people in a constructive manner enabling their initiatives and
                            build their ideas, develop prototype, test and develop products that help reduce
                            the problems and challenges that most faced in development sector.</p>
--}}{{--                        <img src="img/sign.png" alt="sign">--}}{{--
                    </div>
                </div>
                <div class="col-md-6 col-lg-8 xs-padding">
                    <div class=" row">
                        <div class="col-md-12 col-lg-6">
                            <div class="image-placeholder" style="background-image: url({{asset('img/history.jpg')}});height: 250px;margin: 10px 0;"></div>
--}}{{--                            <img src="img/history.jpg" alt="about-thumb">--}}{{--
                            <h3>Our Vision</h3>
                            <p>A better future and right livelihood for
                                families and individuals in our villages and
                                self-sustainable communities.</p>
                            <a href="#" class="default-btn">Read More</a>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="image-placeholder" style="background-image: url({{asset('img/mission.jpg')}});height: 250px;margin: 10px 0;"></div>
--}}{{--                            <img src="img/mission.jpg" alt="about-thumb">--}}{{--
                            <h3>Our Mission</h3>
                            <p>Our mission is to improve the quality of life
                                of the local communities through sustainable local development initiatives in Zambia, Angola and other international Communities.</p>
                            <a href="#" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Causes Section -->--}}

    {{--<section class="campaigns-section bd-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 xs-padding">
                    <div class="campaigns-wrap">
                        <h4>Featured Campaigns</h4>
                        <h2>Featured project to built a School.</h2>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">35%</span></div>
                        </div>
                        <div class="donation-box">
                            <h3><i class="ti-bar-chart"></i>Goal: $450000</h3>
                            <h3><i class="ti-thumb-up"></i>Raised: $55000</h3>
                        </div>
                        <a href="#" class="default-btn">Donate Now</a>
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="video-wrap">
                        <img src="img/video.jpg" alt="video">
                        <div class="play">
                            <a class="img-popup" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=_IlLwfC2dNc"><i class="ti-control-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Featured Campaigns Section -->--}}

    {{--<section class="team-section bg-grey bd-bottom circle shape padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Meet Out Volunteers</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div><!-- /Section Heading -->
            <div class="team-wrapper row">
                <div class="col-lg-6 sm-padding">
                    <div class="team-wrap row">
                        <div class="col-md-6">
                            <div class="team-details">
                                <img src="img/team-1.jpg" alt="team">
                                <div class="hover">
                                    <h3>Jonathan Smith <span>Communicator</span></h3>
                                </div>
                            </div>
                        </div><!-- /Team-1 -->
                        <div class="col-md-6">
                            <div class="team-details">
                                <img src="img/team-2.jpg" alt="team">
                                <div class="hover">
                                    <h3>Angelina Rose <span>Certified Reader</span></h3>
                                </div>
                            </div>
                        </div><!-- /Team-2 -->
                        <div class="col-md-6">
                            <div class="team-details">
                                <img src="img/team-3.jpg" alt="team">
                                <div class="hover">
                                    <h3>Taylor Swift <span>Event Creator</span></h3>
                                </div>
                            </div>
                        </div><!-- /Team-3 -->
                        <div class="col-md-6">
                            <div class="team-details">
                                <img src="img/team-4.jpg" alt="team">
                                <div class="hover">
                                    <h3>Michel Brown <span>Internet Specialist</span></h3>
                                </div>
                            </div>
                        </div><!-- /Team-4 -->
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="team-content">
                        <h2>Become a Volunteer?</h2>
                        <h3>Join your hand with us for a better life and beautiful future.</h3>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <ul class="check-list">
                            <li><i class="fa fa-check"></i>We are friendly to each other.</li>
                            <li><i class="fa fa-check"></i>If you join with us,We will give you free training.</li>
                            <li><i class="fa fa-check"></i>Its an opportunity to help poor children.</li>
                            <li><i class="fa fa-check"></i>No goal requirements.</li>
                            <li><i class="fa fa-check"></i>Joining is tottaly free. We dont need any money from you.</li>
                        </ul>
                        <a href="#" class="default-btn">Join With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Team Section -->

    <section id="counter" class="counter-section">
        <div class="container">
            <ul class="row counters">
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-money"></i>
                        <h3 class="counter">85389</h3>
                        <h4 class="text-white">Money Donated</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-face-smile"></i>
                        <h3 class="counter">10693</h3>
                        <h4 class="text-white">Volunteer Around The World</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-user"></i>
                        <h3 class="counter">50177</h3>
                        <h4 class="text-white">People Impacted</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-comments"></i>
                        <h3 class="counter">669</h3>
                        <h4 class="text-white">Positive Feedbacks</h4>
                    </div>
                </li>
            </ul>
        </div>
    </section><!-- Counter Section -->

    <section class="events-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Upcoming Events</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div><!-- /Section Heading -->
            <div id="event-carousel" class="events-wrap owl-Carousel">
                <div class="events-item">
                    <div class="event-thumb">
                        <img src="img/events-1.jpg" alt="events">
                    </div>
                    <div class="event-details">
                        <h3>Let's talk about the poor children.</h3>
                        <div class="event-info">
                            <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                            <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                        </div>
                        <p>Help today because tomorrow you may be the one who needs more helping!</p>
                        <a href="#" class="default-btn">Read More</a>
                    </div>
                </div><!-- Event-1 -->
                <div class="events-item">
                    <div class="event-thumb">
                        <img src="img/events-2.jpg" alt="events">
                    </div>
                    <div class="event-details">
                        <h3>Insure clean water to everyone in Africa.</h3>
                        <div class="event-info">
                            <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                            <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                        </div>
                        <p>Help today because tomorrow you may be the one who needs more helping!</p>
                        <a href="#" class="default-btn">Read More</a>
                    </div>
                </div><!-- Event-2 -->
                <div class="events-item">
                    <div class="event-thumb">
                        <img src="img/events-3.jpg" alt="events">
                    </div>
                    <div class="event-details">
                        <h3>Nepal Earthquake Clean Water Initiative.</h3>
                        <div class="event-info">
                            <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                            <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                        </div>
                        <p>Help today because tomorrow you may be the one who needs more helping!</p>
                        <a href="#" class="default-btn">Read More</a>
                    </div>
                </div><!-- Event-3 -->
            </div>
        </div>
    </section><!-- Events Section -->

    <section class="testimonial-section bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>What People Say</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div><!-- /Section Heading -->
            <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
                <div class="testimonial-item">
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                    <div class="testi-footer">
                        <img src="img/team-1.jpg" alt="profile">
                        <h4>Jonathan Smith <span>Marketer</span></h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                    <div class="testi-footer">
                        <img src="img/team-2.jpg" alt="profile">
                        <h4>Angelina Rose <span>Designer</span></h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                    <div class="testi-footer">
                        <img src="img/team-3.jpg" alt="profile">
                        <h4>Taylor Swift <span>Developer</span></h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                    <div class="testi-footer">
                        <img src="img/team-4.jpg" alt="profile">
                        <h4>Michel Brown <span>Programer</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Testimonial Section -->

    -->--}}

</x-guest-layout>
