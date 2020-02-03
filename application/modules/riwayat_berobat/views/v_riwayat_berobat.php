  <div class="wrapper">
    <div class="main">
      <div class="section section-basic" style="padding-top: 90px;">
        <div class="container">
          <div class="content-center brand">
            <div class="row">
              <div class="col-md-10 ml-auto col-xl-5 mr-auto">
                <p class="category">Riwayat Berobat</p>
                <!-- Nav tabs -->
                <div class="card">
                  <div class="card-header">
                    <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange" style="padding-bottom: 0px; padding-left: 50px; padding-right: 50px;">
                      <p>Riwayat Berobat Belum Ada</p>
                    </ul>
                  </div>
                </div>
                <!-- Tabs with Background on Card -->
                <div class="card">
                  <div class="card-header">
                    <ul class="nav nav-tabs nav-tabs-neutral" role="tablist" data-background-color="orange" style="padding-right: 0px; padding-left: 20px;">
                      <table>
                        <tr>
                          <td>Tanggal Berobat</td>
                          <td style="padding-left: 10px;">:</td>
                          <td style="padding-left: 10px;" class="pasien_tanggal_berobat"></td>
                        </tr>
                      </table>
                    </ul>
                  </div>
                  <div class="card-body">
                    <!-- Tab panes -->
                    <div class="tab-content text-left">
                      <div class="tab-pane active" id="home1" role="tabpanel">
                        <table>
                            <tr>
                              <td>No. Rekam Medis</td>
                              <td style="padding-left: 10px;">:</td>
                              <td style="padding-left: 10px;" class="pasien_norm"></td>
                            </tr>
                            <tr>
                              <td>Nama Pasien</td>
                              <td style="padding-left: 10px;">:</td>
                              <td style="padding-left: 10px;" class="pasien_nama"></td>
                            </tr>
                            <tr>
                              <td>Riwayat Berobat</td>
                              <td style="padding-left: 10px;">:</td>
                              <td style="padding-left: 10px;" class="pasien_riwayat_berobat"></td>
                            </tr>
                          </table>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- End Tabs on plain Card -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('back/footer'); ?>
  </div>