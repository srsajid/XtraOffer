@extends('...layouts.sitepage')
@section('content')
    <div class="container main-container">
 <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Search Result</h3>
            </div>
            @foreach($offers as $offer)
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 thumb offer" offer-id="{{$offer->id}}">
                    <div class="thumbnail">
                        <img class="img-responsive" src="{{SR::$baseUrl}}images/offers/{{$offer->id}}/{{$offer->image_ref}}" alt="">
                    </div>
                    <div class="caption">
                        <h5 class="caption-header">{{HTML::entities($offer->title)}}</h5>
                        <div class="team-description">
                            {{Str::limit(HTML::entities($offer->description), 60, " <span class='text-primary'>Read More ...<span>")}}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@stop

