            <?php $this->load->model('m_global','adb'); ?>
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <?php $karyawan=$this->adb->get_detail_karyawan(get_session('id_karyawan'));
                                    if(@$karyawan->foto == ""){ ?>
                                        <img src="<?php echo base_url('assets/img/user/avatar.png');?>" class="img-circle" alt="User Image">
                                    <?php }
                                    else { ?>
                                        <img src="<?php echo base_url();?>assets/img/user/<?php echo @$karyawan->foto;?>" class="img-circle" alt="User Image">
                                    <?php } ?>                          
                        </div>
                        <div class="pull-left info">
                            <p>Hai, <?php echo get_session('username');?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <ul class="sidebar-menu">

                        <li class="<?php echo activate_menu('beranda');?>">
                            <a href="<?php echo base_url('beranda');?>"><i class="fa fa-desktop"></i> <span>Beranda</span></a>
                        </li>
                        <?php if(cek_fitur('master')){ ?>
                        <li class="<?php echo activate_menu('master_karyawan');?>">
                            <a href="<?php echo base_url('master_karyawan');?>"><i class="ion ion-ios7-people"></i> <span>Master Karyawan</span></a>
                        </li>
                        <?php } if(cek_fitur('master')){ ?>
                        <li class="<?php echo activate_menu('master_user');?>">
                            <a href="<?php echo base_url('master_user');?>"><i class="ion ion-person-add"></i> <span>Master User</span></a>
                        </li>
                        <?php } if(cek_fitur('master')){ ?>
                        <li class="<?php echo activate_menu('master_level');?>">
                            <a href="<?php echo base_url('master_level');?>"><i class="ion ion-android-wifi"></i> <span>Master Level</span></a>
                        </li>
                    <?php } if(cek_fitur('kuliah')){ ?>
                        <li class="treeview
                            <?php echo activate_menu('kuliah');?>
                            ">
                            <a href="#">
                                <i class="fa fa-clipboard"></i>
                                <span>Mukidi</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">

                                <?php if(cek_fitur('transaksi')){ ?>
                                <li class="<?php echo activate_menu('transaksi');?>"><a href="<?php echo base_url('transaksi/stok');?>"><i class="fa fa-angle-double-right"></i>Stok</a></li>

                                <?php } if(cek_fitur('transaksi')){ ?>
                                <li class="<?php echo activate_menu('transaksi');?>"><a href="<?php echo base_url('transaksi/add_jual');?>"><i class="fa fa-angle-double-right"></i>Transaksi</a></li>
                                <?php } ?>

                            </ul>
                        </li>          
                        <?php } if(cek_fitur('informasi_perpajakan')){ ?>
                        <li class="treeview
                            <?php echo activate_menu('peraturan_pajak');?>
                            ">
                            <a href="#">
                                <i class="fa fa-clipboard"></i>
                                <span>Informasi Peraturan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">

                                <?php if(cek_fitur('pembaruan_pajak')){ ?>
                                <li class="<?php echo activate_menu('peraturan_pajak');?>"><a href="<?php echo base_url('peraturan_pajak/pembaruan_peraturan_pajak');?>"><i class="fa fa-angle-double-right"></i>Pembaruan Peraturan</a></li>

                                <?php } if(cek_fitur('all_peraturan_pajak')){ ?>
                                <li class="<?php echo activate_menu('peraturan_pajak');?>"><a href="<?php echo base_url('peraturan_pajak/all_peraturan_pajak');?>"><i class="fa fa-angle-double-right"></i>Peraturan Pajak & Umum</a></li>

                                <?php } if(cek_fitur('peraturan_pajak')){ ?>
                                <li class="<?php echo activate_menu('peraturan_pajak');?>"><a href="<?php echo base_url('peraturan_pajak');?>"><i class="fa fa-angle-double-right"></i>Subjek Peraturan Pajak</a></li>

                                <?php } if(cek_fitur('topik')){ ?>
                                <li class="<?php echo activate_menu('topik');?>"><a href="<?php echo base_url('topik/');?>"><i class="fa fa-angle-double-right"></i>Topik</a></li>

                                <?php } if(cek_fitur('manage_peraturan_pajak')){ ?>
                                <li class="<?php echo activate_menu('peraturan_pajak');?>"><a href="<?php echo base_url('peraturan_pajak/manage_peraturan_pajak');?>"><i class="fa fa-angle-double-right"></i>Manage Peraturan Pajak</a></li>
                                <?php } ?>

                            </ul>
                        </li>          
                        <!-- <?php } if(cek_fitur('web_config')){ ?>
                        <li class="<?php echo activate_menu('web_config');?>"><a href="<?php echo base_url('web_config');?>"><i class="fa fa-gear"></i> <span>Web Config</span></a></li> -->
                        <?php } ?>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>