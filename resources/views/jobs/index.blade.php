<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h1 class="font-bold text-4xl">let find your next job</h1>
            <x-forms.form action="/search" class="mt-6">
                <input type="text" name="q" placeholder="Web developper..."
                    class="w-full rounded-xl border border-white/5 px-4 py-2 bg-white/5 max-w-lg focus:outline-1 outline-blue-800">
            </x-forms.form>
        </section>
        <section>
            <x-section-heading>Top Job</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-4 justify-center">
                @foreach ($featuredjobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="space-x-2">
                @foreach ($tags as $tag)
                    <x-tag :$tag></x-tag>
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Recent Job</x-section-heading>
            <div class="space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
