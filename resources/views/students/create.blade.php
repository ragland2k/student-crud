<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Student
        </h2>
    </x-slot>

    <div class="p-6 max-w-xl">
        <form method="POST" action="{{ route('students.store') }}">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control w-full">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control w-full">
            </div>

            <div class="mb-3">
                <label>Course</label>
                <input type="text" name="course" class="form-control w-full">
            </div>

            <button class="px-4 py-2 bg-green-600 text-black rounded">
                Save
            </button>
        </form>
    </div>
</x-app-layout>
