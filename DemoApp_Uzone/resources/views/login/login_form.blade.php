<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインフォーム</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">

</head>

<body>
    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">login form</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus
            name="email">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
        <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-{{ date('Y') }}</p>
    </form>
</body>

</html>
