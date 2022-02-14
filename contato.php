<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $title = 'Informação de Contato – Projeto Go Big';
        $keywords = 'Educação';
        $css = ['main', 'header', 'fonts', 'contato', 'footer'];
        $resources = [];
        include 'PHP/head.php';
    ?>
<body hidden>
    <?php include 'PHP/header.php'; ?>
    <main>
        <div id="contact-wrapper">
            <div>
                <div class="mail-icon">
                    <span class="top"></span>
                    <span class="bottom"></span>
                </div>
            </div>
            <div>
                <h1>Escreva-nos!</h1>
                <form method="post" action="PHP/sendEmail.php">
                    <input required type="text" name="name" placeholder="Seu Nome da Silva">
                    <input required type="text" name="email" placeholder="exemplo@seuemail.com">
                    <textarea required name="message" placeholder="Escreva sua mensagem aqui."></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </main>
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