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
        <?php $this->load->view("includes/navbar"); ?>

        <div class="page-body">
          <div class="container-xl">
            <div class="row row-deck row-cards">

              <!-- Footer -->
              <?php $this->load->view("dashboard_v/content"); ?>


            </div>
          </div>
        </div>
        <!-- Footer -->
        <?php $this->load->view("includes/dialog"); ?>
      </div>
    </div>

    <!-- Üst hızlı dialog -->
<?php $this->load->view("includes/dialog"); ?>

<!-- Libs JS and Core -->
<?php $this->load->view("includes/include_script"); ?>

  </body>
</html>
