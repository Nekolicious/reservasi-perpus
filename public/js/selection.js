$(document).ready(function () {

    function hideSesi() {
        if ($("#pilihHari option:selected").val() === 'Jumat') {
            $("#pilihSesi option[value='sesi3']").hide();
        } else {
            $("#pilihSesi option[value='sesi3']").show();
        }
        hideSesi();
    }
    $('#pilihHari').change(hideSesi)

})