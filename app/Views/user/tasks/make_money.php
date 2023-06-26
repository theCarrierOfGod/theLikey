<?= $this->extend('layouts/user') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-success text-white me-2">
            <i class="mdi mdi-view-list"></i>
        </span> MAKE MONEY
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

<div class="row justify-content-start">
    <?php if (empty($user['facebook_id']) || empty($user['twitter_handle']) || empty($user['instagram_handle'])) : ?>
        <div class="row">
            <div class="col-md-10 grid-margin stretch-card mb-3">
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
    <div class="row">
        <div class="col-md-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body p-3">
                    <h4 class="card-title mb-4">
                        <strong>
                            EARN MONEY BY PERFORMING TASKS
                        </strong>
                    </h4>
                    <div class="row justify-content-end">
                        <div class="col-sm-8">
                            <form action="" method="GET">
                                <div class="input-group">
                                    <input type="text" value="<?= $search; ?>" placeholder="Filter by location, cost per user, title, task type, amount..." name="search" class="form-control" />
                                    <div class="input-group-btn">
                                        <button class="btn btn-info" type="submit">
                                            <i class="mdi mdi-filter-outline"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php
                            if (empty($tasks)) {
                                ?>
                                    <div class="col-md-12 mt-4">
                                        <div class="alert alert-info">
                                            There are no tasks for you at this time.
                                        </div>
                                    </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-none">
        <div class="col-md-10">
            <div class="row justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card p-3">
                        <b>
                            <ol>
                                <li>
                                    Click the proceed
                                </li>
                                <li>
                                    Complete the task
                                </li>
                                <li>
                                    Click on done
                                </li>
                                <li>
                                    Submit screenshot of task
                                </li>
                                <li>
                                    Await confirmation
                                </li>
                            </ol>
                        </b>
                        <div class="row justify-content-center res"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="row  row-flex">
                <?php
                    if (empty($tasks)) {
                    } else {
                        foreach ($tasks as $task) {
                            ?>
                                <div class="col-md-4 col-sm-4 mb-2">
                                    <div class="card p-2 pb-3 mb-3" style="border: 1px solid rgba(0, 0, 0, 0.125); height: 100% !important;">
                                        <div class="card-body p-0">
                                            <h5>
                                                <?= strtoupper($task['title']); ?>
                                                <b class="text-info float-end">
                                                    <?= $task['cpu']; ?><i class="mdi mdi-coin"></i>
                                                </b>
                                            </h5>
                                            <p>
                                                <?php
                                                $uid = $task['unique_id'];
                                                $string = nl2br($task['description']);
                                                if (strlen($string) > 50) {
                                                    $trimstring = substr($string, 0, 50). '...<a href="/task/'. $uid .'">details...</a>';
                                                } else {
                                                    $trimstring = $string;
                                                }
                                                echo $trimstring;
                                                ?>
                                            </p>
                                            <a 
                                            href="/task/<?= $task['unique_id']; ?>" 
                                            class="btn btn-gradient-success me-1 d-flex" 
                                            style="padding: 5px; position: absolute; right: 7px; bottom: 5px;">
                                                <i class="mdi mdi-arrow-right-bold"></i> proceed 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="d-flex justify-content-end">
                <?php if ($pager) :?>
                <?php $pagi_path='/make_money'; ?>
                <?php $pager->setPath($pagi_path); ?>
                <?= $pager->links() ?>
                <?php endif ?>
            </div>
        </div>
        <div class="col-md-9">
            
        </div>
    </div>
</div>

<?= $this->endSection() ?>