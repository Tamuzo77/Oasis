<x-admin.layout title="La Boutique">
    <x-admin.header title="Boutiques OASIS : Les Kits & Livres "
        subtitle="Liste des différents kits & livres enrgistrés dans la plateforme" />
    <x-admin.flash />

    <div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-md-flex border-bottom-0">
                        <div class="flex-grow-1">
                            <a href="{{ route('admin.boutiques.create') }}" class="btn btn-primary">+ Ajouter</a>
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
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="checkAll">
                                                <label class="form-check-label" for="checkAll">
                                                </label>
                                            </div>
                                        </th>
                                        <th class="ps-1">Image | Titre</th>
                                        <th>Type</th>
                                        <th>Description</th>
                                        <th>Statut</th>
                                        <th>Montant</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $product)
                                        <tr>
                                            <td class="pe-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="contactCheckbox2">
                                                    <label class="form-check-label" for="contactCheckbox2">
                                                    </label>
                                                </div>
                                            </td>
                                            @php
                                                $pic = $product->main_image;
                                            @endphp
                                            <td class="ps-0">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset("storage/library/$pic") }}" alt=""
                                                        class="img-4by3-sm img-fluid  rounded-3">
                                                    <div class="ms-3">
                                                        <h5 class="mb-0">
                                                            <a href="#!"
                                                                class="text-inherit">{{ $product->title }}</a>
                                                        </h5>
                                                        <p class="mb-0 text-muted"> Creéation :
                                                            {{ $product->created_at->diffForHumans() }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $product->type->name }}</td>
                                            <td>{{ \Str::limit($product->description, 50, '...') }}</td>
                                            <td>
                                                <span
                                                    class="badge badge-{{ $product->is_available ? 'success' : 'danger' }}-soft">
                                                    {{ $product->is_available ? 'Disponible' : 'Indisponible' }}
                                                </span>
                                            </td>
                                            <td>{{ $product->price }} FCFA</td>

                                            <td class="text-end">
                                                <div class="dropdown dropstart">
                                                    <a href="#!"
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <form
                                                            action="{{ route('admin.boutiques.show', \Illuminate\Support\Facades\Crypt::encrypt($product->id)) }}"
                                                            method="get">
                                                            @csrf
                                                            <button type="submit"
                                                                class="dropdown-item d-flex align-items-center">
                                                                <i class=" dropdown-item-icon"
                                                                    data-feather="edit"></i>Details
                                                            </button>
                                                        </form>
                                                        <div class="dropdown-divider"></div>
                                                        <form
                                                            action="{{ route('admin.boutiques.update', \Illuminate\Support\Facades\Crypt::encrypt($product->id)) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit"
                                                                class="dropdown-item d-flex align-items-center">
                                                                <i class="dropdown-item-icon" data-feather="eye"></i>
                                                                {{ $product->is_available ? 'Est indisponible' : 'Est disponible' }}
                                                            </button>
                                                        </form>
                                                        <form
                                                            action="{{ route('admin.boutiques.destroy', \Illuminate\Support\Facades\Crypt::encrypt($product->id)) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="dropdown-item d-flex align-items-center">
                                                                <i class="dropdown-item-icon"
                                                                    data-feather="trash"></i>Supprimer
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
