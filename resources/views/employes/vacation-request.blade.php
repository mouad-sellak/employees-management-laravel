@extends('adminlte::page')


@section('title')
    Vacation Request
@endsection

@section('content')
    <div class="container">
        <div class="row my-3">
            <div class="col-md-6 mx-auto">
                <div class="card m-4">
                    <div class="card card-header text-center my-1">
                            <h3>Vacation Request</h3>
                    </div>
                    <div class="card card-body my-4">
                        <div class="m-4">
                            <p class="lead">
                                <b>{{$employe->fullname}}</b> is presently employed
                            </p>
                            <p class="lead">
                                <b>{{$employe->depart}}</b> departement.
                            </p>
                            <p class="lead">
                                He is requesting a vacation from <b>_________</b>
                            </p>
                            <p class="lead">
                                And ends on <b>_______________</b>
                            </p>
                            <p class="lead">
                                Issued on
                                <b>{{\Carbon\Carbon::today()->toDateString()}}</b>
                                at <b>{{\Carbon\Carbon::now()->toTimeString()}}</b>                        
                            </p>
                            <p class="lead my-2">
                                <b>_______________</b><br>
                                <b>_______________</b>
                            </p>
                        </div>
                        <div class="my-3">
                            <button id="btn"  class="btn btn-primary"
                                    onclick="
                                            document.getElementById('btn').style.display='none'
                                            setTimeout(function(){
                                                document.getElementById('btn').style.display='block'
                                            },2000)
                                            window.print()
                                            "
                            >
                                <i class="fas fa-print"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection