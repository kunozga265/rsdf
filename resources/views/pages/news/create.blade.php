<x-guest-layout>
    @push('scripts')
        <script type="text/javascript">
            CKEDITOR.replace('body', {
                {{--filebrowserUploadUrl: "{{route('blogs.image-upload', ['_token' => csrf_token() ])}}",--}}
                filebrowserUploadMethod: 'form',
                toolbar:[
                    { name: 'styles', items: [ 'FontSize' ] },
                    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline',] },
                    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'] },
                    { name: 'links', items: [ 'Link', 'Unlink'] },
                    { name: 'insert', items: [ 'Table', 'HorizontalRule'] },
                    { name: 'tools', items: [ 'Maximize'] },
                ]
            });
        </script>
    @endpush

        <x-slot name="title">
            News - Create
        </x-slot>

        <div class="pager-header" style="background-image: url({{asset($page->photo)}})">
        <div class="container">
            <div class="page-content">
                <h2>Create News Article</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('news')}}">News</a></li>
                    <li class="breadcrumb-item active">New</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="contact-section bg-grey padding">
        <div class="container ">
            <form id="" class="form-wrap material" method="post" action="{{route('news.store')}}" enctype="multipart/form-data">

                @csrf

                <div class="row">
                    <!-- Cover Photo -->
                    <div class="col-md-12 material__form-group form-group">
                        <label for="photo">Cover Photo</label>
                        <input type="file" name="photo" id="photo" class="form-control-file material__input pt-8" required>
                    </div>

                    <!-- Title -->
                    <div class="col-md-12 material__form-group form-group">
                        <span>Title</span>
                        <input type="text" name="title" id="title" class="form-control" required="">
                        <span class="material__underline"></span>
                    </div>

                    <!-- Description -->
                    <div class="col-md-12 material__form-group form-group">
                        <span>Description</span>
                        <input type="text" name="description" id="description" class="form-control material__input" required="">
                        <span class="material__underline"></span>
                    </div>


                    <!-- Body -->
                    <div class="col-md-12 material__form-group form-group">
                        <span>Body</span>
                        <textarea name="body" rows="7" class="form-control material__input" required=""></textarea>
                        <span class="material__underline"></span>
                    </div>
                </div>


                <input type="submit" class="secondary-btn" value="Create" id="submit-message">
                <div id="msg" class="message"></div>
            </form>
        </div>
    </section>

</x-guest-layout>
