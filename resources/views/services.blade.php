@extends('layout.v_navbar')
@section('title','Services')

@section('content')

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <style>
      body {
          box-sizing: border-box;
          margin: 0px;
      }
      .title {
          color: #777;
          font-family: 'Raleway';
          font-size: 1.5em;
          width: 1200px;
          margin: 10px auto;
          text-align: center;
      }
      .services {
          display: flex;
          justify-content: center;
          align-items: center;
          min-height: 200px;
      }
      .card {
          height: 350px;
          width: 300px;
          padding: 20px 35px;
          border-radius: 10px;
          background: #dff9fb;
          margin: 10px;
          overflow: hidden;
          position: relative;
          transition: all 0.4s cubic-bezier(0.02,0.01,0.47,1);
      }
      .card .bx {
          font-size: 64px;
          display: block;
          text-align: center;
          color: #7ed6df;
          margin-top: 18px;
      }
      .card h1 {
        font-family: 'Raleway';
        text-align: center;
        color: #22a6b3;
        font-size: 20px;
      }
      .card .button {
        background: #22a6b3;
        color: #c7ecee;
        border: none;
        border-radius: 5px;
        width: 120px;
        padding: 15px;
        margin-top: 100px;
        display: inline-block;
        font-family: 'Raleway';
        font-size: 16px;
        text-align: center;

      }
      .card a {
          text-decoration: none;
      }
      .card .content p {
          font-size: 14px;
          color: #535c68;
          line-height: 18px;
          font-family: 'century gothic';
      }
      .card:hover {
          color: #fff;
          border: none;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
          animation: rotate 0.7s ease-in-out-both;
      }
      .card:before,
      .card:after {
          content '';
          background: #22a6b3;
          width: 180px;
          height: 180px;
          border-radius: 50%;
          opacity: 0;
          position: absolute;
          right: 0;
          bottom: -80px;
          z-index: -1;
          transform: translate(100%, 25%) translate3d(0,0,0);
          transition: all 0.15s cubic-bezier(0.02,0.01,0.47,1);
      }
      .card:hover:before,
      .card:hover:after
      {
          opacity: 0.15;
      }
      .card:hover:before
      {
        transform: translate3d(50%,0,0) scale(0.9);
      }
      .card:hover:after
      {
        transform: translate(50%,0) scale(1.1);
      }
      @keyframes rotate {
          0%{transform: rotate(0deg);}
          25%{transform: rotate(3deg);}
          50%{transform: rotate(-3deg);}
          75%{transform: rotate(1deg);}
          100%{transform: rotate(0deg);}
      }
      @media(max-width: 900px)
      {
          .title {
              width: 100%; 
          }
          .title h1 {
              font-size: 28px;
          }
          .services {
              flex-direction: column;
          }
      }
  </style>
  <body>
    <div class="title">
        Services</>
    </div>
    <div class="services">
        <div class="card">
            <i class='bx bxs-drink'></i>
            <h1>Lot Of drink</h1>
            <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <p style="text-align: center;">
                <a class="button" href="#">Read More</a>
                </p>
            </div>
        </div>

        <div class="card">
            <i class='bx bxs-coin'></i>
            <h1>Cheap</h1>
            <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <p style="text-align: center;">
                <a class="button" href="#">Read More</a>
                </p>
            </div>
        </div>

        <div class="card">
            <i class='bx bxs-yin-yang'></i>
            <h1>Stabile</h1>
            <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <p style="text-align: center;">
                <a class="button" href="#">Read More</a>
                </p>
            </div>
        </div>

        <div class="card">
            <i class='bx bxs-star'></i>
            <h1>Top Brand</h1>
            <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <p style="text-align: center;">
                <a class="button" href="#">Read More</a>
                </p>
            </div>
        </div>

        <div class="card">
            <i class='bx bx-anchor'></i>
            <h1>Like In Sea</h1>
            <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <p style="text-align: center;">
                <a class="button" href="#">Read More</a>
                </p>
            </div>
        </div>

        
    </div>
    <div class="services">
        <div class="card">
            <i class='bx bxs-happy-alt'></i>
            <h1>Make Good Mood</h1>
            <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <p style="text-align: center;">
                <a class="button" href="#">Read More</a>
                </p>
            </div>
        </div>

        <div class="card">
            <i class='bx bxs-tree'></i>
            <h1>Chill</h1>
            <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <p style="text-align: center;">
                <a class="button" href="#">Read More</a>
                </p>
            </div>
        </div>

        <div class="card">
            <i class='bx bxs-backpack'></i>
            <h1>On travelling</h1>
            <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <p style="text-align: center;">
                <a class="button" href="#">Read More</a>
                </p>
            </div>
        </div>

        <div class="card">
            <i class='bx bxs-factory'></i>
            <h1>Made By Big Company</h1>
            <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <p style="text-align: center;">
                <a class="button" href="#">Read More</a>
                </p>
            </div>
        </div>

        <div class="card">
            <i class='bx bxs-first-aid'></i>
            <h1>First Aid</h1>
            <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <p style="text-align: center;">
                <a class="button" href="#">Read More</a>
                </p>
            </div>
        </div>
    </div>
  </body>
</html>
@endsection

