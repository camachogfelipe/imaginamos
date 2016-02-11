<div class="<?php echo $class_span; ?>">
  <label class="<?php echo $class_required; ?>"><?php echo $title; ?></label>
  <textarea class="span12" name="<?php echo $name; ?>" 
         <?php if($count_text): ?>
            id="count-textarea2" 
            data-count="<?php echo $count; ?>" 
          <?php endif; ?>
           <?php if($wysiwg): ?>
            id="wysiwg_editor" 
          <?php endif; ?>   
            cols="<?php echo $cols; ?>" rows="<?php echo $row; ?>"><?php echo $dato; ?></textarea>
  <span class="help-block"><?php echo $instrutions;  ?></span>
</div>