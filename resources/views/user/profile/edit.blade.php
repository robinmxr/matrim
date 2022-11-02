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
  </section><!-- End Breadcrumbs -->
  <div class="container rounded bg-white mt-5 mb-5">
      <form action="{{ route('user.profile.update') }}" method="post">
          @csrf
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ $user->name }}</span><span class="text-black-50">{{ $user->email }}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Personal Information</h4>
                </div>
                <div class="row mt-2">
                    <label class="labels mb-2 mb-2">Name</label><input type="text" name="name" class="form-control"  value="{{ $user->name }}">
                </div>
                <div class="row mt-2">
                    <label class="labels mb-2 mb-2">Occupation</label><input type="text" name="occupation" class="form-control"  value="{{ $user->occupation }}">
                </div>

                <div class="row mt-2">
                    <label class="labels mb-2">Age</label><input type="number" name="age" class="form-control"  value="{{ $user->age }}">
                </div>
                <div class="row mt-2">
                    <label class="labels mb-2">BirthDay</label><input type="date" name="birthdate" class="form-control" value="{{ $user->birthdate }}">
                </div>
                <div class="row mt-2">
                    <label class="labels mb-2">Area</label><input type="text" name="area" class="form-control" value="{{ $user->area }}">
                </div>
                <div class="row mt-2">
                    <label class="labels mb-2">Address</label><textarea name="address" class="form-control">{{ $user->address }} </textarea>
                </div>
                <div class="row mt-2">
                    <label class="labels mb-2">Phone</label><input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
                </div>
                <div class="row mt-2">
                    <label class="labels mb-2">E-mail</label><input type="email" name="email" class="form-control" value="{{ $user->email }}">
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Additional Info</span></div><br>
                <div class="row mt-2">
                    <label class="labels mb-2">Interests</label><input type="text" name="interests" class="form-control" value="{{ $user->interests }}">
                </div>
                <div class="row mt-2">
                    <label class="labels mb-2">About Me</label><textarea name="about" class="form-control">{{ $user->about }} </textarea>
                </div>
            </div>
            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Changes</button></div>
            <a href="{{ route('user.profile.view') }}" ><div class="mt-2 text-center"><div class="btn btn-secondary mb-3" >Go Back</div></div></a>
        </div>

    </div>
      </form>
</div>


@endsection
