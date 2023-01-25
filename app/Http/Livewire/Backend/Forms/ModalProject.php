<?php

namespace App\Http\Livewire\Backend\Forms;

use App\Models\Project;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class ModalProject extends ModalComponent
{
    use Actions, WithFileUploads;
    // Set Data
    public $project_id;
    // Model Values
    public $title, $excerpt;
    // Custom Values
    public $image;

    public function mount()
    {
        if (!empty($this->project_id)) {
            $data = Project::findOrFail($this->project_id);
            $this->title = $data->title;
            $this->excerpt = $data->excerpt;
        }
    }

    protected $rules = [
        'title' => '',
        'excerpt' => '',
        'image' => ''
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function add()
    {
        $validatedData = $this->validate();
        unset($validatedData['image']);

        if (!empty($this->project_id)) {
            $project = Project::where('id', $this->project_id)->first();

            $project->addMediaFromDisk('livewire-tmp/' . $this->image->getFilename())->toMediaCollection();

            Project::where('id', $this->project_id)->update($validatedData);

            $this->notification()->success($title = 'Project Updated Successfully!');
        } else {
            $project = Project::create($validatedData);

            $project->addMediaFromDisk('livewire-tmp/' . $this->image->getFilename())->toMediaCollection();

            $this->notification()->success($title = 'Project Saved Successfully!');
        }

        $this->emit('refreshLivewireDatatable');

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.backend.forms.modal-project');
    }
}
