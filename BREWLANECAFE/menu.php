<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrewLane Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f1e5;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #f8f1e5;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }
        .menu-container {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 40px auto;
        }
        .menu-table {
            width: 100%;
            border-collapse: collapse;
        }
        .menu-table th, .menu-table td {
            padding: 8px;
            text-align: center;
        }
        .menu-table th {
            background-color: #854836;
            color: white;
        }
        .menu-buttons {
            display: flex;
            gap: 5px;
            justify-content: center;
            align-items: center;
        }
        .menu-buttons button {
            background-color: #854836;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>BrewLane Cafe</h1>
    </div>

    <div class="menu-container">
        <h1 style="text-align: center; color: #854836;">BrewLane Cafe Menu</h1>
        
        <div class="menu-section">
            <h2>Coffee</h2>
            <table class="menu-table">
                <tr>
                    <th>Item</th>
                    <th>Small</th>
                    <th>Medium</th>
                    <th>Large</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>Brewed Coffee</td>
                    <td>$1.00</td>
                    <td>$1.20</td>
                    <td>$1.50</td>
                    <td>
                        <select>
                            <option value="Hot">Hot</option>
                            <option value="Cold">Cold</option>
                        </select>
                    </td>
                    <td class="menu-buttons">
                        <button>Select</button>
                        <button>Delete</button>
                        <input type="number" min="0" value="0" style="width: 40px; text-align: center;">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
