@extends('adminlte::page')




@section('title')
    Add New Employe | Laravel Employes App
@endsection

@section('content_header')
    <h1>Add New Employe</h1>
@endsection

@section('content')
<div class="container" >
    @include('layouts.alert')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card ">
                <div class="card-body">
                   <form action="{{route('employes.store')}}" method="POST" class="mt-3">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="Fullname">Fullname:</label>
                        <input type="text" name="fullname" placeholder="Fullname" class="form-control" value="{{old('fullname')}}" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="registration_number">Registration Number:</label>
                        <input type="text" name="registration_number" placeholder="Registration Number" class="form-control" value="{{old('RegNum')}}" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="hire_date">Hire Date:</label>
                        <input type="date" name="hire_date" placeholder="Hire Date" class="form-control" value="{{old('HireDate')}}" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="Depart">Dapartement:</label>
                        <input type="text" name="depart" placeholder="Departement" class="form-control" value="{{old('Depart')}}" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="Phone">Phone:</label>
                        <input type="text" name="phone" placeholder="Phone" class="form-control" value="{{old('Phone')}}" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="Adress">Adress:</label>
                        <input type="text" name="adress" placeholder="Adress" class="form-control" value="{{old('Adress')}}" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="City">City:</label>
                        <input type="text" name="city" placeholder="City" class="form-control" value="{{old('City')}}" >
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection




