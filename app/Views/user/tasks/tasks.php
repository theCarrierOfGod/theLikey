<?= $this->extend('layouts/user') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-success text-white me-2">
            <i class="mdi mdi-view-list"></i>
        </span> GET FREE CREDITS
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span></span>Tasks <i class="mdi mdi-alert-circle-outline icon-sm text-success align-middle"></i>
            </li>
        </ul>
    </nav>
</div>

<style type="text/css"> 
    a {
        padding-left: 5px; 
        padding-right: 5px; 
        margin-left: 5px; 
        margin-right: 5px; 
    } 
    .pagination li.active{
        background: deepskyblue;
        color: white;
    }
    .pagination li a { 
        color: deepskyblue;
        text-decoration: none;
    } 
    .pagination li.active a{
        color: white;
        text-decoration: none;
    }
</style>

<div class="row">
    <div class="col-md-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body p-3">
                <h4 class="card-title mb-4">
                    <strong>
                        
                        GET FREE CREDITS THROUGH SOCIAL MEDIA PROMOTION
                    </strong>
                </h4>
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="media">
                                <b>
                                    Select feature
                                </b>
                            </label>
                            <select class="form-select" id="media" name="media" required>
                                <option value="">Select category</option>
                                <?php
                                    if (!empty($platforms)) {
                                        foreach ($platforms as $platform) {
                                            ?>
                                                <option id="plat" <?php if($platform['D'] == 'FACEBOOK LIKE') { echo "selected='true'"; } ?> value="<?php echo $platform['D']; ?>">
                                                    <?php echo $platform['D']; ?>
                                                </option>
                                            <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function() {
                            let plat = $('#media').val();
                            $.ajax({
                                url: '/getpromos?name=' + plat,
                                type: 'get',
                                beforeSend: function () {
                                    $('.res').html("<i class='fa fa-spinner fa-spin'></i>");
                                }, 
                                success: function (data) {
                                    populateTable(data);
                                }
                            });
                            
                            $('#media').on('change', function() {
                                let plat = $('#media').val();
                                $.ajax({
                                    url: '/getpromos?name=' + plat,
                                    type: 'get',
                                    beforeSend: function () {
                                        $('.res').html("<i class='fa fa-spinner fa-spin'></i>");
                                    }, 
                                    success: function (data) {
                                        populateTable(data);
                                    }
                                })
                            })
                            
                            function populateTable(data) {
                                $('.res').html('');
                                $('#buttonClick').html('');
                                data.forEach(function(value, index) {
                                    $('.res').append(`
                                        <div class="col-6">
                                            <div class="card p-2 mb-3" style="border: 1px solid rgba(0, 0, 0, 0.125)">
                                                <div class="card-body p-0 text-center">
                                                    <button class="btn">
                                                        skip
                                                    </button>
                                                    <h5>
                                                        ${value['title']}
                                                        <b class="text-info float-end">
                                                            ${value['cpu']}<i class="mdi mdi-coin"></i>
                                                        </b>
                                                    </h5>
                                                    <p>
                                                        
                                                    </p>
                                                    <br/>
                                                    <a href="" target="_blank" class="btn-gradient-success" style='text-decoration: none'>${value['type']}</a>
                                                </div>
                                            </div>
                                        </div>
                                    `);
                                    $('#buttonClick').html(value['type']);
                                });
                            }
                        })
                    </script>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-9">
        <div class="row justify-content-center">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card p-3">
                    <b>
                        <ol>
                            <li>
                                Click the <span id='buttonClick'></span> button
                            </li>
                            <li>
                                Complete the task
                            </li>
                            <li>
                                Click the confirm button
                            </li>
                        </ol>
                    </b>
                    <div class="row justify-content-center res"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>