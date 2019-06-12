@extends('layout.app')
@section('titulo','Interessados | UNIFP')
@section('conteudo')
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
              <img src="{{asset('images/unifp.png')}}" alt="" style="margin: 25px auto; display:block;">
            </div>

            <div class="clearfix"></div>
            <br />

            <!-- menu sidebar -->
            @include('layout.menu.sidebar')
            <!-- final menu sidebar -->

           <!-- /menu footer buttons -->
           @include('layout.menu.footer')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include('layout.menu.top')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Interessados (Visitas) <small>Novo</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nome *</label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Telefone *</label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email *</label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Observações <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Data retorno <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <button type="date" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </button>
                        </div>
                        <span class="btn btn-default btn-sm datepickerbutton" style="font-size: 13px; height: 32px;"><span class="glyphicon glyphicon-calendar"></span></span>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Hora retorno<span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <button type="button" class="btn btn-default btn-sm" style="font-size: 13px; height: 32px;"><span class="glyphicon glyphicon-time"></span></button>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Como conheceu o Curso *</label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Data Atendimento <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <button type="date" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </button>
                        </div>
                        <span class="btn btn-default btn-sm datepickerbutton" style="font-size: 13px; height: 32px;"><span class="glyphicon glyphicon-calendar"></span></span>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required />
                           Agendado
                           <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                            Sem interesse
                            <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                            Retornado
                            <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                            Retorna Contato
                            <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                            Desligado
                        </div>
                     </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">
                          <i class="fa fa-floppy-o" aria-hidden="true"></i>
                              Inserir</button>
                          <button class="btn btn-primary" type="button">
                          <i class="fa fa-close"></i>    
                          Cancelar</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

          <!-- footer content -->
          @include('layout.footer')
        <!-- /footer content -->
      </div>
    </div>
@endsection
