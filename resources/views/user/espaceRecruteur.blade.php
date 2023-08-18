<x-user.layout :title="$page->title" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a422e5886743.37976823/Image collée.png'">
    <x-slot name="headerText">
        <div class="accueil-title mb-4">OASIS Consulting</div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem a distinctio repellat odit dicta, harum quibusdam, ex sunt vitae deserunt officiis id illo asperiores pariatur sit sequi? Quidem, sit accusantium?</p>
            <a href="/depot-de-cv_oasis"><p class="inscrire col-5 text-center bouton">Envoyer mon cv</p></a>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum dolores illum, dolore iure beatae soluta repudiandae nam quia ullam. Dolorum nisi ab fugiat doloribus quasi officia harum incidunt voluptas corrupti!</p>
            <a href=""><p class="inscrire col-5 text-center bouton">Espace recruteur</p></a>


    </x-slot>

    <livewire:user.espace-recruteur />


</x-user.layout>
