@extends('layouts.app')

@section('content')

 <div class="row">
    @if(count($cards) > 0)
        @foreach($cards as $card)
      
            <div class="col-lg-4">
                            <!--Card-->
                            <div class="card  wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">

                                <!--Card image-->
                                <div class="view overlay hm-white-slight">
       {{--                             <img src="/storage/cover_images/{{$card->cover_image}}" class="img-fluid" alt="">
                                    <a href="/cards/{{$card->channel->name}}/{{$card->id}}">
--}}

            <div class="mask waves-effect waves-light"></div>
        </a>
                                </div>
                                <!--/.Card image-->

                                  <!--Card content-->
    <div class="card-block text-center">
        <!--Category & Title--> 
       <h4 class="card-title"><a href="/cards/{{$card->channel->name}}/{{$card->id}}">{{$card->card_product_name}}</a></h4>

        <!--Description-->
        <p class="card-text"> <a href="/merchants/{{$card->merchant->id}}">  {!!$card->merchant->merchant_name!!} </a>
        </p>



        <!--Card footer-->
        <div class="card-footer">
            <span class="left">N${{$card->card_new_price}}<span class="discount">{{$card->card_old_price}}</span></span>
            <span class="right">  <a href="/cards/{{$card->channel->name}}/{{$card->id}}" class="btn btn-default waves-effect waves-light"><i class="fa fa-eye"></i> View</a></span>
        </div>

    </div>
    <!--/.Card content-->

                            </div>
                            <!--/.Card-->
                            <br>
                        </div>

                            
        @endforeach
    <!--    {{$cards->links()}} -->
    @else
        <p>No cards found</p>
    @endif
 </div>


 <div> <div>


                      <!--/.Carousel Wrapper-->
                              <div class="divider-new">
                                <h2 class="h2-responsive">Discover new Stores</h2>
                            </div>
                            
 {{--@foreach($combos as $combo)
           
                <!--Combo Card-->

--}}{{--
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
            $table->string('combo_email');  --}}{{--

            <div class="card-group"> 


                <h1>{!!$combo->combo_description!!}</h1>   

                
            </div>
            <br>

    <div class="card-group">
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

     

              <!--Card footer-->
        <div class="card-footer">
            <span class="left">N${{$combo->combo_new_price}} <span class="discount">N${{$combo->combo_old_price}} </span></span>
            <span class="right">
          
             <a href="/combos/{{$combo->id}}" class="btn btn-default waves-effect waves-light">View</a></span>
        </div>
        </div>
    </div>
    
</div>

<br>

<hr>

<!-- End of Combo -->
               



            <br>
            @endforeach --}}



         <section>

             <!--Carousel Wrapper-->
             <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">



                 <!--Slides-->
                 <div class="carousel-inner" role="listbox">

                     <!--First slide-->
                     <div class="carousel-item active">

                         @if(count($merchants) > 0)
                             @foreach($merchants as $merchant)
                                 <div class="col-md-4">
                                     <div class="card">
                                         <img class="img-fluid" src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="">

                                         <div class="avatar_card">
                                             <a href="/merchants/{{$merchant->id}}">
                                                 <img src="/storage/merchant_logos/{{$merchant->merchant_logo}}"
                                                      class="rounded-circle" alt="{{$merchant->merchant_name}} logo">
                                             </a>
                                         </div>
                                         <div class="card-body card-block text-center">
                                             <h4 class="card-title">{{$merchant->merchant_name}}</h4>
                                             <p class="card-text">{{$merchant->merchant_city}}</p>
                                             <a class="btn btn-primary waves-effect waves-light">Subscribe</a>
                                         </div>
                                     </div>
                                 </div>
                             @endforeach
                         @endif



               {{--          <div class="col-md-4 clearfix d-none d-md-block">
                             <div class="card">
                                 <img class="img-fluid" src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="Card image cap">

                                 <div class="avatar_card">
                                     <img src="https://www.solodev.com/assets/carousel/image3.png" class="rounded-circle" alt="Sample avatar image.">
                                 </div>
                                 <div class="card-body card-block text-center">
                                     <h4 class="card-title">Store Name</h4>
                                     <p class="card-text">Store Location</p>
                                     <a class="btn btn-primary waves-effect waves-light">Subscribe</a>
                                 </div>
                             </div>
                         </div>

                         <div class="col-md-4 clearfix d-none d-md-block">
                             <div class="card">
                                 <img class="img-fluid" src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="Card image cap">

                                 <div class="avatar_card">
                                     <img src="https://www.solodev.com/assets/carousel/image3.png" class="rounded-circle" alt="Sample avatar image.">
                                 </div>
                                 <div class="card-body card-block text-center">
                                     <h4 class="card-title">Store Name</h4>
                                     <p class="card-text">Store Location</p>
                                     <a class="btn btn-primary waves-effect waves-light">Subscribe</a>
                                 </div>
                             </div>
                         </div>--}}

                     </div>
                     <!--/.First slide-->

                     <!--Second slide-->
                   {{--  <div class="carousel-item active">

                         <div class="col-md-4">
                             <div class="card">
                                 <img class="img-fluid" src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="Card image cap">

                                 <div class="avatar_card">
                                     <img src="https://www.solodev.com/assets/carousel/image3.png" class="rounded-circle" alt="Sample avatar image.">
                                 </div>
                                 <div class="card-body card-block text-center">
                                     <h4 class="card-title">Store Name</h4>
                                     <p class="card-text">Store Location</p>
                                     <a class="btn btn-primary waves-effect waves-light">Subscribe</a>
                                 </div>
                             </div>
                         </div>

                         <div class="col-md-4 clearfix d-none d-md-block">
                             <div class="card">
                                 <img class="img-fluid" src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="Card image cap">

                                 <div class="avatar_card">
                                     <img src="https://www.solodev.com/assets/carousel/image3.png" class="rounded-circle" alt="Sample avatar image.">
                                 </div>
                                 <div class="card-body card-block text-center">
                                     <h4 class="card-title">Store Name</h4>
                                     <p class="card-text">Store Location</p>
                                     <a class="btn btn-primary waves-effect waves-light">Subscribe</a>
                                 </div>
                             </div>
                         </div>

                         <div class="col-md-4 clearfix d-none d-md-block">
                             <div class="card">
                                 <img class="img-fluid" src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="Card image cap">

                                 <div class="avatar_card">
                                     <img src="https://www.solodev.com/assets/carousel/image3.png" class="rounded-circle" alt="Sample avatar image.">
                                 </div>
                                 <div class="card-body card-block text-center">
                                     <h4 class="card-title">Store Name</h4>
                                     <p class="card-text">Store Location</p>
                                     <a class="btn btn-primary waves-effect waves-light">Subscribe</a>
                                 </div>
                             </div>
                         </div>

                     </div>--}}
                     <!--/.Second slide-->
{{--
                     <!--Third slide-->
                     <div class="carousel-item">

                         <div class="col-md-4">
                             <div class="card">
                                 <img class="img-fluid" src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="Card image cap">

                                 <div class="avatar_card">
                                     <img src="https://www.solodev.com/assets/carousel/image3.png" class="rounded-circle" alt="Sample avatar image.">
                                 </div>
                                 <div class="card-body card-block text-center">
                                     <h4 class="card-title">Store Name</h4>
                                     <p class="card-text">Store Location</p>
                                     <a class="btn btn-primary waves-effect waves-light">Subscribe</a>
                                 </div>
                             </div>
                         </div>

                         <div class="col-md-4 clearfix d-none d-md-block">
                             <div class="card">
                                 <img class="img-fluid" src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="Card image cap">

                                 <div class="avatar_card">
                                     <img src="https://www.solodev.com/assets/carousel/image3.png" class="rounded-circle" alt="Sample avatar image.">
                                 </div>
                                 <div class="card-body card-block text-center">
                                     <h4 class="card-title">Store Name</h4>
                                     <p class="card-text">Store Location</p>
                                     <a class="btn btn-primary waves-effect waves-light">Subscribe</a>
                                 </div>
                             </div>
                         </div>

                         <div class="col-md-4 clearfix d-none d-md-block">
                             <div class="card">
                                 <img class="img-fluid" src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="Card image cap">

                                 <div class="avatar_card">
                                     <img src="https://www.solodev.com/assets/carousel/image3.png" class="rounded-circle" alt="Sample avatar image.">
                                 </div>
                                 <div class="card-body card-block text-center">
                                     <h4 class="card-title">Store Name</h4>
                                     <p class="card-text">Store Location</p>
                                     <a class="btn btn-primary waves-effect waves-light">Subscribe</a>
                                 </div>
                             </div>
                         </div>

                     </div>
                     <!--/.Third slide-->--}}

                 </div>
                 <!--/.Slides-->

                 <!--Controls-->
                 <div class="controls-top">
                     <a class="btn-floating waves-effect waves-light" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                     <a class="btn-floating waves-effect waves-light" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                 </div>
                 <!--/.Controls-->

                 <!--Indicators
                 <ol class="carousel-indicators">
                     <li data-target="#multi-item-example" data-slide-to="0" class=""></li>
                     <li data-target="#multi-item-example" data-slide-to="1" class="active"></li>
                     <li data-target="#multi-item-example" data-slide-to="2"></li>
                 </ol>
                 <!--/.Indicators-->

             </div>
             <!--/.Carousel Wrapper-->

         </section>



