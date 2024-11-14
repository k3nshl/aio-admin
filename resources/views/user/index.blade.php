@extends('template.index')

@section('content')
<div class="page-content">
    <!--start breadcrumb -->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Sección</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i
                                class="text-secondary bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb -->
    <div class="card radius-10">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">Lista de usuarios</h5>
                </div>
                <div class="font-22 ms-auto">
                    <a href="#" class="btn btn-primary" title="Presione para registrar un nuevo usuario"><i
                            class="fadeIn animated bx bx-user-plus"></i>Registrar</a>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                <table id="table-users" class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>User Id</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Rol</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#897656</td>
                            <td>David Johnson</td>
                            <td>correo@gmail.com</td>
                            <td>
                                <div class="badge rounded-pill bg-light-danger text-danger w-100">
                                    Administrador
                                </div>
                            </td>
                            <td>
                                <div class="d-flex order-actions">
                                    <a href="javascript:;" class="ms-2 a-show"><i
                                            class="fadeIn animated bx bx-show-alt"
                                            title="Presiona para ver los datos del usuario"></i></a>
                                    <a href="javascript:;" class="ms-2 a-edit"
                                        title="Presiona para editar los datos del usuario"><i
                                            class="bx bx-cog"></i></a>
                                    <a href="javascript:;" class="ms-2 a-block"
                                        title="Presiona para desbloquear usuario"><i
                                            class="fadeIn animated bx bx-lock-open"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#897656</td>
                            <td>Alexandra Quesada</td>
                            <td>correo@gmail.com</td>
                            <td>
                                <div class="badge rounded-pill bg-light-info text-info w-100">Lector
                                </div>
                            </td>
                            <td>
                                <div class="d-flex order-actions">
                                    <a href="javascript:;" class="ms-2 a-show"><i
                                            class="fadeIn animated bx bx-show-alt"
                                            title="Presiona para ver los datos del usuario"></i></a>
                                    <a href="javascript:;" class="ms-2 a-edit"
                                        title="Presiona para editar los datos del usuario"><i
                                            class="bx bx-cog"></i></a>
                                    <a href="javascript:;" class="ms-2 a-block"
                                        title="Presiona para desbloquear usuario"><i
                                            class="fadeIn animated bx bx-lock-open"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#897656</td>
                            <td>Yojan Fernández</td>
                            <td>correo@gmail.com</td>
                            <td>
                                <div class="badge rounded-pill bg-light-danger text-danger w-100">
                                    Administrador
                                </div>
                            </td>
                            <td>
                                <div class="d-flex order-actions">
                                    <a href="javascript:;" class="ms-2 a-show"><i
                                            class="fadeIn animated bx bx-show-alt"
                                            title="Presiona para ver los datos del usuario"></i></a>
                                    <a href="javascript:;" class="ms-2 a-edit"
                                        title="Presiona para editar los datos del usuario"><i
                                            class="bx bx-cog"></i></a>
                                    <a href="javascript:;" class="ms-2 a-block"
                                        title="Presiona para desbloquear usuario"><i
                                            class="fadeIn animated bx bx-lock-open"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#897656</td>
                            <td>Paco Romero</td>
                            <td>correo@gmail.com</td>
                            <td>
                                <div class="badge rounded-pill bg-light-info text-info w-100">Lector
                                </div>
                            </td>
                            <td>
                                <div class="d-flex order-actions">
                                    <a href="javascript:;" class="ms-2 a-show"><i
                                            class="fadeIn animated bx bx-show-alt"
                                            title="Presiona para ver los datos del usuario"></i></a>
                                    <a href="javascript:;" class="ms-2 a-edit"
                                        title="Presiona para editar los datos del usuario"><i
                                            class="bx bx-cog"></i></a>
                                    <a href="javascript:;" class="ms-2 a-block"
                                        title="Presiona para desbloquear usuario"><i
                                            class="fadeIn animated bx bx-lock-open"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#897656</td>
                            <td>Bryan Cortez</td>
                            <td>correo@gmail.com</td>
                            <td>
                                <div class="badge rounded-pill bg-light-info text-info w-100">Lector
                                </div>
                            </td>
                            <td>
                                <div class="d-flex order-actions">
                                    <a href="javascript:;" class="ms-2 a-show"><i
                                            class="fadeIn animated bx bx-show-alt"
                                            title="Presiona para ver los datos del usuario"></i></a>
                                    <a href="javascript:;" class="ms-2 a-edit"
                                        title="Presiona para editar los datos del usuario"><i
                                            class="bx bx-cog"></i></a>
                                    <a href="javascript:;" class="ms-2 a-block"
                                        title="Presiona para desbloquear usuario"><i
                                            class="fadeIn animated bx bx-lock-open"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#897656</td>
                            <td>Jhon Smith</td>
                            <td>correo@gmail.com</td>
                            <td>
                                <div class="badge rounded-pill bg-light-success text-success w-100">
                                    Editor</div>
                            </td>
                            <td>
                                <div class="d-flex order-actions">
                                    <a href="javascript:;" class="ms-2 a-show"><i
                                            class="fadeIn animated bx bx-show-alt"
                                            title="Presiona para ver los datos del usuario"></i></a>
                                    <a href="javascript:;" class="ms-2 a-edit"
                                        title="Presiona para editar los datos del usuario"><i
                                            class="bx bx-cog"></i></a>
                                    <a href="javascript:;" class="ms-2 a-unblock"
                                        title="Presiona para desbloquear usuario"><i
                                            class="fadeIn animated bx bx-lock-open"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#897656</td>
                            <td>Jorge Montero</td>
                            <td>correo@gmail.com</td>
                            <td>
                                <div class="badge rounded-pill bg-light-info text-info w-100">Lector
                                </div>
                            </td>
                            <td>
                                <div class="d-flex order-actions">
                                    <a href="javascript:;" class="ms-2 a-show"><i
                                            class="fadeIn animated bx bx-show-alt"
                                            title="Presiona para ver los datos del usuario"></i></a>
                                    <a href="javascript:;" class="ms-2 a-edit"
                                        title="Presiona para editar los datos del usuario"><i
                                            class="bx bx-cog"></i></a>
                                    <a href="javascript:;" class="ms-2 a-unblock"
                                        title="Presiona para desbloquear usuario"><i
                                            class="fadeIn animated bx bx-lock-open"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#897656</td>
                            <td>Snop Dog</td>
                            <td>correo@gmail.com</td>
                            <td>
                                <div class="badge rounded-pill bg-light-info text-info w-100">Lector
                                </div>
                            </td>
                            <td>
                                <div class="d-flex order-actions">
                                    <a href="javascript:;" class="ms-2 a-show"><i
                                            class="fadeIn animated bx bx-show-alt"
                                            title="Presiona para ver los datos del usuario"></i></a>
                                    <a href="javascript:;" class="ms-2 a-edit"
                                        title="Presiona para editar los datos del usuario"><i
                                            class="bx bx-cog"></i></a>
                                    <a href="javascript:;" class="ms-2 a-unblock"
                                        title="Presiona para desbloquear usuario"><i
                                            class="fadeIn animated bx bx-lock-open"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#897661</td>
                            <td>Carlos Contreras</td>
                            <td>correo@gmail.com</td>
                            <td>
                                <div class="badge rounded-pill bg-light-danger text-danger w-100">
                                    Administrador
                                </div>
                            </td>
                            <td>
                                <div class="d-flex order-actions">
                                    <a href="javascript:;" class="ms-2 a-show"><i
                                            class="fadeIn animated bx bx-show-alt"></i></a>
                                    <a href="javascript:;" class="ms-2 a-edit"><i class="bx bx-cog"></i></a>
                                    <a href="javascript:;" class="ms-2 a-block"><i
                                            class="fadeIn animated bx bx-lock"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#897687</td>
                            <td>Paco Alcantara</td>
                            <td>correo@gmail.com</td>
                            <td>
                                <div class="badge rounded-pill bg-light-success text-success w-100">
                                    Editor</div>
                            </td>
                            <td>
                                <div class="d-flex order-actions">
                                    <a href="javascript:;" class="ms-2 a-show"><i
                                            class="fadeIn animated bx bx-show-alt"></i></a>
                                    <a href="javascript:;" class="ms-2 a-edit"><i class="bx bx-cog"></i></a>
                                    <a href="javascript:;" class="ms-2 a-block"><i
                                            class="fadeIn animated bx bx-lock"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection