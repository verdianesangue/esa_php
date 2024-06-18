<?php

$file = 'todos.csv';

function getTodos($file) {
    $taches = [];
    if (!file_exists($file)) {
        file_put_contents($file, '');
    }

    if (($handle = fopen($file, 'r')) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $taches[] = ['nom' => $data[0], 'status' => $data[1]];
        }
        fclose($handle);
    }
    return $taches;
}

function saveTodos($taches, $file) {
    if (($handle = fopen($file, 'w')) !== FALSE) {
        foreach ($taches as $tache) {
            fputcsv($handle, [$tache['nom'], $tache['status']]);
        }
        fclose($handle);
    }
}

function add_task($tache, $file) {
    $taches = getTodos($file);
    $taches[] = $tache;
    saveTodos($taches, $file);
}

function edit_tache($index, $nouvelle_tache, $file) {
    $taches = getTodos($file);

    if (isset($taches[$index])) {
        $taches[$index] = $nouvelle_tache;
        saveTodos($taches, $file);
        return true;
    }
    return false;
}

function delete_tache($index, $file) {
    $taches = getTodos($file);
    if (isset($taches[$index])) {
        unset($taches[$index]);
        $taches = array_values($taches);
        saveTodos($taches, $file);
        return true;
    }
    return false;
}
$file = 'todos.csv';
function toggle_tache($index, $file) {
    $taches = getTodos($file);

    if (isset($taches[$index])) {
        // Alterner le statut de la tâche
        $taches[$index]['status'] = ($taches[$index]['status'] === 'realiser') ? 'non realiser' : 'realiser';
        saveTodos($taches, $file);
        return true;
    }
    return false;
}