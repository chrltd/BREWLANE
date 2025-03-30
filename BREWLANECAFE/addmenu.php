<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f1e5;
            margin: 0;
            padding: 20px;
            text-align: center;
            position: relative;
        }
        .header {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
        }
        .header img {
            width: 50px;
            height: auto;
            margin-right: 10px;
        }
        .header h1 {
            font-size: 24px;
            color: #854836;
            margin: 0;
        }
        .nav-buttons {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .nav-buttons a {
            text-decoration: none;
            color: white;
            background-color: #854836;
            padding: 8px 15px;
            border-radius: 15px;
            margin: 0 5px;
            font-size: 14px;
        }
        .nav-buttons a:hover {
            background-color: #6d3c28;
        }
        .content {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 20px;
            max-width: 900px;
            margin: 50px auto 0;
        }
        .container {
            background: #F6F0F0;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 45%;
        }
        input, select, button {
            margin: 10px;
            padding: 8px;
            width: 90%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #854836;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #6d3c28;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #854836;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="LOGO.png" alt="BrewLane Logo">
        <h1>Brewlane Cafe</h1>
    </div>
    <div class="nav-buttons">
        <a href="index.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="login.php">Login</a>
        <a href="signup.php">Sign Up</a>
    </div>
    
    <h2 style="margin-top: 50px;">Manage Menu</h2>
    <div class="content">
        <div class="container">
            <h3>Add New Menu Item</h3>
            <input type="text" id="name" placeholder="Item Name">
            <input type="number" id="price" placeholder="Price">
            
            <label for="category">Category:</label>
            <select id="category">
                <option value="None">None</option>
                <option value="Desserts">Desserts</option>
                <option value="Drinks">Drinks</option>
                <option value="Coffee">Coffee</option>
            </select>
    
            <label for="size">Size:</label>
            <select id="size">
                <option value="None">None</option>
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
            </select>
    
            <label for="type">Type:</label>
            <select id="type">
                <option value="None">None</option>
                <option value="Hot">Hot</option>
                <option value="Iced">Iced</option>
            </select>
            
            <button onclick="addItem()">Add Item</button>
        </div>
        
        <div class="container">
            <h3>Menu Items</h3>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Size</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="menuTable"></tbody>
            </table>
        </div>
    </div>

    <script>
        function addItem() {
            let name = document.getElementById('name').value;
            let price = document.getElementById('price').value;
            let category = document.getElementById('category').value;
            let size = document.getElementById('size').value;
            let type = document.getElementById('type').value;
            
            if (name && price) {
                let table = document.getElementById('menuTable');
                let row = table.insertRow();
                row.insertCell(0).innerText = name;
                row.insertCell(1).innerText = price;
                row.insertCell(2).innerText = category !== "None" ? category : "N/A";
                row.insertCell(3).innerText = size !== "None" ? size : "N/A";
                row.insertCell(4).innerText = type !== "None" ? type : "N/A";
                
                let actionCell = row.insertCell(5);
                
                let addBtn = document.createElement('button');
                addBtn.innerText = 'Add';
                addBtn.onclick = function() {
                    window.location.href = menu.php?name=${name}&price=${price}&category=${category}&size=${size}&type=${type};
                };
                
                let deleteBtn = document.createElement('button');
                deleteBtn.innerText = 'Delete';
                deleteBtn.onclick = function() { row.remove(); };
                
                actionCell.appendChild(addBtn);
                actionCell.appendChild(deleteBtn);
                
                document.getElementById('name').value = '';
                document.getElementById('price').value = '';
            }
        }
    </script>
</body>
</html>