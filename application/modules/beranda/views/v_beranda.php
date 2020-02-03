  <div class="wrapper">
    <div class="main">
      <div class="section section-basic" style="padding-top: 90px;">
        <div class="container">
          <div class="content-center brand">
            <div class="row">
              <div class="col-md-10 ml-auto col-xl-7 mr-auto">
                <p class="category">Beranda</p>
                <!-- Nav tabs -->
                <div class="card">
                  <div class="card-body" data-background-color="orange">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="tab-pane active" role="tabpanel">
                        <table>
                          <h5>Selamat datang, di Klinik Cakrawala Semesta Solusindo</h5>
                          <tr>
                            <td>No. Rekam Medis</td>
                            <td style="padding-left: 10px;">:</td>
                            <td style="padding-left: 10px;" class="pasien_norm"></td>
                          </tr>
                          <tr>
                            <td>Nama Lengkap</td>
                            <td style="padding-left: 10px;">:</td>
                            <td style="padding-left: 10px;" class="pasien_nama"></td>
                          </tr>
                        </table>
                      </div>                    
                    </div>
                  </div>
                </div>
                <div style="text-align: center;">
                  <a href="<?php echo base_url('antrian'); ?>"><button class="btn btn-primary" style="width: 140px; height: 140px;">Antrian</button></a>
                  <a href="<?php echo base_url('riwayat_berobat'); ?>"><button class="btn btn-primary" style="width: 140px; height: 140px;">Riwayat Berobat</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('back/footer'); ?>
  </div>