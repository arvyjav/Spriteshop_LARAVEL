@extends('layout.v_template')
@section('title','About')
@section('content')

<style>
       *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    min-height: 100vh;
    align-items: center;
    justify-content: center;
    background-color: #f1f1f1;
}
.about{
    background: url({{asset('Sprite/tiki-huts-wallpaper.jpg')}}) no-repeat left;
    background-size: 55%;
    background-color: #fdfdfd;
    overflow: hidden;
    padding: 100px 0;
}
.inner-section{
    width: 55%;
    float: right;
    background-color: #fdfdfd;
    padding: 140px;
    box-shadow: 10px 10px 8px rgba(0,0,0,0.3);
}
.inner-section h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}
.text{
    font-size: 13px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}
.skills a{
    text-decoration: none;
    font-size: 22px;
    text-align: center;
    letter-spacing: 2px;
    border: none;
    border-radius: 20px;
    padding: 8px;
    width: 200px;
    background-color: #00999c;
    color: white;
    cursor: pointer;
}
.skills a:hover{
    transition: 1s;
    background-color: #ecf5f5;
    color: #00999c;
}
@media screen and (max-width:1200px){
    .inner-section{
        padding: 80px;
    }
}
@media screen and (max-width:1000px){
    .about{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-section{
        width: 100%;
    }
}

@media screen and (max-width:600px){
    .about{
        padding: 0;
    }
    .inner-section{
        padding: 60px;
    }
    .skills a{
        font-size: 19px;
        padding: 5px;
        width: 160px;
    }
}
</style>
<div class="about">
    <div class="inner-section">
        <h1>About Us</h1>
        <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Doloribus velit ducimus, enim inventore earum, eligendi 
            nostrum pariatur necessitatibus eius dicta a voluptates sit 
            deleniti autem error eos totam
             nisi neque voluptates sit deleniti autem error eos totam nisi neque.
        </p>
        <div class="skills">
            <a href="/more">Contact Us</a>
        </div>
    </div>
</div>
@endsection