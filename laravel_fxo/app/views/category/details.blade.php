@extends('...layouts.sitepage')
@section('content')
    <div class="container main-container">
 <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$category->name}}</h1>
            </div>
            @foreach($offers as $offer)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb offer" offer-id="{{$offer->id}}">
                    <div class="thumbnail">
                        <img class="img-responsive" src="{{SR::$baseUrl}}/images/offers/{{$offer->id}}/{{$offer->image_ref}}" alt="">
                    </div>
                    <div class="caption">
                        <h5 class="caption-header">{{HTML::entities($offer->title)}}</h5>
                        <div class="team-description">
                            {{HTML::entities(Str::limit($offer->description, 150))}}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@stop

