<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container">

    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-6">
            <h3 class="text-success"><?= $data['title']; ?></h3>
        </div>
    </div>

    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-6">

            <form action="<?= URLROOT; ?>/SmartphoneController/create" method="post">

                <!-- MERK -->
                <div class="mb-3">
                    <label class="form-label">Merk</label>
                    <input name="merk" type="text"
                           class="form-control <?= isset($data['errors']['merk']) ? 'is-invalid' : '' ?>">

                    <?php if(isset($data['errors']['merk'])) : ?>
                        <div class="text-danger"><?= $data['errors']['merk']; ?></div>
                    <?php endif; ?>
                </div>

                <!-- MODEL -->
                <div class="mb-3">
                    <label class="form-label">Model</label>
                    <input name="model" type="text"
                           class="form-control <?= isset($data['errors']['model']) ? 'is-invalid' : '' ?>">

                    <?php if(isset($data['errors']['model'])) : ?>
                        <div class="text-danger"><?= $data['errors']['model']; ?></div>
                    <?php endif; ?>
                </div>

                <!-- PRIJS -->
                <div class="mb-3">
                    <label class="form-label">Prijs</label>
                    <input name="prijs" type="number" step="0.01"
                           class="form-control <?= isset($data['errors']['prijs']) ? 'is-invalid' : '' ?>">

                    <?php if(isset($data['errors']['prijs'])) : ?>
                        <div class="text-danger"><?= $data['errors']['prijs']; ?></div>
                    <?php endif; ?>
                </div>

                <!-- GEHEUGEN -->
                <div class="mb-3">
                    <label class="form-label">Geheugen</label>
                    <input name="geheugen" type="number"
                           class="form-control <?= isset($data['errors']['geheugen']) ? 'is-invalid' : '' ?>">

                    <?php if(isset($data['errors']['geheugen'])) : ?>
                        <div class="text-danger"><?= $data['errors']['geheugen']; ?></div>
                    <?php endif; ?>
                </div>

                <!-- BESTURINGSSYSTEEM -->
                <div class="mb-3">
                    <label class="form-label">Besturingssysteem</label>
                    <input name="besturingssysteem" type="text"
                           class="form-control <?= isset($data['errors']['besturingssysteem']) ? 'is-invalid' : '' ?>">

                    <?php if(isset($data['errors']['besturingssysteem'])) : ?>
                        <div class="text-danger"><?= $data['errors']['besturingssysteem']; ?></div>
                    <?php endif; ?>
                </div>

                <!-- SCHERMGROOTTE -->
                <div class="mb-3">
                    <label class="form-label">Schermgrootte</label>
                    <input name="schermgrootte" type="number" step="0.01"
                           class="form-control <?= isset($data['errors']['schermgrootte']) ? 'is-invalid' : '' ?>">

                    <?php if(isset($data['errors']['schermgrootte'])) : ?>
                        <div class="text-danger"><?= $data['errors']['schermgrootte']; ?></div>
                    <?php endif; ?>
                </div>

                <!-- RELEASEDATUM -->
                <div class="mb-3">
                    <label class="form-label">Releasedatum</label>
                    <input name="releasedatum" type="date"
                           class="form-control <?= isset($data['errors']['releasedatum']) ? 'is-invalid' : '' ?>">

                    <?php if(isset($data['errors']['releasedatum'])) : ?>
                        <div class="text-danger"><?= $data['errors']['releasedatum']; ?></div>
                    <?php endif; ?>
                </div>

                <!-- MEGAPIXELS -->
                <div class="mb-3">
                    <label class="form-label">Megapixels</label>
                    <input name="megapixels" type="number"
                           class="form-control <?= isset($data['errors']['megapixels']) ? 'is-invalid' : '' ?>">

                    <?php if(isset($data['errors']['megapixels'])) : ?>
                        <div class="text-danger"><?= $data['errors']['megapixels']; ?></div>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn btn-primary">
                    Verstuur
                </button>

            </form>

            <a href="<?= URLROOT; ?>/SmartphoneController/index">← Terug</a>

        </div>
    </div>

</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>