@extends('layout.master')
@section('contenido')
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
          <h3 class="box-title" align="center">NUEVA PROMOCIÓN</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
       </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                <form class="form-sample" method="post" action="{{ route('publicidad.store') }}" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                      {!! csrf_field() !!} 
                      <p class="card-description"> Llene los campos correctamente </p>
                      <div class="row">
                        <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-5 col-form-label">BANNER 1</label>
                        <div class="col-sm-12">
                        <input type="file" name="banner_uno" class="btn btn-default btn-block" required> 
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-5 col-form-label">BANNER 2</label>
                        <div class="col-sm-12">
                        <input type="file" name="banner_dos" class="btn btn-default btn-block" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-5 col-form-label">BANNER 3</label>
                        <div class="col-sm-12">
                        <input type="file" name="banner_tres" class="btn btn-default btn-block" required>
                        </div>
                      </div>
                    </div><br>
                      </div>
                      <button type="submit" class="btn btn-primary "><i class="fa fa-save"></i> Guardar</button>
                      <button type="button" class="btn btn-danger" value="volver" name="volver" onclick="history.back()"><i class="fa fa-times-circle"></i> Cancelar</button>
                    </form>
            </div>
        </div>
      </div>
    </div><!-- /.row -->
  </div><!-- /.box-body -->
</div><!-- /.box -->






        @endsection