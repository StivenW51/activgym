</div>
    
     <script>
        function toggleSubmenu(event) {
            event.preventDefault();
            const submenuToggle = event.currentTarget;
            submenuToggle.classList.toggle('active');
            const submenu = submenuToggle.nextElementSibling;
            if (submenu.style.maxHeight && submenu.style.maxHeight !== "0px") {
                submenu.style.maxHeight = "0px";
                submenu.style.padding = "0";
            } else {
                submenu.style.maxHeight = submenu.scrollHeight + "px";
                submenu.style.padding = "5px 0";
            }
        }
    </script>

<!-- Asegúrate de tener jQuery incluido previamente -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
<script src="/admin/js/keepAlive.js?cache=<?php echo time();?>"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap 5 JS bundle (incluye Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <!-- DataTables Bootstrap 5 JS -->
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>


<!-- intlTelInput JS (antes del cierre del body) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/es.js"></script>


<!-- PANEL DE ACCESIBILIDAD -->

<!-- Botón flotante de accesibilidad -->
<button id="btn-accesibilidad" aria-label="Abrir menú de accesibilidad" aria-expanded="false" title="Herramientas de accesibilidad">
  <i class="bi bi-universal-access"></i>
</button>

<!-- Panel de accesibilidad -->
<div id="accesibilidad-tools" role="complementary" aria-label="Herramientas de accesibilidad">
  <!--<h4 ><i class="bi bi-sliders"></i> Accesibilidad</h4> -->
  <button onclick="toggleContrast()" aria-pressed="false" title="Alto contraste">
    <i class="bi bi-circle-half"></i> 
  </button>
  <button onclick="increaseFont()" title="Aumentar texto">
    <i class="bi bi-zoom-in"></i> 
  </button>
  <button onclick="decreaseFont()" title="Disminuir texto">
    <i class="bi bi-zoom-out"></i> 
  </button>
  <button onclick="resetFont()" title="Resetear">
    <i class="bi bi-arrow-clockwise"></i> 
  </button>
</div>


<script>
const btnAccesibilidad = document.getElementById("btn-accesibilidad");
const panelAccesibilidad = document.getElementById("accesibilidad-tools");

btnAccesibilidad.addEventListener("click", () => {
  const isOpen = panelAccesibilidad.style.display === "flex";
  panelAccesibilidad.style.display = isOpen ? "none" : "flex";
  btnAccesibilidad.setAttribute("aria-expanded", !isOpen);
});

function toggleContrast() {
  document.body.classList.toggle("high-contrast");
}

function increaseFont() {
  document.body.style.fontSize = 
    (parseInt(getComputedStyle(document.body).fontSize) + 2) + "px";
}

function decreaseFont() {
  document.body.style.fontSize = 
    (parseInt(getComputedStyle(document.body).fontSize) - 2) + "px";
}

function resetFont() {
  document.body.style.fontSize = "16px";
}
</script>