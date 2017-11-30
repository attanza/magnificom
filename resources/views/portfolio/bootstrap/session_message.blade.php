@if (Session::has('errors'))
    @if (Session::has('flag'))
        @section('scripts')
            <script>
                $('#resume').modal('show')
            </script>
        @stop
    @endif
    
@endif

@if (Session::has('success'))
    <div class="fixed-bottom">
        <div class="container">
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                {{Session::get('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
@endif
