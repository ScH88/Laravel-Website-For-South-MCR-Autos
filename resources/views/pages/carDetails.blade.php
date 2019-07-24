@extends ('layouts.app')
@section ('title', $car->make.' '.$car->model)
@section('content')
<section>
                    <div class="row car-page-title-row justify-content-center">
                        <div class="col-md-3"><h1><u>{{ $car->make }}</u></h1></div>
                        <div class="col-md-6"><h3>{{ $car->model }} | {{ $car->modelYear }}</h3></div>
                        <div class="col-md-3"><div class="price-block"><h2><u>&pound;{{ $car->price }}</u></h2></div></div>
                    </div>
                </section>
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <section>
                            <div class="row">
                                <div id="car-page-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <div class="carousel-inner" role="listbox">
                                      <div class="carousel-item active">
                                        <img class="car-carousel-img" src="{{ asset('storage/car_images/'.$car->carPicture.'.jpg')}}">
                                        <div class="carousel-caption"></div>
                                      </div>
                                      @if ($car->carPic2 !== "")
                                        <div class="carousel-item">
                                          <img class="car-carousel-img" src="{{ asset('storage/car_images/'.$car->carPic2.'.jpg')}}">
                                          <div class="carousel-caption"></div>
                                        </div>
                                      @endif
                                      @if ($car->carPic3 !== "")
                                        <div class="carousel-item">
                                          <img class="car-carousel-img" src="{{ asset('storage/car_images/'.$car->carPic3.'.jpg')}}">
                                          <div class="carousel-caption"></div>
                                        </div>
                                      @endif
                                      @if ($car->carPic4 !== "")
                                        <div class="carousel-item">
                                          <img class="car-carousel-img" src="{{ asset('storage/car_images/'.$car->carPic4.'.jpg')}}">
                                          <div class="carousel-caption"></div>
                                        </div>
                                      @endif
                                      @if ($car->carPic5 !== "")
                                        <div class="carousel-item">
                                          <img class="car-carousel-img" src="{{ asset('storage/car_images/'.$car->carPic5.'.jpg')}}">
                                          <div class="carousel-caption"></div>
                                        </div>
                                      @endif
                                      @if ($car->carPic6 !== "")
                                        <div class="carousel-item">
                                          <img class="car-carousel-img" src="{{ asset('storage/car_images/'.$car->carPic6.'.jpg')}}">
                                          <div class="carousel-caption"></div>
                                        </div>
                                      @endif
                                      @if ($car->carPic7 !== "")
                                        <div class="carousel-item">
                                          <img class="car-carousel-img" src="{{ asset('storage/car_images/'.$car->carPic7.'.jpg')}}">
                                          <div class="carousel-caption"></div>
                                        </div>
                                      @endif
                                      @if ($car->carPic8 !== "")
                                        <div class="carousel-item">
                                          <img class="car-carousel-img" src="{{ asset('storage/car_images/'.$car->carPic8.'.jpg')}}">
                                          <div class="carousel-caption"></div>
                                        </div>
                                      @endif
                                      @if ($car->carPic9 !== "")
                                        <div class="carousel-item">
                                          <img class="car-carousel-img" src="{{ asset('storage/car_images/'.$car->carPic9.'.jpg')}}">
                                          <div class="carousel-caption"></div>
                                        </div>
                                      @endif
                                      @if ($car->carPic10!== "")
                                        <div class="carousel-item">
                                          <img class="car-carousel-img" src="{{ asset('storage/car_images/'.$car->carPic10.'.jpg')}}">
                                          <div class="carousel-caption"></div>
                                        </div>
                                      @endif
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="row car-slides-holder hidden-print">
                                <div class="car-picture-slides">
                                  <img class="car-page-list-slide" src="{{ asset('storage/car_images/'.$car->carPicture.'.jpg')}}" alt="Slide 1" value="0" data-slide-to="0"/></img>
                                  @if ($car->carPic2 !== "")
                                  <img class="car-page-list-slide" src="{{ asset('storage/car_images/'.$car->carPic2.'.jpg')}}" alt="Slide 2" value="1" data-slide-to="1"/></img>
                                  @endif
                                  @if ($car->carPic3 !== "")
                                  <img class="car-page-list-slide" src="{{ asset('storage/car_images/'.$car->carPic3.'.jpg')}}" alt="Slide 3" value="2" data-slide-to="2"/></img>
                                  @endif
                                  @if ($car->carPic4 !== "")
                                  <img class="car-page-list-slide" src="{{ asset('storage/car_images/'.$car->carPic4.'.jpg')}}" alt="Slide 4" value="3" data-slide-to="3"/></img>
                                  @endif
                                  @if ($car->carPic5 !== "")
                                  <img class="car-page-list-slide" src="{{ asset('storage/car_images/'.$car->carPic5.'.jpg')}}" alt="Slide 5" value="4" data-slide-to="4"/></img>
                                  @endif
                                  @if ($car->carPic6 !== "")
                                  <img class="car-page-list-slide" src="{{ asset('storage/car_images/'.$car->carPic6.'.jpg')}}" alt="Slide 6" value="5" data-slide-to="5"/></img>
                                  @endif
                                  @if ($car->carPic7 !== "")
                                  <img class="car-page-list-slide" src="{{ asset('storage/car_images/'.$car->carPic7.'.jpg')}}" alt="Slide 7" value="6" data-slide-to="6"/></img>
                                  @endif
                                  @if ($car->carPic8 !== "")
                                  <img class="car-page-list-slide" src="{{ asset('storage/car_images/'.$car->carPic8.'.jpg')}}" alt="Slide 8" value="7" data-slide-to="7"/></img>
                                  @endif
                                  @if ($car->carPic9 !== "")
                                  <img class="car-page-list-slide" src="{{ asset('storage/car_images/'.$car->carPic9.'.jpg')}}" alt="Slide 9" value="8" data-slide-to="8"/></img>
                                  @endif
                                  @if ($car->carPic10 !== "")
                                  <img class="car-page-list-slide" src="{{ asset('storage/car_images/'.$car->carPic10.'.jpg')}}" alt="Slide 10" value="9" data-slide-to="9"/></img>
                                  @endif
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="block-content">
                            <div class="row">
                                <div class="col-sm-4">
                                  <div class="well">
                                    <ul class="car-page-details">
                                        <li><strong>Model Year: </strong>{{ $car->modelYear }}</li>
                                        <li><strong>Body Type: </strong>{{ $car->bodyType }}</li>
                                        <li><strong>Mileage: </strong>{{ $car->mileage }} miles</li>
                                        <li><strong>Transmission: </strong>{{ $car->transmission }}</li>
                                        <!--<li><strong>Brochure Size: </strong>{{ number_format($car->brochureSize, 1, '.', ',') }}l</li>-->
                                        <li><strong>Brochure Size: </strong>{{$car->brochureSize }}l</li>
                                        <li><strong>Fuel Type: </strong>{{ $car->fuelType }}</li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="well">
                                    <ul class="car-page-details">
                                        <li><strong>Engine Power: </strong>{{ $car->enginePowerBHP }} bhp</li>
                                        <li><strong>Engine Size: </strong>{{ $car->engineSize }} cc</li>
                                        <!--<li><strong>Acceleration (0-60): </strong>{{ number_format($car->noughtToSixty, 1, '.', ',') }}</li>-->
                                        <li><strong>Acceleration (0-60): </strong>{{ $car->noughtToSixty}}</li>
                                        <li><strong>Top Speed: </strong>{{ $car->topSpeed }} @if ((int)$car->topSpeed) mph @endif</li>
                                        <li><strong>Drivetrain: </strong>{{ $car->drivetrain }}</li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="well">
                                    <ul class="car-page-details">
                                        <li><strong>Urban: </strong>{{ $car->economyUrban }} @if ((float)$car->economyUrban) mpg @endif</li>
                                        <li><strong>Extra Urban: </strong>{{ $car->economyExtraUrban }} @if ((float)$car->economyExtraUrban) mpg @endif</li>
                                        <li><strong>Combined: </strong>{{ $car->economyCombined }} @if ((float)$car->economyCombined) mpg @endif</li>
                                        <li><strong>Emissions: </strong>{{ $car->emissions }} @if ((float)$car->emissions) g/km @endif</li>
                                        <li><strong>Annual Tax: </strong>£{{ $car->annualTax }}</li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                            <br/>
                            <br/>
                            @if (
                                    ((int)$car->noOfDoors != 0 && (int)$car->noOfSeats != 0)
                                    || ((int)$car->noOfDoors == 0 && (int)$car->noOfSeats != 0)
                                    || ((int)$car->noOfDoors != 0 && (int)$car->noOfSeats == 0)
                                    )
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="car-page-details">
                                        @if ($car->noOfDoors != "0" || $car->noOfDoors == "")
                                        <li><strong>Number Of Doors: </strong>{{ $car->noOfDoors }}</li>
                                        @endif
                                        @if ($car->noOfSeats != "0" || $car->noOfSeats == "")
                                        <li><strong>Number Of Seats: </strong>{{ $car->noOfSeats }}</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            @endif
                            </div>
                            <br/>
                            <br/>
                            <div class="row block-content">
                                <div class="block car-full-desc">
                                    <p>{{ $car->details }}</p>
                                    <br/>
                                    <p>PLEASE NOTE: We here at South Manchester Autos ensure that the information portrayed is accurate, but there is a possibility of errors occurring. We advise you to contact us to confirm the exact specifications of the vehicle.
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-3 car-details-right-col">
                        <section class="car-page-right-col">
                            <p>Call us now on</p>
                            <h4>0161 432 6070</h4>
                            <p>or email us at</p>
                            <h4 class="ensure-word-break"><a href="mailto:southmcrautos@outlook.com">southmcrautos@outlook.com</a></h4>
                            <div class="hidden-print">
                                <p>___________</p>
                                <br/>
                                <div class="flex-holder">
                                    <a class="btn btn-secondary btn-lg btn-block" id="print-button" onclick="window.print()" href="#">Print This Page</a>
                                </div>
                                <br/>
                                <div class="flex-holder">
                                    <a class="btn btn-secondary btn-lg btn-block" href="index.php">Return To Home</a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                @endsection
                @section('page-js-files')
                      <script src="{{ URL::asset('js/jquery.js') }}"></script>
                      <script src="{{ URL::asset('js/popper.js') }}"></script>
                      <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
                @endsection
                @section('page-js-script')
                  <script type="text/javascript">
                  jQuery(function ($) {
                                      $.noConflict();
                                      $(document).ready(function () {
                                          //Add a click listener to the button with the id "print-button"
                                          $('#print-button').click(function (e) {
                                              //ensure the event does not refresh the page/send user back to top
                                              e.preventDefault();
                                          });
                                          //Hide the main slides ul, then fade in at a speed of 600
                                          $('.carousel-inner').hide().fadeIn(600);
                                          //Add a click listener to the left/prev carousel-control button, calling the following function
                                          $('.carousel-control-prev').click(function () {
                                              //Have the carousel go to the slide previous to the current one
                                              $('#car-page-carousel').carousel('prev');
                                          });
                                          //Add a click listener to the right/next carousel-control button, calling the following function
                                          $('.carousel-control-next').click(function () {
                                            //Have the carousel go to the slide following the current one
                                              $('#car-page-carousel').carousel('next');
                                          });
                                          //Define a Timer variable for allowing the slide pictures to fade in one after another
                                          var timer = 100;
                                          //For each children in the car picture slides div (whose class equals car-picture-slides), assign a function
                                          $('.car-picture-slides').children().each(function () {
                                              //Fade in the current image after a timer of the current delay value
                                              $(this).hide().delay(timer).fadeIn(timer);
                                              //Increment the timer by 100 milliseconds
                                              timer += 100;
                                              //Attach a function to the current image for if this image is clicked
                                              $(this).click(function () {
                                                  //Get the value attribute value of the image and assign to a local variable
                                                  var currentVal = parseInt($(this).attr("value"));
                                                  //Have the carousel scroll to the slide with the matching number as the currentVal
                                                  $('#car-page-carousel').carousel(currentVal);
                                              });
                                              //Event handler for if the button is held down via mouse
                                              $(this).mousedown(function () {
                                                  //Change the text colour of the current button to blue
                                                  $(this).css('border', '5px solid blue');
                                                  $(this).css('-webkit-filter', 'brightness(50%)');
                                                  $(this).css('filter', 'brightness(50%)');
                                              });
                                              //Event handler for if the button is released via mouse
                                              $(this).mouseup(function () {
                                                  //Change the background colour of the button to blue
                                                  $(this).css('border', '');
                                                  $(this).css('-webkit-filter', '');
                                                  $(this).css('filter', '');
                                              });
                                          });
                                      });
                                  });
                  </script>
                @endsection
