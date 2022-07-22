<x-guest-layout>

    <div class="pager-header" style="background-image: url({{asset($page->photo)}})">
        <div class="container">
            <div class="page-content">
                <h2>RSDF Region Office</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">RSDF Region Office</li>
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

    <section>
        <div class="container" style="padding: 40px 20px">
            <img width="100%" src="{{asset('images/rsdf-region-office.jpg')}}" alt="">
        </div>
    </section>

    <section class=" padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 xs-padding">
                    <div class="promo-content">
                        <h3>RSDF Africa Region</h3>
                        <p>Shall be run by the RSDF President who will report to the Region Advisory Council (RAC), The RSDF will serve as Chair with 7 Hub Directors as member’s to RAC. RAC shall decide the frequency of their meetings.</p>
                    </div>
                </div>                \
                <div class="col-sm-12 xs-padding">
                    <div class="promo-content">
                        <h3>Africa Hubs</h3>
                        <p>Shall be run by 7 Hub Directors who will each report to their Hub Advisory Committees (HAC), The RSDF Vice Chair will serve as HAC Chair to each of the 7 HACs, Country Directors shall serve as members to the their respective HACs, Ex Officials to each HAC shall be the RSDF Chair and President. HAC shall decide the frequency of their meetings.</p>
                    </div>
                </div>
                <div class="col-sm-12 xs-padding">
                    <div class="promo-content">
                        <h3>Country Projects</h3>
                        <p>Shall be run by a Country Director who will be reporting to a National Board (NB) in each Country, an independent National Board Chair shall be appointed with members selected from different Hubs/disciplines, The RSDF Chair and President shall serve as ex officials to the National Boards (NB). The NB shall decide frequency of their meetings.
                            The RSDF Chair shall give policy direction of the Organization and the RSDF President shall provide Strategic Leadership of the Organization to each Region Hub.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
