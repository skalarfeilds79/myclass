<?php

class Sweetalert_model extends CI_Model
{
    public function alert($icon, $title, $text, $redirect)
    {
        ?>
<link rel=" stylesheet" href="<?=base_url('assets/css');?>/sweetalert2.min.css">
<script src="<?=base_url('assets/js');?>/sweetalert2.min.js"></script>

<body>

</body>

<script>
Swal.fire({
    icon: '<?=$icon;?>',
    title: '<?=$title;?>',
    text: '<?=$text;?>'
}).then((result) => {
    window.location = "<?=base_url($redirect);?>"
})
</script>
<?php
}

}
?>