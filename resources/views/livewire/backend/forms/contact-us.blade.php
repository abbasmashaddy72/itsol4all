<div>
    <form wire:submit.prevent="submit">
        <div class="grid grid-cols-1 gap-3 mt-5 md:grid-cols-2 lg:grid-cols-3">
            <x-input wire:model='phone' label="Phone" />
            <x-input wire:model='phone_excerpt' label="Phone Excerpt" />
            <x-input wire:model='email' label="Email" />
            <x-input wire:model='email_excerpt' label="Email Excerpt" />
            <x-input wire:model='location' label="Location" />
            <x-input wire:model='location_excerpt' label="Location Excerpt" />
            <x-input wire:model='maps_link' label="Maps Link" />
            <input wire:model="contact_image" name="contact_image" type="file" rules="mimes:jpeg,png" />
        </div>
        <p class="mt-5 font-bold text-md">Common on All Pages</p>
        <div class="grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3">
            <x-input wire:model='contact_title1' label="Title 1" />
            <x-input wire:model='contact_title2' label="Title 2" />
            <x-input wire:model='contact_excerpt' label="Excerpt" />
        </div>
        <button class="mt-5 btn btn-primary" type="submit">Save</button>
    </form>
</div>
