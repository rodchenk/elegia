<div class="mb-3 container-fluid mx-auto p-3 pt-4 pb-4 row mt-2" style="background-color: #303031">
    <div class="col-12 col-md-7 col-lg-3 mb-3">
        <div class="list-group">
            <?= $this->Html->link(
                __('Public profile').'<i class="far fa-user float-right p-1"></i>',
                ['controller' => 'Customer', 'action' => 'view', $user->userID, '_full' => true],
                ['escape' => false, 'class' => 'list-group-item list-group-item-action']
            ); ?>
            <?= $this->Html->link(
                __('Edit profile').'<i class="fas fa-cog float-right p-1"></i>',
                ['controller' => 'Customer', 'action' => 'edit', $user->userID, '_full' => true],
                ['escape' => false, 'class' => 'list-group-item list-group-item-action']
            ); ?>
            <?= $this->Html->link(
                __('Shopping cart').'<i class="fas fa-shopping-basket float-right p-1"></i>',
                ['controller' => 'Customer', 'action' => 'cart', $user->userID, '_full' => true],
                ['escape' => false, 'class' => 'list-group-item list-group-item-action']
            ); ?>
            <?= $this->Html->link(
                __('History').'<i class="fas fa-history float-right p-1"></i>',
                ['controller' => 'Customer', 'action' => 'history', $user->userID, '_full' => true],
                ['escape' => false, 'class' => 'list-group-item list-group-item-action active bg-dark border-dark']
            ); ?>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-9 text-dark">
        <?php if(iterator_count($orders)): ?>
            <table class="table table-hover text-light" style="font-size: .9rem">
                <tbody class="table-centered">
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td class="border-0" style="max-width: 150px">
                                <?= $this->Html->image('upload/p/'.$order->Product['image'], ['class'=>'p-2 img-fluid', 'style' => 'object-fit: scale-down;max-height: 80px']) ?>
                            </td>
                            <td class="border-0">
                                <?= $order->Product['name'].', '.$order->Product['description'] ?>
                            </td>
                            <td class="border-0">
                                €<?= $order->Product['price'] ?>
                            </td>
                            <td class="border-0">
                                <?= $order->amount.' '.__('Stk.') ?>
                            </td>
                            <td class="border-0 text-right">
                                <?php switch ($order->status) {
                                    case 'waiting':     $color = 'warning'; $icon = '<i class="fas fa-clock pl-3"></i>'; break;
                                    case 'canceled':    $color = 'danger';  $icon = '<i class="fas fa-times pl-3"></i>'; break;
                                    case 'delivering':  $color = 'info';    $icon = '<i class="fas fa-truck pl-3"></i>'; break;
                                    case 'delivered':   $color = 'success'; $icon = '<i class="fas fa-check pl-3"></i>'; break;
                                    default:            $color = 'light';   $icon = '<i class="fas fa-clock pl-3"></i>'; break;
                                }?>
                                <span class="text-right text-<?= $color ?> "><?= $order->status ?><?= $icon ?></span>
                            </td>
                            <td class="border-0 text-left"><?=date( 'd. F H:i', strtotime($order->updated)) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="col-md-12 text-light">
                <?= $this->Html->image('empty_cart.png', ['class'=>'p-2 img-fluid d-block mx-auto mt-4', 'style' => 'object-fit: scale-down;max-height: 250px']) ?>
                <h3 class="text-center mb-0" style="color: #ee446d"><?= __('No history yet')?> :(</h3>
                <h5 class="text-center"><?= __('Buy something to make me happy')?></h5>
            </div>
        <?php endif; ?>
    </div>
</div>