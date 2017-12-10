@extends('layouts.app')

@section('content')
  <div class="row">
    @if(count($ourpicks) > 0)
        @foreach($ourpicks as $ourpick)
      
            <div class="col-lg-4">
                            <!--OurPick-->
                            <div class="ourpick  wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">

                                <!--OurPick image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://mdbootstrap.com/img/Photos/Slides/img%20(109).jpg" class="img-fluid" alt="">
                                    <a href="/ourpicks/{{$ourpick->id}}">
            <div class="mask waves-effect waves-light"></div>
        </a>
                                </div>
                                <!--/.OurPick image-->

                                  <!--OurPick content-->
    <div class="ourpick-block text-center">
        <!--Category & Title--> 
       <h4 class="ourpick-title"><a href="/ourpicks/{{$ourpick->id}}">{{$ourpick->card_product_name}}</a></h4>

        <!--Description-->
        <p class="ourpick-text"> Store Name
        </p>

        <!--OurPick footer-->
        <div class="ourpick-footer">
            <span class="left">N${{$ourpick->card_new_price}}<span class="discount">{{$ourpick->card_old_price}}</span></span>
            <span class="right"> <a href="/ourpicks/{{$ourpick->id}}" class="btn btn-default waves-effect waves-light">View Deal</a></span>
        </div>

    </div>
    <!--/.OurPick content-->

                            </div>
                            <!--/.OurPick-->
                            <br>
                        </div>

                            
        @endforeach
        
        {{$ourpicks->links()}}
    @else
        <p>No posts found</p>
    @endif

</div>
@endsection




