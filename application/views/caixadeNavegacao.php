<!-- div complementary onde vai todo o conteúdo lateral-->
<div role="complementary" class="col-sm-4 col-sm-pull-8">
    <!-- div que contém a busca por palavra-->
    <div class="row" style="padding: 50px 50px 50px 50px;">
        <p style="color:white;background-color: darkblue;text-align:center;">Search</p>
        <form method="GET" action=" <?php echo $this->config->base_url("SearchBrowse") ?>" class="form-group" role="form" >
            <div class="form-group">
                <input type="text" class="form-control" name="palavra_buscada" id="palavra_buscada" placeholder="Buscar por palavra">
            </div>
            <div class="form-group col-centered"> 
                <button type="submit" class="btn btn-success"  name="tipo" value="palavra">Search</button>
            </div>
        </form>
    </div>
    <!-- div que contém os links por categoria-->
    <div class="row" style="padding: 50px 50px 50px 50px;">
        <p style="color:white;background-color: darkblue;text-align:center;">Browse</p>
        <?php foreach ($categorias as $categoria){ ?>
        <a href="<?php echo $this->config->base_url("SearchBrowse")."\?palavra_buscada=".$categoria."&tipo=categoria"?>">
        <?php echo $categoria?>
        </a><br />
        <?php } ?>
    </div>
</div>