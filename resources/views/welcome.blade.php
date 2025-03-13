<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h1 class="font-bold text-4xl">let find your next job</h1>
            <form action="" class="mt-6">
                <input type="text" placeholder="Web developper..."
                    class="w-full rounded-xl border border-white/10 px-4 py-2 bg-white/5 max-w-lg focus:outline-1 outline-blue-800">
            </form>
        </section>
        <section>
            <x-section-heading>Top Job</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-4 justify-center">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="space-x-2">
                <x-tag>Backend</x-tag>
                <x-tag>Frontend</x-tag>
                <x-tag>Manager</x-tag>
                <x-tag>Backend</x-tag>
                <x-tag>Frontend</x-tag>
                <x-tag>Manager</x-tag>
            </div>
        </section>
        <section>
            <x-section-heading>Recent Job</x-section-heading>
            <div class="space-y-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>

        </section>
    </div>
</x-layout>
