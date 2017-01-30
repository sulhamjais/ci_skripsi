<script>

    function pilih_surat() {
        var myselect = document.getElementById("jenissurat");


        switch (myselect.options[myselect.selectedIndex].value){
            case "tutupstrata":
                window.open("<?php echo base_url('buatsurat/viewTutupstrata'); ?>",'_self',false);
                break;
            case "aktifkuliah":
                window.open("<?php echo base_url('buatsurat'); ?>",'_self',false);
                break;
            case "pindahkampus":
                window.open("<?php echo base_url('buatsurat/viewPindahKampus'); ?>",'_self',false);
                break;
            case "izinpenelitian":
                window.open("<?php echo base_url('buatsurat/viewIzinpenelitian'); ?>",'_self',false);
                break;
            case "kerjapraktek":
                window.open("<?php echo base_url('buatsurat/viewKerjapraktek'); ?>",'_self',false);
                break;
            case "suratlain":
                window.open("<?php echo base_url('buatsurat/viewSuratlain'); ?>",'_self',false);
                break;


        }
    }

    </script>
