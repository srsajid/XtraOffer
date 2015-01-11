<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="create-offer">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="create-offer">Create Offer</h4>
      </div>
       <form class="form-horizontal create-edit-form" action="{{SR::$baseUrl}}offer/save" method="post" enctype="multipart/form-data">
          <div class="modal-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Offer Title:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control validate[required,maxSize[200]]" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Company Name:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control validate[required,maxSize[200]]" name="company_name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Contact Address:</label>
                    <div class="col-sm-9">
                        <textarea type="text" class="form-control validate[required,maxSize[300]]" name="contact_address"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Contact Email:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control validate[required,custom[email]]" name="contact_email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Contact phone:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control validate[required,custom[phone]]" name="contact_number">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Last Date:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control validate[required,custom[date],future[now]]" name="last_date">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Category:</label>
                    <div class="col-sm-9">
                        {{CommonService::categorySelect()}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Image:</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control validate[require]" name="image">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Description:</label>
                    <div class="col-sm-9">
                        <textarea class="form-control validate[require]" name="description"></textarea>
                    </div>
                </div>
                <div class="form-group">
                      <label class="control-label col-sm-3"></label>
                      <div class="col-sm-1">
                          <input type="checkbox" name="termsAndCondition" class="form-control validate[required]">
                      </div>
                      <span class="help-block">I agreed to <a target="_blank" href="{{SR::$baseUrl}}page/terms-and-condition">Terms and Condition</a></span>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
    </div>
  </div>
</div>