<?php

namespace App\Http\Livewire\Frontend\Pagination;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectPagination extends Component
{
    use WithPagination;

    public function render()
    {
        $data = Project::paginate(6);

        return view('livewire.frontend.pagination.project', compact('data'));
    }
}
