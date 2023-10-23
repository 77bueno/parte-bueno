<?php include 'includes/menu.php'; ?>

    <article class="banner-fundo">
        <section data-aos="fade-right"
                 data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
        <p class="texto-banner"> Desperte o gênio do código, </p>
        <p class="texto-banner-2">
            conquiste sua <br> 
            liberdade <br>
            profissional! 
        </p>

        <button class="text-slate-950 bg-[#FFBB00] font-bold p-3 rounded-md text-2xl" type="submit" name="cadastre-se">Cadastre-se</button>
        </section>
    </article>

    <section class="o-que-fazemos">
        <h2  data-aos="fade-up">O que fazemos</h2> 
                
        <p  data-aos="fade-up">Na Codelance, facilitamos a jornada dos freelancers de desenvolvimento. Nossa plataforma inteligente é projetada para simplificar a busca por projetos que correspondam às suas habilidades exclusivas e interesses pessoais. Oferecemos uma ampla gama de categorias de desenvolvimento, desde sites para web até soluções avançadas para aplicações mobiles. Encontrar projetos sob medida para você nunca foi tão fácil.<p>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#001b42" fill-opacity="1" d="M0,256L120,224C240,192,480,128,720,133.3C960,139,1200,213,1320,250.7L1440,288L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
    <article class="quem-somos">
        <img data-aos="zoom-in" src="imagens/ilustracao1.svg" alt="ilustração do site">

        <h2 data-aos="fade-up" class="qs-titulo">Quem somos</h2>
        <section>
            <p data-aos="fade-up">A Codelance é uma comunidade dedicada de desenvolvedores independentes apaixonados por tecnologia e inovação. Nossa missão é proporcionar oportunidades de sucesso para freelancers, conectando-os a projetos desafiadores em um ambiente de colaboração e crescimento mútuo. Junte-se a nós e faça parte desta comunidade que valoriza suas habilidades e aspirações. Aqui, você não está sozinho em sua jornada de desenvolvimento profissional.</p>
        </section>
    </article>


    <article class="pq-codelance">
        <img data-aos="zoom-in" src="imagens/ilustracao2.svg" alt="ilustração do site">

        <h2 data-aos="fade-up" class="pc-titulo">Por Que a codelance?</h2>
        <p data-aos="fade-up">Estamos aqui para simplificar o processo de encontrar os talentos certos para seus projetos, <b>economizando seu tempo e recursos</b>. Deixe-nos cuidar dos detalhes para que você possa se concentrar no que faz de melhor: alcançar seus objetivos.</p>
    </article>
        
    
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#001b42" fill-opacity="1" d="M0,32L80,69.3C160,107,320,181,480,176C640,171,800,85,960,58.7C1120,32,1280,64,1360,80L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
        <section class="areas-de-atuacao">
            
            <h2 data-aos="fade-up">Áreas de Atuação</h2>
            <p data-aos="fade-up">Nos destacamos como uma poucas plataformas de freelancers para <b>desenvolvedores</b>. Oferecemos um ambiente inovador onde talentos técnicos podem encontrar projetos sob medida, enquanto empresas acessam expertise de alta qualidade. Nossa abordagem revolucionária impulsiona o sucesso de freelancers e clientes, moldando o futuro do trabalho independente. </p>

            <h4 data-aos="fade-up">O que você precisa está aqui</h4>
            <ul>
                <li data-aos="fade-up">Desenvolva/Atualize seu website.</li>
                <li data-aos="fade-up">Crie o seu conteúdo.</li>
                <li data-aos="fade-up">E aumente sua performance.</li>
            </ul>
        </section>

        <section class="pt-comecar">
            <p>PRONTO PARA COMEÇAR?</p>
            <button type="submit">faça login e comece sua jornada</button>
        </section>
    </main>
<script src="js/menu.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
<script>
    AOS.init({
      duration: 800,
      once: true
    });

    <script>
        $(document).ready(function() {
                $('.contagem').each(function () {
                    var $this = $(this);
                    $({ Counter: 0 }).animate({
                        Counter: $this.text()
                    }, {
                        duration: 3000,
                        easing: 'swing',
                        step: function (now) {
                            $this.text(Math.ceil(now));
                        }
                    });
                });
            });
    </script>
</script>
</body>
</html>