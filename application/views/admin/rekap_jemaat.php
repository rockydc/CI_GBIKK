
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Form Jumlah Jemaat </h3>
                 <?php if ($this->session->flashdata('flash')): ?>
                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Event<strong> Berhasil !</strong> <?php echo $this->session->flashdata('flash');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif;?>
                <div class="row mb-3">
                    <div class="col-lg-12 col-xl-12">
                        <div class="row">
                            <div class="col offset-xl-0">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Tambah Event</p>
                                    </div>
                                    <div class="card-body">
                                    <?php if ( validation_errors()) : ?>
                                        <div class="alert alert-danger" role="alert">

                                        <?php echo validation_errors();//menampilkan error validation?>
                                        </div>
                                    <?php endif;?>
                                     <form action="<?= base_url()?>admin/tambahrekap" method="post">
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="username"><strong>Jumlah Jemaat</strong></label><input class="form-control" type="number" placeholder="Jumlah Jemaat" name="jumlah"></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Tanggal</strong></label><input class="form-control" type="date" name="tanggal"></div>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                    <label class="input-group-text" for="inputGroupSelect02">Jemaat Ibadah</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect02" name="ibadah">
                                                    <option selected>Ibadah Raya</option>
                                                    <option value="Pagi">Pagi</option>
                                                    <option value="Siang">Siang</option>
                                                    <option value="Sore">Sore</option>
                                                </select>
                                            
                                                </div>
                                            <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" name="tambah">Publish</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        
                <h3 class="text-dark mb-4">Rekapan Jemaat</h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Daftar Rekapan Jemaat</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-nowrap">
                                <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                            </div>
                        </div>
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table dataTable my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Jumlah Jemaat</th>
                                        <th>Tanggal</th>
                                        <th>Ibadah Raya</th>
                                 
                            
                                    </tr>
                                </thead>
                         <?php foreach($rekap as $rkp): ?>
                                <tbody>
                                    <tr>
                          
                                        <td><?php echo $rkp['jumlah'];?>
                                        </td>
                                        <td><?php echo $rkp['tanggal'];?></td>
                                        <td><?php echo $rkp['ibadah'];?></td>
                                
                                       
                                    </tr>
                                    <!-- <tr>
                                        <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar2.jpeg">Angelica Ramos</td>
                                        <td>Chief Executive Officer(CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09<br></td>
                                        <td>$1,200,000</td>
                                    </tr> -->
                                   
                                </tbody>
                         <?php endforeach;?>
                                <!-- <tfoot>
                                    <tr>
                                        <td><strong>Name</strong></td>
                                        <td><strong>Position</strong></td>
                                        <td><strong>Office</strong></td>
                                        <td><strong>Age</strong></td>
                                        <td><strong>Start date</strong></td>
                                        <td><strong>Salary</strong></td>
                                    </tr>
                                </tfoot> -->
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                            </div>
                            <div class="col-md-6">
                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
      
        </div>
       
</body>

</html>


        </div>
        
     
        <div role="dialog" tabindex="-1" class="modal fade" id="myModalview">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button></div>
                                                        
                    <div class="modal-body">
                        
                        <h1 class="text-center mb-30" style="color: rgb(0,0,0); padding-bottom:20px;"><?php echo $detail['judul'];?></h1>
                        <p><?php  echo $detail['deskripsi'];?></p>
                 

                    </div>
                    <div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Close</button></div>
                </div>
            </div>
</div>


<script>
    $(document).on("click", ".view-event" , function(){


        var id_event = $(this).data('id_event');
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>admin/detail_event',
            data: {id_event: id_event},
            success:function(response) {
                $('result'.html(response)):
            }
        });
    });
</script>

