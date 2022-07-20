<x-authentication-layout>
    <h1 class="text-3xl text-slate-800 font-bold mb-6">{{ __('Confirm access') }} ✨</h1>
    <div x-data="{ recovery: false }">
        <div class="mb-4" x-show="! recovery">
            {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
        </div>

        <div class="mb-4" x-show="recovery">
            {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
        </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('two-factor.login') }}">
            @csrf
            <div class="space-y-4">
                <div x-show="! recovery">
                    <x-jet-label for="code" value="{{ __('Code') }}" />
                    <x-jet-input id="code" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                </div>
                <div x-show="recovery">
                    <x-jet-label for="recovery_code" value="{{ __('Recovery Code') }}" />
                    <x-jet-input id="recovery_code" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                </div>
            </div>
            <div class="flex items-center justify-end mt-6">
                <button type="button" class="text-sm underline hover:no-underline"
                    x-show="! recovery"
                    x-on:click="
                        recovery = true;
                        $nextTick(() => { $refs.recovery_code.focus() })
                    ">
                    {{ __('Use a recovery code') }}
                </button>

                <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                    x-show="recovery"
                    x-on:click="
                        recovery = false;
                        $nextTick(() => { $refs.code.focus() })
                    ">
                    {{ __('Use an authentication code') }}
                </button>

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </div>
</x-authentication-layout>
