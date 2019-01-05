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
                __('Notifications').'<i class="fas fa-bell ml-2 mr-2"></i><span class="badge badge-danger" style="vertical-align:text-top">4</span>',
                ['controller' => 'Supplier', 'action' => 'notification', $supplier->supplierID, '_full' => true],
                ['escape' => false, 'class' => 'nav-link text-white']
            ); ?>
        </li>
    </ul>   
</div>
<div class="container-fluid mx-auto mt-3">
    <?php if(iterator_count($orders)): ?>
    <table class="table table-hover">
        <tbody class="table-centered">
            <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= $this->Html->image('upload/p/'.$order->productID['image'], ['class'=>'img-fluid ', 'style' => 'object-fit: scale-down;max-height: 80px']) ?></td>
                    <td><?= $order->productID['name'].', '.$order->productID['description']?></td>
                    <td>€<?= $order->productID['price'] ?></td>
                    <td><?= $order->amount ?> Stk.</td>
                    <td>
                        <?php switch ($order->status) {
                            case 'waiting':     $color = 'warning'; $icon = '<i class="fas fa-clock pl-3"></i>'; break;
                            case 'canceled':    $color = 'danger';  $icon = '<i class="fas fa-times pl-3"></i>'; break;
                            case 'delivering':  $color = 'info';    $icon = '<i class="fas fa-truck pl-3"></i>'; break;
                            case 'delivered':   $color = 'success'; $icon = '<i class="fas fa-check pl-3"></i>'; break;
                            default:            $color = 'dark';   $icon = '<i class="fas fa-clock pl-3"></i>'; break;
                        }?>
                        <span class="text-right text-<?= $color ?> "><?= $order->status ?><?= $icon ?></span>
                    </td>
                    <td class="text-left">
                        <?=date( 'd. F H:i', strtotime($order->updated)) ?>
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-align-right pr-2"></i>Change status
                            </button>
                            <div class="dropdown-menu">
                                <?= $this->Form->postLink(
                                    __('In progress').'<i class="fas fa-terminal float-right ml-2 mt-1 text-secondary"></i>',
                                    ['controller' => 'Order', 'action' => 'changeStatus', $order->orderID, 'progress', '_full' => true],
                                    ['escape' => false, 'class' => 'dropdown-item']
                                ); ?>
                                <?= $this->Form->postLink(
                                    __('Delivering').'<i class="fas fa-truck-moving float-right ml-2 mt-1 text-secondary"></i>',
                                    ['controller' => 'Order', 'action' => 'changeStatus', $order->orderID, 'delivering', '_full' => true],
                                    ['escape' => false, 'class' => 'dropdown-item']
                                ); ?>
                                <?= $this->Form->postLink(
                                    __('Delivered').'<i class="fas fa-check float-right ml-2 mt-1 text-secondary"></i>',
                                    ['controller' => 'Order', 'action' => 'changeStatus', $order->orderID, 'delivered', '_full' => true],
                                    ['escape' => false, 'class' => 'dropdown-item']
                                ); ?>
                                <div class="dropdown-divider"></div>
                                <?= $this->Form->postLink(
                                    __('Cancel order').'<i class="fas fa-times float-right ml-2 mt-1"></i>',
                                    ['controller' => 'Order', 'action' => 'changeStatus', $order->orderID, 'cancel', '_full' => true],
                                    ['escape' => false, 'class' => 'dropdown-item font-weight-bold text-danger']
                                ); ?>
                            </div>
                        </div>
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
        <h2 class="text-secondary p-3">Nothing in the table</h2>
        <?= $this->Html->image('empty_shop1.png', ['class'=>'img-fluid ', 'style' => 'object-fit: scale-down;max-height: 180px']) ?>
    </div>
<?php endif; ?>


<?php endif; ?>