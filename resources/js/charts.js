import Chart from 'chart.js/auto';
import axios from "axios";

var ctx = document.getElementById('myChart');
// var ctx1 = document.getElementById('myChart1');
var myChart = new Chart(ctx, {
    type: 'line',
    height: 300,
    data: {
        labels: ['loading........'],
        datasets: [{
            label: 'loading........',
            data: [],
            backgroundColor: '#03a9f4',
            borderColor:'#03a9f4',

        }]
    },

    options: {
        interaction: {
            intersect: false,
            axis: 'x'
        },
        responsive: true,
        scales: {
            x: {
                stacked: false,
                grid: {
                    display: false,
                },
                ticks: {
                    maxTicksLimit:6
                }
            },
            y: {
                stacked: true,
                beginAtZero: true,
                grid: {
                    display: false,
                }
            }
        }
    }
});
// var myChart1 = new Chart(ctx1, {
//     type: 'line',
//     data: {
//         labels: ['loading........'],
//         datasets: [{
//             label: 'loading........',
//             data: [],
//             backgroundColor: '#03a9f4',
//             borderColor:'#03a9f4',
//         }]
//     },
//     options: {
//         scales: {
//             x: {
//                 stacked: true,
//             },
//             y: {
//                 stacked: true,
//                 beginAtZero: true
//             }
//         }
//     }
// });

CallGSTAPi();

function CallGSTAPi() {
    axios.get('/api/stock/data').then(response=>{
            SetDataInGraph(response);
            // document.getElementById('#name').innerHTML(response.data.tradingAt)
            // document.getElementById('#price').innerHTML(response.data.price)
            // document.getElementById('#change').innerHTML(response.data.change)
            // document.getElementById('#changePercent').innerHTML(response.data.changePercent)
            // document.getElementById('#previous').innerHTML(response.data.stats.previousClose)
            // document.getElementById('#open').innerHTML(response.data.stats.open)
            // document.getElementById('#bid').innerHTML(`${response.data.stats.bidPrice} - ${response.data.stats.bidSize} `)
            // document.getElementById('#ask').innerHTML(`${response.data.stats.askPrice} - ${response.data.stats.askSize} `)
            // document.getElementById('#days').innerHTML(`${response.data.stats.daysRangeMin} - ${response.data.stats.daysRangeMax} `)
            // document.getElementById('#week').innerHTML(`${response.data.stats.week52RangeMin} - ${response.data.stats.week52RangeMax} `)
            // document.getElementById('#volume').innerHTML(response.data.stats.volume)
            // document.getElementById('#market').innerHTML(response.data.stats.marketCap)
            // document.getElementById('#beta').innerHTML(response.data.stats.beta)
            // document.getElementById('#ratio').innerHTML(response.data.stats.peRatio)
            // document.getElementById('#eps').innerHTML(response.data.stats.eps)
            // document.getElementById('#forward').innerHTML(response.data.stats.forwardDividend)
            // document.getElementById('#ex-divident').innerHTML(response.data.stats.forwardYield)

    }).catch(e=>console.log(e))



}

function SetDataInGraph(response) {
    myChart.data = {
        labels: response.data.points.map(function (element, index) {
            console.log(element.dateStr)
            return element.dateStr
        }),
        datasets: [{
            label: 'USD',
            data: response.data.points.map(function (element, index) {

                return element.usd
            }),
            backgroundColor: '#03a9f4',
            borderColor:'#03a9f4',
            borderWidth:1.5,
            pointBorderWidth: 0 ,
            pointStyle: 'point',
            pointRadius: 0,
            hoverBorderWidth: 3,
        }],
        options: {
            scales: {
                x: {
                    stacked: false,
                    grid: {
                        display: false,
                    },
                    ticks: {

                        maxTicksLimit: 3
                    }
                },
                y: {
                    stacked: true,
                    beginAtZero: true,
                    grid: {
                        display: false,
                    }
                }
            }
        }
    }
    // myChart1.data = {
    //     labels: response.data.points.map(function (element, index) {
    //         return element.dateStr}),
    //     datasets: [{
    //         label: 'USD',
    //         data: response.data.points.map(function (element, index) {
    //                return element.usd
    //         }),
    //         backgroundColor: '#03a9f4',
    //         borderColor:'#03a9f4',
    //     }]
    // }
    myChart.update();
    // myChart1.update();
}



