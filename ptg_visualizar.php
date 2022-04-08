<?php
    include('./partes/header.php');
    include('./partes/navbar.php');

    $id = $_GET['id'];

    $script = "SELECT * FROM postagem WHERE id = '$id'";
    $exec_mysqli = mysqli_query($connect, $script);

    while($row = mysqli_fetch_array($exec_mysqli)) {
        $title = $row['title'];
        $content = $row['content'];
        $credits = $row['credits'];
    }
?>

    <section class="bg-cor">
        <div class="container">
            <div class='row d-flex justify-content-center py-5'>
                <div class='col-auto'>
                    <div class='card' style='width: 45rem;'>
                        <div class='card-body d-flex flex-column justify-content-center'>
                            <h5 class='card-title text-center'><?php echo $title; ?></h5>
                            <pre class='card-text text-justify lados' style='width: 100%; white-space: pre-line;'><?php echo $content; ?>"</pre>
                        </div>
                        <div class='card-footer'>
                        Escrito por <cite title='Escrito por'><?php echo $credits; ?></cite>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    include('./partes/footer.php');
?>
