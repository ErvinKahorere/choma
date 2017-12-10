@extends('layouts.admin')

@section('content')




<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <h3>Your Subscribers</h3>

                <p>You have <strong>{{$subscribers->count()}}</strong> total subscriber(s)</p> 
                <hr>

 @if(count($subscribers) > 0)
      

<!--Table-->
<table class="table">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
    @foreach($subscribers as $subscriber)
        <tr>
            <th scope="row">{{$subscriber->id}}</th>
            <td>{{$subscriber->name}}</td>
            <td> {{$subscriber->email}}</td>
           
           
            <td>
            
                  {{$subscriber->phone}}
             </td>
        </tr>
    @endforeach
       
    </tbody>
    <!--Table body-->
</table>
<!--Table-->


     
                            
     
       
    @else
        <p>No subscribers yet</p>
    @endif









           









                </div>
            </div>
        </div>
        <!-- end of col-md-9 col-md-offset-2 -->



        
    </div>
</div>








@endsection




