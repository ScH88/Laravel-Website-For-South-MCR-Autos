<?php
//Define the namespace of this controller, that being the Controllers directory inside App/Http
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
//Use the Car class in order to access Car objects
use App\Car;
//Use the Mail class in order to send emails
use Mail;

class PagesController extends Controller
{
  /**
   * Display a listing of cars in the index page.
   *
   * @return \Illuminate\Http\Response
   */
    public function index() {
      //Retrieve all cars from the "Car" database, then order by id in descending order. Then paginate so that...
      //...6 cars at a time can be displayed, with the option to go to next/previous pages
      $cars = Car::orderBy('id', 'desc')->paginate(6);
      //Create a data array, containing the page's title and the full cars array
      $data = array(
        'cars' => $cars
      );
      //Return and display the contents of the "index" file from the "pages" subdirectory in the "views" directory.
      //Give the page the data array.
      return view('pages/index')->with($data);
    }

    /**
     * Display a listing of cars in the index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUs() {
      //Return and display the contents of the "contactUs" file from the "pages" subdirectory in the "views" directory.
      //Give the page the title of "Contact Us".
      return view('pages/contactUs');
    }

    /**
     * Display a listing of cars in the index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function findUs() {
      //Return and display the contents of the "findUs" file from the "pages" subdirectory in the "views" directory.
      //Give the page the title of "Find Us".
      return view('pages/findUs');
    }

    /**
     * Display a listing of cars in the index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function weBuyCars() {
      //Return and display the contents of the "weBuyCars" file from the "pages" subdirectory in the "views" directory.
      //Give the page the title of "We Buy Cars".
      return view('pages/weBuyCars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function carDetails($id) {
      //Retrieve a Car instance by calling the Car class' "find" method and passing it the parameter $id value
      $car = Car::find($id);
      //Return and display the contents of the "contactUs" file from the "pages" subdirectory in the "views" directory.
      //Give the page it's own 'car' variable to retrieve data from using the $car object
      return view('pages/carDetails')->with('car', $car);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function validateMail(Request $request)
    {
      //Ensure that the following fields are validated as follows
      $this->validate($request, [
        'name' => 'required',
        'number' => 'required|max:9999999999999',
        'email' => 'email|required',
        'make' => 'required',
        'model' => 'required',
        'registration' => 'required',
        'mileage' => 'required|integer|max:9999999999999',
        'fuelType' => 'nullable',
        'colour' => 'nullable',
        'transmission' => 'nullable',
        'other' => 'nullable'
      ]);
      //Retrieve data from all inputs and store in a $data array
      $data = array(
          'name' => $request->name,
          'number' => $request->number,
          'email' => $request->email,
          'make' => $request->make,
          'model' => $request->model,
          'registration' => $request->registration,
          'mileage' => $request->mileage,
          'fuelType' => $request->fuelType,
          'colour' => $request->colour,
          'transmission' => $request->transmission,
          'other' => $request->other
      );
      //Send an email using the Mail class' send method, passing it the carSalesRequest template from teh "emails"...
      //...subdirectory in the views directory, the $data array and the following function that defines the from, to...
      //... and subject fields of the email, with the $data as the actual content
        Mail::send('emails.carSaleRequest', $data, function($message) use ($data) {
          $message->from('karl@southmcrautos.co.uk');
          $message->to('karl@southmcrautos.co.uk');
          $message->subject('Car Sale Request From '.$data['name']);
        });
        //Redirect to the "message-sent" page
        return redirect('/message-sent');
    }

    /**
     * Display a listing of cars in the index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function messageSent() {
        //Return the contents of the "messageSent" file in the "pages" subdirectory in the "views" directory...
        //...then give the page the title of "Message Sent". This will display all contents
        return view('pages/messageSent');
    }

    /**
     * Redirect to the login Page
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToLogin() {
      //Redirect to the "login" page
      return redirect('/login');
    }
}
