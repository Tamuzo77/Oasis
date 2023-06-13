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
        <div class="col-xl-2 col-lg-4 col-md-6 col-12">
            <!-- search -->
            <div class="mb-2 mb-lg-4">
                <form method="GET">
                    @if (request('category'))
                        <input type="hidden" name="categoryNew" value="{{ request('categoryNew') }}">
                    @endif
                    <input type="search" name="search" value="{{ request('search') }}" id="search-input" class="form-control" placeholder="Search Actus">
                </form>
            </div>
        </div>
        <div class="col-xxl-1 col-lg-2 col-md-6 col-12 ">


            <!-- Custom select -->
            <select class="form-select">
                <option value="">Filtre</option>
                <option value="">Actif | Désarchivé</option>
                <option value="Pending">Inactif | Archivé</option>

            </select>

        </div>
    </div>

    <div class="row">
        @foreach ($actualites as $actualite )
        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-5">
            <!-- card -->
            <div class="card h-100">
              <!-- card body -->
              <div class="card-body">
                <!-- heading-->
                <div class="d-flex align-items-center
                              justify-content-between">
    
                  <!-- text-->
    
                  <div>
                    <h4 class="mb-0 h5"><a href="#!" class="text-inherit">{{ $actualite->title }}</a></h4>
                    <span class="text-muted fs-6">{{ $actualite->categoryNew->name }}</span>
    
    
                  </div>
                  <!-- dropdown-->
                  <div class="d-flex align-items-center">
    
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
                </div>
                <!-- para-->
                <div class="mt-3 mb-4">
                  <p class="mb-0">{{$actualite->content}}</p>
                </div>
                <!-- progress -->
                <div class="d-flex justify-content-between
                              align-items-center mb-5">
                  <div class="d-flex align-items-center">
                    <!-- avatar group -->
                    <div class="avatar-group">
                      <span class="avatar avatar-sm">
                        <img alt="avatar" src="{{ asset('admin/assets/images/avatar/avatar-11.jpg') }}"
                          class="rounded-circle imgtooltip" data-template="one">
                        <span id="one" class="d-none">
                          <span>{{ __('OASIS') }}</span>
    
                        </span>
                      </span>
                    </div>
                  </div>
                  <!-- text -->
                  <div>
                    <span class="badge badge-info-soft ">{{ $actualite->status->libelle }}</span>
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
                    <h6 class="mb-0 text-muted">Modifié  :</h6>
                    <p class="text-dark fs-6  mb-0">{{ $actualite->updated_at->diffForHumans() }} </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach



      <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-5">
        <!-- card -->
        <div class="card h-100">
          <img src="{{ asset('admin/assets/images/background/project-cover-img.jpg') }}" alt="Image" class="img-fluid rounded-top">
          <div class="d-flex position-absolute end-0 pe-3 pt-3">

            <div class="dropdown dropstart">
              <a href="#!" class="btn-icon btn btn-ghost btn-sm rounded-circle" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
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
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100"
                  aria-valuemin="0" aria-valuemax="100">

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
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" style="width: 600px;">

      <div class="offcanvas-body" data-simplebar>
        <div class="offcanvas-header px-2 pt-0">
          <h3 class="offcanvas-title" id="offcanvasExampleLabel">Create Project</h3>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
  
        <!-- card body -->
        <div class="container">
          <!-- form -->
          <div class="row">
            <!-- form group -->
            <div class="mb-3 col-12">
              <label class="form-label">Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="Enter project title" required>
            </div>
            <!-- form group -->
            <div class="mb-3 col-12">
              <label class="form-label">Description</label>
              <div id="editor">
  
                <p> Type something here
                </p>
                <br>
                <br>
                <br>
  
  
              </div>
            </div>
            <!-- form group -->
            <div class="mb-3 col-md-6 col-12">
              <label class="form-label">Start Date <span class="text-danger">*</span></label>
              <div class="input-group me-3 flatpickr rounded">
                <input class="form-control " type="text" placeholder="Select Date" aria-describedby="basic-addon2">
  
                <span class="input-group-text text-muted" id="basic-addon2"><i data-feather="calendar"
                    class="icon-xs"></i></span>
  
              </div>
            </div>
            <!-- form group -->
            <div class="mb-3 col-md-6 col-12">
              <label class="form-label">End Date <span class="text-danger">*</span></label>
              <div class="input-group me-3 flatpickr rounded">
                <input class="form-control " type="text" placeholder="Select Date" aria-describedby="basic-addon3">
  
                <span class="input-group-text text-muted" id="basic-addon3"><i data-feather="calendar"
                    class="icon-xs"></i></span>
  
              </div>
            </div>
            <!-- form group -->
            <div class="mb-4 col-md-6 col-12">
              <label class="form-label">Priority
              </label>
              <select class="form-select">
                <option value="">Set Priority</option>
                <option value="High">High</option>
                <option value="Medium">Medium</option>
                <option value="Low">Low</option>
              </select>
            </div>
            <!-- form group -->
            <div class="mb-4 col-md-6 col-12">
              <label class="form-label">Status</label>
              <select class="form-select">
                <option value="">In Progress</option>
                <option value="Based on Project Amount">Based on Project Amount</option>
                <option value="Based on Project Hours">Based on Project Hours</option>
              </select>
            </div>
  
  
  
  
  
  
            <div class="col-12 mb-4">
              <h5 class="mb-2">Cover Image </h5>
  
              <form action="#" class="d-block dropzone border-dashed min-h-0 rounded-2">
                <div class="fallback">
                  <input name="file" type="file" multiple>
                </div>
              </form>
  
  
            </div>
            <div class="col-md-8"></div>
            <!-- button -->
            <div class="col-12">
              <button class="btn btn-primary" type="button">Submit</button>
              <button type="button" class="btn btn-outline-primary ms-2" data-bs-dismiss="offcanvas"
                aria-label="Close">Close</button>
            </div>
          </div>
  
        </div>
      </div>
    </div>
</x-admin.layout>
