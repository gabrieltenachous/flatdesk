<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>FlatDesk</title>
    <link rel="apple-touch-icon" href="/template-admin/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/template-admin/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/template-admin/app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="/template-admin/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/template-admin/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="/template-admin/app-assets/vendors/css/forms/icheck/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="/template-admin/app-assets/css/app.css">
    <!-- END CHAMELEON  CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/template-admin/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/template-admin/app-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light"> 
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              
            </ul>
            <ul class="nav navbar-nav float-right" style="padding: 30px;color:white;">         
              <div class="dropdown-divider"></div><a ><i class="ft-power"></i> Logout</a>
            </ul>
          </div>
        </div>
      </div>
    </nav> 
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true" data-img="/template-admin/app-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">        
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation"> 
        </ul>
      </div>
      <div class="navigation-background"></div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Lista de Tarefas</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">  
                  <li class="breadcrumb-item active">Tarefas
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">
            <section class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-head">
                            <div class="card-header"> 
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <button id="register" data-toggle="modal" data-target="#taskModel" class="btn btn-primary btn-sm"><i class="ft-plus white"></i> Cadastrar</button> 
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body"> 
                                <div class="table-responsive">
                                <table id="invoices-list" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Status</th>
                                            <th>Nome</th>
                                            <th>Descrição</th>
                                            <th>Criação</th>  
                                            <th>Atualizar</th> 
                                            <th>Deletar</th> 
                                        </tr>
                                    </thead>
                                    <tbody id="tbody-list"> 
                                         
                                    </tbody> 
                                </table>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
        </div>
      </div>
    </div>  
    <input type="hidden" id="token" name="token" value="{{$token}}"> 
    <div class="modal fade" id="taskModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastrar Tarefa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="form_register">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nome:</label>
              <input type="text" id="name" class="form-control" id="name" placeholder="Nome">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Descrição:</label>
              <textarea class="form-control" id="description" placeholder="Descrição" ></textarea> 
            </div> 
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Status:</label> 
              <input type="checkbox" class="form-control" name="status" id="status" >
            </div> 
            <input type="hidden" id="id" name="id">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" id="confirm_register" class="btn btn-primary">Confirmar</button>
        </div>
      </div>
    </div>
  </div>

    <style> 
        .character35 {
            max-width: 35ch;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/template-admin/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script> 
    <script src="/template-admin/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
    <script src="/template-admin/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="/template-admin/app-assets/js/core/app.js" type="text/javascript"></script> 
    <script src="/template-admin/app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="/js/auth.js" type="text/javascript"></script>
    <script src="/js/task.js" type="text/javascript"></script>
    <script>  
      $('form').submit(false); 
      task.index();
      $('#register').click(function(){
          $('#id').val(null);
          $('#taskModel').modal()
      });
      $('#confirm_register').click(function(){
        if($('#id').val()){ 
          task.update();
        }else{ 
          task.create();
        }
      }) 
      function update(id){
        task.show(id);
      }
      function del(id){
        Swal.fire({
          title: 'Voce tem certeza?',
          text: "Essa ação é irrevercivel!!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sim, deletar!'
        }).then((result) => {
          if (result.isConfirmed) {
            task.delete(id); 
          }
        })
        // task.delete(id);
      }
    </script>
  </body>
</html>