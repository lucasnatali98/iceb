<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $subtitulo ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Alterar'.' '.$subtitulo?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">','</div>');
                                foreach($cursos as $curso){
                                echo form_open('admin/cursos/alterar/'.$curso->id);

                             ?>
                             <div class="form-group">
                                 <br/>
                                 <label id="txt-curso">Nome do Curso</label>
                                 <input id="txt-curso" name="txt-curso" type="text" class="form-control" placeholder="Digite o nome do curso" value="<?php echo $curso->titulo ?>">
                                 <br/>
                                 <label id="txt-descricao">Descricao</label>
                                 <input id="txt-descricao" name="txt-descricao" type="text" class="form-control" placeholder="Descreva o curso" value="<?php echo $curso->descricao ?>">
                                 <br/>
                                 <label id="txt-video">Link do Video</label>
                                 <input id="txt-video" name="txt-video" type="text" class="form-control" placeholder="Link do Video" value="<?php echo htmlspecialchars($curso->video) ?>" >
                                 <br/>
                                 <label id="txt-atuacao">Area de Atuacao</label>
                                 <input id="txt-atuacao" name="txt-atuacao" type="text" class="form-control" placeholder="Digite a área de atuação" value="<?php echo $curso->atuacao ?>">
                                 <br/>
                                 <label id="txt-modalidade">Modalidade</label><br/>
                                 <select id="txt-modalidade" name="txt-modalidade">
                                   <option value="Bacharelado" <?php if($curso->modalidade == "Bacharelado"){ echo "selected";} ?>>Bacharelado</option>
                                   <option value="Licenciatura" <?php if($curso->modalidade == "Licenciatura"){ echo "selected";} ?>>Licenciatura</option>
                                 </select>
                                 <br/>
                                 <br/>
                                 <label id="txt-duracao">Duracao (em semestres)</label><br/>
                                 <input id="txt-duracao" name="txt-duracao" type="number" min="1" value="<?php echo $curso->duracao ?>"><br/>
                                 <br/>
                                 <label id="txt-vagas">Vagas</label><br/>
                                 <input id="txt-vagas" name="txt-vagas" type="number" min="0" value="<?php echo $curso->vagas ?>">
                                 <br/>
                                 <br/>
                                 <label id="txt-turnos">Turnos</label><br/>
                                 <select id="txt-turnos" name="txt-turnos">
                                     <option value="Diurno" <?php if($curso->turno == "Diurno"){ echo "selected";} ?>>Diurno</option>
                                     <option value="Noturno" <?php if($curso->turno == "Noturno"){ echo "selected";} ?>>Noturno</option>
                                     <option value="Integral" <?php if($curso->turno == "Integral"){ echo "selected";} ?>>Integral</option>
                                 </select>
                                <br/>
                                <br/>
                                 <label id="txt-info">Informacoes reconhecimento de curso</label>
                                 <input id="txt-info" name="txt-info" type="url" class="form-control" placeholder="Link das informações" value="<?php echo $curso->info ?>">
                             </div>
                             <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                            <?php
                                }
                                echo form_close();
                             ?>
                        </div>

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->

        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!--

<form role="form">
    <div class="form-group">
        <label>Titulo</label>
        <input class="form-control" placeholder="Entre com o texto">
    </div>
    <div class="form-group">
        <label>Foto Destaque</label>
        <input type="file">
    </div>
    <div class="form-group">
        <label>Conteúdo</label>
        <textarea class="form-control" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label>Selects</label>
        <select class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <button type="submit" class="btn btn-default">Cadastrar</button>
    <button type="reset" class="btn btn-default">Limpar</button>
</form>

-->
