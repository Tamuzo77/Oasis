<x-admin.layout title="Emploi Enregistrement">

    <x-admin.header title="Enregistrement d'un emploi" />

    <!-- Alpine v2 -->
<!-- Alpine v3 -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<div class="col-xl-9 col-md-12 col-12">
    <!-- card -->
    <div class="card mb-5">
        <!-- card body -->
        <div class="card-body">
            <form >
                @csrf
                <livewire:user-wizard user-id=""  />
            
            </form>
        </div>
    </div>
</div>
</x-admin.layout>