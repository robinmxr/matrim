@extends('layouts.master')
@section('body')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Search</h2>
        <ol>
          <li>Home</li>
          <li>Search</li>
        </ol>
      </div>
    </div>
</section>
<section id="hero" class="d-flex align-items-center">
    <div class="container"  data-aos-delay="100">
        <h1>I am Looking <span>for</span></h1>

        <div class="d-flex align-items-end mt-lg-5">
            <a class="btn btn-get-started buttonbox" href="{{ route('search.view','male') }}"><i class="bi bi-gender-male"></i>Male</a>

            <a class="btn btn-get-started buttonbox" href="{{ route('search.view','female') }}"><i class="bi bi-gender-female"></i>FeMale</a>

        </div>
    </div>
</section>









@endsection
