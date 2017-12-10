@extends('layouts.admin')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <h3>Tags</h3>
                <hr>

@if(count($tags) > 0)

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
    
    @foreach($tags as $tag)
        <tr>
            <th scope="row">{{$tag->id}}</th>
            <td>{{$tag->name}}</td>
            <td> <a href="/tags/{{$tag->id}}/edit" class="btn btn-default">Edit</a> </td>
            <td>
            
                   {!!Form::open(['action' => ['TagsController@destroy', $tag->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

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
<p> There are no Tags </p>
@endif







                <a href="/tags/create" class="btn btn-primary">Create Tag</a>

                <div class="panel-body">

                </div>
            </div>
        </div>
        <!-- end of col-md-9 col-md-offset-2 -->



    </div>
</div>
@endsection




