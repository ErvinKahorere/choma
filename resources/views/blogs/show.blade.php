@extends('layouts.plain')

@section('content')
  <br><br>
<div class="row">

                <!--Main column-->
                <div class="col-lg-9">

                    <!--Post-->
                    <div class="post-wrapper wow fadeIn" data-wow-delay="0.2s" style="animation-name: none; visibility: visible;">
                        <!--Post data-->
                        <h1 class="h1-responsive font-bold">{{$blog->title}} </h1>
                        <h6>Written by <a href=""><strong>John Doe</strong></a>, {{$blog->created_at}}</h6>

                        <br>

                        <!--Featured image -->
                        <div class="view overlay hm-white-light z-depth-1-half">
                            <img src="../storage/featured_images/{{$blog->featured_image}}" class="img-fluid " alt="">
                            <div class="mask waves-effect waves-light">
                            </div>
                        </div>

                        <br>

                        <!--Post excerpt-->
                        <p>{{$blog->body}}</p>

                      
                    </div>
                    <!--/.Post-->

                    <hr>

                      <!--"Read more" button-->
                        <button class="btn btn-info waves-effect waves-light"><a href="/blogs">More Articles</a></button>

                                

                </div>

            </div>
        </div>
    </div>
</div>















 

</div>

    @endsection