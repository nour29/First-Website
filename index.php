<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Form</title>
</head>
<body>
    <Form action="insert.php" method="post">
        <h1>Storing Employee Data</h1>
        <p>
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="first_name">
        </p>
        <p>
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="last_name">
        </p>
        <p>
            <label for="Gender">Gender</label>
            <input type="text" id="Gender" name="gender">
        </p>
        <p>
            <label for="Address">Address</label>
            <input type="text" id="Address" name="address1">
        </p>
        <p>
            <label for="Email">Email</label>
            <input type="text" id="Email" name="email">
        </p>
        <input type="submit" value="Submit">
    </Form>
    
</body>
</html>