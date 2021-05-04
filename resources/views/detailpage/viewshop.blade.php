<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomos Watch</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<style>
    * {
    margin: 0px;
    padding: 0px;
}

html,
body {
    margin: 0px;
    padding: 0px;
    height: 100%;
    width: 100%;
    overflow-x: hidden;
}

body {
    font-family: 'Montserrat', sans-serif;
}

.container {
    height: 100%;
    padding: 20px;
}


.card {
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: column;
    position: relative;
}

#shopping {
    position: absolute;
    top: 0px;
    right: 0px;
}


#shopping i {
    font-size: 20px;
}

#shopping sup {
    margin-left: 4px;
}

.images h2 {
margin-bottom: 25px;
}

.infos h1 {
    display: none;
}
.imgs {
    cursor: pointer;
}

.infos .price {
    display: flex;
    justify-content: start;
}
.infos .price h3:last-child  {
    margin-left: 20px; 
}


.infos #more-infos {
    display: flex;
    justify-content: space-between;
    color: gray;
}

#more-infos h5 {
    padding: 8px;
    
}
#more-infos h5:nth-child(1) {
    color:black ; 
    border-bottom: 2px solid black ; 
    padding-bottom: 6px;
}

.infos {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 400px;
    margin-top: 30px;
    width: 90%;
}

.reviews {
    color: gold;
}

h3:nth-child(2) {
    color: gray;
    text-decoration: line-through; 
}

.choose {
    cursor: pointer;
}

.quantity {
    width: 60%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 20px;
}

.quantity input {
    text-align: center;
    width: 40px;
}


#info-content {
    font-size: 12px;
    height: 70px;
}

.buttons {
    height: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
}

.buttons button {
    margin: 10px;
    width: 180px;
    padding: 5px;
    font: inherit;
    border: 2px solid #5FDFFC;
    border-radius: 25px;
    background-color: white;
    outline: none;
    cursor: pointer;
}


.buttons button:nth-child(1) i {
    margin-right: 10px;
}

.buttons button:hover {
    color: white;
    background-color: #5FDFFC;
}


.slider {
    height: 80%;
    display: flex;
    align-items: center;

}

.slider img {
    width: 90%;
    margin: auto;
}

.img-slider {
    width: 70%;
    display: flex;
    height: 40px;
    justify-content: space-between;
    margin: auto;
    margin-top: 15px;
}

.img-slider div {
    width: 20%;
    height: 100%;
}

.img-slider img {
    height: 100%;
}



@media ( min-width : 1025px) {

    body {
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .container {
        background-color: rgb(132, 175, 255);
        width: 75%;
        height: 80%;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 20px;
    }

    .card {
        flex-direction: row;
        height: 85%;
        width: 80%;
        border-radius: 15px;
    }

    .images {
        width: 50%;
        height: 100%;
    }

    .images h2 {
      display: none;
    }

    .infos {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        margin-top: 0px;
        height: 80%;
        width: 50%;
       font-size: 20px;
        padding-right: 70px;
        
    }

    .infos h1 {
        display: block;
    }

    .buttons {
        flex-direction: row;
        font-size: 15px;
    }
    .buttons button {
        padding: 8px;
    }

    .img-slider {
        width: 50%;
    }

    #shopping {
        position: absolute;
        top: 20px;
        right: 20px;
    }
    #shopping i {
        font-size: 30px;
    }

}


