<nav class="menu" id="theMenu">
	<div id="menuToggle"><i class="icon-reorder"></i></div>
	<div class="menu-wrap">

		<div class="col-md-7">
			<h1 class="logo"><a href="#home">The Book</a></h1>
		</div>
		<div class="col-md-5">
			<button data-toggle="modal" data-nv="1" href="#modal-add" class="add-title btn btn-success margin-top-20 glyphicon glyphicon-plus">
								Novo Tiitulo</button>
		</div>


		<i class="icon-remove menu-close"></i>
		<?php 
		$countTitleNv1 = 0;
		?>
		@foreach($allNv1 as $nv1)
		<?php
			$countTitleNv1++;
			$countTitleNv2 = 0;
		
		?>
		<div class="row divbutton">
			<div class="col-md-6">
				<div class="col-md-2">
					<a data-toggle="collapse" href="#collapse-nv1-{{$nv1->id}}">&#x25B6;</a>
				</div>
				<div class="col-md-10">
					<a href="#nv1-{{$nv1->title}}-{{$nv1->id}}" class="smoothScroll">
						{{$countTitleNv1}} - {{$nv1->title}}
								</a>
				</div>

			</div>
			<div class="col-md-6">
				<button data-toggle="modal" data-nv="2" data-idnv1="{{$nv1->id}}" href="#modal-add" style="display: none;" class="add-title btn btn-success btn-nav glyphicon glyphicon-plus">
							</button>
				<button data-toggle="modal" data-nv="1" data-id="{{$nv1->id}}" data-title="{{$nv1->title}}" style="display: none;" data-text="{{$nv1->text}}"
				 class="edit-title btn btn-warning btn-nav glyphicon glyphicon-pencil" href="#modal-edit">
							</button>
			</div>
		</div>

		<div id="collapse-nv1-{{$nv1->id}}" class="panel-collapse collapse">
			<ul class="">
				@foreach($nv1->nv2 as $nv2)
				<?php
					$countTitleNv2++;
					$countTitleNv3 = 0;
				?>
				<div class="row divbutton">
					<div class="col-md-1">
						<a data-toggle="collapse" href="#collapse-nv2-{{$nv2->id}}">&#x25B6;</a>
					</div>
					<div class="col-md-7">
						<a href="#nv2-{{$nv2->title}}-{{$nv2->id}}" class="smoothScroll">
							{{$countTitleNv1}}.{{$countTitleNv2}} - {{$nv2->title}}
										</a>
					</div>
					<div class="col-md-4">
						<button data-toggle="modal" data-nv="3" data-idnv1="{{$nv1->id}}" data-idnv2="{{$nv2->id}}" href="#modal-add" style="display: none;" class="add-title btn btn-success btn-nav glyphicon glyphicon-plus">
										</button>
						<button data-toggle="modal" data-nv="2" data-id="{{$nv2->id}}" data-title="{{$nv2->title}}" style="display: none;" data-text="{{$nv2->text}}"
						 class="edit-title btn btn-warning btn-nav glyphicon glyphicon-pencil" href="#modal-edit">
										</button>
					</div>
				</div>

				<div id="collapse-nv2-{{$nv2->id}}" class="panel-collapse collapse">
					<ul class="">

						@foreach($nv2->nv3 as $nv3)
						<?php
							$countTitleNv3++;
							$countTitleNv4 = 0;
						?>

						<div class="row divbutton">
							<div class="col-md-2 no-padding-right">
								<a data-toggle="collapse" href="#collapse-nv3-{{$nv3->id}}">&#x25B6;</a>
							</div>
							<div class="col-md-6 no-padding-left">
								<a href="#nv3-{{$nv3->title}}-{{$nv3->id}}" class="smoothScroll no-margin-left">
									{{$countTitleNv1}}.{{$countTitleNv2}}.{{$countTitleNv3}} - {{$nv3->title}}
														</a>
							</div>
							<div class="col-md-4">
								<button data-toggle="modal" data-nv="4" data-idnv1="{{$nv1->id}}" data-idnv2="{{$nv2->id}}" data-idnv3="{{$nv3->id}}" href="#modal-add" style="display: none;" class="add-title btn btn-success btn-nav glyphicon glyphicon-plus">
										</button>
								<button data-toggle="modal" data-nv="3" data-id="{{$nv3->id}}" data-title="{{$nv3->title}}" style="display: none;" data-text="{{$nv3->text}}"
								class="edit-title btn btn-warning btn-nav glyphicon glyphicon-pencil" href="#modal-edit">
												</button>
							</div>
						</div>

						<div id="collapse-nv3-{{$nv3->id}}" class="panel-collapse collapse padding-left-40">
							<ul class="">
								@foreach($nv3->nv4 as $nv4)
								<?php $countTitleNv4++; ?>

								<div class="row divbutton">
									<div class="col-md-8">
										<a href="#nv4-{{$nv4->title}}-{{$nv4->id}}" class="smoothScroll">
											{{$countTitleNv1}}.{{$countTitleNv2}}.{{$countTitleNv3}}.{{$countTitleNv4}} - {{$nv4->title}}
																		</a>
									</div>
									<div class="col-md-4">
										<button data-toggle="modal" data-nv="4" data-id="{{$nv4->id}}" data-title="{{$nv4->title}}" style="display: none;" data-text="{{$nv4->text}}"
											class="edit-title btn btn-warning btn-nav glyphicon glyphicon-pencil" href="#modal-edit">
										</button>
									</div>
								</div>

								@endforeach
							</ul>
						</div>
						@endforeach
					</ul>
				</div>
				@endforeach
			</ul>
		</div>
		@endforeach

		<div class="social-net">
			<a href="#"><i class="icon-facebook"></i></a>
			<a href="#"><i class="icon-twitter"></i></a>
			<a href="#"><i class="icon-dribbble"></i></a>
			<a href="#"><i class="icon-envelope"></i></a>
		</div>
	</div>
	<!-- Menu button -->

	</div>
</nav>
@yield('nav')