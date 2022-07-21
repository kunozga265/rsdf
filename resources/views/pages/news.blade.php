<x-guest-layout>
    <div class="pager-header" style="background-image: url({{asset('img/page-header-bg.jpg')}})">
        <div class="container">
            <div class="page-content">
                <h2>News Section</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">News</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="blog-section bg-grey padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 xs-padding">
                    <div class="blog-items grid-list row">
                        <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <div class="image-placeholder" style="background-image: url({{asset('images/logo.jpeg')}}); height: 230px"></div>
                                <div class="blog-content">
                                    <span class="date"><i class="fa fa-clock-o"></i> July 22.2022</span>
                                    <h3><a href="#">Formation of the NGO</a></h3>
                                    <p>We engage young people in a constructive
                                        manner enabling their initiatives and build
                                        their ideas, develop prototype, test and develop products that meet the people’s needs
                                        and help reduce the problems and challenges that are faced by most in development
                                        sector.</p>
                                    <a href="{{route('news.formation-of-ngo')}}" class="post-meta">Read More</a>
                                </div>
                            </div>
                        </div><!-- Post 1 -->
                        {{--  <div class="col-md-4 padding-15">
                              <div class="blog-post">
                                  <img src="img/home-blog-2.jpg" alt="blog post">
                                  <div class="blog-content">
                                      <span class="date"><i class="fa fa-clock-o"></i> July 22.2022</span>
                                      <h3><a href="#">Funding for the NGO</a></h3>
                                      <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                                      <a href="#" class="post-meta">Read More</a>
                                  </div>
                              </div>
                          </div><!-- Post 2 -->--}}
                        <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <div class="image-placeholder" style="background-image: url({{asset('images/roberto-chiteta.jpg')}}); height: 230px"></div>
                                {{--                                <img src="img/home-blog-3.jpg" alt="blog post">--}}
                                <div class="blog-content">
                                    <span class="date"><i class="fa fa-clock-o"></i> July 22.2022</span>
                                    <h3><a href="#">Biography of the founder</a></h3>
                                    <p>A brief description of our founder and an overview of their skills, education background and experience.</p>
                                    <a href="{{route('news.biography-of-the-founder')}}" class="post-meta">Read More</a>
                                </div>
                            </div>
                        </div><!-- Post 3 -->
                    </div>
{{--                    <ul class="pagination_wrap align-center mt-30">--}}
{{--                        <li><a href="#"><i class="ti-arrow-left"></i></a></li>--}}
{{--                        <li><a href="#">1</a></li>--}}
{{--                        <li><a href="#" class="active">2</a></li>--}}
{{--                        <li><a href="#">3</a></li>--}}
{{--                        <li><a href="#"><i class="ti-arrow-right"></i></a></li>--}}
{{--                    </ul><!-- Pagination -->--}}
                </div><!-- Blog Posts -->
            </div>
        </div>
    </section><!-- /Blog Section -->




</x-guest-layout>
