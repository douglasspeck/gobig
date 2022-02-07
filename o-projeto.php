<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $title = 'Sobre Nós – Projeto Go Big';
        $keywords = 'Educação';
        $css = ['main', 'header', 'fonts', 'footer'];
        $resources = [];
        include 'PHP/head.php';
    ?>
<body hidden>
    <?php include 'PHP/header.php'; ?>
    <?php
        include 'PHP/footer.php';
        
        $js = ['darkmode','loading'];
        if (count($js) > 0) {echo '<!-- Scrypts -->';};
        for ($i = 0; $i < count($js); $i++) {
            echo '<script src="JS/' . $js[$i] . '.js"></script>';
        };
    ?>
</body>
</html>