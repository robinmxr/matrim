
@extends('layouts.master')

@section('body')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Inner Page</h2>
        <ol>
          <li><a href="#">Home</a></li>
          <li>Inner Page</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->


<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ $user->name }}</span><span class="text-black-50">{{ $user->email }}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="row mt-2">
                    <div class="alert alert-success"><h5 class="text">Name</h5>{{ $user->name }}</div>
                    <div class="alert alert-danger"><h5 class="text">Gender</h5>{{ $user->gender }}</div>
                    <div class="alert alert-secondary"><h5 class="text">Age </h5>{{ $user->age }}</div>
                    <div class="alert alert-warning"><h5 class="text">Area </h5>{{ $user->area }}</div>
                    <div class="alert alert-danger"><h5 class="text">Address </h5>{{ $user->address }}</div>
                    <div class="alert alert-success"><h5 class="text">Interests</h5>{{ $user->interests }}</div>
                </div>
                <div class="mt-3 text-center">
                    <button class="btn btn-primary profile-button" type="button">
                        <a href="{{ route('user.profile.edit') }}">Edit Profile</a>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Contact Information</span></div><br>
                <div class="row mt-2">
                    <div class="alert alert-secondary"><h5 class="text">Phone</h5>{{ $user->phone }}</div>
                    <div class="alert alert-secondary"><h5 class="text">Email</h5>{{ $user->email }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
