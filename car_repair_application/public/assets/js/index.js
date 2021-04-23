const barIcon = document.getElementById("menu-icon")
const header = document.querySelector(".header-right")

window.onscroll = function (e) {
    if (window.scrollY > 34) {
    	barIcon.classList.add("background-dark");
    	return
    }

    barIcon.classList.remove("background-dark");	
};

const onClickMenuBar = () => {
	const classNameOfHeader = header.getAttribute("class");

	if (classNameOfHeader.includes('show')) {
		header.classList.remove("show")
		return;
	}

	header.classList.add("show")
}

barIcon.addEventListener('click', onClickMenuBar)