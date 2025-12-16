<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Student
        </h2>
    </x-slot>

    <div class="p-6 max-w-xl">
        <form method="POST" action="{{ route('students.update', $student->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name"
                       value="{{ $student->name }}"
                       class="form-control w-full">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email"
                       value="{{ $student->email }}"
                       class="form-control w-full">
            </div>

            <div class="mb-3">
                <label>Course</label>
                <input type="text" name="course"
                       value="{{ $student->course }}"
                       class="form-control w-full">
            </div>

            <button class="px-4 py-2 bg-blue-600 text-black rounded">
                Update
            </button>
        </form>
    </div>
</x-app-layout>
