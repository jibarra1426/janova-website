<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JANova | Donde tus ideas se convierten en innovación</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-900">
  <!-- Header -->
  <header class="bg-blue-900 text-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
      <div class="text-2xl font-bold flex items-center">
        <img src="logo-janova.png" alt="JANova Logo" class="w-10 h-10 mr-2">
        JANova
      </div>
      <nav class="space-x-6">
        <a href="#servicios" class="hover:underline">Servicios</a>
        <a href="#nosotros" class="hover:underline">Nosotros</a>
        <a href="#contacto" class="hover:underline">Contacto</a>
        <a href="#ticketera" class="bg-red-600 px-3 py-1 rounded text-white hover:bg-red-700">Ticketera</a>
        <button class="open-zammad-chat">Chat with us</button>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-blue-100 py-20 text-center">
    <h1 class="text-4xl font-extrabold mb-4">Donde tus ideas se convierten en innovación</h1>
    <p class="text-xl mb-8">Desarrollamos soluciones digitales para impulsar tu negocio</p>
    <a href="#cotizador" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">Solicita una cotización</a>
  </section>

  <!-- Servicios -->
  <section id="servicios" class="py-16 bg-white">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-10">Nuestros Servicios</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-blue-50 p-6 rounded shadow">
          <h3 class="text-xl font-bold mb-2">Desarrollo a la Medida</h3>
          <p>Aplicaciones personalizadas para optimizar tus procesos.</p>
        </div>
        <div class="bg-blue-50 p-6 rounded shadow">
          <h3 class="text-xl font-bold mb-2">Páginas Web</h3>
          <p>Diseños responsivos, atractivos y funcionales para tu empresa.</p>
        </div>
        <div class="bg-blue-50 p-6 rounded shadow">
          <h3 class="text-xl font-bold mb-2">Automatización</h3>
          <p>Implementamos herramientas que ahorran tiempo y reducen errores.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contacto -->
  <section id="contacto" class="bg-blue-50 py-16">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-6">Contáctanos</h2>
      <form class="max-w-xl mx-auto space-y-4">
        <input type="text" placeholder="Nombre" class="w-full px-4 py-2 border rounded">
        <input type="email" placeholder="Correo electrónico" class="w-full px-4 py-2 border rounded">
        <textarea placeholder="Tu mensaje" class="w-full px-4 py-2 border rounded" rows="5"></textarea>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Enviar</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-blue-900 text-white py-6">
    <div class="container mx-auto text-center">
      <p>&copy; 2025 JANova. Todos los derechos reservados.</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://soporte.petroil.dev/assets/chat/chat.min.js"></script>
<script>
$(function() {
  new ZammadChat({
    fontSize: '12px',
    chatId: 1,
    show: false
  });
});
</script>
</body>
</html>
