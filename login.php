<!DOCTYPE html>
<html lang="en">
<title>rhelper - General login test</title>
<meta charset="utf-8">
<body>
    <h1> Register</h1>
    <form action="/" method="POST">
        First Name: <input type="text" name="FirstName"><br>
        Last Name: <input type="text" name="LastName"><br>
        Email: <input type="text" name="Email"><br>
        SID: <input type="text" name="SID"><br>
        Password: <input type="text" name="Password"><br>
	<button type="submit">Register</button>
    </form>
    <?php 
        echo "123"
        echo $_POST['FirstName']; 
        /*
        $servername = "localhost";
        $username = "root";
        $dbname = "mysql";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM rusers";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        */
    ?>
</body>
</html>