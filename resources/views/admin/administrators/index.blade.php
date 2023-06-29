<x-admin.layout title="Administrateurs">
    @php
        $badges = ['success', 'warning', 'danger', 'info', 'secondary', 'primary'];
    @endphp
    <x-admin.header title="Administration OASIS: Les Administrateurs" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

    <!-- Or for RTL support -->

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />



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
                            @can('manage admins')
                                <button type="button"
                                    class="btn btn-primary ms-3 @cannot('manage admins') disabled @endcannot "
                                    data-bs-toggle="modal" data-bs-target="#partenaireModalCenter">
                                    + Ajouter un Administrateur
                                </button>
                            @endcan
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
                                        <th class="ps-1">Nom</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Role</th>
                                        <th>Permission</th>
                                        <th>Github</th>
                                        <th>Linkedin</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($admins as $admin)
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
                                                $pic = $admin->picture ?? 'user-profile.jpg';
                                            @endphp
                                            <td class="ps-0">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset("storage/$pic") }}" alt=""
                                                        class="img-4by3-sm img-fluid  rounded-3">
                                                    <div class="ms-3">
                                                        <h5 class="mb-0">
                                                            <a href="#!"
                                                                class="text-inherit">{{ $admin->name }}</a>
                                                        </h5>
                                                        <p class="mb-0 text-muted"> Username :
                                                            {{ $admin->username }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="@if ($admin->hasRole('Super Admin')) spoiler-text @endif">
                                                    {{ $admin->email }}

                                                </span>
                                            </td>
                                            <td>{{ $admin->tel ?? 'None' }}</td>
                                            <td>
                                                @forelse ($admin->getRoleNames() as $roleName)
                                                    <span
                                                        class="text-{{ $badges[random_int(0, 5)] }}">{{ $roleName }}</span>
                                                @empty
                                                    {{ $admin->hasRole('Super Admin') ? 'Super Admin' : 'None' }}
                                                @endforelse
                                            </td>
                                            <td>
                                                @forelse ($admin->getAllPermissions() as $permission)
                                                    <span
                                                        class="badge bg-{{ $badges[random_int(0, 5)] }}">{{ $permission->name ?? 'None' }}</span>
                                                @empty
                                                    {{ $admin->hasRole('Super Admin') ? 'Super Admin' : 'None' }}
                                                @endforelse
                                            </td>
                                            <td>
                                                {{ $admin->lien_github ?? 'N/A' }}
                                            </td>
                                            <td>
                                                {{ $admin->lien_linkedin ?? 'N/A' }}
                                            </td>
                                            @can('Super Admin')
                                            <td class="text-end">
                                                <div class="dropdown dropstart">
                                                    <a href="#!"
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <button type="button" data-bs-toggle="modal"
                                                            data-bs-target="#addRoles"
                                                            class="dropdown-item d-flex align-items-center">
                                                            <i class=" dropdown-item-icon"
                                                                data-feather="edit"></i>Ajouter Roles ou Permissions
                                                        </button>

                                                        <button type="button" data-bs-toggle="modal"
                                                            data-bs-target="#revokeRoleModalCenter"
                                                            class="dropdown-item d-flex align-items-center">
                                                            <i class=" dropdown-item-icon"
                                                                data-feather="edit"></i>Suprimer Roles ou Permissions
                                                        </button>
                                                        <div class="dropdown-divider"></div>
                                                        <button type="submit"
                                                            class="dropdown-item d-flex align-items-center">
                                                            <i class="dropdown-item-icon"
                                                                data-feather="trash"></i>Supprimer
                                                        </button>

                                                    </div>
                                                </div>
                                            </td>
                                            @endcan
                                            
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


    <style>
        .spoiler-text {
            color: transparent;
            text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        }
    </style>



    <div class="modal fade" id="partenaireModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">
                        Passer un Utilisateur lambda à un <strong>Administrateur</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <form action="{{ route('admin.administrateurs.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <x-admin.form.label name="Ajouter aux Administrateurs à partir de l'Email " />
                        <select name="users[]" class="form-select" id="multiple-select-field"
                            data-placeholder="Choose anything" multiple>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->email }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Passer Admin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="revokeRoleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">
                        Supprmier des Roles ou Permissions à l'utilisateur <strong>{{ $admin->email }}</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <form action="{{ route('admin.removeRoles', \Crypt::encrypt($admin->id)) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <x-admin.form.label name="Supprimer des Rôles " />
                        <select name="roles[]" class="form-select" id="multiple-select-field2"
                            data-placeholder="Choose anything" multiple>
                            @foreach ($admin->roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>

                        <x-admin.form.label name="Supprimer des Permissions " />
                            <select name="permissions[]" class="form-select" id="multiple-select-field4"
                                data-placeholder="Choose anything" multiple>
                                @foreach ($admin->getAllPermissions() as $permission)
                                    <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

        {{-- Add Roles Modal --}}
        <div class="modal fade" id="addRoles" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">
                            Ajouter des Roles ou Permissions à l'utilisateur <strong>{{ $admin->email }}</strong>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <form action="{{ route('admin.addRoles', \Crypt::encrypt($admin->id)) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <x-admin.form.label name="Ajouter des Rôles " />
                            <select name="roles[]" class="form-select" id="multiple-select-field3"
                                data-placeholder="Choose anything" multiple>
                                @foreach ($roles as $role)
                                @if ($admin->roles->contains($role))
                                    @continue
                                @endif
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>

                            <x-admin.form.label name="Ajouter des Permissions " />
                            <select name="permissions[]" class="form-select" id="multiple-select-field5"
                                data-placeholder="Choose anything" multiple>
                                @foreach ($permissions as $permission)
                                @if ($admin->permissions->contains($permission))
                                @continue
                                @endif

                                    <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script>
            $('#multiple-select-field').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                closeOnSelect: false,
            });

            $('#multiple-select-field2').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                closeOnSelect: false,
            });

            $('#multiple-select-field3').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                closeOnSelect: false,
            });

            $('#multiple-select-field4').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                closeOnSelect: false,
            });

            $('#multiple-select-field5').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                closeOnSelect: false,
            });
        </script>
</x-admin.layout>
