<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>{{config('app.name', 'Choma')}}</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta id="token" name="token" content="{{ csrf_token() }}">

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
<div id="app">





 <header>
  @include('inc.navbar')

 
</header>

<br>

    <main>

        <!--Main layout-->
        <div class="container"  id="app">

           @include('inc.messages')
           
          

            <div class="row">
                    @include('inc.sidebar')



            
            
     

                     @yield('content')  
                      
                            
                        </div>
        
        
        <div>
        </div>
        </div>




    </main>


   @include('inc.footer')

   </div>

<!-- SCRIPTS -->

<!-- JQuery -->
    <script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>

<!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('js/tether.min.js')}}"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.10.1/umd/popper.min.js"></script>

<!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

      <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

  

<!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/underscore.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/backbone-min.js')}}"></script>

      <script src="/js/app.js"></script>
    
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
