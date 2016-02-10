<!DOCTYPE html>
<html>
<head>
    <title>Form</title>

    <link rel="stylesheet" type="text/css" href="./public/css/wgm-form.css" />
    <link rel="stylesheet" type="text/css" href="./public/css/wgm-grid.css" />

</head>
<body>

    <form class="wgm-form fluid">
        
        <fieldset>

        <!-- <legend>Form Wallace</legend> -->

        <div class="wgm-row">

            <div class="wgm-grid-4 wgm-grid-sm-6 wgm-grid-xs-12">

                <div class="wgm-input-group">
                    <label class="label-horizontal">mês</label>
                    <select>
                    <?php foreach (range(1, 12) as $key => $value): ?>
                        <option value="<?= $value ?>"><?= strftime('%B', mktime(0, 0, 0, $value, 1)) ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                
            </div>

            <div class="wgm-grid-4 wgm-grid-sm-6 wgm-grid-xs-12">
                <input type="text" />
            </div>
            
            <div class="wgm-grid-4 wgm-grid-sm-6 wgm-grid-xs-12">
                <input type="search" />
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

</body>
</html>