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
                <p>Create a PHP function called generatePassword($length) that generates a random password of the
                    specified length. The password should include lowercase letters, uppercase letters, numbers, and
                    special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12
                    characters using this function and print the password.</p>
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
                // function generatePassword($length) {
//     $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
//     $password = '';
                
                //     for ($i = 0; $i < $length; $i++) {
//         $randomChar = $characters[rand(0, strlen($characters) - 1)];
//         $password .= $randomChar;
//     }
                
                //     return $password;
// }
                
                // // Generate and print a password with a length of 12 characters.
// $password = generatePassword(12);
// echo "<p>Your generated password is: <strong>$password</strong></p>";
                ?>
                <form method="post">
                    <label for="password_length">Password Length:</label>
                    <input type="number" id="password_length" name="password_length" min="6" max="50" value="12"
                        required>
                    <button type="submit" name="generate_password">Generate Password</button>
                </form>

                <?php
                function generatePassword($length)
                {
                    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
                    $password = '';

                    for ($i = 0; $i < $length; $i++) {
                        $randomChar = $characters[rand(0, strlen($characters) - 1)];
                        $password .= $randomChar;
                    }

                    return $password;
                }

                if (isset($_POST['generate_password'])) {
                    $password_length = isset($_POST['password_length']) ? (int) $_POST['password_length'] : 12;
                    $password = generatePassword($password_length);
                    echo "<p>Your generated password is: <strong>$password</strong></p>";
                }
                ?>

            </div>
        </div>

    </div>
</div>
<?php
include('includes/footer.php');
?>