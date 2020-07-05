<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>

<script>
    $(document).ready(function () {

        function x() {
            var str = window.location.host;
            if (str.match('jibhi') != null) {
                return 'jibhi';
            } else if (str.match('rishikesh') != null) {
                return 'rishikesh';
            } else if (str.match('pangot') != null) {
                return 'pangot';
            } else if (str.match('dehradun') != null) {
                return 'dehradun';
            } else if (str.match('uttarakhand') != null) {
                return 'uttarakhand';
            } else if (str.match('barot') != null) {
                return 'barot';
            } else if (str.match('dharamshala') != null) {
                return 'dharamshala';
            } else if (str.match('kanatal') != null) {
                return 'kanatal';
            } else if (str.match('tirthan') != null) {
                return 'tirthan';
            } else if (str.match('shimla') != null) {
                return 'shimla';
            } else if (str.match('birbilling') != null) {
                return 'birbilling';
            } else if (str.match('shoghi') != null) {
                return 'shoghi';
            } else if (str.match('kasol') != null) {
                return 'kasol';
            } else if (str.match('manali') != null) {
                return 'manali';
            } else {
                return '';
            }
        }

        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();
        today = mm + '/' + dd + '/' + yyyy;


        var currentDate = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
        var day = currentDate.getDate();
        var month = currentDate.getMonth() + 1;
        var year = currentDate.getFullYear();
        document.write("<b>" + day + "/" + month + "/" + year + "</b>");

        tomorrow = mm + '/' + (+dd + 1) + '/' + yyyy;

        var lo = x();
        var url = 'https://www.wandertribe.in/search.php?destination_name=' + lo
            +
            '&from_date=' + today
            +
            '&to_date=' + tomorrow +
            '&booking_required=' + '2' +
            '&type="null"';

        top.location.href = url;
    });


</script>

</body>
</html>
