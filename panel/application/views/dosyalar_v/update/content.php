<div class="col-sm-6 col-lg-6">
  <div class="card">
    <div class="card-body">

        <!--Form elemanları-->
        <form action="<?php echo base_url("dosyalar/update/$item->id"); ?>" method="post">
            <div class="mb-3">
              <label class="form-label">Dosya Adı
                  <span class="form-help" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true"
                    data-bs-content="<p>Dosya adı</p>">?
                  </span>
              </label>

              <input type="text" class="form-control <?php if(isset($form_error)){ echo "is-invalid ";} ?>"
                name="title" placeholder="Dosya Adı" value="<?php echo $item->title; ?>">
                <?php if(isset($form_error)){  ?>
                  <div class="invalid-feedback"><?php echo form_error("title"); ?></div>
                <?php } ?>
            </div>



            <div class="btn-list justify-content-end">
              <a href="<?php echo base_url("dosyalar"); ?>" type="button" class="btn" role="button" >
                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                <!-- SVG icon code -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                   <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                   <path d="M10 10l4 4m0 -4l-4 4"></path>
                </svg>
                İptal
              </a>
            <button type="submit" class="btn btn-warning" >
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <!-- SVG icon code -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                 <line x1="12" y1="5" x2="12" y2="19"></line>
                 <line x1="5" y1="12" x2="19" y2="12"></line>
              </svg>
              Dosyayı Güncelle
            </button>
            </div>

      </form>

    </div>
  </div>
</div>
