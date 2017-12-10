@extends('layouts.admin')

@section('content')



<!--
   $table->increments('id');
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
            $table->string('combo_email');
            $table->timestamps();

-->

{!! Form::open(['action' => 'ComboDealsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}


<!--Naked Form-->
<div class="card-block">

    <!--Header-->
    <div class="text-center">
        <h3><i class="fa fa-pencil prefix"></i> Create a Combo</h3>
        <hr class="mt-2 mb-2">
    </div>

    <!--Body-->
    <p>We'll write rarely, but only the best content.</p>
    <br>

    <!--Body-->

     <div class="md-form">
        <i class="fa fa-envelope prefix"></i>
        <!--<input type="text" id="form3" class="form-control">-->
         {{Form::text('combo_description', '', ['class' => 'form-control', 'id' => 'form3'])}}
        <label for="form3">Combo title</label>
    </div>




    
<!-- Start of Offer 1 -->
<hr>
    <h3> Offer 1 Details</h3>
    

    <br>

    
    <div class="md-form">
            {{Form::file('offer1_image')}}
    </div>   
    
    <div class="md-form">
        <i class="fa fa-user prefix"></i>
        <!--<input type="text" id="form3" class="form-control">-->
         {{Form::text('offer1_title', '', ['class' => 'form-control', 'id' => 'form3'])}}
        <label for="form3">Product/service title</label>
    </div>

    <div class="md-form">
        <i class="fa fa-envelope prefix"></i>
        <br><br><br>
     <!--<textarea type="text" id="form8" class="md-textarea"></textarea>-->
           {!!Form::textarea('offer1_description', '', ['id' => 'article-ckeditor','class' => 'textarea'])!!}

        <label for="form2">Your Offer Description</label>
    </div>
<hr>
<br>

<!-- End of Offer 1 -->



    
<!-- Start of Offer 2 -->
<hr>
    <h3> Offer 2 Details</h3>
    

    <br>

    
    <div class="md-form">
            {{Form::file('offer2_image')}}
    </div>   
    
    <div class="md-form">
        <i class="fa fa-user prefix"></i>
        <!--<input type="text" id="form3" class="form-control">-->
         {{Form::text('offer2_title', '', ['class' => 'form-control', 'id' => 'form3'])}}
        <label for="form3">Product/service title</label>
    </div>

    <div class="md-form">
        <i class="fa fa-envelope prefix"></i>
        <br><br><br>
     <!--<textarea type="text" id="form8" class="md-textarea"></textarea>-->
           {!!Form::textarea('offer2_description', '', ['id' => 'article-ckeditor','class' => 'textarea'])!!}

        <label for="form2">Your Offer Description</label>
    </div>
<hr>
<br>

<!-- End of Offer 2 -->


    
<!-- Start of Offer 1 -->
<hr>
    <h3> Offer 3 Details</h3>
    

    <br>

    
    <div class="md-form">
            {{Form::file('offer3_image')}}
    </div>   
    
    <div class="md-form">
        <i class="fa fa-user prefix"></i>
        <!--<input type="text" id="form3" class="form-control">-->
         {{Form::text('offer3_title', '', ['class' => 'form-control', 'id' => 'form3'])}}
        <label for="form3">Product/service title</label>
    </div>

    <div class="md-form">
        <i class="fa fa-envelope prefix"></i>
        <br><br><br>
     <!--<textarea type="text" id="form8" class="md-textarea"></textarea>-->
           {!!Form::textarea('offer3_description', '', ['id' => 'article-ckeditor','class' => 'textarea'])!!}

        <label for="form2">Your Offer Description</label>
    </div>
<hr>

<br>

<!-- End of Offer 1 -->





    <div class="md-form">
        <i class="fa fa-tag prefix"></i>
       <!-- <input type="text" id="form32" class="form-control"> -->

         {{Form::text('combo_old_price', '', ['class' => 'form-control'])}}
        <label for="form34">Old Price</label>
    </div>

    <div class="md-form">
        <i class="fa fa-tag prefix"></i>
       <!-- <input type="text" id="form32" class="form-control">-->
           {{Form::text('combo_new_price', '', ['class' => 'form-control'])}}
        <label for="form34">New Price</label>
    </div>


   
 <div class="md-form">
        <i class="fa fa-search prefix"></i>
       <!-- <input type="text" id="form32" class="form-control">-->
           {{Form::text('combo_long', '', ['class' => 'form-control', 'id' => 'searchmap'])}}
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

 <div class="md-form">
        <i class="fa fa-map-marker prefix"></i>
       <!-- <input type="text" id="form32" class="form-control"> -->

         {{Form::text('combo_physical_address', '', ['class' => 'form-control'])}}
        <label for="form34">Physical Address</label>
    </div>
    </div>



    


    <div class="md-form">
        <i class="fa fa-bullseye prefix"></i>
      <!--   <input type="text" id="merchant_lat" class="form-control" name="merchant_lat">-->
       {{Form::text('combo_lat', '', ['class' => 'form-control', 'id' => 'combo_lat'])}} 
        <label for="form34">Latitude</label>
    </div>



 <div class="md-form">
        <i class="fa fa-bullseye prefix"></i>
       <!-- <input type="text" id="form32" class="form-control">-->
           {{Form::text('combo_lng', '', ['class' => 'form-control', 'id' => 'combo_lng'])}}
        <label for="form34">Longitude</label>
    </div>   

    <div class="md-form">
        <i class="fa fa-phone prefix"></i>
       <!-- <input type="text" id="form32" class="form-control">-->
           {{Form::text('combo_phone', '', ['class' => 'form-control'])}}
        <label for="form34">Contact Number</label>
    </div>
 
  
 
    <div class="md-form">
        <i class="fa fa-envelope prefix"></i>
       <!-- <input type="text" id="form32" class="form-control">-->
           {{Form::text('combo_email', '', ['class' => 'form-control'])}}
        <label for="form34">Email Address</label>
    </div>
 
    <div class="md-form">
        <i class="fa fa-website prefix"></i>
       <!-- <input type="text" id="form32" class="form-control">-->
           {{Form::text('combo_website', '', ['class' => 'form-control'])}}
        <label for="">Website url (if any)</label>
    </div>


    
    <div class="md-form">
        <i class="fa fa-facebook prefix"></i>
       <!-- <input type="text" id="form32" class="form-control">-->
           {{Form::text('combo_facebook', '', ['class' => 'form-control'])}}
        <label for="form34">Facebook Page (if any)</label>
    </div>


    <div class="md-form">
        <i class="fa fa-twitter prefix"></i>
       <!-- <input type="text" id="form32" class="form-control">-->
           {{Form::text('combo_twitter', '', ['class' => 'form-control'])}}
        <label for="form34">Twitter Page (if any)</label>
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
<script>
// Data Picker Initialization
$('.datepicker').pickadate();
</script>



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

        $('#combo_lat').val(lat);
        $('#combo_lng').val(lng);

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