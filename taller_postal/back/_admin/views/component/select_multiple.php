<div class="span6">
  <label class="<?php echo $class_required; ?>"><?php echo $title; ?></label>
  <select class="searchable" id="<?php echo str_replace("[]", "", $name); ?>" name="<?php echo $name; ?>" multiple="multiple">
            <?php if (!empty($datos)) :  ?>
                 <?php foreach ($datos as $key => $group) : ?>
                     <optgroup label="<?php echo $key; ?>" >
                       <?php foreach ($group as $value) : ?>
                             <option <?php echo (in_array($value['id'],$select_id))?"selected=\"selected\"" :""; ?> value="<?php echo $value['id']; ?>" ><?php echo $value['name']; ?></option>
                       <?php endforeach; ?> 
                     </optgroup>           
                <?php endforeach; ?>
            <?php endif; ?>
    </select>
   <span class="help-block"><?php echo $instrutions;  ?></span>
</div>                                   

