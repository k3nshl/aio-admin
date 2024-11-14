<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>


<div class="topbar d-flex align-items-center">
    <nav class="navbar navbar-expand">
        <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
        </div>
        <div class="top-menu ms-auto">
            <ul class="navbar-nav align-items-center">

                <li class="nav-item dropdown dropdown-large">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"> <i class='bx bx-category'></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <div class="row row-cols-3 g-3 p-3">
                            <div class="col text-center">
                                <div class="app-box mx-auto bg-gradient-moonlit text-white"><i
                                        class='fadeIn animated bx bx-group'></i>
                                </div>
                                <div class="app-title">Usuarios</div>
                            </div>
                            <div class="col text-center">
                                <div class="app-box mx-auto bg-gradient-moonlit text-white"><i
                                        class='lni lni-website'></i>
                                </div>
                                <div class="app-title">Sitios Web</div>
                            </div>
                            <div class="col text-center">
                                <div class="app-box mx-auto bg-gradient-moonlit text-white"><i
                                        class='fadeIn animated bx bx-bar-chart-alt-2'></i>
                                </div>
                                <div class="app-title">Aliados</div>
                            </div>
                            <div class="col text-center">
                                <div class="app-box mx-auto bg-gradient-moonlit text-white"><i
                                        class='fadeIn animated bx bx-news'></i>
                                </div>
                                <div class="app-title">Noticias</div>
                            </div>
                            <div class="col text-center">
                                <div class="app-box mx-auto bg-gradient-moonlit text-white"><i
                                        class='fadeIn animated bx bx-calendar-event'></i>
                                </div>
                                <div class="app-title">Eventos</div>
                            </div>
                            <div class="col text-center">
                                <div class="app-box mx-auto bg-gradient-moonlit text-white"><i
                                        class='fadeIn animated bx bx-slider-alt'></i>
                                </div>
                                <div class="app-title">Sliders</div>
                            </div>
                            <div class="col text-center">
                                <div class="app-box mx-auto bg-gradient-moonlit text-white"><i
                                        class='fadeIn animated bx bx-grid-alt'></i>
                                </div>
                                <div class="app-title">Categorias</div>
                            </div>
                            <div class="col text-center">
                                <div class="app-box mx-auto bg-gradient-moonlit text-white"><i
                                        class='fadeIn animated bx bx-info-square'></i>
                                </div>
                                <div class="app-title">Cuadros Informativos</div>
                            </div>
                            <div class="col text-center">
                                <div class="app-box mx-auto bg-gradient-moonlit text-white"><i
                                        class='fadeIn animated bx bx-copy-alt'></i>
                                </div>
                                <div class="app-title">Páginas de Informacion</div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-large">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="alert-count">0</span>
                        <i class='bx bx-bell'></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="javascript:;">
                            <div class="msg-header">
                                <p class="msg-header-title">Notificaciones</p>
                            </div>
                        </a>
                        <div class="header-notifications-list">
                            <a class="dropdown-item" href="javascript:;">
                                <div class="d-flex align-items-center">
                                    <div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="msg-name">Nuevos Usuarios<span class="msg-time float-end">14
                                                atrás</span></h6>
                                        <p class="msg-info">Se han registrado usuarios nuevos</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="javascript:;">
                                <div class="d-flex align-items-center">
                                    <div class="notify bg-light-success text-success"><i class="bx bx-file"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="msg-name">Nueva noticia publicada<span class="msg-time float-end">19
                                                min
                                                atrás</span></h6>
                                        <p class="msg-info">Se ha creado una nueva noticia</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-large">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="alert-count">0</span>
                        <i class='bx bx-comment'></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="javascript:;">
                            <div class="msg-header">
                                <p class="msg-header-title">Mensajes</p>
                            </div>
                        </a>
                        <div class="header-message-list">
                            <a class="dropdown-item" href="javascript:;">
                                <div class="d-flex align-items-center">
                                    <div class="user-online">
                                        <img src="assets/images/avatars/user-avatar.png" class="msg-avatar"
                                            alt="user avatar">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="msg-name">Paco Alcacer <span class="msg-time float-end">5
                                                seg
                                                atrás</span></h6>
                                        <p class="msg-info">He creado una noticia</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="user-box dropdown">
            <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="assets/images/avatars/user-avatar.png" class="user-img" alt="user avatar">
                <div class="user-info ps-3">
                    <p class="user-name mb-0">{{ auth()->user()->name }}</p>
                    <p class="designattion mb-0">Superadmin</p>
                </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li> <a class="dropdown-item" href="{{ route('profile') }}" wire:navigate>
                        <i class='text-primary bx bx-home-circle'></i>
                        <span>Perfil</span>
                    </a>
                </li>
                <li><a class="dropdown-item" href="{{ route('user.index') }}"><i
                            class='text-primary bx bx-home-circle'></i><span>Dashboard</span></a>
                </li>
                <li>
                    <div class="dropdown-divider mb-0"></div>
                </li>
                <li>
                    <button type="submit" wire:click="logout" class="dropdown-item">
                        <i class='text-danger bx bx-log-out-circle'></i><span>Cerrar Sesión</span>
                    </button>

                </li>
            </ul>
        </div>
    </nav>
</div>
