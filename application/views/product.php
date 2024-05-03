<?php
// if ($this->session->userdata('pro_id') != '') {
//     $pro_id = $this->session->userdata('pro_id');
// } else {
//     $this->session->set_userdata('pro_id', mt_rand(11111, 99999));
// }

?>

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
            <?php if ($this->session->flashdata('errMsg')) { ?>
                <div class="alert alert-danger">
                    <?= $this->session->flashdata('errMsg'); ?>
                </div>
            <?php } ?>


            <div class="row">
                <div class="col-xl-12">

                    <div class="card">
                        <div class="card-header border-0 align-items-center d-flex pb-0">
                            <h4 class="card-title mb-0 flex-grow-1">
                                Product
                            </h4>
                            <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Floating labels</h5>
                                <p class="card-title-desc">Create beautifully simple form labels that float over your input fields.</p>

                                <?= form_open_multipart() ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="number" value="<?= set_value('pro_id', $pro_id) ?>" name="pro_id" class="form-control" id="pro_id" readonly>
                                            <label for="product_id">Product ID</label>
                                        </div>
                                        <?= form_error('pro_id') ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" onchange="get_categories(this.value)" id="category" name="category">
                                                <option value="" selected="">Select</option>
                                                <?php
                                                foreach ($categories as $cat) {
                                                ?>
                                                    <option value="<?= $cat->cate_id ?>"><?= $cat->cate_name ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                            <label for="category">Category</label>
                                        </div>
                                        <?= form_error('category') ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select subcat" id="sub_category" name="sub_category">
                                                <option value="" selected="">Select</option>

                                            </select>
                                            <label for="sub_category">Sub Category</label>
                                        </div>
                                        <?= form_error('sub_category') ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="pro_name" name="pro_name">
                                            <label for="pro_name">Product Name</label>
                                        </div>
                                        <?= form_error('pro_name') ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="brand" name="brand">
                                            <label for="brand">Product Brand</label>
                                        </div>
                                        <?= form_error('brand') ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="featured" name="featured">
                                                <option value="" selected="">Select</option>
                                                <option value="1">Deal of the month</option>
                                                <option value="2">New Arrival</option>
                                            </select>
                                            <label for="floatingSelectGrid">Featured</label>
                                        </div>
                                        <?= form_error('featured') ?>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="highlights" name="highlights"></textarea>
                                            <label for="bann_image">Highlights</label>
                                        </div>
                                        <?= form_error('highlights') ?>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="description" placeholder="Description" name="description"></textarea>
                                            <label for="description">Description</label>
                                        </div>
                                        <?= form_error('description') ?>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="stock" name="stock">
                                            <label for="stock">Product Stock</label>
                                        </div>
                                        <?= form_error('stock') ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="mrp" name="mrp">
                                            <label for="mrp">Product MRP</label>
                                        </div>
                                        <?= form_error('mrp') ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="selling_price" name="selling_price">
                                            <label for="selling_price">Product Selling Price</label>
                                        </div>
                                        <?= form_error('selling_price') ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="meta_title" name="meta_title">
                                            <label for="meta_title">Meta Title</label>
                                        </div>
                                        <?= form_error('meta_title') ?>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="meta_keywords" name="meta_keywords">
                                            <label for="meta_keywords">Meta Keywords</label>
                                        </div>
                                        <?= form_error('meta_keywords') ?>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="meta_desc" name="meta_desc">
                                            <label for="meta_desc">Meta Description</label>
                                        </div>
                                        <?= form_error('meta_desc') ?>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="file" class="form-control" id="pro_main_image" name="pro_main_image">
                                            <label for="pro_main_image">Product Image</label>
                                        </div>
                                        <?= form_error('pro_main_image') ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="file" class="form-control" id="gallery_image" name="gallery_image">
                                            <label for="gallery_image">Product Gallery Image</label>
                                        </div>
                                        <?= form_error('gallery_image') ?>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="status">
                                                <option value="" selected="">Select</option>
                                                <option value="1">Active</option>
                                                <option value="0">Deactive</option>
                                            </select>
                                            <label>Status</label>
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