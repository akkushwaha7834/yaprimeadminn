<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <style>
        .box {
            color: #fff;
            padding: 20px;
            display: none;
            margin-top: 20px;
        }
    </style>
    <!-- Load jQuery library from CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input[type="checkbox"]').click(function() {
                var inputValue = $(this).attr("value");
                $("." + inputValue).toggle();
            });

            // Check checkboxes on page load and show corresponding input fields
            $('input[type="checkbox"]:checked').each(function() {
                var inputValue = $(this).attr("value");
                $("." + inputValue).show();
            });
        });
    </script>
</head>
<body>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Function to escape and sanitize input data
    function sanitize($input)
    {
        global $conn;
        return mysqli_real_escape_string($conn, trim($input));
    }

    // Check if checkboxes are selected
    if (isset($_POST["check_list"])) {
        $checkbox_values = $_POST["check_list"];

        // Loop through the selected checkboxes
        foreach ($checkbox_values as $checkbox_value) {
            $checkbox_value = sanitize($checkbox_value);
            $div_value = isset($_POST["div"][$checkbox_value]) ? sanitize($_POST["div"][$checkbox_value]) : "";
            $div2_value = isset($_POST["div2"][$checkbox_value]) ? sanitize($_POST["div2"][$checkbox_value]) : "";
            $div3_value = isset($_POST["div3"][$checkbox_value]) ? sanitize($_POST["div3"][$checkbox_value]) : "";

            // SQL query to insert data into the database
            $sql = "INSERT INTO form_data (checkbox_value, div_value, div2_value, div3_value)
                    VALUES ('$checkbox_value', '$div_value', '$div2_value', '$div3_value')";

            if ($conn->query($sql) !== TRUE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        echo "Form data submitted successfully.";
    }

    $conn->close();
}
?>

<form action="" method="post">
    <input type="checkbox" name="check_list[]" value="value_1"> Checkbox 1<br>
    <div class="value_1 box">
        <input type="text" name="div[value_1]">
        <input type="text" name="div2[value_1]">
        <input type="text" name="div3[value_1]">
    </div>
    <input type="checkbox" name="check_list[]" value="value_2"> Checkbox 2<br>
    <div class="value_2 box">
        <input type="text" name="div[value_2]">
        <input type="text" name="div2[value_2]">
        <input type="text" name="div3[value_2]">
    </div>
    <input type="checkbox" name="check_list[]" value="value_3"> Checkbox 3<br>
    <div class="value_3 box">
        <input type="text" name="div[value_3]">
        <input type="text" name="div2[value_3]">
        <input type="text" name="div3[value_3]">
    </div>
    <input type="checkbox" name="check_list[]" value="value_4"> Checkbox 4<br>
    <div class="value_4 box">
        <input type="text" name="div[value_4]">
        <input type="text" name="div2[value_4]">
        <input type="text" name="div3[value_4]">
    </div>
    <!-- Add more checkboxes as needed -->
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
