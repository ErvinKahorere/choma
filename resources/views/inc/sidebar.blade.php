 <!--Sidebar-->
                <div class="col-lg-3 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">

                    <div class="widget-wrapper">
                        <br>
                        <h4>Check out a deal that suits you. Save big on what you do every day!</h4>
                        <br>
                        <ul class="list-group">
{{--

                         @foreach ($categories as $category)
                        <a href="/categories/{{ $category}}"  class="list-group-item">{{ $category}}  <span class="badge badge-primary badge-pill">14</span>

                        </a>


--}}

                        @foreach($categories as $category)


                                <a href="/categories/{{$category->name}}"  style="font-size: 1.01rem; text-transform: uppercase; font-weight: normal;" class="list-group-item d-flex justify-content-between align-items-center">

                                    <img src="/storage/category_image/{{$category->category_image}}" class="img-fluid" alt="" width="30px" height="30px">
                                    <span class="">


    {{$category->name}}

                            </span>
                                </a>
                        @endforeach
                        <!--
                            <a href="#" class="list-group-item">Beauty &amp; Spa</a>
                             <a href="#" class="list-group-item">Food &amp; Drinks</a>
                              <a href="#" class="list-group-item">Hotels &amp; Travel</a>

    <a href="#" class="list-group-item">Home Appliances</a>
                             <a href="#" class="list-group-item">Fragrances &amp; Cosmetics</a>
                              <a href="#" class="list-group-item">Phones &amp; Tablets</a>

                     
                             <a href="#" class="list-group-item">B2B Deals</a>
                              <a href="#" class="list-group-item">Things to Do</a>

                           
                             <a href="#" class="list-group-item">Auto Care</a>
                              <a href="#" class="list-group-item">Gifts</a> -->

                        </ul>
                        <br>
                    </div>



                    <br>
                    <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                    
                        <h4>Join our ever growing 18 750 members and get personal notifications on local deals of your choice.</h4>
                        <br>
                        <div class="card">
                            <div class="card-block">
                    
                                <p><strong>Get INSTANT Notifications on New Deals on the the go</strong></p>
                                <p>Once a week we will send you a summary of the most useful deals</p>

                                <a href="#"><img src="img/playstore.svg" style="max-width: 185px;" alt="Download Choma"> </a>
                                {{--  <div class="md-form">
                                    <i class="fa fa-user prefix"></i>
                                    <input type="text" id="form1" class="form-control">
                                    <label for="form1" class="">Your name</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="form2" class="form-control">
                                    <label for="form2" class="">Your email</label>
                                </div>

                                <div class="md-form">
                                    <i class="fa fa-phone prefix"></i>
                                    <input type="text" id="form2" class="form-control">
                                    <label for="form2" class="">Phone Number</label>
                                </div>
                                <button class="btn btn-primary waves-effect waves-light">Submit</button>  --}}
{{--

                                
{!! Form::open(['action' => 'SubscribersController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}



   
    <div class="md-form">
        <i class="fa fa-user prefix"></i>
       <!-- <input type="text" id="form32" class="form-control"> -->

         {{Form::text('name', '', ['class' => 'form-control'])}}
        <label for="form34">Name</label>
    </div>
    <div class="md-form">
        <i class="fa fa-envelope prefix"></i>
       <!-- <input type="text" id="form32" class="form-control"> -->

         {{Form::text('email', '', ['class' => 'form-control'])}}
        <label for="form34">Email</label>
    </div>
    <div class="md-form">
        <i class="fa fa-phone prefix"></i>
       <!-- <input type="text" id="form32" class="form-control"> -->

         {{Form::text('phone', '', ['class' => 'form-control'])}}
        <label for="form34">Phone Number</label>
    </div>



    <div class="text-center">
       <!-- <button class="btn btn-default">Submit</button>-->

        {{Form::submit('Submit', ['class' => 'btn btn-default'])}}

    </div>




{!! Form::close() !!}
--}}




                            </div>
                        </div>
                    </div>

                    <br><br>

                </div>
                <!--/.Sidebar-->
