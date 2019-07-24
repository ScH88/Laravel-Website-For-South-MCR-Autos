@extends('layouts.app')
@section ('title', 'Create Car')
@section('content')
<section>
      <div class="row justify-content-center">
          <div class="col-sm-10">
              <h1>Add Car</h1>
          </div>
      </div>
</section>
  {!! Form::open(['action' => 'AdminController@store', 'id' => 'formData', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  {{ csrf_field() }}
  <section>
    <div class="form-group row justify-content-center">
        {{Form::label('make', 'Make: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::text('make', '', ['id' => 'make', 'name' => 'make', 'placeholder' => 'Car Make', 'maxlength' => '50', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('model', 'Model: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::text('model', '', ['id' => 'model', 'name' => 'model', 'placeholder' => 'Car Model', 'maxlength' => '100','class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('modelYear', 'Model Year: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::text('modelYear', '', ['id' => 'modelYear', 'name' => 'modelYear', 'placeholder' => 'Model Year', 'maxlength' => '30', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('details', 'Details: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::textarea('details', '', ['id' => 'details', 'maxlength' => '3000', 'placeholder' => 'Type Other Details', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('engineSize', 'Engine Size: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::text('engineSize', '', ['id' => 'engineSize', 'name' => 'engineSize', 'placeholder' => 'Engine Size', 'maxlength' => '30','class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('brochureSize', 'Brochure Size: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::text('brochureSize', '', ['id' => 'brochureSize', 'name' => 'brochureSize', 'placeholder' => 'Brochure Size', 'maxlength' => '30', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('topSpeed', 'Top Speed: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::text('topSpeed', '', ['id' => 'topSpeed', 'name' => 'topSpeed', 'placeholder' => 'Top Speed', 'maxlength' => '30', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('noughtToSixty', '0 To 60: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::text('noughtToSixty', '', ['id' => 'noughtToSixty', 'name' => 'noughtToSixty', 'placeholder' => 'Nought To Sixty', 'maxlength' => '30', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('enginePowerBHP', 'Engine Power(BHP): ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::text('enginePowerBHP', '', ['id' => 'enginePowerBHP', 'name' => 'enginePowerBHP', 'placeholder' => 'Engine BHP', 'maxlength' => '30', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
            {{Form::label('drivetrain', 'Drivetrain:', array('class' => 'col-sm-2 col-form-label'))}}
            {{Form::select('drivetrain',
            ['Front Wheel Drive' => 'Front Wheel Drive', 'Rear Wheel Drive' => 'Rear Wheel Drive',
            'Four Wheel Drive' => 'Four Wheel Drive', 'Other' => 'Other'],
            null,
            ['placeholder' => 'Select Drivetrain', 'name' => 'drivetrain', 'id' => 'drivetrain', 'class' => 'col-sm-8 form-control'])}}
    </div>
  </section>
  <section>
    <div class="form-group row justify-content-center">
        {{Form::label('economyUrban', 'Economy(Urban): ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::text('economyUrban', '', ['id' => 'economyUrban', 'name' => 'economyUrban', 'placeholder' => 'Economy (Urban)', 'maxlength' => '30', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('economyExtraUrban', 'Economy(Extra Urban): ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::text('economyExtraUrban', '', ['id' => 'economyExtraUrban', 'name' => 'economyExtraUrban', 'placeholder' => 'Economy (Extra Urban)', 'maxlength' => '30', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('economyCombined', 'Economy(Combined): ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::text('economyCombined', '', ['id' => 'economyCombined', 'name' => 'economyCombined', 'placeholder' => 'Economy (Urban)', 'maxlength' => '30', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('emissions', 'CO2 Emissions: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::text('emissions', '', ['id' => 'emissions', 'name' => 'emissions', 'placeholder' => 'CO2 Emissions', 'maxlength' => '30', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('annualTax', 'Annual Tax: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::text('annualTax', '', ['id' => 'annualTax', 'name' => 'annualTax', 'placeholder' => 'Annual Tax', 'maxlength' => '30', 'class' => 'col-sm-8 form-control'])}}
    </div>
  </section>
  <section>
    <div class="form-group row justify-content-center">
        {{Form::label('mileage', 'Mileage: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::text('mileage', '', ['id' => 'mileage', 'name' => 'mileage', 'placeholder' => 'Mileage', 'maxlength' => '30', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('bodyType', 'Body Type: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::text('bodyType', '', ['id' => 'bodyType', 'name' => 'bodyType', 'placeholder' => 'Body Type', 'maxlength' => '50', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('noOfDoors', 'Number Of Doors:', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::select('noOfDoors',
        ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8',
        '9' => '9'], null,
        ['placeholder' => 'Select Number Of Doors', 'name' => 'noOfDoors', 'id' => 'noOfDoors', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('noOfSeats', 'Number Of Seats:', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::select('noOfSeats',
        ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8',
        '9' => '9'], null,
        ['placeholder' => 'Select Number Of Seats', 'name' => 'noOfSeats', 'id' => 'noOfSeats', 'class' => 'col-sm-8 form-control'])}}
    </div>
  </section>
  <section>
    <div class="form-group row justify-content-center">
            {{Form::label('transmission', 'Transmission:', array('class' => 'col-sm-2 col-form-label'))}}
            {{Form::select('transmission',
            ['Manual' => 'Manual', 'Automatic' => 'Automatic',
            'Other' => 'Other'], null,
            ['placeholder' => 'Select Transmission', 'name' => 'transmission', 'id' => 'transmission', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
            {{Form::label('fuelType', 'Fuel type:', array('class' => 'col-sm-2 col-form-label'))}}
            {{Form::select('fuelType',
            ['Petrol' => 'Petrol', 'Diesel' => 'Diesel',
            'Other' => 'Other'], null,
            ['placeholder' => 'Select Fuel type', 'name' => 'fuelType', 'id' => 'fuelType', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('colour', 'Colour: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::text('colour', '', ['id' => 'colour', 'name' => 'colour', 'placeholder' => 'Car Colour', 'maxlength' => '25', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('price', 'Price: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::text('price', '', ['id' => 'price', 'name' => 'price', 'placeholder' => 'Car Price', 'maxlength' => '6', 'class' => 'col-sm-8 form-control'])}}
    </div>
  </section>
  <section>
    <div class="form-group row justify-content-center">
        {{Form::label('carPicture', 'Car Picture: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::file('carPicture', ['id' => 'carPicture', 'name' => 'carPicture', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('carPic2', 'Car Pic 2: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::file('carPic2', ['name' => 'carPic2', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('carPic3', 'Car Pic 3: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::file('carPic3', ['name' => 'carPic3', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('carPic4', 'Car Pic 4: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::file('carPic4', ['name' => 'carPic4', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('carPic5', 'Car Pic 5: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::file('carPic5', ['name' => 'carPic5', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('carPic6', 'Car Pic 6: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::file('carPic6', ['name' => 'carPic6', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('carPic7', 'Car Pic 7: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::file('carPic7', ['name' => 'carPic7', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('carPic8', 'Car Pic 8: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::file('carPic8', ['name' => 'carPic8', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('carPic9', 'Car Pic 9: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::file('carPic9', ['name' => 'carPic9', 'class' => 'col-sm-8 form-control'])}}
    </div>
    <div class="form-group row justify-content-center">
        {{Form::label('carPic10', 'Car Pic 10: ', array('class' => 'col-sm-2 col-form-label'))}}
        {{Form::file('carPic10', ['name' => 'carPic10', 'class' => 'col-sm-8 form-control'])}}
    </div>
  </section>
  <section>
      <div class="form-group row justify-content-center">
          <div class="col-sm-8">
              <div class="form-group">
                  <div class="flex-holder">
                      {{Form::submit('Create Car', ['class' => 'btn btn-primary btn-lg btn-block hidden-print'])}}
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
    //Variable for referencing the select field whose name equals "carMake"
                    var $make = $('input[id="make"]');
                    //Variable for referencing the input field whose name equals "carModel"
                    var $model = $('input[id="model"]');
                    //Variable for referencing the input field whose name equals "modelYear"
                    var $modelYear = $('input[id="modelYear"]');
                    //Variable for referencing the text area whose name equals "details"
                    var $details = $('textarea[id="details"]');
                    //Variable for referencing the input field whose name equals "engineSize"
                    var $engineSize = $('input[id="engineSize"]');
                    //Variable for referencing the input field whose name equals "brochureSize"
                    var $brochureSize = $('input[id="brochureSize"]');
                    //Variable for referencing the input field whose name equals "topSpeed"
                    var $topSpeed = $('input[id="topSpeed"]');
                    //Variable for referencing the input field whose name equals "noughtToSixty"
                    var $noughtToSixty = $('input[id="noughtToSixty"]');
                    //Variable for referencing the input field whose name equals "enginePowerBHP"
                    var $enginePowerBHP = $('input[id="enginePowerBHP"]');
                    //Variable for referencing the input field whose name equals "drivetrain"
                    var $drivetrain = $('select[id="drivetrain"]');
                    //Variable for referencing the input field whose name equals "economyUrban"
                    var $ecoUrban = $('input[id="economyUrban"]');
                    //Variable for referencing the input field whose name equals "economyExtraUrban"
                    var $ecoExtraUrban = $('input[id="economyExtraUrban"]');
                    //Variable for referencing the input field whose name equals "economyCombined"
                    var $ecoCombined = $('input[id="economyCombined"]');
                    //Variable for referencing the input field whose name equals "emissions"
                    var $emissions = $('input[id="emissions"]');
                    //Variable for referencing the input field whose name equals "annualTax"
                    var $annualTax = $('input[id="annualTax"]');
                    //Variable for referencing the input field whose name equals "carMileage"
                    var $mileage = $('input[id="mileage"]');
                    //Variable for referencing the input field whose name equals "bodyType"
                    var $bodyType = $('input[id="bodyType"]');
                    //Variable for referencing the input field whose name equals "carMileage"
                    var $noOfDoors = $('select[id="noOfDoors"]');
                    //Variable for referencing the input field whose name equals "bodyType"
                    var $noOfSeats = $('select[id="noOfSeats"]');
                    //Variable for referencing the input field whose name equals "carMileage"
                    var $trans = $('select[id="transmission"]');
                    //Variable for referencing the input field whose name equals "bodyType"
                    var $fuelType = $('select[id="fuelType"]');
                    //Variable for referencing the input field whose name equals "carColour"
                    var $col = $('input[id="colour"]');
                    //Variable for referencing the input field whose name equals "price"
                    var $price = $('input[id="price"]');
                    //Variable for referencing the input field whose name equals "carPicture"
                    var $carPic = $('input[id="carPicture"]');
                    //Variable for referencing the div whose ID equals "formData"
                    var $formData = $('#formData');
                    //As soon as you press a key while the make text box is selected
                    $make.keydown(function (e) {
                        //Ensure that the ; [ ] and ' keys are disabled to prevent hacking
                        return e.which !== 186 && e.which !== 219 && e.which !== 221 && e.which !== 192;
                    });
                    //As soon as a key is pressed while the make text box is selected
                    $make.keypress(function (e) {
                        //Ensure the " alternate of the 2 key is disabled, as well as the ( and ) alternates of the 9 and 0 keys
                        return e.which !== 34 && e.which !== 40 && e.which !== 41;
                    });
                    //As soon as you press a key while the model text box is selected
                    $model.keydown(function (e) {
                        //Ensure that the ; [ ] and ' keys are disabled to prevent hacking
                        return e.which !== 186 && e.which !== 219 && e.which !== 221 && e.which !== 192;
                    });
                    //As soon as a key is pressed while the model text box is selected
                    $model.keypress(function (e) {
                        //Ensure the " alternate of the 2 key is disabled, as well as the ( and ) alternates of the 9 and 0 keys
                        return e.which !== 34 && e.which !== 40 && e.which !== 41;
                    });
                    //As soon as you press a key while the model year text box is selected
                    $modelYear.keydown(function (e) {
                        //Ensure that the ; [ ] and ' keys are disabled to prevent hacking
                        return e.which !== 186 && e.which !== 219 && e.which !== 221 && e.which !== 192;
                    });
                    //As soon as a key is pressed while the model year text box is selected
                    $modelYear.keypress(function (e) {
                        //Ensure the " alternate of the 2 key is disabled, as well as the ( and ) alternates of the 9 and 0 keys
                        return e.which !== 34 && e.which !== 40 && e.which !== 41;
                    });
                    //As soon as you press a key while the details text box is selected
                    $details.keydown(function (e) {
                        //Variable for checking if the "@" sign being clicked, as it and the ' symbol share the same event number
                        //Give it a default value of false
                        var atSign = false;
                        //If the shift key is not held down and the event number is 192 (')
                        if (!e.shiftKey && e.which === 192) {
                            //Set the atSign variable to true
                            atSign = true;
                        }
                        //Ensure that the ; [ ] and ' keys are disabled to prevent hacking
                        return e.which !== 186 && e.which !== 219 && e.which !== 221 && !atSign;
                    });
                    //As soon as a key is pressed while the details text box is selected
                    $details.keypress(function (e) {
                        //Ensure the " alternate of the 2 key is disabled, as well as the ( and ) alternates of the 9 and 0 keys
                        return e.which !== 34 && e.which !== 40 && e.which !== 41;
                    });
                    //As soon as you press a key while the engine size text box is selected
                    $engineSize.keydown(function (e) {
                        //Ensure that only number keys, the left and right directionals, the delete and backspace buttons are inputted
                        return (e.which >= 48 && e.which <= 57) || e.which === 37 || e.which === 39 || e.which === 8 || e.which === 46;
                    });
                    //As soon as a key is held down while the engine size text box is selected
                    $engineSize.keypress(function (e) {
                        //Ensure the alternates of all number keys are disabled
                        return e.which !== 33 && e.which !== 34 && e.which !== 163 && e.which !== 36 && e.which !== 37 && e.which !== 94 && e.which !== 38 && e.which !== 42 && e.which !== 40 && e.which !== 41;
                    });
                    //As soon as you press a key while the brochure size text box is selected
                    $brochureSize.keydown(function (e) {
                        //Ensure that the ; [ ] and ' keys are disabled to prevent hacking
                        return e.which !== 186 && e.which !== 219 && e.which !== 221 && e.which !== 192;
                    });
                    //As soon as a key is pressed while the brochure size text box is selected
                    $brochureSize.keypress(function (e) {
                        //Ensure the " alternate of the 2 key is disabled, as well as the ( and ) alternates of the 9 and 0 keys
                        return e.which !== 34 && e.which !== 40 && e.which !== 41;
                    });
                    //As soon as you press a key while the top speed text box is selected
                    $topSpeed.keydown(function (e) {
                        //Ensure that the ; [ ] and ' keys are disabled to prevent hacking
                        return e.which !== 186 && e.which !== 219 && e.which !== 221 && e.which !== 192;
                    });
                    //As soon as a key is pressed while the top speed text box is selected
                    $topSpeed.keypress(function (e) {
                        //Ensure the " alternate of the 2 key is disabled, as well as the ( and ) alternates of the 9 and 0 keys
                        return e.which !== 34 && e.which !== 40 && e.which !== 41;
                    });
                    //As soon as you press a key while the noughtToSixty text box is selected
                    $noughtToSixty.keydown(function (e) {
                        //Ensure that the ; [ ] and ' keys are disabled to prevent hacking
                        return e.which !== 186 && e.which !== 219 && e.which !== 221 && e.which !== 192;
                    });
                    //As soon as a key is pressed while the noughtToSixty text box is selected
                    $noughtToSixty.keypress(function (e) {
                        //Ensure the " alternate of the 2 key is disabled, as well as the ( and ) alternates of the 9 and 0 keys
                        return e.which !== 34 && e.which !== 40 && e.which !== 41;
                    });
                    //As soon as you press a key while the engine power text box is selected
                    $enginePowerBHP.keydown(function (e) {
                        //Ensure that only number keys, the left and right directionals, the delete and backspace buttons are inputted
                        return (e.which >= 48 && e.which <= 57) || e.which === 37 || e.which === 39 || e.which === 8 || e.which === 46;
                    });
                    //As soon as a key is held down while the engine power text box is selected
                    $enginePowerBHP.keypress(function (e) {
                        //Ensure the alternates of all number keys are disabled
                        return e.which !== 33 && e.which !== 34 && e.which !== 163 && e.which !== 36 && e.which !== 37 && e.which !== 94 && e.which !== 38 && e.which !== 42 && e.which !== 40 && e.which !== 41;
                    });
                    //As soon as you press a key while the economy(urban) text box is selected
                    $ecoUrban.keydown(function (e) {
                        //Ensure that the ; [ ] and ' keys are disabled to prevent hacking
                        return e.which !== 186 && e.which !== 219 && e.which !== 221 && e.which !== 192;
                    });
                    //As soon as a key is pressed while the economy(urban) text box is selected
                    $ecoUrban.keypress(function (e) {
                        //Ensure the " alternate of the 2 key is disabled, as well as the ( and ) alternates of the 9 and 0 keys
                        return e.which !== 34 && e.which !== 40 && e.which !== 41;
                    });
                    //As soon as you press a key while the economy(extra) text box is selected
                    $ecoExtraUrban.keydown(function (e) {
                        //Ensure that the ; [ ] and ' keys are disabled to prevent hacking
                        return e.which !== 186 && e.which !== 219 && e.which !== 221 && e.which !== 192;
                    });
                    //As soon as a key is pressed while the economy(extra) text box is selected
                    $ecoExtraUrban.keypress(function (e) {
                        //Ensure the " alternate of the 2 key is disabled, as well as the ( and ) alternates of the 9 and 0 keys
                        return e.which !== 34 && e.which !== 40 && e.which !== 41;
                    });
                    //As soon as you press a key while the economy(combined) text box is selected
                    $ecoCombined.keydown(function (e) {
                        //Ensure that the ; [ ] and ' keys are disabled to prevent hacking
                        return e.which !== 186 && e.which !== 219 && e.which !== 221 && e.which !== 192;
                    });
                    //As soon as a key is pressed while the economy(combined) text box is selected
                    $ecoCombined.keypress(function (e) {
                        //Ensure the " alternate of the 2 key is disabled, as well as the ( and ) alternates of the 9 and 0 keys
                        return e.which !== 34 && e.which !== 40 && e.which !== 41;
                    });
                    //As soon as you press a key while the emissions text box is selected
                    $emissions.keydown(function (e) {
                        //Ensure that the ; [ ] and ' keys are disabled to prevent hacking
                        return e.which !== 186 && e.which !== 219 && e.which !== 221 && e.which !== 192;
                    });
                    //As soon as a key is pressed while the emissions text box is selected
                    $emissions.keypress(function (e) {
                        //Ensure the " alternate of the 2 key is disabled, as well as the ( and ) alternates of the 9 and 0 keys
                        return e.which !== 34 && e.which !== 40 && e.which !== 41;
                    });
                    //As soon as you press a key while the annual tax text box is selected
                    $annualTax.keydown(function (e) {
                        //Ensure that only number keys, the left and right directionals, the delete and backspace buttons are inputted
                        return (e.which >= 48 && e.which <= 57) || e.which === 37 || e.which === 39 || e.which === 8 || e.which === 46;
                    });
                    //As soon as a key is held down while the annual tax text box is selected
                    $annualTax.keypress(function (e) {
                        //Ensure the alternates of all number keys are disabled
                        return e.which !== 33 && e.which !== 34 && e.which !== 163 && e.which !== 36 && e.which !== 37 && e.which !== 94 && e.which !== 38 && e.which !== 42 && e.which !== 40 && e.which !== 41;
                    });
                    //As soon as you press a key while the engine power text box is selected
                    $mileage.keydown(function (e) {
                        //Ensure that only number keys, the left and right directionals, the delete and backspace buttons are inputted
                        return (e.which >= 48 && e.which <= 57) || e.which === 37 || e.which === 39 || e.which === 8 || e.which === 46;
                    });
                    //As soon as a key is held down while the engine power text box is selected
                    $mileage.keypress(function (e) {
                        //Ensure the alternates of all number keys are disabled
                        return e.which !== 33 && e.which !== 34 && e.which !== 163 && e.which !== 36 && e.which !== 37 && e.which !== 94 && e.which !== 38 && e.which !== 42 && e.which !== 40 && e.which !== 41;
                    });
                    //As soon as you press a key while the body type text box is selected
                    $bodyType.keydown(function (e) {
                        //Ensure that the ; [ ] and ' keys are disabled to prevent hacking
                        return e.which !== 186 && e.which !== 219 && e.which !== 221 && e.which !== 192;
                    });
                    //As soon as a key is pressed while the body type text box is selected
                    $bodyType.keypress(function (e) {
                        //Ensure the " alternate of the 2 key is disabled, as well as the ( and ) alternates of the 9 and 0 keys
                        return e.which !== 34 && e.which !== 40 && e.which !== 41;
                    });
                    //As soon as you press a key while the colour text box is selected
                    $col.keydown(function (e) {
                        //Ensure that the ; [ ] and ' keys are disabled to prevent hacking
                        return e.which !== 186 && e.which !== 219 && e.which !== 221 && e.which !== 192;
                    });
                    //As soon as a key is pressed while the colour text box is selected
                    $col.keypress(function (e) {
                        //Ensure the " alternate of the 2 key is disabled, as well as the ( and ) alternates of the 9 and 0 keys
                        return e.which !== 34 && e.which !== 40 && e.which !== 41;
                    });
                    //As soon as you press a key while the price text box is selected
                    $price.keydown(function (e) {
                        //Ensure that only number keys, the left and right directionals, the delete and backspace buttons are inputted
                        return (e.which >= 48 && e.which <= 57) || e.which === 37 || e.which === 39 || e.which === 8 || e.which === 46;
                    });
                    //As soon as a key is held down while the price text box is selected
                    $price.keypress(function (e) {
                        //Ensure the alternates of all number keys are disabled
                        return e.which !== 33 && e.which !== 34 && e.which !== 163 && e.which !== 36 && e.which !== 37 && e.which !== 94 && e.which !== 38 && e.which !== 42 && e.which !== 40 && e.which !== 41;
                    });
                    //Assign an event handler to the button, in this case, if the forma data has been submitted via clicking the "submit" button
                    $formData.submit(function (e) {
                        //Variable for if the user is scrolling, with default value of false;
                        var isScrolling = false;
                        //Create a Boolean ticket variable with a default value of true
                        var ticket = true;
                        //If the car make value is left blank
                        if ($make.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
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
                            //Change the border of the input back to black
                            $model.css('border', '1px solid black');
                        };
                        //If the car model year value is left blank
                        if ($modelYear.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $modelYear.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the model year input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $modelYear.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $modelYear.css('border', '1px solid black');
                        };
                        //If the details value is left blank
                        if ($details.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $details.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the details input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $details.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $details.css('border', '1px solid black');
                        };
                        //If the engine size value is left blank
                        if ($engineSize.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $engineSize.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the engine size input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $engineSize.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $engineSize.css('border', '1px solid black');
                        };
                        //If the brochure size value is left blank
                        if ($brochureSize.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $brochureSize.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the brochure size input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $brochureSize.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $brochureSize.css('border', '1px solid black');
                        };
                        //If the brochure size value is left blank
                        if ($topSpeed.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $topSpeed.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the top speed input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $topSpeed.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $topSpeed.css('border', '1px solid black');
                        };
                        //If the 0 to sixty value is left blank
                        if ($noughtToSixty.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $noughtToSixty.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the nought to sixty input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $noughtToSixty.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $noughtToSixty.css('border', '1px solid black');
                        };
                        //If the bhp power value is left blank
                        if ($enginePowerBHP.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $enginePowerBHP.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the engine power input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $enginePowerBHP.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $enginePowerBHP.css('border', '1px solid black');
                        };
                        //If the drivetrain value is left blank
                        if ($drivetrain.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $drivetrain.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the drivetrain input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $drivetrain.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $drivetrain.css('border', '1px solid black');
                        };
                        //If the urban economy value is left blank
                        if ($ecoUrban.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $ecoUrban.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the economy urban input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $ecoUrban.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $ecoUrban.css('border', '1px solid black');
                        };
                        //If the extra urban economy value is left blank
                        if ($ecoExtraUrban.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $ecoExtraUrban.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the economy extra urban input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $ecoExtraUrban.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $ecoExtraUrban.css('border', '1px solid black');
                        };
                        //If the combined economy value is left blank
                        if ($ecoCombined.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $ecoCombined.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the economy combined input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $ecoCombined.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $ecoCombined.css('border', '1px solid black');
                        };
                        //If the emissions value is left blank
                        if ($emissions.val() === "") {
                          //Change the ticket value to false
                          ticket = false;
                            //Change the border of the text box to red
                            $emissions.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the emissions input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $emissions.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $emissions.css('border', '1px solid black');
                        };
                        //If the annual tax value is left blank
                        if ($annualTax.val() === "") {
                          //Change the ticket value to false
                          ticket = false;
                            //Change the border of the text box to red
                            $annualTax.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the annual tax input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $annualTax.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $annualTax.css('border', '1px solid black');
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
                            //Change the border of the input back to black
                            $mileage.css('border', '1px solid black');
                        };
                        //If the body type value is left blank or not an integer
                        if ($bodyType.val() === "") {
                          //Change the ticket value to false
                          ticket = false;
                            //Change the border of the text box to red
                            $bodyType.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the body type input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $bodyType.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $bodyType.css('border', '1px solid black');
                        };
                        //If the no of doors value is left blank
                        if ($noOfDoors.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $noOfDoors.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the no of doors input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $noOfDoors.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $noOfDoors.css('border', '1px solid black');
                        };
                        //If the noOfSeats value is left blank
                        if ($noOfSeats.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $noOfSeats.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the noOfSeats input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $noOfSeats.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $noOfSeats.css('border', '1px solid black');
                        };
                        //If the transmission value is left blank
                        if ($trans.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $trans.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the transmission input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $trans.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $trans.css('border', '1px solid black');
                        };
                        //If the fuel type value is left blank
                        if ($fuelType.val() === "") {
                            //Change the ticket value to false
                            ticket = false;
                            //Change the border of the text box to red
                            $fuelType.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the fuel type input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $fuelType.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $fuelType.css('border', '1px solid black');
                        };
                        //If the colour value is left blank or not an integer
                        if ($col.val() === "") {
                          //Change the ticket value to false
                          ticket = false;
                            //Change the border of the text box to red
                            $col.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the colour input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $col.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $col.css('border', '1px solid black');
                        };
                        //If the price value is left blank or not an integer
                        if ($price.val() === "") {
                          //Change the ticket value to false
                          ticket = false;
                            //Change the border of the text box to red
                            $price.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the price input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $price.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $price.css('border', '1px solid black');
                        };
                        //If the car picture value is left blank or not an integer
                        if ($carPic.val() === "") {
                          //Change the ticket value to false
                          ticket = false;
                            //Change the border of the text box to red
                            $carPic.css('border', '3px solid red');
                            //If the isScrolling variable is false
                            if (isScrolling === false) {
                              //Have the app scroll up to the location of the car picture input
                              $([document.documentElement, document.body]).animate({
                                  scrollTop: $carPic.offset().top
                              }, 1000);
                              //Set the isScrolling variable to true
                              isScrolling = true;
                            }
                            //If not
                        } else {
                            //Change the border of the input back to black
                            $carPic.css('border', '1px solid black');
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
