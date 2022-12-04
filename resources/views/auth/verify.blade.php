<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
     @vite('resources/css/app.css')
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div class="container pt-20">
    <div class="w-full lg:w-2/3 lg:mx-auto">
        <div class="w-full px-4 mb-8">
            <div class="max-w-lg rounded overflow-hidden shadow-lg mx-auto p-10">
                <div class="font-bold">{{ __('Varifikasi Email Anda') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Silahkan cek Email anda untuk melanjutkan.') }}
                    {{ __('Jika Anda Tidak menerima Email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="bg-primary text-white p-3 rounded-full mt-3 hover:opacity-80">{{ __('klik disini') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


