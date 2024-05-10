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
const getFilterUrl = ({ baseUrl }) => {
	const url = new URL(baseUrl);

	Object.keys(filterValues).forEach((key) => {
		const value = filterValues[key];
		if (value != null) {
			url.searchParams.append(key, value);
		}
	})

	return url.toString();
}

const getChart = async (url = null) => {
	const request = await fetch(url, {
		headers: {
			'Content-Type': 'application/json',
		}
	})
	return await request.json()
}