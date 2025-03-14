@props(['job'])
<div
    class="flex flex-col p-4 text-center bg-white/5 rounded-xl border border-transparent hover:border-blue-800 transition-colors duration-500 group">
    <div>
        <div class="text-start text-sm">{{ $job->employer->name }}</div>
        <div class="p-8">
            <h3 class="group-hover:text-blue-800 transition-colors duration-500 font-bold text-xl">
                <a href="{{ $job->url }}" target="blank">{{ $job->title }}</a>
            </h3>
            <p>{{ $job->salary }}</p>
        </div>
        <div class="flex justify-between items-center  mt-autos">
            <div class="space-x-2">
                @foreach ($job->tags as $tag)
                    <x-tag size="small" :$tag></x-tag>
                @endforeach
            </div>
            <x-employer-logo :width="42" :employer="$job->employer" />
        </div>
    </div>
</div>
