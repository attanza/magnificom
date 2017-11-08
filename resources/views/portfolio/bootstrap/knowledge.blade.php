<section id="knowledge">
  <div class="container d-none d-xl-block d-lg-block d-md-block">
    <h3 class="text-warning text-center mb-3">MY KNOWLEDGE IN SOFTWARES</h3>
    @foreach ($knowledges as $know)
      <div class="row py-2">
        <div class="col-md-2 knowledge-name">
          <h5 class="text-center">{{$know['name']}}</h5>
        </div>
        <div class="col-md-8 knowledge-progress">
          <div class="progress progress-lg mb-3">
            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: {{$know['skore']}}%" aria-valuenow="{{$know['skore']}}" aria-valuemin="0" aria-valuemax="100">
              <span>{{$know['skore']}}%</span>
            </div>
          </div>
        </div>
        <div class="col-md-2 knowledge-skore">
          <h5 class="text-center">{{$know['skore']}}%</h5>
        </div>
      </div>
    @endforeach
  </div>
  <div class="container d-xl-none d-lg-none d-md-none">
    <h5 class="text-warning text-center mb-3">MY KNOWLEDGE IN SOFTWARES</h5>
    @foreach ($knowledges as $know)
      <div class="row">
        <div class="col-sm-6 knowledge-name">
          <h6>{{$know['name']}}</h6>
        </div>
        <div class="col-sm-6 knowledge-skore">
          <h6 class="text-right">{{$know['skore']}}%</h6>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-sm-12 knowledge-progress">
          <div class="progress progress-sm mb-1">
            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: {{$know['skore']}}%" aria-valuenow="{{$know['skore']}}" aria-valuemin="0" aria-valuemax="100">
              <span>{{$know['skore']}}%</span>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</section>
