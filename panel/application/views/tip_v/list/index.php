<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta2
* @link https://tabler.io
* Copyright 2018-2021 The Tabler Authors
* Copyright 2018-2021 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="tr">

<?php $this->load->view("includes/head"); ?>

  <body class="antialiased">
    <div class="wrapper">
      <!-- Aside -->
      <?php $this->load->view("includes/aside"); ?>

      <div class="page-wrapper">


        <!-- Navbar -->
        <?php $this->load->view("{$viewFolder}/{$subViewFolder}/navbar"); ?>

        <div class="page-body">
          <div class="container-xl">
            <div class="row row-deck row-cards">

              <!-- Ozet -->
              <?php $this->load->view("{$viewFolder}/{$subViewFolder}/ozet"); ?>

              <!-- Icerik -->
              <?php $this->load->view("{$viewFolder}/{$subViewFolder}/content"); ?>


            </div>
          </div>
        </div>
        <!-- Footer -->
        <?php $this->load->view("includes/footer"); ?>
      </div>
    </div>

    <!-- Üst hızlı moal dialog -->
<?php //$this->load->view("includes/dialog"); ?>
<?php $this->load->view("{$viewFolder}/{$subViewFolder}/modals"); ?>

<!-- Libs JS and Core -->
<?php $this->load->view("includes/include_script"); ?>

  </body>
</html>
