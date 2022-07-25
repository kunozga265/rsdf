<x-guest-layout>
    <x-slot name="title">
        Partnerships
    </x-slot>

    <div class="pager-header" style="background-image: url({{asset($page->photo)}})">
        <div class="container">
            <div class="page-content">
                <h2>Collaborative Partnerships</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Partnerships</li>
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
            <div class="activity">
                <div class="number">1.</div>
                <div class="content">The organization partners with the
                    Constituency Aids Control Council to
                    facilitate the sharing of HIV and AIDS
                    information to the community.</div>
            </div>
            <div class="activity">
                <div class="number">2.</div>
                <div class="content">The organization also partners with
                    the District Youth Affairs and Sports
                    Office- enhancement of youth sports
                    Centre at Lusaka - Zambia and Luanda
                    - Angola.</div>
            </div>
            <div class="activity">
                <div class="number">3.</div>
                <div class="content">District Children Department on
                    guidance and development of safe child
                    environment.</div>
            </div>
            <div class="activity">
                <div class="number">4.</div>
                <div class="content">The organization also works with Volunteer Action for Change- ZAMBIA AND ANGOLA
                    that deploys international volunteers to RSDF COMMUNITIES projects.</div>
            </div>
            <div class="activity">
                <div class="number">5.</div>
                <div class="content">YECC-National Organization of Volunteers and Charity Workers in Zambia, Angola and
                    international communities - Through human right education and monitoring of human right
                    abuses in the community.</div>
            </div>
            <div class="activity">
                <div class="number">6.</div>
                <div class="content">Ministry of Social Services- Through Social Development approaches in Zambia, Angola and
                    sub-countries.</div>
            </div>
            <div class="activity">
                <div class="number">7.</div>
                <div class="content">Digital Opportunity Trust (D.O.T) ZAMBIA AND ANGOLA- training youths in Information
                    and Communication Technology & entrepreneurship.</div>
            </div>
            <div class="activity">
                <div class="number">8.</div>
                <div class="content">Monitoring, supervision, capacity building trainings to the revolving loan funded groups in
                    Zambia, Angola and international communities.</div>
            </div>
            <div class="activity">
                <div class="number">9.</div>
                <div class="content">Service Civil International (SCI) Mobilization and Deployment of international volunteers.</div>
            </div>
            <div class="activity">
                <div class="number">10.</div>
                <div class="content">YECC- Youth exchange and Angozamaric+ projects.</div>
            </div>
        </div>
    </section>




</x-guest-layout>
