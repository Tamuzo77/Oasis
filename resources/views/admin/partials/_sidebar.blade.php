<x-admin.sidebar>

    <x-admin.sidebar-item class="{{ request()->is('admin/dashboard') ? 'active': '' }}" title="Tableau de Bord" href="{{ route('admin.dashboard') }}" icon="home" />



    <x-admin.sidebar-item title="Actualités" icon="grid" separator="Site" :toggle="true" data-bs-toggle="collapse">
        <x-admin.sidebar-item class="{{ request()->is('admin/actualites-grid')  ?   'active' : '' }}" title="Toutes Les Actualités" icon="book-open" href="{{ route('admin.actualites-grid') }}" />
        <x-admin.sidebar-item class="{{ request()->is('admin/create-actus')  ?   'active' : '' }}" title="Créer une Actualité" icon="plus-square" href="{{ route('admin.actus-create') }}" />
    </x-admin.sidebar-item>

    <x-admin.sidebar-item title="Partenaires & Services" icon="pocket" href="{{ route('admin.partenaires&services') }}" />

    <x-admin.sidebar-item title="Espace-Emplois"  :toggle="true" data-bs-toggle="collapse">
        <x-admin.sidebar-item title="Les Emplois" href="{{ route('admin.emplois') }}" />
        <x-admin.sidebar-item title="Les Recruteurs" />
        <x-admin.sidebar-item title="Les Demandes d'emplois" />

    </x-admin.sidebar-item>

    <x-admin.sidebar-item title="Formations"  :toggle="true" data-bs-toggle="collapse">
        <x-admin.sidebar-item title="Nouvelle " href="" />
        <x-admin.sidebar-item title="Nouvelle " href="" />
    </x-admin.sidebar-item>



    <x-admin.sidebar-item title="Site"  separator="Base de Données"  :toggle="true" data-bs-toggle="collapse">
        <x-admin.sidebar-item class="{{ request()->is('admin/actualites/categories') ? 'active' : '' }}" title="Categories d'Actualités " href="{{ route('admin.categories-news') }}" />
        <x-admin.sidebar-item title="Nouvelle " href="" />
    </x-admin.sidebar-item>

    <x-admin.sidebar-item title="Banque d'Images" icon="image" class="{{ request()->is('admin/library') ? 'active' : '' }}" href="{{ route('admin.library') }}" />
    
</x-admin.sidebar>