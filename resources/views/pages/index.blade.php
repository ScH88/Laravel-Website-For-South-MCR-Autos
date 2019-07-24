@extends ('layouts.app')
@section ('title', 'Welcome!')
@section('content')
      <section>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>Welcome to South Manchester Autos!</h1>
                <p>South Manchester Autos is a quality used car dealership located in Reddish, Stockport/Manchester. With over 30 years motor trade experience, we specialize in first time buyers cars to sports and performance cars with low mileage.</p>
                <br/>
                <p>We offer competitively priced cars ranging from £500 to £30,000. Most cars have only one previous owner and full service history. All cars are inspected, road tested, fully valeted and in excellent condition ready to drive away on the same day.</p>
                <br/>
                <p>Our cars come with nationwide warranty unless stated otherwise with the option to extend. All vehicles considered in part exchange with finance options also available, credit and debit cards also accepted.</p>
                <br/>
                <p><strong>Contact us for any enquiries you may have!</strong></p>
            </div>
        </div>
    </section>
    @if(count($cars) > 0)
    <section>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1><strong><u>Available Cars For Sale</u></strong></h1>
            </div>
        </div>
    </section>
    <div class="car-list">
        @foreach($cars as $current)
        <section>
            <div class="row index-car-block justify-content-center">
                <div class="col-md-5 block-center index-car-img-block">
                    <img class="car-list-photo" src="storage/car_images/{{$current->carPicture}}.jpg" alt="Main Pic">
                </div>
                <div class="block col-md-4 index-car-desc-block">
                    <h2><u>{{ $current->make }}</u></h2>
                    <h5>{{ $current->model }}</h5>
                    <br/>
                    <div class="row justify-content-center">
                        <div class="col-5 index-car-detail">
                            <div class="index-desc-container">
                                <img class="indexLogos" src="storage/car_images/mileageLogo.bmp" alt="no picture"/>
                                &nbsp;{{ $current->mileage }}
                            </div>
                        </div>
                        <div class="col-5 index-car-detail">
                            <div class="index-desc-container">
                                <img class="indexLogos" src="storage/car_images/transmissionLogo.bmp" alt="no picture"/>
                                &nbsp;{{ $current->transmission }}
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-5 index-car-detail">
                            <div class="index-desc-container">
                                <img class="indexLogos" src="storage/car_images/colourLogo.bmp" alt="no picture"/>
                                &nbsp;{{ $current->colour }}
                            </div>
                        </div>
                        <div class="col-5 index-car-detail">
                            <div class="index-desc-container">
                                <img class="indexLogos" src="storage/car_images/bodyTypeLogo.bmp" alt="no picture"/>
                                &nbsp;{{ $current->bodyType }}
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-10 index-car-detail">
                            <div class="index-desc-container">
                                <img class="indexLogos" src="storage/car_images/fuelTypeLogo.bmp" alt="no picture"/>
                                &nbsp;{{ $current->fuelType }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block col-md-3 block-center index-car-butt-block">
                    <h4 class="price-tag"><strong><u>&pound;{{ $current->price }}</u></strong></h4>
                    <br/>
                    <div class="flex-holder">
                      <a class="btn btn-primary btn-block btn-lg hidden-print" id="index-car-button" href="{{URL::route('carDetails', $current->id)}}" role="button">Full Details</a>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
        <br/>
        <br/>
        <br/>
        <section>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    {{ $cars->links() }}
                </div>
            </div>
        </section>
    </div>
    @endif
@endsection
