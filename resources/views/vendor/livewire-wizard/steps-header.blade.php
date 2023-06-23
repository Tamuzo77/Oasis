<div class="w-100 py-2">
    <div class="d-flex">
        @foreach($stepInstances as $stepInstance)
            @include('livewire-wizard::step-header')
        @endforeach
    </div>
</div>
