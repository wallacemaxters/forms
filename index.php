<?php #header('Refresh: 15') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    
    <link rel="stylesheet" type="text/css" href="./public/css/reset.css">
    <link rel="stylesheet" type="text/css" href="./public/css/wgm-form.css" />
    <link rel="stylesheet" type="text/css" href="./public/css/wgm-grid.css" />

</head>
<body>
    
    <section class="container">
    <form class="wgm-form wgm-login">
        <fieldset>
        <!-- <legend>Form Wallace</legend> -->
            <div class="wgm-row">
                <div class="wgm-grid-4 wgm-grid-sm-6 wgm-grid-xs-12">
                    <div class="wgm-input-group">
                        <label><small>mês</small></label>
                        <select>
                        <?php foreach (range(1, 12) as $key => $value): ?>
                            <option value="<?= $value ?>"><?= strftime('%B', mktime(0, 0, 0, $value, 1)) ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="wgm-grid-4 wgm-grid-sm-6 wgm-grid-xs-12">
                    <div class="wgm-input-group">
                        <label><small>e-mail</small></label>
                        <input type="text" />
                    </div>
                </div>
                
                <div class="wgm-grid-4 wgm-grid-sm-6 wgm-grid-xs-12">
                    
                    <div class="wgm-input-group">
                        <label><small>senha</small></label>
                        <input type="password" />
                    </div>
                </div>

            </div>
        </fieldset>
    
        <div class="wgm-row">
            
            <div class="wgm-grid-4 wgm-grid-sm-6 wgm-grid-xs-12">

                <input type="reset" name="Cancelar" />
                <button type="button">Informação</button>
                <button  type="reset" name="Cancelar">Resetar</button>
                <button type="submit">Aprovar</button>

                <button type="submit">Aprovar Foto</button>
            </div>

            <div class="wgm-grid-8 wgm-grid-xs-12">
                <select multiple="multiple">
                    <?php foreach (range(1, 12) as $key => $value): ?>
                        <option value="<?= $value ?>"><?= strftime('%b', mktime(0, 0, 0, $value, 1))?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <fieldset>
            <div class="wgm-row">                
                <div class="wgm-grid-4 wgm-grid-xs-12">
                    <input type="reset" name="Cancelar" />
                    <button type="button">Informação</button>
                    <button type="reset" name="Cancelar">Resetar</button>
                    <button type="submit">Aprovar</button>
                    <button type="submit">Aprovar</button>
                    <button type="submit">Aprovar Foto</button>
                </div>
                <div class="wgm-grid-8 wgm-grid-xs-12">
                    <select multiple="multiple">
                        <?php foreach (range(1, 12) as $key => $value): ?>
                            <option value="<?= $value ?>"><?= strftime('%B', mktime(0, 0, 0, $value, 1))?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </fieldset>

    </form>

    <div class="wgm-row">
        <div class="wgm-grid-xs-6">
            <button class="wgm-btn">WGM-BTN DEFAULT</button>
            <button class="wgm-btn wgm-green">WGM-BTN GREEN</button>
            <button class="wgm-btn wgm-red">WGM-BTN RED</button>
            <button class="wgm-btn wgm-yellow">WGM-BTN YELLOW</button>
        </div>
    </div>

    </section>

</body>
</html>
