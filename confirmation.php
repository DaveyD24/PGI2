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

<body onload="SetParameters()">
<div class="content" >

<h2>Confirmation</h2>

<p>Deliver To</p>
<p id="name">placeholder</p>
<p id="email">placeholder</p>
<p id="address">placeholder</p>

<p>Payment Method</p>
<p id="payment">placeholder</p>

<p>You are required to pay</p>
<p id="amount">placeholder</p>

<button onclick="Confirm()">Confirm</button>
<button onclick="Back()">Back</button>





</div>
</body>


<script>

    function SetParameters() {
        var name = document.getElementById("name");
        //name.innerHTML = request.getParameter("fname") + " " + request.getParameter("lname");
    }

    function Confirm() {
        window.open("index.php", '_self');
        session_destroy();
    }

    function Back() {
        window.history.go(-1)
    }

</script>