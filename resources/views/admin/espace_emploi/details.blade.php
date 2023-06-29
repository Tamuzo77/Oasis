<x-admin.layout title="Details">
    <x-admin.header title=" Détails sur l'Emploi " />

    <div>
        <div class="row">
            <div class="col-xxl-8 col-12">
                <div>
                    <!-- stepper -->
                    <div id="stepperForm" class="bs-stepper">
                        <!-- Stepper Button -->
                        <div class="bs-stepper-header p-0 bg-transparent mb-4" role="tablist">
                            <div class="step" data-target="#test-l-1">
                                <button type="button" class="step-trigger" role="tab" id="stepperFormtrigger1"
                                    aria-controls="test-l-1">
                                    <span class="bs-stepper-circle me-2"><i data-feather="briefcase"
                                            class="icon-xs"></i></span>
                                    <span class="bs-stepper-label">Emploi Infos</span>
                                </button>
                            </div>
                            <div class="bs-stepper-line"></div>
                            <!-- Stepper Button -->
                            <div class="step" data-target="#test-l-2">
                                <button type="button" class="step-trigger" role="tab" id="stepperFormtrigger2"
                                    aria-controls="test-l-2">
                                    <span class="bs-stepper-circle me-2"><i data-feather="users"
                                            class="icon-xs"></i></span>
                                    <span class="bs-stepper-label">Candidats</span>
                                </button>
                            </div>
                            <div class="bs-stepper-line"></div>
                            <!-- Stepper Button -->
                            <div class="step" data-target="#test-l-3">
                                <button type="button" class="step-trigger" role="tab" id="stepperFormtrigger3"
                                    aria-controls="test-l-3">
                                    <span class="bs-stepper-circle me-2"><i data-feather="credit-card"
                                            class="icon-xs"></i></span>
                                    <span class="bs-stepper-label">Voir + </span>
                                </button>
                            </div>

                        </div>
                        <!-- card -->
                        <div class="card">

                            <div class="card-body">
                                <!-- Stepper content -->
                                <div class="bs-stepper-content">
                                        <!-- Content one -->
                                        <div id="test-l-1" role="tabpanel" class="bs-stepper-pane fade"
                                            aria-labelledby="stepperFormtrigger1">
                                            <!-- heading -->
                                            <div class="mb-5">
                                                <h3 class="mb-1">Emploi Information</h3>
                                                <p class="mb-0">Est requis une lecture attentive des informations envoyées avant de valider la visibilité d'un emploi
                                                </p>
                                            </div>
                                            <!-- row -->
                                            <div class="py-3 ">
                                                <table class="table table-striped">
                                                  <tbody>
                                                    <tr>
            
                                                      <th class="w-20">Libellé</th>
                                                      <td>{{ $emploi->libelle }}</td>
            
                                                    </tr>
                                                    <tr>
            
                                                      <th class="w-20">Description</th>
                                                      <td>{{ $emploi->description }}</td>
            
                                                    </tr>
                                                    <tr>
            
                                                        <th class="w-20">Auteur</th>
                                                        <td>{{ $emploi->author }}</td>
              
                                                      </tr>
                                                    <tr>
            
                                                      <th class="w-20">{{ __('Ville') }}</th>
                                                      <td>{{ $emploi->ville->name }} </td>
            
                                                    </tr>
                                                    <tr>
            
                                                      <th class="w-20">{{ __('Date de création') }}</th>
                                                      <td>{{ $emploi->created_at }} </td>
            
                                                    </tr>
                                                    <tr>
            
                                                      <th class="w-20">{{ __('Visible') }}</th>
                                                      <td>{{ $emploi->visible ? 'OUI' : 'NON' }} </td>
            
                                                    </tr>
            
                                                  </tbody>
                                                </table>
            
            
                                              </div>

                                            <!-- Button -->
                                            <div class="d-flex justify-content-between">
                                                <a href="{{ url('admin/emplois') }}" class="btn btn-dark">
                                                    {{ 'Retour' }}
                                                </a>
                                                <form
                                                    action="{{ route('admin.emploi-visible', \Illuminate\Support\Facades\Crypt::encrypt($emploi->slug)) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit"
                                                        class="btn btn-primary">

                                                        {{ $emploi->visible ? 'Désactiver la visibilité' : 'Activer la visibilité' }}
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Content two -->
                                        <div id="test-l-2" role="tabpanel" class="bs-stepper-pane fade"
                                            aria-labelledby="stepperFormtrigger2">
                                            <!-- text -->
                                            <div class="mb-5">
                                                <h3 class="mb-1">{{ ucwords($emploi->libelle) }} : Les Candidats</h3>
                                                <p class="mb-0">Toutes les demandes d'emploi envoyée pour le poste </p>
                                            </div>
                                            <!-- row -->
                                            <div class="row">
                                                <div class="col-lg-6 col-12 mb-4">
                                                    <!-- input -->
                                                    <div class="border p-4 rounded-3 d-md-flex">
                                                        <div class="d-flex justify-content-between align-items-center w-100 mb-2">
                                                                <div class="d-flex align-items-start">
                                                                    <!-- img -->
                                                                    <img src="../assets/images/svg/payment-logo-fedex.svg"
                                                                        alt="Image">
                                                                    <!-- text -->
                                                                    <div class="ms-2 ">
                                                                        <h5 class="mb-1"> FedEx Next Day Delivery
                                                                        </h5>
                                                                        <p class="mb-0 fs-6">No Delivery on Public
                                                                            Holidays</p>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <div class="d-flex justify-content-between">
                                                <a href="{{ url('admin/emplois') }}" class="btn btn-dark">
                                                    {{ 'Retour' }}
                                                </a>
                                                <form
                                                    action="{{ route('admin.emploi-visible', \Illuminate\Support\Facades\Crypt::encrypt($emploi->slug)) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit"
                                                        class="btn btn-primary">

                                                        {{ $emploi->visible ? 'Désactiver la visibilité' : 'Activer la visibilité' }}
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Content three -->
                                        <div id="test-l-3" role="tabpanel" class="bs-stepper-pane fade"
                                            aria-labelledby="stepperFormtrigger3">
                                            <!-- Card -->
                                            <div class="mb-5">
                                                <h3 class="mb-1">Autres Emplois de la structure</h3>
                                                <p class="mb-0">...
                                                </p>
                                            </div>
                                            <!-- Card -->
                                            @php
                                                $structure = $emploi->recruteur;
                                            @endphp
                                            @forelse ($structure->emplois as $emp )
                                            @if ($emp->id == $emploi->id)
                                                @continue
                                            @endif
                                            <div class="card card-bordered shadow-none mb-2">
                                                <!-- card body -->
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="form-check">
                                                            <!-- checkbox -->
                                                            <input disabled class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="paypal">
                                                            <label class="form-check-label ms-2" for="paypal">

                                                            </label>
                                                        </div>
                                                        <div>
                                                            <a href="{{ route('admin.emploi-details', \Illuminate\Support\Facades\Crypt::encrypt($emp->slug)) }}">
                                                                <h5 class="mb-1">{{$emp->libelle}}</h5>
                                                            </a>
                                                            <p class="mb-0 fs-6">{{$emp->description}}</p>
                                                        </div>

                                                    </div>
                                                    <span class=" ms-7 badge badge-{{ $emp->visible ? 'success' : 'danger' }}-soft">{{ $emp->visible ? 'Visible' : 'Caché' }}</span>

                                                </div>
                                            </div>
                                            @empty
                                            <div class="empty-state">
                                                <h3>Aucun autre emploi trouvé</h3>
                                                <p>Aucun autre emploi n'est disponible pour le moment.</p>
                                            </div>
                                            @endforelse
                                            
                                            <!-- card -->
                                            
                                            <!-- Button -->
                                            <div class="d-flex justify-content-between">
                                                <a href="{{ url('admin/emplois') }}" class="btn btn-dark">
                                                    {{ 'Retour' }}
                                                </a>
                                                <form
                                                    action="{{ route('admin.emploi-visible', \Illuminate\Support\Facades\Crypt::encrypt($emploi->slug)) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit"
                                                        class="btn btn-primary">

                                                        {{ $emploi->visible ? 'Désactiver la visibilité' : 'Activer la visibilité' }}
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


            {{-- Informations sur la Structure --}}
            <div class="col-xxl-4 col-12">
                <div class="card mt-5 mt-xxl-0">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Informations sur la Structure</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-md-flex">
                            <div>
                                @php
                                    $pic = $emploi->recruteur->logo;
                                @endphp
                                <img src="{{ asset("storage/$pic") }}" alt="Image"
                                    class="img-4by3-md rounded">
                            </div>
                            <div class="ms-md-4 mt-2">
                                <h4 class="mb-1 ">
                                    <a href="#!" class="text-inherit">
                                        {{ $emploi->recruteur->name }}
                                    </a>
                                </h4>
                                <h5>{{ $emploi->recruteur->email }}</h5>
                            </div>

                        </div>
                        <hr class="my-3">
                    </div>
                    <div class="card-body border-top pt-2">
                        <ul class="list-group list-group-flush mb-0 ">
                            <li class="d-flex justify-content-between list-group-item px-0">
                                <span>{{ __('IFU') }}</span>
                                <span class="text-dark ">{{ $emploi->recruteur->ifu }}</span>
                            </li>
                            <li class="d-flex justify-content-between list-group-item px-0 pb-0">
                                <span>{{ __('Téléphone (+229)') }}</span>
                                <span class="text-dark ">{{ $emploi->recruteur->tel }}</span>
                            </li>
                            <li class="d-flex justify-content-between list-group-item px-0">
                                <span>  
                                    {{ __('Facebook') }}
                                    <i class="bi bi-facebook"></i>
                                </span>
                                <span class="text-dark ">{{ $emploi->recruteur->lien_facebook ?? "N/A" }}</span>
                            </li>
                            <li class="d-flex justify-content-between list-group-item px-0">
                                <span>
                                    {{ __('Github') }}
                                    <i class="bi bi-github"></i>
                                </span>
                                <span class="text-dark ">{{ $emploi->recruteur->lien_github ?? "N/A" }}</span>
                            </li>
                            <li class="d-flex justify-content-between list-group-item px-0 pb-0">
                                <span>
                                    {{ __('Linkedin') }}
                                    <i class="bi bi-linkedin"></i>
                                </span>
                                <span class="text-dark ">{{ $emploi->recruteur->lien_linkedin ?? "N/A" }}</span>
                            </li>


                        </ul>
                    </div>

                </div>

            </div>

        </div>
    </div>
</x-admin.layout>
