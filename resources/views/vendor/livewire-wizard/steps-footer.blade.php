<div class="p-2 d-flex flex-row-reverse justify-content-between">
    @if($this->hasNextStep())
        <button class="btn btn-primary btn-lg" wire:click.prevent="goToNextStep" wire:loading.attr="disabled">
            <span wire:loading wire:target="goToNextStep" class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
            Next
        </button>
    @else
        <button  class="btn btn-primary btn-lg" type="submit"  wire:loading.attr="disabled">
            <span wire:loading wire:target="submit" class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
            Submit
        </button>
    @endif
    @if($this->hasPrevStep())
        <button class="btn btn-dark btn-lg" wire:click.prevent="goToPrevStep" wire:loading.attr="disabled">
            <span wire:loading wire:target="goToPrevStep" class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
            Back
        </button>
    @endif
</div>
