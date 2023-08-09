<div class="mb-4 container">
    <div class="text-center mt-4">
        <h2>Consultez nos services</h2>
    </div>
    <div class="row justify-content-center mx-5 services">
        @forelse ($services as $service)
            <a href="{{ $service->name == 'Formations' ? '/formations-certifiantes_oasis' : '/services' }}" class="col-lg-4 col-sm-6 col-12 mt-4">
                <img class="w-100" src="{{ asset("storage/$service->cover_image") }}" alt="">
            </a>
        @empty
            <x-partials.vide />

        @endforelse
    </div>
</div>
