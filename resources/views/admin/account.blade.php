@section('title','Account Profile')

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
 <meta charset="UTF-8">
 <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
 <!-- <title>Login Form</title> -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
 <title>@yield('title')</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap');
body{
 margin: 0;
 padding: 0;
 background: radial-gradient(#a429bc,#9225a7,#7f2092);
 height: 100vh;
 overflow: hidden;
 font-family: 'Noto Sans TC', sans-serif;
}
.center{
 width: 430px;
 margin: 130px auto;
 position: relative;
}

.center form{
 position: absolute;
 background: white;
 width: 100%;
 padding: 50px 10px 0 30px;
 box-sizing: border-box;
 border: 1px solid #6d1c7d;
 border-radius: 0 0 5px 5px;
}
form input{
 height: 50px;
 width: 90%;
 padding: 0 10px;
 border-radius: 3px;
 border: 1px solid silver;
 font-size: 18px;
 outline: none;
}
form input[type="password"]{
 margin-top: 20px;
}
form i{
 position: absolute;
 font-size: 25px;
 color: grey;
 margin: 15px 0 0 -45px;
}
i.fa-lock{
 margin-top: 35px;
}
form input[type="submit"]{
 margin-top: 40px;
 margin-bottom: 40px;
 width: 130px;
 height: 45px;
 color: white;
 cursor: pointer;
 line-height: 45px;
 border-radius: 45px;
 border-radius: 5px;
 background: #5c1769;
}
form input[type="submit"]:hover{
 background: #491254;
 transition: .5s;
}
form a{
 text-decoration: none;
 font-size: 18px;
 color: #7f2092;
 padding: 0 0 0 20px;
}

</style>
<body>
 <div class="center">
<form>
  <input type="text" placeholder="Email or Username" value="{{Auth::user()->name}}">
  <i class="far fa-envelope"></i>
  <input id="pswrd" type="password" placeholder="Password" value="{{Auth::user()->password}}">
  <i class="fas fa-lock" onclick="show()"></i>
  <input type="submit" value="Logout">
  <a href="#">Forgot Password?</a>
 </form>
</div>  
<script>
  function show(){
   var pswrd = document.getElementById('pswrd');
   var icon = document.querySelector('.fas');
   if (pswrd.type === "password") {
    pswrd.type = "text";
    pswrd.style.marginTop = "20px";
    icon.style.color = "#7f2092";
   }else{
    pswrd.type = "password";
    icon.style.color = "grey";
   }
  }
 </script>
 
</body>
</html>

