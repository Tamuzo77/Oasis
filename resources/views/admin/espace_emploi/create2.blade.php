<x-admin.layout title="Enregistrement d'un emplois">
    <x-admin.header title="Enregistrement d'Emplois" />
    <x-admin.flash />

    <livewire:emploi-form :user="auth()->user() ?? ''" :candidat="false" />
</x-admin.layout>