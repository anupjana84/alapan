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
<form  action="{{ route('staff.update',$staff->id) }}" method="post" enctype="multipart/form-data">
               @csrf
              @method('PUT')
               <div class="card card-primary p-3">
              <div class="card-header">
                <h2 class="card-title text-center">Edit Staff</h2>
              </div>
                 
                
                  <div class="form-group">
                    <label for="name"> Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                    value="{{  old('name',$staff->name)}}" 
                     name="name" placeholder="Enter Name"  >
                     @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="degignation">Designation</label>
                    <input type="text"class="form-control @error('degignation') is-invalid @enderror" value="{{old('degignation',$staff->degignation) }}" 
                      name="degignation" placeholder="Enter  Designation" required >
                     @error('degignation')
                       <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="details">Details</label>
                    <textarea rows="10"  type="text" class="form-control @error('details') is-invalid @enderror" name="details" value="{{ old('details',$staff->details) }}"
                     required   placeholder="Details ">
                        {{$staff->details }}
                        </textarea>
                    @error('details')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  



                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="schedule">Extra details </label>
                        <input type="tect" class="form-control @error('name1') is-invalid @enderror" name="name1" value="{{ old('name1',$staff->name1) }}"
                          placeholder=" Extra details ">
                        @error('name1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="name3">Extra details 1</label>
                        <input type="tect" class="form-control @error('name3') is-invalid @enderror" name="name3" value="{{ old('name3',$staff->name3) }}"
                          placeholder="  Extra details 1 ">
                        @error('name3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                      </div>
                    </div>
                  </div>



               
                 <div class="row">
                 
                 <div class="col-md-6">
                 <div class="form-group">
                    <label for="image"> Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  class="form-control @error('image') is-invalid @enderror" name="image" id="image">
                        <label class="custom-file-label" for="image">Choose Image</label>
                      </div>
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