@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h1>welcome, Admin!</h1>
                    <a href="{{route('cars.create')}" class="btn btn-primary">Create A New Car</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
