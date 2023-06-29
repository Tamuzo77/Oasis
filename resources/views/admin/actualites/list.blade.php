<x-admin.layout title="Toutes Les Actualités">
    <x-admin.header title="Liste d'Actualités" />

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Actualités</a></li>
            <li class="breadcrumb-item active" aria-current="page">Liste d'Actualités</li>
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
        <!-- col -->
        <div class="col-12">
            <!-- card -->
            <div class="card">
                <!-- table -->
                <div class="table-responsive">
                    <table class="table mb-0 text-nowrap table-centered">
                        <thead class="table-light">
                            <tr>
                                <th>Titre</th>
                                <th>Categorie</th>
                                <th>Auteur</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($actualites as $actualite )
                          <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="icon-shape icon-lg rounded-3 border ">
                                      <img src="{{ asset( 'storage/' . $actualite->cover_image) }}" alt="Image"
                                      class="img-fluid rounded-top custom-image h-auto">                                        </div>
                                    <div class="ms-3">
                                        <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">{{$actualite->title}}</a></h4>
                                    </div>
                                </div>
                            </td>
                            <td>
                                {{ $actualite->categoryNew->name }}
                            </td>
                            <td>
                                {{ __('OASIS') }}
                            </td>

                            <td>
                              <span class="badge {{ ($actualite->status_id == 1) ? 'badge-success-soft' : 'badge-danger-soft' }} ">{{ $actualite->status->libelle }}</span>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropstart">
                                    <a href="#!" class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>                                    </a>
                                    <div class="dropdown-menu">
                                      <form action="{{ route('admin.actualites.edit',\Illuminate\Support\Facades\Crypt::encrypt($actualite->slug)) }}" method="get">
                                        @csrf
                                        <button type="submit" class="dropdown-item d-flex align-items-center">
                                          <i class=" dropdown-item-icon" data-feather="edit"></i>Edit Details
                                        </button>
                                      </form>
            
                                      <a class="dropdown-item d-flex align-items-center" href="#" onclick="copyActusLink()">
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
                                      <form action="{{ route('admin.actus-active',\Illuminate\Support\Facades\Crypt::encrypt($actualite->slug)) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="dropdown-item d-flex align-items-center">
                                          <i class="dropdown-item-icon" data-feather="archive"></i>
                                          {{ ($actualite->status_id === 1) ? 'Désactiver' : 'Activer' }}
                                      </button>
                                      </form>
                                      <form action="{{ route('admin.actualites.destroy', \Illuminate\Support\Facades\Crypt::encrypt($actualite->slug)) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item d-flex align-items-center">
                                          <i class="dropdown-item-icon" data-feather="trash"></i>Supprimer
                                        </button>
                                      </form>
                                      
            
            
                                  </div>
                                </div>
                            </td>
                        </tr>
                          @endforeach
                            


                            <tr>
                                <td colspan="7">
                                    <div class="d-flex align-items-center">
                                        <a href="#!"
                                            class="text-muted border border-2 rounded-3 card-dashed-hover"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                                            <div class="icon-shape icon-lg fs-3 ">
                                                +
                                            </div>
                                        </a>
                                        <div class="ms-3">
                                            <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">Nouvelle
                                                    Actualité</a></h4>
                                        </div>
                                    </div>
                                </td>

                            </tr>

                        </tbody>
                    </table>
                    {{ $actualites->links() }}
                </div>
            </div>
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
