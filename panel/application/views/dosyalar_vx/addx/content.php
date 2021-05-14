<!-- TODO Lists
Hazırlanma Tarih mask
Revizyon Tarih mask
Tür için veritabanından id ve açıklama çekme
üye bilgisi Ekleme -oto-
kayıt tarihi ekleme -oto-
firma ajax arama - id alma
dosya yükleme
 -->


<div class="col-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Dosya Ekleme</h3>
    </div>
test
  </div>
</div>



<div class="col-sm-6 col-lg-6">
  <div class="card">
    <div class="card-body">

        <!--Form elemanları-->
        <div class="mb-3">
          <label class="form-label">Ürün Adı</label>
          <input type="text" class="form-control" name="adi" placeholder="Ürün Adı">
        </div>
        <div class="mb-3">
          <label class="form-label">Ürün Kodu</label>
          <input type="text" class="form-control" name="urun_kodu" placeholder="Ürün Kodu">
        </div>
        <div class="mb-3">
          <label class="form-label">Cas No</label>
          <input type="text" class="form-control" name="cas_no" placeholder="CAS #">
        </div>
        <div class="mb-3">
          <label class="form-label">Form No</label>
          <input type="text" class="form-control" name="form_no" placeholder="Form No">
        </div>
        <div class="mb-3">
          <label class="form-label">Hazırlanma Tarihi</label>
          <input type="text" class="form-control" name="hazirlanma_tarih" placeholder="Hazırlanma Tarihi">
        </div>

    </div>
  </div>
</div>
<div class="col-sm-6 col-lg-6">
  <div class="card">
    <div class="card-body">

        <!--Form elemanları-->
        <div class="mb-3">
        <div class="form-label">Türü</div>
        <select class="form-select" >
          <option value="1">Bilgi Formu</option>
          <option value="2">T. Data Sheet</option>
        </select>
      </div>
        <div class="mb-3">
          <label class="form-label">Firma</label>
          <input class="form-control" list="datalistOptions" placeholder="Firmayı Ara..."/>
          <datalist id="datalistOptions">
            <option value="Shell"/>
            <option value="Samsung"/>
            <option value="Türk Petrol"/>
            <option value="Prill"/>
          </datalist>
        </div>
        <div class="mb-3">
          <label class="form-label">Revizyon Tarihi</label>
          <input type="text" class="form-control" name="revizyon_tarih" placeholder="Revizyon Tarihi">
        </div>
        <div class="mb-3">
          <label class="form-label">Revizyon No</label>
          <input type="text" class="form-control" name="revizyon_no" placeholder="Revizyon No">
        </div>
        <div class="mb-3">
          <div class="form-label">Dosyayı Yükleyin</div>
          <input type="file" class="form-control" />
        </div>

    </div>
  </div>
</div>
