@extends ('layouts.app')
@section ('title', 'We Buy Cars')
@section('content')
<section>
                    <div class="row justify-content-center">
                        <div class="col-sm-10">
                            <h1>We Buy Cars At South Manchester Autos</h1>
                        </div>
                    </div>
                </section>
                  {!! Form::open(["action" => "PagesController@validateMail", "id" => "formData", "enctype" => "multipart/form-data", "method" => "POST"]) !!}
                  {{ csrf_field() }}
                    <section>
                        <div class="row justify-content-center">
                            <div class="col-sm-10">
                                <h2>Your Details</h2>
                                <p>Note: All fields marked with (*) are compulsory</p>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            {{Form::label('name', 'Your Name(*):', array('class' => 'col-sm-2 col-form-label'))}}
                            {{Form::text('name', '', ['id' => 'name-input', 'maxlength' => '50', 'placeholder' => 'Type Your Name', 'class' => 'col-sm-8 form-control'])}}
                        </div>
                        <div class="form-group row justify-content-center">
                            {{Form::label('number', 'Your Phone Number(*):', array('class' => 'col-sm-2 col-form-label'))}}
                            {{Form::number('number', '', ['id' => 'phone-input', 'maxlength' => '13', 'placeholder' => 'Type Your Number', 'class' => 'col-sm-8 form-control'])}}
                        </div>
                        <div class="form-group row justify-content-center">
                            {{Form::label('email', 'Your Email(*):', array('class' => 'col-sm-2 col-form-label'))}}
                            {{Form::email('email', '', ['id' => 'email-input', 'maxlength' => '100', 'placeholder' => 'Type Your Email', 'class' => 'col-sm-8 form-control'])}}
                        </div>
                    </section>
                    <section>
                        <div class="row justify-content-center">
                            <div class="col-sm-10">
                                <h2>Vehicle Details</h2>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                                {{Form::label('make', 'Car Make(*):', array('class' => 'col-sm-2 col-form-label'))}}
                                {{Form::select('make',
                                ['AC' => 'AC', 'Alfa Romeo' => 'Alfa Romeo',
                                'Aston Martin' => 'Aston Martin', 'Audi' => 'Audi', 'Bentley' => 'Bentley', 'BMW' => 'BMW',
                                'Caterham' => 'Caterham', 'Chrysler Jeep' => 'Chrysler Jeep', 'Citroen' => 'Citroen',
                                'Daewoo' => 'Daewoo', 'Daihatsu' => 'Daihatsu', 'Ferrari' => 'Ferrari', 'Fiat' => 'Fiat',
                                'Ford' => 'Ford', 'Honda' => 'Honda', 'Hyundai' => 'Hyundai', 'Isuzu' => 'Isuzu', 'Jaguar' => 'Jaguar',
                                'Jeep' => 'Jeep', 'Kia' => 'Kia', 'Lamborghini' => 'Lamborghini', 'Land Rover' => 'Land Rover', 'Lexus' => 'Lexus',
                                'Maserati' => 'Maserati', 'Mazda' => 'Mazda', 'Mercedes-Benz' => 'Mercedes-Benz', 'MG' => 'MG', 'Mitsubishi' => 'Mitsubishi',
                                'Morgan' => 'Morgan', 'Nissan' => 'Nissan', 'Perodua' => 'Perodua', 'Peugeot' => 'Peugeot', 'Porshe' => 'Porsche',
                                'Proton' => 'Proton', 'Renault' => 'Renault', 'Rolls-Royce' => 'Rolls-Royce', 'Rover' => 'Rover',
                                'Saab' => 'Saab', 'Seat' => 'Seat', 'Skoda' => 'Skoda', 'Smart' => 'Smart', 'Subaru' => 'Subaru', 'Suzuki' => 'Suzuki',
                                'Tesla' => 'Tesla', 'Toyota' => 'Toyota', 'TVR' => 'TVR', 'Vauxhall' => 'Vauxhall', 'Volvo' => 'Volvo',
                                'Volkswagen' => 'Volkswagen', 'Other' => 'Other'], null,
                                ['placeholder' => 'Select Car Make', 'id' => 'make-input', 'class' => 'col-sm-8 form-control'])}}
                        </div>
                        <div class="form-group row justify-content-center">
                            {{Form::label('model', 'Car Model(*):', array('class' => 'col-sm-2 col-form-label'))}}
                            {{Form::text('model', '', ['id' => 'model-input', 'maxlength' => '50', 'placeholder' => 'Type Car Model', 'class' => 'col-sm-8 form-control'])}}
                        </div>
                        <div class="form-group row justify-content-center">
                            {{Form::label('registration', 'Car Registration(*):', array('class' => 'col-sm-2 col-form-label'))}}
                            {{Form::text('registration', '', ['id' => 'registration-input', 'maxlength' => '10', 'placeholder' => 'Type Car Registration', 'class' => 'col-sm-8 form-control'])}}
                        </div>
                        <div class="form-group row justify-content-center">
                            {{Form::label('mileage', 'Car Mileage(*):', array('class' => 'col-sm-2 col-form-label'))}}
                            {{Form::number('mileage', '', ['id' => 'mileage-input', 'maxlength' => '7', 'placeholder' => 'Type Car Mileage', 'class' => 'col-sm-8 form-control'])}}
                        </div>
                        <div class="form-group row justify-content-center">
                                {{Form::label('fuelType', 'Fuel Type:', array('class' => 'col-sm-2 col-form-label'))}}
                                {{Form::select('fuelType',
                                ['Petrol' => 'Petrol', 'Diesel' => 'Diesel',
                                'Other' => 'Other'], null,
                                ['placeholder' => 'Select Fuel Type', 'id' => 'fuel-input', 'class' => 'col-sm-8 form-control'])}}
                        </div>
                        <div class="form-group row justify-content-center">
                            {{Form::label('colour', 'Car Colour:', array('class' => 'col-sm-2 col-form-label'))}}
                            {{Form::text('colour', '', ['id' => 'colour-input', 'maxlength' => '25', 'placeholder' => 'Type Car Colour', 'class' => 'col-sm-8 form-control'])}}
                        </div>
                        <div class="form-group row justify-content-center">
                                {{Form::label('transmission', 'Transmission:', array('class' => 'col-sm-2 col-form-label'))}}
                                {{Form::select('transmission',
                                ['Automatic' => 'Automatic', 'Manual' => 'Manual',
                                'Other' => 'Other'], null,
                                ['placeholder' => 'Select Transmission', 'id' => 'transmission-input', 'class' => 'col-sm-8 form-control'])}}
                        </div>
                    </section>
                    <section>
                        <div class="row justify-content-center">
                            <div class="col-sm-10">
                                <h2>Additional Details</h2>
                                <p>Feel free to input additional information you would want us to know.</p>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                              {{Form::textarea('other', '', ['id' => 'other-input', 'maxlength' => '1000', 'placeholder' => 'Type Other Details', 'class' => 'col-sm-10 form-control'])}}
                        </div>
                    </section>
                    <section>
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <div class="flex-holder">
                                        {{Form::submit('Send Message', ['class' => 'btn btn-primary btn-lg btn-block hidden-print'])}}
                                    </div>
                                </div>
                          </div>
                        </div>
                    </section>
                    {!! Form::close() !!}
                @endsection
