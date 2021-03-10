<?php 
    include __DIR__ . '/../includes/functions.php';

    $title = 'Family members';
    
    $familyMembers = array(
        'mother' => new Mother('Anna', '1985-03-05'),
        'father' => new Father('Sam', '1982-05-03'),
        'child_1' => new Child('Paul', '2015-03-05', 'm'),
        'child_2' => new Child('Helena', '2012-01-06', 'f'),
        'child_3' => new Child('Bella', '2019-01-01', 'f'),
    );
    $familyMembers['mother']->husbandName = $familyMembers['father']->getName();
    $familyMembers['father']->wifeName = $familyMembers['mother']->getName();

    foreach($familyMembers as $member) {
        if ($member instanceof Child) {
            $member->motherName =  $familyMembers['mother']->getName();
            $member->fatherName =  $familyMembers['father']->getName();
        }
        $member->setPeopleCount(count($familyMembers));
    }
?>
<h1>FAMILY MEMBERS</h1>
<div class="family">

    <?php foreach($familyMembers as $member):?>
        <div class="card">
            <div class="card-header">
                <?=get_class($member);?> <span class="text-muted">(instance of <?=get_parent_class($member)?> Class)</span>
            </div>
            <div class="card-body">
                <?php foreach(getFullInfo($member) as $key => $value): ?>
                <p class="card-text">
                    <span style="color:gray;"><?=ucfirst($key)?>: </span>
                    <?=$value?>                
                </p>
                <?php endforeach ?>
            </div>
        </div>
    <?php endforeach ?>

</div>