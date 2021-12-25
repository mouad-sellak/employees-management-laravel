@extends('adminlte::page')

@section('title')
    Home | Laravel Employes App
@endsection

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <div class="container" >
        <div class="row my-5">
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3 class="m-2">{{App\Models\Employe::count()}}</h3>
                        <p class="m-2">Employes</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{'employes'}}" class="small-box-footer">
                        More Details
                        <i class="fas  fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection



