<x-guest-layout>
    <div class="pager-header" style="background-image: url({{asset('img/page-header-bg.jpg')}})">
        <div class="container">
            <div class="page-content">
                <h2>News Section</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('news')}}">News</a></li>
                    <li class="breadcrumb-item active">Biography of the founder</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="blog-section bg-grey padding">
        <div class="container">
            <div class="blog-items single-post ">
                <img src="{{asset('images/roberto-chiteta.jpg')}}" alt="blog post">
                <h2>Biography of the founder</h2>
              {{--  <div class="meta-info">
                                <span>
                                    <i class="ti-user"></i> Written By <a href="#">David Cameroon</a>
                                </span>
                    <span>
                                    <i class="ti-bookmark"></i> Tagged As <a href="#">Wordpress Development</a>
                                </span>
                </div><!-- Meta Info -->--}}
                <h3>About Me</h3>
                <ul>
                    <li>Ability to work well with others and provide excellent communication skills.</li>
                    <li>Work under pressure in a busy environment and resolve conflicts effectively.</li>
                    <li> Knowledgeable and experienced with Internet resources, social media, and Microsoft Office Applications.</li>
                    <li>Ability to apply technical knowledge.</li>
                    <li>Able to build and maintain relationships with clients and other teams.</li>
                </ul>
                <br>
                <h3>Skills</h3>
                <ul>
                    <li>QuickBooks</li>
                    <li>Microsoft Office</li>
                    <li>Operations</li>
                    <li>Communication Skills</li>
                    <li>Adaptability</li>
                    <li>Active Listening Skills</li>
                    <li>Writing Essays</li>
                    <li>Analytical abilities</li>
                    <li>Mathematics, science, and geological knowledge</li>
                    <li>Writing Research Papers on Criminal Justice</li>
                    <li>Ability to draw basic sketches</li>
                    <li>Ability to apply technical knowledge</li>
                    <li>Project management skills</li>
                    <li>Database Management</li>
                    <li>Web & Tech Savvy</li>
                    <li>Management</li>
                    <li>Customer Service</li>
                    <li>Problem Solving</li>
                    <li>Composing Reports</li>
                    <li>Critical Thinking</li>
                    <li>Producing Presentation Slides</li>
                </ul>

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
