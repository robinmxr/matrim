@extends('layouts.master')

@section('body')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Inner Page</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Inner Page</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->
  <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <label class="labels">Name</label><input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="">
                </div>
                <div class="row mt-2">
                    <label class="labels">Gender</label>
                    <select class="form-select">
                        <option selected>Select Your Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                      </select>
                </div>
                <div class="row mt-2">
                    <label class="labels">Age</label><input type="number" name="age" class="form-control" placeholder="Enter Your Age" value="">
                </div>
                <div class="row mt-2">
                    <label class="labels">Area</label><input type="text" name="area" class="form-control" placeholder="Enter Your Area" value="">
                </div>
                <div class="row mt-2">
                    <label class="labels">Address</label><textarea name="address" class="form-control" placeholder="Enter Your Address"> </textarea>
                </div>
                <div class="row mt-2">
                    <label class="labels">Phone</label><input type="text" name="area" class="form-control" placeholder="Enter Your Area" value="">
                </div>
                <div class="row mt-2">
                    <label class="labels">E-mail</label><input type="email" name="email" class="form-control" placeholder="Enter Your E-mail" value="">
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Additional Info</span></div><br>
                <div class="row mt-2">
                    <label class="labels">Interests</label><input type="text" name="interest" class="form-control" placeholder="Enter Your Interests and Hobbies" value="">
                </div>
                <div class="row mt-2">
                    <label class="labels">E-mail</label><textarea class="form-control" placeholder="Enter Your E-mail" value=""> </textarea>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection