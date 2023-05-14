<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('styles/loginregister.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Register</title>
</head>
<body class="login-register-bg">
    <div class="d-flex justify-content-lg-end justify-content-center py-lg-0 py-4 logreg-container">
        <div class="login-register-form-bg d-flex align-items-center justify-content-center flex-column">
            <h2 class="fw-bold">DAFTAR</h2>

            <div class="line1 mx-4"></div>
            <h5 class="fw-semibold mt-3 text-center mx-5">Promote Your <span class="color-aqua fw-bold">Start Up</span> And Gain <span class="color-aqua fw-bold">Investors</span></h5>
            <form action="{{ route('register') }}" method="post" class="w-75">
                @csrf
                <div class="mb-3 mt-4">
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Nama" required autofocus>
                    <small class="text-danger">
                    @foreach ($errors->get('name') as $err)
                        @if ($loop->iteration > 1)
                            <br/>
                        @endif
                        {{ $err }}
                    @endforeach
                    </small>
                </div>
                <div class="mb-3 mt-4">
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
                    <small class="text-danger">
                    @foreach ($errors->get('email') as $err)
                        @if ($loop->iteration > 1)
                            <br/>
                        @endif
                        {{ $err }}
                    @endforeach
                    </small>
                </div>
                <div class="mb-3 mt-4">
                    <input type="tel" class="form-control" id="inputPhoneNumber" name="phone_number" placeholder="Phone Number" required>
                    <small class="text-danger">
                    @foreach ($errors->get('phone_number') as $err)
                        @if ($loop->iteration > 1)
                            <br/>
                        @endif
                        {{ $err }}
                    @endforeach
                    </small>
                </div>
                <div class="mb-3 mt-4">
                    <input type="number" class="form-control" id="inputBankAccountNumber" name="bank_account_number" placeholder="No Rekening BCA" required>
                    <small class="text-danger">
                    @foreach ($errors->get('bank_account_number') as $err)
                        @if ($loop->iteration > 1)
                            <br/>
                        @endif
                        {{ $err }}
                    @endforeach
                    </small>
                </div>
                <div class="mb-3">
                    <select name="role" class="form-select  fw-medium" id="selectRole">
                        <option value="Tenant" class=" fw-medium">Tenant</option>
                        <option value="Host" class=" fw-medium">Host</option>
                    </select>
                    <small class="text-danger">
                        @foreach ($errors->get('role') as $err)
                            @if ($loop->iteration > 1)
                                <br/>
                            @endif
                            {{ ucfirst($err) }}
                        @endforeach
                    </small>
                </div>
                <div class="mb-3 mt-4">
                    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Kata Sandi" required autocomplete="new-password">
                    <small class="text-danger">
                    @foreach ($errors->get('password') as $err)
                        @if ($loop->iteration > 1)
                            <br/>
                        @endif
                        {{ $err }}
                    @endforeach
                    </small>
                </div>
                <div class="mb-4 mt-4">
                    <input type="password" class="form-control" id="inputConfirmationPassword" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required>
                    <small class="text-danger">
                    @foreach ($errors->get('password_confirmation') as $err)
                        @if ($loop->iteration > 1)
                            <br/>
                        @endif
                        {{ $err }}
                    @endforeach
                    </small>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary fw-semibold py-2 px-4">Daftar</button>
                </div>
            </form>
            <h6 class="fw-semibold mt-3 text-center mx-4">Sudah mempunyai akun? <span class="color-yellow fw-bold"><a href="{{ route('login') }}" class="text-decoration-none color-yellow">Masuk Di Sini!</a></span></h6>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>