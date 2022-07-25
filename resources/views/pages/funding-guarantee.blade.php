<x-guest-layout>
    <x-slot name="title">
        Funding Guarantee
    </x-slot>

   <div class="pager-header" style="background-image: url({{asset($page->photo)}})">
        <div class="container">
            <div class="page-content">
                <h2>Funding Guarantee</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Funding Guarantee</li>
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
            <div style="max-width: 770px; text-align: center; margin: auto" class="section-heading text-center mb-40">
{{--                <h2>Latest News</h2>--}}


                <p style="font-weight: 600;">Should RSDF get into partnership under the funding by guarantee mechanism, the
                    Organisation will engage the following principles for this type of funding other than
                    the charitable funding mechanism; The following shall apply;</p>
                <span class="heading-border"></span>
            </div><!-- /Section Heading -->
            <div class="activity">
                <div class="number">1.</div>
                <div class="content">RSDF proposes that, beside the half equity possession of the multi-million dollar projects, the funding provided by financier are totally refunded once production starts.</div>
            </div>
            <div class="activity">
                <div class="number">2.</div>
                <div class="content"> To confirm compensation, the equity fund owners can guarantee a price recovery arranged at the first stage
                    of production to confirm compensation.</div>
            </div>
            <div class="activity">
                <div class="number">3.</div>
                <div class="content">Furthermore, the financier/Donors, Investors, Funders will be offered equity ownership of 50% in exchange
                    for providing funding for the projects.</div>
            </div>
        </div>
    </section>




</x-guest-layout>
