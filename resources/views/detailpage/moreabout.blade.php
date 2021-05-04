<!DOCTYPE html>
<html lang="">
    <head>
        <title>
            Sprite Project
        </title>
    </head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <style>
      * {
    margin: 0;
    padding: 10;
    box-sizing: border-box;
    
}
body {
    background-color: #5DCF43;
    background-size: cover;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 1s;
}

.content {
    padding: 10;
    margin-top: 1%;
    position: relative;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.utama h1 {
    color: cornsilk;
    font-family: fantasy;
    margin-top: 1%;
    margin-left: 9%;
    position: relative;
}
.utama p {
    color: cornsilk;
    position: relative;
    font-family: 'Gill Sans';
    margin-left: 10%;
    margin-top: 4%;
}
.utama button {
    border-radius: 10px;
    margin-left: 16%;
    margin-top: 5%;
    width: 100px;
    height: 35px;
    border: 2px solid #5B2D69;
    color: #000;
   
}
.utama button:hover{
    transition: transform .2s ease-out;
    color: purple;
}

.numbertxt {
    color: #fff;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;

}
.container {
    width: 80%;
    height: 450px;
    margin: 0 auto;
    position: relative;
}
.container img {
    margin-left: 30%;
    width: 25%;
    height: 50%;
    position: absolute;
}

.container .btn {
    position: absolute;
    width: 50px;
    height: 50px;
    border: none;
    border-radius: 25px;
    top: 200px;
    margin-left: 15%;
    background: black;
    color: white;
    font-size: 20px;
}
.container #btn1:hover{
    box-shadow: 10px 0px 20px 0px black;
}
.container #btn2:hover{
    box-shadow: -10px 0px 20px 0px black;
}
.container #btn2 {
    position: relative;
    float: right;
    margin-right: 30%;
}
.media {
    align-items: flex-end;
	position: absolute;
    margin-top: 40%;
	left: 95%;
	transform: translate(-53%, -50%);
	
}
.media li {
    position: relative;
	list-style: none;
	margin: 10px 30px;
	display: inline-block;
	font-size: 20px;
	padding: 20px 20px;
	color: #fff;
	border: 1px solid #fff;
	border-radius: 30%;
	transition: .2s;
}
.media li:hover{
	color: #292929;
	border: 1px solid #292929;
	transition: .1s;
}
#change:hover
{
    transition: 1s;
    background-color: coral;
}
  </style>

    <body>
        
        <div class="content">
        <div class="utama">
            
                <h1> Lorem Ipsum</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>
                    Lorem Ipsum has been the industry's standard dummy text ever since the <br>
                    1500s, when an unknown printer took a galley of type and scrambled it to make <br>
                    a type specimen book. It has survived not only five centuries, but also the leap <br>
                    into electronic typesetting, remaining essentially unchanged. It was popularised <br>
                    in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, <br>
                    and more recently with desktop publishing software like Aldus PageMaker including <br>
                     versions of Lorem Ipsum </p>

                    <button id="change">Change Color</button>
             </div>
            <div class="container">
                <img class="slides" src="{{asset('Sprite/FirstPic.png')}}" >
                <img class="slides" src="{{asset('Sprite/ThirdPic.png')}}">
                <img class="slides" src="{{asset('Sprite/Hop.png')}}">
            
               <button class="btn" onclick="plusIndex(-1)"  id="btn1"> &#10094;</button>
               <button class="btn" onclick="plusIndex(1)"id="btn2"> &#10095;</button>
            </div>
            <script src="spritejs.js"></script>
                <div class="media">
                    <ul>
                        <li><i class="fa fa-youtube-play" ></i></li>
                        <li><i class="fa fa-wordpress" ></i></li>
                        <li><i class="fa fa-github" ></i></li>
                        <li><i class="fa fa-twitter" ></i></li>
                        <li><i class="fa fa-instagram"></i></li>
        
                    </ul>
                    </div>
                    </div>
                    
                    <script>
                         var spritehtml = 1;

                         function plusIndex(n){
                            spritehtml = spritehtml + 1;
                            showImage(spritehtml);
                         }
                         showImage(1);
                         function showImage(n){
                             var i;
                             var x = document.getElementsByClassName("slides");
                             if(n > x.length){ spritehtml = 1};
                             if(n < 1){ spritehtml = x.length};
                             for(i = 0; i<x.length;i++){
                                 x[i].style.display = "none";
                             }
                             x[spritehtml-1].style.display = "block";
                         }
                    </script>
                    <script>
                        var color = ["#5DCF43","#279EB6","#9D1DAB"];


var i = 0;
document.querySelector("button").addEventListener("click", function(){
    i = i < color.length ? ++i : 0;
    document.querySelector("body").style.background = color[i]
})

                    </script>
          
    </body>
</html>