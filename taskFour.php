<?php
include('includes/header.php');
?>
<div class="main_content">
<div class="container">
<div class="card">
    <div class="card-header">
  <h1>Fibonacci Series printing using a Function</h1>


    </div>
    <div class="card-body">
    <p>Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
this 15 as an argument of a function and use a for loop to generate these numbers and print
them by calling the function.</p>
<div class="code-example">
  <pre>
    &lt;?php
    function printFibonacci($count) {
    $num1 = 0;
    $num2 = 1;

    if ($count <= 0) {
        echo "Invalid input. Count must be greater than 0.";
        return;
    } elseif ($count == 1) {
        echo $num1;
        return;
    }

    echo $num1 . ", " . $num2;

    for ($i = 2; $i < $count; $i++) {
        $num3 = $num1 + $num2;
        echo ", " . $num3;
        $num1 = $num2;
        $num2 = $num3;
    }
}

$number_of_terms = 15;
printFibonacci($number_of_terms);


    ?&gt;

</pre>
</div>

    <?php
function printFibonacci($count) {
    $num1 = 0;
    $num2 = 1;

    if ($count <= 0) {
        echo "Invalid input. Count must be greater than 0.";
        return;
    } elseif ($count == 1) {
        echo $num1;
        return;
    }

    echo $num1 . ", " . $num2;

    for ($i = 2; $i < $count; $i++) {
        $num3 = $num1 + $num2;
        echo ", " . $num3;
        $num1 = $num2;
        $num2 = $num3;
    }
}
echo "<h3>The output are</h3>";
$number_of_terms = 15;
printFibonacci($number_of_terms);
?>

    </div>
</div>

</div>
</div>
<?php
include('includes/footer.php');
?>

