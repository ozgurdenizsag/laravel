<!-- TOGGLE BUTTON DELETE PRODUCT -->
<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteProduct{{ $pdt->id }}">
    <i class="fas fa-trash"></i>
</button>

<!-- POPUP DELETE PRODUCT -->
<div class="modal fade" id="deleteProduct{{ $pdt->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteProductLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteProductLabel">Suppression du produit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="text-left" method="post" id="deleteForm">
                    @csrf
                    <label for="" >Etes-vous sûr de vouloir supprimer {{ $pdt->name }} ?</label>
                    
                    
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" form="" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-success" form="deleteForm">Valider</button>
            </div>
        </div>
    </div>
</div>