<div class="container-fluid mx-auto mt-3">
    <?= $this->Form->create($product) ?>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-dark ml-1 montserat-bold"><?= $product->name ?></h2>
            </div>
            <div class="col-md-6 mt-2 input-group">
                <div class="input-group-prepend">
                    <span class="border-0 input-group-text bg-secondary text-white col-static-100">
                        <i class="fas fa-signature mr-2"></i>Name
                    </span>
                </div>
                <?= $this->Form->control('name', ['label' => false, 'class' => 'form-control']) ?>
            </div>
            <div class="col-md-6 mt-2 input-group">
                <div class="input-group-prepend">
                    <span class="border-0 input-group-text bg-secondary text-white col-static-100">
                        <i class="fas fa-dollar-sign mr-2"></i>Price
                    </span>
                </div>
                <?= $this->Form->control('price', ['label' => false, 'class' => 'form-control']) ?>
            </div>
            <div class="col-md-6 mt-2 input-group">
                <div class="input-group-prepend">
                    <span class="border-0 input-group-text bg-secondary text-white col-static-100">
                        <i class="fas fa-ellipsis-h mr-2"></i>Amount
                    </span>
                </div>
                <?= $this->Form->control('stock', ['label' => false, 'class' => 'form-control']) ?>
            </div>
            <div class="col-md-6 mt-2 input-group">
                <div class="input-group-prepend">
                    <span class="border-0 input-group-text bg-secondary text-white col-static-100">
                        <i class="fas fa-pen mr-2"></i>Desc.
                    </span>
                </div>
                <?= $this->Form->control('description', ['label' => false, 'class' => 'form-control']) ?>
            </div>
            <div class="col-md-12 mt-2 input-group">
                <div class="input-group-prepend">
                    <span class="border-0 input-group-text bg-secondary text-white col-static-100">
                        <i class="fas fa-bars mr-2"></i>Category
                    </span>
                </div>
                <?= $this->Form->control('category', [
                    'options' => $category, 
                    'default' => $product->categoryID['categoryID'],
                    'label' => false, 
                    'class' => 'form-control']) ?>
            </div>
            <div class="col-md-12 text-right mt-4">
                <?= $this->Html->link('<i class="fas fa-times mr-1"></i>'.__('Cancel'), ['controller' => 'Product', 'action' => 'overview', $user->userID], ['escape' => false, 'class' => 'mr-2 btn btn-outline-secondary p-2 pl-3 pr-3']) ?>
                <?= $this->Form->postLink(
                    'Delete',
                    ['controller' => 'Product', 
                    'action' => 'delete',
                    $user->userID, 
                    $product->productID, 
                    '_full' => true],
                    ['escape' => false, 
                    'block' => true,
                    'confirm' => __('Are you sure you want to delete'),
                    'class' => 'btn btn-danger p-2 pl-4 pr-4']
                ); ?>
                <?= $this->Form->button(__('Save'), ['class' => 'btn btn-warning p-2 pl-4 pr-4']) ?>
            </div>
        </div>  
    <?= $this->Form->end() ?>
    <?= $this->fetch('postLink'); /*to click delete button within another form*/ ?>
</div>