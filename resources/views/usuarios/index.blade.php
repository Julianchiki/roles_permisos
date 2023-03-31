@extends('layouts.adminlte')
@section('breadcrumb')
<li class="breadcrumb-item active">Usuarios</li>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"style="width:100%">
            <div class="card">
                <div class="card-header">Usuarios</div>
                    <div class="card-body">
                        <table id="datatable" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Documento</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                @can('admin.users.add')
                                <th><a href="{{route('admin.users.add')}}" class="btn btn-success"><i class="fas fa-plus"></i></a></th>
                                @endcan
                             </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $a)
                                <tr>
                                    <td>{{$a->id}}</td>
                                    <td>{{$a->name}}</td>
                                    <td>{{$a->document_number}}</td>
                                    <td>{{$a->email}}</td>
                                    <td>{{$a->telephone}}</td>
                                    <td>
                                        @can('admin.users.edit')
                                        <a href="{{route('admin.users.edit',$a->id)}}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                        @endcan
                                        @can('admin.users.delete')
                                        <button id="prueba"  class="btn btn-danger" value="{{$a->id}}"><i class="fas fa-backspace"></i></button>
                                        @endcan
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
</div>
@endsection
@section('script')
<script>
    $(document).on('click','#prueba',function(){
        var id=$(this).val();
        Swal.fire({
            title: "Estas seguro?",
            text: "Esta acción no se podra revertir",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: "Cancelar",
            confirmButtonText: "Confirmar"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                "Usuario eliminado",
                "Eliminado",
                'success'
            )
            $(location).attr('href','{{url('users/delete')}}/'+id);
        }
        })
    });
</script>
@endsection