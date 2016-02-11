<ul>
    <?php foreach ($list as $val): ?>
        <li>
            <a href="{{ url:site }}<?php echo $val->uri ?>">
                <span class="title_event_widget"><?php echo $val->title ?></span>                
            </a>
        </li>
    <?php endforeach; ?>
</ul>