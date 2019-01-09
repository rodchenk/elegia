<?= $this->element('SupplierHeader') ?>
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
                __('Notifications').'<i class="fas fa-bell ml-2 mr-2"></i><span class="badge badge-danger" style="vertical-align:text-top">'.$notification.'</span>',
                ['controller' => 'Supplier', 'action' => 'notification', $supplier->supplierID, '_full' => true],
                ['escape' => false, 'class' => 'nav-link text-white']
            ); ?>
        </li>
    </ul>   
</div>
<?php endif; ?>
<div class="container-fluid mx-auto bg-dark pb-4">
    <?= $this->Form->create($product, ['type' => 'file']) ?>
    <div class="row">
        <div class="col-md-6 mt-2 input-group">
            <div class="input-group-prepend">
                <span class="border-0 input-group-text bg-secondary text-white col-static-100">
                    <i class="fas fa-signature mr-2"></i><?= __('Name') ?>
                </span>
            </div>
            <?= $this->Form->control('name', ['label' => false, 'class' => 'form-control']) ?>
        </div>
        <div class="col-md-6 mt-2 input-group">
            <div class="input-group-prepend">
                <span class="border-0 input-group-text bg-secondary text-white col-static-100">
                    <i class="fas fa-signature mr-2"></i><?= __('Category') ?>
                </span>
            </div>
            <?= $this->Form->control('categoryID', ['options' => $category, 'label' => false, 'class' => 'form-control']); ?>
        </div>
        <div class="col-md-6 mt-2 input-group">
            <div class="input-group-prepend">
                <span class="border-0 input-group-text bg-secondary text-white col-static-100">
                    <i class="fas fa-signature mr-2"></i><?= __('Desc.') ?>
                </span>
            </div>
            <?= $this->Form->control('description', ['label' => false, 'class' => 'form-control']); ?>
        </div>
        <div class="col-md-6 mt-2 input-group">
            <div class="input-group-prepend">
                <span class="border-0 input-group-text bg-secondary text-white col-static-100">
                    <i class="fas fa-signature mr-2"></i><?= __('Price') ?>
                </span>
            </div>
            <?= $this->Form->control('price', ['label' => false, 'class' => 'form-control']) ?>
        </div>
        <div class="col-md-6 mt-2 input-group">
            <div class="input-group-prepend">
                <span class="border-0 input-group-text bg-secondary text-white col-static-100">
                    <i class="fas fa-signature mr-2"></i><?= __('Stock') ?>
                </span>
            </div>
            <?= $this->Form->control('stock', ['label' => false, 'class' => 'form-control']); ?>
        </div>

        <div class="col-md-6 mt-2 input-group">
            <div class="input-group-prepend">
                <span class="input-group-text border-0 bg-secondary text-white col-static-100"><i class="fas fa-cloud-upload-alt mr-2"></i><?= __('Image') ?></span>
            </div>
            <div class="custom-file">
                <label class="custom-file-label" for="image"></label>
                <?= $this->Form->control('image', [
                    'type' => 'file', 
                    'label' => false, 
                    'class' => 'custom-file-input',
                    'onchange' => "$(this).siblings().eq(0).text($(this).val().split('fakepath').pop());"
                ]) ?>
            </div>
        </div>
        <div class="col-md-12 text-right">
            <?= $this->Form->button(__('Save'), ['class' => 'btn btn-danger pl-3 pr-3 mt-3']) ?>       
        </div>
    </div>
    
    <?= $this->Form->end() ?>
</div>
