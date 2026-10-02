@extends('layouts.app')
 
@section('titulo', 'Inicio')
 
@section('contenido')
  
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Maxtercan - Tienda para Mascotas</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">

            <!-- Nombre de la página -->
            <a class="navbar-brand fw-bold" href="#">
                🐾 MAXTERCAN
            </a>

            <!-- Botón para dispositivos móviles -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuPrincipal"
                aria-controls="menuPrincipal"
                aria-expanded="false"
                aria-label="Mostrar menú"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Opciones del menú -->
            <div
                class="collapse navbar-collapse"
                id="menuPrincipal"
            >
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="#inicio">
                            Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#productos">
                            Productos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">
                            Nosotros
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">
                            Contacto
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección de bienvenida -->
    <header
        id="inicio"
        class="text-white py-5"
        style="background-color: #eb8424;"
    >
        <div class="container py-5">
            <div class="row align-items-center">

                <div class="col-lg-7">
                    <span class="badge bg-warning text-dark mb-3">
                        MAXTERCAN
                    </span>

                    <h1 class="display-3 fw-bold">
                        Más que una tienda, un hogar para los amantes de las mascotas.
                    </h1>

                    <p class="lead">
                        Encuentra alimentos, snacks y productos de calidad
                        para cuidar, consentir y hacer feliz a tu mascota.
                    </p>

                    <a
                        href="#productos"
                        class="btn btn-warning btn-lg mt-3"
                    >
                        Ver nuestros productos
                    </a>
                </div>

                <div class="col-lg-5 text-center mt-4 mt-lg-0">
                    <span class="display-1">
                        🐶🐱
                    </span>

                    <h2 class="mt-3">
                        🐾 Donde cada mascota encuentra amor, cuidado y felicidad.
                    </h2>
                </div>

            </div>
        </div>
    </header>

    <!-- Sección de productos -->
    <section id="productos" class="py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold">
                    Snacks para mascotas
                </h2>

                <p class="text-secondary">
                    Selecciona el snack favorito de tu mascota
                </p>
            </div>

            <div class="row g-4">

                <!-- Tarjeta 1 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://laika.com.co/_next/image?url=https%3A%2F%2Fstatic.laika.digital%2Fproducts-3%2Fdbf64a31229cc793347ca61c7e53a31b_1708103683.jpg&w=3840&q=75"
                                class="card-img-top object-fit-cover"
                                alt="Snack para perros Dog Yurt"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-danger align-self-start mb-2">
                                Nutribar
                            </span>

                            <h3 class="card-title h5">
                                Chunky Dog Yurt
                            </h3>

                            <p class="card-text text-secondary">
                                Base líquida no láctea con aminoácidos
                                libres de origen cárnico, ideal como
                                complemento para tu mascota.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $9.000
                                </p>

                                <button
                                    class="btn w-100 text-white"
                                    style="background-color: #eb8424;"
                                >
                                    Seleccionar
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://www.tierragro.com/cdn/shop/files/Chunky_Delidog_Mix.jpg?v=1726684270"
                                class="card-img-top object-fit-cover"
                                alt="Snack Chunky para perros"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-warning text-dark align-self-start mb-2">
                                Delicioso
                            </span>

                            <h3 class="card-title h5">
                                Chunky DeliDog Mix
                            </h3>

                            <p class="card-text text-secondary">
                                Deliciosos snacks para consentir a tu perro
                                y premiarlo durante el día.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $9.000
                                </p>

                                <button
                                    class="btn w-100 text-white"
                                    style="background-color: #eb8424;"
                                >
                                    Seleccionar
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://www.tierragro.com/cdn/shop/files/WhatsApp_Image_2024-05-23_at_3.47.43_PM.jpg?v=1716497537&width=1200"
                                class="card-img-top object-fit-cover"
                                alt="Alimento y snack para mascotas"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-info text-dark align-self-start mb-2">
                                Nutritivo
                            </span>

                            <h3 class="card-title h5">
                                Snack Nutritivo
                            </h3>

                            <p class="card-text text-secondary">
                                Una opción deliciosa y nutritiva para
                                complementar la alimentación de tu mascota.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $10.000
                                </p>

                                <button
                                    class="btn w-100 text-white"
                                    style="background-color: #eb8424;"
                                >
                                    Seleccionar
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tarjeta 4 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://media.falabella.com/sodimacCO/436612_1/w=1500,h=1500,fit=cover"
                                class="card-img-top object-fit-cover"
                                alt="Producto para mascotas"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-primary align-self-start mb-2">
                                Especial
                            </span>

                            <h3 class="card-title h5">
                                Premio para Mascotas
                            </h3>

                            <p class="card-text text-secondary">
                                Un delicioso premio para consentir a tu
                                mascota en cualquier momento del día.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $11.000
                                </p>

                                <button
                                    class="btn w-100 text-white"
                                    style="background-color: #eb8424;"
                                >
                                    Seleccionar
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección nosotros -->
    <section id="nosotros" class="bg-white py-5">
        <div class="container">
            <div class="row align-items-center g-4">

                <div class="col-md-6">
                    <span class="display-1">
                        🐾
                    </span>

                    <h2 class="fw-bold mt-3">
                        Todo para el bienestar de tu mascota
                    </h2>

                    <p class="text-secondary">
                        En Maxtercan trabajamos para ofrecer productos
                        de calidad que ayuden a cuidar, alimentar y
                        consentir a nuestros compañeros de cuatro patas.
                    </p>
                </div>

                <div class="col-md-6">
                    <div class="card border-0 bg-warning-subtle">
                        <div class="card-body p-4">

                            <h3 class="h5 fw-bold">
                                ¿Por qué elegirnos?
                            </h3>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-transparent">
                                    ✓ Productos de calidad para mascotas
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Snacks deliciosos y nutritivos
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Productos seleccionados con cuidado
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Atención cercana y amable
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección de contacto -->
    <section id="contacto" class="py-5">
        <div class="container text-center">

            <h2 class="fw-bold">
                Visítanos
            </h2>

            <p class="text-secondary">
                Encuentra los mejores productos para consentir
                y cuidar a tu mascota.
            </p>

            <div class="row justify-content-center mt-4">

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="fs-1">📍</div>
                            <h3 class="h5">Dirección</h3>
                            <p class="mb-0">
                                San Juan de Pasto, Nariño
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="fs-1">🕐</div>
                            <h3 class="h5">Horario</h3>
                            <p class="mb-0">
                                Lunes a sábado, 8:00 a. m.–8:00 p. m.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="fs-1">📞</div>
                            <h3 class="h5">Teléfono</h3>
                            <p class="mb-0">
                                300 000 0000
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Pie de página -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">

            <p class="mb-1 fw-bold">
                🐾 MAXTERCAN - Tienda Para Mascotas
            </p>

            <p class="mb-0 text-white-50">
                Productos, snacks y cuidado para tus mascotas.
            </p>

        </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>

@endsection