@section('page-js-files')
      <script src="{{ URL::asset('js/popper.js') }}"></script>
      <script src="{{ URL::asset('js/jquery.js') }}"></script>
@stop
@section('page-js-script')
      <script>
            jQuery(function ($) {
                $.noConflict();
                $(document).ready(function () {
                    //Variable for referencing the input field whose id equals "name-input"
                    var $name = $('input[id="name-input"]');
                    //Variable for referencing the input field whose id equals "phone-input"
                    var $phone = $('input[id="phone-input"]');
                    //Variable for referencing the input field whose id equals "email-input"
                    var $email = $('input[id="email-input"]');
                    //Variable for referencing the select field whose id equals "make-input"
                    var $make = $('select[id="make-input"]');
                    //Variable for referencing the input field whose id equals "model-input"
                    var $model = $('input[id="model-input"]');
                    //Variable for referencing the input field whose id equals "registration-input"
                    var $reg = $('input[id="registration-input"]');
                    //Variable for referencing the input field whose id equals "mileage-input"
                    var $mileage = $('input[id="mileage-input"]');
                    //Variable for referencing the select field whose id equals "fuel-input"
                    var $fuel = $('select[id="fuel-input"]');
                    //Variable for referencing the input field whose id equals "colour-input"
                    var $col = $('input[id="colour-input"]');
                    //Variable for referencing the select field whose id equals "transmission-input"
                    var $trans = $('select[id="transmission-input"]');
                    //Variable for referencing the text area whose id equals "other-input"
                    var $other = $('textarea[id="other-input"]');
                    //Variable for referencing the div whose id equals "formData"
                    var $formData = $('#formData');
                    //As soon as a key is down while the name text box is selected
                    $name.keydown(function (e) {
                        //Ensure that the ; [ ] and ' keys are disabled to prevent hacking
                        return e.which !== 186 && e.which !== 219 && e.which !== 221 && e.which !== 192;
                    });
                    //As soon as a key is pressed while the name text box is selected
                    $name.keypress(function (e) {
                        //Ensure the " alternate of the 2 key is disabled, as well as the ( and ) alternates of the 9 and 0 keys
                        return e.which !== 34 && e.which !== 40 && e.which !== 41;
                    });
                    //As soon as you press a key while the senderPhone text box is selected
                    $phone.keydown(function (e) {
                        //Ensure that only number keys, the left and right directionals, the delete and backspace buttons are inputted
                        return (e.which >= 48 && e.which <= 57) || e.which === 37 || e.which === 39 || e.which === 8 || e.which === 46;
                    });
                    //As soon as a key is held down while the senderPhone text box is selected
                    $phone.keypress(function (e) {
                        //Ensure the alternates of all number keys are disabled
                        return e.which !== 33 && e.which !== 34 && e.which !== 163 && e.which !== 36 && e.which !== 37 && e.which !== 94 && e.which !== 38 && e.which !== 42 && e.which !== 40 && e.which !== 41;
                    });
                    //Create a boolean value for determining if both email values are valid/matching
                    var isEmailValid = new Boolean();
                    //Attach an onchange listener to the first senderEmail input box
                    $email.change(function () {
                        //Write a filter variable for determining if email addresses are valid
                        var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                        //If the content of the first email input box is empty
                        if ($email.val() === "") {
                            //Change the border of the text box to black
                            $email.css('border', '1px solid black');
                            //Change isEmailValid boolean to false
                            isEmailValid = false;
                            //Otherwise
                        } else {
                            //If the value of the senderEmail input box is not a valid email address
                            if (!filter.test($email.val())) {
                                //Change the border of the email text box to red
                                $email.css('border', '3px solid red');
                                //Set the email boolean value to false
                                isEmailValid = false;
                                //If the value of the email input box is confirmed a valid email address
                            } else {
                                //Change the border of the email text box back to black
                                $email.css('border', '1px solid black');
                                //Set isEmailValid value to true
                                isEmailValid = true;
                            }
                        }
                    });
                    //As soon as you press a key while the top speed text box is selected
                    $mileage.keydown(function (e) {
                        //Ensure that only number keys, the left and right directionals, the delete and backspace buttons are inputted
                        return (e.which >= 48 && e.which <= 57) || e.which === 37 || e.which === 39 || e.which === 8 || e.which === 46;
                    });
                    //As soon as a key is held down while the top speed text box is selected
                    $mileage.keypress(function (e) {
                        //Ensure the alternates of all number keys are disabled
                        return e.which !== 33 && e.which !== 34 && e.which !== 163 && e.which !== 36 && e.which !== 37 && e.which !== 94 && e.which !== 38 && e.which !== 42 && e.which !== 40 && e.which !== 41;
                    });
                    //Assign an event handler to the button, in this case, if the forma data has been submitted via clicking the "submit" button
                    $formData.submit(function (e) {
                        //Create a Boolean ticket variable with a default value of true
                        var ticket = true;
                        //Variable for if the user is scrolling, with default value of false;
                        var isScrolling = false;
                        //If there is no input for the senderName field
                        if ($name.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $name.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the name input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $name.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the text box back to black
                            $name.css('border', '1px solid black');
                        };
                        //If there is no input for the senderPhone field
                        if ($phone.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $phone.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the phone input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $phone.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the text box back to black
                            $phone.css('border', '1px solid black');
                        };
                        //If the isEmailValid boolean value is false
                        if (isEmailValid === false) {
                            //Set ticket value to false
                            ticket = false;
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the email input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $email.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                        };
                        //If the first senderEmail input value is left blank
                        if ($email.val() === "") {
                            //Change the border of the text box to red
                            $email.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the email input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $email.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                        };
                        //If the car make value is left blank
                        if ($make.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the input to red
                            $make.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the make input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $make.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $make.css('border', '1px solid black');
                        };
                        //If the car model value is left blank
                        if ($model.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $model.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the model input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $model.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the text box back to black
                            $model.css('border', '1px solid black');
                        };
                        //If the car registration value is left blank
                        if ($reg.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $reg.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the registration input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $reg.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the text box back to black
                            $reg.css('border', '1px solid black');
                        };
                        //If the car mileage value is left blank or not an integer
                        if ($mileage.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $mileage.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the mileage input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $mileage.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the text box back to black
                            $mileage.css('border', '1px solid black');
                        };
                        //If the ticket value is false
                        if (ticket === false) {
                            //Prevent page refresh upon submission
                            e.preventDefault();
                        };
                    });
                });
            });
        </script>
@stop
