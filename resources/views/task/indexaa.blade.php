@extends('layouts.master')
@section('content')<div class="card-body" style="padding-right: 0;padding-left: 0; margin-top: 10px;" >
    <div id="example2_wrapper" class="dataTables_wrapper data-table1 dt-bootstrap4">
        <div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6">
            </div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
      <thead>
      @php
      $i=1
      @endphp
      <tr role="row">
      <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
       aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
      No</th>
       <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" 
       aria-label="Browser: activate to sort column ascending"> Subject</th><th class="sorting"
        tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): 
        activate to sort column ascending">Heading </th>
       
        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
         aria-label="Engine version: activate to sort column ascending"> Description</th>
         <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
         aria-label="CSS grade: activate to sort column ascending">Status</th>
         
         <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
          aria-label="CSS grade: activate to sort column ascending">Image</th>
         
          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
          aria-label="CSS grade: activate to sort column ascending">Action</th>
          </tr>
      </thead>
      <tbody>
        @foreach($tasks as $task)
      <tr role="row" class="odd">
        <td tabindex="0" class="sorting_1">{{$i++}}</td>
        <td>{{$task->subject}}</td>
        <td>{{$task->heading}}</td>
        
        <td>{{$task->description}}</td>
        <td>{{$task->status}}</td>
        @php
        $img=explode(",",$task->image);
        @endphp
        <td>
            @foreach ($img as $value)
            <img style="width:50px; height:50px;" src="{{url('image/'.$value)}}"/>
            @endforeach
        </td>
        <td> <button class="btn btn-danger 
         fa fa-trash-alt"  href="javascript:;" onclick="confirmDelete('{{$task->id}}')">
         <span class="ml-1">Delete</span>
       
         <form id="delete-task-{{$task->id}}" action="{{route('task.destroy', $task->id)}}"
         method="POST" style="display: none;">

          @method('DELETE')
           @csrf
         </form>
        </button>
        @can('view',$task)
        <a class="btn btn-info fa fa-edit" href="{{route('task.edit', $task->id)}}">
        <span class="ml-1">Edit</span></a>
        @endcan
      </td>
      </tr>
      @endforeach
      </tbody>
      <tfoot>
      </tfoot>
    </table>
    </div>
   
    </div>
    <div class="row">
    <div class="col-sm-12 col-md-5">
      
    </div>
    <div class="col-sm-12 col-md-7">
       
            
           
  </div>
  <!-- /.card-body -->

<!-- /.card -->


@endsection


<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$('.dataTable').DataTable();



  function confirmDelete(id){
    //console.log(id)
    let choice = confirm("Are You sure, You want to Delete this Product ?")
    if(choice){
      document.getElementById('delete-task-'+id).submit();
    }
  }
</script>