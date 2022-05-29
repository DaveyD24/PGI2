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

<body onload="SetAmount()">
<div class="content" >

<h2>Checkout</h2>


<p class="checkouth">Customer Details and Payment</p><br>
<p class="checkoutp">Please fill in your details. <span style="color:red">*</span> indicates required field.</p><br>

<form class="checkoutform" action="confirmation.php" method="POST">
    <label for="fname">First Name<span style="color:red">*</span></label>
    <input type="text" id="fname" name="fname" required><br>

    <label for="lname">Last Name<span style="color:red">*</span></label>
    <input type="text" id="lname" name="lname" required><br>

    <label for="email">Email<span style="color:red">*</span></label>
    <input type="email" id="email" name="email" required><br>

    <label for="address1">Address Line 1<span style="color:red">*</span></label>
    <input type="text" id="address1" name="address1" required><br>

    <label for="address2">Address Line 2</label>
    <input type="text" id="address2" name="address2"><br>

    <label for="city">City<span style="color:red">*</span></label>
    <input type="text" id="city" name="city" required><br>

    <label for="state">State<span style="color:red">*</span></label>
    <select required id="state">
        <option selected value="ACT">Australian Capital Territory</option>
        <option value="NSW">New South Wales</option>
        <option value="NT">Northern Territory</option>
        <option value="QLD">Queensland</option>
        <option value="SA">South Australia</option>
        <option value="VIC">Victoria</option>
        <option value="WA">Western Australia</option>
    </select><br>

    <label for="postcode">Post Code<span style="color:red">*</span></label>
    <input type="number" id="postcode" name="postcode" required><br>

    <label for="payment">Payment Type<span style="color:red">*</span></label>
    <select required id="payment">
        <option selected value="MASTERCARD">Mastercard</option>
        <option value="VISA">VISA</option>
    </select><br><br>

    <p id="amountP">You are required to pay $1844</p><br>

    <!--<input type="submit" class="checkoutbutton" value="Make Booking">-->
    <button onclick="Confirm()">Make Booking</button>

</form>

</div>
</body>


<script>

    function SetAmount() {
        var x = document.getElementById("amountP");
        var amount = sessionStorage.getItem('cost');
        x.innerHTML = "You are required to pay $" + amount;
    }

    function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }

    function Confirm() {
        var fname = document.getElementById("fname").value;
        var lname = document.getElementById("lname").value;
        var email = document.getElementById("email").value;
        var address1 = document.getElementById("address1").value;
        var address2 = document.getElementById("address2").value;
        var city = document.getElementById("city"). value;
        var state = document.getElementById("state").value;
        var postcode = document.getElementById("postcode").value;
        var payment = document.getElementById("payment").value;


        if (fname == "" || lname == "" || email == "" || address1 == "" || city == "" || state == "" || postcode == "") {
            return;
        }
        else if (!validateEmail(email)) {
            return;
        }
        else {

            sessionStorage.setItem('fname', fname);
            sessionStorage.setItem('lname', lname);
            sessionStorage.setItem('email', email);
            sessionStorage.setItem('address1', address1);
            sessionStorage.setItem('address2', address2);
            sessionStorage.setItem('city', city);
            sessionStorage.setItem('state', state);
            sessionStorage.setItem('postcode', postcode);
            sessionStorage.setItem('payment', payment);

            window.open("confirmation.php", '_self');
        }
    }




</script>