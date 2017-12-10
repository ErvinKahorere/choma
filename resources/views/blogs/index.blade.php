@extends('layouts.plain')

@section('content')
<br><br>
<div class="row">
  <!--Main column-->
                <div class="col-lg-3">
                 <h1>__</h1>
                <h1><b>Choma Blog</b></h1>
                <p>Get the most of Choma by learning and reading our articles.<p>
                </div>
                <!--Main column-->
                <div class="col-lg-9">

                  @if(count($blogs) > 0)
                    
                     @foreach($blogs as $blog)

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

                        <!--"Read more" button-->
                        <button class="btn btn-info waves-effect waves-light"><a href="/blogs/{{$blog->id}}">Read more</a></button>
                    </div>
                    <!--/.Post-->

                    <hr>

                      @endforeach
                    
                        {{$blogs->links()}}
                              @else
                        <p>No posts found</p>
                     @endif


                                

                    <!--Pagination-->
                    <nav>
                        <ul class="pagination flex-center pg-dark  wow fadeIn" data-wow-delay="0.2s" style="animation-name: none; visibility: visible;">
                            <!--Arrow left-->
                            <li class="page-item">
                                <a class="page-link waves-effect waves-effect" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>

                            <!--Numbers-->
                            <li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>
                            <li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>
                            <li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>
                            <li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>
                            <li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>

                            <!--Arrow right-->
                            <li class="page-item">
                                <a class="page-link waves-effect waves-effect" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!--/.Pagination-->

                </div>

            </div>
        </div>
    </div>
</div>















 

</div>
@endsection




