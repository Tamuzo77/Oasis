<x-admin.layout title="Catégories de Formations">
    <x-admin.header title="Catégories de Formations" />

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Site</a></li>
            <li class="breadcrumb-item active" aria-current="page">Catégorie de Formations</li>
        </ol>
    </nav>
    <div class="row justify-content-md-between mb-4 mb-xl-0 ">
        <!-- col -->
        <div class="col-xl-2 col-lg-4 col-md-6 col-12">
            <!-- search -->
            <div class="mb-lg-4 mb-2">
                <input type="search" class="form-control" placeholder="Search ...">
            </div>
        </div>
        <div class="col-xxl-1 col-lg-2 col-md-6 col-12 ">
            <!-- Custom select -->
            <select class="form-select">
                <option value="">Filter</option>
                <option value="In Progress">In Progress</option>
                <option value="Pending">Pending</option>
                <option value="Modified">Modified</option>
                <option value="Finished">Finished</option>
                <option value="Cancel">Cancel</option>

            </select>

        </div>
    </div>
    <x-admin.flash />
    <div class="table-responsive">
        <table class="table mb-0 text-nowrap table-centered">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Crée le</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>
                        {{ $increment }}
                    </td>
                    <td>
                        {{ $category->name }}
                    </td>
                    <td>
                        {{ $category->created_at }}
                    </td>

                   
                    <td class="text-end">
                        <div class="dropdown dropstart">
                            <a href="#!" class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-more-vertical icon-xs">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                            </a>
                            <div class="dropdown-menu" style="">

                                <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.categoryNew-details',\Illuminate\Support\Facades\Crypt::encrypt($category->slug)) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-link dropdown-item-icon">
                                        <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                        <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                    </svg>Voir les formations

                                </a>


                                <div class="dropdown-divider"></div>
                                <form action="{{ route('admin.categoryNew-update', \Illuminate\Support\Facades\Crypt::encrypt($category->slug)) }}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <button class="dropdown-item d-flex align-items-center" type="submit" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-archive dropdown-item-icon">
                                            <polyline points="21 8 21 21 3 21 3 8"></polyline>
                                            <rect x="1" y="3" width="22" height="5"></rect>
                                            <line x1="10" y1="12" x2="14" y2="12"></line>
                                        </svg> {{ $category->archived ? 'Activer | Désarchiver' : 'Désactiver | Archiver'  }}
                                    </button>
                                </form>

                                <form action="{{route('admin.categoriesForms.destroy', \Illuminate\Support\Facades\Crypt::encrypt($category->slug)) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="dropdown-item d-flex align-items-center" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trash dropdown-item-icon">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                        </svg>Delete
                                    </button>
                                </form>
                                
                               


                            </div>
                        </div>
                    </td>
                </tr>
                @php
                    $increment++;
                @endphp
                @endforeach


                <tr>
                    <td colspan="7">
                        <div class="d-flex align-items-center">
                            <a href="#!" class="text-muted  border-2 rounded-3 card-dashed-hover"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                                <div class="icon-shape icon-lg fs-3 ">
                                    +
                                </div>
                            </a>
                            <div class="ms-3">
                                <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">Nouvelle Catégorie</a></h4>
                            </div>
                        </div>
                    </td>

                </tr>

            </tbody>        
        </table>
        {{ $categories->links() }}


    </div>



    <div class="offcanvas offcanvas-end @if($errors->any()) show @endif" tabindex="-1" id="offcanvasRight" style="width: 600px;">

        <div class="offcanvas-body" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: -16px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                            aria-label="scrollable content" style="height: auto; overflow: hidden;">
                            <div class="simplebar-content" style="padding: 16px;">
                                <div class="offcanvas-header px-2 pt-0">
                                    <h3 class="offcanvas-title" id="offcanvasExampleLabel">Crée une nouvelle Catégorie d'Actus</h3>
                                    <button type="button" class="btn-close text-reset"
                                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>

                                <!-- card body -->
                                <div class="container">
                                    <!-- form -->
                                    <div class="row">
                                        <!-- form group -->
                                        <form action="{{ route('admin.categoriesForms.store') }}" method="POST">
                                            @csrf
                                            <div class="mb-3 col-12">
                                                <label class="form-label">Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                    id="name"
                                                    placeholder="Enter category name" value="{{ old('name') ?? '' }}" name="name" required="">
                                                    @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                            <!-- form group -->
                                            
                                            <!-- form group -->
                                            <div class="mb-4 col-md-6 col-12">
                                                <label class="form-label">Etat</label>
                                                <select class="form-select" name="archived">
                                                    <option value="0">Activé</option>
                                                    <option value="1">Désactivé</option>
                                                </select>
                                            </div>
                                            <div class="col-md-8"></div>
                                            <!-- button -->
                                            <div class="col-12">
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                                <button type="button" class="btn btn-outline-primary ms-2"
                                                    data-bs-dismiss="offcanvas" aria-label="Close">Close</button>
                                            </div>
                                        </form>
                                        
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 768px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar"
                    style="width: 0px; display: none; transform: translate3d(0px, 0px, 0px);"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                <div class="simplebar-scrollbar"
                    style="height: 0px; display: none; transform: translate3d(0px, 0px, 0px);"></div>
            </div>
        </div>
    </div>

</x-admin.layout>
