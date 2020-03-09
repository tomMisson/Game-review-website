<?php
if(!$this->session->has_userdata('loggedIn'))
{
    redirect(base_url());
}
?>


<main id="profile">
    <h2><?php echo $this->session->userdata('username');?></h2>
    <br>
    <div class="custom-control custom-switch">
        <input <?php if($darkmode=="1"){echo "checked";}?> type="checkbox" class="custom-control-input" id="darkSwitch">
        <label class="custom-control-label" for="darkSwitch">Dark theme</label>
    </div>
    <div class="custom-control custom-switch">
        <input <?php if($admin=="1"){echo "checked";}?> type="checkbox" class="custom-control-input" id="adminSwitch">
        <label class="custom-control-label" for="adminSwitch">Admin</label>
    </div>
</main>