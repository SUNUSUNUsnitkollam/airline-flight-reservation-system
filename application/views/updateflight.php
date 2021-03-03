<center> <table>
      <thead>
       <h1> UPDATE FLIGHT </h1>
      </thead>
      <tbody>
      

    <center><form method="post" action="<?php echo base_url()?>first/updatedetails">
        <?php 
    if(isset($user_data)) 
    {
      foreach($user_data->result() as $row1)
      {
      ?>
      <tr>
     <h1>FLIGHT DETAILS</h1>
      <tr><td>
        FLIGHT NAME:</td><td><input type="text" name="flname" placeholder="flight name" pattern=".{3,}"  value="<?php echo $row1->airline;?>"   required title="3 characters minimum" maxlength="25"></td></tr>
      <tr><td>
        FLIGHT NO:</td><td><input type="text" name="flno"  placeholder="flight no" pattern=".{3,}" value="<?php echo $row1->fl_number ;?>" required title="3 characters minimum"  maxlength="10" ></td></tr>
      <tr><td>
        DEPARTURE:</td><td><select name="depar">
          <option><?php echo $row1->departure;?></option>
          <option>TRIVANDRUM</option> 
          <option>KOCHI</option> 
          <option>KOZHIKODE</option> 
          <option>KANNUR</option> 
        </select>
        </td></tr>
        <tr><td>
        DEPARTURE DATE:</td><td><input type="date" name="depdate" value="<?php echo $row1->dep_date ;?>">
          </td></tr>
      <tr><td>
        DEPARTURE TIME:</td><td><input type="time" name="deptime"value="<?php echo $row1->dep_time ;?>">
          </td></tr>
      <tr><td>
        DESTINATION:</td><td><select name="dest">
          <option><?php echo $row1->destination;?></option>
          <option>TRIVANDRUM</option> 
          <option>KOCHI</option> 
          <option>KOZHIKODE</option> 
          <option>KANNUR</option> 
        </select>
        </td></tr>
      <tr><td>
        DESTINATION DATE:</td><td><input type="date" name="desdate"value="<?php echo $row1->dest_date;?>">
          </td></tr>
      <tr><td>
        DESTINATION TIME:</td><td><input type="time" name="destime" value="<?php echo $row1->dest_time;?>">
          </td></tr>
      <tr><td>  
        BUSSINESS CLASS TOTAL SEATS:</td><td><input type="text" name="btseat"value="<?php echo $row1->btseats;?>" required></td></tr>
        <tr><td>  
        FIRST CLASS TOTAL SEATS:</td><td><input type="text" name="ftseat"  value="<?php echo $row1->ftseats;?>"required></td></tr>
        <tr><td>  
         ECONOMIC CLASS TOTAL SEATS:</td><td><input type="text" name="etseat"value="<?php echo $row1->etseats ;?>" required></td></tr>
      <tr><td>  
         BUSSINESS CLASS AVAILABLE  SEATS:</td><td><input type="text" name="baseat"value="<?php echo $row1->baseat  ;?>" required></td></tr>
        <tr><td>  
        FIRST CLASS AVAILABLE  SEATS:</td><td><input type="text" name="faseat" value="<?php echo $row1->faseat;?>" required></td></tr>
        <tr><td>  
        ECONOMIC CLASS AVAILABLE  SEATS:</td><td><input type="text" name="easeat" value="<?php echo $row1->easeat ;?>"required></td></tr>
      
      <tr><td>
        AMOUNT:</td><td><input type="text" name="cost" placeholder="AMOUNT" value="<?php echo $row1->cost;?>" required ></td></tr>
        </table><tr><td></td><td>
        <input type="submit" name="update" value="update" align="center"></td></tr>
    
  </form>
</body>
</html>
<?php
          }
        } 
        ?>

  </html>

