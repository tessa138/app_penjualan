<h3 style="margin-bottom:12px" >Transaksi</h3>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo form_open('transaksi', array('class'=>'form-horizontal')); ?>
                <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Customer</label>
                        <div class="col-sm-10">
                          <input list="customer" name="customer" placeholder="masukan nama customer" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Barang</label>
                        <div class="col-sm-10">
                          <input list="barang" name="barang" placeholder="masukan nama barang" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Quantity</label>
                        <div class="col-sm-10">
                          <input type="text" name="qty" placeholder="QTY" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> 
                        </div>
                    </div>
                
                <datalist id="customer">
                    <?php foreach ($customer->result() as $c) {
                        echo "<option value='$c->nama_customer'>";
                    } ?>
                </datalist>
                <datalist id="barang">
                    <?php foreach ($barang->result() as $b) {
                        echo "<option value='$b->nama_barang'>";
                    } ?>
                </datalist>
            </div>
        </div>
    </div>
</div>

                    <div class="xxx">
                        <div class="panell">
                            <div class="panell-body">
                                <div class="table">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Customer</th>
                                                <th>Nama Barang</th>
                                                <th>Qty</th>
                                                <th>Harga</th>
                                                <th>Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; $total=0; foreach ($detail as $r){ ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama_customer.' - '.anchor('transaksi/hapusitem/'.$r->id_transaksi_dtl,'Hapus',array('style'=>'color:red;')) ?></td>
                                                <td><?php echo $r->nama_barang ?></td>
                                                <td><?php echo $r->qty ?></td>
                                                <td>Rp. <?php echo number_format($r->harga,2) ?></td>
                                                <td>Rp. <?php echo number_format($r->qty*$r->harga,2) ?></td>
                                            </tr>
                                        <?php $total=$total+($r->qty*$r->harga);
                                        $no++; } ?>
                                            <tr class="gradeA">
                                                <td colspan="4">T O T A L</td>
                                                <td>Rp. <?php echo number_format($total,2);?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /. TABLE  -->
                            </div>
                        </div>
                    </div>
                <!-- /. ROW  -->
                <?php echo anchor('transaksi/selesai','Selesai',array('class'=>'btn btn-success btn-sm'))?>
                </form>