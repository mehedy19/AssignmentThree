<?php
include('includes/header.php');
?>
<div class="main_content">
<div class="container">
<div class="card">
    <div class="card-header">
  <h1>Task 4: Multidimensional Array</h1>


    </div>
    <div class="card-body">
    <p>Create a multidimensional array called $studentGrades to store the grades of three students.
         Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.</p>
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

