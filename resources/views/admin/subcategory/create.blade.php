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
                <h3 class="card-title text-center">Category Create</h3>
              </div>
              <form  action="{{ route('subcategory.store') }}" method="post">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name"> Sub Category Name</label>
                    <input class="form-control @error('name') is-invalid @enderror" name="name"
                     value="{{ old('name') }}" required placeholder="Enter Sub Category" >
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                   @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">Category Name</label>
                    <select class="form-control @error('category_id') is-invalid @enderror"
                     name="category_id">
                      @php 
                      $sub_cat=DB::table('categories')->get();
                      @endphp
                      <option value="1">Select</option>
                      @foreach($sub_cat as $cat)
                      <option value="{{$cat->id}}">{{$cat->name}}</option>
                     <option value="{{$cat->id}}">{{$cat->name}}</option>
                
                     @endforeach
                     </select>
                 
                  </div>
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Sub Category Save</button>
                </div>
              </form>
           </div>
      </div>
@endsection