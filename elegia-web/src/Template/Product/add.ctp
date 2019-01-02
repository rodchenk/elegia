<div class="col-md-12 mt-2 p-3 row m-0" style="background: linear-gradient(to right top, #d7d8f1, #f1d7db)">
    <div class="col-md-6">
        <?= $this->Html->image('supplier/rewe.jpg', ['class'=>'img-fluid d-block mx-auto rounded', 'style' => 'max-height: 40vh; mix-blend-mode: darken']) ?>
    </div>
    <div class="col-md-6 mb-2">
        <div class="col-md-12 montserat-bold text-right mt-2" style="font-size: 4rem;line-height: 3.5rem">
            <?= $supplier->name ?>
        </div>
        <div class="col-md-12 text-danger text-nowrap text-right">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <span class="text-dark">3/5 (12)</span>
            <span class="ml-3 font-weight-bold text-white p-2 d-inline-block bg-dark border-radius-100"><?= $supplier->city ?></span>
        </div>
        <div class="col-md-12 mt-4 text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud xercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        </div>
        <div class="col-md-12 mt-4 text-right">
            <a href="#" class="btn active border-radius-100 p-3 pl-4 pr-4 text-white border-0 opacity-block" role="button" aria-pressed="true"><i class="fas fa-heart"></i> Add to favorite</a>
        </div>
    </div>
</div>
<!-- when es die seite der bestimmten lieferanten ist -->
<?php if($supplier->supplierID == $user->userID): ?>
<div class="container-fluid mx-auto p-2 bg-dark">
    <ul class="nav nav-pills nav-fill" style="font-size: 0.9rem">
        <li class="nav-item">
            <?= $this->Html->link(
                __('Shop').'<i class="fas fa-shopping-bag ml-2"></i>',
                ['controller' => 'Supplier', 'action' => 'view', $supplier->supplierID, '_full' => true],
                ['escape' => false, 'class' => 'nav-link text-white']
            ); ?>
        </li>
        <li class="nav-item">
            <?= $this->Html->link(
                __('Edit info').'<i class="fas fa-cog ml-2"></i>',
                ['controller' => 'Supplier', 'action' => 'edit', $supplier->supplierID, '_full' => true],
                ['escape' => false, 'class' => 'nav-link text-white']
            ); ?>
        </li>
        <li class="nav-item">
            <?= $this->Html->link(
                __('Add product').'<i class="fas fa-plus ml-2"></i>',
                ['controller' => 'Product', 'action' => 'add', $supplier->supplierID, '_full' => true],
                ['escape' => false, 'class' => 'nav-link text-white active bg-danger']
            ); ?>
        </li>
        <li class="nav-item">
            <?= $this->Html->link(
                __('List products').'<i class="fas fa-list ml-2"></i>',
                ['controller' => 'Product', 'action' => 'overview', $supplier->supplierID, '_full' => true],
                ['escape' => false, 'class' => 'nav-link text-white']
            ); ?>
        </li>
        <li class="nav-item">
            <?= $this->Html->link(
                __('Orders').'<i class="fas fa-folder-open ml-2 mr-2"></i><span class="badge badge-danger" style="vertical-align:text-top">0</span>',
                ['controller' => 'Supplier', 'action' => 'orders', $supplier->supplierID, '_full' => true],
                ['escape' => false, 'class' => 'nav-link text-white']
            ); ?>
        </li>
        <li class="nav-item">
            <?= $this->Html->link(
                __('Notifications').'<i class="fas fa-bell ml-2 mr-2"></i><span class="badge badge-danger" style="vertical-align:text-top">4</span>',
                ['controller' => 'Supplier', 'action' => 'notification', $supplier->supplierID, '_full' => true],
                ['escape' => false, 'class' => 'nav-link text-white']
            ); ?>
        </li>
    </ul>   
</div>
<?php endif; ?>
<div class="container-fluid mx-auto bg-dark pb-4">
    <?= $this->Form->create($product) ?>
    <div class="row">
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
                    <i class="fas fa-signature mr-2"></i>Category
                </span>
            </div>
            <?= $this->Form->control('categoryID', ['options' => $category, 'label' => false, 'class' => 'form-control']); ?>
        </div>
        <div class="col-md-6 mt-2 input-group">
            <div class="input-group-prepend">
                <span class="border-0 input-group-text bg-secondary text-white col-static-100">
                    <i class="fas fa-signature mr-2"></i>Desc.
                </span>
            </div>
            <?= $this->Form->control('description', ['label' => false, 'class' => 'form-control']); ?>
        </div>
        <div class="col-md-6 mt-2 input-group">
            <div class="input-group-prepend">
                <span class="border-0 input-group-text bg-secondary text-white col-static-100">
                    <i class="fas fa-signature mr-2"></i>Price
                </span>
            </div>
            <?= $this->Form->control('price', ['label' => false, 'class' => 'form-control']) ?>
        </div>
        <div class="col-md-6 mt-2 input-group">
            <div class="input-group-prepend">
                <span class="border-0 input-group-text bg-secondary text-white col-static-100">
                    <i class="fas fa-signature mr-2"></i>Stock
                </span>
            </div>
            <?= $this->Form->control('stock', ['label' => false, 'class' => 'form-control']); ?>
        </div>
        <div class="col-md-6 mt-2 input-group">
            <div class="input-group-prepend">
                <span class="border-0 input-group-text bg-secondary text-white col-static-100">
                    <i class="fas fa-signature mr-2"></i>Image
                </span>
            </div>
            <?= $this->Form->input('image', ['required' => false, 'label' => false, 'class' => 'form-control']) ?>
        </div>
    </div>
    <div class="col-md-12 text-right">
        <?= $this->Form->button(__('Save'), ['class' => 'btn btn-danger pl-3 pr-3 mt-3']) ?>       
    </div>
    <?= $this->Form->end() ?>
</div>
