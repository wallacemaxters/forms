<?php #header('Refresh: 15') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Example</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <link rel="stylesheet" type="text/css" href="./public/css/reset.css">
    <link rel="stylesheet" type="text/css" href="./public/css/wgm-form.css" />
    <link rel="stylesheet" type="text/css" href="./public/css/wgm-grid.css" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    
    <script src="./public/js/jquery/jquery.js"></script>
    <script src="./public/js/wgm-form.js"></script>
    <script>
    $(function (){
        $('.wgm-form').wgmFormMessage();
    });
    </script>

    <!-- <script src="./public/js/react/react.js"></script>
    <script src="./public/js/react/react-dom.js"></script>
    <script src="./public/js/react/browser.min.js"></script> -->

</head>
<body>
    
    <section class="wgm-container">

    <form class="wgm-form fluid" autocomplete="off">
    
        <fieldset>

            <div class="wgm-row">

                <div class="wgm-grid-5 wgm-grid-sm-6 wgm-grid-xs-12">
                    <div class="wgm-input-group">
                        <label><i class="fa fa-user"></i></label>
                        <input type="email" value="1" placeholder="E-mail" />
                    </div>
                </div>
                <div class="wgm-grid-5 wgm-grid-sm-6 wgm-grid-xs-12">
                    <div class="wgm-input-group">
                        <label title="Senha">
                            <i class="fa fa-unlock-alt"></i>
                        </label>
                        <input type="password" placeholder="Senha" />
                    </div>
                </div>

                <div class="wgm-grid-2 wgm-grid-xs-12">
                    <button type="submit">Entrar</button>
                </div>
            </div>
        </fieldset>
            
    </form>

    <form class="wgm-form" autocomplete="off">
        <fieldset>
            <div>
                <div class="wgm-input-group">
                    <label><i class="fa fa-user"></i></label>
                    <input type="email" value="1" placeholder="E-mail" />
                </div>
            </div>
            <div>
                <div class="wgm-input-group">
                    <label title="Senha">
                        <i class="fa fa-unlock-alt"></i>
                    </label>
                    <input type="password" placeholder="Senha" />
                </div>
            </div>
            <div style="text-align: right">
                <button type="reset">Cancelar</button>
                <button type="submit">Entrar</button>
            </div>
        </fieldset>
    </form>

    <form class="wgm-form fluid" autocomplete="off">
        <fieldset>
            <div class="wgm-row">
                <div class="wgm-grid-md-1 wgm-grid-3" style="text-align: right;overflow: hidden;">
                    <label>E-mail</label>
                </div>
                <div class="wgm-grid-md-11 wgm-grid-9">
                    <input type="email" value="1" placeholder="E-mail" />
                </div>
            </div>
            <div class="wgm-row">
                <div class="wgm-grid-md-1 wgm-grid-3" style="text-align: right">
                    <label>Senha</label>
                </div>
                <div class="wgm-grid-md-11 wgm-grid-9">
                    <input type="password" value="1" placeholder="Senha" />
                </div>
            </div>

            <div class="wgm-row" style="text-align: right">
                <div class="wgm-grid-12">
                    <button type="reset">Cancelar</button>
                    <button type="submit">Entrar</button>
                </div>
            </div>
        </fieldset>
    </form>

    </section>
</body>
</html>