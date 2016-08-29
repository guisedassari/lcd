<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Galeria de Fotos    </h1>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Cadastre uma Imagem </div>
            <div class="panel-body">
                <?php
                date_default_timezone_set("America/Sao_Paulo");
                echo form_open_multipart('welcome/upload', array('rule' => 'form', 'class' => 'form_add'));
                $date = date("Y-m-d H:i:s");
                echo form_hidden('data', $date);

                echo div_open('col-md-6 col-md-offset-3');
                echo form_input(array('class' => 'form-control', 'name' => 'label', 'placeholder' => 'Label'));
                echo div_close();

                echo div_open('col-md-4');
                $options = array(
                    '' => 'Selecione uma categoria',
                    'corporativo' => 'Corporativo',
                    'social' => 'Social',
                );
                echo form_dropdown('categoria', $options, [], ['class' => 'form-control']);
                echo div_close();

                echo div_open('col-md-4');
                $options = array(
                    '' => 'Selecione uma subcategoria',
                    'iluminacao' => 'Iluminação',
                    'sonorizacao' => 'Sonirização',
                    'imagem' => 'Imagem',
                    'energia' => 'Energia',
                );
                echo form_dropdown('subcategoria', $options, [], ['class' => 'form-control']);
                echo div_close();

                echo div_open('col-md-4');
                echo form_upload(array('class' => 'form-control', 'name' => 'file'));
                echo div_close();
                
                echo div_open('col-md-12 text-right');
                echo form_button(array('class' => 'btn btn-primary', 'type' => 'submit', 'content' => 'Salvar'));
                echo div_close();
                ?>
            </div>
        </div>
    </div>
</div