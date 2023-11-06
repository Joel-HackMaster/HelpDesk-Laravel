<div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="card o-hidden border-0 shadow-lg my-5" style="width: 35rem;">
                <img src="{{ asset('img/Helpdesk.jpg') }}" class="card-img-top" alt="Mi imagen">
                <div class="card-body p-0">
                    <div class="p-3">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Generar Ticket</h1>
                        </div>
                        <form class="user" action="{{ url('/empleado/ticket') }}" method="post" enctype="multipart/form-data" id="formulario">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-select-lg formato-texto" id="TKT_Codigo" name="TKT_Codigo" placeholder="ID Autogenerado">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <select class="form-control form-select-lg formato-texto" id="Empresa" name="Empresa">
                                        <option selected>Empresa</option>
                                        <option value="1">ENTEL</option>
                                        <option value="2">MOVISTAR</option>
                                        <option value="3">CLARO</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select class="form-control form-select-lg formato-texto" id="Codigo" name="Codigo">
                                        <option selected>Codigo de Usuario</option>
                                        <option value="1">EA011-ENTEL</option>
                                        <option value="2">CA002-CLARO</option>
                                        <option value="3">MA001-MOVISTAR</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="txt" class="form-control form-select-lg formato-texto" id="Resumen" name="Resumen"
                                    placeholder="Resumen">
                                <div class="my-2">
                                    <textarea class="form-control formato-texto" id="Detalle" name="Detalle" placeholder="Detalles de Incidente" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <select class="form-control form-select-lg formato-texto" id="Escalado" name="Escalado">
                                        <option selected>Escalado</option>
                                        <option value="1">SOPORTE N2</option>
                                        <option value="2">SOPORTE N3</option>
                                        <option value="3">ESPECIALISTA</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select class="form-control form-select-lg formato-texto" id="TKT_Estado" name="TKT_Estado">
                                        <option selected>Estado</option>
                                        <option value="1">EN PROCESO</option>
                                        <option value="2">ESCALADO</option>
                                        <option value="3">SOLUCIONADO</option>
                                        <option value="4">CANCELADO</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Generar Ticket
                            </button>
                            <br>
                            <a href="{{url('empleado/')}}">Regresar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>