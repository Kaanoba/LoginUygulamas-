<?php

    require 'connection.php';


    if (isset($_POST['submit2']))) {
        
        $name = $_POST['adi'];
        $k_adi = $_POST['k_adi'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];


        




    }

    // giriş yap kontrolü
  
   







?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
        <div class="container">
            <div class="login" id="lgn1">
                <header>
                    <a href="#"  onclick="showLgn1();" class="btn-hero">Giriş Yap</a>
                    <a href="#"  onclick="showLgn2();" class="btn-hero">Kayıt Ol</a>
                </header>
                <hr>
                <section>
                    <form action="login.php" method="post">
                        <label for="">Kullanıcı Adınız:</label>
                        <input type="text" name="k_adi2" id=""> <br>
                        <label for="">Şifreniz:</label>
                        <input type="password" name="pass2" id="">
                        <input type="submit" name="submit" class="btn" value="Giriş Yap" id="" >
                    </form>
                </section>

            </div>
            <div class="register" id="lgn2" style="display: none">
                <header>
                    <a href="#" id="active" onclick="showLgn1(); " class="btn-hero">Giriş Yap</a>
                    <a href="#" id="active2" onclick="showLgn2(); " class="btn-hero">Kayıt Ol</a>
                </header>
                <hr>
                <section class="login2">
                    <form action="login.php" method="post">
                        <label for="">Adınız</label>
                        <input type="text" name="adi" id=""> <br>
                        <label for="">Kullanıcı Adınız:</label>
                        <input type="text" name="k_adi" id="">
                        <label for="">email adresiniz</label>
                        <input type="email" name="email" id=""> <br>
                        <label for="">Şifreniz:</label>
                        <input type="password" name="pass" id="">
                        <input type="submit" name="submit2" class="btn" value="Gonder" id="" >
                    </form>
                </section>

            </div>
        </div>

        <script>
            var lgn = document.getElementById('lgn1');
            var lgn2 = document.getElementById('lgn2');

            function showLgn1(){
                lgn.style.display = 'block';
                lgn2.style.display = 'none';

            }
            function showLgn2(){
                lgn.style.display = 'none';
                lgn2.style.display = 'block';
            }

        </script>
</body>
</html>

