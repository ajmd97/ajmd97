<header>
    <div class="main-header">
        <button id="button-menu" class="button-menu">
        <img src="./images/logo-transp.png" width="35" height="auto">
        </button>
        <nav id="nav" class="main-nav">
            <div class="nav-links">
                <a class="link-item" href="index.php">home</a>
                <a class="link-item" href="curso_html.php">Curso HTML y CSS</a>
                <a class="link-item" href="#">Recursos de programación</a>
                <a class="link-item" href="#">Link4</a>
                <a class="link-item" href="#">Link5</a>
            </div>
        </nav>
        <script>
            //  seleccionamos los dos elementos que serán clickables
            const toggleButton = document.getElementById("button-menu");
            const navWrapper = document.getElementById("nav");
            /* cada vez que se haga click en el botón agrega y quita las clases necesarias para que el menú se muestre. */
            toggleButton.addEventListener("click", () => {
            toggleButton.classList.toggle("close");
            navWrapper.classList.toggle("show");
            });
            /* Cuándo se haga click fuera del contenedor de enlaces el menú debe esconderse. */
            navWrapper.addEventListener("click", e => {
            if (e.target.id === "nav") {
                navWrapper.classList.remove("show");
                toggleButton.classList.remove("close");
                }
                });
        </script> 
    </div>
</header>