@extends('layouts.app')
@section('content')

<a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add Student</a>

<table class="table table-bordered">
<tr>
<th>Name</th><th>Email</th><th>Course</th><th>Action</th>
</tr>

@foreach($students as $student)
<tr id="row{{ $student->id }}">
<td>{{ $student->name }}</td>
<td>{{ $student->email }}</td>
<td>{{ $student->course }}</td>
<td>
<a href="{{ route('students.edit',$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
<button class="btn btn-sm btn-danger delete" data-id="{{ $student->id }}">Delete</button>
</td>
</tr>
@endforeach
</table>

<script>
$('.delete').click(function(){
 if(confirm('Delete student?')){
  let id = $(this).data('id');
  $.ajax({
   url:'/students/'+id,
   type:'DELETE',
   data:{ _token:$('meta[name="csrf-token"]').attr('content') },
   success:function(){
     $('#row'+id).remove();
   }
  });
 }
});
</script>
@endsection
