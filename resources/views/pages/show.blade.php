@extends('layouts.default')
@section('content')
    <section>
        <div class="konten">
            <?php
            $dbhost = "127.0.0.1";
            $dbuser = "Aflah";
            $dbpass = "";
            $db = "cv";
            $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

            $result = $conn -> query("Select * From biodata");
            $user_data = mysqli_fetch_array($result);
                echo '<table border="1"><tr>
                <th>id</th>
                <th>nama</th>
                <th>Program Keahlian</th>
                <th>jenis kelamin</th>
                <th>agama</th>
                <th>no. telepon</th>
                <th>email</th>
                <th>alamat</th>
                <th>instagram</th>
                <th>facebook</th>
                </tr>';
                
                if($result->num_rows > 0){
                    foreach ($result as $row){
                        echo "<tr>
                        <td>". $row["id"] ."</td>
                        <td>".$row["nama"]."</td>
                        <td>".$row["pkeahlian"]."</td>
                        <td>". $row["jkelamin"]."</td>
                        <td>".$row["agama"]."</td>
                        <td>". $row["ntelepon"]."</td>
                        <td>". $row["email"]."</td>
                        <td>".$row["alamat"]."</td>
                        <td>". $row["instagram"]."</td>
                        <td>". $row["facebook"]."</td>
                        <td><form method='GET' id='update' action='test.php'><button name=\"id\" form=\"update\" type=\"submit\" value=\"$row[id]\">Edit</button></form></></td>
                        <td><form method='GET' id='delete' action='delete.php'><button name=\"id\" form=\"delete\" type=\"submit\" value=\"$row[id]\" onclick=\"return confirm('Konfirmasi hapus')\">Delete</button></td>
                        </tr>";
                    }
                } else {
                    echo ("Data tidak ada");
                }
            ?>
        </div>
    </section>
@stop