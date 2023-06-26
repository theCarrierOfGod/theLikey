<?= $this->extend('layouts/user') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-info text-white me-2">
            <i class="mdi mdi-plus"></i>
        </span> NEW TASK
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span></span>Tasks <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
            </li>
        </ul>
    </nav>
</div>

<div class="row justify-content-center">
    
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                Current purchased credits: 
                <strong>
                    <?= $user['deposited']; ?>
                </strong>
            </div>
        </div>
    </div>
    
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    <strong>
                        CREATE A TASK
                    </strong>
                </h4>
                <form class="forms-sample mt-4" action="" method="POST">
                    <?php $validation = \Config\Services::validation(); ?>
                    <?php if (session('success')) { ?>
                        <div class='alert alert-success mt-2'>
                            <?= session('success'); ?>
                        </div>
                    <?php } ?>
                    <?php if (session('error')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= session('error'); ?>
                        </div>
                    <?php } ?>
                    <?php if (session('errors')) { ?>
                        <?php
                        foreach (session('errors') as $error) {
                        ?>
                            <div class='alert alert-danger mt-2 p-1'>
                                <?= $error; ?>
                            </div>
                        <?php
                        }
                        ?>
                    <?php } ?>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="promotion">Task type</label>
                                <input type="text" class="form-control" name="promotion" id="promotion" value="<?= old('promotion'); ?>" required placeholder="App Download, Sign Up, Website view...">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="description">
                                    Task description
                                </label>
                                <textarea name="description" id="description" placeholder="Enter detailed description of the task. Including Links and steps" rows="5" required class="form-control"><?= old('description'); ?></textarea>
                            </div>
                        </div>
                        
                        <!--

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" class="form-control" name="link" id="link" value="<?= old('link'); ?>" required placeholder="https://...">
                            </div>
                        </div>
                        
                        -->

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="location">Target Audience</label>
                                <select name="location" id="location" class="form-select" required>
                                    <option value="worldwide">WORLDWIDE</option>
                                    <?php
                                    if (!empty($countries)) {
                                        foreach ($countries as $country) {
                                    ?>
                                            <option value="<?php echo $country['name']; ?>">
                                                <?php echo $country['name']; ?>
                                            </option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" min="5" name="amount" class="form-control" value="<?= old('amount'); ?>" placeholder="Amount of services" required id="amount" />
                                <div id="amountError"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cpu">Cost per user <small>(CREDITS)</small></label>
                                <select name="cpu" id="cpu" class="form-select" value="<?= old('cpu'); ?>" required>
                                    <?php
                                        for ($i=20; $i<=120; $i++)
                                        {
                                            ?>
                                                <option <?php if(old('cpu') == $i) { echo "selected='true'"; } ?> value="<?php echo $i;?>">
                                                    <?php echo $i;?>
                                                </option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="total">Total Cost <small>(CREDITS)</small></label>
                                <input type="number" name="total" class="form-control" required id="total" value="<?= old('total'); ?>" readonly />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-gradient-info me-2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            $('#cpu').on('keyup', function() {
                let cpu = $('#cpu').val();
                let amt = $('#amount').val();
                if (amt.length === 0) {
                    $('#cpu').css('border-color', 'red');
                    $('#amount').css('border-color', 'red');
                    return false;
                } else {
                    $('#cpu').css('border-color', '#ebedf2');
                    $('#amount').css('border-color', '#ebedf2');
                    let total = amt * cpu;
                    $('#total').val(total)
                }
            })

            $('#amount').on('keyup', function() {
                let cpu = $('#cpu').val();
                let amt = $('#amount').val();
                if (cpu.length === 0) {
                    $('#cpu').css('border-color', 'red');
                    $('#amount').css('border-color', 'red');
                    return false;
                } else {
                    $('#cpu').css('border-color', '#ebedf2');
                    $('#amount').css('border-color', '#ebedf2');
                    let total = amt * cpu;
                    $('#total').val(total)
                }
            })
        })
    </script>
</div>

<?= $this->endSection() ?>