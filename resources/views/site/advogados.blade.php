@extends('app')

@section('content')

    <div role="main" class="main">
        <div class="container">
            <div class="row pt-xl">

                <div class="col-md-9">

                    <h1 class="mt-xl mb-none">Advogados</h1>
                    <div class="divider divider-primary divider-small mb-xl">
                        <hr>
                    </div>

                    <div class="row">

                        <ul class="team-list mt-xs">
                            @foreach($data['advogado'] as $advogado)
                            <li class="col-md-4 col-sm-6 mb-xl center isotope-item criminal-law new-york">
                                <a href="#">
											<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
												<span class="thumb-info-wrapper">
													<img src="img/team/team-22.jpg" class="img-responsive" alt="">
													<span class="thumb-info-title">
														<span class="thumb-info-inner">Detalhes...</span>
													</span>
												</span>
											</span>
                                </a>
                                <h4 class="mt-md mb-none">{{ $advogado->valor }}</h4>
                                <p class="mb-none">{{ $advogado->extra }}</p>
                                <span class="thumb-info-social-icons mt-sm pb-none">
											<a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a>
											<a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                                    </span>
                            </li>
                            @endforeach

                        </ul>
                    </div>

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