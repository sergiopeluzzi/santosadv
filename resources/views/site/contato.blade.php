@extends('app')

@section('content')

    <div role="main" class="main">
        <div class="container">
            <div class="row pt-xl">
                <div class="col-md-7">
                    <h1 class="mt-xl mb-none">Contato</h1>
                    <div class="divider divider-primary divider-small mb-xl">
                        <hr>
                    </div>
                    <p class="lead mb-xl mt-lg">Entre em contato ou nos ligue para descobrir como podemos te ajudar.</p>

                    <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                        <strong>Sucesso!</strong> Sua mensagem foi enviada e retornaremos o mais breve possível.
                    </div>

                    <div class="alert alert-danger hidden mt-lg" id="contactError">
                        <strong>Erro!</strong> Ocorreu um erro ao enviar sua mensagem. Tente novamente mais tarde!
                        <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
                    </div>

                    <form id="contactForm" action="#" method="POST">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" placeholder="Seu Nome" value="" data-msg-required="Por favor, insira seu nome." maxlength="100" class="form-control input-lg" name="name" id="name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="email" placeholder="Seu Email" value="" data-msg-required="Por favor, insira seu email." data-msg-email="Por favor, insira um email válido." maxlength="100" class="form-control input-lg" name="email" id="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" placeholder="Assunto" value="" data-msg-required="Por favor, insira o assunto." maxlength="100" class="form-control input-lg" name="subject" id="subject" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea maxlength="5000" placeholder="Mensagem" data-msg-required="Por favor, insira sua mensagem." rows="5" class="form-control input-lg" name="message" id="message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Enviar Mensagem" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Carregando...">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-4 col-md-offset-1">

                    <h4 class="mt-xl mb-none">Nosso Escritório</h4>
                    <div class="divider divider-primary divider-small mb-xl">
                        <hr>
                    </div>

                    <ul class="list list-icons list-icons-style-3 mt-xlg mb-xlg">
                        <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> {{ $data['endereco']->valor }}</li>
                        <li><i class="fa fa-phone"></i> <strong>Phone:</strong> {{ $data['fone']->valor }}</li>
                        <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:{{ $data['email']->valor }}">{{ $data['email']->valor }}</a></li>
                    </ul>

                    <h4 class="pt-xl mb-none">Horário de Atendimento</h4>
                    <div class="divider divider-primary divider-small mb-xl">
                        <hr>
                    </div>

                    <ul class="list list-icons list-dark mt-xlg">
                        <li><i class="fa fa-clock-o"></i> Seg à Sex - 09:00 às 17:00</li>
                        <li><i class="fa fa-clock-o"></i> Sab - 09:00 às 14:00</li>
                        <li><i class="fa fa-clock-o"></i> Dom - Fechado</li>
                    </ul>

                </div>
            </div>
        </div>

        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <div id="googlemaps" class="google-map google-map-footer"></div>
    </div>

@endsection