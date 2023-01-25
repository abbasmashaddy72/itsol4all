<x-backend.modal-form form-action="add">
    <x-slot name="title">
        @if (!empty($this->service_id))
            Update
        @else
            Save
        @endif
    </x-slot>

    <x-slot name="content">
        <div class="grid gap-y-2">
            <x-input name="name" label="Name" type="text" wire:model='name' />

            <x-textarea name="excerpt" label="Excerpt" type="text" wire:model='excerpt' />

            <x-input name="icon" label="Icon From iconfy unicons" type="text" wire:model='icon' />

        </div>
    </x-slot>

    <x-slot name="buttons">
        <button class="btn btn-primary" type="submit">Save</button>
    </x-slot>
</x-backend.modal-form>
