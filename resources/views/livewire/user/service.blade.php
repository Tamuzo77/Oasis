<div class="mb-4 container">
    <div class="text-center mt-4">
        <h2>Consulter nos services</h2>
    </div>
    <div class="row justify-content-center mx-5">
        @foreach ($services as $service)
            <a href="/services" class="col-xl-3 col-lg-4 col-sm-6 col-12 mt-4">
                <img class="w-100" src="{{ asset("storage/$service->cover_image") }}" alt="">
            </a>
        @endforeach
    </div>
</div>
