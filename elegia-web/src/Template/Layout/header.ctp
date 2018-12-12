
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
</head>
<body>
    
    <?= $this->Flash->render() ?>
    <head>
        <div class="container-fluid row">
            <div class="col-md-2 mt-3">
                <?= $this->Html->image('about/logologo.png', ['width'=>'150', 'height'=>'50']) ?>   
            </div>
            <div class="col-md-7 mx-auto mt-3">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" href="/">Start</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="https://github.com/rodchenk/elegia">Github</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/about">About</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 mt-3">
                <ul class="nav justify-content-center float-right">
                    <li class="nav-item" style="border-radius: 100px">
                        <a class="nav-link active text-dark" id="pills-home-tab" data-toggle="pill" href="/login" role="tab" aria-controls="pills-home" aria-selected="true">Log in</a>
                    </li>
                    <li class="nav-item bg-coral" style="border-radius: 100px">
                        <a class="nav-link active text-white" id="pills-home-tab" data-toggle="pill" href="/signup" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fas fa-sign-in-alt"></i> Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </head>
    <main>
        <?= $this->fetch('content') ?>
    </main>
    <footer>
    </footer>
</body>
</html>
