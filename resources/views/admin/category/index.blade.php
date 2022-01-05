@extends('master')
@section('content')
 @if(session('message'))
    <div class="row ">
          <div class="col-sm-6 offset-3">
    <p class="text-center bg-info ">{{session('message')}}</p>
    </div>
    </div>
    @endif
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Category</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6">
                </div>
                <div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12">
                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" 
                aria-describedby="example2_info">
                  <thead>
                  <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" 
                     colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                      Id</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" 
                  aria-label="Browser: activate to sort column ascending">Name
                  </th>
                  <th class="sorting" tabindex="0" 
                  aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): 
                  activate to sort column ascending">Action</th>
                 
                  
                    </tr>
                  </thead>
                  <tbody>
                  @php
                  $i=1;
                  @endphp
                  @foreach($categories as $category)
                  <tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1">{{$i++}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                    
                    
              
                    
                    <button class="btn btn-danger 
                     fa fa-trash-alt"  href="javascript:;" onclick="confirmDelete('{{$category->id}}')">
                     <span class="ml-1">Delete</span>
                   
                     <form id="delete-category-{{$category->id}}" action="{{route('category.destroy', $category->id)}}"
                     method="POST" style="display: none;">
          
                      @method('DELETE')
                       @csrf
                     </form>
                    </button>
                    <a class="btn btn-info fa fa-edit" href="{{route('category.edit',$category->id)}}">
                    <span class="ml-1">Edit</span></a>
                    </td>
                  
                
               @endforeach
              
                  </table>
                </div>
                </div>
                <div class="row">
                <div class="col-sm-12 col-md-5">
               
                </div>
                <div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination">
              
             
              {{$categories->links()}}
            </div>
            <!-- /.card -->

          

@endsection
@section('script')
<script type="text/javascript">
  function confirmDelete(id){
    //console.log(id)
    let choice = confirm("Are You sure, You want to Delete this Product ?")
    if(choice){
      document.getElementById('delete-category-'+id).submit();
    }
  }
</script>
@endsection