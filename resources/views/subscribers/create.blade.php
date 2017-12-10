@extends('layouts.admin')

@section('content')

{!! Form::open(['action' => 'SubscribersController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}


<!--Naked Form-->
<div class="card-block">

    <!--Header-->
    <div class="text-center">
        <h3><i class="fa fa-pencil prefix"></i> Create a Subscriber</h3>
        <hr class="mt-2 mb-2">
    </div>



    <!--Body-->


   
    <div class="md-form">
        <i class="fa fa-user prefix"></i>
       <!-- <input type="text" id="form32" class="form-control"> -->

         {{Form::text('name', '', ['class' => 'form-control'])}}
        <label for="form34">Name</label>
    </div>
    <div class="md-form">
        <i class="fa fa-envelope prefix"></i>
       <!-- <input type="text" id="form32" class="form-control"> -->

         {{Form::text('email', '', ['class' => 'form-control'])}}
        <label for="form34">Email</label>
    </div>
    <div class="md-form">
        <i class="fa fa-phone prefix"></i>
       <!-- <input type="text" id="form32" class="form-control"> -->

         {{Form::text('phone', '', ['class' => 'form-control'])}}
        <label for="form34">Phone Number</label>
    </div>



    <div class="text-center">
       <!-- <button class="btn btn-default">Submit</button>-->

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