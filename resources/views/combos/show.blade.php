@extends('layouts.normal')

@section('content')





   <!--Main column-->
                <div class="col-lg-9">


                            <!--Combo Card-->

{{--  
  $table->string('offer1_image');
            $table->string('offer1_title');
            $table->mediumText('combo_description');
            $table->mediumText('offer1_description');
            $table->string('offer2_image');
            $table->string('offer2_title');
            $table->mediumText('offer2_description');
            $table->string('offer3_image');
            $table->string('offer3_title');
            $table->mediumText('offer3_description');
            $table->string('combo_old_price');
            $table->string('combo_new_price');
            $table->double('combo_lat', 20,10);
            $table->double('combo_lng', 20,10);
            $table->string('combo_phone');
            $table->string('combo_email');  --}}

            <div class="card-group col-lg-12"> 


                <h1>{!!$combo->combo_description!!}</h1>   

                
            </div>
            <br>

    <div class="card-group col-lg-12">
    <div class="card">
        <img class="img-fluid" src="/storage/combo_images/{{$combo->offer1_image}}" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title">{{$combo->offer1_title}}</h4>
            <p class="card-text">{{$combo->offer1_description}}</p>

        </div>
    </div>
    <div class="card">
        <img class="img-fluid" src="/storage/combo_images/{{$combo->offer2_image}}" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title">{{$combo->offer2_title}}</h4>
            <p class="card-text">{{$combo->offer2_description}}</p>

        </div>
    </div>
    <div class="card">
        <img class="img-fluid" src="/storage/combo_images/{{$combo->offer3_image}}" alt="Card image cap">
        <div class="card-block">
         <h4 class="card-title">{{$combo->offer3_title}}</h4>
            <p class="card-text">{{$combo->offer3_description}}</p>
     

              <!--Card footer-->
        <div class="card-footer">
            <span class="left">N${{$combo->combo_new_price}} <span class="discount">N${{$combo->combo_old_price}} </span></span>
            <span class="right">
          
          
        </div>
        </div>
    </div>
    
</div>

<br>



<!-- End of Combo -->
               

                    <!--First row-->
                    <div class="row wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <div class="col-md-12">
                            <!--Product-->
                            <div class="product-wrapper">


                              
                                <div class="right">

                                

                                {{--  @if(!Auth::guest())
                                    @if(Auth::user()->id == $combo->user_id)
                                        <a href="/cards/{{$combo->id}}/edit" class="btn btn-default">Edit</a> 
                                        
                                        {!!Form::open(['action' => ['CardsController@destroy', $combo->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}                        
                                        
                                        {!!Form::close()!!}
                                    @endif
                                @endif
                                      --}}

                                </div>

                               

                                <hr>
                             

            
                            </div>
                            <!--Product-->

                        </div>
                    </div>
                    <!--/.First row-->

                    <!--Second row-->
                    <div class="row">
                        
                        <!--Heading-->
                            <div class="col reviews wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                                <h2 class="h2-responsive">Contact <strong>{!!$merchant->merchant_name!!}</strong></h2>

                                <hr>
                                <br>

                                <section id="contact">
            <div class="row">
                <!--First column-->
                <div class="col-md-8">

                
<style>

    #map-canvas {
        width: 100%;
        height: 250px;
    }

</style>

                    
                        <div id="map-canvas"></div>

                    
                       </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-4">
                    <ul class="text-center">
                        <li class="wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;"><i class="fa fa-map-marker teal-text"></i>
                            <p>{!!$merchant->merchant_physical_address!!}</p>
                        </li>

                        <li class="wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;"><i class="fa fa-phone teal-text"></i>
                            <p>{!!$merchant->merchant_phone!!}</p>
                        </li>

                        <li class="wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;"><i class="fa fa-envelope teal-text"></i>
                            <p>{!!$merchant->merchant_email!!}</p>
                        </li>
                    </ul>
                </div>
                <!--/Second column-->


       
            </div>


        </section>


                            </div>

                        

                    </div>
                    <!--/.Second row-->


                      <br>
<br>

             <div class="col reviews wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                                <h2 class="h2-responsive">Share this Deal with your friends</h2>


        <section id="social-icons">


                                <hr>
                          

                      
                        <!--Facebook-->
<a type="button" class="btn-floating btn-large btn-fb waves-effect waves-light"><i class="fa fa-facebook"></i></a>
<!--Twitter-->
<a type="button" class="btn-floating btn-large btn-tw waves-effect waves-light"><i class="fa fa-twitter"></i></a>
<!--Google +-->
<a type="button" class="btn-floating btn-large btn-gplus waves-effect waves-light"><i class="fa fa-google-plus"></i></a>
<!--Linkedin-->
            
        <hr>

    </section>



                    <div class="row">
                        



                    </div>

                </div>
                <!--/.Main column-->
 

    @endsection

    
        @section('scripts')


 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKmLyF23CBohQXOrVRgIP2WhVkTg_IqOw&libraries=places">
</script>
<script>

    var lat = {{ $merchant->merchant_lat }};
    var lng = {{$merchant->merchant_lng}};

    var map = new google.maps.Map(document.getElementById('map-canvas'),{
        center: {
            lat: lat,
            lng: lng
        },
        zoom:15
    });

    var marker = new google.maps.Marker({
        position:  {
            lat: lat,
            lng: lng
        },
        map: map,
    });

    /*
    var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
    google.maps.event.addListener(searchBox, 'places_changed', function(){
        var places = searchBox.getPlaces();
        var bounds = new google.maps.LatLngBounds();
        var i, place;

        for(i=0; place=places[i];i++){
            bounds.extend(place.geometry.location);
            marker.setPosition(place.geometry.location)  // set new marker position
        }

        map.fitBounds(bounds);
        map.setZoom(15);

    });

    google.maps.event.addListener(marker, 'position_changed', function(){
        var lat = marker.getPosition().lat();
        var lng = marker.getPosition().lng();

        $('#merchant_lat').val(lat);
        $('#merchant_lng').val(lng);

    });

    */

</script>
<!--
   <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKmLyF23CBohQXOrVRgIP2WhVkTg_IqOw&callback=initMap">
    </script>

-->


@endsection