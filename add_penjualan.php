
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           FORM INPUT PENJUALAN
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                         
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="master/proses_add_penjualan" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>No penjualan</label>
                                            <input type="text" name="no_penjualan" class="form-control"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal penjualan</label>
                                            <input type="text" name="tgl_penjualan" class="form-control"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Costumer</label>
                                            <input type="text" name="costumer" class="form-control"> 
                                        </div>
                                          <div class="form-group">
                                            <label>total</label>
                                            <input type="text" name="total" class="form-control"> 
                                        </div>

                                         <div class="form-group">
                                            <label>berbayar</label>
                                            <input type="text" name="berbayar" class="form-control"> 
                                        </div>
                                          <div class="form-group">
                                            <label>sisa</label>
                                            <input type="text" name="sisa" class="form-control"> 
                                        </div>

 
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button type="reset" class="btn btn-danger">Reset </button>
                                    </form>
                                </div>
                            </div>
                        </div>
 
