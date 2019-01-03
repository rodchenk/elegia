<div class="col-md-12 mt-2 p-3 row m-0" style="background: linear-gradient(to right top, #d7d8f1, #f1d7db)">
    <div class="col-md-6">
    	<?php if($supplier->image): ?>
        	<?= $this->Html->image('upload/s/'.$supplier->image, ['class'=>'img-fluid d-block mx-auto rounded', 'style' => 'max-height: 40vh; mix-blend-mode: darken']) ?>
        <?php else: ?>
        	<div class="name-badge text-white mx-auto mt-5 p-5 text-center">
				<span><?= $supplier->name[0] ?></span>
			</div>
        <?php endif; ?>
    </div>
    <div class="col-md-6 mb-2">
        <div class="col-md-12 montserat-bold text-right mt-2" style="font-size: 4rem;line-height: 3.5rem">
            <?= $supplier->name ?>
        </div>
        <div class="col-md-12 text-danger text-nowrap text-right">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <span class="text-dark">3/5 (12)</span>
            <span class="ml-3 font-weight-bold text-white p-2 d-inline-block bg-dark border-radius-100"><?= $supplier->city ?></span>
        </div>
        <div class="col-md-12 mt-4 text-justify">
            <?= $supplier->description ?>
        </div>
        <div class="col-md-12 mt-4 text-right">
            <a href="#" class="btn active border-radius-100 p-3 pl-4 pr-4 text-white border-0 opacity-block" role="button" aria-pressed="true"><i class="fas fa-heart"></i> Add to favorite</a>
        </div>
    </div>
</div>