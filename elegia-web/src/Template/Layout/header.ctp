<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <?= $this->Html->css(['about/all.min', 'about/bootstrap.min', 'elegia/style']) ?>
    <?= $this->Html->script(['jquery.js', 'bootstrap.bundle.min.js']); ?>
    <script type="text/javascript">$(function(){$('[data-toggle="tooltip"]').tooltip()})</script>
</head>
<body class="bg-light">
    <head>
        <div class="container-fluid row position-relative mx-auto" style="z-index: 99; font-size: .9rem">
            <div class="col-6 col-sm-6 col-md-3 mt-3">
                <?= $this->Html->image('about/logo_avacado.png', ['width'=>'120', 'height'=>'40']) ?>
            </div>
            <div class="d-none d-md-block col-md-6 mx-auto mt-3 text-center">
                <ul class="nav justify-content-center link-container">
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="<?= __('Start site') ?>">
                        <?= $this->Html->link(
                            __('Start'),
                            ['controller' => 'Start', 'action' => 'index', '_full' => true],
                            ['class' => 'nav-link active text-dark']
                        ); ?>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="<?= __('Our Github') ?>">
                        <?= $this->Html->link(
                            'Github',
                            'https://github.com/rodchenk/elegia',
                            ['class' => 'nav-link text-dark', 'target' => '_blanc']
                        ); ?>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="<?= __('About elegia') ?>">
                        <?= $this->Html->link(
                            __('About'),
                            ['controller' => 'About', 'action' => 'index', '_full' => true],
                            ['class' => 'nav-link text-dark']
                        ); ?>
                    </li>
                    <li class="nav-item">
                        <div class="btn-group dropdown">
                            <button type="button" class="font-weight-bold d-none d-lg-block btn btn-link text-dark dropdown-toggle pt-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                switch ($_SESSION['language']) {
                                    case 'de_DE':   echo "de"; break;
                                    default:        echo "en"; break;
                                }?>
                            </button>
                            <div class="dropdown-menu">
                                <?= $this->Html->link(
                                    $this->Html->image('icon/ame_flag.png', ['width'=>'35', 'height'=>'20', 'class' => 'mr-2']).'English',
                                    ['controller' => 'User', 'action' => 'language', 'en_US', '_full' => true],
                                    ['class' => 'dropdown-item', 'escape' => false]
                                ) . $this->Html->link(
                                    $this->Html->image('icon/ger_flag.png', ['width'=>'35', 'height'=>'20', 'class' => 'mr-2']).'Deutsch',
                                    ['controller' => 'User', 'action' => 'language', 'de_DE', '_full' => true],
                                    ['class' => 'dropdown-item', 'escape' => false]
                                ); ?>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-sm-6 d-md-none d-lg-none d-sm-block text-right p-3">
                <div class="btn-group">
                    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bars fa-lg"></i> Menu
                    </button>
                    <div class="dropdown-menu dropdown-menu-right bg-dark text-white" style="box-shadow: 0 0 25px #676767">
                        <?= $this->Html->link(
                            '<i class="fas fa-star-of-life width-30"></i>'.__('Start').'</a>',
                            ['controller' => 'Start', 'action' => 'index', '_full' => true],
                            ['escape' => false, 'class' => 'p-1 pl-3 pr-3 text-warning dropdown-item']
                        )
                        .$this->Html->link(
                            '<i class="fab fa-github width-30"></i>Github</a>',
                            'https://github.com/rodchenk/elegia',
                            ['class' => 'p-1 pl-3 pr-3 text-warning dropdown-item', 'target' => '_blanc', '_full' => true, 'escape' => false]
                        )
                        .$this->Html->link(
                            '<i class="fas fa-question width-30"></i>'.__('About'),
                            ['controller' => 'About', 'action' => 'index', '_full' => true],
                            ['escape' => false, 'class' => 'p-1 pl-3 pr-3 text-warning dropdown-item']
                        ); ?>
                        <hr class="bg-secondary m-2">
                        <?php if($user->role != 'anonym'): ?>
                            <?php if($user->role == 'customer'): ?>
                                <?= $this->Html->link(
                                    '<i class="fas fa-user width-30"></i>'.__('User account'),
                                    ['controller' => 'Customer', 'action' => 'view', $user->userID],
                                    ['_full' => true, 'class' => 'p-1 pl-3 pr-3 text-white dropdown-item', 'escape' => false]
                                ); ?>
                                 <?= $this->Html->link(
                                    '<i class="fas fa-shopping-cart width-30"></i>'.__('Shopping cart'),
                                    ['controller' => 'Customer', 'action' => 'cart', $user->userID],
                                    ['_full' => true, 'class' => 'p-1 pl-3 pr-3 text-white dropdown-item', 'escape' => false]
                                ); ?>
                            <?php elseif($user->role == 'supplier'): ?>
                            <!-- TODO FOR SUPPLIER -->
                                <?= $this->Html->link(
                                    '<i class="fas fa-user width-30"></i>'.__('Your shop'),
                                    ['controller' => 'Supplier', 'action' => 'view', $user->userID],
                                    ['_full' => true, 'class' => 'p-1 pl-3 pr-3 text-white dropdown-item', 'escape' => false]
                                ); ?>
                                 <?= $this->Html->link(
                                    '<i class="fas fa-bell width-30"></i>'.__('Notifications'),
                                    ['controller' => 'Supplier', 'action' => 'notification', $user->userID],
                                    ['_full' => true, 'class' => 'p-1 pl-3 pr-3 text-white dropdown-item', 'escape' => false]
                                ); ?>
                            <?php endif; ?>
                            <!-- -->

                            <hr class="bg-secondary m-2">
                            <?= $this->Html->link(
                                '<i class="fas fa-power-off width-30"></i>'.__('Logout'),
                                ['controller' => 'User', 'action' => 'logout'],
                                ['_full' => true, 'class' => 'p-1 pl-3 pr-3 text-danger font-weight-bold dropdown-item', 'escape' => false]
                            ); ?>
                        <?php else: ?>
                            <?= $this->Html->link(
                                '<i class="fas fa-sign-in-alt width-30"></i>'.__('Log in'),
                                ['controller' => 'Login', 'action' => 'index'],
                                ['_full' => true, 'class' => 'p-1 pl-3 pr-3 text-white dropdown-item', 'escape' => false]
                            )
                            .$this->Html->link(
                                '<i class="fas fa-plus width-30"></i>'.__('Sign up'),
                                ['controller' => 'Signup', 'action' => 'index'],
                                ['_full' => true, 'class' => 'p-1 pl-3 pr-3 text-white dropdown-item', 'escape' => false]
                            ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php if ($user->role == 'customer'): ?>
            <div class="d-none d-md-block col-md-3 mt-3">
                <ul class="nav float-right icon-container mt-2">
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="<?= __('User account') ?>">
                        <?= $this->Html->link(
                            '<i class="far fa-user fa-lg"></i>',
                            ['controller' => 'Customer', 'action' => 'view', $user->userID, '_full' => true],
                            ['escape' => false]
                        ); ?>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="<?= __('Shopping cart') ?>">
                        <?= $this->Html->link(
                            '<i class="fas fa-shopping-basket fa-lg"></i>',
                            ['controller' => 'Customer', 'action' => 'cart', $user->userID, '_full' => true],
                            ['escape' => false]
                        ); ?>
                        <?= $notification > 0 ? '<span class="icon-counter">'.$notification.'</span>' : '' ?>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="<?= __('Log out') ?>">
                        <?= $this->Html->link(
                            '<i class="fas fa-sign-out-alt fa-lg"></i>',
                            ['controller' => 'User', 'action' => 'logout', '_full' => true],
                            ['escape' => false]
                        ); ?>
                    </li>
                </ul>
            </div>
          <?php elseif ($user->role == 'supplier'): ?>
            <div class="d-none d-md-block col-md-3 mt-3">
                <ul class="nav float-right icon-container">
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="<?= __('User account') ?>">
                        <?= $this->Html->link(
                            '<i class="far fa-user fa-lg"></i>',
                            ['controller' => 'Supplier', 'action' => 'view', $user->userID, '_full' => true],
                            ['escape' => false]
                        ); ?>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="<?= __('Notifications') ?>">
                        <?= $this->Html->link(
                            '<i class="far fa-bell fa-lg"></i>',
                            ['controller' => 'Supplier', 'action' => 'notification', $user->userID, '_full' => true],
                            ['escape' => false]
                        ); ?>
                        <?= $notification > 0 ? '<span class="icon-counter">'.$notification.'</span>' : '' ?>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="<?= __('Log out') ?>">
                        <?= $this->Html->link(
                            '<i class="fas fa-sign-out-alt fa-lg"></i>',
                            ['controller' => 'User', 'action' => 'logout', '_full' => true],
                            ['escape' => false]
                        ); ?>
                    </li>
                </ul>
            </div>
          <?php elseif ($user->role == 'admin'): ?>
            <div class="d-none d-md-block col-md-3 mt-3">
                <ul class="nav float-right icon-container">
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Admin panel">
                        <?= $this->Html->link(
                            '<i class="fas fa-sliders-h fa-lg"></i>',
                            ['controller' => 'Admin', 'action' => 'index', '_full' => true],
                            ['escape' => false]
                        ); ?>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="<?= __('Notifications') ?>">
                        <?= $this->Html->link(
                            '<i class="far fa-bell fa-lg"></i>',
                            ['controller' => 'User', 'action' => 'notifications', '_full' => true],
                            ['escape' => false]
                        ); ?>
                        <span class="icon-counter">5</span>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="<?= __('Log out') ?>">
                        <?= $this->Html->link(
                            '<i class="fas fa-sign-out-alt fa-lg"></i>',
                            ['controller' => 'User', 'action' => 'logout', '_full' => true],
                            ['escape' => false]
                        ); ?>
                    </li>
                </ul>
            </div>
            <?php else : ?>
            <div class="d-none d-md-block col-md-3 mt-3">
                <ul class="nav justify-content-center float-right">
                    <li class="nav-item">
                        <?= $this->Html->link(
                            __('Log in'),
                            ['controller' => 'Login', 'action' => 'index', '_full' => true],
                            ['escape' => false, 'class' => 'nav-link active text-dark']
                        ); ?>
                    </li>
                    <li class="nav-item bg-coral border-radius-100">
                        <?= $this->Html->link(
                            '<i class="fas fa-sign-in-alt mr-1"></i>'.__('Sign up'),
                            ['controller' => 'Signup', 'action' => 'index', '_full' => true],
                            ['escape' => false, 'class' => 'nav-link text-white']
                        ); ?>
                    </li>
                </ul>
            </div>
            <?php endif; ?>
        </div>
    </head>
    <main>
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </main>
    <!-- TODO FOOTER or remove -->
    <footer class="d-none container-fluid row mx-auto p-2 text-white">
        <div class="col-md-7 p-1 text-left">
            <span class="font-weight-bold text-secondary mr-1">Authors:</span>
            <span class="text-light mr-1">Mischa</span>
            <span class="text-light mr-1">Nick</span>
            <span class="text-light mr-1">Thi</span>
            <span class="text-light">Ila</span>
            <span class="text-info ml-4">Copyright 2018</span>
        </div>
        <div class="col-md-2 text-right p-1">
            
        </div>
        <div class="col-md-3 text-right">
            <?= $this->Html->image('about/logo_avacado.png', ['width'=>'120', 'height'=>'40']) ?>
        </div>
    </footer>
</body>
</html>
