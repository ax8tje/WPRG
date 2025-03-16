<?php

?>
<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }

        table {
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        td {
            padding: 10px;
            font-size: 16px;
        }

        select, input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        input[type="submit"] {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <form method="post">
        <table align="center">
            <tr>
                <td>Ilość osób: </td>
                <td>
                    <select name="pplStaying" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Standard pokoju:</td>
                <td>
                    <select name="roomtype" required>
                        <option value="Standard">Standard</option>
                        <option value="Deluxe">Deluxe</option>
                        <option value="Apartment">Apartment</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Imię i nazwisko: </td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="email" name="mail" required></td>
            </tr>
            <tr>
                <td>Telefon: </td>
                <td><input type="tel" name="phone" required></td>
            </tr>
            <tr>
                <td>Pobyt od:</td>
                <td><input type="date" name="date1" required></td>
            </tr>
            <tr>
                <td>do: </td>
                <td><input type="date" name="date2" required></td>
            </tr>
            <tr>
                <td>Lóżko dla dziecka:</td>
                <td>
                    <select name="kidsbed">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Dodatkowe uwagi</td>
                <td>
                    <textarea name="textarea" rows="4" cols="30"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <input type="submit" name="submit" value="REZERWUJ">
                </td>
            </tr>
        </table>
    </form>
</body>