@extends('layouts.admin')

@section('content')


 {{--  'title'
 'body'
 'featured_image
  --}}


{!! Form::open(['action' => 'BlogsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}


<!--Naked Form-->
<div class="card-block">

    <!--Header-->
    <div class="text-center">
        <h3><i class="fa fa-pencil prefix"></i> Create a new Blog Article</h3>
        <hr class="mt-2 mb-2">
    </div>

    <!--Body-->
    <p>We'll write rarely, but only the best content.</p>
    <br>

    <!--Body-->
    <div class="md-form">
        <i class="fa fa-user prefix"></i>
        <!--<input type="text" id="form3" class="form-control">-->
         {{Form::text('title', '', ['class' => 'form-control', 'id' => 'form3'])}}
        <label for="form3">Product/service title</label>
      

    </div>

    <div class="md-form">
        <i class="fa fa-envelope prefix"></i>
        <br><br><br>
     <!--<textarea type="text" id="form8" class="md-textarea"></textarea>-->
           {!!Form::textarea('body', '', ['id' => 'article-ckeditor','class' => 'textarea'])!!}

        <label for="form2">Your Product Description</label>
    </div>



     <div class="md-form">
            {{Form::file('featured_image')}}
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