<form class="form-horizontal" role="form" data-route="<?php echo e(route('citas.update',$c->idc)); ?>" id="fEditaUsuario" data-method="PUT">
    <?php echo e(csrf_field()); ?>


<div class="row">

    <div class="form-group">
        <label for="idc" class="col-md-4 control-label">Clave</label>

        <div class="col-md-6">
            <input id="idc" type="text" class="form-control" name="idc" required value="<?php echo e($c->idc); ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="fecha" class="col-md-4 control-label">Fecha</label>

        <div class="col-md-6">
            <input id="fecha" type="text" class="form-control" name="fecha" required value="<?php echo e($c->fecha); ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="hora" class="col-md-4 control-label">Hora</label>

        <div class="col-md-6">
            <input id="hora" type="text" class="form-control" name="hora" required value="<?php echo e($c->hora); ?>">
        </div>
    </div>


    <div class="form-group">
        <label for="area_med" class="col-md-4 control-label">Area Medica</label>

        <div class="col-md-6">
            <input id="area_med" type="text" class="form-control" name="area_med" required value="<?php echo e($c->area_med); ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="num_consul" class="col-md-4 control-label">Consultorio</label>

        <div class="col-md-6">
            <input id="num_consul" type="text" class="form-control" name="num_consul" required value="<?php echo e($c->num_consul); ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="doctor" class="col-md-4 control-label">Doctor</label>

        <div class="col-md-6">
            <input id="doctor" type="text" class="form-control" name="doctor" required value="<?php echo e($c->doctor); ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="asistencia" class="col-md-4 control-label">Asisitio a la Cita</label>
        <div class="col-md-6">
            <input type="radio" id="asistencia" name="asistencia" value="Si">Si
            &nbsp &nbsp
            <input type="radio" id="asistencia" name="asistencia" value="No">No
        </div>
    </div>

</div>

  <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="button" class="btn btn-primary btnAjax" data-form="fEditaUsuario">
                Actualizar
            </button>
        </div>
    </div>
</form>