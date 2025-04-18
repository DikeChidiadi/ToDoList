<x-layout>
    <form action="home" method="post">
        @csrf
        <div>

            <div>
                <p class="text-center font-bold text-2xl mb-5">Login</p>
            </div>

            <div class="place-items-center">
                <fieldset class="fieldset w-xs bg-base-200 border border-base-300 p-4 rounded-box">
                    <legend class="fieldset-legend"></legend>
                    
                    <label class="fieldset-label">Username</label>
                    <input type="text" class="input" placeholder="z.B.: Lewis" />
                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    
                    <label class="fieldset-label">Password</label>
                    <input type="password" class="input" placeholder="Password" name="password" />
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                    <label class="fieldset-label">Confirm Password</label>
                    <input type="password" class="input" placeholder="Password" name="password_confirmation" />
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    
                    <button class="btn hover:bg-sky-400 hover:text-white hover:border-2 hover:border-blue-800 mt-4">Login</button>
                </fieldset>
            </div>

        </div>
    </form>
    
</x-layout>