<x-admin.layout title="Toutes les pages de l'application">
    <x-admin.header title="OASIS : Les Pages" />
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Toutes les pages</li>
        </ol>
    </nav>

    <div class="row justify-content-md-between mb-5 mb-xl-0 ">
        <!-- col -->
        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
            <!-- search -->
            <div class="mb-2 mb-lg-4">
                <form method="GET">
                    <input type="search" name="search" value="{{ request('search') }}" id="search-input"
                        class="form-control" placeholder="">
                </form>

            </div>

        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-12 d-flex  justify-content-end ">
            <div>
                <button type="button" class="btn btn-primary btn-icon">
                    +
                </button>
            </div>

        </div>
        <div class="col-xl-3 col-lg-2 col-md-6 col-12 ">


            <!-- Custom select -->
            <form method="get">
                <select name="visible" class="form-select" onchange="this.form.submit()">
                    <option value="">Filtre</option>
                    <option value={{ 1 }} {{ Request::get('visible') == 1 ? 'selected' : '' }}>Visible
                    </option>
                    <option value={{ 'f' }} {{ Request::get('visible') == 'f' ? 'selected' : '' }}>Caché
                    </option>

                </select>


            </form>
        </div>
    </div>
    <x-admin.flash />
    <div class="row">
        @foreach ($pages as $page )
            <div class="col-xxl-6 col-12 mb-5">
              <div class="card h-100">
                <div class="card-body">
                  <small>{{ $page->parentPage?->title }}</small>
                  <div class="d-flex justify-content-between mt-3 mb-8">
                    <div>
                      <h3 class="mb-0">{{ $page->title }}</h3>
                      <small>{{ $page->href }}</small>
                    </div>
                    {{--<div class="text-end">
                      <h3 class="mb-0">
                        <span class="text-muted me-1">$</span>68,345.23
                      </h3>
                      <small>Available Funds</small>
                    </div>--}}
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="d-flex">
                      <div class="d-flex align-items-center">
                        <div class="icon-md icon-shape bg-primary-soft rounded-3 text-primary">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up icon-xs"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>
                        </div>
                        <div class="ms-2 lh-1">
                          <h4 class="mb-0">3,456.87</h4>
                          <small>Images et Vidéos</small>
                        </div>
                      </div>
                      {{--<div class="d-flex align-items-center ms-6">
                        <div class="icon-md icon-shape bg-danger-soft text-danger rounded-3">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down icon-xs"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                        </div>
                        <div class="ms-2 lh-1">
                          <h4 class="mb-0">1,538.23</h4>
                          <small>Expenses</small>
                        </div>
                      </div>--}}
                    </div>
                    <div class="d-none d-md-block">
                      <a href="/admin/pages{{ $page->href }}" class="btn btn-primary"> + Ajouter ou Modifier du contenu</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        @endforeach
            
          </div>


</x-admin.layout>
