
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
    <?= $this->Html->script(['jquery.js', 'bootstrap.bundle.min.js']); ?>
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

</head>
<body class="bg-light">
    <!-- <i class="fas fa-bars"></i> -->
    <head>
        <div class="container-fluid row position-relative" style="z-index: 99">
            <div class="col-md-3 mt-3">
                <?= $this->Html->image('about/logo_avacado.png', ['width'=>'150', 'height'=>'50']) ?>
            </div>
            <div class="col-md-6 mx-auto mt-3 text-center">
                <ul class="nav justify-content-center link-container">
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Start site">
                        <?= $this->Html->link(
                            __('Start'),
                            ['controller' => 'Start', 'action' => 'index', '_full' => true],
                            ['class' => 'nav-link active text-dark']
                        ); ?>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Out Github">
                        <?= $this->Html->link(
                            'Github',
                            'https://github.com/rodchenk/elegia',
                            ['class' => 'nav-link text-dark', 'target' => '_blanc']
                        ); ?>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="About elegia">
                        <?= $this->Html->link(
                            __('About'),
                            ['controller' => 'About', 'action' => 'index', '_full' => true],
                            ['class' => 'nav-link text-dark']
                        ); ?>
                    </li>
                </ul>
            </div>
            <?php if ($user->role == 'customer'): ?>
            <div class="col-md-3 mt-3">
                <ul class="nav float-right icon-container">
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="User account">
                        <?= $this->Html->link(
                            '<i class="far fa-user fa-lg"></i>',
                            ['controller' => 'User', 'action' => 'view', $user->userID, '_full' => true],
                            ['escape' => false]
                        ); ?>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Shopping cart">
                        <?= $this->Html->link(
                            '<i class="fas fa-shopping-basket fa-lg"></i>',
                            ['controller' => 'Cart', 'action' => 'index', '_full' => true],
                            ['escape' => false]
                        ); ?>
                        <span class="icon-counter">5</span>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Log out">
                        <?= $this->Html->link(
                            '<i class="fas fa-sign-out-alt fa-lg"></i>',
                            ['controller' => 'User', 'action' => 'logout', '_full' => true],
                            ['escape' => false]
                        ); ?>
                    </li>
                </ul>
            </div>
          <?php elseif ($user->role == 'supplier'): ?>
            <div class="col-md-3 mt-3">
                <ul class="nav float-right icon-container">
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="User account">
                        <?= $this->Html->link(
                            '<i class="far fa-user fa-lg"></i>',
                            ['controller' => 'User', 'action' => 'view', $user->userID, '_full' => true],
                            ['escape' => false]
                        ); ?>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Notifications">
                        <?= $this->Html->link(
                            '<i class="far fa-bell fa-lg"></i>',
                            ['controller' => 'User', 'action' => 'notifications', '_full' => true],
                            ['escape' => false]
                        ); ?>
                        <span class="icon-counter">5</span>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Log out">
                        <?= $this->Html->link(
                            '<i class="fas fa-sign-out-alt fa-lg"></i>',
                            ['controller' => 'User', 'action' => 'logout', '_full' => true],
                            ['escape' => false]
                        ); ?>
                    </li>
                </ul>
            </div>
          <?php elseif ($user->role == 'admin'): ?>
            <div class="col-md-3 mt-3">
                <ul class="nav float-right icon-container">
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Admin panel">
                        <?= $this->Html->link(
                            '<i class="fas fa-sliders-h fa-lg"></i>',
                            ['controller' => 'Admin', 'action' => 'index', '_full' => true],
                            ['escape' => false]
                        ); ?>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Notifications">
                        <?= $this->Html->link(
                            '<i class="far fa-bell fa-lg"></i>',
                            ['controller' => 'User', 'action' => 'notifications', '_full' => true],
                            ['escape' => false]
                        ); ?>
                        <span class="icon-counter">5</span>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Log out">
                        <?= $this->Html->link(
                            '<i class="fas fa-sign-out-alt fa-lg"></i>',
                            ['controller' => 'User', 'action' => 'logout', '_full' => true],
                            ['escape' => false]
                        ); ?>
                    </li>
                </ul>
            </div>
            <?php else : ?>
            <div class="col-md-3 mt-3">
                <ul class="nav justify-content-center float-right">
                    <li class="nav-item" style="border-radius: 100px">
                        <a class="nav-link active text-dark"
                            href="/login" >
                            Log in
                        </a>
                    </li>
                    <li class="nav-item bg-coral" style="border-radius: 100px">
                        <a class="nav-link active text-white"
                            href="/signup" ><i class="fas fa-sign-in-alt">
                            </i> Sign up
                        </a>
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
    <footer>
    </footer>
</body>
</html>
