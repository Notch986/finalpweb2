<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <?= $this->Form->create() ?>
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                    <p class="lead fw-normal mb-0 me-3">Sign in</p>

                </div>
                <?= $this->Form->control('username'); ?>
                <?= $this->Form->control('password'); ?>
                <?= $this->Form->submit() ?>
                <?= $this->Form->end() ?>

            </div>
        </div>
    </div>

</section>