<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WitchPagination;
use App\BrachOffice;


class BranchOfficeComponent extends Component
{
    public function render()
    {
        return view('livewire.catalogs.branchoffices.branch-office-component',[
            'branchoffices' =>BrachOffice::orderBy('id', 'desc')->paginate(5)

        ]);
    }
}
