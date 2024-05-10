let SalesDevelopment
const startDateSd = $('#startDateSd')
const endDateSd = $('#endDateSd')
startDateSd.flatpickr({
	monthSelectorType: 'static'
})
endDateSd.flatpickr({
	monthSelectorType: 'static'
})
let filterValues = {
	startDate: null,
	endDate: null,
	user: null,
	typeUser: null
}
const SalesDevelopmentChart = async (url = null) => {
	$('#parentLoaderSD').css('height', '200px')
	$('#loaderSD').css('display', 'block')
	const response = await getChart(url !== null ? url : `${Env.apiURL}/dashboard/getChart?menuType=sd`)
	const options = {
		series: [{
			name: "Created",
			type: "column",
			data: response.data.chartData.created
		}, {
			name: "Note",
			type: "line",
			data: response.data.chartData.note
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
			tickAmount: 4,
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
	const chartContainerSD = document.querySelector("#salesDevelopmentChart")

	SalesDevelopment = new ApexCharts(chartContainerSD, options)
	SalesDevelopment.render()
	$('#parentLoaderSD').css('height', '0')
	$('#loaderSD').css('display', 'none')
}
startDateSd.on('change', (event) => {
	var date = event.target.value
	filterValues.startDate = date
	const url = getFilterUrl({
		baseUrl: `${Env.apiURL}/dashboard/getChart?menuType=sd`
	})
	SalesDevelopment.destroy()
	SalesDevelopmentChart(url)
})
endDateSd.on('change', (event) => {
	var date = event.target.value
	filterValues.endDate = date
	const url = getFilterUrl({
		baseUrl: `${Env.apiURL}/dashboard/getChart?menuType=sd`
	})
	SalesDevelopment.destroy()
	SalesDevelopmentChart(url)
})
$('#selectSD').on('change', (event) => {
	var value = event.target.value
	filterValues.user = value
	filterValues.typeUser = "sd"
	const url = getFilterUrl({
		baseUrl: `${Env.apiURL}/dashboard/getChart?menuType=sd`
	})
	SalesDevelopment.destroy()
	SalesDevelopmentChart(url)
})
SalesDevelopmentChart()