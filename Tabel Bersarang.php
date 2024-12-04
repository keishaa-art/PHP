<!DOCTYPE html>
<html>

<head>
    <title>Tugas Tabel Bersarang</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table width="400">
        <tr>
            <th colspan="2">My Database</th>
        </tr>

        <tr>
            <td>
                <table>
                    <tr>
                        <td>Categories</td>
                    </tr>
                    <tr>
                        <td>Products</td>
                    </tr>
                    <tr>
                        <td>Customer</td>
                    </tr>
                </table>
            </td>
            <td>
                <table width="100%">
                    <caption>Customers</caption>
                    <tr>
                        <th>CustomerName</th>
                        <th>ContactName</th>
                    </tr>
                    <tr>
                        <td>Alfreds Futterkiste</td>
                        <td>Maria Anders</td>
                    </tr>
                    <tr>
                        <td>Ana Trujillo Emparedados y helados</td>
                        <td>Ana Trujillo</td>
                    </tr>
                </table>
            </td>
        </tr>

    </table>
</body>

</html>