@props(['name', 'type'=>'text','important'=>false])
<x-admin.form.field>
    <x-admin.form.label :name="$name" :important="$important" />
    <input type="{{ $type }}" 
            name="{{ $name }}" 
            class="form-control 
            @error($name) is-invalid @enderror"
            {{ $attributes(['value' => old($name)?? '']) }}>
    <x-admin.form.error :name="$name" />

</x-admin.form.field>
