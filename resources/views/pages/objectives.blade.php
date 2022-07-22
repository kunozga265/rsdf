<x-guest-layout>
   <div class="pager-header" style="background-image: url({{asset($page->photo)}})">
        <div class="container">
            <div class="page-content">
                <h2>Objectives</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Our Objectives</li>
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
                <div class="content">Empower the community groups through micro-finance development through saving and loaning.</div>
            </div>
            <div class="activity">
                <div class="number">2.</div>
                <div class="content"> Enhance tape and develop the volunteering spirit by deploying both local and international volunteers to community projects.</div>
            </div>
            <div class="activity">
                <div class="number">3.</div>
                <div class="content">To enhance productive livelihood and well-being for people living with HIV/AIDS and their families.</div>
            </div>
            <div class="activity">
                <div class="number">4.</div>
                <div class="content">To build and create awareness on malaria, TB and other infectious diseases in our communities.</div>
            </div>
            <div class="activity">
                <div class="number">5.</div>
                <div class="content">Support of Orphans and Vulnerable children, street children and open an orphanage for their
                    care and rehabilitation.</div>
            </div>
            <div class="activity">
                <div class="number">6.</div>
                <div class="content">To establish a Community Resource Centre aimed at facilitating learning for orphans, vulnerable children, and street kids, as well as serving as a source of practical community and career development information to local community members and YECC (Young Entrepreneurs Capital Corp) -affiliated groups.</div>
            </div>
            <div class="activity">
                <div class="number">7.</div>
                <div class="content">To engage community group members in an effort to mobilize and enhance income-generating activities and thus improve the communal
                    asset base.</div>
            </div>
            <div class="activity">
                <div class="number">8.</div>
                <div class="content">To assist community groups in initiating enterprises that will increase economic productivity, and lead to poverty-reduction and wealth
                    creation.</div>
            </div>
            <div class="activity">
                <div class="number">9.</div>
                <div class="content">To establish RSDFs own long-term and self-sustaining income-generating projects to
                    support organization’s activities.</div>
            </div>
            <div class="activity">
                <div class="number">10.</div>
                <div class="content">To involve ourselves in the social empowerment of youths (orphans, street children) -
                    through community events such as capacity-building, youth trainings, and social activities which
                    bring our youths and communities together.</div>
            </div>
            <div class="activity">
                <div class="number">11.</div>
                <div class="content">To develop Eco-tourism and environmental management activities in the region as a source of revenue for people in the villages.</div>
            </div>
            <div class="activity">
                <div class="number">12.</div>
                <div class="content">To build reading programs with local community schools designed to help and improve children’s’ reading skills and English performance.
                    We do this by enlisting volunteers and obtaining
                    reading materials from willing partners, donors and
                    volunteers. This will be an ongoing educational project for the long-term future.</div>
            </div>
        </div>
    </section>




</x-guest-layout>
