@extends('layouts.admin')

@section('content')

{!!Form::open(['action' => ['CardsController@update', $card->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}


<!--Naked Form-->
<div class="card-block">

    <!--Header-->
    <div class="text-center">
        <h3><i class="fa fa-pencil prefix"></i> Edit a Deal Card</h3>
        <hr class="mt-2 mb-2">
    </div>

    <!--Body-->
    <p>We'll write rarely, but only the best content.</p>
    <br>

    <!--Body-->
    <div class="md-form">
        <i class="fa fa-user prefix"></i>
        <!--<input type="text" id="form3" class="form-control">-->
         {{Form::text('card_product_name', $card->card_product_name, ['class' => 'form-control', 'id' => 'form3'])}}
        <label for="form3">Product/service title</label>
      

    </div>

    <div class="md-form">
        <i class="fa fa-envelope prefix"></i>
        <br><br><br>
     <!--<textarea type="text" id="form8" class="md-textarea"></textarea>-->
           {!!Form::textarea('card_product_description', $card->card_product_description, ['id' => 'article-ckeditor', 'class' => 'textarea'])!!}

        <label for="form2">Your Product Description</label>



        
    </div>

    <div class="md-form">
        <i class="fa fa-tag prefix"></i>
       <!-- <input type="text" id="form32" class="form-control"> -->

         {{Form::text('card_old_price', $card->card_old_price, ['class' => 'form-control'])}}
        <label for="form34">Old Price</label>
    </div>

    <div class="md-form">
        <i class="fa fa-tag prefix"></i>
       <!-- <input type="text" id="form32" class="form-control">-->
           {{Form::text('card_new_price', $card->card_new_price, ['class' => 'form-control'])}}
        <label for="form34">New Price</label>
    </div>

    <div class="md-form">
        <i class="fa fa-pencil prefix"></i>
       <!-- <input type="text" id="form32" class="form-control">-->
           {{Form::text('card_merchant_name', '', ['class' => 'form-control'])}}
        <label for="form34">Merchant Name</label>
    </div>

    
     <div class="md-form">
            {{Form::file('cover_image')}}
        </div>



    <div class="text-center">
       <!-- <button class="btn btn-default">Submit</button>-->

       {{Form::hidden('_method', 'PUT')}}

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


{!!Form::close()!!}

@endsection