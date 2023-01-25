<x-app-layout>
    <x-slot name="breadcrumb">{{ Breadcrumbs::render('static.contactUs') }}</x-slot>

    <x-backend.form-grid>
        @livewire('backend.forms.contact-us')
    </x-backend.form-grid>
</x-app-layout>
