@extends('master')
@section('content')
<div class="col-md-6 offset-3">
  @if(session('message'))
    <div class="row ">
          <div class="col-sm-4 offset-4">
    <p class="text-center bg-info ">{{session('message')}}</p>
    </div>
    </div>
    @endif
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title text-center">Category Edit </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('category.update',$category->id) }}" method="post" >
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Category Name</label>
                    <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$category->name) }}" required >
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                             </span>
                    @enderror
                  </div>
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
      </div>
@endsection