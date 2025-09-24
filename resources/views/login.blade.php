<x-layout>
    <form action="/login" method="post">
        @csrf
        
        <div class="flex place-content-center mt-15">
            <div class="place-items-center mr-15 p-8 rounded-xl shadow-xl bg-sky-100">
                <div>
                    <p class="text-center font-bold text-2xl">Login</p>
                </div>
                
                <div class="place-items-center">
                    <fieldset class="fieldset w-xs bg-sky-100 p-4 rounded-box">
                        <label class="fieldset-label">Username</label>
                        <input type="text" class="input" name="username" placeholder="Your Username" value="{{ old('username') }}" required />
                        
                        <label class="fieldset-label mt-4">Password</label>
                        <input type="password" class="input" placeholder="Password" name="password" required />

                        @error('username')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                        
                        <button type="submit" class="btn btn-primary w-full mt-6">Login</button>
                    </fieldset>
                </div>
            </div>
        </div>
    </form>
</x-layout>