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

<table id="carttable">
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

    function Checkout() {
        //if nothing in cart
            //alert -> jump to index

        //else
            //if !rental validation
                //alert
            //else
                //jump to checkout

        window.open("checkout.php", '_self');       
    }



    </script>
