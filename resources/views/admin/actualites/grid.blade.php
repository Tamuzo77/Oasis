<x-admin.layout title="Actualités">
    <x-admin.header title="Grille d'Actualité" />

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Actualités</a></li>
            <li class="breadcrumb-item active" aria-current="page">Grille d'Actualités</li>
        </ol>
    </nav>

    <div class="row justify-content-md-between mb-5 mb-xl-0 ">
        <!-- col -->
        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
            <!-- search -->
            <div class="mb-2 mb-lg-4">
                <form method="GET">
                    @if (request('category'))
                        <input type="hidden" name="categoryNew" value="{{ request('categoryNew') }}">
                    @endif
                    <input type="search" name="search" value="{{ request('search') }}" id="search-input"
                        class="form-control" placeholder="Search Actus">
                </form>

            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-12 d-flex  justify-content-end ">
            <div>
                <a href="{{ route('admin.actualites-list') }}"
                    class="btn btn-ghost btn-icon btn-md rounded-circle texttooltip " data-template="listTooltip">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-list icon-xs">
                        <line x1="8" y1="6" x2="21" y2="6"></line>
                        <line x1="8" y1="12" x2="21" y2="12"></line>
                        <line x1="8" y1="18" x2="21" y2="18"></line>
                        <line x1="3" y1="6" x2="3.01" y2="6"></line>
                        <line x1="3" y1="12" x2="3.01" y2="12"></line>
                        <line x1="3" y1="18" x2="3.01" y2="18"></line>
                    </svg>
                    <div class="d-none" id="listTooltip">
                        <span>List</span>
                    </div>
                </a>
                <a href="{{ route('admin.actualites-grid') }}"
                    class="btn btn-ghost btn-icon btn-md rounded-circle  texttooltip " data-template="gridTooltip">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-grid icon-xs">
                        <rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect>
                        <rect x="3" y="14" width="7" height="7"></rect>
                    </svg>
                    <div class="d-none" id="gridTooltip">
                        <span>Grid</span>
                    </div>
                </a>
            </div>

        </div>
        <div class="col-xl-3 col-lg-2 col-md-6 col-12 ">


            <!-- Custom select -->
            <form method="get">
                <select name="status" class="form-select" onchange="this.form.submit()">
                    <option value="">Filtre</option>
                    <option value="actif" {{ Request::get('status') == 'actif' ? 'selected' : '' }}>Actif</option>
                    <option value="inactif" {{ Request::get('status') == 'inactif' ? 'selected' : '' }}>Inactif</option>

                </select>


            </form>
        </div>
    </div>
    <x-admin.flash />
    <div class="row">
        @foreach ($actualites as $actualite)
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-5">
                <!-- card -->
                <div class="card h-100">
                    @if ($actualite->cover_image ?? false)
                        <img src="{{ asset('storage/' . $actualite->cover_image) }}" alt="Image"
                            class="img-fluid rounded-top custom-image">
                    @endif
                    <div class="d-flex position-absolute end-0 pe-3 pt-3">

                        <div class="dropdown dropstart">
                            <a href="#!" class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>                            </a>
                            <div class="dropdown-menu">
                                <form
                                    action="{{ route('admin.actualites.edit', \Illuminate\Support\Facades\Crypt::encrypt($actualite->slug)) }}"
                                    method="get">
                                    @csrf
                                    <button type="submit" class="dropdown-item d-flex align-items-center">
                                        <i class=" dropdown-item-icon" data-feather="edit"></i>Edit Details
                                    </button>
                                </form>

                                <a class="dropdown-item d-flex align-items-center" href="#"
                                    onclick="copyActusLink()">
                                    <i class="dropdown-item-icon" data-feather="link"></i>Copy Actus link
                                </a>
                                <input type="hidden" id="actus-link" value="http://example.com/actus" />


                                <div class="dropdown-divider"></div>
                                <form action="" method="post">
                                    @csrf
                                    @method('')
                                    <button class=" disabled dropdown-item d-flex align-items-center" href="#!">
                                        <i class=" dropdown-item-icon" data-feather="printer"></i>Export / Print
                                    </button>
                                </form>
                                <div class="dropdown-divider"></div>
                                <form
                                    action="{{ route('admin.actus-active', \Illuminate\Support\Facades\Crypt::encrypt($actualite->slug)) }}"
                                    method="post">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="dropdown-item d-flex align-items-center">
                                        <i class="dropdown-item-icon" data-feather="archive"></i>
                                        {{ $actualite->status_id === 1 ? 'Désactiver' : 'Activer' }}
                                    </button>
                                </form>
                                <form
                                    action="{{ route('admin.actualites.destroy', \Illuminate\Support\Facades\Crypt::encrypt($actualite->slug)) }}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item d-flex align-items-center">
                                        <i class="dropdown-item-icon" data-feather="trash"></i>Supprimer
                                    </button>
                                </form>



                            </div>
                        </div>
                    </div>
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading-->


                        <!-- text-->



                        <div class="mb-4">
                            <h4 class="mb-0 h5"><a href="#!" class="text-inherit">{{ $actualite->title }}
                                </a></h4>
                            <span class="text-muted fs-6">{{ $actualite->categoryNew->name }}</span>


                        </div>
                        <div class="mt-3 mb-4">
                            <p class="mb-0">{!! $actualite->content !!}</p>
                        </div>



                        <!-- progress -->
                        <div class="d-flex justify-content-between
                          align-items-center mb-5">
                            <div class="d-flex align-items-center">
                                <!-- avatar group -->
                                <div class="avatar-group">
                                    <span class="avatar avatar-sm avatar-success imgtooltip"
                                        data-template="textThirteen">
                                        <span class="avatar-initials rounded-circle ">

                                            OA</span>

                                        <span id="textThirteen" class="d-none">
                                            <span>OASIS</span>

                                        </span>
                                    </span>


                                </div>

                            </div>
                            <!-- text -->
                            <div>
                                <span
                                    class="badge {{ $actualite->status_id == 1 ? 'badge-success-soft' : 'badge-danger-soft' }} ">{{ $actualite->status->libelle }}</span>
                            </div>

                        </div>

                    </div>
                    <!-- card footer -->
                    <div class="card-footer p-0">
                        <div class="d-flex justify-content-between ">

                            <div class="w-50 py-3 px-4 ">
                                <h6 class="mb-0 text-muted">Créer:</h6>
                                <p class="text-dark fs-6  mb-0">{{ $actualite->created_at->diffForHumans() }}</p>
                            </div>
                            <div class="border-start w-50 py-3 px-4">
                                <h6 class="mb-0 text-muted">Modifié:</h6>
                                <p class="text-dark fs-6  mb-0">{{ $actualite->updated_at->diffForHumans() }}</p>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        @endforeach
        {{ $actualites->links() }}



        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-5">
            <!-- card -->
            <div class="card h-100">
                <img src="{{ asset('admin/assets/images/background/project-cover-img.jpg') }}" alt="Image"
                    class="img-fluid rounded-top">
                <div class="d-flex position-absolute end-0 pe-3 pt-3">

                    <div class="dropdown dropstart">
                        <a href="#!" class="btn-icon btn btn-ghost btn-sm rounded-circle"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="more-vertical" class="icon-xs"></i>
                        </a>
                        <div class="dropdown-menu">

                            <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class=" dropdown-item-icon" data-feather="edit"></i>Edit Details
                            </a>

                            <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="link"></i>Copy project link

                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="save"></i>Save as Default
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="copy"></i>Duplicate
                            </a>


                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="upload"></i>Import
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class=" dropdown-item-icon" data-feather="printer"></i>Export / Print
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="users"></i>Move to another team
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="archive"></i>Archive
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="trash"></i>Delete Project
                            </a>


                        </div>
                    </div>
                </div>
                <!-- card body -->
                <div class="card-body">
                    <!-- heading-->


                    <!-- text-->



                    <div class="mb-4">
                        <h4 class="mb-0 h5"><a href="#!" class="text-inherit">OASIS Développement Dashboard
                            </a></h4>
                        <span class="text-muted fs-6">Front End Development</span>


                    </div>




                    <!-- progress -->
                    <div class="d-flex justify-content-between
                            align-items-center mb-5">
                        <div class="d-flex align-items-center">
                            <!-- avatar group -->
                            <div class="avatar-group">
                                <span class="avatar avatar-sm avatar-success imgtooltip" data-template="textThirteen">
                                    <span class="avatar-initials rounded-circle ">

                                        DU</span>

                                    <span id="textThirteen" class="d-none">
                                        <span>Dash UI Only</span>

                                    </span>
                                </span>
                                <span class="avatar avatar-sm">
                                    <img alt="avatar" src="../assets/images/avatar/avatar-13.jpg"
                                        class="rounded-circle imgtooltip" data-template="fifteen">
                                    <span id="fifteen" class="d-none">
                                        <span>Charlie Holland</span>

                                    </span>
                                </span>
                                <span class="avatar avatar-sm">
                                    <img alt="avatar" src="../assets/images/avatar/avatar-14.jpg"
                                        class="rounded-circle imgtooltip" data-template="seventeen">
                                    <span id="seventeen" class="d-none">
                                        <span>Jamie Lusar</span>

                                    </span>
                                </span>
                                <span class="avatar avatar-sm ">
                                    <span class="avatar-initials rounded-circle bg-light text-dark">9+</span>
                                </span>


                            </div>

                        </div>
                        <!-- text -->
                        <div>
                            <span class="badge badge-success-soft ">Finished</span>
                        </div>

                    </div>
                    <div>
                        <!-- progress bar -->
                        <div class="d-flex justify-content-between mb-2 fs-6"> <span>Progress</span>
                            <span>100%</span>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%;"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">

                            </div>
                        </div>

                    </div>

                </div>
                <!-- card footer -->
                <div class="card-footer p-0">
                    <div class="d-flex justify-content-between ">

                        <div class="w-50 py-3 px-4 ">
                            <h6 class="mb-0 text-muted">Due Date:</h6>
                            <p class="text-dark fs-6  mb-0">1 Sept, 2023</p>
                        </div>
                        <div class="border-start w-50 py-3 px-4">
                            <h6 class="mb-0 text-muted">Budget:</h6>
                            <p class="text-dark fs-6  mb-0">$5,200 </p>

                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-5">
            <a href="#!" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                <div class="card h-100 border border-2 shadow-none card-dashed-hover p-12">
                    <div class="card-body d-flex flex-column justify-content-center text-center">
                        <i class="mdi mdi-plus text-secondary mb-3 fs-2" aria-hidden="true"></i>
                    </div>
                </div>
            </a>
        </div>

    </div>


    <!--Off canvas -->
    <div class="offcanvas offcanvas-end @if ($errors->any()) show @endif" tabindex="-1"
        id="offcanvasRight" style="width: 600px;">

        <div class="offcanvas-body" data-simplebar>
            <div class="offcanvas-header px-2 pt-0">
                <h3 class="offcanvas-title" id="offcanvasExampleLabel">Création Rapide : Actualité</h3>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>

            <!-- card body -->
            <div class="container">
                <!-- form -->

                <form id="my-form" action="{{ route('admin.actualites.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- form group -->
                        <div class="mb-3 col-12">
                            <label class="form-label">Titre <span class="text-danger">*</span></label>
                            <input type="text" name="title"
                                class="form-control @error('title') is-invalid @enderror"
                                placeholder="Enter actus title" value="{{ old('title') ?? '' }}" required>
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <x-admin.form.label name="slug" :important="true" />
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="slug">https://example.com/</span>
                            <input type="text" class="form-control" id="basic-url" name="slug" aria-describedby="slug" placeholder="actus-title">
                        </div>
                        <!-- form group -->
                        <div class="mb-20 col-12">
                            <label class="form-label">Description</label>
                            <div name="description" id="editor">
                                <p> Type something here </p>
                            </div>
                            <input type="hidden" name="content" id="description" class="hidden-input">
                            @error('content')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <br>
                        <br>
                        <br>
                        <!-- form group -->
                        <div class="mb-4 col-md-6 col-12">
                            <label class="form-label">Categorie
                            </label>
                            <select class="form-select" name="categoryNew_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- form group -->
                        <div class="mb-4 col-md-6 col-12">
                            <label class="form-label">Statut</label>
                            <select class="form-select" name="status_id">
                                @foreach ($statuses as $status)
                                    <option value="{{ $status->id }}">{{ $status->libelle }}</option>
                                @endforeach
                            </select>
                        </div>


                        <input type="hidden" name="author" value="OASIS">




                        <div class="col-12 mb-4">
                            <h5 class="mb-2">Image de couverture </h5>

                            <div class="fallback d-block dropzone border-dashed min-h-0 rounded-2">

                                <input value="{{ old('cover_image') ?? '' }}" name="cover_image" type="file"
                                    required>
                                @error('cover_image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                        </div>

                        <div class="col-md-8"></div>
                        <!-- button -->
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit" onclick="submitForm()">Submit</button>
                            <button type="button" class="btn btn-outline-primary ms-2" data-bs-dismiss="offcanvas"
                                aria-label="Close">Close</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <script>
        function submitForm() {
            var description = document.getElementById('editor').innerHTML;
            document.getElementById('description').value = description;
            document.forms[0].submit();

            Dropzone.options.myDropzone = {
                url: document.getElementById('myForm').getAttribute('action'),
                paramName: "cover_image",
                maxFiles: 1,
                acceptedFiles: "image/*",
                init: function() {
                    this.on("success", function(file, response) {
                        console.log(response);
                    });
                }
            };

        }

        function copyActusLink() {
            // Récupérer le lien à copier depuis l'élément HTML
            var actusLink = document.getElementById('actus-link').value;

            // Copier le lien dans le presse-papiers
            var tempInput = document.createElement('input');
            tempInput.setAttribute('value', actusLink);
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);

            // Afficher une notification de succès avec SweetAlert
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Lien copié  !',
                showConfirmButton: false,
                timer: 1500
            })
        }
    </script>

    <style>
        .ql-hidden {
            visibility: hidden;
            position: absolute;
        }

        .custom-image {
            width: 100%;
            height: auto;
            max-height: 150px;
            /* Spécifiez ici la hauteur maximale souhaitée */
            object-fit: cover;
        }
    </style>

</x-admin.layout>
