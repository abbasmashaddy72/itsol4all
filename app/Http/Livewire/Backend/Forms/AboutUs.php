<?php

namespace App\Http\Livewire\Backend\Forms;

use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class AboutUs extends Component
{
    use Actions, WithFileUploads;

    public $yoe, $wwa, $description, $opt, $opt_excerpt, $image1, $image2, $image3;

    public function mount()
    {
        $this->yoe = get_static_option('yoe');
        $this->wwa = get_static_option('wwa');
        $this->description = get_static_option('description');
        $this->opt = get_static_option('opt');
        $this->opt_excerpt = get_static_option('opt_excerpt');
        $this->image1 = get_static_option('image1');
        $this->image2 = get_static_option('image2');
        $this->image3 = get_static_option('image3');
    }

    protected $rules = [
        'yoe' => '',
        'wwa' => '',
        'description' => '',
        'opt' => '',
        'opt_excerpt' => '',
        'image1' => '',
        'image2' => '',
        'image3' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        foreach ($validatedData as $key => $value) {
            if ($key == 'image1' && gettype($this->image1) != 'string') {
                $image1 = $value->store($key, 'public');
                set_static_option($key, $image1);
            } elseif ($key == 'image2' && gettype($this->image2) != 'string') {
                $image2 = $value->store($key, 'public');
                set_static_option($key, $image2);
            } elseif ($key == 'image3' && gettype($this->image3) != 'string') {
                $image3 = $value->store($key, 'public');
                set_static_option($key, $image3);
            } else {
                unset($validatedData['image1']);
                unset($validatedData['image2']);
                unset($validatedData['image3']);
                set_static_option($key, $value);
            }
        }

        $this->notification()->success($title = 'About Us Updated Successfully!');
    }

    public function render()
    {
        return view('livewire.backend.forms.about-us');
    }
}
