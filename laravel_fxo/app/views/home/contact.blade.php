@extends('...layouts.sitepage')
@section('content')
<div class="main-container container">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Contact Us</h3>
        </div>
        <div class="col-md-6">
            <form role="form"  action="{{SR::$baseUrl}}/contact-us" method="post">
                <div class="well well-sm">
                    <strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{Input::old("name")}}">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control"  name="email" placeholder="Enter Email" value="{{Input::old("email")}}">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                    @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Phone Number" value="{{Input::old("phone")}}">
                    @if ($errors->has('phone')) <p class="help-block">{{ $errors->first('phone') }}</p> @endif
                </div>
                <div class="form-group">
                    <label>Subject</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" value="{{Input::old("subject")}}">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                    @if ($errors->has('subject')) <p class="help-block">{{ $errors->first('subject') }}</p> @endif
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <div class="input-group">
                        <textarea name="address" class="form-control" rows="5">{{Input::old("message")}}</textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-default btn-lg pull-right">
            </form>
        </div>
        <div class="col-md-6">
            <div class="jumbotron">
                <address>
                    Address:
                    Keas 69 Str.
                    15234, Chalandri
                    Athens,
                    Greece

                    +30-2106019311 (landline)
                    +30-6977664062 (mobile phone)
                    +30-2106398905 (fax
                </address>
            </div>
        </div>
    </div>
</div>

@stop