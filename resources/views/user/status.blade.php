
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



    <div class="row">
        <div class="col-md-10">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <div class="alert alert-warning text-center">
                        <h6>Your account has been registered and pending for approval. Please pay your registration fee now.</h6>
                    </div>
                </div>
           
                <div class="mt-3 text-center">

                    <a href="{{ route('user.profile.edit') }}"> <button class="btn btn-lg btn-primary profile-button">Edit Profile</button></a>

                </div>
        </div>
    </div>
</div>
</div>
@endsection
