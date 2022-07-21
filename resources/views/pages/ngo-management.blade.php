<x-guest-layout>
    <div class="pager-header" style="background-image: url({{asset('img/page-header-bg.jpg')}})">
        <div class="container">
            <div class="page-content">
                <h2>NGO - Management</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Our Activities</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="team-section bg-grey bd-bottom circle shape padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Meet Our Team</h2>
                <span class="heading-border"></span>
<!--                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>-->
            </div><!-- /Section Heading -->
            <div class="team-wrapper row">
                <div class="col-sm-6 col-md-4">
                    <div class="team-details">
                        <img src="{{asset('images/roberto-chiteta.jpg')}}" alt="team">
                        <div class="hover">
                            <h3>Dr. Roberto C. Chiteta <span>Chair of the board</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="team-details">
                        <img src="{{asset('images/henry-musenge.png')}}" alt="team">
                        <div class="hover">
                            <h3>Dr. Henry M. Musenge<span>Vice Chairperson</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="team-details">
                        <img src="{{asset('images/mike-lilema.png')}}" alt="team">
                        <div class="hover">
                            <h3>Mike Lilema<span>President</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="team-details">
                        <img src="{{asset('images/joseph-chilila.png')}}" alt="team">
                        <div class="hover">
                            <h3>Joseph Kaumba Chilila<span>Country Director</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="team-details">
                        <img src="{{asset('images/harriet-nyamasambu.png')}}" alt="team">
                        <div class="hover">
                            <h3>Harriet Daisy Nyamasanbu<span>National Program Director</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="team-details">
                        <img src="{{asset('images/hope-jere.png')}}" alt="team">
                        <div class="hover">
                            <h3>Hope Jere<span>Secretary General</span></h3>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </div>
    </section>

    <section>
        <div style="padding: 40px 20px">
            <img width="100%" src="{{asset('images/org-chart.jpg')}}" alt="">
        </div>
    </section>
</x-guest-layout>
