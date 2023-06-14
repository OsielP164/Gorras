<!-- File: templates/Pages/home.php -->

<div class="banner">
    <div class="top-nav-title">
        <a href="<?= $this->url->build('/users/logout')?>"><span>Cerrar Sesion</a>
</div>
    <div class="container">
        
        <h1 class="banner-title">Bienvenido al Sistema de Control de Inventarios de OsielCaps</h1>
        <p class="banner-subtitle">Tu solución integral para gestionar el inventario de tu tienda</p>
    </div>
</div>

<div class="container">
    <div class="intro-section">
        <h2 class="intro-title">Optimiza la gestión de tu inventario</h2>
        <p class="intro-text">El sistema de control de inventarios de OsielCaps te ayuda a administrar eficientemente tus productos, realizar seguimiento de las existencias y gestionar las compras y ventas de tu tienda. Mantén un registro detallado de tus productos y optimiza tus operaciones diarias para un mejor control y rentabilidad.</p>
    </div>

    <div class="features-section">
        <div class="row">
            <div class="col-md-4">
                <div class="feature-card">
                    <i class="fa fa-cubes"></i>
                    <h3 class="feature-title">Gestión de inventario</h3>
                    <p class="feature-description">Registra, actualiza y controla tus productos y existencias de manera eficiente. Realiza ajustes de inventario y obtén una visión clara de tus existencias en tiempo real.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <i class="fa fa-bar-chart"></i>
                    <h3 class="feature-title">Informes y estadísticas</h3>
                    <p class="feature-description">Obtén análisis detallados sobre tus ventas, movimientos de inventario y otros datos clave. Visualiza gráficos y reportes para tomar decisiones informadas.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <i class="fa fa-shopping-cart"></i>
                    <h3 class="feature-title">Gestión de compras y ventas</h3>
                    <p class="feature-description">Realiza seguimiento de tus compras y ventas, registra facturas y administra tus proveedores y clientes. Simplifica y automatiza tus procesos de ventas y compras.</p>
                </div>
            </div>
        </div>
    </div>
</div>
