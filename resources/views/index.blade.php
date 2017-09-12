@extends('includes/head')
@extends('includes/nav')
@extends('includes/modal-add-title')
@extends('includes/modal-edit')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="vitorbrangioni">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>MINIMAL - Free Bootstrap 3 Theme</title>

  </head>

  <body data-spy="scroll" data-offset="0" data-target="#theMenu">

	<!-- Menu -->
		@section('nav')
		@endsection

		<div class="logo">
			<div class="row">

				<p>
					<img src="{{ asset('img/logo.png') }}" width="70">
					<span class="smartbook">SmartBook</span>
				</p>
			</div>
		</div>
	
	<!-- ========== HEADER SECTION ========== -->
	<div id="headerwrap">
		<div class="container">
			<div class="row">
				<h1>The book</h1>
			</div>
		<?php 
			$countTitleNv1 = 0;
		?>
		@foreach($allNv1 as $nv1)
			<?php 
				$countTitleNv1++;
				$countTitleNv2 = 0;
			?>
			<section id="nv1-{{$nv1->title}}-{{$nv1->id}}"></section>
			<div class="row">
				<h2>{{$countTitleNv1}} - {{$nv1->title}}</h2>
			</div>
			<div class="row">
				<p>
					{{$nv1->text}}
				</p>
			</div>

			@foreach($nv1->nv2 as $nv2)
				<?php 
					$countTitleNv2++;
					$countTitleNv3 = 0;
				?>
				<section id="nv2-{{$nv2->title}}-{{$nv2->id}}"></section>
				<div class="title-nv2">
					<div class="row">
						<h3>{{$countTitleNv1}}.{{$countTitleNv2}} - {{$nv2->title}}</h3>
					</div>
					<div class="row">
						<p>
							{{$nv2->text}}
						</p>
					</div>
				</div>

				@foreach($nv2->nv3 as $nv3)
					<?php 
						$countTitleNv3++;
						$countTitleNv4 = 0;
					?>
					<section id="nv3-{{$nv3->title}}-{{$nv3->id}}"></section>
					<div class="title-nv3">
						<div class="row">
							<h4>{{$countTitleNv1}}.{{$countTitleNv2}}.{{$countTitleNv3}} - {{$nv3->title}}</h4>
						</div>
						<div class="row">
							<p>
								{{$nv3->text}}
							</p>
						</div>
					</div>

					@foreach($nv3->nv4 as $nv4)
						<?php 
							$countTitleNv4++;
						?>
						<section id="nv4-{{$nv4->title}}-{{$nv4->id}}"></section>
						<div class="title-nv4">
							<div class="row">
								<h5>{{$countTitleNv1}}.{{$countTitleNv2}}.{{$countTitleNv3}}.{{$countTitleNv4}} - {{$nv4->title}}</h5>
							</div>
							<div class="row">
								<p>
									{{$nv4->text}}
								</p>
							</div>
						</div>
						
					@endforeach
					
				@endforeach

				
			@endforeach


			
		@endforeach


		</div><!-- /container -->
	</div><!-- /headerwrap -->
	
	
	
	<!-- ========== ABOUT SECTION ========== -->
	<section id="about" name="about"></section>
	<div id="f">
		<div class="container">
			<div class="row">
				<h3>SmartBook</h3>
				<p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>
				
				<!-- INTRO INFORMATIO-->
				<div class="col-lg-6 col-lg-offset-3">
					<p>A startup que veio para centralizar e facilitar o acesso em conhecimentos</p>
					
					<p><button type="button" class="btn btn-success">CONTATO</button></p>
				</div>								
			</div>
		</div><!-- /container -->
	</div><!-- /f -->
	

	
</body>
</html>
