<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>UPI Payment</title>
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
    p {
        margin-bottom: 20px;
    }
    .upi-details {
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 4px;
    }
    .confirm-button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 8px;
    }
</style>
</head>
<body>
    <div class="container">
        <h2>UPI Payment</h2>
        <p>Please make the payment using the UPI details provided below:</p>
        <div class="upi-details">
            <label for="beneficiary_name"><strong>Beneficiary Name:</strong></label>
            <input type="text" id="beneficiary_name" name="beneficiary_name" placeholder="Enter Beneficiary Name"><br><br><br><br>

            <label for="upi_id"><strong>UPI ID:</strong></label>
            <input type="text" id="upi_id" name="upi_id" placeholder="Enter UPI ID"><br><br><br><br>

            <label for="amount"><strong>Amount:</strong></label>
            <input type="text" id="amount" name="amount" placeholder="Enter Amount (e.g., ₹500.00)"><br><br><br><br>

            <label for="description"><strong>Description:</strong></label>
            <input type="text" id="description" name="description" placeholder="Enter Description (e.g., Invoice Number: INV123456)"><br><br><br><br>
        </div>
        <p>Once you've made the payment, please click the button below to confirm:</p>
        <button onclick="confirmPayment()" class="confirm-button" href="book-appointment.php">Confirm Payment</button>
    </div>

    <script>
        function confirmPayment() {
            // You can add JavaScript code here to handle confirmation logic, such as updating the payment status in your database.
            alert("Thank you! Your payment has been confirmed.");
        }
        function confirmPayment() {
    // Add any payment confirmation logic here
    alert("Thank you! Your payment has been confirmed.");
    
    // Navigate to another page
    window.location.href = "book-appointment.php"; // Replace "book-appointment.php" with the URL of the desired page
}
    </script>
</body>
</html>
