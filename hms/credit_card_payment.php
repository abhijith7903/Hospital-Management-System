<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Credit Card Payment</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
    }
    label {
        font-weight: bold;
    }
    input[type="text"], input[type="number"], input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
    <div class="container">
        <h2>Credit Card Payment</h2>
        <form action="book-appointment.php" method="post">
            <label for="card_number">Card Number:</label>
            <input type="text" id="card_number" name="card_number" placeholder="Enter your card number" required>
            <label for="expiry_date">Expiry Date:</label>
            <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YYYY" required>
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" required>
			<input type="submit" value="Pay Now">
        </form>
    </div>
</body>
</html>
