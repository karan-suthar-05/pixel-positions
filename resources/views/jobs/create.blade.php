<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method='post' action='/jobs'>
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$20,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="At office" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="Part time">Part time</option>
            <option value="Full time">Full time</option>
        </x-forms.select>

        <x-forms.input label="Url" name="url" placeholder="https://www.website.com" />
        <x-forms.checkbox label="Feature (Cost Extra)" name="featured" />
        <x-forms.divider />
        <x-forms.input label="Tags (Comma seprated)" name="tags" placeholder="Laracast, Video, Education" />

        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>
</x-layout>
