<a href="{{URL::route('home')}}">
  <img class="banner-image" src="{{ $message->embed(asset('storage/car_images/WebsiteHeader.jpg')) }}" alt="South Manchester Autos Logo">
</a>
<div class="row justify-content-center">
    <div class="col-md-10">
      <div style="text-align:center;">
        <h1>Car Sale Request</h1>
      </div>
      <div>
        <p><strong>Sender's Name:</strong> {{ $name }}</p>
        <p><strong>Sender's Phone Number:</strong> {{ $number }}</p>
        <p><strong>Sender's Email:</strong> {{ $email }}</p>
      </div>
      <div>
        <p><strong>Car Make: </strong>{{ $make }}</p>
        <p><strong>Car Model: </strong>{{ $model }}</p>
        <p><strong>Car Registration: </strong>{{ $registration }}</p>
        <p><strong>Car Mileage: </strong>{{ $mileage }}</p>
        @if ($fuelType != '')
          <p><strong>Fuel Type: </strong>{{ $fuelType }}</p>
        @endif
        @if ($colour != '')
          <p><strong>Colour: </strong>{{ $colour }}</p>
        @endif
        @if ($transmission != '')
          <p><strong>Transmission: </strong>{{ $transmission }}</p>
        @endif
        @if ($other != '')
          <p><strong>Additional Info: </strong>{{ $other }}</p>
        @endif
      </div>

    </div>
</div>
