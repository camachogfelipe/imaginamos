<div class="<?php echo $class_span; ?>">
  <label class="<?php echo $class_required; ?>"><?php echo $title; ?></label>
  <textarea id="<?php echo $name; ?>" class="<?php echo ($count_text)?"count-textarea2":""; ?>  <?php echo ($wysiwg)?"wysiwg_editor":""; ?> span12" name="<?php echo $name; ?>" 
         <?php if($count_text): ?>
            data-count="<?php echo $count; ?>" 
          <?php endif; ?>
            cols="<?php echo $cols; ?>" rows="<?php echo $row; ?>"><?php echo $dato; ?></textarea>
  <span class="help-block"><?php echo $instrutions;  ?></span>
</div>