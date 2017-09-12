@extends('includes/head')
@extends('includes/modal-add-title')
@extends('includes/modal-edit')

<!DOCTYPE html>
<html lang="pt-br">
@section('includes/head') @endsection

<body>
  @section('includes/modal-add-title')
  @endsection
  @section('includes/modal-edit')
  @endsection
  <div class="container-fluid">
    <a data-toggle="modal" data-nv="1" class="add-title btn btn-primary"
      href="#modal-add">Novo Titulo</a>
    <div class="panel-group">
      <?php
      $countNv1 = 0;
      $test = "test";
    ?>
        @foreach($allNv1 as $nv1)
        <?php
        $countNv1++;
        $countNv2 = 0;
        $countNv3 = 0;
        $countNv4 = 0;
      ?>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#title-nv1-{{$nv1->id}}">{{$countNv1}} - {{$nv1->title}}</a>
                <a data-toggle="modal" data-nv="1" data-id="{{$nv1->id}}" data-title="{{$nv1->title}}"
                  data-text="{{$nv1->text}}" class="edit-title btn btn-primary" href="#modal-edit">Editar</a>
                <a data-toggle="modal" data-nv="2" data-idnv1="{{$nv1->id}}" class="add-title btn btn-primary"
                  href="#modal-add">Novo Subtitulo</a>
              </h4> 
            </div>
          </div>
          <div id="title-nv1-{{$nv1->id}}" class="panel-collapse collapse title-nv2">
            <ul class="list-group">

              @foreach($nv1->nv2 as $nv2)
              <?php $countNv2++; ?>
              <li class="list-group-item">
                <a data-toggle="collapse" href="#title-nv2-{{$nv2->id}}">
                  {{$countNv1}}.{{$countNv2}} - {{$nv2->title}}
                </a>
                <a data-toggle="modal" data-nv="2" data-id="{{$nv2->id}}" data-title="{{$nv2->title}}"
                  data-text="{{$nv2->text}}" class="edit-title btn btn-primary" href="#modal-edit">Editar</a>
                <a data-toggle="modal" data-nv="3" data-idnv1="{{$nv1->id}}" data-idnv2="{{$nv2->id}}"
                  class="add-title btn btn-primary" href="#modal-add">Novo Subtitulo</a>
                  
              </li>

              <div id="title-nv2-{{$nv2->id}}" class="panel-collapse collapse title-nv3">
                <ul class="list-group">

                  @foreach($nv2->nv3 as $nv3)
                  <?php $countNv3++; ?>
                  <li class="list-group-item">
                    <a data-toggle="collapse" href="#title-nv3-{{$nv3->id}}">
                        {{$countNv1}}.{{$countNv2}}.{{$countNv3}} - {{$nv3->title}}
                      </a>
                      <a data-toggle="modal" data-nv="3" data-id="{{$nv3->id}}" data-title="{{$nv3->title}}"
                        data-text="{{$nv3->text}}" class="edit-title btn btn-primary" href="#modal-edit">Editar</a>
                      <a data-toggle="modal" data-nv="4" data-idnv1="{{$nv1->id}}" data-idnv2="{{$nv2->id}}"
                        data-idnv3="{{$nv3->id}}" class="add-title btn btn-primary" href="#modal-add">Novo Subtitulo</a>
                  </li>
                  <div id="title-nv3-{{$nv3->id}}" class="panel-collapse collapse title-nv4">
                    <ul class="list-group">

                      @foreach($nv3->nv4 as $nv4)
                      <?php $countNv4++; ?>
                      <li class="list-group-item">
                        {{$countNv1}}.{{$countNv2}}.{{$countNv3}}.{{$countNv4}} - {{$nv4->title}}
                        <a data-toggle="modal" data-nv="4" data-id="{{$nv4->id}}" data-title="{{$nv4->title}}"
                        data-text="{{$nv4->text}}" class="edit-title btn btn-primary" href="#modal-edit">Editar</a>
                      </li>
                      
                      @endforeach
                    </ul>
                  </div>
                  @endforeach
                </ul>
              </div>
              @endforeach

            </ul>

          </div>
          @endforeach
    </div>
  </div>

</body>

</html>