const askBeforeExecution = (message, callback) => {
	Swal.fire({
		icon: "info",
		text: message,
		showCancelButton: true,
		confirmButtonText: "Ya"
	}).then((result) => {
		if (result.isConfirmed) {
			callback()
		}
	})
}
function getDifferenceInDays(startDate, endDate) {
	const start = new Date(startDate);
	const end = new Date(endDate);
	const diffInTime = end - start;
	const diffInDays = diffInTime / (1000 * 60 * 60 * 24);
	return diffInDays;
}
function cleanCurrencyString(currencyString) {
	// Remove "Rp" and all dots
	const cleanedString = currencyString.replace(/Rp|\./g, '');
	return cleanedString;
}
function formatCurrency(number) {
	// Use Intl.NumberFormat to format the number as currency
	const formatter = new Intl.NumberFormat('id-ID', {
		style: 'currency',
		currency: 'IDR',
		minimumFractionDigits: 0,
		maximumFractionDigits: 0,
	});

	return formatter.format(number);
}
window.askBeforeExecution = askBeforeExecution
window.getDifferenceInDays = getDifferenceInDays
window.cleanCurrencyString = cleanCurrencyString
window.formatCurrency = formatCurrency