@extends('layouts.master')
@section('content')
<div class="col-md-8 offset-2">
    @if(session('message'))
      <div class="row ">
            <div class="col-sm-6 offset-3">
      <p class="text-center bg-info ">{{session('message')}}</p>
      </div>
      </div>
      @endif
  <form  action="{{route('task.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                 <div class="card card-primary p-3">
                <div class="card-header">
                  <h2 class="card-title text-center">Create Task</h2>
                </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="subcect">Subject</label>
                           
                           <select type="text" class="form-control 
                            @error('subject') is-invalid @enderror" name="subject" value="{{old('subject') }}" required
                              >
                          
                           <option selected value="Website">Website</option>
                           <option value="App">App</option>
                           <option value="Server">Server</option>
                           <option value="Email">Email</option>
                          
                          </select>
                          @error('subject')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="heading">Heading</label>
                          <input type="text" class="form-control @error('heading') is-invalid @enderror" name="heading" 
                          value="{{ old('heading') }}"
                              placeholder=" Heading ">
                          @error('heading')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                      </div>
                    </div>
  
  
  
                   <div class="row">
                   <div class="col-md-12">
                   <div class="form-group">
                    <label for="description" class="form-label @error('description') is-invalid @enderror">Description</label>
                    <textarea class="form-control" id="desciption"
                     name="description" placeholder="Description" value="{{old('description') }}" rows="3"></textarea>
                      @error('description')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>
                  </div>
                  <div class="row">
                   <div class="col-md-12">
                   <div class="form-group">
                    <label for="image"> Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  class="form-control @error('image') is-invalid @enderror" 
                        name="image[]" multiple id="image">
                        <label class="custom-file-label" for="image">Choose Image</label>
                      </div>
                    </div>
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
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