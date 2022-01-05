@extends('master')
@section('content')
<div class="col-md-6 offset-3">
  @if(session('message'))
    <div class="row ">
          <div class="col-sm-6 offset-3">
    <p class="text-center bg-info ">{{session('message')}}</p>
    </div>
    </div>
    @endif
              <form  action="{{route('slider.update',$slider->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                <div class="card-body">
                   <div class="card card-primary p-3">
              <div class="card-header">
                <h2 class="card-title text-center">Edit Slider</h2>
              </div>
                 <div class="form-group">
                    <label for="discount">Name</label>
                    <input type="text"  class="form-control @error('discount') is-invalid @enderror" 
                    name="name" value="{{ old('discount',$slider->name) }}">
                    @error('discount')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                 
                
                 <div class="form-group">
                    <label for="image">Product Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  class="form-control @error('image') is-invalid @enderror" name="image" 
                        id="image">
                        <label class="custom-file-label" for="image">Choose Image</label>
                      </div>
                    
                  </div>
                  @error('image')
                        <p class="invalid-feedback" style="display:block" role="alert">
                            <strong>{{ $message }}</strong>
                        </p>
                      @enderror
                </div>
                 </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
             </div>
@endsection