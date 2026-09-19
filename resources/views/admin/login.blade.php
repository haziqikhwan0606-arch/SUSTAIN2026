<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — SUSTAIN 2026</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #111;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        .login {
            width: min(420px, 90%);
        }

        .brand {
            margin-bottom: 50px;
        }

        .brand small {
            display: block;
            font-size: 11px;
            letter-spacing: .15em;
            opacity: .5;
            margin-bottom: 12px;
        }

        .brand h1 {
            margin: 0;
            font-size: 48px;
            line-height: .9;
            letter-spacing: -.06em;
        }

        .brand span {
            color: #c8ff00;
        }

        .login-box {
            border: 1px solid #333;
            padding: 30px;
        }

        .login-box label {
            display: block;
            margin-bottom: 8px;
            font-size: 11px;
            letter-spacing: .1em;
            opacity: .6;
        }

        .login-box input {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #444;
            background: #1b1b1b;
            color: white;
            font-size: 14px;
            outline: none;
        }

        .login-box input:focus {
            border-color: #c8ff00;
        }

        .login-box button {
            width: 100%;
            padding: 16px;
            border: none;
            background: #c8ff00;
            color: #111;
            font-weight: 800;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .login-box button:hover {
            background: white;
        }

        .error {
            margin-bottom: 20px;
            padding: 12px;
            background: #2a1616;
            border: 1px solid #663333;
            color: #ff9999;
            font-size: 13px;
        }
    </style>
</head>
<body>

<div class="login">
    <div class="brand">
        <img
            src="{{ asset('assets/images/logo.png') }}"
            alt="SUSTAIN 2026"
            style="width: 90px !important; height: auto !important; max-width: 90px !important; display: block; margin-bottom: 20px;"
        >
        <small>SUSTAIN 2026 / ADMIN</small>
        <h1>ADMIN<br><span>LOGIN.</span></h1>
    </div>

    <div class="login-box">
        @if (session('error'))
            <div class="error">
                {{ session('error') }}
            </div>
        @elseif ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf

            <label for="username">USERNAME</label>
            <input
                type="text"
                id="username"
                name="username"
                value="{{ old('username') }}"
                required
                autocomplete="username"
            >

            <label for="password">PASSWORD</label>
            <input
                type="password"
                id="password"
                name="password"
                required
                autocomplete="current-password"
            >

            <button type="submit">LOGIN &rarr;</button>
        </form>
    </div>
</div>

</body>
</html>
