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

echo "<h3>Here Are Output</h3>";
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
</div>
</div>
<?php
include('includes/footer.php');
?>
