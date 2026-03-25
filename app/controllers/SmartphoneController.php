<?php

class SmartphoneController extends BaseController
{
    private $smartphoneModel;

    public function __construct()
    {
        $this->smartphoneModel = $this->model('Smartphone');
    }

    // =========================
    //  READ (OVERZICHT)
    // =========================
    public function index($display='none', $message='')
    {
        $result = $this->smartphoneModel->getAllSmartphones();

        $data = [
            'title' => 'Overzicht Smartphones',
            'display' => $display,
            'message' => $message,
            'result' => $result
        ];

        $this->view('smartphone/index', $data);
    }

    // =========================
    //  CREATE (MET VALIDATIE)
    // =========================
    public function create()
    {
        $data = [
            'title' => 'Nieuwe smartphone toevoegen',
            'errors' => []
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $errors = [];

            // 🔴 VALIDATIE PER VELD
            if (empty($_POST['merk'])) {
                $errors['merk'] = 'Voer een merk in';
            } elseif (strlen($_POST['merk']) > 20) {
                $errors['merk'] = 'Merk mag maximaal 20 tekens bevatten';
            }

            if (empty($_POST['model'])) {
                $errors['model'] = 'Voer een model in';
            }

            if (empty($_POST['prijs'])) {
                $errors['prijs'] = 'Voer een prijs in';
            }

            if (empty($_POST['geheugen'])) {
                $errors['geheugen'] = 'Voer een geheugen in';
            }

            if (empty($_POST['besturingssysteem'])) {
                $errors['besturingssysteem'] = 'Voer een besturingssysteem in';
            }

            if (empty($_POST['schermgrootte'])) {
                $errors['schermgrootte'] = 'Voer een schermgrootte in';
            }

            if (empty($_POST['releasedatum'])) {
                $errors['releasedatum'] = 'Voer een datum in';
            }

            if (empty($_POST['megapixels'])) {
                $errors['megapixels'] = 'Voer megapixels in';
            }

            // ❌ fouten → terug naar form
            if (!empty($errors)) {

                $data['errors'] = $errors;

                $this->view('smartphone/create', $data);

            } else {

                // ✅ opslaan
                $this->smartphoneModel->create($_POST);

                header('Refresh:3; url=' . URLROOT . '/SmartphoneController/index');

                $this->index('flex', 'Het record is succesvol opgeslagen');
                return;
            }
        }

        $this->view('smartphone/create', $data);
    }

    // =========================
    //  DELETE
    // =========================
    public function delete($Id)
    {
        $this->smartphoneModel->delete($Id);

        header('Refresh:3; url=' . URLROOT . '/SmartphoneController/index');

        $this->index('flex', 'Record is verwijderd');
    }

    // =========================
    //  EDIT
    // =========================
    public function edit($Id)
    {
        $result = $this->smartphoneModel->getSmartphoneById($Id);

        $data = [
            'title' => 'Wijzig Smartphone',
            'row' => $result,
            'errors' => []
        ];

        $this->view('smartphone/edit', $data);
    }

    // =========================
    //  UPDATE (MET VALIDATIE)
    // =========================
    public function update($Id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $errors = [];

            // 🔴 VALIDATIE
            if (empty($_POST['Merk'])) {
                $errors['Merk'] = 'Voer een merk in';
            } elseif (strlen($_POST['Merk']) > 20) {
                $errors['Merk'] = 'Merk max 20 tekens';
            }

            if (empty($_POST['Model'])) {
                $errors['Model'] = 'Voer een model in';
            }

            if (empty($_POST['Prijs'])) {
                $errors['Prijs'] = 'Voer een prijs in';
            }

            if (empty($_POST['Geheugen'])) {
                $errors['Geheugen'] = 'Voer geheugen in';
            }

            if (empty($_POST['Besturingssysteem'])) {
                $errors['Besturingssysteem'] = 'Voer OS in';
            }

            if (empty($_POST['Schermgrootte'])) {
                $errors['Schermgrootte'] = 'Voer schermgrootte in';
            }

            if (empty($_POST['Releasedatum'])) {
                $errors['Releasedatum'] = 'Voer datum in';
            }

            if (empty($_POST['MegaPixels'])) {
                $errors['MegaPixels'] = 'Voer megapixels in';
            }

            // ❌ fouten
            if (!empty($errors)) {

                $data = [
                    'title' => 'Wijzig Smartphone',
                    'errors' => $errors,
                    'row' => $this->smartphoneModel->getSmartphoneById($Id)
                ];

                $this->view('smartphone/edit', $data);

            } else {

                // ✅ update
                $this->smartphoneModel->update($Id, $_POST);

                $row = $this->smartphoneModel->getSmartphoneById($Id);

                $data = [
                    'title' => 'Wijzig Smartphone',
                    'message' => 'Het record is succesvol opgeslagen',
                    'display' => 'flex',
                    'row' => $row
                ];

                $this->view('smartphone/edit', $data);
            }
        }
    }
}