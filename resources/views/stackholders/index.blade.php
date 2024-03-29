@extends('layouts.app')

@section('page_title')
  Stackholder
@endsection

@section('content')


<!-- Main content -->

<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">List of Stackholders</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
      <div><a href="{{url(route('stackholder.create'))}}" class="btn btn-primary"><i class="fa fa-plus"></i> New Stackholder</a></div>
      <br>
      @include('flash::message')
      @if(count($records))
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">Name</th>
                <th class="text-center">Type</th>
                <th class="text-center">Book</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($records as $record)
                <tr>
                  <td class="text-center">{{$loop->iteration}}</td>
                  <td class="text-center">{{$record->name}}</td>
                  <td class="text-center">{{$record->type}}</td>
                  <td class="text-center">
                    <ul>
                      @foreach($record->books as $book)
                        <li><a href="{{url(route('book.edit',$book->id))}}">{{$book->name}}</a></li>
                      @endforeach
                  </u>
                  </td>
                  <td class="text-center">
                    <a href="{{url(route('stackholder.edit',$record->id))}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                  </td>

                  <td class="text-center">
                    {!! Form::open([
                        'action' => ['StackholderController@destroy',$record->id],
                        'method' => 'delete'
                      ]) !!}
                      <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                    {!! Form::close() !!}

                  </td>


                </tr>
              @endforeach
            </tbody>

          </table>

        </div>

      @else
      <div class="alert alert-danger" role="alert">
          No Data
      </div>
      @endif

    </div>
    <!-- /.card-body -->

  </div>
  <!-- /.card -->

</section>
<!-- /.content -->


@endsection
