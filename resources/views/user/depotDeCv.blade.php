<x-user.layout :title="$page->title" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a422e5886743.37976823/Image collée.png'">
    <x-slot name="headerText">
        <div class="accueil-title mb-4">OASIS Consulting</div>
            <p> sit amet consectetur adipisicing elit Numquam magnam eveniet repellendus . optio corporis vel id eaque
                nesciunt voluptatum, aperiam deleniti non tempora necessitatibus tempore </p>
        
    </x-slot>

    <div class="presentation container text-center mt-4 mb-4">
        <img src="oasis/accueil/logo Oasis Consulting 1 (1).png" alt="" class="col-4">
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam quam, et modi eos laudantium doloribus, possimus cumque officia ut nobis exercitationem corrupti. Impedit, tenetur. Expedita distinctio placeat alias architecto! Quae.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid reprehenderit ipsam beatae nemo quas eius cum officiis omnis, nisi ipsum. Eligendi blanditiis aliquam sapiente velit. Magni nemo ab nihil facere?
        </p>
    </div>

</x-user.layout>