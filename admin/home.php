<?php
  require_once "config/DB.php";

  @session_start();
  ob_start();

?>
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
    {
      "symbols": [
      {
        "description": "ANTM",
        "proName": "IDX:ANTM"
      },
      {
        "description": "BUMI",
        "proName": "IDX:BUMI"
      },
      {
        "description": "BRMS",
        "proName": "IDX:BRMS"
      },
      {
        "description": "VALE",
        "proName": "IDX:INCO"
      },
      {
        "description": "IFSH",
        "proName": "IDX:IFSH"
      },
      {
        "description": "FCX",
        "proName": "NYSE:FCX"
      },
      {
        "description": "TINS",
        "proName": "IDX:TINS"
      }
      ],
      "showSymbolLogo": true,
      "colorTheme": "light",
      "isTransparent": false,
      "displayMode": "adaptive",
      "locale": "en"
    }
  </script>
</div>
  <section class="content">
    <div class="row">
      <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-aqua">
          <div class="inner">
              <h4>JUMLAH DEVICE<sup style="font-size: 20px"></h4>
          </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <?php
              $sql = mysqli_query($conn, "SELECT COUNT(*) as jml_device FROM device ");
                 while ($data = mysqli_fetch_assoc($sql)) {
            ?>
            <a href="#" class="small-box-footer"><h3><?php echo $data['jml_device'] ?> Unit</h3><?php } ?></a>
          </div>
        </div>

        <div class="col-lg-4 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h4>JUMLAH DOCUMENT<sup style="font-size: 20px"></sup></h4>
            </div>
            <div class="icon">
              <i class="fa fa-newspaper-o"></i>
            </div>
            <?php 
              $sql1 = mysqli_query($conn, "SELECT COUNT(*) as jml_document FROM document ");
              while ($data = mysqli_fetch_assoc($sql1)) {
            ?>
              <a href="#" class="small-box-footer"><h3><?php echo $data['jml_document'] ?> File</h3><?php } ?></a>
          </div>
        </div>
        <div class="col-lg-4 col-xs-6">
          <div class="small-box bg-purple">
            <div class="inner">
              <h4>JUMLAH PENGGUNA</h4>
              <?php
                $sql = mysqli_query($conn, "SELECT count(*) as jml_pengguna from users");
                while ($data = mysqli_fetch_assoc($sql)) {
              ?>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
              <a href="#" class="small-box-footer"><h3><?php  echo $data['jml_pengguna'] ?> ORANG</h3></a><?php }  ?>
          </div>
        </div>
        
       </div>

       
       <iframe height="380" width="1100" src="https://ssltvc.investing.com/?pair_ID=959208&height=480&width=1366&interval=month&plotStyle=line&domain_ID=54&lang_ID=54&timezone_ID=0"></iframe>
        </div>
       
    </sup>
</aside>             
  <footer class="main-footer footer-dark">
    <strong>Copyright &copy; <?php echo date('Y') ?> Sistem Informasi Anugrah Group  <a href="#"> (SIAG)</a></strong>
  </footer>
</div>
</form>
</section>

</html>
