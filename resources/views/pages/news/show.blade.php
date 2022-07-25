<x-guest-layout>
    <x-slot name="title">
        News - {{$news->title}}
    </x-slot>

    <div class="pager-header" style="background-image: url({{asset($page->photo)}})">
        <div class="container">
            <div class="page-content">
                <h2>News Article</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('news')}}">News</a></li>
                    <li class="breadcrumb-item active">{{$news->title}}</li>
                </ol>
            </div>
            @auth
                <form id="delete-news" method="post" action="{{route('news.delete',['slug'=>$news->slug])}}" >
                    @csrf

                    <a class="default-btn" href="{{route('news.edit',['slug'=>$news->slug])}}">Edit</a>
                    <a class="error-btn" href="javascript:{}" onclick="document.getElementById('delete-news').submit();">Delete</a>
                </form>
{{--                <a class="error-btn" href="{{route('news.delete',['slug'=>$news->slug])}}">Delete</a>--}}
            @endauth
        </div>
    </div><!-- /Page Header -->

    <section class="news-section bg-grey padding">
        <div class="container">
            <div class="news-item single-post ">
                <div class="image">
                    <div>
                        <img src="{{asset($news->photo)}}" alt="blog post">
                    </div>
                </div>
                <h2>{{$news->title}}</h2>
                <div class="meta-info">
                    <span class="date"><i class="fa fa-clock-o"></i> {{date("F, d.Y",$news->created_at->getTimestamp())}}</span>
                </div><!-- Meta Info -->

                <div class="body">
                    {!! $news->body !!}
                </div>
                <div class="share-wrap">
                    <h4>Share This Article</h4>
                    <ul class="share-icon">
                       {{-- <li><a href="#"><i class="ti-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="ti-twitter"></i> Twitter</a></li>
                        <li><a href="#"><i class="ti-google"></i> Google+</a></li>
                        <li><a href="#"><i class="ti-instagram"></i> Instagram</a></li>
                        <li><a href="#"><i class="ti-linkedin"></i> Linkedin</a></li>--}}
                        {!! $share !!}
                    </ul>

                </div><!-- Share Wrap -->

            </div>
        </div>
    </section><!-- /Blog Section -->




</x-guest-layout>
