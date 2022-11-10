@extends('layout.master')
@section('contenido')
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
          <h3 class="box-title" align="center">EDITAR PUBLICIDAD</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
       </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
               <form class="form-sample" method="POST" action="{{route('publicidad.update',['id'=>$publicidad->banner_id])}}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                {{ method_field('PUT') }}
                      <div class="row">
                        <div class="col-md-4"><br>
                        <div class="form-group row">
                        <label class="col-sm-5 col-form-label">BANNER 1</label>
                      </div>
                       <div class="input-group col-sm-12">
                      <input type="file" name="banner_uno" value ="{{$publicidad->banner_uno}}" style="font-size:17px;" class="btn btn-default" with=300><br>
                    <img src="{{asset('../storage/app/'.$publicidad->banner_uno)}}" height=200 width=340>
                      </div>
                    </div>
                    <div class="col-md-4"><br>
                        <div class="form-group row">
                        <label class="col-sm-5 col-form-label">BANNER 2</label>
                      </div>
                       <div class="input-group col-sm-12">
                      <input type="file" name="banner_dos" value ="{{$publicidad->banner_dos}}" style="font-size:17px;" class="btn btn-default"><br>
                    <img src="{{asset('../storage/app/'.$publicidad->banner_dos)}}" height=200 width=340>
                      </div>
                    </div>
                    <div class="col-md-4"><br>
                        <div class="form-group row">
                        <label class="col-sm-5 col-form-label">BANNER 3</label>
                      </div>
                       <div class="input-group col-sm-12">
                      <input type="file" name="banner_tres" value ="{{$publicidad->banner_tres}}" style="font-size:17px;" class="btn btn-default"><br>
                    <img src="{{asset('../storage/app/'.$publicidad->banner_tres)}}" height=200 width=340>
                      </div>
                    </div>
                      </div><br>
                      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar Cambios</button>
                      <button type="button" class="btn btn-danger" value="volver" name="volver" onclick="history.back()"><i class="fa fa-times-circle"></i> Cancelar</button>
                    </form>
            </div>
        </div>
      </div>
    </div><!-- /.row -->
  </div><!-- /.box-body -->
</div><!-- /.box -->
@endsection
                  
                 
           
                    