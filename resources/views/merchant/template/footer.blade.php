<footer class="footer">
    <div class="container-fluid">
        <div class="level">
            <div class="level-left">
                <div class="level-item">
                    © 2022, SD Work
                </div>
                {{-- <div class="level-item">
                    <a href="https://github.com/vikdiesel/admin-one-bulma-dashboard" style="height: 20px">
                        <img
                            src="https://img.shields.io/github/v/release/vikdiesel/admin-one-bulma-dashboard?color=%23999">
                    </a>
                </div> --}}
            </div>
            {{-- <div class="level-right">
                <div class="level-item">
                    <div class="logo">
                        <a href="https://justboil.me"><img src="img/justboil-logo.svg" alt="JustBoil.me"></a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</footer>
</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="{{ asset('js/main.min.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="{{ asset('js/chart.sample.min.js') }}"></script>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<!-- Page Specific JS File -->
<!-- jQuery -->
{{-- <script src="https://code.jquery.com/jquery.js"></script> --}}
<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
    $('#number_only').bind('keyup paste', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
</script>
</body>

</html>
