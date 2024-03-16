<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log in</title>
<link rel="stylesheet" href="style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'poppins',sans-serif;
}

.login-form{
    position: relative;
    min-height: 100vh;
    z-index: 0;
    background: radial-gradient(circle at 24.1% 68.8%, rgb(50, 50, 50) 0%, rgb(0, 0, 0) 99.4%);
    padding: 30px;
    justify-content: center;
    display: grid;
    font-family: 'poppins',sans-serif;

    grid-template-rows: 1fr auto 1fr;
    align-items: center;
}
.container{
    max-width: 800px;
    margin: 0 auto;
}

.login-form h1{
    text-align: center;
    font-size: 2.5rem;
    font-weight: 400;
    color: #fff;
    font-family: 'poppins',sans-serif;

}
.login-form h2{
    line-height: 40px;
    margin-bottom: 5px;
    font-size: 30px;
    font-weight: 500;
    color: #272346;
    text-align: center;
}
.login-form .main{
    position: relative;
    display: flex;
    margin: 30px 0;
}
.content{
    flex-basis: 50%;
    padding: 3em 3em;
    background: #fff;
    box-shadow: 2px 9px 49px -17px rgba(0,0,0,0.1);
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
}
.form-img{
    flex-basis: 50%;
    background: #dfe5ea;
    background-size: cover;
    padding: 40px;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
    align-items: center;
    display: grid;
}
.form-img img{
    max-width: 100%;
}
p{
    color: #666;
    font-size: 16px;
    line-height: 25px;
    opacity: 0.6;
    text-align: center;
}
.btn,button,input{
    border-radius: 35px;
}
.btn:hover,
button:hover{
  color: white;
    transition: 0.5s ease;
    background:green;
}
a{
    text-decoration: none;
}
.login-form form{
    margin: 30px 0;
}
.login-form input{
    outline: none;
    margin-bottom: 15px;
    font-stretch: 16px;
    color: #999;
    text-align: left;
    padding: 14px 20px;
    width: 100%;
    display: inline-block;
    box-sizing: border-box;
    border: none;
    background: #f7fafc;
    transition: 0.3s ease;
}
.login-form input:focus{
    background: transparent;
    border: 1px solid #4e34b6;
}

.login-form button{
    font-size: 18px;
    color: #fff;
    width: 100%;
    background: #4e34b6;
    border: none;
    padding: 14px 15px;
    font-weight: 600;
    transition: 0.3s ease;
}

@media(max-width:736px){
    .login-form .main{
        flex-direction: column;
    }
    .login-form form{
        margin-top: 30px;
        margin-bottom: 10px;
    }
    .form-img{
        border-radius: 0;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
        order: 2;
    }
    .content{
        order: 1;
        border-radius: 0;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

}
</style>
</head>
<body>
    <!-- untuk headerdia -->
    <div class="login-form">
        <h1 class="animate__animated animate__fadeIn">Selamat Datang Kembali Admin</h1>

        <!-- untuk form -->
        <div class="container">
            <div class="main">
                <div class="content">
                    <h2>Login Admin</h2>
                    <form action="#" method="post">
                        <input type="text" name="" placeholder="Nama Pengguna Admin" required autofocus="">
                        <input type="password" name="" placeholder="Kata Lalauan Admin" required autofocus="">
                         <button class="btn" type="submit">
                            Login
                         </button>

                    </form>
                
                     
                </div>
                <div class="form-img">
                    <img src="gambar1.jpg" alt="" width="350px" height="250px">
                </div>
            </div>
        </div>
    </div>
</body>
</html>