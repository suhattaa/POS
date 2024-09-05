<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - Sistem Informasi Penjualan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
        }

        main {
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #4CAF50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

    <main>
        <h2>Daftar Produk Kategori: {{$kategori}}</h2>
        <table>
            <tr>
                <th>ID Produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
            <tr>
                <td>001</td>
                <td>Thermometer</td>
                <td>Rp100,000</td>
                <td>50</td>
            </tr>
            <tr>
                <td>002</td>
                <td>Hand Sanitizer</td>
                <td>Rp10,000</td>
                <td>30</td>
            </tr>
            <tr>
                <td>003</td>
                <td>Betadine</td>
                <td>Rp20,000</td>
                <td>30</td>
            </tr>
        </table>
    </main>

</body>
</html>
