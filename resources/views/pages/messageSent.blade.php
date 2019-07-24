@extends ('layouts.app')
@section ('title', 'Message Sent')
@section('content')
<section>
                  <div class="row justify-content-center">
                      <div class="col-sm-10">
                          <h1>Your Message Has Now Been Sent To Us</h1>
                      </div>
                  </div>
              </section>
              <section>
                  <div class="row justify-content-center">
                      <div class="col-sm-10"><p>Thank you for your message. Please note that we may or may not receive your message, as our system is under new maintenance, so if you don't hear from us within a few days, we suggest mailing us via southmcrautos@outlook.com.</p>
                          <br/>
                          <p>To return to the main page, <a href="{{URL::route('home')}}">click here</a></p>
                          <br/>
                          <br/>
                          <br/>
                          <br/>
                          <br/>
                          <br/>
                          <br/>
                          <br/>
                          <br/>
                      </div>
                  </div>
              </section>
@endsection
