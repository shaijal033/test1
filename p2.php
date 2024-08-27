<?php
function db_connect(){
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=p1;","root","");
        return $pdo;
    }
    catch(Exception $e){
        return false;
    }
}


if($pdo=db_connect()){

    if (isset($_POST['name'], $_POST['age'], $_POST['email'], $_POST['mobile'],$_FILES['image']))
    {
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $image=$_FILES['image'];

    $image_path="./uploads/".$image['name'];
    move_uploaded_file($image['tmp_name'],$image_path);


    $stmt = $pdo->prepare('INSERT INTO reg1 VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$name, $age, $email, $mobile, $image_path]);
    echo "Created Successfully!";

    }
}
    $pdo = db_connect();

    if ($pdo) {
        // Prepare and execute the query to select data
        $stmt = $pdo->query("SELECT * FROM reg1");
       
        // Fetch all rows as an associative array
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
       
        // Check if there are any rows returned
        if ($rows) {
            // Loop through the rows and display the data
            foreach ($rows as $row) {
                echo "Name: " . $row['name'] . "<br>";
                echo "Age: " . $row['age'] . "<br>";
                echo "Email: " . $row['email'] . "<br>";
                echo "Mobile: " . $row['mobile'] . "<br>";

                echo "Image: <img src='" . $row['image'] . "' width='100px' height='100px'><br>";
               
                echo "<hr>";
            }
        } else {
            echo "No data found.";
        }
    } else {
        echo "Database connection failed.";
    }


?>