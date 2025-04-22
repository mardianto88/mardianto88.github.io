<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #add8e6;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        .buttons button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">Kategori Barang</div>
        <form action="proses_kategori.php" method="post">
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" id="kategori" name="kategori" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" required></textarea>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Title 1</th>
                        <th>Title 2</th>
                        <th>Title 3</th>
                        <th>Title 4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div class="buttons">
                <button type="button" onclick="window.history.back()">Back</button>
                <button type="submit" name="action" value="insert">Insert</button>
                <button type="submit" name="action" value="delete">Delete</button>
                <button type="reset">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>
