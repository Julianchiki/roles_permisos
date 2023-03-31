@extends('layouts.adminlte')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{('inicio')}}">Productos</a></li>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Productos</div>
                    <div class="card-body">
                        <table id="datatable" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Empresa</th>
                                <th>-<a href="{{route('admin.products.add')}}" class="btn btn-success"><i class="fas fa-plus"></i></a>-</th>

                             </tr>
                            </thead>
                            <tbody>
                                @foreach($product as $a)
                                <tr>
                                    <td>{{$a->id}}</td>
                                    <td>{{$a->name_product}}</td>
                                    <td>{{$a->date_expiry}}</td>
                                    <td>{{$a->company}}</td>
                                    <td>
                                        <a href="{{route('admin.products.edit',$a->id)}}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                        <button id="delete"  class="btn btn-danger" value="{{$a->id}}"><i class="fas fa-backspace"></i></button>
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
    $(document).on('click','#delete',function(){
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
            $(location).attr('href','{{url('products/delete')}}/'+id);
        }
        })
    });
</script>
@endsection