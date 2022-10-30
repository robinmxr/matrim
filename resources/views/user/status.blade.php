
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
                @if(auth()->user()->payment_status == 'unpaid')
              <p class="card-text">Please pay the registration fee 500 bdt</p>
              <small>You will get a notification after admin approval</small>
              <div class="mt-3 mb-3 text-center">

                <a href="{{ route('payment.show') }}"> <button class="btn btn-lg btn-primary profile-button">
                  Pay Now</button></a>


            </div>
                @else
                    <p class="card-text">Your Registration Fee Has been Paid.</p>
                    <small>You will get a notification after admin approval</small>
                    <div class="mt-3 mb-3 text-center">

                        <a href="{{ route('user.profile.view') }}"> <button class="btn btn-lg btn-primary profile-button">
                                Go to Dashboard</button></a>


                    </div>
                    @endif

            </div>
          </div>
        </div>
    </div>

@endsection
