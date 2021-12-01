$(document).ready(function () {
    $('#product').html('bnasdasdasd');
    $.ajax({
        async: true,
        url: 'http://127.0.0.1:8000/analytics/products',
        type: 'GET',
        dataType:"json",
        success: function (result) {
            console.log(result);

                var chart = c3.generate({
                    bindto: "#product",
                    color: { pattern: ["#5969ff", "#ff407b", "#25d5f2", "#ffc750"] },
                    data: {
                        // iris data from R
                        columns: [
                            ["30 days", 120],
                            ["60 days", 70],
                            ["90 days", 50],
                            ["90+ Days", 30],
                        ],
                        type: "pie",
                    },
                });

                setTimeout(function () {
                    chart.load({});
                }, 1500);

                setTimeout(function () {
                    chart.unload({
                        ids: "data1",
                    });
                    chart.unload({
                        ids: "data2",
                    });
                }, 2500);

        }
    })
});
