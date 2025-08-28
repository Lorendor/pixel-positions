<x-layout>
    <x-forms.page-heading>Results</x-forms.page-heading>

    <div class="space-y-3">
        @foreach($jobs as $job)
            <x-job-card-wide :$job/>
    @endforeach
</x-layout>
