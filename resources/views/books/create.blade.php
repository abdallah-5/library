@extends('layouts.app')
@inject('model','App\Book')
@section('page_title')
  Create Book
@endsection

@section('content')


<!-- Main content -->

<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Create Book</h3>

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

        'action' => 'BookController@store'

        ]) !!}

        <div class="form-group">
          <label>Name</label>
          {!! Form::text('name',null,[
            'class' => 'form-control'
          ]) !!}

        </div>


        <div class="form-group">
          <label>Auther</label>
          {!! Form::text('author',null,[
            'class' => 'form-control'
          ]) !!}

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
