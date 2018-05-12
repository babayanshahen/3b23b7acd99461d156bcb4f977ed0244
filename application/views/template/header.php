<!DOCTYPE html>
<html class="full-height">
	<head>
		<meta charset='UTF-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">


		<?php
			$this->load->helper('url');
			$url = $this->uri->segment(1);
		?>
		<?php $canonical = isset($_SERVER['PATH_INFO']) ? base_url( $_SERVER['PATH_INFO'] ) : base_url() ?>
		<?php if (is_null($url) ): ?>
			<meta name="description" content="Անշարժ գույքի անվճար հայտարարությունների խոշորագույն կայքը Հայաստանում:Անշարջ գույքի առք, վաճառք և վարձակալություն:">
			<title>State.am | Հայաստանի անշարժ գույքի անվճար հայտարարությունների կայք</title>
		<?php endif ?>

		<?php if (isset($url) && !empty($url) && $url == 'statements'): ?>

			<meta name="description" content="Անշարժ գույքի վաճառք և վարձակալություն` այստեղ դուք հեշտությամբ կարող եք գտնել ցանկացած անշարժ գույք Երևանում և Հայաստանում` առանձնատներ, բնակարաններ, գրասենյակային տարածքներ և այլ:">
			<title>
				Անշարժ գույքի վաճառք և վարձակալություն Երևանում և Հայաստանի տարածաշրջաններում` բնակարաններ, առանձնատներ, հողատարածք և գրասենյակային տարածքներ սեփականատերերից և գործակալություններից: - State.am
			</title>

		<?php endif ?>

		<?php if (isset($url) && !empty($url) && $url == 'register'): ?>
			<meta name="description" content="Անշարժ գույքի անվճար հայտարարությունների խոշորագույն կայքը Հայաստանում:Անշարջ գույքի առք, վաճառք և վարձակալություն:">
			<title>
				Գրանցում - state.am
			</title>
		<?php endif ?>

		<link rel="canonical" href="<?php echo $canonical; ?>" />
		<meta name="author" content="IT MAGUS">
		<meta name="keywords" content="Անշարժ գույք,վաճառք,վարձակալություն,վաճառք և վարձակալություն,Անշարժ գույքի վաճառք և վարձակալություն,անշարժ գույք Երևանում,անշարժ գույք Երևանում և Հայաստանի տարածաշրջաններում,անշարժ գույք Հայաստանում,Անշարջ գույքի առք,Անշարջ գույքի վաճառք,Անշարջ գույքի վարձակալություն,Անշարջ գույքի առք և վաճառք,Անշարժ գույքի անվճար հայտարարություններ,հայտարարություններ,անվճար հայտարարություններ,անվճար հայտարարությունների կայք,հայտարարությունների կայք,անշարժ գույքի անվճար հայտարարությունների կայք,տների վաճառք,տներ,բնակարաններ,բնակարաններ Երևանում,բնակարաններ Երևանում և Հայաստանի տարածաշրջաններում,բնակարաններ Հայաստանում,բնակարանների վարձակալություն,բնակարանների վաճառք,բնակարանների վարձակալություն,բնակարանների վաճառք և վարձակալություն,հողատարածքներ,հողատարածքների վաճառք,հողատարածքների վարձակալություն,հողատարածքների վաճառք Երևանում,հողատարածքների վաճառք Հայաստանում,հողատարածքների վարձակալություն Երևանում,հողատարածքների վարձակալություն Հայաստանում,հողատարածքների վաճառք Երևանում և Հայաստանի տարածաշրջաններում,հողատարածքների վարձակալություն Երևանում և Հայաստանի տարածաշրջաններում,կոմերցիոն,կոմերցիոն տարածքներ,կոմերցիոն տարածքների վաճառք,կոմերցիոն տարածքների վարձակալություն,կոմերցիոն տարածքների վաճառք Երևանում,կոմերցիոն տարածքների վաճառք Հայաստանում,կոմերցիոն տարածքների վարձակալություն Երևանում,կոմերցիոն տարածքների վարձակալություն Հայաստանում,կոմերցիոն տարածքների վաճառք և վարձակալություն,կոմերցիոն տարածքների վաճառք և վարձակալություն Երևանում,կոմերցիոն տարածքների վաճառք և վարձակալություն Հայաստանում,գրասենյակային տարածքներ,գրասենյակային,գրասենյակային տարածքների վաճառք,գրասենյակային տարածքների վարձակալություն,գրասենյակային տարածքների վաճառք և վարձակալություն,գրասենյակային տարածքներ Երևանում,գրասենյակային տարածքներ Երևանում և Հայաստանի տարածաշրջաններում,գրասենյակային տարածքներ Հայաստանում,գրասենյակային և այլ տարածքներ Երևանում և Հայաստանում,ավտոտնակների վաճառք,ավտոտնակների վարձակալություն,ավտոտնակների վաճառք և վարձակալություն,ավտոտնակներ Երևանում,ավտոտնակներ Երևանում և Հայաստանի տարածաշրջաններում,ավտոտնակներ Հայաստանում,">


		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="<?php  echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
		<link href="<?php  echo base_url('assets/css/mdb.min.css')?>" rel="stylesheet">
		<link href="<?php  echo base_url('assets/css/style.css')?>" rel="stylesheet" >
		<link href="<?php  echo base_url('assets/css/animate.css')?>" rel="stylesheet">
		<script type="text/javascript" src="<?php  echo base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
	</head>
	<body>
		<script>
			baseUrl = "<?php echo base_url();?>";
		</script>
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top top-nav-collapse">
				<div class="container">
					<!-- navbar -->
					<a class="navbar-brand" href="<?php echo base_url()?>">
						<img src="<?php echo base_url('assets/img/logo.png') ?>" class="img-fluid pos-a" width="32" title="Գլխավոր Էջ">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent-7">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url('statements')?>" title="Հայտարարություններ">Հայտարարություններ
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<?php if (isUserLoggedIn()): ?>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo  base_url('dashboard')?>" title="Իմ Էջ">Իմ Էջ</a>
								</li>
							<?php else: ?>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo base_url('register')?>">Գրանցվել</a>
								</li>
									<?php if (is_null($this->uri->segment(1)) || $this->uri->segment(1) != "register"): ?>
										<li class="nav-item">
											<a class="nav-link" href="#" data-toggle="modal" data-target="#modalLoginForm">Մուտք</a>
										</li>
									<?php endif ?>

							<?php endif ?>
						</ul>
						<form action="<?php echo base_url('statements/searching')?>" method="POST">
							<div class="md-form mt-0">
								<input class="form-control mr-sm-2" type="search" placeholder="Որոնել" name="search" />
							</div>
						</form>
					</div>
				</div>
			</nav>