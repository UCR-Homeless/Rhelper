
    <?php 
        echo "123";
        phpinfo();
        //echo $_POST['FirstName']; 
        
        $servername = "localhost";
        $username = "root";
        $password = "rhelper";
        $dbname = "mysql";
        // Create connection
        /*
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
        $dbc = mysqli_connect(servername, username, password, dbname);

        if (isset($_POST['submit'])) {
            $FirstName = $_POST['FirstName'];
            $LastName = $_POST['LastName'];
            $Email = $_POST['Email'];
            $SID = $_POST['SID'];
            $Password = $_POST['Password'];
            $query = "INSERT INTO rusers (first_name, last_name) VALUES ('$FirstName', '$LastName', '$Email', '$SID', '$Password')";
            mysqli_query($dbc, $query);	
            echo "<p>提交成功</p>";
        }
    
        mysqli_close($dbc);
    ?>
