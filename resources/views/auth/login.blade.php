<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Entrar | Santos Advogados Associados</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-shop.css') }}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('css/skins/skin-digital-agency.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('vendor/modernizr/modernizr.min.js') }}"></script>

</head>
<body>

<div class="body">
    <header id="header" class="header-no-border-bottom" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 115, 'stickySetTop': '-115px', 'stickyChangeLogo': false}">
        <div class="header-body">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-logo">
                            <a href="{{ route('site.inicio') }}">
                                <img alt="Porto" width="164" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="{{ asset('img/demos/law-firm/logo-law-firm.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div role="main" class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="featured-boxes">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="featured-box featured-box-primary align-left mt-xlg">
                                    <div class="box-content">
                                        <h4 class="heading-primary text-uppercase mb-md">Já sou cadastrado</h4>
                                        <form action="{{ route('login') }}" id="frmSignIn" method="post">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <div class="col-md-12">
                                                        <label for="email">Endereço de E-mail</label>
                                                        <input type="email" id="email" name="email" class="form-control input-lg" value="{{ old('email') }}">
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <div class="col-md-12">
                                                        <a class="pull-right" href="{{ route('password.request') }}">(Esqueceu sua senha?)</a>
                                                        <label for="password">Senha</label>
                                                        <input type="password" id="password" name="password" class="form-control input-lg" value="{{ old('password') }}">
                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="remember-box checkbox">
                                                        <label for="remember">
                                                            <input type="checkbox" id="remember" name="rememberme" {{ old('remember') ? 'checked' : '' }}>Continuar Conectado
                                                        </label>
                                                    </span>
                                                </div>
                                                <div class="col-md-6">

                                                    <input type="submit" value="Entrar" class="btn btn-primary pull-right mb-xl" data-loading-text="Carregando...">
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <a href="{{ route('register') }}" class="btn btn-primary mb-xl col-md-12">Não sou cadastrado, desejo me cadastrar!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Vendor -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-cookie/jquery-cookie.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/common/common.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.validation/jquery.validation.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
<script src="{{ asset('vendor/isotope/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('vendor/vide/vide.min.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('js/theme.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('js/custom.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('js/theme.init.js') }}"></script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-12345678-1', 'auto');
    ga('send', 'pageview');
</script>
 -->

</body>
</html>

