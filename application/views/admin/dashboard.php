
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">Data Mobil
                    <div class="dropdown d-inline">
                      
                   
                    </div>
                  </div>
                  <div class="card-stats-items">
                  
                    <div class="card-stats-item">
                      
                    </div>
                    <div class="card-stats-item">
                      
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-car-side"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Mobil</h4>
                  </div>
                  <div class="card-body">
                  <?php echo $this->M_rental->get_data('tb_mobil')->num_rows(); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="balance-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Penyewa</h4>
                  </div>
                  <div class="card-body">
                  <?php echo $this->M_rental->get_data('tb_penyewa')->num_rows(); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="sales-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Transaksi</h4>
                  </div>
                  <div class="card-body">
                  <?php echo $this->M_rental->get_data('tb_transaksi')->num_rows(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="card">
                <div class="card-header">
                  <h4>Dashboard Admin</h4>
                </div>
                <h2 class="text-primary" style="text-align: center"> Rental Mobil App</h2>
                
                <div class="card-body">
                         <canvas id="myChart" height="158">
                         
                          </canvas>
                
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card gradient-bottom">
                <div class="card-header">
                  <h4>Top Mobil Terlaris</h4>
                  </div>
                <div class="card-body" id="top-5-scroll">
                  <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                     
                      <div class="media-body">
                        
                        <div class="media-title">Honda HRV</div>
                        <div class="mt-1">
                          <div class="budget-price">
                            <div class="budget-price-square bg-primary" data-width="94%"></div>
                            <div class="budget-price-label">25 sewa</div>
                          </div>
                          <div class="budget-price">
                          
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="media">
                     
                      <div class="media-body">
                        
                        <div class="media-title">Pajero Sport</div>
                        <div class="mt-1">
                          <div class="budget-price">
                            <div class="budget-price-square bg-primary" data-width="84%"></div>
                            <div class="budget-price-label">20 sewa</div>
                          </div>
                          <div class="budget-price">
                            
                            
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="media">
                     <div class="media-body">
                        
                        <div class="media-title">Xpander</div>
                        <div class="mt-1">
                          <div class="budget-price">
                            <div class="budget-price-square bg-primary" data-width="74%"></div>
                            <div class="budget-price-label">15 sewa</div>
                          </div>
                          <div class="budget-price">
                            
                          </div>
                        </div>
                      </div>
                    </li>
                
                   
                  </ul>
                </div>
                <div class="card-footer pt-3 d-flex justify-content-center">
                  <div class="budget-price justify-content-center">
                    <div class="budget-price-square bg-primary" data-width="20"></div>
                    <div class="budget-price-label">Recomended</div>
                  </div>
                  <div class="budget-price justify-content-center">
                    <div class="budget-price-square bg-danger" data-width="20"></div>
                    <div class="budget-price-label">n</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
         
        </section>
      </div>
     
