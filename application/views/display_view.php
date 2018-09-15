<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Display Records From Database Using Codeigniter</title>
  <link href="<?= base_url();?>css/bootstrap.css" rel="stylesheet">
 </head>
 <body>
  <div class="row">
   <div style="width:500px;margin:50px;">
    <h4>Display Records From Database Using Codeigniter</h4>
    <table class="table table-striped table-bordered">
     <tr><td><strong>Id Number</strong></td><td><strong>First Name</strong></td><td><strong>Other Name</strong></td><td><strong>Gender</strong></td><td><strong>Occupation</strong></td><td><strong>post</strong></td><td><strong>Phone Number</strong></td><td><strong>E mail</strong></td><td><strong>Residential Address</strong></td></tr> 

     <?php foreach($MEMBERS as $members){?>
     <tr>
      <td><?=$members->ID_CARD_NUMBER;?></td><td><?=$members->FIRST_NAME;?></td><td><?=$members->OTHER_NAMES;?></td><td><?=$members->GENDER;?></td><td><?=$members->OCCUPATION;?></td><td><?=$members->CHURCH_LEADERSHIP_POST;?></td><td><?=$members->PHONE_NUMBER;?></td><td><?=$members->EMAIL_ADDRESS;?></td><td><?=$members->RESIDENTIAL_ADDRESS;?></td>
     <!--<td><a href="'.site_url().'display_controller/index?displayMembers='.$members['ID'].'">Edit</a></td>-->
     <td><a href="<?php echo base_url() . "display_controller/show_members_id/" . $members->ID;?>">Edit</a></td>
    </tr>     
        <?php }?>  
    </table>

    <!--<?php foreach($SINGLE_MEMBERS as $members){?>-->
    <form method="post" action="<?php echo base_url() . "display_controller/update_members_id1/"?>"> 
      <label id="hide">ID CARD NUMBER :</label>
      <input type="text" name="idno" value="<?php echo $members->ID_CARD_NUMBER; ?>">

      <label id="hide">FIRST NAME :</label>
      <input type="text" name="fname" value="<?php echo $members->FIRST_NAME; ?>">

      <label id="hide">OTHER NAMES :</label>
      <input type="text" name="oname" value="<?php echo $members->OTHER_NAMES; ?>"> 

      <label id="hide">GENDER :</label>
      <input type="text" name="gender" value="<?php echo $members->GENDER; ?>">

      <label id="hide">OCCUPATION :</label>
      <input type="text" name="occupation" value="<?php echo $members->OCCUPATION; ?>">

      <label id="hide">CHURCH LEADERSHIP POST :</label>
      <input type="text" name="post" value="<?php echo $members->CHURCH_LEADERSHIP_POST; ?>">

      <label id="hide">PHONE NUMBER :</label>
      <input type="text" name="phone" value="<?php echo $members->PHONE_NUMBER; ?>">

      <label id="hide">EMAIL ADDRESS :</label>
      <input type="text" name="email" value="<?php echo $members->EMAIL_ADDRESS; ?>">

      <label id="hide">PLACE OF RESIDENCE :</label>
      <input type="text" name="Residential" value="<?php echo $members->RESIDENTIAL_ADDRESS; ?>">

      <input type="submit" name="submit" value="Update">
    </form>
   <!-- <?php }?>-->
   </div> 
  </div> 
 </body>
</html