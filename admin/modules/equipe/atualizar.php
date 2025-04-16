<?php
$table = "team";
$folder = "equipe";
$path = "../images/equipe/";

$id = $_POST['id'];  // <- ID do registro a ser atualizado
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$cpf = $_POST['cpf'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$description = $_POST['description'];
$state = $_POST['state'];
$updated_at = date('Y-m-d:H:i:s');

$image = $_FILES['image']['name'];

if (!empty($id)) {
    // Se uma nova imagem for enviada
    if (!empty($image)) {
        $extensao = pathinfo($image, PATHINFO_EXTENSION);
        $image = uniqid('', true) . '.' . $extensao;

        $stmt = $conn->prepare("UPDATE $table SET 
        name = ?, lastname = ?, cpf = ?, age = ?, phone = ?, email = ?, description = ?, image = ?, state = ?, updated_at = ? 
        WHERE id = ?");

        if ($stmt === false) {
            die("Erro na preparação da query: " . $conn->error);
        }

        $stmt->bind_param("ssssssssssi", $name, $lastname, $cpf, $age, $phone, $email, $description, $image, $state, $updated_at, $id);

        if ($stmt->execute()) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $path . $image)) {
                alert('Dados e imagem atualizados com sucesso!', 'panel.php?m=' . $folder . '&a=listar.php');
            } else {
                alert('Erro ao mover a nova imagem!', 'panel.php?m=' . $folder . '&a=editar.php&id=' . $id);
            }
        } else {
            alert('Erro ao atualizar o registro.', 'panel.php?m=' . $folder . '&a=editar.php&id=' . $id);
        }

        $stmt->close();
    } else {
        // Caso não tenha nova imagem, mantém a atual
        $stmt = $conn->prepare("UPDATE $table SET 
        name = ?, lastname = ?, cpf = ?, age = ?, phone = ?, email = ?, description = ?, state = ?, updated_at = ?
        WHERE id = ?");

        if ($stmt === false) {
            die("Erro na preparação da query: " . $conn->error);
        }

        $stmt->bind_param("ssssssssssi", $name, $lastname, $cpf, $age, $phone, $email, $description, $state, $updated_at, $id);

        if ($stmt->execute()) {
            alert('Dados atualizados com sucesso!', 'panel.php?m=' . $folder . '&a=listar.php');
        } else {
            alert('Erro ao atualizar o registro.', 'panel.php?m=' . $folder . '&a=editar.php&id=' . $id);
        }

        $stmt->close();
    }
} else {
    alert('ID inválido.', 'panel.php?m=' . $folder . '&a=novo.php');
    exit;
}

$conn->close();
