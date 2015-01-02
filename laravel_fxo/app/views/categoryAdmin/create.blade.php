<form class="form-horizontal create-edit-form" action="{{SR::$baseUrl}}categoryAdmin/save" method="post">
    <input type="hidden" name="id" value="{{$category->id}}">
    <div class="form-group">
        <label class="col-sm-3 control-label">Name:</label>
        <div class="col-sm-8">
            <input class="form-control validate[required]" name="name" value="{{$category->name}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Parent:</label>
        <div class="col-sm-8">
            {{Form::select("category_id", array_replace(array('' => "None"), $parents), null, array('class' => 'form-control'))}}
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-8 col-sm-3">
            <button type="submit" class="form-control">Create</button>
        </div>
    </div>
</form>