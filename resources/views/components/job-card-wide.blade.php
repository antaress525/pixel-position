@props(['job'])
<div
    class="flex p-4 gap-x-6 bg-white/5 rounded-xl border border-transparent hover:border-blue-800 transition-colors duration-500 group">
    <x-employer-logo :width="90" :employer="$job->employer" />
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>
        <h3 class="font-bold text-lg group-hover:text-blue-800 transition-colors duration-500">
            <a href="{{ $job->url }}" target="blank">{{ $job->title }}</a>
        </h3>
        <p class="text-gray-400 mt-auto">{{ $job->salary }}</p>
    </div>
    <div>
        @foreach ($job->tags as $tag)
            <x-tag :$tag></x-tag>
        @endforeach
    </div>
</div>
