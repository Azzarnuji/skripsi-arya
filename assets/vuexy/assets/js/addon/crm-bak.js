const Env = {
    apiURL: "http://localhost:8000/api"
}
let e, t;
t = (isDarkStyle ? (e = config.colors_dark.textMuted,
    config.colors_dark) : (e = config.colors.textMuted,
        config.colors)).headingColor
var s = {
    donut: {
        series1: config.colors.success,
        series2: "#28c76fb3",
        series3: "#28c76f80",
        series4: config.colors_label.success
    },
    line: {
        series1: config.colors.warning,
        series2: config.colors.primary,
        series3: "#7367f029"
    }
}
let filterValues = {
    month: null,
    year: null,
    user: null,
    typeUser: null
}
const buildChartSalesDevelopmentUrl = ({ month, year, user, baseUrl }) => {
    const url = new URL(baseUrl);

    Object.keys(filterValues).forEach((key) => {
        const value = filterValues[key];
        if (value != null) {
            url.searchParams.append(key, value);
        }
    })
    // // Add filters as query parameters
    // if (month) {
    // 	url.searchParams.append('month', month);
    // }
    // if (year) {
    // 	url.searchParams.append('year', year);
    // }
    // if (user) {
    // 	url.searchParams.append('user', user);
    // }

    return url.toString();
}
let SalesDevelopment
const SalesDevelopmentChart = async (url = null) => {
    $('#parentLoader').css('height', '200px')
    $('#loader').css('display', 'block')
    const request = await fetch(url !== null ? url : `${Env.apiURL}/dashboard/getChartSalesDevelopment`, {
        headers: {
            'Content-Type': 'application/json',
        }
    })
    const response = await request.json()
    console.log(response);


    const options = {
        series: [{
            name: "Created",
            type: "column",
            data: response.data.chartData.created
        }, {
            name: "Note",
            type: "line",
            data: []
        }],
        noData: {
            text: "No data available",
        },
        chart: {
            height: 270,
            type: "line",
            stacked: !1,
            parentHeightOffset: 0,
            toolbar: {
                show: !1
            },
            zoom: {
                enabled: !1
            }
        },
        markers: {
            size: 4,
            colors: [config.colors.white],
            strokeColors: "#000",
            hover: {
                size: 6
            },
            borderRadius: 4
        },
        stroke: {
            curve: "smooth",
            width: [0, 3],
            lineCap: "round"
        },
        legend: {
            show: !0,
            position: "bottom",
            markers: {
                width: 8,
                height: 8,
                offsetX: -3
            },
            height: 40,
            offsetY: 10,
            itemMargin: {
                horizontal: 10,
                vertical: 0
            },
            fontSize: "15px",
            fontFamily: "Public Sans",
            fontWeight: 400,
            labels: {
                colors: t,
                useSeriesColors: !1
            },
            offsetY: 10
        },
        grid: {
            strokeDashArray: 8
        },
        colors: [s.line.series1, s.line.series2],
        fill: {
            opacity: [1, 1]
        },
        plotOptions: {
            bar: {
                columnWidth: "30%",
                startingShape: "rounded",
                endingShape: "rounded",
                borderRadius: 4
            }
        },
        dataLabels: {
            enabled: !1
        },
        xaxis: {
            tickAmount: 10,
            categories: [...response.data.categories],
            labels: {
                style: {
                    colors: e,
                    fontSize: "13px",
                    fontFamily: "Public Sans",
                    fontWeight: 400
                }
            },
            axisBorder: {
                show: !1
            },
            axisTicks: {
                show: !1
            }
        },
        yaxis: {
            tickAmount: 10,
            min: 0,
            max: response.data.totalRecords,
            labels: {
                style: {
                    colors: e,
                    fontSize: "13px",
                    fontFamily: "Public Sans",
                    fontWeight: 400
                },
                // formatter: function (e) {
                // 	return e + "%"
                // }
            }
        },
        responsive: [{
            breakpoint: 1400,
            options: {
                chart: {
                    height: 270
                },
                xaxis: {
                    labels: {
                        style: {
                            fontSize: "10px"
                        }
                    }
                },
                legend: {
                    itemMargin: {
                        vertical: 0,
                        horizontal: 10
                    },
                    fontSize: "13px",
                    offsetY: 12
                }
            }
        }, {
            breakpoint: 1399,
            options: {
                chart: {
                    height: 415
                },
                plotOptions: {
                    bar: {
                        columnWidth: "50%"
                    }
                }
            }
        }, {
            breakpoint: 982,
            options: {
                plotOptions: {
                    bar: {
                        columnWidth: "30%"
                    }
                }
            }
        }, {
            breakpoint: 480,
            options: {
                chart: {
                    height: 250
                },
                legend: {
                    offsetY: 7
                }
            }
        }]
    }
    const chartContainer = document.querySelector("#salesDevelopmentChart")

    SalesDevelopment = new ApexCharts(chartContainer, options)
    SalesDevelopment.render()
    $('#parentLoader').css('height', '0')
    $('#loader').css('display', 'none')
}
$('.filterMonth').on('click', (event) => {
    var month = $(event.currentTarget).data('filter-month')
    $('#selectButton').text(event.currentTarget.innerText)
    filterValues.month = month
    const url = buildChartSalesDevelopmentUrl({
        month: month,
        baseUrl: `${Env.apiURL}/dashboard/getChartSalesDevelopment`
    })
    SalesDevelopment.destroy()
    SalesDevelopmentChart(url)
})
$('.filterYear').on('click', (event) => {
    var year = $(event.currentTarget).data('filter-year')
    $('#selectButtonYear').text(event.currentTarget.innerText)
    filterValues.year = year
    const url = buildChartSalesDevelopmentUrl({
        year: year,
        baseUrl: `${Env.apiURL}/dashboard/getChartSalesDevelopment`
    })
    SalesDevelopment.destroy()
    SalesDevelopmentChart(url)
})
SalesDevelopmentChart()