<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sportistic</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="bg-theme text-light">
    <main class="flex font-poppins h-screen">
        <!-- Left Image Section -->
        <div class="w-1/2 relative bg-theme">
            <img src="{{ asset('assets/Right Side.png') }}"
                alt="Illustration of a person in sports attire jumping with a dynamic background"
                class="absolute h-full object-cover" />
        </div>
        <!-- Right Form Section -->
        <div class="w-1/2 flex items-center justify-center" style="min-height: 100vh;">
            <div class="w-3/4">
                <div class="logo-wrap text-center mb-8">
                    <img src="{{ asset('assets/logo.png') }}" alt="Sportistic Logo" class="mx-auto mb-4" width="200"
                        height="50" />
                    <h2 class="button text-4xl  font-bold ">SIGN UP</h2>
                    <p class="">Welcome back! Please enter your details.</p>
                </div>
                {{-- pengecekan harus mengisi username, email dan password --}}
                @if (
                    $errors->has('email') ||
                        $errors->has('nama') ||
                        $errors->has('password') ||
                        $errors->has('confirm_pasword') ||
                        $errors->has('login'))
                    <div class="text-red-500 text-sm">

                        @if ($errors->has('login'))
                            <ul>
                                <li>{{ $errors->first('login') }}</li>
                            </ul>
                        @endif
                    </div>
                @endif
                <form action="{{ route('registrasi.submit') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="username" class="block  mb-2">Username</label>
                        <input type="text" value="{{ old('name') }}" name="name"
                            placeholder="Enter your username"
                            class="w-full px-4 py-2 text-light bg-theme border rounded-lg focus:outline-none focus:border-gray-500" />
                        @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block  mb-2">Email</label>
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
                    <div class="mb-6">
                        <label for="confirm-password" class="block  mb-2">Confirm Password</label>
                        <input type="password" name="confirm_password" placeholder="********"
                            class="w-full px-4 py-2 text-light bg-theme border rounded-lg focus:outline-none focus:border-gray-500" />
                        @error('confirm_password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <button type="submit"
                            class="w-full py-2 bg-button text-gray-900 font-bold rounded-lg hover:bg-yellow-600">
                            Sign up
                        </button>
                    </div>
                    <div class="mb-4">
                        <button type="button"
                            class="w-full py-2 bg-theme font-bold rounded-lg flex items-center border justify-center hover:bg-yellow-600 ">
                            <img src="{{ asset('assets/icons/google.png') }}" alt="Google Logo" class="w-5 h-5 mr-2" />
                            Sign up with Google
                        </button>
                    </div>
                    <div class="text-center">
                        <p class="text-secondary">
                            Already have an account?
                            <a href="#" class="text-light">Sign in now!</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
