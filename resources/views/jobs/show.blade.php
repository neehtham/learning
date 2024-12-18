<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{ $job->title }}</h2>
    <p>
        This job pays {{ $job->salary }} per year.
    </p>

    <div class="my-6">
        <x-buttons href="/jobs/{{ $job->id }}/edit">Edit job</x-buttons>
    </div>
</x-layout>
