@extends('layouts.app')

@section('content')

<div class="container">
    <h4 class="p-2">Users</h4>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Lastname</th>
            <th scope="col">Firstname</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
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

