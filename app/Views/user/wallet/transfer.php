<?= $this->extend('layouts/user') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-warning text-white me-2">
            <i class="mdi mdi-plus"></i>
        </span> TRANSFER CREDITS
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span></span>WALLET <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
            </li>
        </ul>
    </nav>
</div>

<div class="row">

    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    <strong>
                        <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </strong>
                    NOTE!
                </h4>
                <p class="card-description">
                    You can only transfer from your purchased credits to your earned credits.
                </p>
                <b>
                    Current earned credits: <?= $user['earned']; ?>
                </b>
                <br/>
                <br/>
                <b>
                    Current purchased credits: <?= $user['deposited']; ?>
                </b>
            </div>
        </div>
    </div>
    <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    <strong>
                        TRANSFER
                    </strong>
                </h4>
                <form id="cryptoform" onsubmit="" class="forms-sample" action="" method="POST">
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
                   
                    <div class="form-group">
                        <label for="amount">Amount (credits)</label>
                        <input type="number" min="5" name="amount" class="form-control" value="<?= old('amount'); ?>" placeholder="Amount" required id="amount" />
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
                    </div>

                    <div class="d-flex" style="justify-content: right;">
                        <button type="submit" id="transfer" name="transfer" class="btn btn-info me-2">Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>