const barIcon = document.getElementById("menu-icon")
const header = document.querySelector(".header-right")
const itemServiceIcons = document.querySelectorAll('.item-service i')
const serviceSelectedWrap = document.querySelector('.services-selected')
const submitServiceBtn = document.getElementById('submit-service');
const addServiceBtn = document.getElementById('add-service-btn');
const authLinks = document.querySelectorAll('a[href*="sign"]');

const div = document.createElement('div');
const textNode = document.createTextNode("Chưa có dịch vụ nào được chọn");
div.appendChild(textNode);

const auth = localStorage.getItem('auth') ? JSON.stringify(localStorage.getItem('auth')) : null;

const state = {
	service_name: [],
	auth: auth || null
}

const countServiceSelected = () => {
	const countServiceSelected = document.querySelectorAll('.services-selected li').length;
	if (!countServiceSelected) {
		serviceSelectedWrap.appendChild(div)
		return;
	}
	serviceSelectedWrap.removeChild(div)
}

const handleSubmit = (e) => {
	e.preventDefault();
}

const handleOrderService = (serviceName) => {
	const newServiceSelected = document.createElement('li');

	newServiceSelected.textContent = serviceName;
	serviceSelectedWrap.appendChild(newServiceSelected);
	newServiceSelected.setAttribute('class', 'ml-4');

	state.service_name.push(serviceName);
}

const handleAddNewService = () => {
	const newServiceInput = document.querySelector('.other-sevice-input');
	const newServiceName = newServiceInput.value;

	if (!newServiceName) return;

	handleOrderService(newServiceName)
	newServiceInput.value = '';
}



function onClickItemServiceIcon() {
	const serviceName = this.previousElementSibling.textContent;
	const isOtherService = this.parentElement.id === 'item-service-other';
	const div = document.querySelector('.services-selected div');

	if (isOtherService) {
		const newServiceInput = document.querySelector('.other-sevice-input');
		const btn = document.createElement('button');
		newServiceInput.classList.add('show');
		return;
	}

	handleOrderService(serviceName);

	if (div) {
		countServiceSelected();
	}
}

; (() => {
	countServiceSelected()
	submitServiceBtn.addEventListener('click', handleSubmit);
	addServiceBtn.addEventListener('click', handleAddNewService);
})();


window.onscroll = function (e) {
	if (window.scrollY > 34) {
		barIcon.classList.add("background-dark");
		return
	}

	barIcon.classList.remove("background-dark");
};

window.onload = () => {
	if (state.auth) {
		console.log(state);
		authLinks.forEach(link => link.setAttribute('class', 'auth-link-hidden'))
	} else {
		authLinks.forEach(link => link.classList.remove('auth-link-hidden'));
	}
}

const onClickMenuBar = () => {
	const classNameOfHeader = header.getAttribute("class");

	if (classNameOfHeader.includes('show')) {
		header.classList.remove("show")
		return;
	}

	header.classList.add("show")
}

barIcon.addEventListener('click', onClickMenuBar)
itemServiceIcons.forEach(icon => icon.addEventListener('click', onClickItemServiceIcon))
