<x-admin.form.field class="row g-3">
    <div class="col-md-4">
        <x-admin.form.input wire:model="state.name" id="name" name="name" required :important="true"  />
    </div>
    <div class="col-md-4">
        <x-admin.form.input wire:model="state.firstname" id="firstname" name="firstname" required :important="true"  />
    </div>
    <div class="col-md-4">
        <x-admin.form.input wire:model="state.email" name="email" type="mail" required :important="true"  />

    </div>
    <div class="col-md-2">
        <x-admin.form.input wire:model="state.tel" type="tel" id="tel" name="tel" required :important="true"  />
    </div>
    <div class="col-md-2">
        <x-admin.form.input wire:model="state.age" type="number" id="age" name="age" required :important="true"  />
    </div>

    <div class="col-8">
        <x-admin.form.input wire:model="state.picture" type="file" id="picture" name="votre photo" required :important="true"  />
    </div>
    <div class="col-12">
        <x-admin.form.input wire:model="state.cv_path" type="file" id="cv" name="votre CV" required :important="true"  />
    </div>
</x-admin.form.field>