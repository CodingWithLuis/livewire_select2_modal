<div>
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#product_create">
        Nuevo producto
    </button>

    <!-- Modal -->
    <div class="modal fade" wire:ignore.self id="product_create" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="submit">

                        <div class="form-group">
                            <label for="name">Producto</label>
                            <input type="text" class="form-control" id="name" wire:model="name">
                        </div>

                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="text" class="form-control" id="price" wire:model="price">
                        </div>

                        <x-select-component class="form-control" name="category_id" id="category_id" wire:model="category_id" :options="$this->categories" />


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
