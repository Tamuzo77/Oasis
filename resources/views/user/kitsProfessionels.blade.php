<x-user.layout :title="$page->title" :imageAccueil="$page->imageModels[0]->image_url ?? 'img64a422e5886743.37976823/Image collée.png'">
    <x-slot name="headerText">
        <p> {{ $page->header ?? '' }}</p>
    </x-slot>

    <h2 class="text-center mt-5">Kits</h2>
    <div class="row justify-content-center mx-sm-0 mx-1 px-0 kits">
        @forelse (\App\Models\Product::where('is_available', true)->where('product_type_id',1)->get() as $kit)
            <div class="row col-md-3 col-lg-2 col-sm-5 col-7 align-items-center shadow mx-2 px-0 mt-4 pb-2">
                <img class=" m-auto rounded-sm p-0 mt-0"
                    src="oasis/accueil/WhatsApp Image 2023-01-05 at 13.54.13 (1).jpeg" alt="">
                <div class="mt-1 mx-1">
                    <h4>{{ $kit->title }}</h4>
                    <p>{{ $kit->description }}</p>
                    <span>{{ $kit->price }} FCFA</span>
                </div>
                <kkiapay-widget amount="{{ $kit->price }}" key="{{ env('KIKYAPAY_KEY') }}"
                    url="{{ asset('oasis/accueil/logo Oasis Consulting 1.png') }}" position="center" sandbox="true"
                    data="" callback="{{ route('home') }}">
                </kkiapay-widget>
            </div>
        @empty
            <x-partials.vide />
        @endforelse


    </div>
</x-user.layout>
