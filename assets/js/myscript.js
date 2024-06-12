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
window.askBeforeExecution = askBeforeExecution