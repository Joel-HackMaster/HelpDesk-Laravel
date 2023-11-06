@extends('Empleado.base')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Gestor de Usuarios</h1>
<!--<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>-->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Listado de Tickets</h6>
    </div>
    <div class="card-body">
    <button type="button" class="btn btn-outline-primary">Generar Incidente</button>
        <div class="table-responsive">
            <table class="table table-bordered" id="tickets" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Codigo de Ticket</th>
                        <th>Empresa</th>
                        <th>Codigo de usuario</th>
                        <th>Resumen</th>
                        <th>Detalle</th>
                        <th>Escalado</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tickets as $ticket)
                    <tr>
                        <td>{{$ticket->id}}</td>
                        <td>{{$ticket->TKT_Codigo}}</td>
                        <td>{{$ticket->Empresa}}</td>
                        <td>{{$ticket->Codigo}}</td>
                        <td>{{$ticket->Resumen}}</td>
                        <td>{{$ticket->Detalle}}</td>
                        <td>{{$ticket->Escalado}}</td>
                        <td>{{$ticket->TKT_Estado}}</td>
                        <td>
                
                            <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning">
                            Editar
                            </a>   
                            | 
                            <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
                            </form>    
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
@endsection