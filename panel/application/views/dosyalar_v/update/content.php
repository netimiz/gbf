<form action="<?php echo base_url("dosyalar/update/$item->id"); ?>" method="post">
  <div class="container-xl">
    <div class="card card-lg" >
      <div class="card-body ">

        <div class="row lg-6">

              <div class=" col-6 ">


                <!--Form elemanları-->

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

                    <div class="mb-3">
                      <label class="form-label">Ürün Kodu
                          <span class="form-help" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true"
                            data-bs-content="<p>Ürünün seri kodu. Ürüne özel no</p>">?
                          </span>
                      </label>

                      <input type="text" class="form-control <?php if(isset($form_error)){ echo "is-invalid ";} ?>"
                        name="urun_kodu" placeholder="Ürün Kodu" value="<?php echo $item->urun_kodu; ?>">
                        <?php if(isset($form_error)){  ?>
                          <div class="invalid-feedback"><?php echo form_error("urun_kodu"); ?></div>
                        <?php } ?>
                    </div>



                    <div class="mb-3">
                      <label class="form-label">Form No
                          <span class="form-help" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true"
                            data-bs-content="<p>Gbf/Tds form no</p>">?
                          </span>
                      </label>

                      <input type="text" class="form-control <?php if(isset($form_error)){ echo "is-invalid ";} ?>"
                        name="form_no" placeholder="Form No" value="<?php echo $item->form_no; ?>">
                        <?php if(isset($form_error)){  ?>
                          <div class="invalid-feedback"><?php echo form_error("form_no"); ?></div>
                        <?php } ?>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Yayın Tarihi
                          <span class="form-help" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true"
                            data-bs-content="<p>Formun ilk yayın / hazırlanma tarihi</p>">?
                          </span>
                      </label>

                      <input type="text" class="form-control <?php if(isset($form_error)){ echo "is-invalid ";} ?>"
                        name="yay_tarih" value="<?php echo $item->yay_tarih; ?>" data-mask="00/00/0000" data-mask-visible="true" ">
                        <?php if(isset($form_error)){  ?>
                          <div class="invalid-feedback"><?php echo form_error("yay_tarih"); ?></div>
                        <?php } ?>
                    </div>







              </div>

              <div class=" col-6 ">

                <!--Form elemanları-->
                    <div class="mb-3">
                      <label class="form-label">Türü/Tipi
                          <span class="form-help" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true"
                            data-bs-content="<p>Dosya Türü nedir?</p>">?
                          </span>
                      </label>
                      <select class="form-select form-control <?php if(isset($form_error)){ echo "is-invalid ";} ?>"
                        name="tip_id">
                        <option value="1" <?php if($item->tip_id==1) echo "selected"; ?>>Bilgi Formu</option>
                        <option value="2" <?php if($item->tip_id==2) echo "selected"; ?>>T. Data Sheet</option>
                      </select>
                        <?php if(isset($form_error)){  ?>
                          <div class="invalid-feedback"><?php echo form_error("tip_id"); ?></div>
                        <?php } ?>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Firma
                          <span class="form-help" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true"
                            data-bs-content="<p>Üretici / ithalatcı firma</p>">?
                          </span>
                      </label>

                      <select  class="firmasearch form-control <?php if(isset($form_error)){ echo "is-invalid ";} ?>"
                        name="firma_id" value="<?php echo $item->firma_id; ?>" >
                      </select>
                        <?php if(isset($form_error)){  ?>
                          <div class="invalid-feedback"><?php echo form_error("firma_id"); ?></div>
                        <?php } ?>

                    </div>

                    <div class="mb-3">
                      <label class="form-label">Cas No
                          <span class="form-help" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true"
                            data-bs-content="<p>Var ise CAS numarası</p>">?
                          </span>
                      </label>

                      <input type="text" class="form-control"
                        name="cas_no" placeholder="Cas No" value="<?php echo $item->cas_no; ?>">

                    </div>

                    <div class="mb-3">
                      <label class="form-label justify-content-end"><br></label>
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

                    </div>


              </div>

        </div>
      </div>
    </div>
  </div>
</form>
