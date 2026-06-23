<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Register | AMBA DRINKS</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Poppins,sans-serif;
}

body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:linear-gradient(135deg,#2b0000,#5d0000);
}

.register-card{

width:430px;
padding:40px;

background:rgba(255,255,255,.08);

backdrop-filter:blur(15px);

border-radius:20px;

box-shadow:0 15px 40px rgba(0,0,0,.3);

}

h1{

text-align:center;

color:white;

margin-bottom:10px;

}

h1 span{

color:#ffcc40;

}

p{

text-align:center;

color:#ddd;

margin-bottom:25px;

}

input{

width:100%;

padding:15px;

margin-bottom:15px;

border:none;

border-radius:10px;

background:rgba(255,255,255,.1);

color:white;

outline:none;

}

input::placeholder{

color:#ddd;

}

button{

width:100%;

padding:15px;

border:none;

border-radius:10px;

background:#ffcc40;

font-weight:bold;

font-size:16px;

cursor:pointer;

}

.login{

margin-top:20px;

text-align:center;

color:white;

}

.login a{

color:#ffcc40;

text-decoration:none;

font-weight:bold;

}

</style>

</head>

<body>

<div class="register-card">

<h1>AMBA <span>DRINKS</span></h1>

<p>Buat akun baru</p>

<form action="proses-register.php" method="POST">

<input
type="text"
name="nama"
placeholder="Nama Lengkap"
required>

<input
type="email"
name="email"
placeholder="Email"
required>

<input
type="password"
name="password"
placeholder="Password"
required>

<input
type="password"
name="konfirmasi"
placeholder="Konfirmasi Password"
required>

<button
type="submit"
name="register">

DAFTAR

</button>

</form>

<div class="login">

Sudah punya akun?

<a href="login.php">

Login

</a>

</div>

</div>

</body>

</html>