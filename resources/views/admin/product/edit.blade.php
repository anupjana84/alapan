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
              <form  action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                <div class="card-body">
                   <div class="card card-primary p-3">
              <div class="card-header">
                <h2 class="card-title text-center">Edit Product</h2>
              </div>
                  <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" class="form-control @error('product_name') is-invalid @enderror" 
                    value="{{ old('productName',$product->product_name) }}" 
                     name="product_name" value="{{$product->product_name}}" placeholder="{{$product->product_name}}"  >
                     @error('productName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="composition">Product Composition</label>
  <input type="text"class="form-control @error('composition') is-invalid @enderror" value="{{old('composition',$product->composition) }}" 
                     id="productName" name="composition"  placeholder="{{$product->composition}}"  >
                     @error('composition')
                       <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="company_name">Product Company Name</label>
                    <input type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name"  value="{{ old('company_name',$product->company_name) }}"
                        placeholder="{{$product->company_name}}">
                    @error('companyName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="category_id">Category</label>
                         @php
                         $category=App\Category::all();
                         @endphp
                        <select type="tect" class="form-control @error('category_id') is-invalid @enderror" name="category_id" value="{{old('category_id',$product->category_id) }}"
                           >
                        
                         @foreach($category as $categories)
                          <option value="{{$categories->id}}">{{$categories->name}}</option>
                         @endforeach
                       </select>
                      
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="subcategory_id">Sub Category</label>
                         @php
                         $Subcategory=App\Subcategory::all();
                         @endphp
                         <select type="tect" class="form-control @error('subcategory_id') is-invalid @enderror" name="subcategory_id" value="{{ old('subcategory_id',$product->subcategory_id) }}"
                           >
                        
                         @foreach($Subcategory as $Subcategories)
                         <option value="{{$Subcategories->id}}">{{$Subcategories->name}}</option>
                         @endforeach
                       </select>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <label for="schedule">Product Schedule</label>
                    <input type="tect" class="form-control @error('schedule') is-invalid @enderror" name="schedule" 
                     value="{{ old('schedule',$product->schedule) }}"
                        placeholder="{{$product->schedule}}">
                    @error('schedule')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="manufacturer">Product Manufacturer</label>
                    <input type="tect" class="form-control @error('manufacturer') is-invalid @enderror" name="manufacturer" value="{{ old('manufacturer',$product->manufacturer)}}"
                        placeholder="{{$product->manufacturer}}">
                    @error('manufacturer')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                 <div class="row">
                 <div class="col-md-6">
                 <div class="form-group">
                    <label for="expiry">Expiry</label>
                    <input type="date" class="form-control @error('expiry') is-invalid @enderror" name="expiry" value="{{ old('expiry',$product->expiry) }}"
                        placeholder=" Manufacturer ">
                    @error('expiry')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div></div>
                 <div class="col-md-6">
                 <div class="form-group">
                    <label for="mrp">MRP</label>
                    <input type="number" class="form-control @error('mrp') is-invalid @enderror" name="mrp" value="{{ old('mrp',$product->mrp) }}"
                        placeholder="{{$product->mrp}}">
                    @error('mrp')
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
                    <label for="discount">Discount</label>
                    <input type="number" class="form-control @error('discount') is-invalid @enderror" name="discount" value="{{ old('discount',$product->discount) }}"
                       placeholder="{{$product->discount}}">
                    @error('discount')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                 </div>
                 <div class="col-md-6">
                 <div class="form-group">
                    <label for="image">Product Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  class="form-control @error('image') is-invalid @enderror" name="image" 
                        id="image">
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