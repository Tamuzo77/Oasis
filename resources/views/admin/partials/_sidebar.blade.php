<x-admin.sidebar>

    <x-admin.sidebar-item class="{{ request()->is('admin/dashboard') ? 'active': '' }}" title="Tableau de Bord" href="{{ route('admin.dashboard') }}" icon="home" />
    <x-admin.sidebar-item title="Actualités" separator="Site" :toggle="true" data-bs-toggle="collapse">
        <x-admin.sidebar-item class="{{ request()->is('admin/actualites-grid')  ?   'active' : '' }}" title="Toutes Les Actualités" href="{{ route('admin.actualites-grid') }}" />
        <x-admin.sidebar-item class="{{ request()->is('admin/create-actus')  ?   'active' : '' }}" title="Créer une Actualité" href="{{ route('admin.actus-create') }}" />
    </x-admin.sidebar-item>
    <x-admin.sidebar-item title="Formations"  :toggle="true" data-bs-toggle="collapse">
        <x-admin.sidebar-item title="Nouvelle " href="" />
        <x-admin.sidebar-item title="Nouvelle " href="" />
    </x-admin.sidebar-item>



    <x-admin.sidebar-item title="Site"  separator="Base de Données"  :toggle="true" data-bs-toggle="collapse">
        <x-admin.sidebar-item class="{{ request()->is('admin/actualites/categories') ? 'active' : '' }}" title="Categories d'Actualités " href="{{ route('admin.categories-news') }}" />
        <x-admin.sidebar-item title="Nouvelle " href="" />
    </x-admin.sidebar-item>
    {{--<li class="nav-item">
        <a class="nav-link has-arrow " href="#!" data-bs-toggle="collapse"
            data-bs-target="#navDashboard" aria-expanded="false" aria-controls="navDashboard">
            <i data-feather="home" class="nav-icon me-2 icon-xxs"></i>
            Dashboard
        </a>

        <div id="navDashboard" class="collapse  show " data-bs-parent="#sideNavbar">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link " href="dashboard-analytics.html">
                        Analytics </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="admin/index.html">
                        Project </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link has-arrow   " href="dashboard-ecommerce.html">
                        Ecommerce
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link has-arrow   " href="dashboard-crm.html">
                        CRM
                    </a>



                </li>
                <li class="nav-item">
                    <a class="nav-link has-arrow   " href="dashboard-finance.html">
                        Finance
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link has-arrow   " href="dashboard-blog.html">
                        Blog
                    </a>

                </li>



            </ul>
        </div>

    </li>

    <!-- Nav item -->
    


    <li class="nav-item">
        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
            data-bs-target="#navMenuLevel" aria-expanded="false" aria-controls="navMenuLevel">
            <i data-feather="corner-left-down" class="nav-icon me-2 icon-xxs">
            </i> Menu Level
        </a>
        <div id="navMenuLevel" class="collapse " data-bs-parent="#sideNavbar">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link has-arrow " href="#!" data-bs-toggle="collapse"
                        data-bs-target="#navMenuLevelSecond" aria-expanded="false"
                        aria-controls="navMenuLevelSecond">
                        Two Level
                    </a>
                    <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link " href="#!">
                                    NavItem 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#!">
                                    NavItem 2</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link has-arrow  collapsed  " href="#!"
                        data-bs-toggle="collapse" data-bs-target="#navMenuLevelThree"
                        aria-expanded="false" aria-controls="navMenuLevelThree">
                        Three Level
                    </a>
                    <div id="navMenuLevelThree" class="collapse " data-bs-parent="#navMenuLevel">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link  collapsed " href="#!"
                                    data-bs-toggle="collapse" data-bs-target="#navMenuLevelThreeOne"
                                    aria-expanded="false" aria-controls="navMenuLevelThreeOne">
                                    NavItem 1
                                </a>
                                <div id="navMenuLevelThreeOne" class="collapse collapse "
                                    data-bs-parent="#navMenuLevelThree">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="#!">
                                                NavChild Item 1
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#!">
                                    Nav Item 2</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </li>

    <!-- Nav item -->
    <li class="nav-item">
        <div class="navbar-heading">Documentation</div>
    </li>
    <li class="nav-item">
        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
            data-bs-target="#navDocs" aria-expanded="false" aria-controls="navDocs">
            <i data-feather="package" class="nav-icon me-2 icon-xxs">
            </i> Docs
        </a>
        <div id="navDocs" class="collapse " data-bs-parent="#sideNavbar">
            <ul class="nav flex-column">

                <li class="nav-item"><a href="admin/docs/index.html" class="nav-link  ">Introduction</a>
                </li>
                <li class="nav-item"><a href="admin/docs/environment-setup.html"
                        class="nav-link ">Environment setup</a></li>
                <li class="nav-item"><a href="admin/docs/working-with-gulp.html"
                        class="nav-link  ">Working with Gulp</a>
                </li>
                <li class="nav-item"><a href="admin/docs/compiled-files.html" class="nav-link ">Compiled
                        Files</a>
                </li>
                <li class="nav-item"><a href="admin/docs/file-structure.html" class="nav-link ">File
                        Structure</a></li>
                <li class="nav-item"><a href="admin/docs/resources-assets.html"
                        class="nav-link ">Resources & assets</a></li>
                <li class="nav-item"><a href="admin/docs/changelog.html" class="nav-link ">Changelog</a>
                </li>


            </ul>
        </div>
    </li>--}}
</x-admin.sidebar>