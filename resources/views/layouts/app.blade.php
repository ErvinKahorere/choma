<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       

          <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


  <title>{{config('app.name', 'Choma')}}</title>



    <meta name="keywords" content=""/>
        <meta name="author" content=""/>
        <meta name="description" content=""/>


          <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link href="{{asset('css/pretty.css')}}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->



    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.App = {!! json_encode([
            'csrfToken' => csrf_token(),
            'user' => Auth::user(),
            'signedIn' => Auth::check()
        ]) !!};
    </script>




</head>

<body>
<div id="app4">

 <header>
  @include('inc.navbar')
</header>

<br>


    <main>

    

        <!--Main layout-->
        <div class="container">

           @include('inc.messages')
           
        {{--   @include('inc.top_slider') --}}
            <div class="row">
                    @include('inc.sidebar')
            
                     <!--Main column-->
                <div class="col-lg-9">

                      @include('inc.main_slider')


                               <!--/.Carousel Wrapper-->
                              <div class="divider-new">
                                <h2 class="h2-responsive">What's New ?</h2>
                                </div>

                          @yield('content')
                  
                

                    <div>

                </div>

                      @include('inc.sidebar2')                
            
            
            </div>

                        <div id="app4">
                            <flash message="{{ session('flash') }}"></flash>
                        </div>



                        <div>
        </div>
            </div>
        </div>

    </main>
</div>




   @include('inc.footer')

   </div>

<!-- SCRIPTS -->

<!-- JQuery -->
    <script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>

<!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('js/tether.min.js')}}"></script>

<!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>



      <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

<!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script type="text/javascript" src="{{asset('js/carousel.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/underscore.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/backbone-min.js')}}"></script>
    
    <script>
    new WOW().init();
    </script>



<div class="hiddendiv common">

</div>

 <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

<script src="/js/app.js"></script>
    @yield('scripts')

</body>

</html>