@media (min-width : 670px) {

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .buttons {
        flex-direction: row;
        font-size: 15px;
    }

    .card {
        width: 75%;
        height: 100%;
    }

        #shopping i {
        font-size: 30px;
    }

}
</style>
<body>
    <div class="container">
         
        <div class="card">
            <div id="shopping">
                <i class="fas fa-cart-plus"><sup id="items-added"></sup></i>
            </div>
            <div class="images">
                <h2>{{$menu->product_name}}</h2>
                <div class="slider"><img id="big-image" src="{{url('Sprite/'.$menu->photo)}}" alt=""></div>
                <div id="img-slider" class="img-slider">
                    <div class="imgs"><img id="Nomos1" src="images/Nomos1.webp" alt=""></div>
                    <div class="imgs"><img id="Nomos2" src="images/Nomos2.webp" alt=""></div>
                    <div class="imgs"><img id="Nomos3" src="images/Nomos3.webp" alt=""></div>
                </div>
            </div>
            <div class="infos">
                <h1>{{$menu->product_name}}</h1>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">
                    <h3>{{$menu->price}}</h3>
                </div>
                <div id="more-infos">
                    <h5 class="choose">Description</h5>
                    <h5 class="choose">Basic Info</h5>
                    <h5 class="choose">Caliber</h5>
                </div>
                <div id="info-content">
                    <p  class="paragraph" style="display: block;">The watch comes with the original Nomos black Cordovan Shell strap and with the original Nomos 18kt white gold tang buckle. This timepiece is sourced directly from Nomos, hence please allow one week delivery time (often within days).</p>
                    <p class="paragraph" style="display: none;">CALIBER DUW 2002 manual <br> MOVEMENT HEIGHT 3.6 mm <br> DIAMETER 32.6 by 22.6 mm <br> POWER RESERVE up to 84 hours <br> JEWELS 23</p>
                    <p class="paragraph" style="display: none;">Lorem Repellendus ullam odit placeat, non rem eaque. ipsum dolor sit amet consectetur adipisicing elit. Repellendus Repellendus ullam odit placeat, non rem eaque.ullam odit placeat, non rem eaque.</p>
                </div>
                <div class="quantity">
                    <h3>QUANTITY</h3>
                <input type="number" name="items" id="counter" min="1" value="1">
            </div>
                <div class="buttons">
                    <button id="add-to-cart"><i class="fas fa-shopping-cart"></i>ADD TO CART</button>
                    <button>BUY NOW</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Navigate product images 

const BigImage = document.getElementById('big-image');
const imgSlider = document.getElementById('img-slider');

imgSlider.addEventListener('click', event => {

    if (event.target === Nomos1) {
         BigImage.setAttribute ("src","images/Nomos1.webp");
    }

    else if (event.target === Nomos2) {
        BigImage.setAttribute ("src","images/Nomos2.webp");
    }

    else {
    BigImage.setAttribute ("src","images/Nomos3.webp");
    }
  
});



// Navigate information 

const chooseInfo = document.getElementById('more-infos');
const choose = document.getElementsByClassName('choose');
const paragraph = document.getElementsByClassName('paragraph');


function styleItem (a,b,c) {
    a.style.cssText = 'color:black ; border-bottom: 2px solid black ; padding-bottom: 6px';
    b.style.cssText = 'color:gray ; border-bottom: none';
    c.style.cssText = 'color:gray ; border-bottom: none';
}

function displayPrph (e,f,g) {
        e.style.display = 'block';
        f.style.display = 'none';
        g.style.display = 'none';
}

chooseInfo.addEventListener('click', event => {
   
       if (event.target === choose[0]) {    
           
                 styleItem (choose[0],choose[1],choose[2])
                 displayPrph (paragraph[0],paragraph[2],paragraph[1])
        }  

       else if (event.target === choose[1]) {  

                 styleItem (choose[1],choose[0],choose[2])
                 displayPrph (paragraph[1],paragraph[0],paragraph[2])
        }  

       else   {
                  styleItem (choose[2],choose[0],choose[1])
                  displayPrph (paragraph[2],paragraph[0],paragraph[1])
        }     
});

// add items to the cart

const addToCart = document.getElementById('add-to-cart');
const itemsAdded = document.getElementById('items-added');
const counter = document.getElementById('counter');

addToCart.addEventListener('click',ev => itemsAdded.textContent = (counter.value));
    </script>
</body>
</html> 