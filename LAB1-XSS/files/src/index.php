<!DOCTYPE html>
<body>
<?php
if (isset($_GET['name'])) {
    $inputValue = $_GET['name'];
    echo "<p>Hi! $inputValue</p>";
} 
?>
<form method="get" action="">
    <label for="input">Enter your name:</label>
    <input type="text" name="name" id="name" required>
    <button type="submit">Submit</button>
</form>

</body>
</html>