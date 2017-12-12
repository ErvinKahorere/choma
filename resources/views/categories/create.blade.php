@extends('layouts.admin')

@section('content')

{!! Form::open(['action' => 'CategoryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}


<!--Naked Form-->
<div class="card-block">

    <!--Header-->
    <div class="text-center">
        <h3><i class="fa fa-pencil prefix"></i> Create a Category</h3>
        <hr class="mt-2 mb-2">
    </div>



    <!--Body-->

<div class="row">
   
    <div class="md-form">
        <i class="fa fa-tag prefix"></i>
       <!-- <input type="text" id="form32" class="form-control"> -->

         {{Form::text('name', '', ['class' => 'form-control'])}}


        <label for="form34">Category Name</label>
    </div>


    <div class="md-form">
        {{Form::file('category_image')}}
    </div>


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