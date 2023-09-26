<?php
include('includes/header.php');
?>
<div class="main_content">
<div class="container">
    <div class="card">
        <div class="card-header">
    <h1>Looping with Increment using a Function</h1>
    </div>
    <div class="card-body">
<P>Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20, and step as 2. You must call the
function to print.
Also do the same using while loop and do-while loop also.</P>
<div class="code-example">
  <pre>
    &lt;?php
    // Using a for loop
function printEvenNumbersFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

// Using a while loop
function printEvenNumbersWhile($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    }
}

// Using a do-while loop
function printEvenNumbersDoWhile($start, $end, $step) {
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
}

$start = 2; // Start from 2
$end = 20;
$step = 2;

// Calling the functions to print even numbers
echo "Using for loop: ";
printEvenNumbersFor($start, $end, $step);

echo "<br>Using while loop: ";
printEvenNumbersWhile($start, $end, $step);

echo "<br>Using do-while loop: ";
printEvenNumbersDoWhile($start, $end, $step);
    ?&gt;

  </pre>
</div>
<?php
// Using a for loop
function printEvenNumbersFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

// Using a while loop
function printEvenNumbersWhile($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    }
}

// Using a do-while loop
function printEvenNumbersDoWhile($start, $end, $step) {
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
}

$start = 2; // Start from 2
$end = 20;
$step = 2;

echo "<h4>Here Are Output</h4>";
// Calling the functions to print even numbers
echo "Using for loop: ";
printEvenNumbersFor($start, $end, $step);

echo "<br>Using while loop: ";
printEvenNumbersWhile($start, $end, $step);

echo "<br>Using do-while loop: ";
printEvenNumbersDoWhile($start, $end, $step);
?>
    </div>

    </div>



<hr>


<div class="card">
    <div class="card-header">
    <h1>Skip Multiples of 5</h1>
    </div>
    <div class="card-body">
        <p>Create a PHP script that prints numbers from 1 to 50 using a for loop. However, when the
loop encounters a multiple of 5, it should skip that number using the continue statement and
continue to the next iteration.
</p>
    <div class="code-example">
  <pre>
    &lt;?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        continue; // Skip multiples of 5
    }
    echo $i . " ";
}
?&gt;

    </div>
</div>
<h4>The "Skip Multiples of 5" output are:</h4>
<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        continue; // Skip multiples of 5
    }
    echo $i . " ";
}
?>
</div>



<hr>

<div class="card">
    <div class="card-header">
<h1>Break on Condition on Fibonacci number </h1>
    </div>
    <div class="card-body">
        <p>Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement.
</p>
<div class="code-example">
  <pre>
    &lt;?php
$first = 0;
$second = 1;
$count = 0;

while ($count < 10) {
    // Calculate the next Fibonacci number
    $next = $first + $second;

    // Check if the next Fibonacci number is greater than 100
    if ($next > 100) {
        break; // Break out of the loop
    }

    // Print the Fibonacci number
    echo $next . " ";

    // Update variables for the next iteration
    $first = $second;
    $second = $next;
    
    $count++;
}
?&gt;

</pre>
</div>
<h4>Output are</h4>
<?php
$first = 0;
$second = 1;
$count = 0;

while ($count < 10) {
    // Calculate the next Fibonacci number
    $next = $first + $second;

    // Check if the next Fibonacci number is greater than 100
    if ($next > 100) {
        break; // Break out of the loop
    }

    // Print the Fibonacci number
    echo $next . " ";

    // Update variables for the next iteration
    $first = $second;
    $second = $next;
    
    $count++;
}
?>

    </div>
</div>



<hr>


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
echo "<h4>The output are</h4>";
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

