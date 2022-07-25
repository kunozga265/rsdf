<x-guest-layout>
    @push('scripts')
        <script type = "text/javascript">


            document.getElementById('spinner').style.display="none"
            // Form validation
            function validate() {
                document.getElementById('spinner').style.display="block"
                document.getElementById('submit').style.display="none"

                return true;
            }
        </script>
    @endpush

    <x-slot name="title">
        Contact Info
    </x-slot>

    <div class="pager-header" style="background-image: url({{asset($page->photo)}})">
        <div class="container">
            <div class="page-content">
                <h2>Contact Info</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Contact Info</li>
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


    <section class=" padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 xs-padding">
                    <div class="contact-info">
                        <h3>Get in touch</h3>
                        <div style="margin-bottom: 16px">
                            If you would like to apply to our organisation, email the following;
                            <div style="font-weight: 600"><i class="ti-email"></i> hr@rosdfoundation.org</div>
                        </div>
                        <div>If you would like to enquire about anything, contact the following emails;
                            <div style="font-weight: 600"><i class="ti-email"></i> support@rosdfoundation.org</div>
                            <div style="font-weight: 600"><i class="ti-email"></i> contact@rosdfoundation.org </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="contact-form">
                        <h3>Drop us an email</h3>
                        <p>You can directly email us through the following form.</p>
                        <form action="{{route('contact-us')}}" method="post" class="form-horizontal" onsubmit = "return(validate());">
                            @csrf
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <img id="spinner" src="{{asset('images/spinner.gif')}}" alt="">
                                    <button  id="submit" class="default-btn" type="submit">Send Message</button>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Contact Section -->
</x-guest-layout>
