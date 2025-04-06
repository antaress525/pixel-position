<x-layout>
    <x-page-heading>New job</x-page-heading>
    <x-forms.form method="POST" action="/jobs" enctype="multipart/form-data">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$50,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="New york" />
        <x-forms.select label="Schedule" name="schedule">
            <option>Part time</option>
            <option>Full time</option>
        </x-forms.select>
        <x-forms.input label="URL" name="url" placeholder="http://127.0.0.1:8000/jobs/create" />
        <x-forms.checkbox label="Featured (cost extra)" name="featured" />
        <x-forms.divider />
        <x-forms.input label="Tag (comma separeted)" name="tags" placeholder="Programmer,Teacher" />
        <x-forms.button>publish</x-forms.button>
    </x-forms.form>
</x-layout>
