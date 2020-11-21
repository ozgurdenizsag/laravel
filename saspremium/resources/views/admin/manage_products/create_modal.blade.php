<!-- TOGGLE BUTTON CREATE PRODUCT -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createProduct">
    Créer un nouveau produit
</button>

<!-- POPUP CREATE PRODUCT -->
<div class="modal fade" id="createProduct" tabindex="-1" role="dialog" aria-labelledby="createProductLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createProductLabel">Nouveau produit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{ route('products.create') }}" method="post" id="createForme">
                @csrf
                <div class="form-group">
                    <input id="create-name" name="name" type="text" placeholder="Nom" class="form-control @error('create-name') is-invalid @enderror" required>

                    @error('create-name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="create-desc" type="text" name="desc" placeholder="Description" class="form-control @error('create-desc') is-invalid @enderror" required>

                    @error('create-desc')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="create-price" type="number" name="price" step="0.01"  min="0.00"  placeholder="Prix (min. 0.00)" class="form-control @error('create-price') is-invalid @enderror" required>

                    @error('create-price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="create-quantity" type="number" name="quantity"  min="0"  placeholder="Quantité (min. 0)" class="form-control @error('create-quantity') is-invalid @enderror" required>

                    @error('create-quantity')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="create-delivery-date" type="number" min="1" name="delivery-date" placeholder="Durée de livraison (éstimée en J.)" class="form-control @error('create-delivery-date') is-invalid @enderror" required>
                    @error('create-delivery-date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <select id="create-supplier" name="id_supplier" data-dependent="create-category" class="form-control input-lg dynamic @error('create-supplier') is-invalid @enderror" required>
                        @foreach ($suppliers as $spl)
                            <option id="{{ $spl->id_supplier }}" value="{{ $spl->id }}">{{ $spl->name }}</option>
                        @endforeach
                    </select>
                    @error('create-supplier')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <select id="create-category" name="id_category"  class="form-control @error('create-category') is-invalid @enderror" required>
                        @foreach ($categories as $ctg)
                            <option id="{{ $ctg->id_category }}" value="{{ $ctg->id }}">{{ $ctg->name }}</option>
                        @endforeach
                    </select>
                    @error('create-category')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-success" form="createForme" >Valider</button>
        </div>
      </div>
    </div>
</div>    