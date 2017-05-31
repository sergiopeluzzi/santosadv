@extends('app')

@section('content')

    <div role="main" class="main">
        <div class="container">
            <div class="row pt-xl">

                <div class="col-md-9">

                    <h1 class="mt-xl mb-none">Áreas de Atuação</h1>
                    <div class="divider divider-primary divider-small mb-xl">
                        <hr>
                    </div>

                    <p class="lead mb-xl mt-lg">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>


                    @foreach($data['areaatuacao'] as $areaatuacao)

                    <div class="feature-box feature-box-style-2 mb-xl pt-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                        <div class="feature-box-icon">
                            <img src="img/demos/law-firm/icons/criminal-law.png" alt="" />
                        </div>
                        <div class="feature-box-info ml-md">
                            <h4 class="mb-sm">{{ $areaatuacao->extra }}</h4>
                            <p>{{ $areaatuacao->valor }}</p>
                            <a class="mt-md" href="#">Leia Mais <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                    @endforeach

                </div>

                <div class="col-md-3">
                    <aside class="sidebar">

                        <h4 class="mt-xl mb-md">Contato</h4>
                        <p>Entre em contato ou nos ligue para descobrir como podemos te ajudar.</p>

                        <div class="divider divider-primary divider-small mb-xl">
                            <hr>
                        </div>

                        <form id="contactForm" action="#" method="POST">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Nome *</label>
                                        <input type="text" value="" data-msg-required="Por favor, insira seu nome." maxlength="100" class="form-control" name="name" id="name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Email *</label>
                                        <input type="email" value="" data-msg-required="Por favor, insira seu endereço de email." data-msg-email="Por favor, insira um email válido." maxlength="100" class="form-control" name="email" id="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Assunto *</label>
                                        <input type="text" value="" data-msg-required="Por favor, insira o assunto." maxlength="100" class="form-control" name="subject" id="subject" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Mensagem *</label>
                                        <textarea maxlength="5000" data-msg-required="Por favor, insira a mensagem." rows="3" class="form-control" name="message" id="message" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Enviar Mensagem" class="btn btn-primary" data-loading-text="Carregando...">

                                    <div class="alert alert-success hidden" id="contactSuccess">
                                        Sua mensagem foi enviada com sucesso.
                                    </div>

                                    <div class="alert alert-danger hidden" id="contactError">
                                        Ocorreu um erro ao enviar sua mensagem.
                                    </div>
                                </div>
                            </div>
                        </form>
                    </aside>
                </div>
            </div>

        </div>
    </div>

@endsection