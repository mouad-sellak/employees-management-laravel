@extends('adminlte::page')

@section('plugins.Datatables',true)


@section('title')
    List of Employes | Laravel Employes App
@endsection

@section('content_header')
    <h1>List of Employes</h1>
@endsection

@section('content')
<div class="container" >
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card ">
                <div class="card-body">
                    <table id="myTable" class=" table table-bordered table-hover">
                        <thead>
                            <th>ID</th>
                            <th>FullName</th>
                            <th>Departement</th>
                            <th>Hired</th>
                            <th>Adress</th>
                            <th>City</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach($employes as  $employe )
                                <tr>
                                    <td>{{$employe->id}}</td>
                                    <td>{{$employe->fullname}}</td>
                                    <td>{{$employe->depart}}</td>
                                    <td>{{$employe->hire_date}}</td>
                                    <td>{{$employe->adress}}</td>
                                    <td>{{$employe->city}}</td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <a href="{{route('employes.show',$employe->registration_number)}}" class="btn bnt-sm btn-primary m-1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{route('employes.edit',$employe->registration_number)}}" class="btn bnt-sm btn-success m-1">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form id="{{$employe->registration_number}}" action="{{route('employes.destroy',$employe->registration_number)}}">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                        <button onclick="deleteEmp({{$employe->registration_number}})" type="submit" class="btn bnt-sm btn-warning m-1">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('#myTable').DataTable({
                dom:'Bfrtip',
                buttons:[
                    'copy','excel','csv','pdf','print','colvis'
                ]
            });
        });
        function deleteEmp(id){
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(id).submit()
                Swal.fire(
                'Deleted!',
                'Employe has been deleted.',
                'success'
                )
            }
})
        }
    </script>
    @if (session()->has('success'))
        <script>
            Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: "{{session()->get('success')}}",
            showConfirmButton: false,
            timer: 2000
})
        </script>
    @endif
@endsection


