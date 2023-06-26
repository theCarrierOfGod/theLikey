<?= $this->extend('layouts/user') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-secondary text-white me-2">
            <i class="mdi mdi-web"></i>
        </span> SOCIAL
    </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/profile">Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page">Social</li>
        </ol>
    </nav>
</div>
<form action="/profile/social" method="post">
    <div class="row">
        <?php
        if (isset($success)) {
        ?>
            <div class="col-lg-12">
                <div class="alert alert-success alert-dismissible">
                    <strong>
                        Hurray!
                    </strong>
                    <?php echo $success; ?>
                </div>
            </div>
        <?php
        }
        if (session('success')) { ?>
            <div class='alert alert-success mt-2 alert-dismissible'>
                <strong>
                    Hurray!
                </strong>
                <?= session('success'); ?>
            </div>
        <?php
        }

        if (isset($error)) {
        ?>
            <div class="col-lg-12">
                <div class="alert alert-error alert-dismissible">
                    <strong>
                        Sorry!
                    </strong>
                    <?php echo $error; ?>
                </div>
            </div>
        <?php
        }
        ?>
        <div class="col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Facebook ID</h4>
                    <p class="card-description"> Add your <code>facebook username</code> to get rewards from facebook
                        tasks
                    </p>
                    <div class="form-inline">
                        <label class="sr-only" for="facebook_id">Facebook ID</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="text" name="facebook_id" class="form-control" id="facebook_id" value="<?= $user['facebook_id']; ?>" placeholder="facebook id">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Twitter handle</h4>
                    <p class="card-description"> Add your <code>twitter handle</code> to get rewards from twitter tasks
                    </p>
                    <div class="form-inline">
                        <label class="sr-only" for="twitter_handle">Twitter handle</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="text" name="twitter_handle" class="form-control" value="<?= $user['twitter_handle']; ?>" id="twitter_handle" placeholder="twitter handle">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Instagram handle</h4>
                    <p class="card-description"> Add your <code>Instagram handle</code> to get rewards from twitter
                        tasks
                    </p>
                    <div class="form-inline">
                        <label class="sr-only" for="instagram_handle">Instagram handle</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="text" name="instagram_handle" value="<?= $user['instagram_handle']; ?>" class="form-control" id="instagram_handle" placeholder="Instagram handle">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-gradient-primary mb-2">Save</button>
</form>

<?= $this->endSection() ?>