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
                                    <img src="/storage/cover_images/{{$card->cover_image}}" class="img-fluid" alt="">
                                    <a href="/cards/{{$card->id}}">
            <div class="mask waves-effect waves-light"></div>
        </a>
                                </div>
                                <!--/.Card image-->

                                  <!--Card content-->
    <div class="card-block text-center">
        <!--Category & Title--> 
       <h4 class="card-title"><a href="/cards/{{$card->id}}">{{$card->card_product_name}}</a></h4>

        <!--Description-->
        <p class="card-text"><a href="{{$card->merchant->id}}">{{$card->merchant->merchant_name}}</a>
        </p>

        <!--Card footer-->
        <div class="card-footer">
            <span class="left">N${{$card->card_new_price}}<span class="discount">{{$card->card_old_price}}</span></span>
            <span class="right"> <a href="/cards/{{$card->channel->name}}/{{$card->id}}" class="btn btn-default waves-effect waves-light">View Deal</a></span>
        </div>

    </div>
    <!--/.Card content-->

                            </div>
                            <!--/.Card-->
                            <br>
                        </div>

                            
        @endforeach
    
        {{$cards->links()}}
    @else
        <p>No posts found</p>
    @endif

</div>
@endsection




