
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Summary System</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background-color: #f4f4f4;
    }
    .summary {
      background: white;
      padding: 20px;
      border-radius: 10px;
      max-width: 400px;
      margin: auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .summary h2 {
      color: #333;
    }
  </style>
</head>
<body>

<div class="summary">
  <h2>Order Summary</h2>
  <p id="name"></p>
  <p id="total"></p>
  <p id="tax"></p>
</div>

<script>
  const user = {
    firstName: "ahmed",
    lastName: "khairy"
  };

  const order = {
    items: [
      { name: "Keyboard", price: 200 },
      { name: "Mouse", price: 100 },
      { name: "Headset", price: 300 }
    ]
  };

  function calculateTotal(items) {
    let total = 0;
    for (let item of items) {
      total += item.price;
    }
    return total;
  }

  const calculateTax = (amount) => amount * 0.14;
  const logger = function(message) {
    console.log("[LOG]: " + message);
  };

  function formatName(person) {
    return person.firstName.charAt(0).toUpperCase() + person.firstName.slice(1) +
           " " +
           person.lastName.charAt(0).toUpperCase() + person.lastName.slice(1);
  }
  const fullName = formatName(user);
  const totalAmount = calculateTotal(order.items);
  const taxAmount = calculateTax(totalAmount);
  logger(Customer: ${fullName});
  logger(Total: ${totalAmount});
  logger(Tax: ${taxAmount});
  document.getElementById("name").innerText = "Customer: " + fullName;
  document.getElementById("total").innerText = "Total Amount: $" + totalAmount.toFixed(2);
  document.getElementById("tax").innerText = "Tax (14%): $" + taxAmount.toFixed(2);
</script>

</body>
</html>

