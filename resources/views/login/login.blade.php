 @extends('layout/login')
 @section('titulo','Login | UNIFP')   
 @section('conteudo')
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1> UNIFP</h1>
              <div>
                <input type="text" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-success submit" href="index.html">Entrar</a>
                <a class="reset_pass" href="#">Esqueceu a senha?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator"><div>
                  @include('layout/footer_login')
                </div>
              </div>
            </form>
          </section>
        </div>       
      </div>
    </div>
@endsection
