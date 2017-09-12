<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="modal-edit" role="dialog">
    <div class="modal-dialog">
    
    {!! Form::open(['url'=>'gestao-titulos/update', 'name' => 'formModal']) !!}
        {!! Form::hidden('titleId', null, array('id' => 'titleId')) !!}
        {!! Form::hidden('nv', null, array('id' => 'nv')) !!}
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Titulo</h4>
        </div>
        <div class="modal-body">
          
          {!! Form::text('title', null, array('placeholder' => 'Titulo','class' => 'form-control', 'id' => 'title')) !!}
          {!! Form::textarea('text', null, array('placeholder' => 'Texto','class' => 'form-control','style'=>'height:150px', 'id' => 'text')) !!}
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
        </div>
      </div>
     {!! Form::close() !!}
    </div>
  </div>
  
</div>