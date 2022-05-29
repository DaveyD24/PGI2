<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<html>

<header>
    <div class="bar">
        <h2>xdRentals</h2>
    </div>
</header>
<body onload="SetTable()">
<div class="content" >

<h2>Car Reservation</h2>

<table class="carttable" id="carttable">
    <tr>
        <th>Thumbnail</th>
        <th>Vehicle</th>
        <th>Price Per Day</th>
        <th>Rental Days</th>
        <th>Actions</th>
    </tr>

</table>

<button onclick="Checkout()">Proceed To Checkout</button>

</div>
</body>



<script>

    function GetTotalCost() {
        var rentboxes = document.getElementsByClassName("rentbox");
        var totalcost = 0;

        for (var i = 0; i < rentboxes.length; i++) {
            var ppd = rentboxes[i].id;
            var increase = rentboxes[i].value * ppd;
            totalcost += increase;
        }

        return totalcost;
    }


    function Checkout() {
        //if nothing in cart
            //alert -> jump to index
        var cart = JSON.parse(sessionStorage.getItem('cars'));
        var bValidRent;

        //MAKE THIS 1
        if (cart.length < 1) {
            window.alert("No car has been reserved.");
            window.open("index.php", '_self');
        }
        else {
            var rentboxes = document.getElementsByClassName("rentbox");
            for (var i = 0; i < rentboxes.length; i++) {
                if (rentboxes[i].value <= 0) {
                    bValidRent = false;
                    break;
                }
                bValidRent = true;
            }
            if (bValidRent) {
                var cost = GetTotalCost();
                sessionStorage.setItem('cost', cost);
                window.open("checkout.php", '_self');
            }
            else {
                window.alert("Please enter valid rent values");
            }
        }

   
    }

    function RemoveFromCart(car) {
        var cart = []
        cart = JSON.parse(sessionStorage.getItem('cars'));
        var index = cart.indexOf(car);
        cart.splice(index, 1);

        sessionStorage.setItem('cars', JSON.stringify(cart));
        window.open("cart.php", '_self');
    }

    function SetTable() {
        var cart = JSON.parse(sessionStorage.getItem('cars'));
        console.log(cart);

        // for (var i = 0; i < sessionStorage.getItem('cars').length; i++) {
        //     cart.push(sessionStorage.getItem('cart')[i]);
        // }
        // console.log(JSON.parse(cart));

        for (var i = 0; i < cart.length; i++) {
            //create new row in table
            var table = document.getElementById("carttable");
            var tr = table.insertRow();

            var cell1 = tr.insertCell();
            cell1.innerHTML = "<img src=images/" + cart[i].model + ".jpg" + " height=100px" + ">";

            var cell2 = tr.insertCell();
            cell2.innerHTML = cart[i].year + " " + cart[i].brand + "-" + cart[i].model;

            var cell3 = tr.insertCell();
            cell3.innerHTML = cart[i].price_per_day;

            var cell4 = tr.insertCell();
            cell4.innerHTML = "<input type=number class=rentbox id=" +cart[i].price_per_day + " value=0 min=0>";

            var cell5 = tr.insertCell();
            //cell5.innerHTML = "<button onclick=Test(" + cart[i] + ")>Delete</button>";

            var button = document.createElement("button");
            button.innerHTML = "Delete";
            button.onclick = function(){
                RemoveFromCart(cart[i]);
            }

            cell5.appendChild(button);





        }
    }

    function Test(car) {
        console.log("sfsdsa");

    }





    </script>
