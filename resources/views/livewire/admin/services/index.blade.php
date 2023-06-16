@php
    $badges = ['success', 'warning', 'danger', 'info', 'secondary', 'primary'];
@endphp
<div class="py-6">
  <div class="row">
    <div class="col-md-12 col-12 mb-4">
      <div class="d-flex justify-content-between
        align-items-center">
        <!-- Heading -->
        <div class="mb-3 mb-lg-0">
          <h3 class="mb-0">{{ __("$title") }}</h3>
        </div>
        <!-- icons -->
        <div class="d-flex align-items-center">
          <form method="get">
            <select name="status" class="form-select" onchange="this.form.submit()">
                <option value="">Filtre</option>
                <option value="actif" {{ Request::get('status') == 'actif' ? 'selected' : '' }}>Actif</option>
                <option value="inactif" {{ Request::get('status') == 'inactif' ? 'selected' : '' }}>Inactif</option>

            </select>


          </form>
          <a href="{{ route('admin.service-create') }}" class="btn btn-primary ms-3">Ajouter un Service</a>
        </div>
      </div>

    </div>
  
  
  
  </div>
  <div class="row">
    @if ($services->count() == 0)
        <div class="empty-state">
            <h3>Aucun service trouvé</h3>
            <p>Aucun service n'est disponible pour le moment.</p>
        </div>
    @endif

    
    @foreach ( $services as $serv )
    <div class="col-xxl-3 col-lg-6 mb-4">
        <div class="card">
            <div class="card-body text-center  ">
                <div class="my-4">
                    <div
                            class="icon-shape icon-xxl bg-{{ $badges[random_int(0, 5)] }}-soft
                  rounded-circle
                  text-center mb-4">
                            @if (asset('storage/' . $serv->cover_image))
                                <img src="{{ asset('storage/' . $serv->cover_image) }}"
                                    class="img-fluid rounded-top h-auto w-auto" alt="" srcset="">
                            @else
                                <i class="text-primary  " data-feather="codepen"></i>
                            @endif
                        </div>
                    <h4 class="mb-0">{{ $serv->name }}</h4>
                    <span>{{ $serv->excerpt }}</span>
                </div>

                <div class="mt-6 row ">
                    <div class="col">
                        <div>
                            <h3 class="mb-0 ">345</h3>
                            <span>Products</span>
                        </div>

                    </div>
                    <div class="vr g-0"></div>
                    <div class="col">
                        <div>
                            <h3 class="mb-0 ">$45,129</h3>
                            <span>Wallet Balance</span>
                        </div>

                    </div>

                </div>

            </div>
            <div class="card-footer text-end">
                <a href="{{ route('admin.service-show',\Illuminate\Support\Facades\Crypt::encrypt($serv->slug) ) }}" class="btn btn-primary-soft">View Details<i class="ms-1 icon-xs"
                        data-feather="arrow-right"></i></a>
            </div>

        </div>

    </div>
    @endforeach
  </div>
  {{ $services->links() }}
  </div>

</div>
<style>
    .empty-state {
    text-align: center;
    padding: 20px;
    background-color: #f7f7f7;
    border: 1px solid #ddd;
    border-radius: 4px;
    }

    .empty-state h3 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .empty-state p {
        font-size: 16px;
        color: #888;
    }

</style>



