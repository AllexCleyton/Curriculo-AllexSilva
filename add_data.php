<?php
header('Content-Type: application/json');

$dataFile = 'data.json';

$newSkill = trim($_POST['newSkill'] ?? '');
$newExperience = trim($_POST['newExperience'] ?? '');

if (empty($newSkill) || empty($newExperience)) {
	echo json_encode([
		'success' => false,
		'message' => 'Preencha todos os campos.'
	]);
	exit;
}

// Carrega dados existentes ou inicializa
if (file_exists($dataFile)) {
	$data = json_decode(file_get_contents($dataFile), true);
	if (!is_array($data)) $data = ['skills' => [], 'experiences' => []];
} else {
	$data = ['skills' => [], 'experiences' => []];
}

$data['skills'][] = $newSkill;
$data['experiences'][] = $newExperience;

file_put_contents(
	$dataFile,
	json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

echo json_encode([
	'success' => true,
	'message' => 'Dados salvos com sucesso!'
]);

?>