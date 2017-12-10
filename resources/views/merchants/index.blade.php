@extends('layouts.normal')

@section('content')

    <div class="col-lg-9">
<div class="row">

    @if(count($merchants) > 0)
        @foreach($merchants as $merchant)



            <div class="col-md-4" id="app4">
                <a href="/merchants/{{$merchant->id}}">
                <div class="card">
                    <img src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="Card image cap" class="img-fluid">
                    <div class="avatar_card">
                        <img src="/storage/merchant_logos/{{$merchant->merchant_logo}}" alt="Sample avatar image." class="rounded-circle">
                    </div>
                    <div class="card-body card-block text-center">
                        <h4 class="card-title"><a href="/merchants/{{$merchant->id}}">{{$merchant->merchant_name}}</a></h4>
                        <p class="card-text">Based in {{$merchant->merchant_city}}</p>

                        <p class="card-text">{{ count($merchant->cards)}} Active Cards</p>

                        <p>({{ count($merchant->subscriptions)}}) Subscribers</p>
                        @if (Auth::check())
                    {{--    <merchant-subscribe-button :active="{{ json_encode($merchant->isSubscribedTo)}}"></merchant-subscribe-button>--}}

                            @endif

                        <hr>


                            <a class="btn btn-primary waves-effect waves-light" href="/merchants/{{$merchant->id}}">View Store </a>


                    </div>
                </div>
                </a>
            </div>

        @endforeach


      
            {{--<div class="col-lg-4">
                            <!--Merchant-->
                            <div class="merchant  wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">

                                <!--Merchant image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="/storage/merchant_logos/{{$merchant->merchant_logo}}" class="img-fluid" alt="" height="180px" width="180px">
                                    <a href="/merchants/{{$merchant->id}}">
            <div class="mask waves-effect waves-light"></div>
        </a>
                                </div>
                                <!--/.Merchant image-->

                                  <!--Merchant content-->
    <div class="merchant-block text-center">
        <!--Category & Title--> 
       <h4 class="merchant-title"><a href="/merchants/{{$merchant->id}}">{{$merchant->merchant_name}}</a></h4>

        <!--Description-->
        <p class="merchant-text"> {{$merchant->merchant_physical_address}} | {{$merchant->merchant_city}}
        </p>

        <!--Merchant footer-->
        <div class="merchant-footer">
            <div class="left"> <div id="app4"> <merchant-subscribe-button></merchant-subscribe-button> </div> <span class="discount"></span></span>
            <span class="right"> <a href="/merchants/{{$merchant->id}}" class="btn btn-default waves-effect waves-light">View Deal</a></span>
        </div>

    </div>
    <!--/.Merchant content-->

                            </div>
                            <!--/.Merchant-->
                            <br>
                        </div>
--}}
                            

       
    @else
        <p>No merchants found</p>
    @endif

</div>
    </div>

@endsection




