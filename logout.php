<?php

    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    session_destroy()

    ?>
        <script>
            window.location.href='index.php';
        </script>
    <?php

?>