<!-- GET:

Purpose: Retrieves (or "gets") data from the server.
How it works:
Sends data through the URL query string (appended to the URL as ?key=value pairs).
Data visibility: Data is visible in the URL and can be bookmarked or shared.
Use case: Typically used for actions that don’t modify server state, such as:
Searching.
Filtering data.
Navigating to a specific resource. -->


<?php 
echo "form data recieved"."\n";
$data=$_GET;
print_r($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Method</title>
</head>
<body>
    <div class="container">
    <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]) ?>" method="$_GET">
        <label for="fname">FirstName:</label>
        <input name="fanme" class="faname" value="Name">
        <label for="lname">LastName:</label>
        <input name="lanme" class="laname" value="Family Name">
        <input type="submit" value="submit">

    </form>
    </div>
   
</body>
</html>
