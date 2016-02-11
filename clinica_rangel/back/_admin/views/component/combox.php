    <div class="<?php echo $class_span; ?>">
        <label class="<?php echo $class_required; ?>"><?php echo $title; ?></label>
        <select name="<?php echo $name; ?>" class="span12">
            <?php if (!empty($datos)) : ?>
                <?php foreach ($datos as $line) : ?>
                    <option value="<?php echo $line['id']; ?>" <?php echo isset($select_id)?(($select_id===$line['id'])?"selected=\"selected\"":""):""; ?>  ><?php echo $line['name']; ?></option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>
        <span class="help-block"><?php echo $instrutions;  ?></span>
    </div>