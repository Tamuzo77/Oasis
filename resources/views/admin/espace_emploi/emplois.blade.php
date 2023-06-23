<x-admin.layout title="Les Emplois">
    <x-admin.header title="Les Emplois "
    subtitle="Liste des différents emplois enrgistrer dans la plateforme"
     />
     <x-admin.flash />

     <div>
        <!-- row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-md-flex border-bottom-0">
                <div class="flex-grow-1">
                  <a href="{{ url('admin/create-emploi') }}" class="btn btn-primary">+ Ajouter Emplois</a>
                </div>
                <div class="mt-3 mt-md-0">
                  <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                    data-template="settingOne">
                    <i data-feather="settings" class="icon-xs"></i>
                    <div id="settingOne" class="d-none">
                      <span>Setting</span>
                    </div>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive table-card">
                  <table id="example" class="table text-nowrap table-centered mt-0" style="width: 100%">
                    <thead class="table-light">
                      <tr>
                        <th class="pe-0">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkAll">
                            <label class="form-check-label" for="checkAll">
                            </label>
                          </div>
                        </th>
                        <th class="ps-1">Poste | Emploi</th>
                        <th>Departement</th>
                        <th>Commune</th>
                        <th>Arrondissement</th>
                        <th>Ville</th>
                        <th>Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($emplois as $emploi )
                        <tr>
                            <td class="pe-0">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="contactCheckbox2">
                                <label class="form-check-label" for="contactCheckbox2">
                                </label>
                              </div>
                            </td>
                            @php
                                $pic = $emploi->recruteur->picture
                            @endphp
                            <td class="ps-0">
                              <div class="d-flex align-items-center">
                                <img src="{{ asset("storage/$pic") }}" alt=""
                                  class="img-4by3-sm img-fluid  rounded-3">
                                <div class="ms-3">
                                  <h5 class="mb-0">
                                    <a href="#!" class="text-inherit">{{$emploi->libelle }}</a>
                                  </h5>
                                    <p class="mb-0 text-muted"> Slug : {{ $emploi->slug }}</p>
                                </div>
                              </div>
                            </td>
                            <td>{{ $emploi->department->name }}</td>
                            <td>{{ $emploi->commune->name }}</td>
                            <td>{{ $emploi->arrondissement->name }}</td>
                            <td>{{ $emploi->ville->name }}</td>
                            <td>
                              <span class="badge badge-{{ $emploi->visible ? 'success' : 'danger' }}-soft">
                                {{ $emploi->visible ? 'Visible' : 'caché' }}
                              </span>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropstart">
                                    <a href="#!" class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-feather="more-vertical" class="icon-xs"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                      <form action="{{ route('admin.emploi-details',\Illuminate\Support\Facades\Crypt::encrypt($emploi->slug)) }}" method="get">
                                        @csrf
                                        <button type="submit" class="dropdown-item d-flex align-items-center">
                                          <i class=" dropdown-item-icon" data-feather="edit"></i>Details
                                        </button>
                                      </form>
                                      <div class="dropdown-divider"></div>
                                      <form action="{{ route('admin.emploi-visible',\Illuminate\Support\Facades\Crypt::encrypt($emploi->slug)) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="dropdown-item d-flex align-items-center">
                                          <i class="dropdown-item-icon" data-feather="eye"></i>
                                          {{ ($emploi->visible ) ? 'Désactiver la visibilité' : 'Activer la visibilité' }}
                                      </button>
                                      </form>
                                      <form action="{{ route('admin.emploi-delete', \Illuminate\Support\Facades\Crypt::encrypt($emploi->slug)) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item d-flex align-items-center">
                                          <i class="dropdown-item-icon" data-feather="trash"></i>Supprimer
                                        </button>
                                      </form>
                                      
            
            
                                  </div>
                                </div>
                            </td>
                          </tr>
                        @empty
                            
                        @endforelse
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</x-admin.layout>