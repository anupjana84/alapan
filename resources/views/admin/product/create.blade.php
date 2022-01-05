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
<form  action="" method="post" enctype="multipart/form-data">
              @csrf
               <div class="card card-primary p-3">
              <div class="card-header">
                <h2 class="card-title text-center">Create Staff</h2>
              </div>
                 
                
                  <div class="form-group">
                    <label for="product_name"> Name</label>
                    <input type="text" class="form-control @error('product_name') is-invalid @enderror" 
                    value="{{ old('product_name') }}" 
                     name="product_name" placeholder="Enter Name"  >
                     @error('productName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="composition">Product Composition</label>
                    <input type="text"class="form-control @error('composition') is-invalid @enderror" value="{{ old('composition') }}" 
                      name="composition" placeholder="Enter Product Composition" required >
                     @error('composition')
                       <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="price">Product Company Name</label>
                    <input type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}"
                     required   placeholder="Company Name ">
                    @error('companyName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  



                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="schedule">Extra details </label>
                        <input type="tect" class="form-control @error('schedule') is-invalid @enderror" name="schedule" value="{{ old('schedule') }}"
                         required   placeholder=" Schedule ">
                        @error('schedule')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="manufacturer">Extra details 1</label>
                        <input type="tect" class="form-control @error('manufacturer') is-invalid @enderror" name="manufacturer" value="{{ old('manufacturer') }}"
                         required   placeholder=" Manufacturer ">
                        @error('manufacturer')
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
                    <label for="image">Product Image</label>
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