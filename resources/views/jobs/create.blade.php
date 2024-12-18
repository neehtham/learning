<x-layout>
    <x-slot:heading>
        Create a job
    </x-slot:heading>
    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Add a job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">Please fill these info </p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-lable for='title'>Title</x-form-lable>
                        <div class="mt-2">
                            <x-form-input name='title' id='title' placeholder="Worker"></x-form-input>
                            <x-form-errors name='title'></x-form-errors>
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-lable for='salary'>Salary</x-form-lable>
                        <div class="mt-2">
                            <x-form-input name='salary' id='salary' placeholder="90000"></x-form-input>
                            <x-form-errors name='salary'></x-form-errors>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <x-form-buttons>Save</x-form-buttons>
        </div>
    </form>

</x-layout>