</div>
  <div class="divider-new">
                                <h2 class="h2-responsive">More Deals</h2>
                            </div>


                            <div class="row">
                                  @if(count($cards) > 0)
        @foreach($cards as $card)
      
            <div class="col-lg-4">
                            <!--Card-->
                            <div class="card  wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">

                                <!--Card image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="/storage/cover_images/{{$card->cover_image}}" class="img-fluid" alt="">
                                    <a href="/cards/{{$card->channel->name}}/{{$card->id}}">
            <div class="mask waves-effect waves-light"></div>
        </a>
                                </div>
                                <!--/.Card image-->

                                  <!--Card content-->
    <div class="card-block text-center">
        <!--Category & Title--> 
       <h4 class="card-title"><a href="/cards/{{$card->channel->name}}/{{$card->id}}">{{$card->card_product_name}}</a></h4>

        <!--Description-->
        <p class="card-text"> 
         {!!$card->merchant->merchant_name!!}
        </p>

        <!--Card footer-->
        <div class="card-footer">
            <span class="left">N${{$card->card_new_price}}<span class="discount">{{$card->card_old_price}}</span></span>
            <span class="right"> <a href="/cards/{{$card->channel->name}}/{{$card->id}}" class="btn btn-default waves-effect waves-light">View Deal</a></span>
      
    
      
        </div>

          @if (Auth::check())
    <div class="card-footer">
        <favorite
            :card={{ $card->id }}
            :favorited={{ $card->favorited() ? 'true' : 'false' }}
        ></favorite>
    </div>
@endif
      

    </div>
    <!--/.Card content-->

                            </div>
                            <!--/.Card-->
                            <br>
                        </div>

                            
        @endforeach
    {{$cards->links()}}
    @else
        <p>No cards found</p>
    @endif


                            </div>


 <div class="divider-new">
     <h2 class="h2-responsive"> Trusted by {{ count($merchants) }} + Stores & Merchants</h2>
 </div>

 <div class="container">
     <section class="customer-logos slider">

         @if(count($merchants) > 0)
             @foreach($merchants as $merchant)

                 <div class="slide">  <a href="/merchants/{{$merchant->id}}">
                         <img src="/storage/merchant_logos/{{$merchant->merchant_logo}}"
                              class="rounded-circle" height="80px" alt="{{$merchant->merchant_name}} logo">
                     </a></div>

             @endforeach
         @endif

     </section>
 </div>


</div>



@endsection
