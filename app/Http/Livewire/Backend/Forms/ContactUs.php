<?php

namespace App\Http\Livewire\Backend\Forms;

use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class ContactUs extends Component
{
    use Actions, WithFileUploads;

    public $phone, $phone_excerpt, $email, $email_excerpt, $location, $location_excerpt, $maps_link, $contact_image, $contact_title1, $contact_title2, $contact_excerpt;

    public function mount()
    {
        $this->phone = get_static_option('phone');
        $this->phone_excerpt = get_static_option('phone_excerpt');
        $this->email = get_static_option('email');
        $this->email_excerpt = get_static_option('email_excerpt');
        $this->location = get_static_option('location');
        $this->location_excerpt = get_static_option('location_excerpt');
        $this->maps_link = get_static_option('maps_link');
        $this->contact_image = get_static_option('contact_image');
        $this->contact_title1 = get_static_option('contact_title1');
        $this->contact_title2 = get_static_option('contact_title2');
        $this->contact_excerpt = get_static_option('contact_excerpt');
    }

    protected $rules = [
        'phone' => '',
        'phone_excerpt' => '',
        'email' => '',
        'email_excerpt' => '',
        'location' => '',
        'location_excerpt' => '',
        'maps_link' => '',
        'contact_image' => '',
        'contact_title1' => '',
        'contact_title2' => '',
        'contact_excerpt' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        foreach ($validatedData as $key => $value) {
            if ($key == 'contact_image' && gettype($this->contact_image) != 'string') {
                $contact_image = $value->store($key, 'public');
                set_static_option($key, $contact_image);
            } else {
                unset($validatedData['contact_image']);
                set_static_option($key, $value);
            }
        }

        $this->notification()->success($title = 'Contact Us Updated Successfully!');
    }

    public function render()
    {
        return view('livewire.backend.forms.contact-us');
    }
}
