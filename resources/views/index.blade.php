
@extends('layout')
@include('header')
@section('content')
    <div class="container">
        <div class="row mb-4 mt-4 ms-auto" style="margin-right: 30px">
            <h4>Search</h4>
            <input type="text" id="search" placeholder="Search by name/designation/department" class="form-control" />
        </div>

        <div id="userCard">
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
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var search = $(this).val();

                $.ajax({
                    url: '/',
                    method: 'GET',
                    data: { search: search },
                    success: function(data) {
                        $('#userCard').html(data);
                    },
                    error: function() {
                        console.error('Error fetching data.');
                    }
                });
            });
        });
    </script>
</div>

@endsection
