<?php include 'components/header.php' ?>

<div class="session session-img pt-5" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), url('img/quem-somos.jpg'); height: 100vh">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="logo" href="index.php">
                    <img src="img/logo.png" alt="Rossi Lourenço Advogados" class="img-fluid">
                </a>
            </div>
            <div class="col-12 col-lg-7 ps-lg-5">
                <h1 class="font-40 color-light fw-bold mb-4">Contato</h1>
                <p class="font-18 color-light"><i class="bi bi-geo-alt-fill me-3"></i>Rua Rio Grande do Sul 797, Jd dos Estados, Campo Grande/MS</p>
                <p class="font-18 color-light"><i class="bi bi-envelope-fill me-3"></i>contato@rossilourencoadvogados.com.br</p>
                <form action="" class="mt-5">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="mb-3">
                                <input type="text" class="form-control font-17 py-3" id="name" placeholder="Nome *">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <input type="text" class="form-control font-17 py-3" id="telefone" placeholder="Telefone *">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3 mb-lg-0">
                                <input type="email" class="form-control font-17 py-3" id="email" placeholder="E-mail *">
                            </div>
                        </div>
                        <div class="col-12 col-lg-12">
                            <textarea class="form-control font-17 py-3" id="mensagem" placeholder="Mensagem *"></textarea>
                        </div>
                    </div>
                    <button class="btn bg-secondary color-light px-5 py-3 mt-4">Enviar</button>
                </form>
            </div>
            <div class="col-lg-2 d-none d-lg-block">
                <?php include 'components/navigation.php' ?>
            </div>
        </div>
    </div>
</div>


<?php include 'components/footer.php' ?>