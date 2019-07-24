@extends('layouts.app')
@section ('title', 'Admin Index')
@section('content')
    <section>
          <div class="row justify-content-center">
              <div class="col-md-10">
                  <h1><strong><u>Welcome, {{Auth::user()->name}}</u></strong></h1>
                  <br/>
                  <div class="block-content">
                      <p><a href="{{route('admin.create')}}" class="admin-link">Click here to add a new car</a></p>
                      <p><a href="{{ route('logout') }}" class="admin-link" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a></p>
                  </div>
              </div>
          </div>
    </section>
  @if(count($cars) > 0)
  <section>
      <div class="row justify-content-center">
          <div class="col-md-10">
              <h1><strong><u>All Cars</u></strong></h1>
          </div>
      </div>
  </section>
  <div class="car-list">
    @foreach ($cars as $current)
    <section>
          <div class="row index-car-block">
          <div class="col-md-4 block-center index-car-img-block">
             <img class="car-list-photo" src='storage/car_images/{{$current->carPicture}}.jpg' alt='Car Picture'>
          </div>
          <div class="block col-md-8 index-car-desc-block car-desc-block-admin">
            <div class="well">
              <h2><u>{{$current->make}}</u></h2>
              <h5>{{$current->model}}</h5>
              <h5><strong>Price:</strong> £{{$current->price}}</h5>
            </div>
            <br/>
            <div class="row justify-content-center">
              <div class="col-md-3">
                <p><a href="{{URL::route('carDetails', $current->id)}}" class="btn btn-default">View Full Details</a></p>
              </div>
              <div class="col-md-3">
                <p><a href="{{route('admin.edit', $current->id)}}" class="btn btn-default">Edit This Car</a></p>
              </div>
              <div class="col-md-3">
                {!!Form::open(['action' => ['AdminController@destroy', $current->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                   {{Form::hidden('_method', 'DELETE')}}
                   {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
              </div>
            </div>
            </div>
        </div>
     </section>
     @endforeach
   </div>
  @else
  <section>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <p>You have no cars to add, edit or delete.</p>
            </div>
        </div>
  </section>
  @endif
@endsection
