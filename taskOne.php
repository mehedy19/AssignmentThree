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
    </div>
</div>
<?php
include('includes/footer.php');
?>