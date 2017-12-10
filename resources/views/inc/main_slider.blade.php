     
   
   <!--First row-->
                    <div class="row wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <div class="col-lg-12">
                          
                            
                            
                            <!--Carousel Wrapper-->
                            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                              
                                <!--/.Indicators-->
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                 @if(count($ourpicks) > 0)
        @foreach($ourpicks as $ourpick)
                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <img src="/storage/cover_images/{{$ourpick->cover_image}}" alt="{{$ourpick->card_product_name}}">
                                        <div class="carousel-caption">
                                            <h4>Our Pick of the Day</h4>
                                            <h3>{{$ourpick->card_product_name}}</h3>
                                            <br>
                                                  <hr> 
                                             <!--Text-->
                                    <p class="card-text">Store Name </p>
                                    <a href="/ourpicks/{{$ourpick->id}}" class="btn btn-default waves-effect waves-light">View Deal</a>

                                    
                                        </div>
                                        
                                    </div>
                                    
                                    <!--/First slide-->

                                       @endforeach
    
    @else
        <p>No Picks today</p>
    @endif
                                 
                                </div>
                                <!--/.Slides-->
                                <!--Controls
                                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a> -->
                                <!--/.Controls-->
                            </div>


                    




                        </div>
                    </div>
                    <!--/.First row-->

                                          
     