@extends('layouts.app')

@section('content')
    <h4 class="p-2">Create</h4>
    <div class="container border border-info rounded border-2 p-2 mt-1">
        <form action="{!! action('PostsController@store') !!}" method="POST">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="userFirstname">Firstname</label>
                    <input type="text" name="first" class="form-control" placeholder="Firstname">
                </div>
                <div class="form-group col-md-6">
                    <label for="userLastname">Lastname</label>
                    <input type="text"  name="last" class="form-control" placeholder="Lastname">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="userEmail">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="userGender">Gender</label>
                    <select class="form-control" name="gender">
                        <option value="Male" selected>Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
    
    <div class="container">
        <h4 class="p-2">Users</h4>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Lastname</th>
                <th scope="col">Firstname</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
        @if(count($posts) > 0)
            <tbody>             
                @foreach ($posts as $user)   
                    <tr>    
                        <td>{{$user->userLast}}</td>       
                        <td>{{$user->userFirst}}</td>
                        <td>{{$user->userEmail}}</td>
                        <td>{{$user->userGender}}</td>
                        <td><a class="btn btn-link" style="padding: 0 0;" href="posts/{{$user->id}}/edit">Edit</a></td>
                        <td><form action="{!! action('PostsController@destroy', $user->id) !!}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-link" style="padding: 0 0;" value="Delete">
                        </td>
                    </tr>
                @endforeach       
            </tbody>
          </table>
            {{$posts->links()}}
        @else
          <p>No users found</p>
        @endif
    </div>
@endsection  