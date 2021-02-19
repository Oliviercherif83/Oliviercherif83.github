window.addEventListener("DOMContentLoaded", (event) => {

    let deroulant = document.querySelector("main").addEventListener('click', function() {

        let deroulant2 = document.querySelector("main section")
        deroulant2.classList.toggle('deroulant');

        let deroulant3 = document.querySelector("main section:last-child")
        deroulant3.classList.toggle('deroulant');
    })


    let subMenus = document.querySelector("#sub-menus-id")
    let menuLocation = document.querySelector(".location")

    menuLocation.addEventListener('mouseover', function() {
        subMenus.classList.add("sub-menus-js");
    })

    subMenus.addEventListener('mouseleave', function() {
        subMenus.classList.remove("sub-menus-js");
    })
});