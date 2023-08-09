<x-user.layout title="contact" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a422e5886743.37976823/Image collée.png'">
    <x-slot name="headerText">
        <div class="accueil-title mb-4">OASIS Consulting</div>
            <p> {{$page->header ?? ''}} </p>

    </x-slot>

    <div class="mt-5 text-center">
        <h2 class="text-center">Contactez-nous</h2>
        <form action="">
            <div class="contact justify-content-center mx-5 row mt-4 text-primary mb-5">
                <input class="col-md-3 mx-2 col-sm-5 col-10" type="text" name="" id="" placeholder="Votre Nom">
                <input class="col-md-3 mx-2 col-sm-5 col-10" type="email" name="" id="" placeholder="Votre Email">
                <input class="col-md-3 mx-2 col-sm-5 col-10" type="tel" name="" id="" placeholder="Votre Téléphone">
                <textarea name="" id="" cols="30" rows="10" placeholder="Votre requête"></textarea>
            </div>
            <button type="submit" class="inscrire text-center">Envoyez</button>
        </form>
    </div>
</x-user.layout>
