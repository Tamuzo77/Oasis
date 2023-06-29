<div class="row">
    <div class="col-xl-9 col-md-12 col-12">
        <!-- card -->
        <div class="card mb-5">
            <!-- card body -->
            <div class="card-body">
                <form action="{{ route('admin.emplois-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-admin.header ptitle="Informations sur la Structure" />
                    <x-admin.form.field class="row g-3">
                        <div class="col-md-6">
                            <x-admin.form.input wire:model="structure.name" id="name" name="structure.name" label="nom de la structure"  :important="true"  />

                        </div>
                        <div class="col-md-6">
                            <x-admin.form.input wire:model="structure.email" label="Email" name="structure.email" type="mail"  :important="true"  />
                        </div>
                        <div class="col-md-2">
                            <x-admin.form.input wire:model="structure.tel" type="tel" id="tel" label="Téléphone" name="structure.tel"  :important="true"  />

                        </div>
                        <div class="col-md-2">
                            <x-admin.form.input wire:model="structure.ifu" type="number" id="ifu" label="numéro IFU" name="structure.ifu"  :important="true"  />

                        </div>
                    
                        <div class="col-8">
                            <x-admin.form.input wire:model="structure.logo" type="file" id="picture" name="structure.logo" label="Logo | Photo du Recruteur"  :important="true"  />
                        </div>
                        <div class="col-4">
                            <x-admin.form.input wire:model="structure.lien_facebook" type="url" id="facebook" label="Lien Facebook" name="structure.lien_facebook"/>
                        </div>
                        <div class="col-4">
                            <x-admin.form.input wire:model="structure.lien_github" type="url" id="github" label="Lien Github" name="structure.lien_github"/>
                        </div>
                        <div class="col-4">
                            <x-admin.form.input wire:model="structure.lien_linkedin" type="url" id="linkedin" label="Lien Linkedin" name="structure.lien_linkedin"/>
                        </div>
                        
                    </x-admin.form.field>

                    <div class=" col-md-12 col-12">
                        <!-- card -->
                        <div class="card mb-5">
                            <!-- card body -->
                            <div class="card-body">
                                <x-admin.header ptitle="Informations sur le(s) poste(s) ou l'emplois" />
                                <x-admin.form.field class="row g-3">

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