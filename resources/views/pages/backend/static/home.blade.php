<x-app-layout>
    <x-slot name="breadcrumb">{{ Breadcrumbs::render('static.home') }}</x-slot>

    <x-backend.form-grid>
        @livewire('backend.forms.home')
    </x-backend.form-grid>
</x-app-layout>
