<div class="mb-3 container-fluid mx-auto p-3 pt-4 pb-4 row mt-2" style="background-color: #607D8B">
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
                ['escape' => false, 'class' => 'list-group-item list-group-item-action active bg-dark border-dark']
            ); ?>
            <?= $this->Html->link(
                __('Shopping cart').'<i class="fas fa-shopping-basket float-right p-1"></i>',
                ['controller' => 'Customer', 'action' => 'cart', $user->userID, '_full' => true],
                ['escape' => false, 'class' => 'list-group-item list-group-item-action']
            ); ?>
            <?= $this->Html->link(
                __('History').'<i class="fas fa-history float-right p-1"></i>',
                ['controller' => 'Customer', 'action' => 'history', $user->userID, '_full' => true],
                ['escape' => false, 'class' => 'list-group-item list-group-item-action']
            ); ?>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-9 text-dark">
        <div class="col-md-12 pr-3 pb-3 pl-3">
            <h2 class="text-light ml-2 montserat-bold"><?= $customer->name ?></h2>
        </div>
        <div class="col-md-12">
            <?= $this->Form->create($customer) ?>
                <div class="col-md-12 row">
                    <div class="col-md-6 p-2 input-group">
                        <div class="input-group-prepend">
                            <span class="border-0 input-group-text bg-danger text-white col-static-100" id="inputGroup-sizing-default"><i class="fas fa-signature mr-2"></i>Name</span>
                        </div>
                        <?= $this->Form->control('name', ['label' => false, 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6 p-2 input-group">
                        <div class="input-group-prepend">
                            <span class="border-0 input-group-text bg-danger text-white col-static-100" id="inputGroup-sizing-default"><i class="fas fa-city mr-2"></i>City</span>
                        </div>
                        <?= $this->Form->control('city', ['label' => false, 'class' => 'form-control']) ?>
                    </div>
                </div>
                <div class="col-md-12 row">
                    <div class="col-md-6 p-2 input-group">
                        <div class="input-group-prepend">
                            <span class="border-0 input-group-text bg-danger text-white col-static-100" id="inputGroup-sizing-default"><i class="fas fa-road mr-2"></i>Street</span>
                        </div>
                        <?= $this->Form->control('street', ['label' => false, 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6 p-2 input-group">
                        <div class="input-group-prepend">
                            <span class="border-0 input-group-text bg-danger text-white col-static-100" id="inputGroup-sizing-default"><i class="fas fa-home mr-2"></i>House</span>
                        </div>
                        <?= $this->Form->control('house_nr', ['label' => false, 'class' => 'form-control']) ?>
                    </div>
                </div>

                <!-- <div class="col-md-12 p-2">
                    <?= $this->Form->control('description', ['label' => false]) ?>
                </div> -->
                <div class="col-md-12 row">
                    <div class="col-md-12 m-2 pl-0 input-group">
                        <div class="custom-file">
                            <?= $this->Form->control('image', ['type' => 'file', 'label' => false, 'class' => 'custom-file-input', 'onchange' => "$(this).siblings().eq(0).text($(this).val().split('fakepath').pop())"]) ?>
                            <label class="custom-file-label" for="image"></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 row">
                    <div class="col-md-12">
                        <?= $this->Form->button(__('Save'), ['class' => 'border-radius-100 btn btn-warning pr-5 pl-5 mt-3 float-right']) ?>
                    </div>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<div class="col-md-12 text-center">
    <h4 class="text-dark">We keep your data <b class="text-info">safe</b>
        <?= $this->Html->link(
            __('Explore'),
            ['controller' => 'About', 'action' => 'index', '_full' => true],
            ['class' => 'btn btn-dark font-weight-bold']); ?>
    </h4>
    <?= $this->Html->image('empty_shop3.png', ['class'=>'p-2 img-fluid d-block mx-auto mt-4', 'style' => 'object-fit: scale-down;max-height: 250px']) ?>
</div>