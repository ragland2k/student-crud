<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Students
        </h2>
    </x-slot>

    <div class="p-6">
     
        <a href="{{ route('students.create') }}"
           class="inline-block mb-4 px-4 py-2 bg-blue-600 text-black rounded hover:bg-blue-700">
            Add Student
        </a>

       
        <table class="min-w-full border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2 text-left">Name</th>
                    <th class="border px-4 py-2 text-left">Email</th>
                    <th class="border px-4 py-2 text-left">Course</th>
                    <th class="border px-4 py-2 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
                <tr id="row-{{ $student->id }}">
                    <td class="border px-4 py-2">{{ $student->name }}</td>
                    <td class="border px-4 py-2">{{ $student->email }}</td>
                    <td class="border px-4 py-2">{{ $student->course }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('students.edit', $student->id) }}"
                           class="text-blue-600 mr-3">
                            Edit
                        </a>

                        <button onclick="deleteStudent({{ $student->id }})"
                                class="text-red-600">
                            Delete
                        </button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center px-4 py-4">
                        No students found.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

 
    <script>
        function deleteStudent(id) {
            if (!confirm('Are you sure you want to delete this student?')) {
                return;
            }

            fetch(`/students/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute('content'),
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById(`row-${id}`).remove();
            })
            .catch(error => {
                alert('Something went wrong!');
            });
        }
    </script>
</x-app-layout>
