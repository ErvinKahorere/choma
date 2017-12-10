@extends('layouts.admin')

@section('content')

{!! Form::open(['action' => 'BannerAdsController@update', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}


<!--Naked Form-->
<div class="card-block">

    <!--Header-->
    <div class="text-center">
        <h3><i class="fa fa-pencil prefix"></i> Edit a Banner Ad</h3>
        <hr class="mt-2 mb-2">
    </div>

    <!--Body-->
    <br>

  
     <div class="md-form">
            {{Form::file('featured_image')}}
        </div>



   

    <div class="text-center">
       <!-- <button class="btn btn-default">Submit</button>-->
         {{Form::hidden('_method', 'PUT')}}

        {{Form::submit('Submit', ['class' => 'btn btn-default'])}}

       
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
@endsection