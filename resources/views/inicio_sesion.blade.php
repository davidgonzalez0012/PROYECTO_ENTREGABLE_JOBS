{{-- @extends('layout.app')


@section('content')

    <div class="tab-content">
        <div class="tab-pane active " id="s2">

            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">

                            <div class="card-header  text-white text-center">
                                <h3>Inicio de Sesión</h3>
                            </div>
                            <div class="card-body">

                                <div class="mb-3">
                                    <label for="tipoUsuario" class="form-label">Tipo de Usuario</label>
                                    <select class="form-select" id="tipoUsuario">
                                        <option value="">Seleccione un tipo de usuario</option>
                                        <option value="empleador">Empleador</option>
                                        <option value="administrador">Administrador</option>
                                        <option value="empleado">Empleado</option>
                                    </select>
                                </div>



                                <form id="loginForm" action="{{ route('sesion.form') }}" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="correoElectronico" class="form-label">Correo Electrónico</label>
                                        <input type="email" class="form-control" id="correoElectronico" required
                                            placeholder="ejemplo@dominio.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contrasena" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" id="contrasena" required
                                            placeholder="Ingrese su contraseña">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="recordarme">
                                        <label class="form-check-label" for="recordarme">Recordarme</label>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="boton_publicacion">Iniciar Sesión</button>
                                    </div>
                                </form>


                                <div class="text-center mt-3">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#registroModal"
                                        class="text-primary">
                                        Registrarse
                                    </a>
                                    <span class="mx-2">|</span>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#recuperarContrasenaModal"
                                        class="text-primary">
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="registroModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Registro de Usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                           

                                <div class="mb-3">
                                    <label class="form-label">Tipo de Usuario</label>
                                    <select class="form-select">
                                        <option value="empleador">Empleador</option>
                                        <option value="administrador">Administrador</option>
                                        <option value="empleado">Empleado</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nombre Completo</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" required>
                                
                                <button type="submit" class="btn btn-primary w-100">Registrarse</button>
                            
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="recuperarContrasenaModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Recuperar Contraseña</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" required
                                        placeholder="Ingrese su correo electrónico">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Recuperar Contraseña</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
@endsection
 --}}

@extends('layout.app')


@section('content')

    <div class="tab-content">
        <div class="tab-pane active " id="s2">

            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">

                            <div class="card-header  text-white text-center">
                                <h3>Inicio de Sesión</h3>
                            </div>
                            <div class="card-body">

                                <div class="mb-3">
                                    <label for="tipoUsuario" class="form-label">Tipo de Usuario</label>
                                    <select class="form-select" id="tipoUsuario">
                                        <option value="">Seleccione un tipo de usuario</option>
                                        <option value="empleador">Empleador</option>
                                        <option value="administrador">Administrador</option>
                                        <option value="empleado">Empleado</option>
                                    </select>
                                    
                                </div>



                                <form id="loginForm" action="{{ route('sesion.form') }}" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="correoElectronico" class="form-label">Correo Electrónico</label>
                                        <input type="email" class="form-control" id="correoElectronico" required
                                            placeholder="ejemplo@dominio.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contrasena" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" id="contrasena" required
                                            placeholder="Ingrese su contraseña">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="recordarme">
                                        <label class="form-check-label" for="recordarme">Recordarme</label>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="boton_publicacion">Iniciar Sesión</button>
                                    </div>
                                </form>


                                <div class="text-center mt-3">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#registroModal"
                                        class="text-primary">
                                        Registrarse
                                    </a>
                                    <span class="mx-2">|</span>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#recuperarContrasenaModal"
                                        class="text-primary">
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="registroModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Registro de Usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                           

                                <div class="mb-3">
                                    <label class="form-label">Tipo de Usuario</label>
                                    <select class="form-select">
                                        <option value="empleador">Empleador</option>
                                        <option value="administrador">Administrador</option>
                                        <option value="empleado">Empleado</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nombre Completo</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" required>
                                </div>
                                <!-- <div class="mb-3">
                                        <label class="form-label">Confirmar Contraseña</label>
                                        <input type="password" class="form-control" required>
                                    </div>-->
                                <button type="submit" class="btn btn-primary w-100">Registrarse</button>
                            
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="recuperarContrasenaModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Recuperar Contraseña</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" required
                                        placeholder="Ingrese su correo electrónico">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Recuperar Contraseña</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection