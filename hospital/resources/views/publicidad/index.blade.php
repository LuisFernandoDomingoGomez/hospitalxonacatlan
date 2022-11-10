@extends('layout.master')
@section('contenido')
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
          <h3 class="box-title" align="center">PUBLICIDAD</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
       </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
             <div class="box-header">
                 
              @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Correcto!</h4>
                <p>{{ $message }}</p>
              </div>
              @endif


              <div class="row">
                <div class="col-xs-2">
                  <a  href="{{ route('publicidad.create') }}" type="button" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i> Promociones</a>
                </div>
              </div><br>
              <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead align="center" style="background-color:#3c8dbc;color:#fff; font-family: sans-serif;">
                   <tr>
                          <th width="150px">GALERIA</th>
                        </tr>
                      </thead>

                      @if(count($publicidad)>0)
                      @foreach ($publicidad as $p)
                      <tbody>
                        <tr>
                          
                         
                          <td>
                          
                          
                           <a href="{{ route('publicidad.show',['id'=>$p->banner_id])}}" class="btn bg-maroon btn-sm"><i class="fa fa-file-photo-o"></i></a>
                           
                          
                           
                           
                          </form></td>
                        </tr>
                      </tbody>
                      @endforeach  
                      @else
                      <tbody>
                        <tr>
                          <td align="center" colspan="8"><h4><b>NO SE ENCONTRARON REGISTROS</b></h4></td>
                        </tr>
                      </tbody>   
                      @endif             


                      </table>
            </div>
            </div>
        </div>
      </div>
    </div><!-- /.row -->
  </div><!-- /.box-body -->
</div><!-- /.box -->






@endsection