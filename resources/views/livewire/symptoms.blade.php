<div>
<div class="p-5">
    <canvas id="chartjs-7" class="chartjs" width="undefined" height="undefined"></canvas>
    <script>
    var fever = <?php echo $fever; ?>;
    var drycough = <?php echo $drycough; ?>;
    var sorethroat = <?php echo $sorethroat; ?>;
    var difficultbreathing = <?php echo $difficultbreathing; ?>;
    var lossofsenses = <?php echo $lossofsenses; ?>;
    var fatigue = <?php echo $fatigue; ?>;
    var weakness = <?php echo $weakness; ?>;
    var sneezing = <?php echo $sneezing; ?>;
    var diarrhoea = <?php echo $diarrhoea; ?>;
    var headache = <?php echo $headache; ?>;
    new Chart(document.getElementById("chartjs-7"), {
        "type": "bar",
        "data": {
            "labels": ["Fever", "Dry Cough", "Sore Throat", "Difficulty Breathing", "Loss of Senses", "Fatigue", "Weakness", "Sneezing", "Diarrhoea", "Headache"],
            "datasets": [{
                "label": "No. of Visitors",
                "data": [fever, drycough, sorethroat, difficultbreathing, lossofsenses, fatigue, weakness, sneezing, diarrhoea. headache],
                "borderColor": "rgb(255, 99, 132)",
                "backgroundColor": "rgba(255, 99, 132, 0.2)"
            }]
        },
        "options": {
            "scales": {
                "yAxes": [{
                    "ticks": {
                        "beginAtZero": true
                    }
                }]
            }
        }
    });
    </script>
</div>
</div>
