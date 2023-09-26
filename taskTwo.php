<?php
include('includes/header.php');
?>
<div class="main_content">
<div class="container">

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
<h3>The "Skip Multiples of 5" output are:</h3>
<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        continue; // Skip multiples of 5
    }
    echo $i . " ";
}
?>
</div>
</div>
<?php
include('includes/footer.php');
?>

