
@extends('layouts.master')

@section('body')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <ol>
          <li><a href="#">Home</a></li>
          <li>Profile</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->



    <div class="row mt-5 mb-5">
        <div>
          <div class="card">
            <div class="card-header">
              Notice
            </div>
            <div class="card-body">
              <h5 class="card-title">Your registration has been completed</h5>
              <p class="card-text">Please pay the registration fee 500 bdt</p>
              <small>You will get a notification after admin approval</small>
              <div class="mt-3 mb-3 text-center">

                <a href="{{ route('user.profile.edit') }}"> <button class="btn btn-lg btn-primary profile-button">
                  Pay</button></a>

            </div>
            </div>
          </div>
        </div>
    </div>
</div>
</div>
@endsection
