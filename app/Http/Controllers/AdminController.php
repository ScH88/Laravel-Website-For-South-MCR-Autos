<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Car;
use DB;

class AdminController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
    {
        //$this->middleware('auth', ['except' => ['index',
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::orderBy('id', 'desc')->get();
        //Create a data array, containing the page's title and the full cars array
        $data = array(
          'cars' => $cars
        );
        //$cars = Car::orderBy('id', 'desc')->get();
        return view('admin/index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
          'make' => 'required|max:50',
          'model' => 'required|max:100',
          'modelYear' => 'required|max:30',
          'details' => 'required|max:3000',
          'engineSize' => 'required|max:30',
          'brochureSize' => 'required|max:30',
          'topSpeed' => 'required|max:30',
          'noughtToSixty' => 'required|max:30',
          'enginePowerBHP' => 'required|max:30',
          'drivetrain' => 'required',
          'economyUrban' => 'required|max:30',
          'economyExtraUrban' => 'required|max:30',
          'economyCombined' => 'required|max:30',
          'emissions' => 'required|max:30',
          'annualTax' => 'required|max:30',
          'mileage' => 'required|max:30',
          'bodyType' => 'required|max:50',
          'noOfDoors' => 'required',
          'noOfSeats' => 'required',
          'transmission' => 'required',
          'fuelType' => 'required',
          'colour' => 'required|max:25',
          'price' => 'required|max:6',
          'carPicture' => 'required|image|mimes:jpeg,jpg,bmp|max:4000',
          'carPic2' => 'image|nullable|max:4000',
          'carPic3' => 'image|nullable|max:4000',
          'carPic4' => 'image|nullable|max:4000',
          'carPic5' => 'image|nullable|max:4000',
          'carPic6' => 'image|nullable|max:4000',
          'carPic7' => 'image|nullable|max:4000',
          'carPic8' => 'image|nullable|max:4000',
          'carPic9' => 'image|nullable|max:4000',
          'carPic10' => 'image|nullable|max:4000'
        ]);
        //Variable for storing the file, with it's format extension
        $filenameWithExtension = $request->file('carPicture')->getClientOriginalName();
        //Variable for storing just the file name
        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
        //Append the current time to the end of the filename
        $filename = $filename.time();
        //Upload the image
        $path = $request->file('carPicture')->storeAs('public/car_images/', $filename.'.jpg');
        //Create a blank Car object
        $car = new Car;
        //Set the default value of the car's carPicture variable as the filename
        $car->carPicture = $filename;
        //Create an index variable for images 2 and onwards, which will increment in the event that there are...
        //...any blank file fields with filled fields in between
        $imgIndex = 2;
        //For each index from 2 to 10 (the maximum number of images allowed)
        for ($i = 2; $i <= 10; $i++) {
          //String for storing the car variable which the iterator will operate on (i.e. if $i is 2, then name will be carPic2)
          $currentCarPicVar = 'carPic'.$i;
          //If the html file input whose id is carPic(current iteration) contains a file to be submitted..
          //..i.e if $i is 2, then id carPic2 will be checked
          if ($request->hasFile('carPic'.$i)) {
            //Variable for storing the file, with it's format extension
            $filenameWithExtension = $request->file('carPic'.$i)->getClientOriginalName();
            //Variable for storing just the file name
            $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
            //Append the current time to the end of the filename
            $filename = $filename.time();
            //Upload the image
            $path = $request->file('carPic'.$i)->storeAs('public/car_images/', $filename.'.jpg');
            //If the image index is less than the current iterator index
            if ($imgIndex <= $i) {
              //String for storing the car variable which the iterator will operate on (i.e. if $i is 2, then name will be carPic2)
              $car->$currentCarPicVar = '';
              //String for storing the car variable which the image index will operate on (i.e. if $imgIndex is 2, then name will be carPic2)
              $iteratorCarPicVar = 'carPic'.$imgIndex;
              //Set the default value of the imgIndex referenced variable name as the filename
              $car->$iteratorCarPicVar = $filename;
              //Increment the image index by one
              $imgIndex++;
            //Otherwise, if the index is equal to the iterator
            } else {
              //Set the default value of the iterator referenced variable name as the filename
              $car->$currentCarPicVar = $filename;
            }
          //Otherwise, if there is no file found
          } else {
            //
            $car->$currentCarPicVar = '';
          }
        }
        $car->make = $request->input('make');
        $car->model = $request->input('model');
        $car->modelYear = $request->input('modelYear');
        $car->details = $request->input('details');
        $car->engineSize = $request->input('engineSize');
        $car->brochureSize = $request->input('brochureSize');
        $car->topSpeed = $request->input('topSpeed');
        $car->noughtToSixty = $request->input('noughtToSixty');
        $car->enginePowerBHP = $request->input('enginePowerBHP');
        $car->drivetrain = $request->input('drivetrain');
        $car->economyUrban = $request->input('economyUrban');
        $car->economyExtraUrban = $request->input('economyExtraUrban');
        $car->economyCombined = $request->input('economyCombined');
        $car->emissions = $request->input('emissions');
        $car->annualTax = $request->input('annualTax');
        $car->mileage = $request->input('mileage');
        $car->bodyType = $request->input('bodyType');
        $car->noOfDoors = $request->input('noOfDoors');
        $car->noOfSeats = $request->input('noOfSeats');
        $car->transmission = $request->input('transmission');
        $car->fuelType = $request->input('fuelType');
        $car->colour = $request->input('colour');
        $car->price = $request->input('price');
        $car->save();
        return redirect('/admin')->with('success', 'Car Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Retrieve a matching car instance by calling the Car class' find method and passing it the $id
        $car = Car::find($id);
        //Check for correct User
        //if (auth()->user()) {
          //
        //  return view('/login')->with('error', 'Unauthorized Page');
        //}
        //Array of cars that are set to be replaced by the admin/user
        $replacements = array();
        //Add the first car picture to the array by calling the Car object's getCarPicture method
        $replacements[] = $car->carPicture;
        //For each index from 2 to 10 (the total number of images)
        for ($i = 2; $i <= 10; $i++) {
            //Define a String for pointing to the currnet "getCarPic" method, appending the current index
            $currentVarName = "carPic".$i;
            //Get the next car picture by having the Car object call the method name
            $currentCar = $car->$currentVarName;
            //If the current car does not return null
            if ($currentCar != "") {
                //Add the current car image value to the array
                $replacements[] = $currentCar;
            }
        }
        $data = [
          'car' => $car,
          'replacements' => $replacements
        ];
        //
        return view('admin/edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      //
      $this->validate($request, [
        'make' => 'required|max:50',
        'model' => 'required|max:100',
        'modelYear' => 'required|max:30',
        'details' => 'required|max:3000',
        'engineSize' => 'required|max:30',
        'brochureSize' => 'required|max:30',
        'topSpeed' => 'required|max:30',
        'noughtToSixty' => 'required|max:30',
        'enginePowerBHP' => 'required|max:30',
        'drivetrain' => 'required',
        'economyUrban' => 'required|max:30',
        'economyExtraUrban' => 'required|max:30',
        'economyCombined' => 'required|max:30',
        'emissions' => 'required|max:30',
        'annualTax' => 'required|max:30',
        'mileage' => 'required|max:30',
        'bodyType' => 'required|max:50',
        'noOfDoors' => 'required',
        'noOfSeats' => 'required',
        'transmission' => 'required',
        'fuelType' => 'required',
        'colour' => 'required|max:25',
        'price' => 'required|max:6',
        'carPicture' => 'image|nullable|mimes:jpeg,jpg,bmp|max:4000',
        'carPic2' => 'image|nullable|max:4000',
        'carPic3' => 'image|nullable|max:4000',
        'carPic4' => 'image|nullable|max:4000',
        'carPic5' => 'image|nullable|max:4000',
        'carPic6' => 'image|nullable|max:4000',
        'carPic7' => 'image|nullable|max:4000',
        'carPic8' => 'image|nullable|max:4000',
        'carPic9' => 'image|nullable|max:4000',
        'carPic10' => 'image|nullable|max:4000'
      ]);
      //Create a blank Car object
      $car = Car::find($id);
      //Variable for the current image name for future images
      $picName = "";
      //If the request has it's carPicture file input containing a file
      if ($request->hasFile('carPicture')) {
        //Delete the image in the public/car_images/ directory whose name matches that of the first car picture variable
        Storage::delete('public/car_images/'.$car->carPicture.'.jpg');
        //Variable for storing the file, with it's format extension
        $filenameWithExtension = $request->file('carPicture')->getClientOriginalName();
        //Variable for storing the file name without it's format extension
        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
        //Add a time stamp at the end if the file name to individualise it from others of the same filename
        $filename = $filename.time();
        //Upload the image
        $path = $request->file('carPicture')->storeAs('public/car_images/', $filename.'.jpg');
        //Change the value of the car's carPicture value as the filename
        $car->carPicture = $filename;
      }
      //Retrieve the hidden replaceCount variable from the request
      $replaceCount = $request->input('replaceCount');
      //From 2 (the current image to check for) to the replaceCount value (which is either 10 or less)
      for ($i = 2; $i <= $replaceCount; $i++) {
       //Variable for storing the current picture variable (if $i is 2, variable name will be carPic2)
       $currentPicVar = 'carPic'.$i;
       //If the request has file input whose id is the currentPicVar contains a file
       if ($request->hasFile($currentPicVar)) {
         //Delete the image in the public/car_images/ directory whose name matches that of the current picture variable
         Storage::delete('public/car_images/'.$car->$currentPicVar.'.jpg');
         //Variable for storing the file, with it's format extension
         $filenameWithExtension = $request->file($currentPicVar)->getClientOriginalName();
         //Variable for storing the file name without it's format extension
         $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
         //Add a time stamp at the end if the file name to individualise it from others of the same filename
         $filename = $filename.time();
         //Upload the image
         $path = $request->file($currentPicVar)->storeAs('public/car_images/', $filename.'.jpg');
         //Set the current car picture variable as the filename without extension
         $car->$currentPicVar = $filename;
       }
     }
     //Variable for counting after the "replaceImg" count (plus 1 so that it points to the first entry after the last replaceImg)
     $postReplaceIndexCount = ($replaceCount + 1);
     //For each iteration from the replace count plus one while it is less than/equal to 10 (the total number of images)
     for ($i = ($replaceCount + 1); $i <= 10; $i++) {
        //Variable for storing the current picture variable
        $currentPicVar = 'carPic'.($i);
        //If the current entry in the addImg FILES is not null
        if ($request->hasFile($currentPicVar)) {
          //Variable for storing the file, with it's format extension
          $filenameWithExtension = $request->file($currentPicVar)->getClientOriginalName();
          //Variable for storing the file name without it's format extension
          $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
          //Add a time stamp at the end if the file name to individualise it from others of the same filename
          $filename = $filename.time();
          //Upload the image
          $path = $request->file($currentPicVar)->storeAs('public/car_images/', $filename.'.jpg');
          //If the post-replace index is less than the current iterator index
          if ($postReplaceIndexCount <= $i) {
            //Set the default value of the iterator referenced variable name as a blank value
            $car->$currentPicVar = '';
            //Define a variable for the earliest empty image variable, by using the postReplaceIndex variable to point to it
            $latestPicVar = 'carPic'.$postReplaceIndexCount;
            //Set the default value of the imgIndex referenced variable name as the filename
            $car->$latestPicVar = $filename;
            //Increment the image index by one
            $postReplaceIndexCount++;
          //Otherwise, if the index is equal to the iterator
          } else {
            //Delete the image in the public/car_images/ directory whose name matches that of the current picture variable
            Storage::delete('public/car_images/'.$car->$currentPicVar.'.jpg');
            //Set the default value of the iterator referenced variable name as the filename
            $car->$currentPicVar = $filename;
          }
        }
    }
      $car->make = $request->input('make');
      $car->model = $request->input('model');
      $car->modelYear = $request->input('modelYear');
      $car->details = $request->input('details');
      $car->engineSize = $request->input('engineSize');
      $car->brochureSize = $request->input('brochureSize');
      $car->topSpeed = $request->input('topSpeed');
      $car->noughtToSixty = $request->input('noughtToSixty');
      $car->enginePowerBHP = $request->input('enginePowerBHP');
      $car->drivetrain = $request->input('drivetrain');
      $car->economyUrban = $request->input('economyUrban');
      $car->economyExtraUrban = $request->input('economyExtraUrban');
      $car->economyCombined = $request->input('economyCombined');
      $car->emissions = $request->input('emissions');
      $car->annualTax = $request->input('annualTax');
      $car->mileage = $request->input('mileage');
      $car->bodyType = $request->input('bodyType');
      $car->noOfDoors = $request->input('noOfDoors');
      $car->noOfSeats = $request->input('noOfSeats');
      $car->transmission = $request->input('transmission');
      $car->fuelType = $request->input('fuelType');
      $car->colour = $request->input('colour');
      $car->price = $request->input('price');
      $car->save();
      return redirect('/admin')->with('success', 'Car Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //Find the car by calling the Car class' find method, passing it the $id
        $car = Car::find($id);
        //Check for correct User
        //if (auth()->user()) {
          //
          //return view('/login')->with('error', 'Unauthorized Page');
        //}
        //Delete the image in the public/car_images/ directory whose name matches that of the first car picture variable
        Storage::delete('public/car_images/'.$car->carPicture.'.jpg');
        //Delete the image in the public/car_images/ directory whose name matches that of the second car picture variable
        Storage::delete('public/car_images/'.$car->carPic2.'.jpg');
        //Delete the image in the public/car_images/ directory whose name matches that of the third car picture variable
        Storage::delete('public/car_images/'.$car->carPic3.'.jpg');
        //Delete the image in the public/car_images/ directory whose name matches that of the fourth car picture variable
        Storage::delete('public/car_images/'.$car->carPic4.'.jpg');
        //Delete the image in the public/car_images/ directory whose name matches that of the fifth car picture variable
        Storage::delete('public/car_images/'.$car->carPic5.'.jpg');
        //Delete the image in the public/car_images/ directory whose name matches that of the sixth car picture variable
        Storage::delete('public/car_images/'.$car->carPic6.'.jpg');
        //Delete the image in the public/car_images/ directory whose name matches that of the seventh car picture variable
        Storage::delete('public/car_images/'.$car->carPic7.'.jpg');
        //Delete the image in the public/car_images/ directory whose name matches that of the eigth car picture variable
        Storage::delete('public/car_images/'.$car->carPic8.'.jpg');
        //Delete the image in the public/car_images/ directory whose name matches that of the ninth car picture variable
        Storage::delete('public/car_images/'.$car->carPic9.'.jpg');
        //Delete the image in the public/car_images/ directory whose name matches that of the tenth car picture variable
        Storage::delete('public/car_images/'.$car->carPic10.'.jpg');
        //Call the car's delete method to remove the intended entry
        $car->delete();
        //Return a redirect to the admin main page, with a success message saying the respective car has been deleted
        return redirect('/admin')->with('success', 'Car '.$car->make . ' ' . $car->model .' Successfully deleted');
    }
}
