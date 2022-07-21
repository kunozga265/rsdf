<x-guest-layout>
    <div class="pager-header" style="background-image: url({{asset('img/page-header-bg.jpg')}})">
        <div class="container">
            <div class="page-content">
                <h2>Contact Info</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Contact Info</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

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
                            <div style="font-weight: 600"><i class="ti-email"></i> support@rosdfoundation.or</div>
                            <div style="font-weight: 600"><i class="ti-email"></i> contact@rosdfoundation.org </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="contact-form">
                        <h3>Drop us an email</h3>
                        <p>You can directly email us through the following form.</p>
                        <form action="contact.php" method="post" id="ajax_form" class="form-horizontal">
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
                                    <button id="submit" class="default-btn" type="submit">Send Message</button>
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
