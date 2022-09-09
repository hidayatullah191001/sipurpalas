<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5 ">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <form class="user" method="POST" action="<?=base_url('auth/registration') ?>">
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name') ?>">
                                        </div>
                                    </div>
                                    <?= form_error('name', '<small class="text-danger">', '</small>') ?>

                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                            </div>
                                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email address" value="<?= set_value('email') ?>">
                                        </div>
                                    </div>
                                    <?= form_error('email', '<small class="text-danger">', '</small>') ?>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <div class="input-group input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                                </div>
                                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                            </div>
                                            <?= form_error('password1', '<small class="text-danger">', '</small>') ?>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="input-group input-group-lg">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                                            </div>
                                            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?=base_url('auth') ?>">Already have an account? Login!</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?=base_url('landing') ?>">Landing Page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>