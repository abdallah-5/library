@extends('layouts.app')
@section('page_title')
  Edit Stackholder
@endsection

@section('content')


<!-- Main content -->

<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Edit Stackholder</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">

      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      {!! Form::model($model,[

        'action' => ['StackholderController@update', $model->id],
        'method' => 'put'


        ]) !!}

        <div class="form-group">
          <label>name</label>
          {!! Form::text('name',null,[
            'class' => 'form-control'
          ]) !!}

        </div>

        <div class="form-group">
          <label>type</label>
          {!! Form::select('type',['doc' => 'Doctor','student'=>'Student'],null, ['class'=>'form-control','placeholder'=>'Select Type']) !!}
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary"> Submit </button>
        </div>

        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->

  </div>
  <!-- /.card -->

</section>
<!-- /.content -->


@endsection
