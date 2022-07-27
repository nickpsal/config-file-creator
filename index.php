    <?php
    require "../installation/functions.php";
    require "../installation/includes/header.php";
    $error_counter = 0;
    ?>
    <h1 style="text-align: center;">Server Requirements Checker</h1>
    <hr>
    <br>
    <h2>General requirements</h2>
    <table>
        <?php
            $values = check_requirements();
            if (!empty($values)): ?>
                <?php foreach($values as $key => $value): ?>
                    <tr>
                        <td><?=$key?></td>
                        <td>
                            <?php if ($value == 'true'): ?>
                                <span class="check_ok"></span>
                            <?php else: ?>
                                <span class="check_fail"></span>
                                <?php $error_counter++; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            <tr>
                <?php if($error_counter == 0): ?>
                    <td>No errors you may Continue</td>
                <?php else: ?>
                    <td>Number of Errors</td>
                    <td><?=$error_counter?></td>
                <?php endif;?>
            </tr>
    </table>
    <a href="/index2.php" class="btn btn-primary w-100" type="submit">NEXT STEP</button>
    <?php require "../installation/includes/footer.php"; ?>