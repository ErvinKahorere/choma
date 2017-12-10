@extends('layouts.admin')

@section('content')

{!! Form::open(['action' => 'OurPicksController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}


<!--Naked Form-->
<div class="card-block">

    <!--Header-->
    <div class="text-center">
        <h3><i class="fa fa-pencil prefix"></i> Create a Deal Card</h3>
        <hr class="mt-2 mb-2">
    </div>

    <!--Body-->
    <p>We'll write rarely, but only the best content.</p>
    <br>

    <!--Body-->
    <div class="md-form">
        <i class="fa fa-user prefix"></i>
        <!--<input type="text" id="form3" class="form-control">-->
         {{Form::text('card_product_name', '', ['class' => 'form-control', 'id' => 'form3'])}}
        <label for="form3">Product/service title</label>
      

    </div>

    <div class="md-form">
        <i class="fa fa-envelope prefix"></i>
        <br><br><br>
     <!--<textarea type="text" id="form8" class="md-textarea"></textarea>-->
           {!!Form::textarea('card_product_description', '', ['id' => 'article-ckeditor','class' => 'textarea'])!!}

        <label for="form2">Your Product Description</label>
    </div>

    <div class="md-form">
        <i class="fa fa-tag prefix"></i>
       <!-- <input type="text" id="form32" class="form-control"> -->

         {{Form::text('card_old_price', '', ['class' => 'form-control'])}}
        <label for="form34">Old Price</label>
    </div>

    <div class="md-form">
        <i class="fa fa-tag prefix"></i>
       <!-- <input type="text" id="form32" class="form-control">-->
           {{Form::text('card_new_price', '', ['class' => 'form-control'])}}
        <label for="form34">New Price</label>
    </div>

<!--    
<div class="form-group">
  <label for="sel1">Select Category:</label>
  <select class="form-control" id="sel1">
    <option>Please Select</option>
    <option>Beauty &amp; Spa</option>
    <option>Food &amp; Drinks</option>
    <option>Hotel &amp; Travel</option>
       <option>Home Appliances</option>
       <option>Frangrances &amp; Cosmetics</option>
       <option>Phones &amp; Electronics</option>
        <option>B2B Deals</option>
       <option>Things to Do</option>
       <option>Auto Care</option>
       <option>Gifts</option>
  </select>
</div>

-->

   <div class="form-group">
  <label for="sel1">Select Category:</label>

   <!-- @foreach ($categories as $category);
       $categories[$category->id] = $category->name;
    @endforeach; -->
    {!!Form::select('category_id', $categories, null, ['class' => 'form-control'])!!}
</div>

    


     <div class="md-form">
            {{Form::file('cover_image')}}
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
@endsection