<x-admin.layout title="Roles">
    @php
    $badges = ['success', 'warning', 'danger', 'info', 'secondary', 'primary'];
@endphp
    <x-admin.header title="Administration OASIS: Les Rôles" />
    <!-- Styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<!-- Or for RTL support -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
<x-admin.flash />
    <div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-md-flex border-bottom-0">
                        <div class="flex-grow-1">
                            <button type="button" class="btn btn-primary ms-3" data-bs-toggle="modal"
                                data-bs-target="#partenaireModalCenter">
                                + Ajouter un Rôle
                            </button>
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
                                        <th>Titre</th>
                                        <th>Model</th>
                                        <th>Permissions</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td class="pe-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="contactCheckbox2">
                                                    <label class="form-check-label" for="contactCheckbox2">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>{{ $role->name }}</td>
                                            <td>{{ '' }}</td>
                                            <td>
                                                @forelse ($role->permissions as $permission )
                                                <span class="badge bg-{{ $badges[random_int(0, 5)] }}">{{ $permission->name }}</span>
                                                @empty
                                                    {{ 'None' }}
                                                @endforelse
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown dropstart">
                                                    <a href="#!"
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i> </a>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                            <button type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#roleModalEdit"
                                                                class="dropdown-item d-flex align-items-center">
                                                                <i class=" dropdown-item-icon" data-feather="edit"></i>
                                                                Assigner des Permissions
                                                            </button>

                                                        <div class="dropdown-divider"></div>
                                                        <form action="{{ route('admin.roles.destroy', $role->id) }}" method="post">
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
                                    @endforeach



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="modal fade" id="partenaireModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">
                        Ajouter un Role</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <form action="{{ route('admin.roles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <x-admin.form.input name="name" label="Titre" :important="true" placeholder="" />

                    </div>
                    <div class="modal-body">
                        <x-admin.form.label name="Attribuer des permissions (optionel)" />
                        <select name="permissions[]" class="form-select" id="multiple-select-field" data-placeholder="Choose anything" multiple>
                            @foreach ($permissions as $permission )
                                <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="modal fade" id="roleModalEdit" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">
                        Modifier un Role</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <form action="{{ route('admin.roles.update', $role->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                        <x-admin.form.input value="{{ $role->name }}" name="name" label="Titre" :important="true" placeholder="" />

                    </div>
                    <div class="modal-body">
                        <x-admin.form.label name="Attribuer des permissions (optionel)" />
                        <select name="permissions[]" class="form-select" id="multiple-select-field1" data-placeholder="Choose anything" multiple>
                            @foreach ($permissions as $permission )
                                <option value="{{ $permission->id }}" {{ $role->permissions->contains($permission->id) ? 'selected' : '' }}>{{ $permission->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $( '#multiple-select-field' ).select2( {
    theme: "bootstrap-5",
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    closeOnSelect: false,
} );

$( '#multiple-select-field1' ).select2( {
    theme: "bootstrap-5",
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    closeOnSelect: false,
} );
    </script>
</x-admin.layout>
