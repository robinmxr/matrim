@extends('layouts.master')
@section('body')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
<<<<<<< HEAD
        <h2>Search</h2>
        <ol>
          <li>Home</li>
          <li>Search</li>
=======
        <ol>
            <li></li>
            <li></li>
>>>>>>> 5d1e86d (search page)
        </ol>
      </div>
    </div>
</section>
<<<<<<< HEAD
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
=======
<div class="container container-search rounded bg-white my-3">
<div class="text-center pt-5"> 
    <h2 >Begin Your Search</h2>   
</div>
            <div class="row text-center my-5">
                <div class="col-md-6">
                    <a href=""> 
                        <button type="button" class="btn btn-lg btn-gender-male">male
                            <i class="bi bi-gender-male"></i>    
                        </button></a>
                </div>
                <div class="col-md-6">
                    <a href="">
                        <button type="button" class="btn btn-lg btn-gender-female">
                            Female <i class="bi bi-gender-female"></i>
                        </button>
                    </a>
                </div>
        </div>
</div>
  
@endsection
>>>>>>> 5d1e86d (search page)
