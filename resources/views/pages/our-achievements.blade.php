<x-guest-layout>
    <x-slot name="title">
        Our Achievements
    </x-slot>

    <div class="pager-header" style="background-image: url({{asset($page->photo)}})">
        <div class="container">
            <div class="page-content">
                <h2>Our Achievements</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Our Achievements</li>
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

    <section class=" bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
{{--                <h2>Latest News</h2>--}}


                <p style="font-weight: 600">RSDF has embarked on a number of projects that have been beneficial
                    to many communities. <br> The following are some of them:</p>
                <span class="heading-border"></span>
            </div><!-- /Section Heading -->
            <div class="activity">
                <div class="number">1.</div>
                <div class="content">RSDF trained 5000 groups with
                    membership capacity of 500 in
                    microfinance and entrepreneurship of which 38 groups funded
                    by EUROPEAN ECONOMIC
                    DEVELOPMENT COUNCIL /
                    KEY FINANCE SICANNOVIA
                    SWEDEN District on revolving
                    loan fund.</div>
            </div>
            <div class="activity">
                <div class="number">2.</div>
                <div class="content"> RSDF managed to empower
                    street children of Luanda through
                    microfinance to establish personal
                    enterprise through microfinance
                    trainings and small business skills
                    development.</div>
            </div>
            <div class="activity">
                <div class="number">3.</div>
                <div class="content">The organization increased participation of the rural grassroots
                    community groups into HIV&
                    AIDS, TB and malaria awareness
                    and management.</div>
            </div>
            <div class="activity">
                <div class="number">4.</div>
                <div class="content">Establishment of the RSDF
                    Communities libraries to serve
                    the poor and vulnerable shall
                    going children in Districts.</div>
            </div>
            <div class="activity">
                <div class="number">5.</div>
                <div class="content">Establishment of the project
                    website that serves as a platform
                    for projects publicity and promotion to the entire world.</div>
            </div>
            <div class="activity">
                <div class="number">6.</div>
                <div class="content">The organization provided free
                    computer lessons to five thousand
                    (5000) orphans and vulnerable
                    Youths in the community. Graduates were awarded certificates.</div>
            </div>
            <div class="activity">
                <div class="number">7.</div>
                <div class="content">Supporting of 500 orphans and
                    vulnerable children to continue
                    with education in High Schools
                    and Polytechnics.</div>
            </div>
            <div class="activity">
                <div class="number">8.</div>
                <div class="content">Training of 600 youths in
                    alternatives to violence (Peace
                    Training).</div>
            </div>
            <div class="activity">
                <div class="number">9.</div>
                <div class="content">Establishment of a Community
                    primary school (RSDF Communities Education Centre) that has
                    a capacity of 100 children.</div>
            </div>
            <div class="activity">
                <div class="number">10.</div>
                <div class="content">RSDF Successfully carried out
                    microfinance social impact survey
                    in September 2021 using 5000
                    community’s microfinance groups
                    (Savings and Loaning groups).</div>
            </div>
            <div class="activity">
                <div class="number">11.</div>
                <div class="content">We acquired a piece of land
                    for construction of RSDF Community Resource Centre’s to
                    create a platform for Community
                    empowerment and life development skills.</div>
            </div>
        </div>
    </section>




</x-guest-layout>
