<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto@100;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-gray-300" style="font-family:Roboto">
    <div class="w-full h-screen flex items-center justify-center">

        <form method="POST" class="w-full md:w-1/3 bg-white rounded-lg" action="{{ route('login') }}">
            @csrf
            <div class="flex font-bold justify-center mt-6">
                <img class="h-20 w-20"
                    src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/avatar.svg">
            </div>
            <h2 class="text-3xl text-center text-gray-700 mb-4">Login Form</h2>
            <x-jet-validation-errors class="m-4" />
            @if (session('status'))
                <div class="m-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <div class="px-12 pb-10">
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <i class='ml-3 fill-current text-gray-400 text-xs z-10 fas fa-user'></i>
                        <input placeholder="Email" id="email" type="email" name="email" :value="old('email')"
                            class="-mx-6 px-8  w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
                            required />
                    </div>
                </div>
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <i class='ml-3 fill-current text-gray-400 text-xs z-10 fas fa-lock'></i>
                        <input type='password' placeholder="Password" id="password"
                            class="-mx-6 px-8 w-full border rounded px-3 py-2 text-gray-700 focus:outline-none"
                            name="password" required autocomplete="current-password" />
                    </div>
                </div>
                <a href="{{ route('password.request') }}" class="text-xs text-gray-500 float-right mb-4">Forgot
                    Password?</a>
                <button type="submit" class="w-full py-2 rounded-full bg-green-600 text-gray-100  focus:outline-none">
                    {{ __('Log in') }}</button>
        </form>
    </div>
</body>

</html>
