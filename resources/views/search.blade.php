@extends('layouts.master')
@section('body')




<div class="container container-search rounded bg-white my-3">
<div class="text-center pt-5">
    <h2 >Begin Your Search</h2>
</div>
            <div class="row text-center my-5">
                <div class="col-md-6">
                    <a href="{{ route('search.view','male') }}">
                        <button type="button" class="btn btn-lg btn-gender-male">Male
                            <i class="bi bi-gender-male"></i>
                        </button></a>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('search.view','female') }}">
                        <button type="button" class="btn btn-lg btn-gender-female">
                            Female <i class="bi bi-gender-female"></i>
                        </button>
                    </a>
                </div>
        </div>
</div>

@endsection

