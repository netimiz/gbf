<?php if(empty($items)) { ?>

<div class="alert alert-info" role="alert">
  <h4 class="alert-title">Patron olaylar olaylar!</h4>
  <div class="text-muted">Burada yeller esiyor hiç kayıt yokki...</div>
</div>
<?php } else {?>
<div class="col-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Tip/Tür Listesi</h3>
    </div>

    <div class="table-responsive">
      <table class="table card-table table-vcenter text-nowrap datatable table-hover table-striped">
        <thead>
          <tr>
            <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
            <th class="w-1">ID. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="6 15 12 9 18 15" /></svg>
            </th>

            <th>
              Tip
            </th>

            <th>
              <div class="d-flex py-1 align-items-center">
                <div class="flex-fill">
                  <div>Aktif</div>
                  <div>Pasif</div>
                </div>
              </div>
            </th>

            <th class="text-end">


            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($items as $item ) { ?>


          <tr>
            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select dosyalar"></td>
            <td><span class="text-muted"><?php echo $item->id; ?></span></td>

            <td>

              <?php echo $item->title; ?>
            </td>
            <td>
              <label class="form-check form-switch">
                <input class="form-check-input isActive"
                data-url="<?php echo base_url("tip/isActiveSetter/$item->id"); ?>"
                type="checkbox"
                <?php echo ($item->isActive) ? "checked" : ""; ?>

                >
              </label>
            </td>
            <td class="text-end">
              <span class="dropdown">
                <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">İşlem</button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="<?php echo base_url("tip/update_form/$item->id"); ?>">
                    Güncelle
                  </a>
                  <button class="dropdown-item" data-href="<?php echo base_url("tip/delete/$item->id"); ?>" data-bs-toggle="modal" data-bs-target="#silOnay" data-target="#silOnay">
                    Sil
                  </button>
                </div>
              </span>
            </td>
          </tr>
        <?php  } ?>
        </tbody>
      </table>
    </div>
    <div class="card-footer d-flex align-items-center">
      <p class="m-0 text-muted">Hepsi bu kadar.:)</p>

    </div>
  </div>
</div>
<?php }  ?>
