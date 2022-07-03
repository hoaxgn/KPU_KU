</div>
</main>
<!-- <script src="/node_modules/tw-elements/dist/js/index.min.js"></script> -->
<script src="<?= base_url('node_modules/'); ?>tw-elements/dist/js/index.min.js"></script>
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
<script src="<?= base_url('assets/'); ?>js/style.js"></script>
<!-- <script src="/dist/js/style.js"></script> -->


<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("layout", () => ({
            profileOpen: false,
            asideOpen: true,
        }));
    });
</script>
</body>

</html>