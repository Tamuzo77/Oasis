<x-user.layout :title="$page->title">
    <x-slot name="headerText">
        <div class="accueil-title mb-4">Lorem ipsum minus .</div>
            <a href=""><p class="inscrire col-5 text-center">Envoyer mon cv</p></a>
            <a href=""><p class="inscrire col-5 text-center">Espace recruteur</p></a>
            
        
    </x-slot>

    <livewire:user.espace-recruteur />
    

</x-user.layout>