@extends('layouts.admin')

@section('content')




<div class="col-md-2">
@if (Auth::check())
    @if ($is_edit_profile)
    <a href="#" class="navbar-btn navbar-right">
        <button type="button" class="btn btn-default">Edit Profile</button>
    </a>
    @elseif ($is_follow_button)
    <a href="{{ url('/follows/' . $user->username) }}" class="navbar-btn navbar-right">
        <button type="button" class="btn btn-default">Follow</button>
    </a>
    @else
    <a href="{{ url('/unfollows/' . $user->username) }}" class="navbar-btn navbar-right">
        <button type="button" class="btn btn-default">Unfollow</button></a>
    @endif
@endif
</div>


@endsection