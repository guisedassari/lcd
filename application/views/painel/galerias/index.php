<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Galeria Corporativo</h1>
    </div>
</div>
<!-- /.row -->
<div class="row" >
    <?php
    if (($this->session->flashdata('success'))) {
        echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
    } elseif ($this->session->flashdata('danger')) {
        echo '<div class="alert alert-danger">' . $this->session->flashdata('danger') . '</div>';
    }
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="text-right">
                <?= anchor('welcome/add', 'Adicionar', array('class' => 'btn btn-primary')); ?>
            </div>
            <br>
        </div>
    </div>
    <?php
    $template = array('table_open' => '<table class="table table-striped" id="dataTables-example">');
    $this->table->set_template($template);
    $this->table->set_heading('Imagem', 'Label', 'Categoria', 'Subcategoria', ['class' => 'th-acoes', 'data' => 'Ações']);
    foreach ($galerias as $galeria) {
        $imagem = (explode('.', $galeria['imagem']));
        $imagem = $imagem[0] . "_thumb." . $imagem[1];
        $caminho = $galeria['categoria'] . "/" . $galeria['subcategoria'] . "/";
        $this->table->add_row(
                img(array('src' => base_url("uploads/" . $caminho . $imagem), 'class' => 'img-responsive')), $galeria['label'], $galeria['categoria'], $galeria['subcategoria'], anchor("welcome/delete/{$galeria['id_galeria']}/{$imagem}/{$galeria['imagem']}", '<i class="fa fa-trash" aria-hidden="true"></i>', array('class' => 'btn btn-danger')));
    }
    echo $this->table->generate();
    ?>
</div>

