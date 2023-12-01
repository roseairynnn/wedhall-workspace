<x-guest-layout>
    <div class="card mb-3">
        <div class="card-body">
            <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                <p class="text-center small">Enter your personal details to create account</p>
            </div>

            <!-- REGISER FORM -->
            <form method="POST" action="{{ route('register') }}" class="row g-3 needs-validation">
                @csrf

                <!-- Name -->
                <div class="col-12">
                    <x-input-label for="name" :value="__('Name')" class="form-label"/>
                    <div class="input-group has-validation">
                        <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                </div>

                <!-- Email Address -->
                <div class="col-12">
                    <x-input-label for="email" :value="__('Email')" class="form-label"/>
                    <div class="input-group has-validation">
                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
        
                <div class="col-12">
                    <x-input-label :for="'password'" :value="__('Password')" class="form-label" />
                    <div class="input-group has-validation">
                        <x-text-input type="password" name="password" class="form-control" id="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="col-12">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="form-label" />
                    <div class="input-group has-validation">
                        <x-text-input id="password_confirmation" class="form-control"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="btn btn-primary w-100">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
