
    <nav class="navbar navbar-dark bg-primary">
    <ul class="container">
        <a class="navbar-brand" href="{{ url('/') }}"> <img src="{{asset('img/beta_logo.png')}}" height="50px" alt="Choma"></a>

          <!-- Authentication Links -->
                        @if (Auth::guest())

                    <div class="row pull-right">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                    <a class="nav-link " href="{{ route('register') }}">Register</a>
                </div>

                  @else





         
                   
                 <li class="nav-item dropdown btn-group pull-right">

                     <user-notifications></user-notifications>
  {{--                   <notification :userid="{{auth()->id()}}" :unreads="{{auth()->user()->unreadNotifications}}"></notification>

--}}
           
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} 



                    <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">


                         <a class="dropdown-item" href="/profile/{{ Auth::user()->name }}">
                                            Profile
                                        </a>
                        


                          <a class="dropdown-item" href="/dashboard">
                                            Dashboard
                                        </a>
                        
                        
                         <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                        

                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                        
                       

                        
                    </div>

                    
<a class="media-left" href="/profile/{{ Auth::user()->name }}">
                                <img class="rounded-circle" src="/uploads/avatars/{{ Auth::user()->avatar }}" height="30px" width="30px" alt="">
                            </a>

                    </a>
                </li>
    </ul>

                  @endif

</nav>


        <!--Navbar-->
           <!--Navbar-->
<nav class="lower_navbar navbar navbar-toggleable-md navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav1">
            <ul class="navbar-nav mr-auto">
            @foreach ($tags as $tag)
                <li class="nav-item">
                    <a href="/tags/{{ $tag->name }}" class="nav-link">{{ $tag->name }} <span class="sr-only">(current)</span></a>
                </li>
            @endforeach

                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">Discover</a>
                </li>


                <li class="nav-item">
                    <a href="{{ url('/merchants') }}" class="nav-link">Stores</a>
                </li>
        
            <!--
                <li class="nav-item">
                    <a class="nav-link">Nearby</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Trending</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link">Father's Day</a>
                </li> -->


            
                <li class="nav-item"> 
                     <form class="form-inline waves-effect waves-light" method="GET">
                        {{csrf_field()}}
                        <div class="form-group">
                        <input class="form-control" type="search" name="q" placeholder="Search ..." id="q">

                        </div>
                    </form> 
            
            </li>


                <li class="nav-item dropdown btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">City</a>
                    <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                    
               {{--     @foreach ($cities as $city)
                        <a href="/cards/cities/{{ $city }}" class="dropdown-item">{{ $city }}</a>
                    @endforeach--}}

                @foreach ($cities as $city)
                    <a href="/cities/{{$city->name}}" class="dropdown-item">{{ $city->name }}</a>
                @endforeach




                       <!-- <a class="dropdown-item">Walvis Bay</a>
                         <a class="dropdown-item">Rundu</a>
                        <a class="dropdown-item">Swakopmund</a>
                           <a class="dropdown-item">Oshakati</a> 
                              <a class="dropdown-item">Rehoboth</a>   
                                 <a class="dropdown-item">Katima Mulilo</a>    
                                    <a class="dropdown-item">Otjiwarongo</a>    
                        <a class="dropdown-item">Ondangwa</a>
                           <a class="dropdown-item">Okahandja</a>   
                         <a class="dropdown-item">Keetmanshoop</a>   
                        <a class="dropdown-item">Gobabis</a> -->
                    </div>


                </li>

                
            </ul>


        <div class="row pull-right">
             <a href="{{ url('/sell') }}" target="_blank"  class="nav-link">Sell with Choma</a>
        
         </div>
        </div>
    </div>
</nav>
        <!--/.Navbar-->

