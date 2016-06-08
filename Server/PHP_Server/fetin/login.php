<!DOCTYPE html>
<html>
  <head>
    <title>Acesso restrito - Future Farm</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Blue Moon - Responsive Admin Dashboard" />
    <meta name="keywords" content="Notifications, Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Wrapbootstrap, Bootstrap, bootstrap.gallery" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="shortcut icon" href="img/favicon.ico">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/new.css" rel="stylesheet">
    <!-- Important. For Theming change primary-color variable in main.css  -->

    <link href="fonts/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-40304444-1', 'iamsrinu.com');
      ga('send', 'pageview');

    </script>
  </head>

  <body>

    <!-- Main Container start -->
    <div class="dashboard-container">

      <div class="container">

        <!-- Row Start -->
        <div class="row">
          <div class="col-lg-4 col-md-4 col-md-offset-4">
            <div class="sign-in-container">
              <form action="auth.php" class="login-wrapper" method="post">
                <div class="header">
                  <div class="row">
                    <div class="col-md-12 col-lg-12">
                      <h3>Acesso Restrito<img src="img/logo1.png" alt="Logo" class="pull-right"></h3>
                      <p>Insira suas informações de acesso abaixo.</p>
                    </div>
                  </div>
                </div>
                
                <div class="content">
                  
                    <div class="form-group">
                      <label for="userName">Nome de Usuário</label>
                      <input name="login" type="text" class="form-control" id="userName" placeholder="User Name">
                    </div>
                    <div class="form-group">
                      <label for="Password1">Senha</label>
                      <input name="senha" type="password" class="form-control" id="Password1" placeholder="Password">
                    </div>
                  </div>
                  <div class="actions">
                    <input class="btn btn-danger" name="Login" type="submit" value="Entrar">
                    <a class="link" href="#">Esqueci minha senha?</a>
                    <div class="clearfix"></div>
                  </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Row End -->
        
      </div>
    </div>
    <!-- Main Container end -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>