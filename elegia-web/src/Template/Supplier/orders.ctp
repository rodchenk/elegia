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
                ['escape' => false, 'class' => 'nav-link text-white active bg-danger']
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
<div class="container-fluid mx-auto mt-3">
    <?php if(iterator_count($orders)): ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="border-0" scope="col"></th>
                <th class="border-0" scope="col"><?= __('Product') ?></th>
                <th class="border-0" scope="col"><?= __('Price') ?></th>
                <th class="border-0" scope="col"><?= __('Amount') ?></th>
                <th class="border-0" scope="col"><?= __('Customer') ?></th>
                <th class="border-0" scope="col"><?= __('Status') ?></th>
                <th class="border-0" scope="col"><?= __('Updated') ?></th>
                <th class="border-0" scope="col"></th>
            </tr>
        </thead>
        <tbody class="table-centered">
            <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= $this->Html->image('upload/p/'.$order->productID['image'], ['class'=>'img-fluid ', 'style' => 'object-fit: scale-down;max-height: 80px']) ?></td>
                    <td><?= $order->productID['name'].', '.$order->productID['description']?></td>
                    <td>€<?= $order->productID['price'] ?></td>
                    <td><?= $order->amount ?> Stk.</td>
                    <td>
                        <?= $this->Html->link(
                            $order->customerID['name'],
                            ['controller' => 'Customer', 'action' => 'view', $order->customerID['customerID'], '_full' => true],
                            ['escape' => false, 'class' => 'text-dark font-weight-bold']
                        ) ?>
                    </td>
                    <td>
                        <?php switch ($order->status) {
                            case 'in progress': $color = 'secondary';   $icon = '<i class="fas fa-clock pl-3"></i>'; break;
                            case 'canceled':    $color = 'danger';      $icon = '<i class="fas fa-times pl-3"></i>'; break;
                            case 'delivering':  $color = 'info';        $icon = '<i class="fas fa-truck pl-3"></i>'; break;
                            case 'delivered':   $color = 'success';     $icon = '<i class="fas fa-check pl-3"></i>'; break;
                            default:            $color = 'dark';        $icon = '<i class="fas fa-clock pl-3"></i>'; break;
                        }?>
                        <span class="text-right text-<?= $color ?> "><?= $order->status ?><?= $icon ?></span>
                    </td>
                    <td class="text-left">
                        <?=date( 'd. F H:i', strtotime($order->updated)) ?>
                    </td>
                    <td class="text-center" style="width: 210px">
                        <?php switch ($order->status) {
                            case 'in progress': $level = 1; break;
                            case 'delivering':  $level = 2; break;
                            default:            $level = 0; break; 
                        }?>
                        <?php if($level > 0): ?>
                            <div class="btn-group">
                                <button type="button" class="btn custom-btn rounded dropdown-toggle pl-3 pr-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?= __('Change status') ?>
                                </button>
                                <div class="dropdown-menu">
                                    <?= $level < 2 ? $this->Form->postLink(
                                        __('Delivering').'<i class="fas fa-truck-moving float-right ml-2 mt-1 text-secondary"></i>',
                                        ['controller' => 'Orders', 'action' => 'changestatus', $supplier->supplierID, $order->orderID, 'delivering', '_full' => true],
                                        ['escape' => false, 'class' => 'dropdown-item', 'style' => 'width:200px']
                                    ) : '' ?>
                                    <?= $level < 3 ? $this->Form->postLink(
                                        __('Delivered').'<i class="fas fa-check float-right ml-2 mt-1 text-secondary"></i>',
                                        ['controller' => 'Orders', 'action' => 'changestatus', $supplier->supplierID, $order->orderID, 'delivered', '_full' => true],
                                        ['escape' => false, 'class' => 'dropdown-item', 'style' => 'width:200px']
                                    ) : '' ?>
                                    <div class="dropdown-divider"></div>
                                    <?= $this->Form->postLink(
                                        __('Cancel order').'<i class="fas fa-times float-right ml-2 mt-1"></i>',
                                        ['controller' => 'Orders', 'action' => 'changestatus', $supplier->supplierID, $order->orderID, 'canceled', '_full' => true],
                                        ['escape' => false, 'class' => 'dropdown-item font-weight-bold text-danger', 'style' => 'width:200px']
                                    ); ?>
                                </div>
                            </div>
                        <?php endif;?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="col-md-12 text-center pb-3">
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
        </div>
    </div>
</div>
<?php else: ?>
    <div class="container-fluid mx-auto mt-3 text-center">
        <h2 class="text-secondary p-3"><?= __('Nothing in the table') ?></h2>
        <?= $this->Html->image('empty_shop1.png', ['class'=>'img-fluid ', 'style' => 'object-fit: scale-down;max-height: 180px']) ?>
    </div>
<?php endif; ?>


<?php endif; ?>