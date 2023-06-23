@php
    $isStepValid = $stepInstance->isValid();
    $isFailedStep = $stepInstance->validationFails;
    $stepIsGreaterOrEqualThan = $this->stepIsGreaterOrEqualThan($stepInstance->getOrder());

@endphp

<div class="col-md-4" wire:key="{{ $stepInstance->icon() }}">
    <div class="position-relative mb-2">
        @if(!$loop->first)
            <div class="position-absolute" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                <div class="bg-gray-200 rounded">
                    <div class="rounded py-0.5"
                        @class([
                            'bg-success' => $stepIsGreaterOrEqualThan && !$isFailedStep,
                            'bg-danger' => $isFailedStep,
                            'w-100' => $isFailedStep || $stepIsGreaterOrEqualThan,
                            'w-0' => !($isFailedStep || $stepIsGreaterOrEqualThan)
                        ])
                    ></div>
                </div>
            </div>
        @endif

        <div class="d-grid gap-1 place-items-center">
            <button
                class="btn btn-circle {{ $stepIsGreaterOrEqualThan && !$isFailedStep ? 'btn-success' : ($isFailedStep ? 'btn-danger' : '') }}"
                wire:click="setStep({{ $stepInstance->getOrder() }})"
            >
                <i class="{{ $stepInstance->icon() }}"></i>
            </button>
        </div>
    </div>
    <div class="text-center text-xs">
        {{ $stepInstance->title() }}
    </div>
</div>
