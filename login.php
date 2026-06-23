<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login | AMBA DRINKS</title>

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

overflow:hidden;

}

body::before{

content:"";

position:absolute;

width:500px;

height:500px;

background:#ffcc40;

border-radius:50%;

top:-200px;

right:-150px;

opacity:.15;

}

body::after{

content:"";

position:absolute;

width:400px;

height:400px;

background:#ffffff;

border-radius:50%;

bottom:-180px;

left:-150px;

opacity:.05;

}

.login-card{

width:420px;

padding:45px;

background:rgba(255,255,255,.08);

backdrop-filter:blur(15px);

border-radius:20px;

border:1px solid rgba(255,255,255,.1);

box-shadow:0 20px 50px rgba(0,0,0,.4);

position:relative;

z-index:1;

}

.logo{

display:flex;

justify-content:center;

align-items:center;

gap:10px;

margin-bottom:15px;

}

.logo img{

width:60px;

}

.logo h1{

color:white;

font-size:30px;

}

.logo span{

color:#ffcc40;

}

.subtitle{

text-align:center;

color:#ddd;

margin-bottom:30px;

font-size:14px;

}

.input-box{

margin-bottom:20px;

}

.input-box input{

width:100%;

padding:15px;

border:none;

border-radius:12px;

background:rgba(255,255,255,.1);

color:white;

outline:none;

font-size:15px;

}

.input-box input::placeholder{

color:#ddd;

}

.input-box input:focus{

border:2px solid #ffcc40;

}

button{

width:100%;

padding:15px;

border:none;

border-radius:12px;

background:#ffcc40;

color:#5d0000;

font-size:17px;

font-weight:bold;

cursor:pointer;

transition:.3s;

}

button:hover{

transform:translateY(-2px);

}

.register{

margin-top:20px;

text-align:center;

color:white;

}

.register a{

color:#ffcc40;

text-decoration:none;

font-weight:bold;

}

</style>

</head>

<body>

<div class="login-card">

<div class="logo">

<img src="gambar/logo.png">

<h1>AMBA <span>DRINKS</span></h1>

</div>

<p class="subtitle">

Silakan login untuk melanjutkan ke website.

</p>

<form action="proses-login.php" method="POST">

<div class="input-box">

<input
type="email"
name="email"
placeholder="Masukkan Email"
required>

</div>

<div class="input-box">

<input
type="password"
name="password"
placeholder="Masukkan Password"
required>

</div>

<button
type="submit"
name="login">

LOGIN

</button>

</form>

<div class="register">

Belum punya akun?

<a href="register.php">

Daftar Sekarang

</a>

</div>

</div>

</body>

</html>
