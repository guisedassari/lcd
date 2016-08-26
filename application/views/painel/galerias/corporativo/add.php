<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Galeria Corporativo Iluminação</h1>
    </div>

</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">

        <?php
        date_default_timezone_set("America/Sao_Paulo");
        echo form_open_multipart('welcome/upload', array('rule' => 'form', 'class' => ''));
        $date = date("Y-m-d H:i:s");
        echo form_hidden('data', $date);
        echo form_input(array('class' => 'form-control', 'name' => 'label', 'placeholder' => 'Label'));
        $options = array(
            '' => 'Selecione uma categoria',
            'corporativo' => 'Corporativo',
            'social' => 'Social',
        );

        echo form_dropdown('categoria', $options, [],['class' => 'form-control']);
        $options = array(
            '' => 'Selecione uma subcategoria',
            'iluminacao' => 'Iluminação',
            'sonorizacao' => 'Sonirização',
            'imagem' => 'Imagem',
            'energia' => 'Energia',
        );

        echo form_dropdown('subcategoria', $options, [],['class' => 'form-control']);
        echo form_upload(array('class' => 'form-control', 'name' => 'file'));
        echo form_button(array('class' => 'btn bnt-primary', 'type' => 'submit', 'content' => 'Salvar'));
        ?>
    </div>
</div