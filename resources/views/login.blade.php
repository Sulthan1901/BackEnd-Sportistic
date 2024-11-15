<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Sportistic</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet" />
</head>

<body class="bg-theme text-light">
    <main class="flex font-poppins h-screen">
        <!-- Left Form Section -->
        <div class="w-1/2 flex items-center justify-center" style="min-height: 100vh;">
            <div class="w-3/4">
                <div class="logo-wrap text-center mb-8">
                    <img src="{{ asset('assets/logo.png') }}" alt="Sportistic Logo" class="mx-auto mb-4" width="200"
                        height="50" />
                    <h2 class="button text-4xl  font-bold ">WELCOME BACK</h2>
                    <p class="">Welcome back! Please enter your details.</p>
                </div>
                {{-- pengecekan harus mengisi email dan password --}}
                @if ($errors->has('email') || $errors->has('password') || $errors->has('login'))
                    <div class="text-red-500 text-sm">
                        @if ($errors->has('login'))
                            <ul>
                                <li>{{ $errors->first('login') }}</li>
                            </ul>
                        @endif
                    </div>
                @endif

                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block mb-2">Email</label>
                        <input type="email" value="{{ old('email') }}" name="email" placeholder="Enter your email"
                            class="w-full px-4 py-2 text-light bg-theme border rounded-lg focus:outline-none focus:border-gray-500" />
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block mb-2">Password</label>
                        <input type="password" name="password" placeholder="********"
                            class="w-full px-4 py-2 text-light bg-theme border rounded-lg focus:outline-none focus:border-gray-500" />
                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex items-center mb-4">
                        <input type="checkbox" name="remember-me" class="mr-2" />
                        <label for="remember-me" class="text-light">Remember Me</label>
                        <a href="#" class="ml-auto text-secondary">Forgot Password?</a>
                    </div>
                    <div class="mb-4">
                        <button type="submit"
                            class="w-full py-2 bg-button text-gray-900 font-bold rounded-lg hover:bg-yellow-600">
                            Login
                        </button>
                    </div>
                    <div class="mb-4">
                        <button type="button"
                            class="w-full py-2 bg-theme font-bold rounded-lg flex items-center border justify-center hover:bg-yellow-600">
                            <img src="{{ asset('assets/icons/google.png') }}" alt="Google Logo" class="w-5 h-5 mr-2" />
                            Login with Google
                        </button>
                    </div>
                    <div class="text-center">
                        <p class="text-secondary">
                            Don't have an account?
                            <a href="#" class="text-light">Sign up for free!</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <!-- Rigt Image Section -->
        <div class="w-1/2 relative bg-theme flex justify-end">
            <img src="{{ asset('assets/Right Side.png') }}"
                alt="Illustration of a person in sports attire jumping with a dynamic background"
                class="h-full object-cover" />
        </div>
    </main>
</body>

</html>