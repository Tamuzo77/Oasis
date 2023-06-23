<x-admin.form.field class="row g-3">
    
    <div class="col-md-6">
        <x-admin.form.input wire:model="state.slug" name="slug" required :important="true"  />
    </div>
    <div class="col-md-6">
        <x-admin.form.input wire:model="state.libelle" name="libelle" required :important="true" />
    </div>
    <x-admin.form.textarea wire:model="state.description" name="description" required :important="true" />
    
</x-admin.form.field>