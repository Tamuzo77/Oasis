<x-admin.sidebar>

    <x-admin.sidebar-item class="{{ request()->is('admin/dashboard') ? 'active': '' }}" title="Tableau de Bord" href="{{ route('admin.dashboard') }}" icon="home" />



    <x-admin.sidebar-item title="Actualités" icon="grid" separator="Application" :toggle="true" data-bs-toggle="collapse">
        <x-admin.sidebar-item class="{{ request()->is('admin/actualites-grid')  ?   'active' : '' }}" title="Toutes Les Actualités" icon="book-open" href="{{ route('admin.actualites-grid') }}" />
        <x-admin.sidebar-item class="{{ request()->is('admin/actualites/create')  ?   'active' : '' }}" title="Créer une Actualité" icon="plus-square" href="{{ route('admin.actualites.create') }}" />
    </x-admin.sidebar-item>

    <x-admin.sidebar-item title="Services & Partenaires" icon="pocket" href="{{ route('admin.partenaires&services') }}" />

    <x-admin.sidebar-item title="Espace-Emplois" icon="briefcase"  :toggle="true" data-bs-toggle="collapse">
        <x-admin.sidebar-item title="Les Emplois" href="{{ route('admin.emplois') }}" />
        <x-admin.sidebar-item icon="user-check" title="Les Recruteurs" />
        <x-admin.sidebar-item icon="aperture" title="Les Demandes d'emplois" />

    </x-admin.sidebar-item>

    <x-admin.sidebar-item title="Formations"  :toggle="true" data-bs-toggle="collapse">
        <x-admin.sidebar-item title="Nouvelle " href="" />
        <x-admin.sidebar-item title="Nouvelle " href="" />
    </x-admin.sidebar-item>

    <x-admin.sidebar-item title="Accueil" separator="Pages"  />
    <x-admin.sidebar-item title="Qui Sommes Nous ?"   />
    <x-admin.sidebar-item title="Réseau RAC"   />
    <x-admin.sidebar-item title="Espace Emplois" />
    <x-admin.sidebar-item title="Formation" />
    <x-admin.sidebar-item title="Boutique" />



    <x-admin.sidebar-item title="Site"  separator="Base de Données"  :toggle="true" data-bs-toggle="collapse">
        <x-admin.sidebar-item class="{{ request()->is('admin/actualites/categories') ? 'active' : '' }}" title="Categories d'Actualités " href="{{ route('admin.categories-news') }}" />
        <x-admin.sidebar-item title="Nouvelle " href="" />
    </x-admin.sidebar-item>

    <x-admin.sidebar-item title="Banque d'Images" icon="image" class="{{ request()->is('admin/library') ? 'active' : '' }}" href="{{ route('admin.library') }}" />
    
</x-admin.sidebar>