<form method="POST" action="{{ route('students.update',$student->id) }}">
@csrf @method('PUT')
<input name="name" value="{{ $student->name }}" class="form-control mb-2">
<input name="email" value="{{ $student->email }}" class="form-control mb-2">
<input name="course" value="{{ $student->course }}" class="form-control mb-2">
<button class="btn btn-success">Update</button>
</form>
