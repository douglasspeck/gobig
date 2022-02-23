<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $title = 'Projeto Go Big – Home';
        $keywords = 'Educação';
        $resources = [
            ['preload','image','/IMG/Logo/logo','.png',[50,399]],
            ['preload','image','/IMG/Logo/logo-dark','.png',[50,399]],
            ['preload','image','/IMG/learning/learning','.png',[200,458,682,875,1034,1400]],
            ['prefetch','https://www.youtube.com/embed/so8MFZfyJLQ']
        ];
        include 'PHP/head.php';
    ?>
<body hidden>
    <?php include 'PHP/header.php' ?>
    <main>
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
                <picture class="relative">
                    <?php 
                        $image = 'learning/learning';
                        $sizes = [200,458,682,875,1034,1400];
                        $alt = 'Ilustração de uma mulher estudando';
                        include 'PHP/image.php';
                    ?>
                    <figcaption>design by <a href="https://www.freepik.com/vectors/people" target="_blank" title="stories @ freepik.com" class="white">stories</a></figcaption>
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
            <details open>
                <summary>
                    seja <span class="highlight">voluntário</span>
                </summary>
                <p>
                    os voluntários são parte ativa do projeto e contatados sempre que há serviço disponível!
                </p>
            </details>
            <details open>
                <summary>
                    seja <span class="highlight">pupilo</span>
                </summary>
                <p>
                    os pupilos são alunos, que se inscrevem para os programas internos que desejam.
                </p>
            </details>
            <details open>
                <summary>
                    seja <span class="highlight">colaborador</span>
                </summary>
                <p>
                    os colaboradores, por sua vez, ajudam o projeto com ações de forma isolada.
                </p>
            </details>
        </section>
    </main>
    <?php
        include 'PHP/footer.php';

        $js = ['darkMode','loading'];
        if (count($js) > 0) {echo '<!-- Scrypts -->';};
        for ($i = 0; $i < count($js); $i++) {
            echo '<script src="JS/' . $js[$i] . '.js?t=' . date('YmdHis') . '"></script>';
        };
        include 'PHP/clickheat.php';
    ?>
</body>
</html>