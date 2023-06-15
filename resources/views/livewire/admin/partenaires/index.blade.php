@php
    $badges = ['success', 'warning', 'danger', 'info', 'secondary', 'primary'];
@endphp
<div class="py-6">
    <div class="row">
        <!-- Section Heading -->
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
                  <button type="button" class="btn btn-primary ms-3" data-bs-toggle="modal" data-bs-target="#partenaireModalCenter">
                     Ajouter un Partenaire
                  </button>
            </div>
          </div>

        </div>
        @foreach ($partenaires as $partenaire )
        <div class="col-xl-3 col-lg-6 col-12 mb-5">
            <!-- card -->
            <div class="card">
              <!-- card body -->
              <div class="card-body text-center py-10">
                <!-- icon -->
                <div class="icon-shape icon-xxl bg-{{ $badges[random_int(0,5)] }}-soft
                  rounded-circle
                  text-center mb-4">
                    @if (asset('storage/'.$partenaire->logo))
                    <img src="{{ asset('storage/'.$partenaire->logo) }}" class="img-fluid rounded-top h-auto w-auto" alt="" srcset="">
                        @else
                        <i class="text-primary  " data-feather="codepen"></i>

                    @endif
                </div>
                <!-- Title -->
                <h4 class="mb-1">{{ $partenaire->name }}</h4>
                <span> {{ $partenaire->updated_at }}</span>
  
              </div>
              <!-- Dropdown -->
              <div class="text-end px-5 pt-0 pb-5">
                <div class="dropdown dropstart">
                  <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" id="dropdownMenuOne"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-xs" data-feather="more-horizontal"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuOne">
                    <a class="dropdown-item d-flex align-items-center" onclick="hide()" href="#!"><i class="me-2
                        dropdown-item-icon " data-feather="eye-off"></i>Hide</a>
                    <a class="dropdown-item d-flex align-items-center" onclick="edit()" href="#"><i class="me-2
                        dropdown-item-icon " data-feather="edit-2"></i>Edit
                    </a>
                    <a class="dropdown-item d-flex align-items-center" onclick="copyPartLink()"  href="#!"><i class="me-2
                        dropdown-item-icon " data-feather="link"></i>Get Link</a>
                    <input type="hidden" id="partenaire-link" value="http://example.com/partenaire" />

                    <form
                      action="{{ route('admin.partenaire-delete', \Illuminate\Support\Facades\Crypt::encrypt($partenaire->id)) }}"
                      method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="dropdown-item d-flex align-items-center">
                          <i class="dropdown-item-icon" data-feather="trash"></i>Supprimer
                      </button>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        
        {{ $partenaires->links() }}
      </div>
</div>

<script>
    function copyPartLink() {
       var actusLink = document.getElementById('partenaire-link').value;

       var tempInput = document.createElement('input');
       tempInput.setAttribute('value', actusLink);
       document.body.appendChild(tempInput);
       tempInput.select();
       document.execCommand('copy');
       document.body.removeChild(tempInput);

       // Afficher une notification de succès avec SweetAlert
       Swal.fire({
           position: 'top-end',
           icon: 'success',
           title: 'Lien copié  !',
           showConfirmButton: false,
           timer: 1500
       })
   }

   function edit()
   {
    Swal.fire({
        icon: 'error',
        title:"Oops...",
        text:"Veuillez reprendre l'enregistrement",
        showConfirmButton:false,
        timer:2000
    })
   }

   function hide()
   {
    Swal.fire({
        icon: 'error',
        title:"Oops...",
        text:"Action Hide non effectuée",
        showConfirmButton:false,
        timer:2000
    })
   }
</script>



