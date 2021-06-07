<?php

    if($_POST['key'] == '646211'){
        print_r($_POST['key']); // you can delete this

        // Here comes the code for the flag. Redirect back to index.php#home when it finishes.





    }
    else{
        $message = "Verkeerde sleutel";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header( "refresh:0.25;url=index.php#home" );
    }

?>