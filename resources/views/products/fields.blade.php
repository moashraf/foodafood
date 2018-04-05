<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Single Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('single_photo', 'Single Photo:') !!}
    {!! Form::file('single_photo') !!}
</div>
<div class="clearfix"></div>

<!-- Photos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photos_id', 'Photos Id:') !!}
    {!! Form::file('photos_id') !!}
</div>
<div class="clearfix"></div>

<!-- Component Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('component', 'Component:') !!}
    {!! Form::textarea('component', null, ['class' => 'form-control']) !!}
</div>

<!-- Net Weight Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Net_weight', 'Net Weight:') !!}
    {!! Form::text('Net_weight', null, ['class' => 'form-control']) !!}
</div>

<!-- Note Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Note', 'Note:') !!}
    {!! Form::text('Note', null, ['class' => 'form-control']) !!}
</div>

<!-- Packing Content Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Packing_content', 'Packing Content:') !!}
    {!! Form::text('Packing_content', null, ['class' => 'form-control']) !!}
</div>

<!-- Cat Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cat_id', 'Cat Id:') !!}
    {!! Form::select('cat_id', ['value1' => 'value1', 'value2' => 'value2', 'value3' => 'value3'], null, ['class' => 'form-control']) !!}
</div>

<!-- Lang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lang', 'Lang:') !!}
    {!! Form::select('lang', ['value1' => 'value1', 'value2' => 'value2', 'value3' => 'value3'], null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('products.index') !!}" class="btn btn-default">Cancel</a>
</div>
