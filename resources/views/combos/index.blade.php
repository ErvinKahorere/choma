@extends('layouts.normal')

@section('content')

<!--Main column-->
<div class="col-lg-9">
    <!--First row-->
    <div class="row wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
        <div class="col-lg-12">
            <br>
            <h3>Displaying all <strong>Combos</strong> ... </h3>
            <hr>
            <br> 
            @if(count($combos) > 0) 

            <div class="row">

            @foreach($combos as $combo)
            <div class="col-lg-12">
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
          
             <a href="/combos/{{$combo->id}}" class="btn btn-default waves-effect waves-light">View Combo</a></span>
        </div>
        </div>
    </div>
    
</div>

<br>

<hr>

<!-- End of Combo -->
               



            </div>
            <br>
            @endforeach 

            </div>

            @else
            <p>Sorry, no combos found</p>
            @endif
        </div>
        <!--First row-->
    </div>
    <!--End of col-lg-9-->
</div>
<!--/.Main column-->


  
@endsection




