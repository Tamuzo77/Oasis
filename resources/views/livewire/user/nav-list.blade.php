<ul class="navbar-nav ms-sm-2">

    @foreach ($pages as $page )
        @if ($page->toggled == true)
        <x-user.nav-item :title="$page->title" :toggled="true" >
            @foreach ($page->children as $p )
            <x-user.nav-sub-link :title="$p->title" :href="$p->href" />

            @endforeach
        </x-user.nav-item>
        @else
        <x-user.nav-item :title="$page->title" :href="$page->href" />

        @endif
    @endforeach
    {{--<x-user.nav-item title="Accueil" href="/" />

    <x-user.nav-item title="Qui sommes-nous" href="" />

    <x-user.nav-item title="Réseau RAC" href="" />

    <x-user.nav-item title="Espace Emploi" :toggled="true" >
        <x-user.nav-sub-link title="CVThèque" href="" />
        <x-user.nav-sub-link title="Espace Recruteur" href="" />
        <x-user.nav-sub-link title="Dépôt" href="" />
    </x-user.nav-item>

    <x-user.nav-item title="Formation" :toggled="true" >
        <x-user.nav-sub-link title="Mes cours" href="" />
        <x-user.nav-sub-link title="Formations Certifiantes" href="" />
        <x-user.nav-sub-link title="Formations Gratuites" href="" />
    </x-user.nav-item>
    
    <x-user.nav-item title="Boutique" :toggled="true" >
        <x-user.nav-sub-link title="Kits Professionnels" href="" />
        <x-user.nav-sub-link title="Livres" href="" />
    </x-user.nav-item>--}}

</ul>