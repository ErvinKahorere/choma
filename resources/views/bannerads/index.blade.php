@extends('layouts.admin')

@section('content')
  <div class="row">

   
                            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                                <!--Indicators-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-1z" data-slide-to="0" class=""></li>
                                    <li data-target="#carousel-example-1z" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-example-1z" data-slide-to="2" class="active"></li>
                                </ol>
                                <!--/.Indicators-->
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    <!--First slide-->
                                     <div class="carousel-item">
                                        <img src="img/img.png" alt="First slide">
                                       
                                    </div>
                                    <!--/First slide-->
                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <img src="img/img.png" alt="Second slide">
                                        
                                    </div>
                                    <!--/Second slide-->
                                    <!--Third slide-->
                                    <div class="carousel-item active">
                                        <img src="img/img.png" alt="Third slide">
                                    
                                    </div>
                                    <!--/Third slide-->
                                </div>
                                <!--/.Slides-->
                                <!--Controls-->
                                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!--/.Controls-->
                            </div>

   @if(count($bannerads) > 0)
                                      @foreach($bannerads as $bannerad)  

                                        @endforeach
     
    @else
        <p>No banner ads for now</p>
    @endif

                            
                             
   
<div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <h3>Your Banner Ads</h3>
                <hr>

@if(count($bannerads) > 0)

<!--Table-->
<table class="table">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
    @foreach($bannerads as $bannerad)
        <tr>
            <th scope="row">{{$bannerad->id}}</th>
            <td><img src="{{$bannerad->featured_image}}"></td>
            <td> <a href="/bannerads/{{$bannerad->id}}/edit" class="btn btn-default">Edit</a> </td>
            <td>
            
                   {!!Form::open(['action' => ['BannerAdsController@destroy', $bannerad->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
             </td>
        </tr>
    @endforeach
       
    </tbody>
    <!--Table body-->
</table>
<!--Table-->
@else 
<p> You have no Banner Ads </p>
@endif







                <a href="/bannerads/create" class="btn btn-primary">Create BannerAd</a>

                <div class="panel-body">
                    











                </div>
            </div>
        </div>
        <!-- end of col-md-9 col-md-offset-2 -->




</div>
@endsection




