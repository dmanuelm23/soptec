<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\BranchOffice;

class BranchOfficeComponent extends Component
{
    use WithPagination;
    
    public $branchOffice_id, $precinct, $name, $email, $ip, $active, $cellPhone, $telephone, $address, $location, $state;
    public $view = 'create';
    
    public function render()
    {
        return view('livewire.catalogs.branchoffices.branch-office-component',[
            'branchoffices' =>BranchOffice::orderBy('id', 'desc')->paginate(10)

        ]);
    }

    public function store()
    {
        $this->validate([
            'precinct' => 'required',
            'name' => 'required',
            'email' => 'email',
            'ip' => 'required',
            'address' => 'required',
            'location' => 'required',
            'state' => 'required',
        ]);

        $branchoffice= BranchOffice::create([
            'precinct' =>  $this->precinct,
            'name' =>  $this->name,
            'email' =>  $this->email,
            'ip' =>  $this->ip,
            'active' =>  $this->active,
            'cellPhone' =>  $this->cellPhone,
            'telephone' =>  $this->telephone,
            'address' =>  $this->address,
            'location' =>  $this->location,
            'state' =>  $this->state,
        ]);

        $this->edit($branchoffice->id);
    }

    public function edit($id)
    {
        $branchoffice = BranchOffice::find($id);
        $this->branchOffice_id = $branchoffice->id;
        $this->precinct =  $branchoffice->precinct;
        $this->name =  $branchoffice->name;
        $this->email =  $branchoffice->email;
        $this->ip =  $branchoffice->ip;
        $this->active =  $branchoffice->active;
        $this->cellPhone =  $branchoffice->cellPhone;
        $this->telephone =  $branchoffice->telephone;
        $this->address =  $branchoffice->address;
        $this->location =  $branchoffice->location;
        $this->state =  $branchoffice->state;
        $this->view ='edit';  
    }

    public function update()
    {
        $this->validate([
            'precinct' => 'required',
            'name' => 'required',
            'email' => 'email',
            'ip' => 'required',
            'address' => 'required',
            'location' => 'required',
            'state' => 'required',

        ]);

        $branchoffice = BranchOffice::find($this->branchOffice_id);
        
        $branchoffice->update([
            'precinct' =>  $this->precinct,
            'name' =>  $this->name,
            'email' =>  $this->email,
            'ip' =>  $this->ip,
            'active' =>  $this->active,
            'cellPhone' =>  $this->cellPhone,
            'telephone' =>  $this->telephone,
            'address' =>  $this->address,
            'location' =>  $this->location,
            'state' =>  $this->state,
        ]);

        $this->cancel();
    }

    public function cancel()
    {
        $this->precinct ="";
        $this->name="";
        $this->email="";
        $this->ip="";
        $this->active="";
        $this->cellPhone="";
        $this->telephone="";
        $this->address="";
        $this->location="";
        $this->state="";
        $this->view ='create';
    }

    public function destroy($id)
    {
        BranchOffice::destroy($id);
    }
}
