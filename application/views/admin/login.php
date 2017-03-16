<?php
    $mensaje = "";
if($_POST){
  $sql = "select * from usuarios where correo = ? and clave = ?";

    $CI =& get_instance();
    $correo = $_POST['email'];
    $clave = md5($_POST['clave']);
    $rs = $CI->db->query($sql, array($correo, $clave));


    $rs = $rs->result();
    if(count($rs)>0){
      $_SESSION['gale_user'] = $rs[0];
      redirect('admin');
    }else{
      $mensaje = "Usuario o clave no validos";
    }
}

  plantilla::inicio();

 ?>
 
<div class="row">
  <div class="col col-sm4 col-cm-offset-4">
    <form method="post" action="">
      <h2>Ingresar</h2>
      <div class="form-group input-group">
        <label class="input-group-addon">Usuario</label>
        <input type="txt" name="email" class="form-control"/>
      </div>
      <div class="form-group input-group">
        <label class="input-group-addon">Clave</label>
        <input type="password" name="clave" class="form-control"/>
      </div>
      <div style color="red">
        <?php echo $mensaje; ?>
      </div>
      <div class="txt-center">
        <button class="btn btn-primary">Ingresar</button>
      </div>
    </form>
  </div>
</div>
