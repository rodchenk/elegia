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
                    ['escape' => false, 'class' => 'nav-link text-white']
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
                    __('Notifications').'<i class="fas fa-bell ml-2 mr-2"></i><span class="badge badge-light" style="vertical-align:text-top">'.$notification.'</span>',
                    ['controller' => 'Supplier', 'action' => 'notification', $supplier->supplierID, '_full' => true],
                    ['escape' => false, 'class' => 'nav-link text-white active bg-danger']
                ); ?>
            </li>
        </ul>   
    </div>
    <?php if(iterator_count($notifications)): ?>
        <div class="container mx-auto mt-3">
            <div class="row">
                <?php foreach ($notifications as $order): ?>
                    <div class="col-12 p-2">
                        <div class="bg-white border-radius-100 row supplier-block" style="height: 60px;">
                            <div class="col">
                                <span class="d-block p-3 pl-5" style="letter-spacing: .1rem">
                                    <?= $this->Html->link(
                                        $order->customerID['name'],
                                        ['controller' => 'Customer', 'action' => 'view', $order->customerID['customerID'], '_full' => true],
                                        ['escape' => false, 'class' => 'text-dark font-weight-bold']
                                    ).' hat am <span class="text-info">'.date( 'd. F H:i', strtotime($order->updated)).'</span> <b>'.$order->amount.' '.$order->productID['name'].'('.$order->productID['description'].')</b>'.' bestellt'?>
                                </span>
                            </div>
                            <div class="pr-0" style="width: 200px;">
                                <?= $this->Html->link(
                                    '<i class="far fa-eye mr-2"></i>'.__('Seen'),
                                    ['controller' => 'Orders', 'action' => 'changestatus', $supplier->supplierID, $order->orderID, 'in progress', '_full' => true],
                                    ['escape' => false, 'class' => 'col-12 btn custom-btn p-3', 'style' => 'height: 100%']
                                ); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>            
        </div>
    <?php else: ?>
        <div class="container-fluid mx-auto pt-3 bg-white text-center">
            <h4 class="text-dark p-3">You do not have any notifications</h4>
            <?= $this->Html->image('notif.jpg', ['class'=>'img-fluid ']) ?>
        </div>
    <?php endif; ?>
<?php endif; ?>