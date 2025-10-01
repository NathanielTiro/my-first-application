<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <!-- Create Job Button -->
    <div class="flex justify-end mb-4">
        <a href="{{ route('jobs.create') }}" 
           class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-500">
           Create Job
        </a>
    </div>

    <div class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($jobs as $job)
                <div class="bg-white rounded-lg shadow border border-gray-200">
                    <!-- Job Link & Info -->
                    <a href="/jobs/{{ $job->id }}" class="block px-4 py-6 hover:bg-gray-50">
                        <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                        <div class="mt-1">
                            <strong class="text-laracasts">{{ $job->title }}</strong> pays {{ $job->salary }} per year.
                        </div>
                    </a>

                    <!-- Tags -->
                    <div class="px-4 py-4">
                        @foreach($job->tags as $tag)
                            <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                                {{ $tag->name }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="mt-6">
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
