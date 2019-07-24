<a href="{{URL::route('home')}}">
  <img class="banner-image" src="{{asset('storage/car_images/WebsiteHeader.jpg')}}" alt="South Manchester Autos Logo" />
</a>
   <nav class="navbar navbar-expand-md bg-dark navbar-dark navbar-laravel">
      <div class="container-fluid">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                 <li class="nav-item">
                   <a class="nav-link" href="{{URL::route('home')}}">Home<span class="sr-only"></span></a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="{{URL::route('weBuyCars')}}">We Buy Cars<span class="sr-only"></span></a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="{{URL::route('contactUs')}}">Contact Us<span class="sr-only"></span></a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="{{URL::route('findUs')}}">Find Us<span class="sr-only"></span></a>
                 </li>
               </ul>
               <!-- Right Side Of Navbar -->
               <ul class="navbar-nav ml-auto">
                   <!-- Authentication Links -->
                   @if (!Auth::guest() && Auth::user()->role == "admin")
                       <li class="nav-item dropdown">
                           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               {{ Auth::user()->name }} <span class="caret"></span>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('admin.index') }}">
                                  Admin
                               </a>
                               <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                   {{ __('Logout') }}
                               </a>
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                   @csrf
                               </form>
                           </div>
                       </li>
                   @endguest
               </ul>
           </div>
       </div>
   </nav>
