
<!-- Libs JS -->
<script src="<?php echo base_url("assets/ui_assets"); ?>/dist/libs/apexcharts/dist/apexcharts.min.js"> </script>
<script src="<?php echo base_url("assets/ui_assets"); ?>/dist/js/autosize.js"> </script>
<script src="<?php echo base_url("assets/ui_assets"); ?>/dist/js/dropdown.js"> </script>
<script src="<?php echo base_url("assets/ui_assets"); ?>/dist/js/input-mask.js"> </script>
<script src="<?php echo base_url("assets/ui_assets"); ?>/dist/js/popover.js"> </script>
<script src="<?php echo base_url("assets/ui_assets"); ?>/dist/js/tab.js"> </script>
<script src="<?php echo base_url("assets/ui_assets"); ?>/dist/js/toast.js"> </script>
<script src="<?php echo base_url("assets/ui_assets"); ?>/dist/js/tooltip.js"> </script>
<!-- Tabler Core -->
<script src="<?php echo base_url("assets/ui_assets"); ?>/dist/js/tabler.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script>
// modal ile silme işlemi için linki gönderiyor. (firma Silmede Kullanılıyor.)
$('#silOnay').on('show.bs.modal', function (event) {
  var id = $(event.relatedTarget).data('href')
  //id : hem id hem adresi alıyor
  var href = '' + id
  $('.btn-danger', this).attr('href', href)
})

//isActive olayı
$(".isActive").change(function(){
  var $data= $(this).prop("checked");
  var $data_url= $(this).data("url");

  if(typeof $data !== "undefined" && typeof $data_url !== "undefined"){
    $.post($data_url, { data :$data }, function(response){
    });
  }
})



</script>
