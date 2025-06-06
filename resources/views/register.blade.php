<x-layout>
    <form action="register" method="post">
        @csrf
        <div class="flex place-content-center mt-15">

            <div class="place-items-center mr-15 p-8 rounded-xl bg-sky-100">

                <div>
                    <p class="text-center font-bold text-2xl mb-5">Register</p>
                </div>
                
                <div class="place-items-center">
                    <fieldset class="fieldset w-xs bg-base-200 border border-base-300 p-4 rounded-box">
                        <legend class="fieldset-legend"></legend>
                        
                        <label class="fieldset-label">Username</label>
                        <input type="text" class="input" name="username" placeholder="z.B.: LewisHamilton44" />
                        @error('username')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                        
                        <label class="fieldset-label">Password</label>
                        <input type="password" class="input" placeholder="Password" name="password" />
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                        
                        <button class="btn hover:bg-blue-400 hover:text-white hover:border-2 hover:border-blue-900 mt-4">Register</button>
                    </fieldset>
                </div>
            </div>
        </div>
    </form>
</x-layout>