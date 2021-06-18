<div class="container" style="padding-top: 120px">
    <div class="barra">
        <form>
            <div class="form-row">
                <?php
                foreach ($criterios as $key => $criterio) {
                    ?>
                    <div class="form-group col-sm">
                            <label style="color: white" for=""><?= $key ?></label>
                            <?php
                            if (is_array($criterio)) {
                                ?>
                                <select class="form-control">
                                    <?php
                                    foreach ($criterio as $opcion) {
                                        ?>
                                        <option><?= $opcion ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <?php
                            } else {
                                ?>
                                <input type="number" class="form-control" id="" min="1" placeholder="Cantidad de Habitaciones">
                                <?php
                            }
                            ?>
                    </div>
                    <?php
                }
                ?>
            </div>
            <input class="btn btn-primary btn-block" type='button' id='hideshow' value='Filtrar' onclick="location.href='#result';">
        </form>
    </div>
</div>
<br>
<br>
