  <div class="wrapper">
    <div class="main">
      <div class="section section-basic" style="padding-top: 90px;">
        <div class="container">
          <div class="content-center brand">
            <div class="row">
              <div class="col-md-10 ml-auto col-xl-5 mr-auto">
                <p class="category">Antrian</p>
                <!-- Nav tabs -->
                <div class="card">
                  <div class="card-header">
                    <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange" style="padding-bottom: 0px; padding-left: 50px; padding-right: 50px;">
                      <p>Belum Ada Antrian</p>
                    </ul>
                  </div>
                </div>
                <!-- Tabs with Background on Card -->
                <div class="card">
                  <div class="card-header">
                    <ul class="nav nav-tabs nav-tabs-neutral" role="tablist" data-background-color="orange" style="padding-right: 0px; padding-left: 20px;">
                      <table>
                        <tr>
                          <td>Kode Antrian</td>
                          <td style="padding-left: 10px;">:</td>
                          <td style="padding-left: 10px;">TM011219</td>
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
                            <td style="padding-left: 10px;" class="pasien_norm"><?php echo $this->session->userdata('pasien')->pasien_norm; ?></td>
                          </tr>
                          <tr>
                            <td>Nama Pasien</td>
                            <td style="padding-left: 10px;">:</td>
                            <td style="padding-left: 10px;" class="pasien_nama"></td>
                          </tr>
                          <tr>
                            <td>Tanggal</td>
                            <td style="padding-left: 10px;">:</td>
                            <td style="padding-left: 10px;">12 November 2019</td>
                          </tr>
                          <tr>
                            <td>Antrian Poli</td>
                            <td style="padding-left: 10px;">:</td>
                            <td style="padding-left: 10px;">Poli Gigi</td>
                          </tr>
                          <tr>
                            <td>Dokter</td>
                            <td style="padding-left: 10px;">:</td>
                            <td style="padding-left: 10px;">Dr. Budi</td>
                          </tr>
                          <tr>
                            <td>Pembayaran</td>
                            <td style="padding-left: 10px;">:</td>
                            <td style="padding-left: 10px;">BPJS</td>
                          </tr>
                          <tr>
                            <td>Barcode</td>
                            <td style="padding-left: 10px;">:</td>
                            <td style="padding-left: 10px;"><img style="width: 50px;" src="assets/img/icon/barcode-qr.png"></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-right col-md-10 ml-auto col-xl-5">
                  <a target="_blank" href="" class="btn btn-neutral btn-icon btn-round btn-lg" rel="tooltip" title="Tambah Antrian" style="background-image: url('assets/img/icon/ic_add_48px@1.5x.png');" data-toggle="modal" data-target="#myModal">
                  </a>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('back/footer'); ?>
  </div>