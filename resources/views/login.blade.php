
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title> {{env('APP_NAME')}} - LOGIN</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="{{asset('assets/plugins/materialize/css/materialize.min.css')}}"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{asset('assets/plugins/material-preloader/css/materialPreloader.min.css')}}" rel="stylesheet">        

        	
        <!-- Theme Styles -->
        <link href="{{asset('assets/css/alpha.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>
        
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="signin-page">
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mn-content valign-wrapper">
            <main class="mn-inner container">
                <div class="valign">
                      <div class="row">
                          <div class="col s12 m6 l4 offset-l4 offset-m3">
                              <div class="card white darken-1">
                                  <div class="card-content ">
                                      <span class="card-title">Sign In</span>
                                       <div class="row">
                                           <form class="col s12" method="POST" action="/login">
                                            @csrf
                                               <div class="input-field col s12">
                                                   <input id="email" type="email" name="email" class="validate">
                                                   <label for="email">Email</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="password" type="password" name="password" class="validate">
                                                   <label for="password">Password</label>
                                               </div>
                                               <div class="col s12 right-align m-t-sm">
                                                   
                                                   <button type="submit"  class="waves-effect waves-light btn teal">LOGIN</button>
                                               </div>
                                           </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                    </div>
                </div>
            </main>
        </div>
        
        <!-- Javascripts -->
        <script src="{{asset('assets/plugins/jquery/jquery-2.2.0.min.js')}}"></script>
        <script src="{{asset('assets/plugins/materialize/js/materialize.min.js')}}"></script>
        <script src="{{asset('assets/plugins/material-preloader/js/materialPreloader.min.js')}}"></script>
        <script src="{{asset('assets/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
        <script src="{{asset('assets/js/alpha.min.js')}}"></script>
        
    </body>
</html>