<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>{{config('app.name', 'Choma')}}</title>


     <meta name="keywords" content=""/>
        <meta name="author" content=""/>
        <meta name="description" content=""/>

   <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script>
        window.App = {!! json_encode([
            'csrfToken' => csrf_token(),
            'user' => Auth::user(),
            'signedIn' => Auth::check()
        ]) !!};
    </script>
        


          <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    

</head>

<body>
<div id="app">
 <header>
 
  @include('inc.admin_nav')

 
</header>

<br>


    <main>

    

        <!--Main layout-->
        <div class="container" id="app">
           
          
            <div class="row">

            @include('inc.messages')

             @yield('content')    

                     <!--Main column-->
                <div class="col-lg-9">

                      
                        
                

                    <div>
                </div>
            
            
            </div>
        
        
        <div>
        </div>
            </div>
        </div>
    </main>

    <div id="app4">
        <flash message="{{ session('flash') }}"></flash>
    </div>


    @include('inc.footer')
   </div>

<!-- SCRIPTS -->

<!-- JQuery -->
    <script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>

<!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('js/tether.min.js')}}"></script>
<script src="/js/app.js"></script>
<!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

      <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

<!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>

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

    @yield('scripts')

</body>

</html>
