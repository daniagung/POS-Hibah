 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url().'welcome'?>">Citra Mart</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <?php $h=$this->session->userdata('akses'); ?>
                    <?php $u=$this->session->userdata('user'); ?>
                    <?php if($h=='1'){ ?> 
                     <!--dropdown-->
                    <li>
                        <a href="<?php echo base_url().'admin/penjualan'?>"<span class="fa fa-refresh"></span> Transaksi</a>
                    </li>
                    <!--ending dropdown-->
                    <li>
                        <a href="<?php echo base_url().'admin/retur'?>"><span class="fa fa-refresh"></span> Retur</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'admin/grafik'?>"><span class="fa fa-line-chart"></span> Grafik</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'admin/laporan'?>"><span class="fa fa-file"></span> Laporan</a>
                    </li>
                    <?php }?>
                    <?php if($h=='2'){ ?> 
                      <!--dropdown-->
                    <li>
                        <a href="<?php echo base_url().'admin/penjualan'?>"><span class="fa fa-shopping-bag" aria-hidden="true"></span> Penjualan</a></li>
                    </li>
                    <!--ending dropdown-->
                    <li>
                        <a href="<?php echo base_url().'admin/retur'?>"><span class="fa fa-refresh"></span> Retur</a>
                    </li>
                    <?php }?>
                     <li>
                        <a href="<?php echo base_url().'administrator/logout'?>"><span class="fa fa-sign-out"></span> Logout</a>
                    </li>
                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>