<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu"><?= lang('Files.Menu') ?></li>
                <li>
                    <a href="/codeMinia/public/">
                        <i data-feather="home"></i>
                        <span data-key="t-home"><?= lang('Pàgina Principal') ?></span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="sliders"></i>
                        <span>Taules</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="http://localhost/code3/index.php/taulaPersones">
                                <span data-key="t-taula1">Taula Persones 1</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="apps-calendar?pagina=0">
                                <span data-key="t-taula2">Taula Persones 2</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="apps-chat?pagina=0">
                                <span data-key="t-taula3">Taula Usuaris</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span>Autentificacio</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="http://localhost/code3/index.php/iniciarSessio">Iniciar Sessio</a></li>
                        <li><a href="http://localhost/code3/index.php/registrarUsuari">Registrar Usuari</a></li>
                        <li><a href="http://localhost/code3/index.php/eliminarUsuari">Eliminar Usuari</a></li>
                        <li><a href="http://localhost/code4/Formulari">Afegir Persona</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidemenu -->
    </div>
</div>
<!-- Left Sidebar End -->