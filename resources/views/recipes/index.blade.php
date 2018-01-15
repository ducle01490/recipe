@extends('layouts.master')

@section('content')

<script async src="https://cdn.ampproject.org/v0.js"></script>

<div class="white_bg">
    <div class="container margin_60">
        <div class="row row-new-recipe">
            @foreach($recipes as $recipe)
            <?php $detailUrl = Helper::toURI($recipe->title.'-'.$recipe->id, '-'); ?>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="col-new-recipe">
                    <a href="{{route("recipe_detail", $detailUrl)}}">
                        <div class="photo">
                            <amp-img src="{{$recipe->thumb}}"
                              width="100"
                              height="100"
                              layout="responsive"
                              alt="{{$recipe->title}}"></amp-img>
                        </div>
                    </a>
                    <div class="recipe-title">
                        <h3><a href="{{route("recipe_detail", $detailUrl)}}">{{$recipe->title}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-12">
                <div class="text-center">
                    {{ $recipes->links() }}
                </div>
            </div>
        </div>
    </div><!-- End container -->
</div>
      
@endsection