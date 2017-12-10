



    <main>






        <!--Main layout-->
        <div class="container">

  
                            <!--Carousel Wrapper Top Banner-->
                                @yield('inc.mail_slider')
                            <!--/.Carousel Wrapper-->

                            <br>

            <div class="row">
                
                
                <!--Sidebar-->
                <div class="col-lg-3 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">

                    <div class="widget-wrapper">
                        <br>
                        <h4>Check out a deal that suits you. Save big on what you do every day!</h4>
                        <br>
                        <div class="list-group">
                            <a href="#" class="list-group-item">Beauty &amp; Spa</a>
                             <a href="#" class="list-group-item">Food &amp; Drinks</a>
                              <a href="#" class="list-group-item">Hotels &amp; Travel</a>

    <a href="#" class="list-group-item">Home Appliances</a>
                             <a href="#" class="list-group-item">Fragrances &amp; Cosmetics</a>
                              <a href="#" class="list-group-item">Phones &amp; Tablets</a>

                     
                             <a href="#" class="list-group-item">B2B Deals</a>
                              <a href="#" class="list-group-item">Things to Do</a>

                           
                             <a href="#" class="list-group-item">Auto Care</a>
                              <a href="#" class="list-group-item">Gifts</a>

                        </div>
                        <br>
                    </div>

                </div>
                <!--/.Sidebar-->



                <!--Main column-->
                <div class="col-lg-9">

                    <!--First row-->
                    <div class="row wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <div class="col-lg-12">
                          
                            
                            
                            <!--Carousel Wrapper-->
                            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                                <!--Indicators-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-1z" data-slide-to="0" class=""></li>
                                    <li data-target="#carousel-example-1z" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-example-1z" data-slide-to="2" class="active"></li>
                                </ol>
                                <!--/.Indicators-->
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    <!--First slide-->
                                    <div class="carousel-item">
                                        <img src="http://mdbootstrap.com/img//Photos/Slides/img%20(107).jpg" alt="First slide">
                                        <div class="carousel-caption">
                                            <h4>New collection</h4>
                                            <br>
                                                  <hr> 
                                             <!--Text-->
                                    <p class="card-text">Store Name </p>
                                    <a href="deal-view.html" class="btn btn-default waves-effect waves-light">View Deal</a>

                                    
                                        </div>
                                        
                                    </div>
                                    
                                    <!--/First slide-->
                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <img src="http://mdbootstrap.com/img//Photos/Slides/img%20(109).jpg" alt="Second slide">
                                        <div class="carousel-caption">
                                            <h4>Get discount!</h4>
                                            <br>
                                                  <hr> 
                                             <!--Text-->
                                    <p class="card-text">Store Name </p>
                                    <a href="#" class="btn btn-default waves-effect waves-light">View Deal</a>
                                        </div>
                                    </div>
                                    <!--/Second slide-->
                                    <!--Third slide-->
                                    <div class="carousel-item active">
                                        <img src="http://mdbootstrap.com/img//Photos/Slides/img%20(36).jpg" alt="Third slide">
                                        <div class="carousel-caption">
                                            <h4>Only now for 10$</h4>
  <br>
                                            <hr> 
                                             <!--Text-->
                                    <p class="card-text">Store Name </p>
                                    <a href="#" class="btn btn-default waves-effect waves-light">View Deal</a>
                                          
                                        </div>
                                    </div>
                                    <!--/Third slide-->
                                </div>
                                <!--/.Slides-->
                                <!--Controls-->
                                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!--/.Controls-->
                            </div>


                               <!--/.Carousel Wrapper-->
                              <div class="divider-new">
                                <h2 class="h2-responsive">What's New ?</h2>
                            </div>
                    




                        </div>
                    </div>
                    <!--/.First row-->


                                    <!--Second row-->
                    <div class="row">  
                        @yield('content')
                
                       
                    </div>
                    <!--/.Second row-->



<br>

        
            
                </div>
                <!--/.Main column-->

            </div>
        </div>
        <!--/.Main layout-->


    </main>