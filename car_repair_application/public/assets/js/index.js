const barIcon = document.getElementById("menu-icon");
const header = document.querySelector(".header-right");
const itemServiceIcons = document.querySelectorAll(".item-service i");
const serviceSelectedWrap = document.querySelector(".services-selected");
const div = document.createElement("div");
const textNode = document.createTextNode("Chưa có dịch vụ nào được chọn");
div.appendChild(textNode);

const countServiceSelected = () => {
    const countServiceSelected = document.querySelectorAll(
        ".services-selected input"
    ).length;
    if (!countServiceSelected) {
        serviceSelectedWrap.appendChild(div);
        return;
    }
    serviceSelectedWrap.removeChild(div);
};

function onClickItemServiceIcon() {
    const serviceName = this.previousElementSibling.textContent;
    const newServiceSelected = document.createElement("input");
    const div = document.querySelector(".services-selected div");

    newServiceSelected.setAttribute("value", serviceName);
    newServiceSelected.setAttribute("class", "form-control");
    newServiceSelected.setAttribute("name", "name[]");
    serviceSelectedWrap.appendChild(newServiceSelected);

    if (div) {
        countServiceSelected();
    }
}

(() => {
    countServiceSelected();
})();

window.onscroll = function(e) {
    if (window.scrollY > 34) {
        barIcon.classList.add("background-dark");
        return;
    }

    barIcon.classList.remove("background-dark");
};

const onClickMenuBar = () => {
    const classNameOfHeader = header.getAttribute("class");

    if (classNameOfHeader.includes("show")) {
        header.classList.remove("show");
        return;
    }

    header.classList.add("show");
};

barIcon.addEventListener("click", onClickMenuBar);
itemServiceIcons.forEach(icon =>
    icon.addEventListener("click", onClickItemServiceIcon)
);
