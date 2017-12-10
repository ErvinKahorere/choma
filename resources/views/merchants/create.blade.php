<!--
          merchant_name
            merchant_city
            merchant_category
            merchant_physical_address
          merchant_long
        merchant_phone
           merchant_email
           merchant_description
        merchant_logo
           merchant_website
           merchant_facebook 
          merchant_twitter
     
-->


@extends('layouts.admin')

@section('content')





{!! Form::open(['action' => 'MerchantsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}


<!--Naked Form-->
<div class="card-block">

    <!--Header-->
    <div class="text-center">
        <h3><i class="fa fa-pencil prefix"></i> Add a Store/Merchant</h3>
        <hr class="mt-2 mb-2">
    </div>

    <!--Body-->
    <p>Set up your store.</p>
    <br>

    <!--Body-->
    <div class="md-form">
        <i class="fa fa-user prefix"></i>
        <!--<input type="text" id="form3" class="form-control">-->
         {{Form::text('merchant_name', '', ['class' => 'form-control', 'id' => 'form3'])}}
        <label for="form3">Store/Merchant Name</label>
    </div>

    <div class="md-form">
        <i class="fa fa-envelope prefix"></i>
        <br><br><br>
     <!--<textarea type="text" id="form8" class="md-textarea"></textarea>-->
           {!!Form::textarea('merchant_description', '', ['id' => 'article-ckeditor','class' => 'textarea'])!!}

        <label for="form2">Brief Merchant/Store Bio or Description</label>
    </div>





<br>


<br>


    
 <div class="md-form">
        <i class="fa fa-search prefix"></i>
       <!-- <input type="text" id="form32" class="form-control">-->
           {{Form::text('merchant_long', '', ['class' => 'form-control', 'id' => 'searchmap'])}}
        <label for="form34">Search Map</label>
    </div>   



<style>

    #map-canvas {
        width: 100%;
        height: 250px;
    }

</style>


     <div class="md-form">

       <!-- <input type="text" id="form32" class="form-control">-->
          <div id="map-canvas"></div>

         
    </div>


<br>
<br>


    <div class="form-group">
        <label for="sel1">Select City:</label>

    <!-- @foreach ($cities as $city);
       $categories[$category->id] = $category->name;
    @endforeach; -->
        {!!Form::select('merchant_city', $cities, null, ['class' => 'form-control'])!!}
    </div>



  <!--First row-->
    <div class="row">
        <!--First column-->
        <div class="col-md-6">

    <div class="md-form">
        <i class="fa fa-map-marker prefix"></i>
       <!-- <input type="text" id="form32" class="form-control"> -->

         {{Form::text('merchant_physical_address', '', ['class' => 'form-control'])}}
        <label for="form34">Physical Address</label>
    </div>
    </div>



    


    <div class="md-form">
        <i class="fa fa-bullseye prefix"></i>
      <!--   <input type="text" id="merchant_lat" class="form-control" name="merchant_lat">-->
       {{Form::text('merchant_lat', '', ['class' => 'form-control', 'id' => 'merchant_lat'])}} 
        <label for="form34">Latitude</label>
    </div>



 <div class="md-form">
        <i class="fa fa-bullseye prefix"></i>
       <!-- <input type="text" id="form32" class="form-control">-->
           {{Form::text('merchant_lng', '', ['class' => 'form-control', 'id' => 'merchant_lng'])}}
        <label for="form34">Longitude</label>
    </div>   

    <div class="md-form">
        <i class="fa fa-phone prefix"></i>
       <!-- <input type="text" id="form32" class="form-control">-->
           {{Form::text('merchant_phone', '', ['class' => 'form-control'])}}
        <label for="form34">Contact Number</label>
    </div>
 
  
 
    <div class="md-form">
        <i class="fa fa-envelope prefix"></i>
       <!-- <input type="text" id="form32" class="form-control">-->
           {{Form::text('merchant_email', '', ['class' => 'form-control'])}}
        <label for="form34">Email Address</label>
    </div>
 
    <div class="md-form">
        <i class="fa fa-website prefix"></i>
       <!-- <input type="text" id="form32" class="form-control">-->
           {{Form::text('merchant_website', '', ['class' => 'form-control'])}}
        <label for="">Website url (if any)</label>
    </div>


    
    <div class="md-form">
        <i class="fa fa-facebook prefix"></i>
       <!-- <input type="text" id="form32" class="form-control">-->
           {{Form::text('merchant_facebook', '', ['class' => 'form-control'])}}
        <label for="form34">Facebook Page (if any)</label>
    </div>


    <div class="md-form">
        <i class="fa fa-twitter prefix"></i>
       <!-- <input type="text" id="form32" class="form-control">-->
           {{Form::text('merchant_twitter', '', ['class' => 'form-control'])}}
        <label for="form34">Twitter Page (if any)</label>
    </div>
<br>

</div>

<h5>Store Logo</h5>
     <div class="md-form">
            {{Form::file('merchant_logo')}}
        </div>


    
     <div class="md-form">
        <p> Please read and agree our to <a href=""> Terms of Use </a> 
        {{Form::checkbox('name', 'value')}}</p>
        </div>


<div class="md-form">
       <!-- <i class="fa fa-bullseye prefix"></i> -->
      
    <merchant-location>    </merchant-location>
    </div>   

    

    

   

    <div class="text-center">
       <!-- <button class="btn btn-default">Submit</button>-->

        {{Form::submit('Submit', ['class' => 'btn btn-default'])}}


        <div class="call">

        


            <br>
            <p>Or would you prefer we create it (with your guidance) for you?
                <br>
                <span><i class="fa fa-phone"> </i></span> +264 377 0919</p>
        </div>
    </div>

</div>
<!--Naked Form-->




{!! Form::close() !!}







@endsection

@section('scripts')


 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKmLyF23CBohQXOrVRgIP2WhVkTg_IqOw&libraries=places">
</script>
<script>

    var map = new google.maps.Map(document.getElementById('map-canvas'),{
        center: {
            lat: -22.95764,
            lng: 18.490409999999997
        },
        zoom:8
    });

    var marker = new google.maps.Marker({
        position:  {
            lat: -22.95764,
            lng: 18.490409999999997
        },
        map: map,
        draggable: true
    });
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