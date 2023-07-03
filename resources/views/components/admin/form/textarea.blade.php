@props(['name', 'label', 'important'=>false])
<x-admin.form.field>
    <x-admin.form.label :name="$label ?? $name" :important="$important" />
    <textarea class="form-control" 
              name="{{ $name }}"
              id="{{ $name }}" 
              {{ $attributes(['rows'=>'5', 'required' ]) }}
              >{{  old($name) ?? $slot   }}</textarea>
</x-admin.form.field>
<x-admin.form.error :name="$name" />