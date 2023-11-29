<x-guest-layout>

    <div class="card mb-3">
        <div class="card-body">

            <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                <p class="text-center small">Enter your email & password to login</p>
            </div>            

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="col-12">
                    <x-input-label :for="'email'" :value="__('Email')" class="form-label" />
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <x-text-input type="email" name="email" class="form-control" id="email" :value="old('email')" required autofocus autocomplete="email" />
                        <div class="invalid-feedback">Please enter your email.</div>
                    </div>
                </div>

                <div class="col-12">
                    <x-input-label :for="'password'" :value="__('Password')" class="form-label" />
                    <x-text-input type="password" name="password" class="form-control" id="password" required autocomplete="current-password" />
                    <div class="invalid-feedback">Please enter your password!</div>
                </div>

                <!-- Remember Me -->
                <div hidden class="col-12">
                    <div class="form-check">
                        <x-input-label :for="'remember_me'" class="inline-flex items-center">
                            <x-text-input id="remember_me" type="checkbox" class="form-check-input" name="remember" />
                            <span class="form-check-label">{{ __('Remember me') }}</span>
                        </x-input-label>                        
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="btn btn-primary w-100">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
                
                <div class="col-12">
                    <p class="small mb-0">Don't have an account? <a href="pages-register.html">Create an account</a></p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
