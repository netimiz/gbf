<?php if(empty($items)) { ?>

<div class="alert alert-info" role="alert">
  <h4 class="alert-title">Patron olaylar olaylar!</h4>
  <div class="text-muted">Burada yeller esiyor hiç kayıt yokki...</div>
</div>
<?php } else {?>
<div class="col-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Firma Listesi</h3>
    </div>
    <div class="card-body border-bottom py-3">
      <div class="d-flex">
        <div class="text-muted">
          ID:
          <div class="mx-2 d-inline-block">
            <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count">
          </div>
          Getir
        </div>
        <div class="ms-auto text-muted">
          Ara
          <div class="ms-2 d-inline-block">
            <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
          </div>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table card-table table-vcenter text-nowrap datatable table-hover table-striped">
        <thead>
          <tr>
            <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
            <th class="w-1">ID. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="6 15 12 9 18 15" /></svg>
            </th>
              Firma
            </th>
            <th>
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
                <input class="form-check-input"
                type="checkbox"
                <?php echo ($item->isActive) ? "checked" : ""; ?>

                >
              </label>
            </td>
            <td class="text-end">
              <span class="dropdown">
                <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">İşlem</button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="#">
                    Action
                  </a>
                  <a class="dropdown-item" href="#">
                    Another action
                  </a>
                </div>
              </span>
            </td>
          </tr>
        <?php  } ?>
        </tbody>
      </table>
    </div>
    <div class="card-footer d-flex align-items-center">
      <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
      <ul class="pagination m-0 ms-auto">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
            <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>
            prev
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item">
          <a class="page-link" href="#">
            next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<?php }  ?>
