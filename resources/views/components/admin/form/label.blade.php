@props(['name', 'important'])
<label class="form-label">{{ ucwords($name) }}
    @if ($important ?? false)
        <span class="text-danger">*</span>
    @endif
</label>
