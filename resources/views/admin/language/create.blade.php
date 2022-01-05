@extends('master')
@section('content')
<div class="col-md-8 offset-2">
  @if(session('message'))
    <div class="row ">
          <div class="col-sm-6 offset-3">
    <p class="text-center bg-info ">{{session('message')}}</p>
    </div>
    </div>
    @endif
<form  action="{{route('language.store')}}" method="post" >
              @csrf
               <div class="card card-primary p-3">
              <div class="card-header">
                <h2 class="card-title text-center">Category Language</h2>
              </div>
                 
                
                  <div class="form-group">
                    <label for="name">Language Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                    value="{{ old('name') }}" 
                     name="name" placeholder="Enter Language Name"  >
                     @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                 
                 



                 



                 
                
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              </div>
@endsection