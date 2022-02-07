<?php

function delete($pdo, $table, $field, $value) {
    $stmt = $pdo->prepare('DELETE FROM '. $table .' WHERE '.$field.'= :value LIMIT 1');
            $values = [
                  'value' => $value
            ];
            $stmt->execute($values);
}

function findAll($pdo, $table){
    $stmt = $pdo->prepare('SELECT * FROM ' . $table);
    $stmt->execute();
    return $stmt->fetchAll();
}


function find($pdo, $table, $field, $value){
    $stmt = $pdo->prepare('SELECT * FROM ' . $table.' WHERE ' . $field . '=:value');
    $values = [
        'value' => $value
    ];
    $stmt->execute($values);
    return $stmt->fetchAll();
}



