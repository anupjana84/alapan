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
<form  action="{{route('page.store')}}" method="post" enctype="multipart/form-data">
              @csrf
               <div class="card card-primary p-3">
              <div class="card-header">
                <h2 class="card-title text-center">Create Page</h2>
              </div>
                 
                
                  <div class="form-group">
                    <label for="page_no">Page No</label>
                    <input type="number" class="form-control @error('page_no') is-invalid @enderror" 
                    value="{{ old('page_no') }}" 
                     name="page_no" placeholder="Enter Page No"  >
                     @error('page_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                
                  
                 <div class="row">
                 <div class="col-md-6">
                 <div class="form-group">
                    <label for="today_date">Today Date</label>
                    <input type="date" class="form-control @error('today_date') is-invalid @enderror" name="today_date" value="{{ old('today_date') }}"
                     required   placeholder=" Today Date ">
                    @error('today_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                </div>
                 <div class="col-md-6">
                 <div class="form-group">
                    <label for="news_date">News Date</label>
                    <input type="date" class="form-control @error('news_date') is-invalid @enderror" name="news_date" value="{{ old('news_date') }}"
                     required   placeholder=" News Date ">
                    @error('expiry')
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
                        <label for="language_id">Language</label>
                          @php
                         $language=App\Language::all();
                         @endphp
                         <select type="tect" class="form-control @error('language_id') is-invalid @enderror" name="language_id" value="{{ old('language_id') }}"
                         required  >
                       
                         @foreach($language as $languages)
                        <option value="{{$languages->id}}">{{$languages->name}}</option>
                         @endforeach
                       </select>
                      </div>
                    </div>
                 <div class="col-md-6">
                 <div class="form-group">
                    <label for="image">Page Image</label>
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