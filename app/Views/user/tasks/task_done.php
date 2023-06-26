<?= $this->extend('layouts/user') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-success text-white me-2">
            <i class="mdi mdi-view-list"></i>
        </span> PERFORM TASKS
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span></span>Tasks <i class="mdi mdi-alert-circle-outline icon-sm text-success align-middle"></i>
            </li>
        </ul>
    </nav>
</div>

<?php if (empty($user['facebook_id']) || empty($user['twitter_handle']) || empty($user['instagram_handle'])) : ?>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card mb-3">
            <div class="card p-0">
                <div class="card-body p-2">
                    <div class="clearfix">
                        <p class="m-0">
                            All required social media handles not added,
                            <a href="/profile/social">
                                Click here to update your profile
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="row justify-content-center">
    <div class="col-md-12  grid-margin stretch-card">
        <div class="card">
            <div class="card-body p-4">
                <h4 class="card-title mb-4">
                    <strong>
                        TASKS IN YOUR REGION
                    </strong>
                </h4>
                <div>
                    <ul style="list-style: none;" class="m-0 p-0">
                        <?php
                        if (empty($tasks)) {
                        } else {
                            foreach ($tasks as $task) {
                        ?>
                                <div class="card p-2 mb-3" style="border: 1px solid rgba(0, 0, 0, 0.125)">
                                    <div class="card-body p-0">
                                        <h5>
                                            <?= strtoupper($task->title); ?>
                                            <b class="text-info float-end">
                                                <?= $task->cpu; ?><i class="mdi mdi-coin"></i>
                                            </b>
                                        </h5>
                                        <p>
                                            <?= $task->description; ?>
                                        </p>
                                        <p>
                                            <a href="<?= $task->link; ?>" target="_blank"><?= $task->link; ?></a>
                                        </p>
                                        <a href="/task_done/<?= $task->unique_id; ?>" class="btn btn-gradient-success me-2"> <i class="mdi mdi-checkbox-marked-outline "></i> &nbsp;DONE </a>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>