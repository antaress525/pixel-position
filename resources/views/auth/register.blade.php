<x-layout>
    <x-page-heading>Register</x-page-heading>
    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Your name" name="name" />
        <x-forms.input type="email" label="Email" name="email" />
        <x-forms.input type="password" label="Password" name="password" />
        <x-forms.input type="password" label="Password confirmation" name="password_confirmation" />
        <x-forms.divider />
        <x-forms.input label="Employer name" name="employer" />
        <x-forms.input type="file" label="Employer logo" name="logo" />
        <x-forms.button>Create account</x-forms.button>
    </x-forms.form>
</x-layout>
