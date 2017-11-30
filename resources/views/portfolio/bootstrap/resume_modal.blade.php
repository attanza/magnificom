<div class="modal fade" id="resume" tabindex="-1" role="dialog" aria-labelledby="resumeModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-secondary">
      <div class="modal-header">
        <h5 class="modal-title" id="resumeModal">Resume Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('portfolio.sendResume') }}" method="POST">
        {{csrf_field()}}
        <div class="modal-body">
          <p>
            Kindly fill the form and I will send my resume to your email
          </p>
          <div class="form-group">
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Name"
                name="name" value="{{ old('name') }}" autofocus>
                @if (Session::has('errors'))
                <span class="text-light">
                  {{$errors->first('name')}}
                </span>
                @endif
              </div>
              <div class="col">
                <input type="email" class="form-control" placeholder="Email"
                name="email" value="{{ old('email') }}">
                @if (Session::has('errors'))
                <span class="text-light">
                  {{$errors->first('email')}}
                </span>
                @endif
              </div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Subject" 
            name="subject" value="{{ old('subject') }}">
            @if (Session::has('errors'))
            <span class="text-light">
              {{$errors->first('subject')}}
            </span>
            @endif
          </div>
          <div class="form-group">
            <textarea class="form-control" placeholder="Message" rows="4" 
            name="message" value="{{ old('message') }}"></textarea>
            @if (Session::has('errors'))
            <span class="text-light">
              {{$errors->first('message')}}
            </span>
            @endif
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-warning">Send Resume</button>
        </div>
      </form>
    </div>
  </div>
</div>