<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Insira o seu e-mail para mudar de senha</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="enviar.php" method="POST">
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" class="form-control">
          </div>

          <div>
            <button type="submit" class="btn btn-lg btn-outline-success">Enviar</button>
          </div>
        </form>
      </div>

      <!-- Mensagens de erro. Deixarei comentado para que o BackEnd possa fazer o php -->
      <!--
            <div class='alert alert-danger alert-dismissible fade show'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <p>Usuário ou senha incorreto. Tente novamente.</p>
            </div>

            <div class='alert alert-danger alert-dismissible fade show'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <p>Usuário ou senha incorreto. Tente novamente.</p>
            </div>
          -->

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>