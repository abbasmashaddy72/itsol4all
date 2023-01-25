<?php

namespace App\Http\Livewire\Backend\Forms;

use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class Home extends Component
{
    use Actions, WithFileUploads;

    public $tag_line, $excerpt, $home_image, $wwd, $wwd_excerpt, $video_title, $video_excerpt, $video_url;

    public function mount()
    {
        $this->tag_line = get_static_option('tag_line');
        $this->excerpt = get_static_option('excerpt');
        $this->home_image = get_static_option('home_image');
        $this->wwd = get_static_option('wwd');
        $this->wwd_excerpt = get_static_option('wwd_excerpt');
        $this->video_title = get_static_option('video_title');
        $this->video_excerpt = get_static_option('video_excerpt');
        $this->video_url = get_static_option('video_url');
    }

    protected $rules = [
        'tag_line' => '',
        'excerpt' => '',
        'home_image' => '',
        'wwd' => '',
        'wwd_excerpt' => '',
        'video_title' => '',
        'video_excerpt' => '',
        'video_url' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        foreach ($validatedData as $key => $value) {
            if ($key == 'home_image' && gettype($this->home_image) != 'string') {
                $home_image = $value->store($key, 'public');
                set_static_option($key, $home_image);
            } else {
                unset($validatedData['home_image']);
                set_static_option($key, $value);
            }
        }

        $this->notification()->success($title = 'Home Page Updated Successfully!');
    }

    public function render()
    {
        return view('livewire.backend.forms.home');
    }
}
