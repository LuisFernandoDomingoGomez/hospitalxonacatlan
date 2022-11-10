@extends('layout.master')
@section('contenido')
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
          <h3 class="box-title" align="center">BANNERS DE PUBLICIDAD</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
       </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                <div class="card">
                  @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Correcto!</h4>
                <p>{{ $message }}</p>
              </div>
              @endif

                  <div class="box-header">
                 
                      <div class="row with-border">
                        <div class="col-md-4"><br>
                        <div class="form-group row">
                        <label class="col-sm-6 col-form-label">BANNER 1</label>
                      </div>
                    <input type="hidden" name="" value ="{{$publicidad[0]->banner_uno}}">
                    <img src="{{asset('../storage/app/'.$publicidad[0]->banner_uno)}}" height=200 width=340>
                    </div>
                    <div class="col-md-4"><br>
                        <div class="form-group row">
                        <label class="col-sm-6 col-form-label">BANNER 2</label>
                      </div>
                    <input type="hidden" name="" value ="{{$publicidad[0]->banner_dos}}">
                    <img src="{{asset('../storage/app/'.$publicidad[0]->banner_dos)}}" height=200 width=340>
                    </div>
                    <div class="col-md-4"><br>
                        <div class="form-group row">
                        <label class="col-sm-6 col-form-label">BANNER 3</label>
                      </div>
                    <input type="hidden" name="" value ="{{$publicidad[0]->banner_tres}}">
                    <img src="{{asset('../storage/app/'.$publicidad[0]->banner_tres)}}" height=200 width=340>
                    </div>
                      </div><br>
                      <a href="{{ route('publicidad.edit',['id'=>$publicidad[0]->banner_id])}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"></i> Editar</a>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div><!-- /.row -->
  </div><!-- /.box-body -->
</div><!-- /.box -->
@endsection
