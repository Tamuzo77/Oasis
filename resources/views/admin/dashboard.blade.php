<x-admin.layout title="Dashboard" :notifs="$notifications">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h3 class="mb-0 ">{{ __('Dashboard OASIS') }}</h3>
        </div>
    </div>
    </div>
    @php
        $pic = auth()->user()->picture ?? 'user-profile.jpg';
    @endphp
    <div class="bg-primary rounded-3">
        <div class="row mb-5 ">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="p-6 d-lg-flex justify-content-between align-items-center ">
                    <div class="d-md-flex align-items-center">
                        <img src="{{ asset("storage/$pic") }}" alt="Image" class="rounded-circle avatar avatar-xl">
                        <div class="ms-md-4 mt-3 mt-md-0 lh-1">
                            <h3 class="text-white mb-0">Bienvenue {{ __('Administrateur') }} {{ auth()->user()->name }}
                            </h3>
                            <small class="text-white"></small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lift">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h4 class="mb-0">Emplois</h4>
                        </div>
                        <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-briefcase">
                                <rect x="2" y="7" width="20" height="14" rx="2"
                                    ry="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>
                        </div>
                    </div>
                    <!-- project number -->
                    <div class="lh-1">
                        <h1 class=" mb-1 fw-bold">{{ $emplois->count() }}</h1>
                        <p class="mb-0">
                            <span class="text-dark me-2">{{ $recruteurs->count() }}</span>Structure(s) -
                            <span class="text-dark me-2">{{ $emploiNonVisibles->count() }}</span>En attente
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lift">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                    mb-3">
                        <div>
                            <h4 class="mb-0">Formations</h4>
                        </div>
                        <div class="icon-shape icon-md bg-primary-soft text-primary
                      rounded-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-list">
                                <line x1="8" y1="6" x2="21" y2="6"></line>
                                <line x1="8" y1="12" x2="21" y2="12"></line>
                                <line x1="8" y1="18" x2="21" y2="18"></line>
                                <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                <line x1="3" y1="18" x2="3.01" y2="18"></line>
                            </svg>
                        </div>
                    </div>
                    <!-- project number -->
                    <div class="lh-1">
                        <h1 class="  mb-1 fw-bold">132</h1>
                        <p class="mb-0"><span class="text-dark me-2">28</span>Completed</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lift">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                    mb-3">
                        <div>
                            <h4 class="mb-0">CV-Thèque</h4>
                        </div>
                        <div class="icon-shape icon-md bg-primary-soft text-primary
                      rounded-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-users">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                    </div>
                    <!-- project number -->
                    <div class="lh-1">
                        <h1 class="  mb-1 fw-bold">{{ $cvs }}</h1>
                        <p class="mb-0">
                            <span class="text-dark me-2">{{ $cvNonVisibles }}</span>En attente
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lift">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                    mb-3">
                        <div>
                            <h4 class="mb-0">Demandes d'Emplois</h4>
                        </div>
                        <div class="icon-shape icon-md bg-primary-soft text-primary
                      rounded-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-target">
                                <circle cx="12" cy="12" r="10"></circle>
                                <circle cx="12" cy="12" r="6"></circle>
                                <circle cx="12" cy="12" r="2"></circle>
                            </svg>
                        </div>
                    </div>
                    <!-- project number -->
                    <div class="lh-1">
                        <h1 class="  mb-1 fw-bold">76%</h1>
                        <p class="mb-0"><span class="text-success me-2">5%</span>Completed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin.layout>
