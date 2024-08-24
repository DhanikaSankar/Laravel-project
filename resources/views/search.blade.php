@extends('layout')
@section('content')
    <div class="row">
        @foreach ($users as $user)
        <div class="col-sm-6">
            <div class="card mb-4" style="width: 38rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <h6 class="card-text">{{ $user->designation->name }}</h6>
                    <p class="card-text">{{ $user->department->name }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection
