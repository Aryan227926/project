<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 

@if(session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success')}}
</div>
@endif


@if(session('error'))
<div class="alert alert-danger  " role="alert">
    {{ session('error')}}
</div>
@endif

<div class="signup">
     <h2>Sign up</h2>
     <form action='{{ route("register.store")}}' method='POST'>
        @csrf
        <div class="input-field">
                <input type="text" id="text" placeholder="Name" name='name'>
                <i class='bx bxs-user'></i>
        </div>
            
        <div class="input-field">
                <input type="text" id="text" placeholder="Username" name='username'>
                <i class='bx bxs-user'></i>
        </div>
            <div class="input-field">
                <input type="email" id="email" placeholder="Email" name='email'>
                <i class='bx bxs-envelope' ></i>
            </div>
            <div class="input-field">
                <input type="password" id="password" placeholder="Password" name='password'>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-field">
                <input type="password" id="password" placeholder=" Conform password" name='password_confirmation'>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" class="login">sign Up</button>
            <br><br><p>Already have an account <a href='{{ route("login")}}' class="login2">Login</a></p>
     </form>
</div>

    
</body>
</html>