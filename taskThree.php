<?php
include('includes/header.php');
?>
<div class="main_content">
<div class="container">
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
function sortGradesDescending($grades) {
    rsort($grades);
    print_r($grades);
}

$grades = [85, 92, 78, 88, 95];
sortGradesDescending($grades);
?>



    </div>
</div>

</div>
</div>
<?php
include('includes/footer.php');
?>

