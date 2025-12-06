<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Submitted Data</title>
<style>
table {
    width: 50%;
    border-collapse: collapse;
}
td, th {
    border: 1px solid black;
    padding: 10px;
}
</style>
</head>

<body>
<h2>Registration Submitted Successfully!</h2>

<table>
<tr><th>Field</th><th>Details</th></tr>
<tr><td>Full Name</td><td><?php echo $_POST['fullname']; ?></td></tr>
<tr><td>Email</td><td><?php echo $_POST['email']; ?></td></tr>
<tr><td>Mobile</td><td><?php echo $_POST['mobile']; ?></td></tr>
<tr><td>Gender</td><td><?php echo $_POST['gender']; ?></td></tr>
<tr><td>Course</td><td><?php echo $_POST['course']; ?></td></tr>
<tr><td>Address</td><td><?php echo nl2br($_POST['address']); ?></td></tr>
</table>

</body>
</html>