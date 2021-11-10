@extends('layouts.app')

@section('content')
    <div class="container border border-info rounded border-2 p-2 mt-1">
        <form action="">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="userFirstname">Firstname</label>
                    <input type="text" class="form-control" placeholder="Firstname">
                </div>
                <div class="form-group col-md-6">
                    <label for="userLastname">Lastname</label>
                    <input type="text" class="form-control" placeholder="Lastname">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="userEmail">Email</label>
                    <input type="text" class="form-control" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="userGender">Gender</label>
                    <select class="form-control">
                        <option value="1" selected>Male</option>
                        <option value="2">Female</option>
                        <option value="0">Others</option>
                    </select>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input type="button" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
@endsection  

