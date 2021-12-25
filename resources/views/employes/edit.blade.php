@extends('adminlte::page')

@section('title')
    Update Employe | Laravel Employes App
@endsection

@section('content_header')
    <h1>Update Employe</h1>
@endsection

@section('content')
<div class="container" >
    @include('layouts.alert')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card ">
                <div class="card-body">
                   <form action="{{route('employes.update',$employe->registration_number)}}" method="POST" class="mt-3">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="Fullname">Fullname:</label>
                        <input type="text" name="fullname" placeholder="Fullname" class="form-control" value="{{old('fullname',$employe->fullname)}}" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="registration_number">Registration Number:</label>
                        <input type="text" name="registration_number" placeholder="Registration Number" class="form-control" value="{{old('registration_number',$employe->registration_number)}}" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="hire_date">Hire Date:</label>
                        <input type="date" name="hire_date" placeholder="Hire Date" class="form-control" value="{{old('hire_date',$employe->hire_date)}}" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="Depart">Dapartement:</label>
                        <input type="text" name="depart" placeholder="Departement" class="form-control" value="{{old('depart',$employe->depart)}}" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="Phone">Phone:</label>
                        <input type="text" name="phone" placeholder="Phone" class="form-control" value="{{old('phone',$employe->phone)}}" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="Adress">Adress:</label>
                        <input type="text" name="adress" placeholder="Adress" class="form-control" value="{{old('adress',$employe->adress)}}" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="City">City:</label>
                        <input type="text" name="city" placeholder="City" class="form-control" value="{{old('city',$employe->city)}}" >
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection




