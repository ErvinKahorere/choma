@extends('layouts.admin')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <h3>Categories</h3>
                <hr>

@if(count($categories) > 0)

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
    
    @foreach($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}
            </td>
            <td> <img src="/storage/category_image/{{$category->category_image}}" class="img-fluid" alt="" width="30px" height="30px"></td>
            <td>

                <a href="/categories/{{$category->id}}/edit" class="btn btn-default">Edit</a>

                {!!Form::open(['action' => ['TagsController@destroy', $category->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

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
<p> There are no Categories </p>
@endif







                <a href="/categories/create" class="btn btn-primary">Create Category</a>

                <div class="panel-body">

                </div>
            </div>
        </div>
        <!-- end of col-md-9 col-md-offset-2 -->



    </div>
</div>
@endsection




