<x-guest-layout>
    <div class="pager-header" style="background-image: url({{asset($page->photo)}})">
        <div class="container">
            <div class="page-content">
                <h2>News Section</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">News</li>
                </ol>
                @auth
                <a class="default-btn" href="{{route('news.create')}}">Create</a>
                @endauth
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

    <section class="blog-section bg-grey padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 xs-padding">
                    <div class="blog-items grid-list row">

                        @foreach($news as $article)
                        <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <div class="image-placeholder" style="background-image: url({{asset($article->photo)}}); height: 230px"></div>
                                <div class="blog-content">
                                    <span class="date"><i class="fa fa-clock-o"></i> {{date("F, d.Y",$article->created_at->getTimestamp())}}</span>
                                    <h3><a href="{{route('news.show',['slug'=>$article->slug])}}">{{$article->title}}</a></h3>

                                    <p>{{$article->description}}</p>
                                    <a href="{{route('news.show',['slug'=>$article->slug])}}" class="post-meta">Read More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach


                        {{--
                        <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <div class="image-placeholder" style="background-image: url({{asset('images/roberto-chiteta.jpg')}}); height: 230px"></div>
                                --}}{{--                                <img src="img/home-blog-3.jpg" alt="blog post">--}}{{--
                                <div class="blog-content">
                                    <span class="date"><i class="fa fa-clock-o"></i> July 22.2022</span>
                                    <h3><a href="#">Biography of the founder</a></h3>
                                    <p>A brief description of our founder and an overview of their skills, education background and experience.</p>
                                    <a href="{{route('news.biography-of-the-founder')}}" class="post-meta">Read More</a>
                                </div>
                            </div>
                        </div><!-- Post 3 -->--}}
                    </div>
                {{--    <ul class="pagination_wrap align-center mt-30">
                        <li><a href="#"><i class="ti-arrow-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="active">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="ti-arrow-right"></i></a></li>
                    </ul><!-- Pagination -->--}}
                    {{$news->links()}}
                </div><!-- Blog Posts -->
            </div>
        </div>
    </section><!-- /Blog Section -->




</x-guest-layout>
