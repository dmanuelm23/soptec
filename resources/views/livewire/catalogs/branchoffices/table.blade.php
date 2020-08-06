<h2>Listado</h2>
<table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Recinto</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>IP</th>
                <th>Activo</th>
                <th>Localidad</th>
                <th>Estado</th>
                <th colspan="2">Acción</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($branchoffices as $branchoffice)
        <tr>
            <td>{{$branchoffice->id}}</td>
            <td>{{$branchoffice->precinct}}</td>
            <td>{{$branchoffice->name}}</td>
            <td>{{$branchoffice->email}}</td>
            <td>{{$branchoffice->ip}}</td>
            <td>{{$branchoffice->active}}</td>
            <td>{{$branchoffice->location}}</td>
            <td>{{$branchoffice->state}}</td>
            <td>
                <buttton wire:click="edit({{$branchoffice->id}})"  class="btn btn-primary">Editar</buttton>
                
            </td>
            <td>
                <buttton wire:click="destroy({{$branchoffice->id}})" class="btn btn-danger">Eliminar</buttton>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>

{{$branchoffices->links()}}