<x-guest-layout>
    <x-slot name="title">
        Our Activities
    </x-slot>

    <div class="pager-header" style="background-image: url({{asset($page->photo)}})">
        <div class="container">
            <div class="page-content">
                <h2>Our Activities</h2>
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

    <section class=" bg-grey bd-bottom padding">
        <div class="container">
            <div class="activity">
                <div class="number">1.</div>
                <div class="content">Mobilizing community groups in a service network of savings and loans for community based micro-finance.</div>
            </div>
            <div class="activity">
                <div class="number">2.</div>
                <div class="content">HIV & AIDS, Malaria and TB awareness, counseling, support innovative programs in orphans and vulnerable children and home based health care (HBC) for the HIV affected.</div>
            </div>
            <div class="activity">
                <div class="number">3.</div>
                <div class="content">Free computer training to orphans, vulnerable youths and women in the community.</div>
            </div>
            <div class="activity">
                <div class="number">4.</div>
                <div class="content">A community Primary school, Communities Education Centre for orphans and vulnerable children in the communities.</div>
            </div>
            <div class="activity">
                <div class="number">5.</div>
                <div class="content">A rehabilitation program for street children to support their basic needs and provide them with community-based education.</div>
            </div>
            <div class="activity">
                <div class="number">6.</div>
                <div class="content">Educational support initiative to orphans, street children of Zambia and Angola and vulnerable children.</div>
            </div>
            <div class="activity">
                <div class="number">7.</div>
                <div class="content">A capacity-building structure which involves educational training programs in leadership, group management, and financial skills.</div>
            </div>
            <div class="activity">
                <div class="number">8.</div>
                <div class="content"> A volunteer program;
                    deploying of international
                    volunteers and place villagers in groups charged with
                    specific community tasks
                    in relation to their skills,
                    strengths, and interests.</div>
            </div>
            <div class="activity">
                <div class="number">9.</div>
                <div class="content">Alternative to violence
                    peace trainings (AVP) for
                    the communities’ members.</div>
            </div>
            <div class="activity">
                <div class="number">10.</div>
                <div class="content">Eco-tourism and environmental management.</div>
            </div>
            <div class="activity">
                <div class="number">11.</div>
                <div class="content">Programs for cultural exchange.</div>
            </div>
            <div class="activity">
                <div class="number">12.</div>
                <div class="content">Provisional computer
                    services for the community,
                    such as typesetting, printing, photocopy services,
                    internet services.</div>
            </div>
            <div class="activity">
                <div class="number">13.</div>
                <div class="content">Youth empowerment activities such as sports, theatre, career development and drug abuse training, as well as building overall awareness and engagement through youth group projects.</div>
            </div>
            <div class="activity">
                <div class="number">14.</div>
                <div class="content">Community library for reading, borrowing and exchange of ideas.</div>
            </div>
        </div>
    </section>




</x-guest-layout>
