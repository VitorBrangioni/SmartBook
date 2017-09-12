<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="modal-add" role="dialog">
    <div class="modal-dialog">
    
    {!! Form::open(['url'=>'gestao-titulos/store', 'name' => 'formModal']) !!}
        {!! Form::hidden('nv', null, array('id' => 'nv')) !!}
        {!! Form::hidden('idNv1', null, array('id' => 'idNv1')) !!}
        {!! Form::hidden('idNv2', null, array('id' => 'idNv2')) !!}
        {!! Form::hidden('idNv3', null, array('id' => 'idNv3')) !!}
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Novo Titulo</h4>
        </div>
        <div class="modal-body">
          
          {!! Form::text('title', null, array('placeholder' => 'Titulo','class' => 'form-control', 'id' => 'title')) !!}
          {!! Form::textarea('text', null, array('placeholder' => 'Texto','class' => 'form-control','style'=>'height:150px', 'id' => 'text')) !!}
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
        </div>
      </div>
     {!! Form::close() !!}
    </div>
  </div>
  
</div>