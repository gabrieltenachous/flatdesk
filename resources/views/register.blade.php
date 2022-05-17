@extends('head_login')

@section('content')
<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0">
                                <div class="text-center mb-1">
                                    <img src="/template-admin/app-assets/images/logo/logo.png" alt="branding logo">
                                </div>
                                <div class="font-large-1  text-center">
                                    
                                </div>
                            </div>
                            <div class="card-content"> 
                                <div class="card-body">
                                    <form>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control round" id="name" name="name" placeholder="Nome" required>
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="email" class="form-control round" id="email" name="email" placeholder="Email" required>
                                            <div class="form-control-position">
                                                <i class="ft-mail"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control round" id="password" name="password" placeholder="Senha" required>
                                            <div class="form-control-position">
                                                <i class="ft-lock"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control round" id="password_confirmation" name="password_confirmation" placeholder="Confirma Senha" required>
                                            <div class="form-control-position">
                                                <i class="ft-lock"></i>
                                            </div>
                                        </fieldset> 
                                        <div class="form-group text-center">
                                            <button type="submit" id="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Cadastrar-se</button>
                                        </div>
                                        <a href="/">
                                            <div class="form-group text-center">
                                                <input type="button" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1" value="Login">
                                            </div>
                                        </a>
                                    </form> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
      </div>
    </div> 
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/template-admin/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script> 
    <script src="/template-admin/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
    <script src="/template-admin/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="/template-admin/app-assets/js/core/app.js" type="text/javascript"></script> 
    <script src="/template-admin/app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
    <script src="/template-admin/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
    <script src="/template-admin/app-assets/js/scripts/extensions/toastr.js" type="text/javascript"></script>
    <script src="/js/auth.js" type="text/javascript"></script>
    <script> 
        $('form').submit(false); 
        $('#submit').click(function(){ 
            auth.register();
        });
    </script>
@endsection
