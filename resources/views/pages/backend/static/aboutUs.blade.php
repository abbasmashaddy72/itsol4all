<x-app-layout>
    <x-slot name="breadcrumb">{{ Breadcrumbs::render('static.aboutUs') }}</x-slot>

    <x-backend.form-grid>
        @livewire('backend.forms.about-us')
    </x-backend.form-grid>
</x-app-layout>
