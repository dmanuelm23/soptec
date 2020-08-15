<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\BranchOffice;

class BranchOfficeComponent extends Component
{
    use WithPagination;
    
    public $branchOffice_id, $precinct, $name, $email, $ip, $active, $cellPhone, $telephone, $address, $location, $state;
    public $search;
    public $action ='1';
    private $pagination = 5;
    public $view = 'create';

    public function mount()
    {

    }
    
    public function render()
    {
        if(strlen($this->search)>0){
            $branchoffices = BranchOffice::where('name', 'like' . '%' . $this->search. '%')->pagination($this->pagination);
            return view('livewire.catalogs.branchoffices.branch-office-component',[
                'branchoffices' => $branchoffices
            ]);

        }
        else{
            return view('livewire.catalogs.branchoffices.branch-office-component',[
                'branchoffices' =>BranchOffice::orderBy('id', 'desc')->pagination($this->pagination)
            ]);

        }

        
    }

    public function updatingSearch(): void
    {
        $this->gotoPage(1);

    }

    public function doAction($action)
    {
        $this->action =$action;

    }



    public function StoreOrUpdate()
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

        if($this->branchOffice_id>0){
            $existe = BranchOffice::where('precinct', $this->precinct)->where('id', '<>', $this->branchOffice_id)
            ->select('precinct')->get();
            if($existe->count()>0){
                session()->flash('msg-error', 'Ya existe ese reciento');
                $this->resetInput();
                return;
            }
        }
        else{
            $existe = BranchOffice::where('precinct', $this->precinct)->select('precinct')->get();
            if($existe->count()>0){
                session()->flash('msg-error', 'Ya existe ese reciento');
                $this->resetInput();
                return;
            }

        }

        if($this->branchOffice_id<=0)
        {
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
        else{
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

        }
        if($this->branchOffice_id)
            session()->flash('message', 'Tipo actualizado');
        else
            session()->flash('message', 'Tipo Creado');

        $this->resetInput();



    }

    public function edit($id)
    {
        $branchoffice = BranchOffice::findOrFail($id);
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

        $this->action =  2;

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
        $this->branchOffice_id = null;
        $this->action = 1;
        $this->search = '';
        $this->view ='create';
    }

    public function destroy($id)
    {
        if($id){
            $record = BranchOffice::find($id);
            $record->delete();
            $this->resetInput();
        }
    }

    protected $listeners =[
        'deleteRow'=>'destroy',
        
    ];
}
