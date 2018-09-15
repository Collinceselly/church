<!doctype html>
<html>
    <body>
    <?php
        if(isset($view) && $view == 1) {
            ?>
            <table border='1'>
                <tr>
                    <td>S.no</td>
                    <td>Id Number</td>
                    <td>First Name</td>
                    <td>Other Names</td>
                    <td>Gender</td>
                    <td>Occupation</td>
                    <td>Post</td>
                    <td>Phone Number</td>
                    <td>Email Address</td>
                    <td>Place of Residence</td>
                    <td>&nbsp;</td>
                </tr>
                <?php 
                $sno = 1;
                foreach($response as $val){  
                    echo '<tr>
                        <td>'.$sno.'</td>
                        <td>'.$val['ID_CARD_NUMBER'].'</td>
                        <td>'.$val['FIRST_NAME'].'</td>
                        <td>'.$val['OTHER_NAMES'].'</td>
                        <td>'.$val['GENDER'].'</td>
                        <td>'.$val['OCCUPATION'].'</td>
                        <td>'.$val['CHURCH_LEADERSHIP_POST'].'</td>
                        <td>'.$val['PHONE_NUMBER'].'</td>
                        <td>'.$val['EMAIL_ADDRESS'].'</td>
                        <td>'.$val['RESIDENTIAL_ADDRESS'].'</td>
                        <td><a href="'.site_url().'collince_controller/index?edit='.$val['ID'].'">Edit</a></td>
                    </tr>';
                    $sno++;
                }
                ?>
            </table>
            <?php
        } 

       
        if(isset($view) && $view == 2)  {
        ?>
        <p>Edit Detail & Click Update Button</p>
       <form method="Post" action="<?= base_url();?>collince_controller/updateUser?>"></form>
            <table>
                <tr>
                    <td>Id Number</td>
                    <td><input type='text' name='ID_CARD_NUMBER' readonly value='<?php echo $response[0]['ID_CARD_NUMBER']; ?>' ></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><input type='text' name='FIRST_NAME'  value='<?php echo $response[0]['FIRST_NAME']; ?>'></td>
                </tr>           
                <tr>
                    <td>Other Names</td>
                    <td><input type='text' name='OTHER_NAMES' value='<?php echo $response[0]['OTHER_NAMES']; ?>' ></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type='text' name='GENDER' value='<?php echo $response[0]['GENDER']; ?>' ></td>
                </tr>
                <tr>
                    <td>Occupation</td>
                    <td><input type='text' name='OCCUPATION' value='<?php echo $response[0]['OCCUPATION']; ?>' ></td>
                </tr>
                <tr>
                    <td>Post</td>
                    <td><input type='text' name='CHURCH_LEADERSHIP_POST' value='<?php echo $response[0]['CHURCH_LEADERSHIP_POST']; ?>' ></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><input type='text' name='PHONE_NUMBER' value='<?php echo $response[0]['PHONE_NUMBER']; ?>' ></td>
                </tr>
                <tr>
                    <td>Email Address</td>
                    <td><input type='text' name='EMAIL_ADDRESS' value='<?php echo $response[0]['EMAIL_ADDRESS']; ?>' ></td>
                </tr>
                <tr>
                    <td>Place of Residence</td>
                    <td><input type='text' name='RESIDENTIAL_ADDRESS' value='<?php echo $response[0]['RESIDENTIAL_ADDRESS']; ?>' ></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type='submit' name='SUBMIT' value='Update'></td>
                </tr>
            </table>
        </form>
    <?php
        }
    ?>
    </body>
    </html>


   