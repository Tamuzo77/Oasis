<x-admin.form.field class="row g-3">
    <div class="mb-4 col-md-6 col-12">
        <label class="form-label">Departement
        </label>
        <select wire:model="selectedDept" wire:change="changedDepartment" class="form-select" name="dept">
            @foreach ($depts as $dept)
                <option value="{{ $dept->id }}">{{ ucwords($dept->name) }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-4 col-md-6 col-12">
        <label class="form-label">Commune
        </label>
        <select wire:model="selectedCom" class="form-select" name="com">
            @foreach ($communes as $com)
                <option value="{{ $com->id }}">{{ ucwords($com->name) }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-4 col-md-6 col-12">
        <label class="form-label">Arrondissement
        </label>
        <select wire:model="selectedArr" class="form-select" name="arr">
            @foreach ($arr as $ville)
                <option value="{{ $ville->id }}">{{ ucwords($ville->name) }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-4 col-md-6 col-12">
        <label class="form-label">Ville
        </label>
        <select wire:model="state.ville" class="form-select" name="ville">
            @foreach ($villes as $ville)
                <option value="{{ $ville->id }}">{{ ucwords($ville->name) }}
                </option>
            @endforeach
        </select>
    </div>
    
    <div class="col-md-6">
        <x-admin.form.input  name="ville" required :important="true" />
    </div>
   
</x-admin.form.field>