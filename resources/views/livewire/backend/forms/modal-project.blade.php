<x-backend.modal-form form-action="add">
    <x-slot name="title">
        @if (!empty($this->project_id))
            Update
        @else
            Save
        @endif
    </x-slot>

    <x-slot name="content">
        <div class="grid gap-y-2">
            <x-input name="title" label="Title" type="text" wire:model='title' />

            <x-textarea name="excerpt" label="Excerpt" type="text" wire:model='excerpt' />

            <input name="image" type="file" wire:model="image" rules="mimes:jpeg,png" />

        </div>
    </x-slot>

    <x-slot name="buttons">
        <button class="btn btn-primary" type="submit">Save</button>
    </x-slot>
</x-backend.modal-form>
