<?php
include "data.php";
$query = mysqli_query($conn, "SELECT * FROM anggota");
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #80B4FF;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            <?php
            if (mysqli_num_rows($query) > 0) {
                $no = 1;
                while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $data["nama"]; ?></td>
                        <td><?php echo $data["username"]; ?></td>
                        <td><?php echo $data["email"]; ?></td>
                        <td><?php echo $data["role"]; ?></td>
                        <td>
                            <a href="#">Delete</a>
                            <a href="#">Update</a>
                        </td>
                    </tr>
                    <?php $no++;
                }
            }
            ?>
        </table>
    </form>
</body>
</html>
