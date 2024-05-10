const is_null = (value) => {
	return value === null || value === undefined || value === '' || value.length === 0;
}

const formatDate = (value) => {
	let date = new Date(value);
	let formatedDate = new Intl.DateTimeFormat('id-ID', {
		day: '2-digit',
		month: "2-digit",
		year: "2-digit"
	}).format(date)

	return formatedDate
}

const showError = (elementClass, message) => {
	let element = $(`.${elementClass}`);
	element.text(message);
	element.css('display', 'block');
}

const getUrlParamsByKey = (key) => {
	const urlParams = new URLSearchParams(window.location.search);
	return urlParams.get(key)
}

const deleteUrlParamsByKey = (key) => {
	var url = window.location.href;

	// Create a URL object
	var urlObj = new URL(url);

	// Create a URLSearchParams object based on the URL's search
	var searchParams = new URLSearchParams(urlObj.search);

	// Delete the parameter
	searchParams.delete(key);

	// Update the search property of the URL object
	urlObj.search = searchParams.toString();

	// Navigate to the new URL
	window.history.replaceState({}, "", urlObj.toString());
}

const setPropertyLivewire = (key, event, wire) => {
	let value;
	if (event?.target !== null && event?.target !== undefined) {
		value = !is_null(event?.target?.value) ? event?.target?.value : null
	} else {
		value = !is_null(event) ? event : null
	}
	wire.$set(key, value)
}

const showChildTR = (id) => {
	$(`#${id}`).toggle()
}
const makeBreadcrumbs = () => {
	let url = window.location.pathname;
	let urlArray = url.split('/').filter((item, index) => index !== 0);
	let breadcrumbList = document.querySelector('.breadcrumb');
	const tabMenu = getUrlParamsByKey('tab')
	// Clear existing breadcrumb items
	breadcrumbList.innerHTML = '';

	// Create and append li elements
	urlArray.forEach((item, index) => {
		let li = document.createElement('li');
		li.classList.add('breadcrumb-item');
		if (index === urlArray.length - 1) {
			li.classList.add('active');
			li.textContent = item;
		} else {
			let a = document.createElement('a');
			a.classList.add('text-capitalize');
			a.href = 'javascript:void(0);'; // Update with appropriate link
			a.textContent = item;
			li.appendChild(a);
		}
		breadcrumbList.appendChild(li);
	});
}
const findItemInBoards = (boardsObject, searchTerm) => {
	searchTerm = searchTerm.toLowerCase();
	for (const stage of boardsObject) {
		for (const item of stage.item) {
			if (item.id.toLowerCase().includes(searchTerm)) {
				return item
			}
		}
	}
	return null
}

const findItemInBoardsWithId = (boardsObject, searchTerm, boardId) => {
	searchTerm = searchTerm.toLowerCase();
	for (const stage of boardsObject) {
		for (const item of stage.item) {
			if (item.id.toLowerCase().includes(searchTerm) && stage.id == boardId) {
				return item
			}
		}
	}
	return null
}
const KanbanStages = {
	UN_REACHABLE: "stage-12",
	CONTACTED: "stage-1",
	CV_SEND: "stage-2",
	INTERVIEW_REQUEST: "stage-3",
	FIRST_INTERVIEW: "stage-4",
	SECOND_INTERVIEW: "stage-5",
	THIRD_INTERVIEW: "stage-6",
	TEST: "stage-7",
	NEGOTIATION: "stage-8",
	CLOSED_WON: "stage-9",
	CLOSED_LOSE: "stage-10",
	CLOSED_DISANGAGE: "stage-11",
	TRIAL_CLOSE: "stage-13",
	REFERENCE_CALL: "stage-14",
	CV_SCREENING: "stage-16",
	FAILED_INTERVIEW: "stage-17",
	FAILED_TEST: "stage-19",
	WITHDRAW: "stage-20",
	EMAIL_TRACKING: "stage-21",
	CV_SUBMITTED: "stage-22"
};

class StateManagement {
	state = {};
	setState(...args) {
		if (typeof args[0] === "function") {
			let prevState = this.state;
			const updaterFn = args[0];
			let newState = updaterFn(this.state);
			// this.state = { ...newState };
			Object.keys(newState).forEach((key, index) => {
				this.state[Object.keys(newState)[index]] = Object.values(newState)[index];
			});
		}
		else if (typeof args[0] === "object") {
			Object.keys(args[0]).forEach((key, index) => {
				this.state[Object.keys(args[0])[index]] = Object.values(args[0])[index];
			});
		}
		else {
			const [key, value] = args;
			this.state[key] = value;
		}
	}
	getState() {
		return this.state;
	}
}

const useStateManagement = () => {
	const state = new StateManagement()
	const setState = (...args) => {
		state.setState(...args)
	}
	const getState = () => {
		return state.getState()
	}
	return [state.state, setState]
}

const askBeforeExecution = (message, callback) => {
	Swal.fire({
		icon: 'warning',
		title: 'Are you sure?',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes',
		text: message,
	}).then(function (result) {
		if (result.isConfirmed) {
			callback()
		}
	})
}
window.is_null = is_null
window.formatDate = formatDate
window.showError = showError
window.getUrlParamsByKey = getUrlParamsByKey
window.deleteUrlParamsByKey = deleteUrlParamsByKey
window.setPropertyLivewire = setPropertyLivewire
window.showChildTR = showChildTR
window.makeBreadcrumbs = makeBreadcrumbs
window.findItemInBoards = findItemInBoards
window.KanbanStages = KanbanStages
window.findItemInBoardsWithId = findItemInBoardsWithId
window.useStateManagement = useStateManagement
window.askBeforeExecution = askBeforeExecution