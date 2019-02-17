
<div class="form-group {{ $errors->has('EmployeeId') ? 'has-error' : '' }}">
    <label for="EmployeeId" class="col-md-2 control-label">Employee Id</label>
    <div class="col-md-10">
        <input class="form-control" name="EmployeeId" type="text" id="EmployeeId" value="{{ old('EmployeeId', optional($employee)->EmployeeId) }}" minlength="1" required="true" placeholder="Enter employee id here...">
        {!! $errors->first('EmployeeId', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($employee)->name) }}" minlength="1" maxlength="255" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Title</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($employee)->title) }}" minlength="1" maxlength="255" placeholder="Enter title here...">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ManagerId') ? 'has-error' : '' }}">
    <label for="ManagerId" class="col-md-2 control-label">Manager Id</label>
    <div class="col-md-10">
        <input class="form-control" name="ManagerId" type="number" id="ManagerId" value="{{ old('ManagerId', optional($employee)->ManagerId) }}" placeholder="Enter manager id here...">
        {!! $errors->first('ManagerId', '<p class="help-block">:message</p>') !!}
    </div>
</div>

