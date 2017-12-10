@extends('layouts.normal')

@section('content')



   <!--Main column-->
                <div class="col-lg-9">

                    <!--First row-->
                    <div class="row wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <div class="col-md-12">
                            <!--Product-->
                            <div class="product-wrapper">

                                <div id="app4">


                                <!--Featured image-->
                                <div class="view overlay hm-white-light z-depth-1-half">
                                    <img src="/storage/cover_images/{{$card->cover_image}}" class="img-fluid img-gradient" alt="">
                                    <div class="mask">
                                    </div>
                                    <h3 class="price">

                                        @if(!Auth::guest())

                                            <span class="badge blue darken-2">


                                               @if(!Auth::guest())
                                                @if(Auth::user()->id == $card->user_id)
                                                    <a href="/cards/{{$card->id}}/edit" class="">
                                                    &nbsp   <i class="fa fa-pencil mr-1" style="color: #ffffff"></i>  &nbsp

                                                        </a>

                                                    {{--            {!!Form::open(['action' => ['CardsController@destroy', $card->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

                                                                {{Form::hidden('_method', 'DELETE')}}
                                                    --}}{{--            {{Form::submit('', ['class' => 'fa fa-trash ml-1', 'style' => 'color: #ffffff'])}}--}}{{--

                                                                <a href="" class=""type="submit">
                                                                &nbsp   <i class="fa fa-trash mr-1" style="color: #ffffff"></i>  &nbsp

                                                                    </a>

                                                                {!!Form::close()!!}--}}
                                                @endif
                                            @endif


                                            {{--

                                                                                      <i class="fa fa-trash ml-1"></i>  &nbsp  &nbsp
                                            --}}

                                            {{--      <i class="fa fa-heart mr-1"></i>--}}


                                            @if (Auth::check())

                                                &nbsp

                                                <favorite
                                                        :card={{ $card->id }}
                                                                :favorited={{ $card->favorited() ? 'true' : 'false' }}
                                                ></favorite>






                                            @endif

                                            &nbsp

                                               </span>

                                        @endif


                                    </h3>

                                 

                               


                                </div>
                                <!--/.Featured image-->

                 {{--           <div id="app4">--}}


                                <flash message="{{ session('flash') }}"></flash>


                                <br>

                                <!--Product data-->
                                <h2 class="h2-responsive">{{$card->card_product_name}}</h2>


<br>


                                    <br> <br>
                            <div class="row col-lg-12">


                                <div class="col-md-8">
                                <!--Table-->
                                <table class="table">

                                    <!--Table head-->
                                    <thead class="blue-grey lighten-5">
                                    <tr>
                                        <th>Was</th>
                                        <th>Pay</th>
                                        <th>Save</th>
                                    </tr>
                                    </thead>
                                    <!--Table head-->

                                    <!--Table body-->
                                    <tbody>


                                    <tr>
                                        <th scope="row"><h2 style="text-decoration: line-through; color: #9e9e9e; /* font-size: 1.1rem; */ font-weight: 300;">N${{$card->card_old_price}}</h2></th>
                                        <td><h2 style="float: left;font-weight: 800; color: #0275d8;">N${{$card->card_new_price}}</h2></td>
                                        <td><h2 style="color: #95d03a; /* font-size: 1.1rem; */ font-weight: 300;" id="discount">N$</h2></td>

                                    </tr>

                                    </tbody>
                                    <!--Table body-->
                                </table>
                                <!--Table-->

                                </div>

                                <br>

                                <div class="col-md-4">




                                    @if (Auth::check())
                                    <subscribe-button :active="{{ json_encode($card->isSubscribedTo)}}"></subscribe-button>
                                &nbsp &nbsp

                                    @endif


                                        <p>   &nbsp
                                            <b>Posted</b>  &nbsp {{ $card->created_at->diffForHumans() }}


                                            &nbsp &nbsp
                                    </p>


                           {{--
                                    @if (Auth::check())

                                     | &nbsp <b> Add to favorites </b>  &nbsp&nbsp&nbsp

                                        <favorite
                                            :card={{ $card->id }}
                                            :favorited={{ $card->favorited() ? 'true' : 'false' }}
                                        ></favorite>







                                    @endif--}}

                                </div>
{{--

                                <div class="right row">

                                    &nbsp &nbsp  &nbsp &nbsp

                                    @if(!Auth::guest())
                                        @if(Auth::user()->id == $card->user_id)
                                            <a href="/cards/{{$card->id}}/edit" class="btn btn-default">Edit</a>

                                            {!!Form::open(['action' => ['CardsController@destroy', $card->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

                                            {!!Form::close()!!}
                                        @endif
                                    @endif



                                </div>

--}}





                            </div>


                                    

                                </div>

                                <hr>
                                <p>{!!$card->card_product_description!!}</p>

            
                            </div>
                            <!--Product-->

                        </div>
                    </div>
                    <!--/.First row-->

                    <!--Second row-->
                    <div class="row">
                        
                        <!--Heading-->
                            <div class="col reviews wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                               
                                                  <div class="divider-new">
                                    <h2 class="h2-responsive">Contact <strong> {!!$card->merchant->merchant_name!!}</strong></h2>

                            </div>

            
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
<br>
                <!--Second column-->
                <div class="col-md-4">
                    <ul class="text-center">
                        <br>
                        <li class="wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;"><i class="fa fa-map-marker teal-text"></i>
                            <p>{!!$merchant->merchant_physical_address!!}</p>
                        </li>

                        <li class="wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;"><a href="tel:{!!$merchant->merchant_phone!!}"> <i class="fa fa-phone teal-text"></i></a>
                           <p><a href="tel:{!!$merchant->merchant_phone!!}"> {!!$merchant->merchant_phone!!}</a></p>
                        </li>

                        <li class="wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;"><a href="mailto:{!!$merchant->merchant_email!!}"> <i class="fa fa-envelope teal-text"></i></a>
                           <p><a href="mailto:{!!$merchant->merchant_email!!}"> {!!$merchant->merchant_email!!} </a></p>
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

<style>
#st-1 {
    font-family: "Helvetica Neue", Verdana, Helvetica, Arial, sans-serif;
    direction: ltr;
    display: block;
    opacity: 1;
    text-align: center;
    z-index: 94034;
}
</style>

             <div class="col reviews wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                           

                                <div class="divider-new">
                                    <h2 class="h2-responsive">Share this Deal with your friends</h2>
                            </div>


        <section id="social-icons">



                                <div class="sharethis-inline-share-buttons"></div>
                          

{{--                        
                        <!--Facebook-->
<a type="button" class="btn-floating btn-large btn-fb waves-effect waves-light"><i class="fa fa-facebook"></i></a>
<!--Twitter-->
<a type="button" class="btn-floating btn-large btn-tw waves-effect waves-light"><i class="fa fa-twitter"></i></a>
<!--Google +-->
<a type="button" class="btn-floating btn-large btn-gplus waves-effect waves-light"><i class="fa fa-google-plus"></i></a>
<!--Linkedin-->  --}}
            
  

    </section>



                    <div class="row">

                          <div class="col-lg-12">

<br><br>

      <div class="divider-new">
                                    <h2 class="h2-responsive">Rate this Deal</h2>
                            </div>



@if (auth()->check())

          <div class="col reviews wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                           

                          

<style>

div.stars {
    width: 270px;
    display: inline-block;
  }
  
  input.star { display: none; }
  
  label.star {
    float: right;
    padding: 10px;
    font-size: 36px;
    color: #d8d8d8;
    transition: all .2s;
  }
  
  input.star:checked ~ label.star:before {
    content: '\f005';
    color: #FD4;
    transition: all .25s;
  }
  
  input.star-5:checked ~ label.star:before {
    color: #FE7;
    text-shadow: 0 0 20px #952;
  }
  
  input.star-1:checked ~ label.star:before { color: #F62; }
  
  label.star:hover { transform: rotate(-15deg) scale(1.3); }
  
  label.star:before {
    content: '\f006';
    font-family: FontAwesome;
  }

</style>




<div class="stars">

  <form method="POST" action="/cards/{{ $card->id }}/reviews">
  
<!-- action="ReviewController@store" -->

  {{ csrf_field() }}
    
    <div class="md-form">
    <input class="star star-5" id="star-5" type="radio" name="star" value="5" />
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
    <label class="star star-1" for="star-1"></label>
    </div>
    <br><br>  <br><br><br>

  <!--Basic textarea-->
<div class="md-form">
    <textarea type="text" id="form7" class="md-textarea" name="body" id="body"></textarea>
    <label for="form7">Your review</label>
</div>

<button type="submit" class="btn btn-primary btn-sm">Submit</button>

  </form>
</div> 
@else

                  <p class="text-center">Please <a href="{{ route('login')}}" ><strong>Sign In </strong></a> or  <a href="{{ route('register')}}" ><strong>Register </strong>  </a>  to Rate this deal.</p>

@endif 
  <!--Heading-->
                        <div class="col reviews wow fadeIn" data-wow-delay="0.4s" style="animation-name: none; visibility: visible;">
                          <div class="divider-new">
                                <h2 class="h2-responsive">Reviews</h2>
                            </div>
                        </div>


                    @foreach ($card->reviews as $review)
                   
                      


                        <!--First review-->
                        <div class="media wow fadeIn" data-wow-delay="0.2s" style="animation-name: none; visibility: visible;">
                            <a class="media-left" href="#">
                                <img class="rounded-circle" src="/uploads/avatars/{{ $review->owner->avatar}}" height="50px" width="50px" alt="Generic placeholder image">
                            </a>
                            <div class="media-body ml-4">
                                <h4 class="media-heading"> <a href="#">{{ $review->owner->name}} </a> </h4> <p>{{ $review->created_at->diffForHumans() }}</p>
                                <ul class="rating inline-ul list-unstyled">

                                  

                                    @if (($review->star) === 1)
                                         <li><i class="fa fa-star amber-text"></i></li>               
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    @elseif (($review->star) ===  2)
                                          <li><i class="fa fa-star amber-text"></i></li>               
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>

                                    @elseif (($review->star) ===  3)
                                          <li><i class="fa fa-star amber-text"></i></li>               
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    @elseif (($review->star) ===  4)
                                         <li><i class="fa fa-star amber-text"></i></li>               
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    @elseif (($review->star) ===  5)
                                          <li><i class="fa fa-star amber-text"></i></li>               
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    @else
                                        I don't have any records!
                                    @endif

                                </ul>
                                <p>{{ $review->body }}</p>
                            </div>
                        </div>


                        <br>

                        @endforeach
                     

        
                        </div>



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

                 <script>


                     var np = {{$card->card_new_price}};
                     var op = {{$card->card_old_price}};

                     var discount = op - np;

                     var discount = document.getElementById("discount").innerHTML = "N$" + discount;




                 </script>



<script>
// Tooltips Initialization
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

<script>
$('#star-5').tooltip(options)
</script>

<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=59a88d77018dd700116ea8cd&product=inline-share-buttons"></script>



@endsection