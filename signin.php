<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlexStart Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register with <a href="index.php" style="text-decoration: none; color: blue;">FlexStart</a></h2>
        <form action="#" method="POST">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>

            <label for="business">Type of Farming Business:</label>
            <select id="business" name="business" required>
                <option value="crop_farming">Crop Farming</option>
                <option value="livestock">Livestock</option>
                <option value="poultry">Poultry</option>
                <option value="others">Others</option>
            </select>

            <label for="loan">Are you interested in a microloan?</label>
            <select id="loan" name="loan" required>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
