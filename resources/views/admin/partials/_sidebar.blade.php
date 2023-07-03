<x-admin.sidebar>

    <x-admin.sidebar-item class="{{ request()->is('admin/dashboard') ? 'active': '' }}" title="Tableau de Bord" href="{{ route('admin.dashboard') }}" icon="home" />



    <x-admin.sidebar-item title="Actualités" icon="grid" separator="Application" :toggle="true" data-bs-toggle="collapse">
        <x-admin.sidebar-item class="{{ request()->is('admin/actualites-grid')  ?   'active' : '' }}" title="Toutes Les Actualités" icon="book-open" href="{{ route('admin.actualites-grid') }}" />
        <x-admin.sidebar-item class="{{ request()->is('admin/actualites/create')  ?   'active' : '' }}" title="Créer une Actualité" icon="plus-square" href="{{ route('admin.actualites.create') }}" />
    </x-admin.sidebar-item>

    <x-admin.sidebar-item title="Services & Partenaires" icon="pocket" href="{{ route('admin.partenaires&services') }}" />

    <x-admin.sidebar-item title="Espace-Emplois" icon="briefcase"  :toggle="true" data-bs-toggle="collapse">
        <x-admin.sidebar-item title="Les Emplois" href="{{ route('admin.emplois') }}" />
        <x-admin.sidebar-item icon="user-check" title="Les Recruteurs" href="{{ route('admin.recruteurs.index') }}" />
        <x-admin.sidebar-item icon="user-check" href="{{ route('admin.cv-theque.index') }}" title="CV - Thèque" />
        <x-admin.sidebar-item icon="aperture" title="Les Demandes d'emplois" />

    </x-admin.sidebar-item>

    <x-admin.sidebar-item title="Formations"  :toggle="true" data-bs-toggle="collapse">
        <x-admin.sidebar-item title="Toutes les Formations " href="{{ route('admin.formations.index') }}" />
        <x-admin.sidebar-item title="Ajouter des Formations " href="{{ route('admin.formations.create') }}" />
    </x-admin.sidebar-item>
    <x-admin.sidebar-item title="Toutes Les Pages" href="{{ route('admin.pages-all') }}" separator="Pages"  />

@foreach (\App\Models\Page::where('href', '!=', null)->get() as $page )
    <x-admin.sidebar-item :title="$page->title" href="/admin/pages{{ $page->href }}" />

@endforeach
    {{--<x-admin.sidebar-item title="Accueil"  />
    <x-admin.sidebar-item title="Qui Sommes Nous ?"   />
    <x-admin.sidebar-item title="Réseau RAC"   />
    <x-admin.sidebar-item title="Espace Emplois" />
    <x-admin.sidebar-item title="Formation" />
    <x-admin.sidebar-item title="Boutique" />--}}



    <x-admin.sidebar-item title="Site"  separator="Base de Données"  :toggle="true" data-bs-toggle="collapse">
        <x-admin.sidebar-item class="{{ request()->is('admin/actualites/categories') ? 'active' : '' }}" title="Categories d'Actualités " href="{{ route('admin.categories-news') }}" />
        <x-admin.sidebar-item title="Catégories de Formations " href="{{ route('admin.categoriesForms.index') }}" />
    </x-admin.sidebar-item>

    <x-admin.sidebar-item title="Banque d'Images" icon="image" class="{{ request()->is('admin/library') ? 'active' : '' }}" href="{{ route('admin.library') }}" />

    <x-admin.sidebar-item title="Administration" icon="" :toggle="true" data-bs-toggle="collapse" >
        <x-admin.sidebar-item title="Les Administrateurs" href="{{ route('admin.administrateurs.index') }}" />
        @can('manage admins')
            
        <x-admin.sidebar-item title="Rôles" href="{{ route('admin.roles.index') }}" />
        <x-admin.sidebar-item title="Permissions" href="{{ route('admin.permissions.index') }}" />
        @endcan
    </x-admin.sidebar-item>
    <br><br><br>
</x-admin.sidebar>