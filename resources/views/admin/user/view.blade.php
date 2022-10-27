@extends('admin.layouts.master')
@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User Profile</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                         src="../../dist/img/user4-128x128.jpg"
                                         alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">{{ $user->name }}</h3>

                                <p class="text-muted text-center">{{ $user->email }}</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Phone</b> <a class="float-right">{{ $user->phone }}</a>

                                    </li>

                                </ul>


                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-8">
                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">About Me</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-book mr-1"></i>Occupation</strong>

                                <p class="text-muted">
                                    {{ $user->occupation }}
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                                <p class="text-muted">{{ $user->area }}</p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Age</strong>

                                <p class="text-muted">
                                    {{ $user->age }}
                                </p>

                                <hr>

                                <strong><i class="far fa-file-alt mr-1"></i> Address</strong>

                                <p class="text-muted">{{ $user->address }}</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6"><form method="post" action="{{ route('admin.user.approve',$user->id) }}">@csrf<button class="btn btn-secondary float-right" type="submit" >Approve</button></form> </div>
                    <div class="col-md-6"><form method="post" action="{{ route('admin.user.decline',$user->id) }}">@csrf<button class="btn btn-danger" type="submit">Decline</button></form> </div>
                </div>
            </div>
        </section>
    </div>


@endsection
