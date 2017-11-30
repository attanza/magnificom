<!-- Home section -->
<header id="home">
  <div class="container d-flex h-100 py-5">
    <div class="row align-self-center">
      <div class="col-md-6">
        <div class="home-showcase">
          <img src="{{ asset('images/portfolio/dani.png') }}" class="img-fluid" alt="dani">
          <p class="lead mt-3">
            Over the last five years I have continuously striven to gain and improve my knowledge throughout all aspects of the web design and development. I have superb algorithmic and programming skills and appreciate excellent design along with usability and interactivity. I enjoyed overcoming problems and working to deadlines for clients. Working as a team excited me as we would often bounce ideas off each other, but I also enjoy working as an individual. <br>
            Please scroll to other page to see my spesification or click on the "Download My Resume" bellow for more detail.
          </p>
          <button type="button" class="btn btn-outline-warning btn-lg mt-3"
          data-toggle="modal" data-target="#resume">
            Download My Resume
          </button>
        </div>
      </div>
    </div>
  </div>
</header>
@include('portfolio.bootstrap.resume_modal')
