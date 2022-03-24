const toTop = document.querySelector(".to-top");
window.addEventListener("scroll", () => {
    if(window.pageYOffset > 100) {
        toTop.classList.add("to-top");
    }else {
        toTop.classList.remove("to-top");
    }
})