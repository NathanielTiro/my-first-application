<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Edit Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Update the details for this job.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <!-- Title -->
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">
                            Title
                        </label>
                        <div class="mt-2">
                            <input type="text" 
                                   name="title" 
                                   id="title" 
                                   value="{{ old('title', $job->title) }}" 
                                   required
                                   class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                        </div>
                        @error('title')
                        <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Salary -->
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">
                            Salary
                        </label>
                        <div class="mt-2">
                            <input type="text" 
                                   name="salary" 
                                   id="salary" 
                                   value="{{ old('salary', $job->salary) }}" 
                                   required
                                   class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                        </div>
                        @error('salary')
                        <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold text-gray-900">Cancel</a>
            <button type="submit" 
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500">
                Update
            </button>

            <!-- Delete Button -->
            <button form="delete-form" type="submit" 
                    class="ml-4 text-red-500 font-semibold">Delete</button>
        </div>
    </form>

    <!-- Hidden Delete Form -->
    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
