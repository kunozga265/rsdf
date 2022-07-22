<x-guest-layout>
    <div class="pager-header" style="background-image: url({{asset($page->photo)}})">
        <div class="container">
            <div class="page-content">
                <h2>NGO - Management</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Our Activities</li>
                </ol>
            </div>
        </div>
             @auth
        <!-- Button trigger modal -->
        <button type="button" class="error-btn edit-photo" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="ti-pencil"></i> Photo
        </button>
        @endauth
    </div><!-- /Page Header -->
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
                        <img src="{{asset('images/roberto-chiteta.jpeg')}}" alt="team">
                        <div class="hover">
                            <h3>Dr. Roberto C. Chiteta <span>Chair of the board</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="team-details">
                        <img src="{{asset('images/henry-musenge.jpeg')}}" alt="team">
                        <div class="hover">
                            <h3>Dr. Henry M. Musenge<span>Vice Chairperson</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="team-details">
                        <img src="{{asset('images/mike-lilema.jpeg')}}" alt="team">
                        <div class="hover">
                            <h3>Mike Lilema<span>President</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="team-details">
                        <img src="{{asset('images/arua-goodluck.jpeg')}}" alt="team">
                        <div class="hover">
                            <h3>Arua Goodluck<span>Country Director - Nigeria</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="team-details">
                        <img src="{{asset('images/joseph-chilila.jpeg')}}" alt="team">
                        <div class="hover">
                            <h3>Joseph Kaumba Chilila<span>Country Director - Zambia</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="team-details">
                        <img src="{{asset('images/harriet-nyamasambu.jpg')}}" alt="team">
                        <div class="hover">
                            <h3>Harriet Daisy Nyamasanbu<span>National Program Director</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="team-details">
                        <img src="{{asset('images/hope-jere.jpg')}}" alt="team">
                        <div class="hover">
                            <h3>Hope Jere<span>Education Advisor</span></h3>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" style="padding: 40px 20px">
            <img width="100%" src="{{asset('images/org-chart.jpg')}}" alt="">
        </div>
    </section>
</x-guest-layout>
