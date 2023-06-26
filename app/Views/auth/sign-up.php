<?= $this->extend('layouts/auth') ?>

<?= $this->section('content') ?>
<section class="account">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="account-contents" style="background: url('assets/img/about/about1.jpg'); background-size: cover;">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="account-thumb d-flex" style="align-items: center">
                                <a href="/">
                                    <img src="/logo.png" alt="Likey" width="75" />
                                    <h3 style="font-family: monospace">
                                        LIKEY
                                    </h3>
                                </a>
                                <br />
                                <br />
                                <p>Create a likey account</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="account-content">
                                <?php $validation = \Config\Services::validation(); ?>
                                <form action="/sign-up" method="post" id="registerForm">
                                    <input type="hidden" id="my-id" name="csrf_field" value="964ede6e0ae8a680f7b8eab69136717d">
                                    <div class="single-acc-field">
                                        <label for="username">Username</label>
                                        <input type="text" id="username" minlength="3" class="form-control" required name="username" placeholder="Enter your Username">
                                        <?php if ($validation->getError('username')) { ?>
                                            <div class='alert-danger mt-2'>
                                                <?= $error = $validation->getError('username'); ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="single-acc-field">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" minlength="3" class="form-control" required name="email" placeholder="Enter your Email">
                                        <?php if ($validation->getError('email')) { ?>
                                            <div class='alert-danger mt-2'>
                                                <?= $error = $validation->getError('email'); ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="single-acc-field">
                                        <label for="location">Location</label>
                                        <select name="location" id="location" class="form-select">
                                            <option value="">Select</option>
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
                                        <?php if ($validation->getError('location')) { ?>
                                            <div class='alert-danger mt-2'>
                                                <?= $error = $validation->getError('location'); ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="single-acc-field">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" class="form-control" required name="password" placeholder="Enter your password">
                                        <?php if ($validation->getError('password')) { ?>
                                            <div class='alert-danger mt-2'>
                                                <?= $error = $validation->getError('password'); ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="single-acc-field">
                                        <label for="cpassword">Password</label>
                                        <input type="password" id="cpassword" class="form-control" required name="cpassword" placeholder="Confirm your password">
                                        <?php if ($validation->getError('cpassword')) { ?>
                                            <div class='alert-danger mt-2'>
                                                <?= $error = $validation->getError('cpassword'); ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="single-acc-field">
                                        <button type="submit">Create an Account</button>
                                    </div>
                                    <a href="/forgot-password">Forget Password?</a>
                                    <a href="/sign-in">Have an Account?</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>