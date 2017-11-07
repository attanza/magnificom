@extends('portfolio.portfolio_master')
@section('content')
<section class="hero is-dark is-fullheight bg-home" id="home">
  <div class="hero-body">
    <div class="container">
      <div class="columns">
        <div class="column is-half">
          <figure class="image is-128x128" style="margin-bottom: -50px;">
            <img src="{{ asset('images/portfolio/dani.png') }}">
          </figure>
          <p class="content is-size-5-desktop is-size-7-mobile">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a class="button is-warning is-outlined">Download My Resume</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section bg-knowledge" id="knowledge">
  <div class="column-spacer is-hidden-mobile"></div>
  <div class="container">
    <div class="columns">
      <div class="column is-half is-offset-one-quarter" style="text-align: center;">
        <h1 class="is-size-3-desktop is-size-6-mobile has-text-warning">MY KNOWLEDGE IN SOFTWARES</h1>
      </div>
    </div>
    @include('portfolio.knowledge')
  </div>
</section>
<section class="section bg-experience" id="experience">
  <div class="column-spacer is-hidden-mobile"></div>
  <div class="container">
    <h1 class="is-size-3-desktop is-size-5-mobile has-text-warning has-text-centered animated zoomInUp">MY WORK EXPERIENCE</h1>
    @include('portfolio.experience')
    @include('portfolio.experience_mobile')
  </div>
</section>
<section class="section bg-work" id="work">
  <div class="column-spacer is-hidden-mobile"></div>
  <div class="container">
    <div class="columns">
      <div class="column is-half is-offset-one-quarter">
        <h1 class="is-size-3-desktop is-size-5-mobile has-text-warning has-text-centered">MY LATEST WORK</h1>
      </div>
    </div>
    @include('portfolio.work')

  </div>
</section>
<section class="section bg-contact" id="contact">
  <div class="column-spacer is-hidden-mobile"></div>
  <div class="container">
    <div class="box contact">
      <div class="columns">
        <div class="column content">
          <h3 class="is-size-3 has-text-warning">CONTACT</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <p>
            dani.lesmiadi@gmail.com
          </p>
        </div>
        <div class="column">
          <div class="field">
            <label class="label">Name</label>
            <div class="control">
              <input class="input" type="text" placeholder="Text input">
            </div>
          </div>

          <div class="field">
            <label class="label">Email</label>
            <div class="control">
              <input class="input" type="email" placeholder="Email input" value="hello@">
            </div>
          </div>

          <div class="field">
            <label class="label">Subject</label>
            <div class="control">
              <input class="input" type="text" placeholder="Text input">
            </div>
          </div>

          <div class="field">
            <label class="label">Message</label>
            <div class="control">
              <textarea class="textarea" placeholder="Textarea"></textarea>
            </div>
          </div>

          <div class="field">
            <div class="control">
              <button class="button is-outlined is-warning is-fullwidth">Submit</button>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>
<footer class="footer">
  <div class="container is-fluid">
    <div class="has-text-right">
      <p>
        Portfolio of Dani Lesmiadi {{date('Y')}}
      </p>
      <p>Contact me at 
        <a href="mailto:dani.lesmiadi@gmail.com" target="_top">dani.lesmiadi@gmail.com</a>
      </p>
    </div>
  </div>
</footer>
@stop