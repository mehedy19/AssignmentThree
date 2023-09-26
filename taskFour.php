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

    </div>
</div>
<?php
include('includes/footer.php');
?>