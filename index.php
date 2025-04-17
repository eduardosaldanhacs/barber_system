<?php include('admin/includes/connect.php'); ?>
<?php include('admin/includes/functions.php'); ?>
<?php include('define.php'); ?>
<?php include('includes/essenciais.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia Estilo - Sua nova experiência</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&family=Stardos+Stencil:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>

<body class="bg-gray-900 text-white">

    <header class="flex justify-between items-center p-6 bg-gray-800 shadow-lg sticky top-0 z-50">
        <h2 class="uppercase font-bold text-2xl text-yellow-500">Barbearia Estilo</h2>
        <a href="<?= SITE ?>admin/" class="mt-4 bg-yellow-400 text-black font-bold py-2 px-6 rounded-full hover:bg-yellow-500">Admin</a>
        <nav class="sm:flex hidden">
            <ul class="flex space-x-6">
                <li><a href="#home" class="hover:text-yellow-400">Home</a></li>
                <li><a href="#servicos" class="hover:text-yellow-400">Serviços</a></li>
                <li><a href="#equipe" class="hover:text-yellow-400">Equipe</a></li>
                <li><a href="#agendamento" class="hover:text-yellow-400">Agendar</a></li>
                <li><a href="#contato" class="hover:text-yellow-400">Contato</a></li>
            </ul>
        </nav>
    </header>

    <?php
    $banner = "SELECT * FROM banners WHERE status = 'S' LIMIT 1";
    $result = mysqli_query($conn, $banner);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $banner = $row['imagem'] ?? 'banner.jpg';
    } else {
        $banner = 'banner.jpg';
    }
    ?>

    <section id="home" class="flex items-center justify-center h-screen bg-cover bg-center" style="background-image: url('images/banners/<?= $banner; ?>');">
        <div class="bg-black bg-opacity-50 p-4 md:p-8 rounded-xl text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Seu estilo começa aqui</h2>
            <a href="#agendamento" class="mt-4 inline-block bg-yellow-400 text-black font-bold py-2 px-6 rounded-full hover:bg-yellow-500">Agende seu horário</a>
        </div>
    </section>

    <?php
    $service_query = "SELECT * FROM servicos WHERE state = 'S'";
    $service_result = mysqli_query($conn, $service_query);
    $service_option = [];
    $i = 0;
    ?>

    <section id="servicos" class="py-20 text-center">
        <h2 class="text-3xl font-bold mb-10">Nossos Serviços</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto px-4">
            <?php while ($service_item = mysqli_fetch_assoc($service_result)) {
                $service_option[$i++] = $service_item['name']; ?>
                <div class="bg-gray-800 p-6 rounded-2xl shadow-lg">
                    <h3 class="text-xl font-semibold mb-2"><?= $service_item['name'] ?></h3>
                    <p><?= $service_item['description'] ?></p>
                    <span class="block mt-4 text-yellow-400 font-bold text-2xl"><?= formatToReal($service_item['price']) ?></span>
                </div>
            <?php } ?>
        </div>
    </section>

    <section id="equipe" class="py-20 bg-slate-800 text-center">
        <h2 class="text-3xl font-bold mb-10">Nossa Equipe</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto px-4">
            <?php
            $team_query = "SELECT * FROM team WHERE state = 'S' AND deleted_at IS NULL";
            $team_result = mysqli_query($conn, $team_query);
            while ($team_member = mysqli_fetch_assoc($team_result)) { ?>
                <div>
                    <img src="images/equipe/<?= $team_member['image'] ?>" class="mx-auto rounded-full mb-4" style="height: 350px; width:250px;" alt="<?= $team_member['name'] ?>">
                    <h3 class="font-semibold"><?= $team_member['name'] ?> <?= $team_member['lastname'] ?></h3>
                    <p><?= $team_member['description'] ?>.</p>
                </div>
            <?php } ?>
        </div>
    </section>

    <section id="agendamento" class="py-20 text-center bg-cover bg-center px-4">
        <form action="<?= SITE ?>agendar.php" class="max-w-lg mx-auto bg-gray-800 p-4 md:p-8 rounded-2xl shadow-lg" method="post">
            <h2 class="text-3xl font-bold mb-10">Agende seu horário</h2>
            <input type="text" name="name" placeholder="Seu nome" class="w-full p-3 mb-4 rounded bg-gray-700 text-white focus:outline-none">
            <input type="tel" name="phone" placeholder="Telefone" class="w-full p-3 mb-4 rounded bg-gray-700 text-white focus:outline-none" id="phone">

            <select name="service" class="w-full p-3 mb-4 rounded bg-gray-700 text-white focus:outline-none">
                <option>Selecione o serviço</option>
                <?php foreach ($service_option as $option) { ?>
                    <option value="<?= $option ?>"><?= $option ?></option>
                <?php } ?>
            </select>

            <input name="date" type="date" class="w-full p-3 mb-4 rounded bg-gray-700 text-white focus:outline-none">

            <!-- Campo de Horário Adicionado -->
            <input name="time" type="time" class="w-full p-3 mb-4 rounded bg-gray-700 text-white focus:outline-none">

            <button type="submit" class="bg-yellow-400 text-black font-bold py-3 px-6 rounded-full hover:bg-yellow-500">Confirmar</button>
        </form>
    </section>


    <section id="contato" class="py-20 bg-gray-800 text-center px-4">
        <h2 class="text-3xl font-bold mb-6">Entre em contato</h2>
        <p class="mb-2">📍 Rua dos Barbeiros, 123 - Porto Alegre/RS</p>
        <p class="mb-2">📞 (51) 99999-9999</p>
        <a href="https://wa.me/5551999999999" target="_blank" class="inline-block mt-4 bg-yellow-400 text-black font-bold py-2 px-6 rounded-full hover:bg-yellow-500">Chamar no WhatsApp</a>
    </section>

    <footer class="p-6 bg-gray-900 text-center text-gray-400">
        &copy; 2025 Barbearia Estilo — Todos os direitos reservados. <br>
        Desenvolvido por: <a target="_blank" href="https://eduardosaldanha.online/" class="text-yellow-400 hover:text-yellow-500">Eduardo Saldanha</a>.
    </footer>

</body>

</html>

<script>
    $(document).ready(function() {
        $('#cpf').mask('000.000.000-00');
        $('#phone').mask('(00) 00000-0000');
    });
</script>