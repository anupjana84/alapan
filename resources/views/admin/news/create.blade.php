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
<form  action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
              @csrf
               <div class="card card-primary p-3">
              <div class="card-header">
                <h2 class="card-title text-center">Create News</h2>
              </div>
                 
                <div class="row">
                   <div class="col-md-6">
                      <div class="form-group">
                        <label for="subcategory_id">Page No</label>
                              @php
                             $page=App\Page::all();
                             @endphp
                        <select type="text" class="form-control @error('page_no') is-invalid @enderror" name="  page_no" value="{{ old('page_no') }}"
                             required  >
                           
                             @foreach($page as $pages)
                            <option value="{{$pages->page_no}}">{{$pages->page_no}}</option>
                             @endforeach
                           </select>
                      </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                     <label for="language_id">Language</label>
                          @php
                         $language=App\Language::all();
                         @endphp
                         <select type="text" class="form-control @error('language_id') is-invalid @enderror" name="language_id" value="{{ old('language_id') }}"
                         required  >
                       
                         @foreach($language as $languages)
                        <option value="{{$languages->id}}">{{$languages->name}}</option>
                         @endforeach
                       </select>
                  </div>
                  </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                       <label for="schedule">X1 </label>
                        <input type="text" class="form-control @error('x1') is-invalid @enderror" name="x1" value="{{ old('x1') }}"
                         required   placeholder="X1">
                        @error('x1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                      
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                       <label for="schedule">Y1</label>
                        <input type="text" class="form-control @error('y1') is-invalid @enderror" name="y1" value="{{ old('y1') }}"
                         required   placeholder=" Y1 ">
                        @error('y1')
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
                       <label for="schedule">X2 </label>
                        <input type="text" class="form-control @error('x2') is-invalid @enderror" name="x2" value="{{ old('x2') }}"
                         required   placeholder="X2">
                        @error('x1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                      
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                       <label for="schedule">Y2</label>
                        <input type="text" class="form-control @error('y2') is-invalid @enderror" name="y2" value="{{ old('y2') }}"
                         required   placeholder="Y2 ">
                        @error('y2')
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
                    <label for="today_date">Today Date</label>
                    <input type="date" class="form-control @error('today_date') is-invalid @enderror" name="today_date" value="{{ old('today_date') }}"
                     required   placeholder="Today Date">
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
                    @error('news_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  </div>
                 </div>
                 <div class="row">
                 <div class="col-md-6">
                
                 </div>
                 <div class="col-md-6">
                 <div class="form-group">
                    <label for="image">Image</label>
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
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              </div>
@endsection