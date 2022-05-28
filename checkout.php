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
    <select required>
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
    <select required>
        <option selected value="MASTERCARD">Mastercard</option>
        <option value="VISA">VISA</option>
    </select><br><br>

    <p>You are required to pay $1844</p><br>

    <input type="submit" class="checkoutbutton" value="Make Booking">

</form>

</div>
</body>


