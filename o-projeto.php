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
    <main>
        <section>
            <div>
                <picture class="relative">
                    <img class="square-shadow" src="https://picsum.photos/500" alt=""></img>
                </picture>
            </div>
            <div>
                <h1>Nossa Missão</h1>
                <p>trabalhamos para a democratização dos pódios de olimpíadas, das listas de mérito acadêmico e seletivas em todo país.</p>
                <p>a desigualdade educacional atinge futuros ao privar alunos de rede pública e de escolas de baixo engajamento da oportunidade de sucesso acadêmico.</p>
                <p>oportunidades acadêmicas incluem cursos extracurriculares, línguas estrangeiras, competições educacionais, olimpíadas científicas e do conhecimento, intercâmbio, summer courses, bolsas de estudo, menções honrosas, participação em atividades voluntárias e muito mais!</p>
                <p>trabalhamos para democratizar o acesso a essas ferramentas, poderosas e capazes de mudar futuros! confira nosso projeto na íntegra aqui.</p>
            </div>
        </section>
        <section>
            <div>
                <h2 class="center">Quem Procuramos?</h2>
                <details open>
                    <summary><span class="highlight">Pupilos</span></summary>
                    <p>O aluno precisa vir de um ensino de baixo engajamento com extracurriculares (falta de incentivo, aulas e apoio), especialmente se vier de uma escola pública. Não há restrição de idade ou local, trabalhamos remotamente e disponibilizamos materiais e suporte online!</p>
                    <div class="tags">
                        <span class="tag">disponibilidade</span>
                        <span class="tag">proatividade</span>
                        <span class="tag">autonomia</span>
                        <span class="tag">sonhos</span>
                        <span class="tag">metas</span>
                        <span class="tag">dedicação</span>
                        <span class="tag highlight-bg"><a href="contato.php">quero ser pupilo!</a></span>
                    </div>
                </details>
                <details>
                    <summary><span class="highlight">Voluntários e Colaboradores</span></summary>
                    <p>Procuramos voluntários com disposição para ajudar e experiência na área que irá cooperar. Não precisa ser medalhista nem destaque, basta querer compartilhar conhecimento! Nos adequaremos à sua carga horária e você pode nos ajudar a coordenar as turmas, escrever materiais, compartilhar conteúdos, dar aulas de revisão, elaborar listas e muito mais!</p>
                    <div class="tags">
                        <span class="tag">competência</span>
                        <span class="tag">forçadevontade</span>
                        <span class="tag">comprometimento</span>
                        <span class="tag">solicitude</span>
                        <span class="tag">disponibilidade</span>
                        <span class="tag highlight-bg"><a href="contato.php">quero ajudar!</a></span>
                    </div>
                </details>
            </div>
        </section>
    </main>
    <?php
        include 'PHP/footer.php';
        
        $js = ['darkmode','loading'];
        if (count($js) > 0) {echo '<!-- Scrypts -->';};
        for ($i = 0; $i < count($js); $i++) {
            echo '<script src="JS/' . $js[$i] . '.js?t=' . date('YmdHis') . '"></script>';
        };
    ?>
</body>
</html>