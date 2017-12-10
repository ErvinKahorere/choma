@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">

<br><br><br>

          <div class="col-md-3 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">   
                 <div class="media-center" href="#">




                                 
<a class="media-left" href="#">
                                <img class="rounded-circle" src="/uploads/avatars/{{ $user->avatar }}" height="120px" width="120px" alt="">
                            </a>
                


                              
                            
                          
                            </div>
                            <br>

<form class="form-horizontal" method="POST" action="/profile" enctype="multipart/form-data">


<label>Update Profile Image</label>

<input type="file" name="avatar">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<br><br>

<input type="submit" class="btn btn-default btn-sm" value="Submit">

<br>

</form>

<br>

                            </div>

            

                <h5>{{ Auth::user()->name }}</h5>
                <hr>




<p> Joined: {{ Auth::user()->created_at->diffForHumans() }} </p>

<p> City : {{ Auth::user()->city }} </p>

<p> Phone : {{ Auth::user()->phone_number }} </p>
<p> Email : {{ Auth::user()->email }} </p>

<p> Following <strong><a href="">25</a></strong> Merchants</p>




                <a href="/" class="btn btn-primary">View Deals</a>

                

                <div class="panel-body">
                    











                </div>
            </div>
        </div>
        <!-- end of col-md-9 col-md-offset-2 -->
















        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <h3>Your Profile</h3>
                <hr>


                                                
<!-- Nav tabs -->
<div class="tabs-wrapper"> 
    <ul class="nav classic-tabs tabs-orange" id="myTab" role="tablist" >
        <li class="nav-item">
            <a class="nav-link waves-light active" data-toggle="tab" href="#panel61" role="tab"> Timeline</a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-light" data-toggle="tab" href="#panel62" role="tab"> Favorites</a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-light" data-toggle="tab" href="#panel63" role="tab">Settings</a>
        </li>

    </ul>
</div>

<!-- Tab panels -->
<div class="tab-content">



    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel61" role="tabpanel">

        @foreach($activities as $activity)

            @if ($activity->type == 'created_card')
                <p> Published a Card <a href=""><b>{{ $activity->subject->card_product_name }}</b></a></p>
            @endif



          {{--  @if ($activity->type == 'created_review')


              <p>Reviewed  <a href=""> <b> {{ $activity->subject->card->card_product_name }} </b></a></p>
                    <p> <i>" {{ $activity->subject->body }} "</i> - {{ $activity->created_at->diffForHumans() }}</p>


                    <ul class="rating inline-ul list-unstyled">



                        @if (($activity->subject->star) === 1)
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        @elseif (($activity->subject->star) ===  2)
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>

                        @elseif (($activity->subject->star) ===  3)
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        @elseif (($activity->subject->star) ===  4)
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        @elseif (($activity->subject->star) ===  5)
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star amber-text"></i></li>
                        @else
                            I don't have any records!
                        @endif

                    </ul>

                <hr>
            @endif--}}

        @endforeach

    </div>
    <!--/.Panel 1-->

    <!--Panel 2-->
    <div class="tab-pane fade" id="panel62" role="tabpanel">



         @forelse ($myFavorites as $myFavorite)
         
                  

                    <!--Card-->
                            <div class="card  wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">

                                <!--Card image
                                <div class="view overlay hm-white-slight">
                                    <img src="/storage/cover_images/{{$myFavorite->cover_image}}" class="img-fluid" alt="">
                                    <a href="/cards/{{$myFavorite->id}}">
            <div class="mask waves-effect waves-light"></div>
        </a>
                                </div>
                                <!--/.Card image-->

                                  <!--Card content-->
    <div class="card-block text-center">
        <!--Category & Title--> 
       <h4 class="card-title"><a href="/cards/{{$myFavorite->id}}">{{$myFavorite->card_product_name}}</a></h4>

        <!--Description-->
        <p class="card-text">  {!!$myFavorite->merchant->merchant_name!!}
        </p>

        <div id="app">
         @if (Auth::check())
                        <div class="">
                            <favorite
                                :card={{ $myFavorite->id }}
                                :favorited={{ $myFavorite->favorited() ? 'true' : 'false' }}
                            ></favorite>
                        </div>
                    @endif

                </div>

        <!--Card footer-->
        <div class="card-footer">
            <span class="left">N${{$myFavorite->card_new_price}}<span class="discount">{{$myFavorite->card_old_price}}</span></span>
            <span class="right"> <a href="/cards/{{$myFavorite->id}}" class="btn btn-default waves-effect waves-light">View Deal</a></span>
        </div>

    </div>
    <!--/.Card content-->

                            </div>
                            <!--/.Card-->
                            <br>














            @empty
                <p>You have no favorite cards.</p>
            @endforelse
    </div>
    <!--/.Panel 2-->

    <!--Panel 3-->
    <div class="tab-pane fade" id="panel63" role="tabpanel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>

    </div>
    <!--/.Panel 3-->


</div>


               




            </div>
        </div>
        <!-- end of col-md-9 col-md-offset-2 -->



          <div class="col-md-3 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">___</div>

                <h3>Your Store(s)</h3>
                <hr>

@if(count($merchants) > 0)

<!--Table-->
<table class="table">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
    @foreach($merchants as $merchant)
        <tr>
            <th scope="row">{{$merchant->id}}</th>
            <td>{{$merchant->merchant_name}}</td>
            <td> <a href="/merchants/{{$merchant->id}}/edit" class="btn btn-default">Edit</a> </td>
            <td>
            
                   {!!Form::open(['action' => ['MerchantsController@destroy', $merchant->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
             </td>
        </tr>
    @endforeach
       
    </tbody>
    <!--Table body-->
</table>
<!--Table-->
@else 
<p> You have no Stores </p>
@endif







                <a href="/merchants/create" class="btn btn-primary">Add Store</a>

                <div class="panel-body">
                    











                </div>
            </div>
        </div>
        <!-- end of col-md-9 col-md-offset-2 -->




    </div>
</div>




@foreach($cards as $card)
<!-- Preview Card Modal -->
<div class="modal fade" id="cardPreview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

    <br><br><br><br><br>
        <!--Content-->
         <div class="col-lg-8">
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
        <!--/.Content-->
    </div>
</div>
<!--  Preview Card Modal Ends-->

@endforeach






@endsection

@section('scripts')

<script>
  

$('#panel61 a[href="#panel61"]').tab('show') // Select tab by name



</script>

@endsection
