<!DOCTYPE html>
<html>
<head>
    <title>Login Example</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <link rel="stylesheet" type="text/css" href="./public/css/wgm-form.css" />
    <link rel="stylesheet" type="text/css" href="./public/css/wgm-grid.css" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <style type="text/css">

    form#login{
    	/*width:0%;*/
    }
    </style>

</head>
<body>
	
	<form class="wgm-form fluid" autocomplete="off" id="login">
		
		<fieldset class="wgm-row">

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
		</fieldset>
		

	</form>

	<form class="wgm-form fluid" autocomplete="off" id="login">
		
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

			<div>
				<button type="submit">Entrar</button>
			</div>
		</fieldset>

	</form>

		
</body>
</html>