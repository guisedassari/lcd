<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Galeria Corporativo</h1>
    </div>
<?= anchor('welcome/add', 'Adicionar', array('class' => 'btn btn-primary'));?>
</div>
<!-- /.row -->
<div class="row" >
    <?php
    foreach ($galaria as $galeria) :
        ?>
        <div class="col-xs-6 col-md-4" style="height: 300px;">
            <a href="#" class="thumbnail caricaturas">
                <?= img(array('src' => base_url("uploads/" . $galeria['caricatura']), 'class' => 'img-responsive')) ?>
            </a>
            <div class="text-center">
                <?= $galeria['nome']; ?>
            </div>
        </div>
        <?php
    endforeach;
    ?>
</div>
