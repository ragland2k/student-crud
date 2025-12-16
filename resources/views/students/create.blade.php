<form method="POST" action="{{ route('students.store') }}">
@csrf
<input name="name" class="form-control mb-2" placeholder="Name">
<input name="email" class="form-control mb-2" placeholder="Email">
<input name="course" class="form-control mb-2" placeholder="Course">
<button class="btn btn-success">Save</button>
</form>
