<x-guest-layout>
    @push('scripts')
        <script type = "text/javascript">
            // document.getElementById('copied').style.display="none"

            // Copy to clipboard
            function copySubscribers() {
                var subscribers={!! json_encode($allSubscribers->toArray()) !!};
                var subscribersFormatted=[];

                for (let x in subscribers){
                    subscribersFormatted.push(subscribers[x].email + ";")
                }

                document.getElementById('emails').value=subscribersFormatted.join(',')

                console.log(subscribersFormatted.join(','));
                // document.getElementById('copied').style.display="inline"

                /*if (!navigator.clipboard) {
                    fallbackCopyTextToClipboard(text);
                    return;
                }
                navigator.clipboard.writeText(text).then(function() {
                    console.log('Async: Copying to clipboard was successful!');
                }, function(err) {
                    console.error('Async: Could not copy text: ', err);
                });*/
            }
        </script>
    @endpush

    <x-slot name="title">
           Subscribers
   </x-slot>

    <div class="pager-header" style="background-image: url({{asset($page->photo)}})">
        <div class="container">
            <div class="page-content">
                <h2>Subscribers</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Subscribers</li>
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

            <div style="text-align: right">
{{--               <span id="copied">Copied!</span>--}}
                <span>
                    <button type="button"  class="secondary-btn" data-toggle="modal" data-target="#emailsModal" onclick="copySubscribers()"><i class="ti-clipboard"></i> Copy Emails</button>
                </span>
            </div>
           <table class="subscribers">
               <thead>
               <tr>
                   <th>#</th>
                   <th>Name</th>
                   <th>Email</th>
               </tr>
               </thead>
               <tbody>
               @foreach($subscribers as $subscriber)
                   <tr>
                       <td>{{$loop->index + $subscribers->firstItem()}}</td>
                       <td>{{$subscriber->name}}</td>
                       <td>{{$subscriber->email}}</td>
                   </tr>
               @endforeach
               </tbody>
           </table>

            {{ $subscribers->links() }}
        </div>
    </section><!-- /Contact Section -->

        <!-- Modal -->
        <div class="modal fade" id="emailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Copy Emails</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <textarea style="width: 100%" name="" id="emails" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>
        </div>
</x-guest-layout>
