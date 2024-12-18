<x-layout>
    <x-slot:heading>
        Create a User
    </x-slot:heading>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-lable for='name'>Name</x-form-lable>
                        <div class="mt-2">
                            <x-form-input name='name' id='name' placeholder="Jane doe" required></x-form-input>
                            <x-form-errors name='name'></x-form-errors>
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-lable for='email'>Email</x-form-lable>
                        <div class="mt-2">
                            <x-form-input name='email' id='email' placeholder="example@gmail.com" required></x-form-input>
                            <x-form-errors name='email'></x-form-errors>
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-lable for='password'>Password</x-form-lable>
                        <div class="mt-2">
                            <x-form-input name='password' id='password' type='password' required></x-form-input>
                            <x-form-errors name='password'></x-form-errors>
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-lable for='password_confirmation'>Confirm paasword</x-form-lable>
                        <div class="mt-2">
                            <x-form-input name='password_confirmation' id='password_confirmation' type='password' required></x-form-input>
                            <x-form-errors name='password_confirmation'></x-form-errors>
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
