<div>
    <form wire:submit.prevent="submit">

        <div class="form-group">
    
            <label for="numeroDemande">Numero Demande</label>
    
            <input type="text" class="form-control" id="numeroDemande" placeholder="Numero Demande" wire:model="numero_demande">
    
            @error('numero_demande') <span class="text-danger">{{ $message }}</span> @enderror
    
        </div>

        <div class="form-group">
    
            <label for="dateDemande">Date Demande</label>
    
            <input type="date" class="form-control" id="dateDemande" placeholder="Date Demande" wire:model="date_demande">
    
            @error('date_demande') <span class="text-danger">{{ $message }}</span> @enderror
    
        </div>

        <div class="form-group">
    
            <label for="typeDemande">Type Deamnde</label>
    
            <input type="text" class="form-control" id="typeDemande" placeholder="Type Demande" wire:model="type_demande">
    
            @error('type_demande') <span class="text-danger">{{ $message }}</span> @enderror
    
        </div>

        
        <div class="form-group">
        
            <label for="montantFrais">Montant Frais</label>

            <input type="text" class="form-control" id="montantFrais" placeholder="Montant Frais" wire:model="montant_frais">

            @error('montant_frais') <span class="text-danger">{{ $message }}</span> @enderror

        </div>

        <div class="form-group">
        
            <label for="refugieReconnu">Refugié Reconnu</label>

            <input type="checkbox" class="form-control" id="refugieReconnu" placeholder="refugieReconnu" wire:model="refugie_reconnu">

            @error('refugie_reconnu') <span class="text-danger">{{ $message }}</span> @enderror

        </div>

        <div class="form-group">
        
            <label for="actiris">Actiris</label>

            <input type="checkbox" class="form-control" id="actiris" placeholder="actiris" wire:model="actiris">

            @error('actiris') <span class="text-danger">{{ $message }}</span> @enderror

        </div>

        <div class="form-group">
        
            <label for="vdab">VDAB</label>

            <input type="checkbox" class="form-control" id="vdab" placeholder="vdab" wire:model="vdab">

            @error('vdab') <span class="text-danger">{{ $message }}</span> @enderror

        </div>

        <div class="form-group">
        
            <label for="statut">Statut</label>

            <input type="text" class="form-control" id="statut" placeholder="statut" wire:model="statut">

            @error('statut') <span class="text-danger">{{ $message }}</span> @enderror

        </div>


      
    
        
    
        <button type="submit" class="btn btn-primary">Save Contact</button>
    
    </form>
</div>
