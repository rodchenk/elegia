
<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->css(['about/all.min', 'about/bootstrap.min', 'elegia/style']); ?>
</head>
<body>
	<div class="container-fluid bg-dark main-start" style="height: 100vh;position: fixed;top: 0;left: 0">
		<div class="container-fluid position-absolute" style="height: 80vh; display: flex;align-items: center;">
			<div class="container mx-auto" style="filter: drop-shadow(0 0 30px #191919);">
				<div class="row">
					<div class="col-md-12 text-center">
						<span style="background-color: #0000008a; color: white; padding: 12px; font-size: 30px; border-radius: 4px; display: inline-block; font-family: MontserratExtraBold">Erfreuen Sie Ihre Mitarbeiter</span>
					</div>
				</div>
				<?= $this->Form->create(null, ['url' => ['controller' => 'Search', 'action' => 'search'], 'type' => 'GET']) ?>

					<div class="input-group mb-3" style="margin-bottom: 5px !important; margin-top: 7px;">
						<input onkeyup="search(this.value)" list="cities" autocomplete="off" autocorrect="off" autocapitalize="off" name="q" spellcheck="false" type="text" class="form-control" placeholder="Tippe deine Stadt oder PLZ" aria-label="Tippe deine Stadt oder PLZ" aria-describedby="basic-addon2" style="padding: 16px">

						<datalist id="cities"></datalist>

						<div class="input-group-append">
							<?= $this->Form->button(
								'<i class="fas fa-search"></i>'.__('Search'), [
								'class' => 'btn btn-outline-success bg-success text-white',
								'style' => 'padding-right: 25px;padding-left: 25px;border-bottom-right-radius:.25rem;border-top-right-radius:.25rem'],
								['role' => 'button'],
								['escape' => false]
							); ?>

							<!-- <button class="btn btn-outline-success bg-success text-white" 
									type="button" 
									style="padding-right: 25px;padding-left: 25px">
								<i class="fas fa-search"></i> Suchen
							</button> -->

						</div>
						<script type="text/javascript">
							function search(keyword){
								let search = keyword;
								$.ajax({
									method: 'GET',
									url: "<?= $this->Url->build(['controller' => 'Start', 'action' => 'search']) ?>",
									type: 'json',
									data: {keyword:search},
									success: function(e){$('#cities').html(e);}
								});
							}
						</script>
					</div>
				<?= $this->Form->end() ?>
				<div class="row">
					<div class="col-md-6 text-white" style="filter: drop-shadow(0 0 30px #191919);">
						z.B. Berlin, Hamburg, München usw. 
					</div>
					<div class="col-md-6 text-white text-right">
						<i class="fab fa-cc-visa fa-3x text-white"></i>
						<i class="fab fa-cc-mastercard fa-3x text-white"></i>
						<i class="fab fa-cc-paypal fa-3x text-white"></i>
					</div>
				</div>
			</div>
		</div>
		<!-- SEARCH END -->
	</div>

</body>
</html>