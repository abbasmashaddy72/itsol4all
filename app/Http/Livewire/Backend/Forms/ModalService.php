<?php

namespace App\Http\Livewire\Backend\Forms;

use App\Models\Service;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class ModalService extends ModalComponent
{
    use Actions;
    // Set Data
    public $service_id;
    // Model Values
    public $name, $excerpt, $icon;

    public function mount()
    {
        if (!empty($this->service_id)) {
            $data = Service::findOrFail($this->service_id);
            $this->name = $data->name;
            $this->excerpt = $data->excerpt;
            $this->icon = $data->icon;
        }
    }

    protected $rules = [
        'name' => '',
        'excerpt' => '',
        'icon' => ''
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function add()
    {
        $validatedData = $this->validate();

        if (!empty($this->service_id)) {
            $project = Service::where('id', $this->service_id)->first();

            Service::where('id', $this->service_id)->update($validatedData);

            $this->notification()->success($title = 'Project Updated Successfully!');
        } else {
            Service::create($validatedData);

            $this->notification()->success($title = 'Project Saved Successfully!');
        }

        $this->emit('refreshLivewireDatatable');

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.backend.forms.modal-service');
    }
}
