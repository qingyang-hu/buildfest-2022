<?php require __DIR__ . "/../header.php" ?>

<p>Student List:</p>
<ul>
    <?php foreach ($students as $student) : ?>
        <li><?= $student["name"]  ?></li>
    <?php endforeach ?>
</ul>

<?php require __DIR__ . "/../footer.php" ?>
