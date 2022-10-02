<?php $db = new mysqli("localhost", "root", "", "wdpf51") ?>

    <form action="">
        <select name="" id="dic">
            <option value="" selected disabled>Select one</option>
            <?php

           echo $output = $_GET['mydiv'];

            $sql = "SELECT * FROM districts WHERE dist_divid = '$output'";
            $result = $db->query($sql);
            while ($data = $result->fetch_assoc()) {
            ?>
                <option value="<?php echo $data['distid'] ?>"><?php echo $data['distname'] ?></option>
            <?php
            } ?>

        </select>

    </form>



