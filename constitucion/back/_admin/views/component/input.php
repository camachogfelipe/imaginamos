<div class="<?php echo $class_span; ?>">
  <label class="<?php echo $class_required; ?>"><?php echo $title; ?></label>
  <input type="<?php echo $type; ?>" id="<?php echo $name; ?>" name="<?php echo $name; ?>" value="<?php echo $dato; ?>" class="<?php echo $span_text; ?>"<?php
    echo ($type == "checkbox") ? $max_length : ' maxlength="' . $max_length . '"';
    echo ($checked == true and ($type == "checkbox" || $type == "radio")) ? " checked" : "";
  ?>>
  <span class="help-block"><?php echo $instrutions; ?></span>
</div> 


