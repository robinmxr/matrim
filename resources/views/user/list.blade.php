@extends('layouts.master')
@section('body')

    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Users</h2>

                <p>Find Your Suitable Partner From Our Users</p>
            </div>

            <div class="row">
@foreach($users as $user)
               <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="150">
                  <a href="{{ route('user.view',$user->id) }}" > <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team-1.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                               
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>{{ $user->name }}</h4>
                            <span>{{ $user->occupation }}</span>
                        </div>
                    </div>
                  </a>
                </div>


                @endforeach

            </div>
        </div>
    </section>
@endsection
