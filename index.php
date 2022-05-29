
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<html>


<?php
//require "read_json.php";
//load on the stuff into the boxes

//$str = file_get_contents('cars.json');
//$json = json_decode($str, true);
//echo '<pre>' . print_r($json, true) . '</pre>';

session_start();


?>
<body onload="OnDocumentLoad()">
<script>
var cart = [];
    function OnDocumentLoad() {
        TestFunction();

    }

    function SetStuff() {
        for (var i = 0; i < bigdata.collection.length; i++) {
            GenerateCar(bigdata.collection[i]);
        }
    }

    function AddToCart(car) {
        //console.log("xd");
        //console.log(car.availability);

        var precart = [];
        precart = JSON.parse(sessionStorage.getItem('cars'));
        var bAlreadyInCart = false;

        if (car.availability == true){
            //Check if already in cart??
            if (precart != null) {
                for (var i = 0; i < precart.length; i++) {
                    if (precart[i].model == car.model) {
                        bAlreadyInCart = true;
                        break;
                    }
                }
            }

            if (!bAlreadyInCart) {

                cart.push(car);


                //Add to shopping cart
                sessionStorage.setItem('cars', JSON.stringify(cart));
                console.log(JSON.parse(sessionStorage.getItem('cars')));





                //prompt success
                window.alert("Successfully added to cart.");
            }
        }
        else if (car.availability == false) {
            //prompt failure
            window.alert("Sorry, the car is not available now. Please try other cars.");
        }

    }


    function GenerateCar(car) {
        var ul = document.getElementById("carlist");
        var li = document.createElement("li");

        var image = document.createElement("img");
        image.setAttribute("src", "images/" + car.model + ".jpg");
        image.setAttribute("width", "100%");
        image.setAttribute("alt", car.model);
        li.appendChild(image);

        var h2 = document.createElement("h2");
        h2.innerHTML = car.brand + " " + car.model;
        li.appendChild(h2);

        var mileage = document.createElement("p");
        var text = document.createTextNode("Mileage: " + car.mileage);
        mileage.appendChild(text);
        li.appendChild(mileage);

        var fuel_type = document.createElement("p");
        var text = document.createTextNode("Fuel Type: " + car.fuel_type);
        fuel_type.appendChild(text);
        li.appendChild(fuel_type);

        var seats = document.createElement("p");
        var text = document.createTextNode("Seats: " + car.seats);
        seats.appendChild(text);
        li.appendChild(seats);

        var ppd = document.createElement("p");
        var text = document.createTextNode("Price Per Day: " + car.price_per_day);
        ppd.appendChild(text);
        li.appendChild(ppd);

        var availability = document.createElement("p");
        var text = document.createTextNode("Availability: " + car.availability);
        availability.appendChild(text);
        li.appendChild(availability);

        var description = document.createElement("p");
        var text = document.createTextNode("Description: " + car.description);
        description.appendChild(text);
        li.appendChild(description);

        var button = document.createElement("button");
        button.innerHTML = "Add To Cart";
        //button.setAttribute("onclick", "AddToCart(\'' + car + '\')");
        button.onclick = function(){
            AddToCart(car);
        }
        li.appendChild(button);

        ul.appendChild(li);


    }

    $(document).ready(function(){
        $.getJSON('cars.json', function(data){
            console.log(data);
            bigdata = data;
            SetStuff();
        }).fail(function(){
            console.log("An error has occurred.");
        });
    });

    function GoToCart() {
        window.open("cart.php", '_self');
    }







</script>






<header>
    <div class="bar">
        <h2>xdRentals</h2>
        <button onclick="GoToCart()">Checkout</button>
    </div>
</header>

<div class="content" >


<div class="container">
    <ul id="carlist">
    </ul>
</div>









</div>





</body>
















</html>

<script>

    function TestFunction() {
        var x = document.getElementById("camrySeats");
        x.textContent = "Seats: 5";

        

    }



</script>


