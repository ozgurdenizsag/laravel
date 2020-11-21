<!-- TOGGLE BUTTON EDIT PRODUCT -->
<button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editProduct{{ $pdt->id }}">
    <i class="fas fa-edit"></i>
</button>

<!-- POPUP EDIT PRODUCT -->
<div class="modal fade" id="editProduct{{ $pdt->id }}" tabindex="-1" role="dialog" aria-labelledby="editProductLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductLabel">&Eacute;dition du produit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="" method="post" id="editForme">
                    @csrf

                    <div class="form-group">
                    <input id="edit-name" type="text" placeholder="Nom" name="edit-name" value="{{ $pdt->name }}" class="form-control @error('edit-name') is-invalid @enderror">

                        @error('edit-name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input id="edit-desc" type="text" placeholder="Description" name="edit-desc" value="{{ $pdt->desc }}" class="form-control @error('edit-desc') is-invalid @enderror">

                        @error('edit-desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input id="edit-price" type="number" step="0.01" name="edit-price" value="{{ $pdt->price }}" class="form-control @error('edit-price') is-invalid @enderror">

                        @error('edit-price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input id="edit-delivery-date" type="date" id="start" name="edit-delivery-date" value="{{ $pdt->delivery_date }}" min="2020-01-01" max="2030-01-01" class="form-control @error('edit-delivery-date') is-invalid @enderror">
                        @error('edit-delivery-date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <select id="edit-supplier" name="edit-supplier" class="form-control @error('edit-supplier') is-invalid @enderror">
                            @foreach ($suppliers as $spl)
                                <option value="{{ $spl->id }}"{{ ($pdt->id_supplier == $spl->id) ? 'selected' : '' }}>{{ $spl->name }}</option>
                            @endforeach
                        </select>
                        @error('edit-supplier')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <select id="edit-category" name="edit-category" class="form-control @error('edit-category') is-invalid @enderror">
                            @foreach ($categories as $ctg)
                                <option value="{{ $ctg->id }}"{{ ($pdt->id_category == $ctg->id) ? 'selected' : '' }}>{{ $ctg->name }}</option>
                            @endforeach
                        </select>
                        @error('edit-category')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <button type="submit" form="editForme" class="btn btn-success">Valider</button>
            </div>
        </div>
    </div>
</div>