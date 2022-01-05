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
                <h3 class="card-title text-center"> Create</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{ route('labimage.store') }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name"> Name</label>
                    <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required >
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                   <div class="form-group">
                    <label for="image">Product Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  class="form-control @error('image') is-invalid @enderror" name="image" id="image">
                        <label class="custom-file-label" for="image">Choose Image</label>
                      </div>
                      
                    </div>
                    @error('image')
                        <span class="form-group" style="color:red;" role="alert">
                          <p  class="text-info" style="color:red;">{{ $message }}</p>
                        </span>
                    @enderror
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
      </div>
@endsection