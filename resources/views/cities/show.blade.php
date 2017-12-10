@extends('layouts.normal')

@section('content')
    <!--Main column-->
    <div class="col-lg-9">

        <!--First row-->
        <div class="row wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
            <div class="col-lg-12">
                <br>

                <h3>Displaying all <strong style="font-weight: 900; color: #0275d8!important;">{{ $city->name }}</strong> Deals ... <span class="badge badge-primary badge-pill left" style="float: right;font-size: medium; font-weight: normal;">{{ count($cards) }} found</span> </h3>
                <hr>
                <br>

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
                                    <p class="card-text"> Store Name
                                    </p>

                                    <!--Card footer-->
                                    <div class="card-footer">
                                        <span class="left">N${{$card->card_new_price}}<span class="discount">{{$card->card_old_price}}</span></span>
                                        <span class="right"> <a href="/cards/{{$card->id}}" class="btn btn-default waves-effect waves-light">View Deal</a></span>
                                    </div>

                                </div>
                                <!--/.Card content-->

                            </div>
                            <!--/.Card-->
                            <br>
                        </div>


                    @endforeach


                @else
                    <p>No deals found</p>
                @endif



            </div>
            <!--First row-->
        </div>
        <!--End of col-lg-9-->

    </div>
    <!--/.Main column-->


@endsection