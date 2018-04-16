<div class="carousel-cont">
	<h2 class="section-title refresh">Cook Your Favorite Dinners from Our Daily Menu</h2>
	<div class="owl-carousel" id="next-week">

		@foreach($recipes as $recipe)
		<div class="item">
			<div class="card">
				<?php $detailUrl = Helper::toURI($recipe->title.'-'.$recipe->id, '-'); ?>
				<a target="_blank" href="{{route("recipe_detail", $detailUrl)}}"><img src="{{$recipe->thumb}}">
					<div class="card-body">
						<div class="card-text">
							<div class="card-title">{{$recipe->title}}</div>
							<!-- <div class="card-subtitle">with Mashed Potatoes &amp; Broccoli</div> -->
						</div>
						<div class="card-main-badges">
							<div class="card-Badges"> </div>
						</div>
					</div>
				</a>
			</div>
		</div>
		@endforeach
		
	</div>
	<a id="get-cooking-btn" class="btn get-cooking-btn" name="button" href="{{ route('menu') }}">See Plans</a>
</div>