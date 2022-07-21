<x-guest-layout>
    <div class="pager-header" style="background-image: url({{asset('img/page-header-bg.jpg')}})">
        <div class="container">
            <div class="page-content">
                <h2>News Section</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('news')}}">News</a></li>
                    <li class="breadcrumb-item active">Standard single blog post with image.</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="blog-section bg-grey padding">
        <div class="container">
            <div class="blog-items single-post ">
                <img src="{{asset('img/post-1.jpg')}}" alt="blog post">
                <h2>Standard single blog post with image.</h2>
                <div class="meta-info">
                                <span>
                                    <i class="ti-user"></i> Written By <a href="#">David Cameroon</a>
                                </span>
                    <span>
                                    <i class="ti-bookmark"></i> Tagged As <a href="#">Wordpress Development</a>
                                </span>
                </div><!-- Meta Info -->
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only centuries, but also the electronic more typesetting, remaining essentially unchanged.Nullam id dolor ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.This time is more Cras justo dapibus ac facilisis not only centuriemen, business type but also the in typesetting industry.</p>

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Nullam id dolor ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                <div class="share-wrap">
                    <h4>Share This Article</h4>
                    <ul class="share-icon">
                        <li><a href="#"><i class="ti-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="ti-twitter"></i> Twitter</a></li>
                        <li><a href="#"><i class="ti-google"></i> Google+</a></li>
                        <li><a href="#"><i class="ti-instagram"></i> Instagram</a></li>
                        <li><a href="#"><i class="ti-linkedin"></i> Linkedin</a></li>
                    </ul>
                </div><!-- Share Wrap -->

            </div>
        </div>
    </section><!-- /Blog Section -->




</x-guest-layout>
