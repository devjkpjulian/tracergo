<div>
<div class="p-5">
    <canvas id="chartjs-0" class="chartjs" width="undefined" height="undefined"></canvas>
    <script>
    var min = <?php echo $min; ?>;
    var mid = <?php echo $mid; ?>;
    var max = <?php echo $max; ?>;
    new Chart(document.getElementById("chartjs-0"), {
        "type": "line",
        "data": {
            "labels": ["Less than 36.1", "Nuetral", "Greater than 37.2"],
            "datasets": [{
                "label": "No. Visitors",
                "data": [min, mid, max],
                "fill": false,
                "borderColor": "rgb(75, 192, 192)",
                "lineTension": 0.1
            }]
        },
        "options": {}
    });
    </script>
</div>
</div>
