@extends('layouts.master')
@section('body')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Edit Profile</h2>
        <ol>
          <li><a href="#">Home</a></li>
          <li>Profile</li>
          <li>Edit</li>
        </ol>
      </div>

    </div>
  </section>
  <section id="about" class="about section-bg about">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>About</h2>
        <h3>Find Out More <span>About Us</span></h3>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
      </div>

      <div class="row">
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
          <img src="{{asset('img/bg.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li>
              <i class="bx bx-store-alt"></i>
              <div>
                <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
              </div>
            </li>
            <li>
              <i class="bx bx-images"></i>
              <div>
                <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section>
@endsection