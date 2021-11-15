@extends('layouts.app')

@section('content')
    <h4 class="p-2">Edit</h4>
    <div class="container border border-info rounded border-2 p-2 mt-1">
        <form action="{!! action('PostsController@update', $post->id) !!}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="userFirstname">Firstname</label>
                    <input type="text" name="first" value="{{$post->userFirst}}" class="form-control" placeholder="Firstname">
                </div>
                <div class="form-group col-md-6">
                    <label for="userLastname">Lastname</label>
                    <input type="text"  name="last" value="{{$post->userLast}}" class="form-control" placeholder="Lastname">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="userEmail">Email</label>
                    <input type="email" name="email" value="{{$post->userEmail}}" class="form-control" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="userGender">Gender</label>
                    <select class="form-control" name="gender">
                        <option value="Male" {{ ( $post->userGender == 'Male') ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ ( $post->userGender == 'Female') ? 'selected' : '' }}>Female</option>
                        <option value="Others" {{ ( $post->userGender == 'Others') ? 'selected' : '' }}>Others</option>
                    </select>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="/posts" class="btn btn-secondary mx-2">Back</a>
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
    
@endsection  