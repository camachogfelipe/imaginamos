    <div class="<?php echo $class_span; ?>">
        <label class="<?php echo $class_required; ?>"><?php echo $title; ?></label>
        <select id="<?php echo $name; ?>" name="<?php echo $name; ?>" class="span12 s2_single">
            <?php if (!empty($datos)) :  ?>
                <?php foreach ($datos as $value) : ?>
                    <option value="<?php echo $value['id']; ?>" <?php echo isset($select_id)?(($select_id==$value['id'])?"selected=\"selected\"":""):""; ?>  ><?php echo $value['name']; ?></option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>
        <span class="help-block"><?php echo $instrutions;  ?></span>
    </div>