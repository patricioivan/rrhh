<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        
        @livewireStyles
        <style>
         @media (min-width: 0px) and (max-width: 767px) {
         
         .sistema-gestion-rrhh {
             font-size:25px !important;
         }
        
         }
             body {
            font-family: 'Roboto' !important;

            }
            html {
            font-family: 'Roboto' !important;
            }
            .fondo-rrhh {
              background-color:#EAF0FA;

            }
            .sistema-gestion-rrhh {
                font-style: normal;
                font-weight: bold;
                font-size: 55px;
                line-height: 50px;
                /* or 91% */


                color: #545358 !important;
            }
            .rr-hh {
                color: #E95E2A;
                font-weight: bold;
            }
            .sobre-rrhh {
              font-size:23px;
            }
            .beneficios {
                font-size: 36px;
                line-height: 25px;
                /* or 69% */

                text-align: center;
                letter-spacing: -0.02em;

                color: #545358;
            }
            .encabezado-texto-imagenes {
            font-style:normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 32px;
            /* or 200% */


            color: #545358;
            }
            .subencabezado-texto-imagenes {
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 22px;
            /* or 157% */

            text-align: center;

            color: #545358;
            }

            .imagen-boton-chateamos {
                letter-spacing: 0.5px;
                width: 250px;
                height:38px;
                max-width: 100%;
                margin-bottom: 20px;
                border-radius: 20px;
                background-color: #E95E2A;
                border-color:#E95E2A;
                color:white;
                opacity: 1;
                font-weight: bold;
                font-size: 14px;

                box-shadow: none !important;
                }
                .btn-success:hover, .btn-success:active, .btn-success:visited {
                background-color: #E95E2F !important;
                box-shadow: none!important;
                border-color: black !important;

                }
                .btn-success:not(:disabled):not(.disabled).active, .btn-success:not(:disabled):not(.disabled):active, .show>.btn-success.dropdown-toggle {
                color:white;
                background-color: #E95E2A;
                border-color: #E95E2A;
                }
                .btn-success.focus, .btn-success:focus {
                color:white;
                background-color: #E95E2A;
                border-color:#E95E2A;
                box-shadow: 0 0 0 0.2rem rgba(#E95E2A,1);
                }
                .open .dropdown-toggle.btn-success { 
                color: white;
                background-color: #E95E2A; 
                border-color: #E95E2A; 
                box-shadow: none!important;
                } 
                .btn-success .badge { 
                color: white;
                background-color: #E95E2A; 
                }
                .form-estilo {
                background: #FFFFFF;
                border: 1px solid #7AA2D6;
                border-color: #7AA2D6;
                color:#7AA2D6;
                box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
                border-radius: 15px;
                }

                ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
                color:#7AA2D6 !important;
                opacity: 1; /* Firefox */
                }

                :-ms-input-placeholder { /* Internet Explorer 10-11 */
                color:#7AA2D6 !important;
                }

                ::-ms-input-placeholder { /* Microsoft Edge */
                color:#7AA2D6 !important;
                }
                .cambios-guardados {
                    font-weight: bold;
                    font-size: 18px;
                    line-height: 25px;

                    color: #FFFFFF;



                }

                #wrapper {
    overflow-x: hidden;
 }
.boton-modal-empleados {

 background: none;
	color: #1B9DED;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;
}
.boton-modal-empleados:hover {
  color: #005990 ; /* Green */

}
#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  -webkit-transition: margin .25s ease-out;
  -moz-transition: margin .25s ease-out;
  -o-transition: margin .25s ease-out;
  transition: margin .25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}

#page-content-wrapper {
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
}
       
              
        </style>
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')

            <!-- Page Heading -->
           

            <!-- Page Content -->
            <main>
               @yield('content')
               
            </main>
        </div>
        @include('partial.footer')

        @stack('modals')

        @livewireScripts
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <script>
          $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
          });
        </script>
        @yield('scripts')
    </body>
</html>
