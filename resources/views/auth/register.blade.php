<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/Helpdesk.ico">
    <title>Inicia sesion Helpy</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-info">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registrate</h1>
                            </div>
                            <form class="user" id="user" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="form-input col-sm-6 mb-3 mb-sm-0 txtNombre">
                                        <input type="text" class="form-control form-control-user" id="Codigo"
                                            name="Codigo" placeholder="Codigo">
                                        <p class="text-danger nombreError"> </p>
                                    </div>
                                    <div class="form-input col-sm-6 txtApellido">
                                        <input type="text" class="form-control form-control-user" id="NombreCompleto"
                                        name="NombreCompleto" placeholder="Apellidos">
                                        <p class="text-danger apellidoError"> </p>
                                    </div>
                                </div>
                                <div class="form-input form-group txtDNI">
                                    <input type="number" class="form-control form-control-user" id="DNI"
                                    name="DNI" placeholder="Ingresa tu Nº de identificacion">
                                    <p class="text-danger"> </p>
                                </div>
                                <div class="form-input form-group txtEmail">
                                    <input type="text" class="form-control form-control-user" id="email"
                                    name="email" placeholder="Correo">
                                    <p class="text-danger correoError"> </p>
                                </div>
                                <div class="form-group row">
                                    <div class=".form-input col-sm-6 mb-3 mb-sm-0 Password">
                                        <input type="password" class="form-control form-control-user"
                                        name="password" id="password" placeholder="Contraseña">
                                        <p class="text-danger passwordError"> </p>
                                    </div>
                                    <div class="form-input col-sm-6 txtRepetirPassword">
                                        <input type="password" class="form-control form-control-user"
                                        id="password-confirm" class="form-control" name="password_confirmation" 
                                        required autocomplete="new-password" placeholder="Repite la contraseña">
                                        <p class="text-danger rpasswordError"> </p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0 txtEmpresa">
                                        <select class="form-control form-select-lg formato-texto" id="Empresa" name="Empresa">
                                            <option selected>Empresa</option>
                                            <option value="1">Entel</option>
                                            <option value="2">Claro</option>
                                            <option value="3">Molestar</option>
                                        </select>
                                        <p id="option1"> </p>
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0 txtEstado">
                                        <select class="form-control form-select-lg formato-texto" id="Estado" name="Estado">
                                            <option selected>Selecciona</option>
                                            <option value="1">Administrador</option>
                                            <option value="2">Especialista</option>
                                            <option value="3">Tecnico</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 txtRol text-center">
                                        <select class="form-control form-select-lg formato-texto" id="Rol" name="Rol">
                                            <option selected>Rol</option>
                                            <option value="1">Administrador</option>
                                            <option value="2">Tecnico N1</option>
                                            <option value="3">Tecnico N2</option>
                                            <option value="4">Tecnico N3</option>
                                        </select>
                                        <p id="option2"> </p>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block" href="{{url('/')}}">
                                            Registrar
                                        </button>
                                <p id="error" class="text-danger"> </p>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">¿Olvidaste tu Contraseña?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">¿Ya tienes una cuenta? ¡Iniciar Sesión!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/registrar.js"></script>
    <script src="js/Validacion.js"></script>

</body>

</html>