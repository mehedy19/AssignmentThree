<?php
include('includes/header.php');
?>
<div class="main_content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Task 1: String Manipulation</h1>
            </div>
            <div class="card-body">
                <P>Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.".
                    Write a PHP function which takes "$text" as an argument to:<br>
                    Convert the string to all lowercase.
                    <br>
                    Replace "brown" with "red" in the string.
                    <br>
                    Print the modified text.
                </P>
                <div class="code-example">
                    <pre>
    &lt;?php
 
function manipulateString($text) {
    // Convert the string to all lowercase.
    $text = strtolower($text);
    
    // Replace "brown" with "red" in the string.
    $text = str_replace("brown", "red", $text);
    
    // Print the modified text.
    echo $text;
}

$text = "The quick brown fox jumps over the lazy dog.";
manipulateString($text);
    ?&gt;

  </pre>
                </div>
                <h3>The output are:</h3>
                <?php
                function manipulateString($text)
                {
                    // Convert the string to all lowercase.
                    $text = strtolower($text);

                    // Replace "brown" with "red" in the string.
                    $text = str_replace("brown", "red", $text);

                    // Print the modified text.
                    echo $text;
                }

                $text = "The quick brown fox jumps over the lazy dog.";
                manipulateString($text);
                ?>

            </div>

        </div>
        <hr>

        <div class="card">
            <div class="card-header">
                <h1>Task 2: Array Manipulation</h1>
            </div>
            <div class="card-body">
                <p>Create an array called $numbers containing the numbers 1 to 10. Write a PHP
                    function which takes the "$numbers" array as an argument to remove the even
                    numbers from the array and print the resulting array.
                </p>
                <div class="code-example">
                    <pre>
    &lt;?php

function removeEvenNumbers($numbers) {
    // Remove even numbers from the array.
    $result = array_filter($numbers, function ($num) {
        return $num % 2 != 0;
    });
    
    // Print the resulting array.
    print_r($result);
}

$numbers = range(1, 10);
removeEvenNumbers($numbers);


========== Another way========

function removeEvenNumbers($numbers) {
    // Remove even numbers from the array using square brackets.
    $result = [];
    foreach ($numbers as $num) {
        if ($num % 2 != 0) {
            $result[] = $num;
        }
    }
    
    // Print the resulting array.
    print_r($result);
}
// As I did not assign any value  to $numbers before function so call the variable can be show error. example inside comment:
//$numbers = range(1, 10);
//removeEvenNumbers($numbers);
//To avoied error I would like to call like this :
removeEvenNumbers(range(1, 10));

?&gt;

    </div>
</div>

<?php
echo "<h4>Using array_filter result:</h4>";
function removeEvenNumbers($numbers)
{
    // Remove even numbers from the array.
    $result = array_filter($numbers, function ($num) {
        return $num % 2 != 0;
    });

    // Print the resulting array.
    print_r($result);
}

$numbers = range(1, 10);
removeEvenNumbers($numbers);
//==========================================================================
echo "<br><h4>Using using square brackets[] result:</h4>";
function filterEvenNumbers($numbers)
{
    // I like to use [] thats why 
    $result = [];
    foreach ($numbers as $num) {
        if ($num % 2 != 0) {
            $result[] = $num;
        }
    }
    print_r($result);
}
filterEvenNumbers(range(1, 10));
?>


<p><em>Note: Here we can see array indexes are different, because array_filter() returns a new array, and square brackets append the element to the existing array.</em></p>

</div>
<hr>

<div class="card">
    <div class="card-header">
<h1>Task 3: Array Sorting </h1>
    </div>
    <div class="card-body">
        <p> Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP 
        function which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array.
</p>
<div class="code-example">
  <pre>
    &lt;?php

    function sortGradesDescending($grades) {
        rsort($grades);  // Sort the array in descending order.
        print_r($grades); // Print the sorted grades as an array.
}

$grades = [85, 92, 78, 88, 95];
sortGradesDescending($grades);

?&gt;

</pre>
                </div>
                <h4>Output are</h4>
                <?php
                function sortGradesDescending($grades)
                {
                    rsort($grades);
                    print_r($grades);
                }

                $grades = [85, 92, 78, 88, 95];
                sortGradesDescending($grades);
                ?>


            </div>
        </div>

        <hr>

        <div class="card">
            <div class="card-header">
                <h1>Task 4: Multidimensional Array</h1>


            </div>
            <div class="card-body">
                <p>Create a multidimensional array called $studentGrades to store the grades of three students.
                    Each student has grades for three subjects: Math, English, and Science. Write a PHP function which
                    takes "$studentGrades" as an argument to calculate and print the average grade for each student.</p>
                <div class="code-example">
                    <pre>
    &lt;?php

function calculateAverageGrades($studentGrades) {
    // Calculate and print the average grade for each student.
    foreach ($studentGrades as $student => $grades) {
        $average = array_sum($grades) / count($grades);
        echo " Average grade for $student: $average"; 
    }
}

$studentGrades = [
    "Student1" => ["Math" => 90, "English" => 85, "Science" => 88],
    "Student2" => ["Math" => 78, "English" => 92, "Science" => 80],
    "Student3" => ["Math" => 88, "English" => 90, "Science" => 95]
];

calculateAverageGrades($studentGrades);

    ?&gt;

</pre>
                </div>

                <?php
                function calculateAverageGrades($studentGrades)
                {
                    // Calculate and print the average grade for each student.
                    foreach ($studentGrades as $student => $grades) {
                        $average = array_sum($grades) / count($grades);
                        echo "<p><strong>Average grade for $student:</strong> $average <p>";
                    }
                }

                $studentGrades = [
                    "Student1" => ["Math" => 90, "English" => 85, "Science" => 88],
                    "Student2" => ["Math" => 78, "English" => 92, "Science" => 80],
                    "Student3" => ["Math" => 88, "English" => 90, "Science" => 95]
                ];

                calculateAverageGrades($studentGrades);
                ?>


            </div>
        </div>

        <hr>

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
        <br>
    </div>
</div>
<?php
include('includes/footer.php');
?>