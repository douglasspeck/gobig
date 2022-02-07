<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $title = 'Projeto Go Big – Home';
        $keywords = 'Educação';
        $css = ['main', 'header', 'fonts', 'home', 'footer'];
        $js = ['darkmode','loading'];
        include 'PHP/head.php';
    ?>
<body hidden>
    <?php include 'PHP/header.php' ?>
    <section>
        <div>
            <h1>
                Lutando pela democratização das <span class="highlight big">oportunidades</span>
            </h1>
            <p>
                Incentivamos jovens a participar de olimpíadas científicas e do conhecimento, programas educacionais nacionais e internacionais, bem como outras oportunidades acadêmicas!
            </p>
        </div>
        <div>
            <picture>
                <img src="IMG/learning/learning.png"></img>
                <figcaption>design by <a href="" class="white">stories</a></figcaption>
            </picture>
        </div>
    </section>
    <section>
        <div>
            <div class="youtube-container">
                <iframe src="https://www.youtube.com/embed/so8MFZfyJLQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div>
            <h2>
                somos um projeto, <br class="break">
                além de acadêmico, <br class="break">
                <span class="highlight bigger">social</span>    
            </h2>
            <p class="big">
                Compartilhamos experiências, inspirações, conteúdos e suporte para incentivar os pupilos.
            </p>
        </div>
    </section>
    <section>
        <div>
            <h3 class="regular center">
                conectamos <strong class="bigger">oportunidades</strong> e <br class="breakpoint">
                alunos dispostos a dar <strong>o melhor de si</strong>
            </h3>
        </div>
    </section>
    <section>
        <div>
            <h4>
                seja <span class="highlight">voluntário</span>
            </h4>
            <p>
                os voluntários são parte ativa do projeto e contatados sempre que há serviço disponível!
            </p>
        </div>
        <div>
            <h4>
                seja <span class="highlight">pupilo</span>
            </h4>
            <p>
                os pupilos são alunos, que se inscrevem para os programas internos que desejam.
            </p>
        </div>
        <div>
            <h4>
                seja <span class="highlight">colaborador</span>
            </h4>
            <p>
                os colaboradores, por sua vez, ajudam o projeto com ações de forma isolada.
            </p>
        </div>
    </section>
    <?php include 'PHP/footer.php' ?>
</body>
</html>