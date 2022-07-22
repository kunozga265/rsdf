<x-guest-layout>
    <div class="pager-header" style="background-image: url({{asset($page->photo)}})">
        <div class="container">
            <div class="page-content">
                <h2>Future Plans</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Future Plans</li>
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
            <div style="max-width: 770px; text-align: center; margin: auto"  class="section-heading text-center mb-40">
                {{--                <h2>Latest News</h2>--}}


                <p style="font-weight: 600">Construction of RSDF Community Resource Centers which will provide the project’s
                    target youth population with structured career development information, skills and
                    opportunities to get jobs, start their own businesses or transition into higher education.</p>
                <p>It will as well serve as RSDF offices and host place for RSDF volunteers (Under construction, not completed due insufficient financial support)</p>
                <span class="heading-border"></span>
            </div><!-- /Section Heading -->
            <div class="activity">
                <div class="number">1.</div>
                <div class="content">Mobilization of local farmers into Moringa farming and production.</div>
            </div>
            <div class="activity">
                <div class="number">2.</div>
                <div class="content">  Establishment of permaculture and ecological farming demonstration plots for exchange learning.</div>
            </div>
            <div class="activity">
                <div class="number">3.</div>
                <div class="content">Establishment of a community microfinance institution i.e. a Community Bank that
                    will facilitate savings and loaning to poor people of the community.</div>
            </div>
            <div class="activity">
                <div class="number">4.</div>
                <div class="content">Establishment
                    of a Voluntary
                    Counseling and
                    Testing Centre
                    (VCT) to help
                    Youths and
                    Women know
                    their health
                    status.</div>
            </div>
        </div>
    </section>




</x-guest-layout>
