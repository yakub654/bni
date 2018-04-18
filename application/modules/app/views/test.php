 <div class="col-sm-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="fa fa-users font-dark"></i>
                        <span class="caption-subject bold uppercase">Reference List</span>
                    </div>
                    <div>                                                      
                            <a href="<?php echo site_url('app/transform') ?>">
                             <button id="newlead"  class="btn green">Reference   <i class="fa fa-plus"></i></button>      
                            </a>
                    </div>
                    <div class="tools"></div>
                     
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                              
                                <th>Name</th>
                                <th>Company Name</th>
                                <th>Category</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <?php foreach($users as $key) {?>
                            <tr>
                                <td><?php   echo $key->usr_name ?></td> 
                                <td><?php   echo $key->usr_companyName ?></td>
                                <td><?php   echo $key->usr_category ?></td>
                                <td><?php   echo $key->usr_email ?></td>
                                <td><?php   echo $key->usr_mobile ?></td>
                                <td><button onclick=" return deleteUser('<?php echo $key->usr_id;?>')" class="btn red btn-dafault pull pull-right">Delete</button></td>
                            </tr>
                            <?php   } ?> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>