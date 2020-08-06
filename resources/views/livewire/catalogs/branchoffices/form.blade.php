<div class="col-sm-6">
    <div class="form-group">
        <label>Recinto</label>
        <input type="number" class="form-control" wire:model="precinct">
        @error('precinct') <span>{{$message}}</span>  @enderror
    </div>

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" class="form-control" wire:model="name">
        @error('name') <span>{{$message}}</span>  @enderror
    </div>

    <div class="form-group">
        <label>email</label>
        <input type="email" class="form-control" wire:model="email">
        @error('email') <span>{{$message}}</span>  @enderror
    </div>

    <div class="form-group">
        <label>IP</label>
        <input type="text" class="form-control" wire:model="ip">
        @error('ip') <span>{{$message}}</span>  @enderror
    </div>

    <div class="form-group">
        <label>Activo</label>
        <input type="text" class="form-control" wire:model="active">
        @error('active') <span>{{$message}}</span>  @enderror
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group">
        <label>Celular de Red</label>
        <input type="text" class="form-control" wire:model="cellPhone">
        @error('cellPhone') <span>{{$message}}</span>  @enderror
    </div>
    <div class="form-group">
        <label>Teléfono Local</label>
        <input type="text" class="form-control" wire:model="telephone">
        @error('telephone') <span>{{$message}}</span>  @enderror
    </div>
    <div class="form-group">
        <label>Dirección</label>
        <input type="text" class="form-control" wire:model="address">
        @error('address') <span>{{$message}}</span>  @enderror
    </div>
    <div class="form-group">
        <label>Municipio</label>
        <input type="text" class="form-control" wire:model="location">
        @error('location') <span>{{$message}}</span>  @enderror
    </div>
    <div class="form-group">
        <label>Estado</label>
        <input type="text" class="form-control" wire:model="state">
        @error('state') <span>{{$message}}</span>  @enderror
    </div>





    


</div>

