<?php

/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
// $_GET['name'];
//echo $_GET['age'];

if(isset($_POST['submit'])) {
    echo $_POST['name'];
    echo $_POST['age'];
}

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=John&age=25">Click</a>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
       <lable for="name">Name: </lable>
        <input type="text" name="name">
    </div>
    <div>
        <lable for="name">Age: </lable>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>