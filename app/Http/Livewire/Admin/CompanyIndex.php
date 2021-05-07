<?php

namespace App\Http\Livewire\Admin;

use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;

class CompanyIndex extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $companies = Company::all();
        return view('livewire.admin.company-index', compact('companies'));
    }
}
