<?php

home();
?>

<?php
$content = file_get_contents('lets.json');
$content = json_decode($content);
?>
<form method="POST" action="action">
    <div style="border:1px solid red">
    <?php foreach($content as $item): ?>

    <h2><?php echo $item->question; ?> </h2>
    <ul>
    <?php foreach($item->answers as $a): ?>
    <li>

        <?php if($item->type == 'radio'):?>
        <input type="radio" name="<?php echo $item->name ?>" value="<?php echo $a->text ?>"/>
        <?php endif?>

        <?php if($item->type == 'checkbox'): ?>
            <label>
            <input type="checkbox" name="<?php echo $item->name?>[]" value="<?php echo $a->text?>"/>
        </label>
        <?php endif?>

        <?php if($item->type == 'select'):?>
        <select name="<?php echo $item->name?>">
           <?php foreach($a->option as $b){?>
        <option>
            <?php echo ($b);?>
        </option>
            <?php }?>
        </select>
        <?php endif?>

        <?php if($item->type == 'text'):?>
        <input type="text" name="<?php echo $item->name?>" size="20" >
        <?php endif?>

        <?php echo $a->text ?>
     </li>
    <?php endforeach ?>
    </ul>

    <?php endforeach ?>
    </div>

    <div>
        <button type="submit">submit</button>
    </div>
        </form>
       