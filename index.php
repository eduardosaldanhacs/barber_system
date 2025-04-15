<?php include('admin/includes/connect.php'); ?>
<?php include('admin/includes/functions.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia Estilo - Sua nova experiência</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white">

    <header class="flex justify-between items-center p-6 bg-gray-800 shadow-lg sticky top-0 z-50">
        <h1 class="text-2xl font-bold">Barbearia Estilo</h1>
        <nav>
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
        $banner = $row['imagem'];
        isset($row['imagem']) ? $banner = $row['imagem'] : $banner = 'banner.jpg';
    } else {
        $banner = 'banner.jpg'; // Default image if query fails
    }
    ?>
    <section id="home" class="flex items-center justify-center h-screen bg-cover bg-center" style="background-image: url('images/banners/<?= isset($banner) ? $banner : 'banner.jpg'; ?>');">
        <div class="bg-black bg-opacity-50 p-8 rounded-xl text-center">
            <h2 class="text-4xl font-bold mb-4">Seu estilo começa aqui</h2>
            <a href="#agendamento" class="mt-4 inline-block bg-yellow-400 text-black font-bold py-2 px-6 rounded-full hover:bg-yellow-500">Agende seu horário</a>
        </div>
    </section>
    <?php $service_query = "SELECT * FROM servicos WHERE state = 'S'"; 
    $service_result = mysqli_query($conn, $service_query);
    ?>
    <section id="servicos" class="py-20 text-center">
        <h2 class="text-3xl font-bold mb-10">Nossos Serviços</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <?php while($service_item = mysqli_fetch_assoc($service_result)) { ?>
            <div class="bg-gray-800 p-6 rounded-2xl shadow-lg">
                <h3 class="text-xl font-semibold mb-2"><?= $service_item['name'] ?></h3>
                <p><?= $service_item['description']?></p>
                <span class="block mt-4 text-yellow-400 font-bold"><?= formatToReal($service_item['price']) ?></span>
            </div>
        <?php } ?>
            <!-- <div class="bg-gray-800 p-6 rounded-2xl shadow-lg">
            <h3 class="text-xl font-semibold mb-2">Corte Masculino</h3>
            <p>Do clássico ao moderno, com acabamento impecável.</p>
            <span class="block mt-4 text-yellow-400 font-bold">R$ 35,00</span>
        </div>
        <div class="bg-gray-800 p-6 rounded-2xl shadow-lg">
            <h3 class="text-xl font-semibold mb-2">Barba</h3>
            <p>Hidratação, alinhamento e estilo para sua barba.</p>
            <span class="block mt-4 text-yellow-400 font-bold">R$ 25,00</span>
        </div>
        <div class="bg-gray-800 p-6 rounded-2xl shadow-lg">
            <h3 class="text-xl font-semibold mb-2">Combo Corte + Barba</h3>
            <p>Pacote completo para sair no estilo!</p>
            <span class="block mt-4 text-yellow-400 font-bold">R$ 55,00</span>
        </div> -->
        </div>
    </section>

    <section id="equipe" class="py-20 bg-gray-800 text-center">
        <h2 class="text-3xl font-bold mb-10">Nossa Equipe</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div>
                <img src="images/barber1.jpg" class="mx-auto rounded-full mb-4" style="height: 350px; width:250px;" alt="Barbeiro 1">
                <h3 class="font-semibold">Lucas Ferreira</h3>
                <p>Especialista em cortes modernos</p>
            </div>
            <div>
                <img src="images/barber2.jpg" class="mx-auto rounded-full mb-4" style="height: 350px; width:250px;" alt="Barbeiro 2">
                <h3 class="font-semibold">Carlos Andrade</h3>
                <p>Barbas e estilos clássicos</p>
            </div>
            <div>
                <img src="images/barber3.jpg" class="mx-auto rounded-full mb-4" style="height: 350px; width:250px;" alt="Barbeiro 3">
                <h3 class="font-semibold">Rafael Costa</h3>
                <p>Acabamento e design capilar</p>
            </div>
        </div>
    </section>

    <section id="agendamento" class="py-20 text-center">
        <h2 class="text-3xl font-bold mb-10">Agende seu horário</h2>
        <form class="max-w-lg mx-auto bg-gray-800 p-8 rounded-2xl shadow-lg">
            <input type="text" placeholder="Seu nome" class="w-full p-3 mb-4 rounded bg-gray-700 text-white focus:outline-none">
            <input type="tel" placeholder="Telefone" class="w-full p-3 mb-4 rounded bg-gray-700 text-white focus:outline-none">
            <select class="w-full p-3 mb-4 rounded bg-gray-700 text-white focus:outline-none">
                <option>Selecione o serviço</option>
                <option>Corte</option>
                <option>Barba</option>
                <option>Combo Corte + Barba</option>
            </select>
            <input type="date" class="w-full p-3 mb-4 rounded bg-gray-700 text-white focus:outline-none">
            <button type="submit" class="bg-yellow-400 text-black font-bold py-3 px-6 rounded-full hover:bg-yellow-500">Confirmar</button>
        </form>
    </section>

    <section id="contato" class="py-20 bg-gray-800 text-center">
        <h2 class="text-3xl font-bold mb-6">Entre em contato</h2>
        <p class="mb-2">📍 Rua dos Barbeiros, 123 - Porto Alegre/RS</p>
        <p class="mb-2">📞 (51) 99999-9999</p>
        <a href="https://wa.me/5551999999999" target="_blank" class="inline-block mt-4 bg-yellow-400 text-black font-bold py-2 px-6 rounded-full hover:bg-yellow-500">Chamar no WhatsApp</a>
    </section>

    <footer class="p-6 bg-gray-900 text-center text-gray-400">
        &copy; 2025 Barbearia Estilo — Todos os direitos reservados.
    </footer>

</body>

</html>