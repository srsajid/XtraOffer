<div class="modal fade" id="offerDetailsModal" tabindex="-1" role="dialog" aria-labelledby="offer-details"
     xmlns="http://www.w3.org/1999/html">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close close-btn" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="create-offer">Offer Details</h4>
      </div>
      <div class="modal-body">
             <h2><a href="#">{{HTML::entities($offer->title)}}</a></h2>
            <p class="lead">
                by <span class="">{{HTML::entities($offer->company_name)}}</span>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Posted on {{$offer->created_at}}</p>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive" src="{{SR::$baseUrl}}images/offers/{{$offer->id}}/{{$offer->image_ref}}" alt="">
                </div>
                <div class="col-md-6">
                    <p>{{HTML::entities($offer->description)}}</p>
                </div>
            </div>
            <hr>
            <address>
            <strong>Contact Address:</strong><br>
            {{HTML::entities($offer->contact_address)}}<br>
            <strong>Phone:</strong> {{$offer->contact_number}}<br>
            <strong title="Email">Email:</strong> <a href="mailto:#">{{$offer->contact_email}}</a>
            </address>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default close-btn" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>