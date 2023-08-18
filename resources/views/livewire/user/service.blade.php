<div class="mb-4 container">
    <div class="text-center mt-4">
        <h2>Consultez nos services</h2>
    </div>
    <div class="row justify-content-center mx-5 services">
        @forelse ($services as $service)
            <a href="{{ $service->name == 'Formations' ? '/formations-certifiantes_oasis' : '/services' }}" class="col-lg-4 col-sm-6 col-12 mt-4" data-bs-toggle="modal" data-bs-target="#myModal2">
                <img class="w-100" src="{{ asset("storage/$service->cover_image") }}" alt="">
            </a>
            <div class="modal fade" id="myModal2">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Détails de l'offre</h4>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">

                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        @empty
            <x-partials.vide />

        @endforelse
    </div>
</div>


