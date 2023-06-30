<x-admin.layout title="Toutes les pages de l'application" >
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
            <button type="button" class="btn btn-primary btn-icon">
                +
              </button>
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
</x-admin.layout>