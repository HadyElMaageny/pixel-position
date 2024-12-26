<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="text-4xl font-bold">Find Your Dream Job</h1>
            <form action="" class="mt-6">
                <input type="text" placeholder="Search for jobs"
                       class="w-full bg-white/5 border-white/10 px-5 py-4 rounded-xl max-w-xl">
            </form>
        </section>

        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach($featuredJobs as $job)
                    <x-job-card :job="$job" />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                @foreach($tags as $tag)
                    <x-tag :$tag/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
        </section>

        <div class="mt-6 space-y-6">
            @foreach($jobs as $job)
                <x-job-card-wide :job="$job" />
            @endforeach
        </div>
    </div>
</x-layout>