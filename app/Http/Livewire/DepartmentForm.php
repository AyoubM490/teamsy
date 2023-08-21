<?php

namespace App\Http\Livewire;

use App\Models\Department;
use Livewire\Component;

class DepartmentForm extends Component
{
    public $name = 'Accounting';
    public $success = false;

    public function submit()
    {
        Department::create(['name' => $this->name]);
        $this->success = true;
    }

    public function mount($departmentId = null)
    {
        if ($departmentId) {
            $this->name = Department::findorfail($departmentId)->name;
        }
    }

    public function render()
    {
        return view('livewire.department-form');
    }
}
