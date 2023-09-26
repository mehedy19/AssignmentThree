<?php
include('includes/header.php');
?>
<div class="main_content">
<div class="container">
<div class="card">
    <div class="card-header">
  <h1>Task 5: Password Generator</h1>


    </div>
    <div class="card-body">
    <p>Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.</p>
<div class="code-example">
  <pre>
    &lt;?php
function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomChar = $characters[rand(0, strlen($characters) - 1)];
        $password .= $randomChar;
    }

    return $password;
}

// Generate and print a password with a length of 12 characters.
$password = generatePassword(12);
echo $password;


    ?&gt;

</pre>
</div>

<?php
function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomChar = $characters[rand(0, strlen($characters) - 1)];
        $password .= $randomChar;
    }

    return $password;
}

// Generate and print a password with a length of 12 characters.
$password = generatePassword(12);
echo $password;
?>


    </div>
</div>

</div>
</div>
<?php
include('includes/footer.php');
?>

