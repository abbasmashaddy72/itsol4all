<div>
    <form wire:submit.prevent="submit">
        <div class="grid grid-cols-1 gap-3 mt-5 md:grid-cols-2 lg:grid-cols-3">
            <x-input wire:model='yoe' label="Years of Experience" />
            <x-input wire:model='wwa' label="Who we are?" />
            <x-textarea wire:model='description' label="Description" />
            <x-input wire:model='opt' label="Our Professional Team" />
            <x-textarea wire:model='opt_excerpt' label="Our Professional Team Excerpt" />
            <input wire:model="image1" name="image1" type="file" rules="mimes:jpeg,png" />
            <input wire:model="image2" name="image2" type="file" rules="mimes:jpeg,png" />
            <input wire:model="image3" name="image3" type="file" rules="mimes:jpeg,png" />
        </div>
        <button class="mt-5 btn btn-primary" type="submit">Save</button>
    </form>
</div>
