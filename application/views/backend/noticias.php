<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $subtitulo ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Adicionar'.' '.$subtitulo?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">','</div>');
                                echo form_open('admin/noticias/inserir');
                             ?>
                             <div class="form-group">
                                 <label id="txt-noticia">titulo da noticia</label>
                                 <input id="txt-noticia" name="txt-noticia" type="text" class="form-control" placeholder="Digite o titulo da noticia">

                                 <label id="txt-resumo">resumo</label>
                                 <input id="txt-resumo" name="txt-resumo" type="text" class="form-control" placeholder="Descreva o noticia">

                                 <label id="txt-imagem">link da imagem</label>
                                 <input id="txt-imagem" name="txt-imagem" type="text" class="form-control" placeholder="link da imagem">

                                 <label id="txt-link">link da noticia</label>
                                 <input id="txt-link" name="txt-link" type="text" class="form-control" placeholder="link da noticia">

                                 <label id="txt-data">data</label>
                                 <input id="txt-data" name="txt-data" type="text" class="form-control" placeholder="Digite a data">

                             </div>
                             <button type="submit" class="btn btn-default">Cadastrar</button>
                            <?php
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
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Alterar'.' '.$subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                $this->table->set_heading("titulo","Alterar","Excluir");
                                foreach($noticias as $noticia){
                                    $titulonoticia = $noticia->titulo;
                                    $alterar = anchor(base_url('admin/noticias/pagina_alterar/'.$noticia->id),'<i class="fa fa-refresh fa-fw"></i>Alterar');
                                    $excluir = anchor(base_url('admin/noticias/remover/'.$noticia->id),'<i class="fa fa-remove fa-fw"></i>Excluir');

                                    $this->table->add_row($titulonoticia,$alterar,$excluir);
                                }
                                $this->table->set_template(array('table_open' => '<table class="table table-striped">'));
                                echo $this->table->generate();
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
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!--

<form role="form">
    <div class="form-group">
        <label>titulo</label>
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