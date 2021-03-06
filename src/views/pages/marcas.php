<?php 
include('../layout/head.php');
include('../layout/header.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="../../../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Marcas</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">

      <?php 
      if (isset($_POST['nome'])) {
         var_dump($_POST);
         echo "\n\n";
         echo $_POST['nome'];
         echo "Testando Envio dos Dados";
     }

     ?>



     <form method="post" action="" >
      <fieldset>
        <legend><strong> Cadastro de Marcas</strong></legend>
        <label for="nome">Marca</label>
        <br>
        <input type="text" name="nome" size="40" maxlength="75" value="">
        <br>
        <!--
        <label for="id">Identificação</label>
        <br>
        <input type="number" name="id" size="40" maxlength="75" value="">
        <br>
        <-->
        <label for="descricao">Descrição</label>
        <br>
        <textarea name="descricao"></textarea>
        <br>
        <label for="observacao">Observação</label>
        <br>
        <input  type="text" name="observacao" size="40" maxlength="75" value="">
        <br>
        <br>
        <button type="submit" value="Enviar" class="btn btn-info">
           Enviar
       </button>  
       <button type="reset" value="Limpar Dados" class="btn btn-info">
           Limpar
       </button>



   </fieldset>
</form>
<!-- /.box-body -->
<div class="box-footer">

</div>  
<!-- /.box-footer-->

</div>
<!-- /.box -->

</div>
<!-- Main content -->
<section class="content">
    <div class="row">
      <div class="col-md-15">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Lista de Marcas
            </h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
              <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
              title="Collapse">
              <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
              title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
          <!-- /. tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body pad">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                 <strong>Editar Marca</strong><br> 
                 <input type="number" name="id" size="40" maxlength="75" value="">
                 <button type="submit" value="Enviar" class="btn btn-info">
                   Editar
               </button><br><br> 
               <strong>Deletar Marca</strong><br> 
               <input type="number" name="id" size="40" maxlength="75" value="">
               <button type="submit" value="Enviar" class="btn btn-danger">
                   Deletar
               </button>  
               <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                </div>
            </div>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
        <!-- Cria a tabela com os produtos -->
        <table class="table table-bordered" >
            <tr class="bg-primary">
              <th>Identificação</th>
              <th>Marca</th>
              <th>Data</th>
              <th>Descrição</th>
              <th>Observação</th>
          </tr>
          <tr>
              <td>id</td>
              <td><span class="label label-success">Olimpikus</span></td>
              <td><span class="label label-success">24/10/2017</span></td>
              <td>Distribuidora de Equipamentos</td>        
              <td>Produto destinado para programadores.</td>
          </tr>
          <tr>
           <td>id</td>
           <td><span class="label label-success">Olimpikus</span></td>
           <td><span class="label label-success">24/10/2017</span></td>
           <td>Distribuidora de Equipamentos</td>        
           <td>Produto destinado para programadores.</td>
       </tr>
       <tr>
           <td>id</td>
           <td><span class="label label-success">Olimpikus</span></td>
           <td><span class="label label-success">24/10/2017</span></td>
           <td>Distribuidora de Equipamentos</td>        
           <td>Produto destinado para programadores.</td>
       </tr>
       <tr>
           <td>id</td>
           <td><span class="label label-success">Olimpikus</span></td>
           <td><span class="label label-success">24/10/2017</span></td>
           <td>Distribuidora de Equipamentos</td>        
           <td>Produto destinado para programadores.</td>
       </tr>
   </table>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
</div>
</section>
<!-- /.content -->
</div>
</div>
</div>
</section>
<!-- /.content -->


</div>
<!-- /.content-wrapper -->

<?php 
include('../layout/footer.php');
include('../layout/foot.php');
?> 
