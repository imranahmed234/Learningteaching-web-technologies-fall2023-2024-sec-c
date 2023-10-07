<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>
</head>
<body>
    <h1>User Information Form</h1>
    <form method="post" action="process_form.php">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>
        <button>Submit</button></br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        <button>Submit</button></br>
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" required><br><br>
        <button>Submit</button></br>
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" required>Male
        <input type="radio" name="gender" value="Female" required>Female
        <input type="radio" name="gender" value="Other" required>Other<br><br>
        <button>Submit</button></br>
        <label for="degree">Degree:</label>
        <select name="degree" required>
            <option value="Bachelor">Bachelor's Degree</option>
            <option value="Master">Master's Degree</option>
            <option value="PhD">Ph.D.</option>
        </select><br><br>
        <button>Submit</button></br>
        <label for="blood_group">Blood Group:</label>
        <select name="blood_group" required>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select><br><br>
       
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $degree = $_POST["degree"];
    $blood_group = $_POST["blood_group"];

    // You can use the collected data as needed (e.g., save to a database, display it, etc.)
    
    // For demonstration purposes, we will simply display the collected data:
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Date of Birth: $dob<br>";
    echo "Gender: $gender<br>";
    echo "Degree: $degree<br>";
    echo "Blood Group: $blood_group<br>";
}
?>