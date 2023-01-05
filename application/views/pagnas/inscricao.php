<section class="header-inscricao" id="header">
  <div class="text-box">
    <h1><span class="text-warning">CINFO</span>TEC</h1>
    <p>Inscrição</p>
  </div>
</section>
<section>
  <article class="container-inscricao container">
    <div class="inscricao-titulo">
  
      <h3>Escolha o seu curso e faça a sua inscrição</h3>
  
    </div>
    <form class="inscricao-form" method="post" action="<?php echo base_url(); ?>index.php/CandidatosController/cadastrar">
      <div class="inputs">
        <h4>Dados pessoais</h4>
        <div class="espaco1"></div>
        <div class="espaco2"></div>
        <hr class="linha">
        <div class="espaco1"></div>
        <div class="espaco2"></div>
  
        <div class="col-sm-12">
          <label for="nomeCompleto" class="form-label">Nome Completo</label>
            <input type="text" name="nome" class="form-control" id="nomeCompleto" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
        </div>
  
        <div class="espaco2"></div>
  
        <div class="col-sm-12">
          <label for="naturalidade" class="form-label">Naturalidade</label>
            <input type="text" class="form-control" id="naturalidade" placeholder="" value="">
        </div>
  
  
        <div class="col-sm-12">
          <label for="dataNascimento" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="dataNascimento" placeholder="" value="">
              
        </div>
  
        <div class="espaco2"></div>
  
        <div class="col-sm-12">
          <label for="morada" class="form-label">Morada</label>
            <input type="text" class="form-control" id="morada" placeholder="" value="">
              
        </div>
  
        <div class="sexo-telefone">
          <div class="sexo my-3">
                <label for="dataNascimento" class="form-label">Género</label>
                <div>
                  <div class="form-check">
                    <input id="masculino" name="sexo" type="radio" class="form-check-input" checked>
                    <label class="form-check-label" for="masculino">Masculino</label>
                  </div>
                  <div class="form-check">
                    <input id="femenino" name="sexo" type="radio" class="form-check-input">
                    <label class="form-check-label" for="femenino">Femenino</label>
                  </div>
                </div>
          </div>
          <div class="tele">
            <label for="telefone" class="form-label">Tefefone</label>
              <input type="text" class="form-control" id="telefone" name="telefone" placeholder="" value="" required>
          </div>
        </div>
  
        <div class="espaco2"></div>
  
        <div class="col-sm-12">
            <label for="bi" class="form-label">Bilhete de Identidade</label>
              <input type="file" class="form-control" id="bi" placeholder="" value="">
               
          </div>
  
        <h4>Dados Academico</h4>
        <div class="espaco1"></div>
        <div class="espaco2"></div>
        <hr class="linha">
        <div class="espaco1"></div>
        <div class="espaco2"></div>
  
        <div class="col-md-12">
          <label for="country" class="form-label">Nível Académico</label>
          <select class="form-select" id="country">
            <option value="">Escolha...</option>
            <option>Ensino Básico</option>
            <option>Ensino Médio</option>
            <option>Ensino Superior</option>
          </select>
          
        </div>
  
        <div class="espaco2"></div>
  
        <div class="col-sm-12">
          <label for="certificado" class="form-label">Declaração/Certificado</label>
          <input type="file" class="form-control" id="certificado" placeholder="" value="">
          
        </div>

        <h4><br>Dados do Curso</h4>
        <div class="espaco1"></div>
        <div class="espaco2"></div>
        <hr class="linha">
        <div class="espaco1"></div>
        <div class="espaco2"></div>

        <div class="col-md-12">
          <label for="country" class="form-label">Curso a se Inscrever</label>
          <input type="text" class="form-control form-select" id="curso_id" placeholder="" value="" list="cursos_id">
          <datalist id="cursos_id">
          <option value="CCNA">
              <option value="CCNA">
              <option value="Desenvolvimento WEB">
              <option value="Frio">
              <option value="Eletricidade">
              <option value="Mecânica">
              <option value="AUTOCAD">
          </datalist>
          
        </div>

        <div class="espaco2"></div>
        
        <div class="col-sm-12">
            <label for="pagamento" class="form-label">Comprovativo de Pagamento</label>
              <input type="file" class="form-control" id="pagamento" placeholder="" value="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
          </div>
      </div>
      
      <div>
        <button type="submit" class="botao btn btn-warning">Enviar</button>
      </div>
  
    </form>
  </article>
</section>
