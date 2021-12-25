@extends('adminlte::page')




@section('title')
    Show Employe | Laravel Employes App
@endsection

@section('content_header')
    <h1>Show Employe</h1>
@endsection

@section('content')
<div class="container" >
    @include('layouts.alert')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="text-center">
                        <h3>{{$employe->fullname}}</h3>
                    </div>
                    <hr>
                    <div class="text-center" >
                        {{-- <a href="{{'employes'}}" class="btn btn-small btn-outline-info mx-2"><i class="fas fa-home"></i></a> --}}
                        <a href="{{route('vacation.request',$employe->registration_number)}}" class="btn btn-outline-primary mx-2">Vacation Request</a>
                        <a href="{{route('certificate.request',$employe->registration_number)}}" class="btn  btn-outline-success mx-2">Work Certification Request</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="Fullname">Fullname:</label>
                        <input type="text" disabled name="fullname" placeholder="Fullname" class="form-control" value="{{$employe->fullname}}" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="registration_number">Registration Number:</label>
                        <input type="text" disabled name="registration_number" placeholder="Registration Number" class="form-control" value="{{$employe->registration_number}}" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="hire_date">Hire Date:</label>
                        <input type="date" disabled name="hire_date" placeholder="Hire Date" class="form-control" value="{{$employe->hire_date}}" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="Depart">Dapartement:</label>
                        <input type="text" disabled name="depart" placeholder="Departement" class="form-control" value="{{$employe->depart}}" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="Phone">Phone:</label>
                        <input type="text" disabled name="phone" placeholder="Phone" class="form-control" value="{{$employe->phone}}" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="Adress">Adress:</label>
                        <input type="text" disabled name="adress" placeholder="Adress" class="form-control" value="{{$employe->adress}}" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="City">City:</label>
                        <input type="text" disabled name="city" placeholder="City" class="form-control" value="{{$employe->city}}" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection




