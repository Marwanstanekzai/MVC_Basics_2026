<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-6">

            <h3>Wijzig Smartphone</h3>

            <!-- SUCCES MELDING -->
            <?php if(isset($data['display']) && $data['display'] == 'flex') : ?>
                <div class="alert alert-success">
                    <?= $data['message']; ?>
                </div>
            <?php endif; ?>

            <form action="<?= URLROOT; ?>/SmartphoneController/update/<?= $data['row']->Id; ?>" method="post">

                <!-- MERK -->
                <div class="mb-2">
                    Merk:
                    <input type="text" name="Merk"
                           class="form-control <?= isset($data['errors']['Merk']) ? 'is-invalid' : '' ?>"
                           value="<?= $data['row']->Merk; ?>">

                    <?php if(isset($data['errors']['Merk'])) : ?>
                        <div class="text-danger"><?= $data['errors']['Merk']; ?></div>
                    <?php endif; ?>
                </div>

                <!-- MODEL -->
                <div class="mb-2">
                    Model:
                    <input type="text" name="Model"
                           class="form-control <?= isset($data['errors']['Model']) ? 'is-invalid' : '' ?>"
                           value="<?= $data['row']->Model; ?>">

                    <?php if(isset($data['errors']['Model'])) : ?>
                        <div class="text-danger"><?= $data['errors']['Model']; ?></div>
                    <?php endif; ?>
                </div>

                <!-- PRIJS -->
                <div class="mb-2">
                    Prijs:
                    <input type="text" name="Prijs"
                           class="form-control <?= isset($data['errors']['Prijs']) ? 'is-invalid' : '' ?>"
                           value="<?= $data['row']->Prijs; ?>">

                    <?php if(isset($data['errors']['Prijs'])) : ?>
                        <div class="text-danger"><?= $data['errors']['Prijs']; ?></div>
                    <?php endif; ?>
                </div>

                <!-- GEHEUGEN -->
                <div class="mb-2">
                    Geheugen:
                    <input type="text" name="Geheugen"
                           class="form-control <?= isset($data['errors']['Geheugen']) ? 'is-invalid' : '' ?>"
                           value="<?= $data['row']->Geheugen; ?>">

                    <?php if(isset($data['errors']['Geheugen'])) : ?>
                        <div class="text-danger"><?= $data['errors']['Geheugen']; ?></div>
                    <?php endif; ?>
                </div>

                <!-- OS -->
                <div class="mb-2">
                    Besturingssysteem:
                    <input type="text" name="Besturingssysteem"
                           class="form-control <?= isset($data['errors']['Besturingssysteem']) ? 'is-invalid' : '' ?>"
                           value="<?= $data['row']->Besturingssysteem; ?>">

                    <?php if(isset($data['errors']['Besturingssysteem'])) : ?>
                        <div class="text-danger"><?= $data['errors']['Besturingssysteem']; ?></div>
                    <?php endif; ?>
                </div>

                <!-- SCHERM -->
                <div class="mb-2">
                    Schermgrootte:
                    <input type="text" name="Schermgrootte"
                           class="form-control <?= isset($data['errors']['Schermgrootte']) ? 'is-invalid' : '' ?>"
                           value="<?= $data['row']->Schermgrootte; ?>">

                    <?php if(isset($data['errors']['Schermgrootte'])) : ?>
                        <div class="text-danger"><?= $data['errors']['Schermgrootte']; ?></div>
                    <?php endif; ?>
                </div>

                <!-- DATUM -->
                <div class="mb-2">
                    Releasedatum:
                    <input type="text" name="Releasedatum"
                           class="form-control <?= isset($data['errors']['Releasedatum']) ? 'is-invalid' : '' ?>"
                           value="<?= $data['row']->Releasedatum; ?>">

                    <?php if(isset($data['errors']['Releasedatum'])) : ?>
                        <div class="text-danger"><?= $data['errors']['Releasedatum']; ?></div>
                    <?php endif; ?>
                </div>

                <!-- MP -->
                <div class="mb-2">
                    MegaPixels:
                    <input type="text" name="MegaPixels"
                           class="form-control <?= isset($data['errors']['MegaPixels']) ? 'is-invalid' : '' ?>"
                           value="<?= $data['row']->MegaPixels; ?>">

                    <?php if(isset($data['errors']['MegaPixels'])) : ?>
                        <div class="text-danger"><?= $data['errors']['MegaPixels']; ?></div>
                    <?php endif; ?>
                </div>

                <input type="submit" value="Opslaan" class="btn btn-success mt-2">

            </form>

        </div>
    </div>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>