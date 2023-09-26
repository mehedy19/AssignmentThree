<?php
include('includes/header.php');
?>
<div class="main_content">
    <div class="container">

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
</div>
<?php
include('includes/footer.php');
?>