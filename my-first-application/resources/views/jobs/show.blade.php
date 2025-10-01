<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <p class="text-sm text-gray-500">{{ $job->employer->name }}</p>
    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>

    <!-- Edit Job Button -->
    <a href="/jobs/{{ $job->id }}/edit" 
       class="inline-block mt-4 px-4 py-2 bg-yellow-400 text-white rounded hover:bg-yellow-500">
       Edit Job
    </a>
</x-layout>
