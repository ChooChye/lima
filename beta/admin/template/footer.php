</div>
<!-- End of Main Content -->


<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>&copy; Lima Asia Dynamics 2015</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- UC Modal-->
<div class="modal fade" id="ucModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Coming Soon..</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">This page is currently under development...</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="assets/jquery/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="assets/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="assets/js/admin.min.js"></script>

<!-- Page level plugins -->
<script src="assets/chart.js/Chart.min.js"></script>
<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<!-- Page level custom scripts
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
 -->

<script>
    $(document).ready(function() {
        var date_input = $('input[name="date"]'); //our date input has the name "date"

        var options = {
            format: 'dd/mm/yyyy',
            startDate: "today",
            endDate: "today",
            todayHighlight: true,
            autoclose: true,
        };

        $('#calBtn').click(function() {
            date_input.focus();
        });
        date_input.datepicker(options);
    })
    
    

    function _(el) {
        return document.getElementById(el);
    }
    var list = ["Nos", "Gross", "Less", "Net"];

    function fillNull(e) {

        var count = list.length;

        for (var i = 1; i < count; i++) {
            _(e + list[0]).value = "0";
            _(e + list[i]).value = "0.00";
        }
    }
    var programCode = $("#program_code");
        var programDate = $("#date");
    function loadNull() {
        var main = ["visa","master","amex","diners","cheques","cash"]
        var count = list.length;
        var count2 = main.length;
        for (var i = 0; i < count2; i++) {
            for (var j = 1; j < count; j++){
                _(main[i] + list[0]).value = "0";
                _(main[i] + list[j]).value = "0.00";
            }
        }
    }
    
    function validateDailyReport(e){
        if(programCode.val() == ""){
            programCode.focus();
            alert("Enter Program Code");
            return false;
        }
        if(programDate.val() == ""){
            programDate.focus();
            alert("Enter Date");
            return false;
        }
        e.preventDefault();
        return true;
    }
    $( window ).on( "load", loadNull );
    function checkInp(x) {
        var regex = /^[0-9]+$/;
        if (!x.match(regex)) {
            alert("Must input numbers");
            _('visaNos').value = 0;
            _('visaGross').value = 0;
            _('visaLess').value = 0;
            _('visaNet').value = 0;
            return false;
        } else {

            return true;
        }
    }

    function reportCount(x) {
        const base = 528;
        var qty = _(x + 'Nos').value;
        var gross = (qty * base);
        if (x == 'cheques' || x == 'cash') {
            var bankComm = 0;
        } else {
            var bankComm = gross * 0.025;
        }
        var net = gross - bankComm;

        if (checkInp(qty)) {
            //output
            _(x + list[1]).value = gross.toFixed(2);
            _(x + list[2]).value = bankComm.toFixed(2);
            _(x + list[3]).value = net.toFixed(2);
        }
    }

    function matchPw() {
        var fV = _('newPassword').value;
        var ffV = _('nnewPassword').value;
        var holder = _('matchS');
        if (fV == ffV) {
            holder.innerHTML = "";
            _('changePw').disabled = false;
            _('changePw').type = "submit";
        } else {
            _('changePw').type = "button";
            _('changePw').disabled = true;
            holder.innerHTML = "Password does not match"
        }
    }
    

</script>
</body>

</html>
