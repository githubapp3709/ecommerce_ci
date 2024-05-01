<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Tocly - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <base href="<?= base_url() ?>">
    <?php $this->load->view('links') ?>
</head>
<?php $this->load->view('header') ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <?php if ($this->session->flashdata('succMsg')) { ?>
                <div class="alert alert-success">
                    <?= $this->session->flashdata('succMsg'); ?>
                </div>
            <?php } ?>


            <div class="row">
                <div class="col-xl-12">

                    <div class="card">
                        <div class="card-header border-0 align-items-center d-flex pb-0">
                            <h4 class="card-title mb-0 flex-grow-1">
                                Category
                            </h4>
                            <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Floating labels</h5>
                                <p class="card-title-desc">Create beautifully simple form labels that float over your input fields.</p>

                                <?= form_open() ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="floatingSelectGrid" name="parent_id">
                                                <option value="" selected="">Select</option>
                                                <?php
                                                foreach ($categories as $cat) {
                                                ?>
                                                    <option value="<?= $cat->cate_id ?>"><?= $cat->cate_name ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                            <label for="floatingSelectGrid">Parent Category</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingFirstnameInput" placeholder="Category Name" name="cate_name">
                                            <label for="floatingFirstnameInput">Category Name</label>
                                        </div>
                                        <?= form_error('cate_name') ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="floatingSelectGrid" name="status">
                                                <option value="" selected="">Select</option>
                                                <option value="1">Active</option>
                                                <option value="0">Deactive</option>
                                            </select>
                                            <label for="floatingSelectGrid">Status</label>
                                        </div>
                                        <?= form_error('status') ?>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                                <?= form_close() ?>
                            </div>
                            <!-- end card body -->
                        </div>
                    </div>


                </div>


            </div>
            <!-- END ROW -->


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <?php $this->load->view('footer') ?>