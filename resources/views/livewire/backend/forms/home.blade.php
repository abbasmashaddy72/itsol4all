<div>
    <form wire:submit.prevent="submit">
        <div class="grid grid-cols-1 gap-3 mt-5 md:grid-cols-2 lg:grid-cols-3">
            <x-input wire:model='tag_line' label="Tag Line" />
            <x-textarea wire:model='excerpt' label="Excerpt" />
            <input wire:model="home_image" name="home_image" type="file" rules="mimes:jpeg,png" />
            <x-input wire:model='wwd' label="What We Do?" />
            <x-textarea wire:model='wwd_excerpt' label="What We Do? Excerpt" />
            <x-input wire:model='video_title' label="Video Title" />
            <x-textarea wire:model='video_excerpt' label="Video Excerpt" />
            <x-input wire:model='video_url' label="Video Url Youtube's" />
        </div>
        <button class="mt-5 btn btn-primary" type="submit">Save</button>
    </form>
</div>
