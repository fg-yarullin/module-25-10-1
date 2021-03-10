<?php

    function getFullInfo(Family $obj) {
        $familyMember = array(
            'Name' => $obj->getName(),
            'Birth date' => $obj->getBirthday(),
            'Age' => $obj->age(),
            'Sex' => $obj->getSex(),
        );
        if ($obj instanceof Mother) {
            $familyMember['husband name'] = $obj->husbandName;
        }

        if ($obj instanceof Father) {
            $familyMember['wife name'] = $obj->wifeName;
        }

        if ($obj instanceof Father) {
            $familyMember['wife name'] = $obj->wifeName;
        }

        if ($obj instanceof Child) {
            $familyMember['mother name'] = $obj->motherName;
            $familyMember['father name'] = $obj->fatherName;
        }

        return $familyMember;
    }