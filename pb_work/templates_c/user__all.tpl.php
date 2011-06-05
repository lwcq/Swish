
  <table>
      <?php $_sectitems_vals = &$this->_data['items']; if(is_array($_sectitems_vals) && ($_sectitems_cnt = sizeof($_sectitems_vals)) > 0){  for($_sect1_i = 0; $_sect1_i < $_sectitems_cnt; $_sect1_i++){   ?>
       <tr>
         <td><?php echo htmlspecialchars($_sectitems_vals[$_sect1_i]['user_id']);   ?></td>
         <td><?php echo htmlspecialchars($_sectitems_vals[$_sect1_i]['username']);   ?></td>
         <td><?php echo htmlspecialchars($_sectitems_vals[$_sect1_i]['password']);   ?></td>
       </tr>
      <?php  }   }   ?>
  </table>    
  
      <div id="pager">
        <?php echo $this->_data['pager'];   ?>
      </div>
