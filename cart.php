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
<body>
<div class="content" >

<h2>Car Reservation</h2>

<table class="carttable">
    <tr>
        <th>Thumbnail</th>
        <th>Vehicle</th>
        <th>Price Per Day</th>
        <th>Rental Days</th>
        <th>Actions</th>
    </tr>
    <tr>
        <td>
            <img src="images/Golf.jpg" alt="Golf" height="100px">
        </td>
        <td>2017 Volkswagen-Golf</td>
        <td>180</td>
        <td>
            <input type="number" id="rentdays" value="0" min="0">
        </td>
        <td>
            <button>Delete</button>
        </td>
    </tr>
</table>

<button onclick="Checkout()">Proceed To Checkout</button>

</div>
</body>



<script>

    function Checkout() {
        //if nothing in cart
            //alert -> jump to index

        //else
            //if !rental validation
                //alert
            //else
                //jump to checkout

        var rentbox = document.getElementById("rentdays");
        var num = rentbox.value;
        if (num > 0){
            window.open("checkout.php", '_self'); 
        }
        else {
            console.log("yeh good luck renting it for 0 days you nonce");
            window.alert("No car has been reserved.");
            window.open("index.php", '_self');
        }      
    }



    </script>
