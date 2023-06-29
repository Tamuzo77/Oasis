<x-admin.layout title="CVThèque">
    <x-admin.header title="OASIS : La CV - Thèque" />

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Espace-Emploi</a></li>
            <li class="breadcrumb-item active" aria-current="page">CV-Thèque</li>
        </ol>
    </nav>

    <div class="row justify-content-md-between mb-5 mb-xl-0 ">
        <!-- col -->
        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
            <!-- search -->
            <div class="mb-2 mb-lg-4">
                <form method="GET">
                    <input type="search" name="search" value="{{ request('search') }}" id="search-input"
                        class="form-control" placeholder="Recherche sur la CV-Thèque">
                </form>

            </div>
        </div>
        <div class="col-xl-3 col-lg-2 col-md-6 col-12 ">


            <!-- Custom select -->
            <form method="get">
                <select name="visible" class="form-select" onchange="this.form.submit()">
                    <option value="">Filtre</option>
                    <option value={{ 1 }} {{ Request::get('visible') == 1 ? 'selected' : '' }}>Visible</option>
                    <option value={{ 'f' }} {{ Request::get('visible') == 'f' ? 'selected' : '' }}>Caché</option>

                </select>


            </form>
        </div>
    </div>
    <x-admin.flash />

    <!-- Horizontal -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse ($customers as $customer)
        <div class="col">
            <div class="card mb-3  ms-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset("storage/$customer->picture") }}" class="img-fluid rounded-start h-100"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ ucwords("$customer->firstname") . ' ' . ucwords("$customer->lastname") }} 
                                <span class=" ms-8 badge badge-dot bg-{{ $customer->visible ? 'success' : 'danger' }} me-1"></span>
                                <p class="mb-0 text-muted" >({{ $customer->email }})</p>

                            </h5>
                            <p class="card-text">{{$customer->biography}}</p>
                            <p class="card-text"><small class="text-muted">{{ $customer->created_at->diffForHumans() }}</small></p>
                            <form action="{{ route('admin.cv-theque.update', $customer->id ) }}" method="post">
                                @csrf
                                @method('PUT')
                            <button type="submit" class="btn btn-icon btn-white border border-2 rounded-circle btn-dashed ms-2">
                                <i class="bi bi-eye{{ $customer->visible ? '-slash': '' }}" ></i>
                           </button> 
                           <a href="{{ asset("storage/$customer->cv_path") }}" class="ms-15 card-link">Télécharger le CV</a>

                            </form>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        @empty
        <div class="empty-state">
            <h3>Aucun CV trouvé</h3>
            <p>Aucun CV n'est disponible pour le moment.</p>
        </div>
        @endforelse
    </div>

    <style>
        .empty-state {
            text-align: center;
            padding: 20px;
            background-color: #f7f7f7;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
    
        .empty-state h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }
    
        .empty-state p {
            font-size: 16px;
            color: #888;
        }
    </style>

</x-admin.layout>
