<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<table align="middle" border="1" cellpadding="0" cellspacing="0" width="65%">
    <form action="" method="post" name="frmPlaceOrder">
        <tr><td>Sl.</td><td>Item</td><td>Add to Order</td></tr>
        <?php
        $i = 1;
        foreach ($items as $row) {
            ?>
            <tr><td><?php echo $i++; ?></td><td><?php echo $row->name; ?></td><td><input type="checkbox" id="chk_" name="item[]" value="<?php echo $row->id; ?>" /></td></tr>
                    <?php
                }
                ?>
        <tr><td colspan="3"><input type="submit" name="submit" value="Place Order" /></td></tr>
    </form>
</table>