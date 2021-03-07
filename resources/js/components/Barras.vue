<script>
import { Bar } from "vue-chartjs";
export default {
    extends: Bar,
    data: function() {
        return {
            chartdata: {
                labels: ["Minimino", "Mi puntaje", "Maximo"],
                datasets: [
                    {
                        label: "Puntaje",
                        data: [1200, 1800, 2200],
                        backgroundColor: [
                            "rgba(255, 99, 132, 0.2)",
                            "rgba(54, 162, 235, 0.2)",
                            "rgba(75, 192, 192, 0.2)"
                        ],
                        borderColor: [
                            "rgba(255, 99, 132, 1)",
                            "rgba(54, 162, 235, 1)",
                            "rgba(75, 192, 192, 1)"
                        ],
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [
                        {
                            ticks: {
                                beginAtZero: true
                            }
                        }
                    ]
                }
            }
        };
    },
    mounted() {
        this.renderChart(this.chartdata, this.options);
    }
};
</script>
