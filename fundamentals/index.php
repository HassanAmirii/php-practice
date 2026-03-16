/*


User Profile Mockup: Define Variables for user data (name, age, bio, status). 
Use Syntax to output this data within an HTML template to simulate a profile page.



*/
<?php 
const SITE_NAME = "dev portfolio";
$name = "hassan";
$age = 123;
$bio = "ilove pp";
$status = "single";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME ?></title>
</head>
<body>
<h1>my name is <?php echo $name?></h1>
<h2>I am <?php echo $age?> years old</h2>
    <h3> my bio: <?php echo $bio?></h3>
    <h4>im currently <?= $status?></h4>
    
</body>
</html>

