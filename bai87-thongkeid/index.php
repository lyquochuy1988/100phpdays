<?php 
    function thongkeID($id, $str) {
        $str = preg_replace("/\s+/", "", $str);

        $strArr = explode(",", $str);

        $index = 0;
        foreach ($strArr as $value) {
            if ($value === $id) {
                $index++;
            }
        }

        echo "ID {$id} xuat hien {$index} lan\n";
    }

    thongkeID("69", "69,  1,    69    , 169  "); // 2 lan
?>