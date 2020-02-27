
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Upcoming Event Form </h3>
                 <?php if ($this->session->flashdata('flash')): ?>
                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Event<strong> Berhasil !</strong> <?php echo $this->session->flashdata('flash');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif;?>
                <div class="row mb-3">
                    <div class="col-lg-8 col-xl-7">
                        <div class="row">
                            <div class="col offset-xl-0">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Tambah Video</p>
                                    </div>
                                    <div class="card-body">
                                    <?php if ( validation_errors()) : ?>
                                        <div class="alert alert-danger" role="alert">

                                        <?php echo validation_errors();//menampilkan error validation?>
                                        </div>
                                    <?php endif;?>
                                     <form action="<?= base_url()?>admin/insertVideo" method="post">
                                      
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Tanggal</strong></label><input class="form-control" type="date" name="tanggal"></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="username"><strong>Link Video</strong></label><input class="form-control" type="text" placeholder="linkvideo" name="detail_video"></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" name="tambah">Publish</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row" style="margin-top:20px;">
                            <div class="col">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Id_event&nbsp;</th>
                                                <th>Judul&nbsp;</th>
                                                <th>Tanggal</th>
                                                <th>control&nbsp;</th>
                                            </tr>
                                        </thead>
                                       
                                      
                                        <tbody>
                                            
                                            <tr><td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                <a href="<?= base_url(); ?>admin/hapusEvent/" 
                                                class=""
                                                onclick="return confirm('yakin ingin menghapus?');">
                                                <i style="color:red;" class="fas fa-fw fa-trash-alt"></i>
                                                 </a>
                                                 <a href="" 
                                                class=""
                                                >  <i style="color:green;" class="fas fa-edit"></i>
                                                 </a>
                                           
                                                <a id="view" 
                                                href=""
                                                data-id=""
                                                data-toggle="modal" 
                                                data-target="#myModalview"
                                                class="view-event"
                                                > 
                                                <i class="far fa-eye"></i>
                                                
                                                 </a>

                        
                                                
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                            
                                    
                                            
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> -->
                 
                     
                 
                    </div>
                </div>
            </div>
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


<!-- <script>
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
</script> -->

