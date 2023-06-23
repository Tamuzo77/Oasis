<div class="row">
    <div class="col-xl-9 col-md-12 col-12">
        <!-- card -->
        <div class="card mb-5">
            <!-- card body -->
            <div class="card-body">
                <form action="{{ route('admin.emplois-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-admin.header ptitle="Informations sur le Recruteur" />
                    <x-admin.form.field class="row g-3">
                        <div class="col-md-4">
                            <x-admin.form.input wire:model="user.name" id="name" name="user.name" label="nom"  :important="true"  />

                        </div>
                        <div class="col-md-4">
                            <x-admin.form.input wire:model="user.firstname" id="firstname" name="user.firstname" label="Prénom"  :important="true"  />
                            
                        </div>
                        <div class="col-md-4">
                            <x-admin.form.input wire:model="user.email" label="Email" name="user.email" type="mail"  :important="true"  />

                    
                        </div>
                        <div class="col-md-2">
                            <x-admin.form.input wire:model="user.tel" type="tel" id="tel" label="Téléphone" name="user.tel"  :important="true"  />

                        </div>
                        <div class="col-md-2">
                            <x-admin.form.input wire:model="user.age" type="number" id="age" label="Age" name="user.age"  :important="true"  />

                        </div>
                    
                        <div class="col-8">
                            <x-admin.form.input wire:model="user.picture" type="file" id="picture" name="user.picture" label="Votre Photo"  :important="true"  />
                        </div>
                        @if ($candidat)
                        <div class="col-12">
                            <x-admin.form.input wire:model="user.cv_path" type="file" id="cv" label="Votre CV" name="user.cv_path"  :important="true"  />
                        </div>
                        @endif
                        
                    </x-admin.form.field>

                    <div class=" col-md-12 col-12">
                        <!-- card -->
                        <div class="card mb-5">
                            <!-- card body -->
                            <div class="card-body">
                                <x-admin.header ptitle="Informations sur le poste ou l'emplois" />
                                <x-admin.form.field class="row g-3">
                                    <div class="col-md-4 mb-2">
                                        <select wire:model="dept" class="form-select" name="">
                                            <option  selected> _ _ _ </option>
                                            @foreach ($departments as $dpt)
                                                <option value="{{ $dpt->id }} ">{{ $dpt->name }}</option>
                                            @endforeach
                                        </select>
    
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <select wire:model="com" class="form-select" name="">
                                            <option selected>_ _ _</option>
                                            @forelse ($communes as $dpt)
                                                <option value="{{ $dpt->id }} ">{{ $dpt->name }}</option>
                                                @empty
                                            @endforelse
                                        </select>
    
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <select wire:model="arr" class="form-select" name="">
                                            <option selected>_ _ _</option>
                                            @forelse ($arrondissements as $dpt)
                                                <option value="{{ $dpt->id }} ">{{ $dpt->name }}</option>
                                                @empty
                                            @endforelse
                                        </select>
    
                                    </div>
                                </x-admin.form.field>
                                
                                <div class="responsive">
                                    <!-- table head -->
                                   <table class="table">
                                       <thead class="table-light">
                                       <tr>
                                           <th scope="col">#</th>
                                           <th scope="col">{{ __('Libelle') }}</th>
                                           <th scope="col">{{ __('Description') }}</th>
                                           <th scope="col">{{ __('Ville') }}</th>
                                           <th></th>
                                       </tr>
                                       </thead>
                                       <tbody>
                                        @foreach ($emplois as $index => $value)
                                        <tr>
                                            <th scope="row">{{ $increment }}</th>
                                            <td> 
                                                 <input wire:model="emplois.{{ $index }}.libelle" type="text" class="form-control 
                                                     @error('emplois.{{ $index }}.libelle') is-invalid @enderror" name="emplois[{{ $index }}][libelle]" id=""> 
                                            </td>
                                            <td> <textarea wire:model="emplois.{{ $index }}.description" class="form-control" name="emplois[{{ $index }}][description]" id="" cols="30" rows="5"></textarea></td>
                                            <td>
                                             <select wire:model="emplois.{{ $index }}.ville" class="form-select" name="emplois[{{ $index }}][ville_id]" id="">
                                                 <option selected>_ _ _</option>
                                                 @forelse ($villes as $dpt)
                                                     <option value="{{ $dpt->id }} ">{{ $dpt->name }}</option>
                                                     @empty
                                                     <option disabled>Aucune Ville trouvé</option>
                                                 @endforelse
                                             </select>
                                            </td>
                                            <td>
                                                <button @if ($increment == 1) disabled @endif type="button" wire:click="removeEmploi({{ $index }})" class="btn btn-danger-soft">Supprimer</button>
                                            </td>
                                        </tr>
                                        @php
                                            $increment ++;
                                        @endphp
                                        @endforeach
                                       
                                       </tbody>
                                   </table>
                                   <button type="button" class="btn btn-primary-soft" wire:click="addEmploi()">+Ajouter un emploi</button>

                               </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-12 mt-12">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a href="{{ url('admin/emplois') }}" class="btn btn-outline-primary ms-2">Retour</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>