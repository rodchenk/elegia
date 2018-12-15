
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
<body>
    
    <?= $this->Flash->render() ?>
    <head>
        <div class="container-fluid row position-relative" style="z-index: 99">
            <div class="col-md-3 mt-3">
                <?= $this->Html->image('about/logo_avacado.png', ['width'=>'150', 'height'=>'50']) ?>   
            </div>
            <div class="col-md-6 mx-auto mt-3 text-center">
                <ul class="nav justify-content-center link-container">
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Start site">
                        <a class="nav-link active text-dark" href="/">Start</a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Out Github">
                        <a class="nav-link text-dark" href="https://github.com/rodchenk/elegia">Github</a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="About elegia">
                        <a class="nav-link text-dark" href="/about"><?= __('About') ?></a>
                    </li>
                </ul>
            </div>
            <?php if ($role == 'role_1') /*customer*/ : ?>
            <div class="col-md-3 mt-3">
                <ul class="nav justify-content-center icon-container">
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="User account">
                        <i class="far fa-user fa-2x"></i>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Shopping cart">
                        <i class="fas fa-shopping-basket fa-2x"></i>
                        <span class="icon-counter">5</span>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Log out">
                        <i class="fas fa-sign-out-alt fa-2x"></i>
                    </li>
                </ul>
            </div>
            <?php elseif ($role == 'role_2') /*supplier*/ : ?>
            <div class="col-md-3 mt-3">
                <ul class="nav justify-content-center icon-container">
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="User account">
                        <i class="far fa-user fa-2x"></i>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Notifications">
                        <i class="far fa-bell fa-2x"></i>
                        <span class="icon-counter">5</span>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Log out">
                        <i class="fas fa-sign-out-alt fa-2x"></i>
                    </li>
                </ul>
            </div>
            <?php elseif ($role == 'role_3'): ?>
            <div class="col-md-3 mt-3">
                <ul class="nav justify-content-center icon-container">
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Admin panel">
                        <i class="fas fa-sliders-h fa-2x"></i>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Notifications">
                        <i class="far fa-bell fa-2x"></i>
                        <span class="icon-counter">5</span>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Log out">
                        <i class="fas fa-sign-out-alt fa-2x"></i>
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
        <?= $this->fetch('content') ?>
    </main>
    <footer>
    </footer>
</body>
</html>
