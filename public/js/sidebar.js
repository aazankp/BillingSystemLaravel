$(document).ready(function () {
    const body = document.querySelector("body");
    const darkLight = document.querySelector("#darkLight");
    const sidebar = document.querySelector(".sidebar");
    const submenuItems = document.querySelectorAll(".submenu_item");
    const sidebarOpen = document.querySelector("#sidebarOpen");
    const sidebarClose = document.querySelector(".collapse_sidebar");
    const sidebarExpand = document.querySelector(".expand_sidebar");
    const mainContent = document.querySelector("#mainContent");
    sidebarOpen.addEventListener("click", () => 
    {
        sidebar.classList.toggle("close");
        if (sidebar.classList.contains("close")) {
            mainContent.classList.replace("contentText","contentTextBack");
        } else {
            mainContent.classList.replace("contentTextBack","contentText");
        }
    });


    sidebarClose.addEventListener("click", () => {
        sidebar.classList.add("close", "hoverable");
        mainContent.classList.replace("contentText","contentTextBack");
    });
    sidebarExpand.addEventListener("click", () => {
        sidebar.classList.remove("close", "hoverable");
        mainContent.classList.replace("contentTextBack","contentText");
    });

    sidebar.addEventListener("mouseenter", () => {
        if (sidebar.classList.contains("hoverable")) {
            sidebar.classList.remove("close");
            mainContent.classList.replace("contentTextBack","contentText");
        }
    });
    sidebar.addEventListener("mouseleave", () => {
        if (sidebar.classList.contains("hoverable")) {
            sidebar.classList.add("close");
            mainContent.classList.replace("contentText","contentTextBack");
        }
    });

    darkLight.addEventListener("click", () => {
        body.classList.toggle("dark");
        if (body.classList.contains("dark")) {
            document.setI
            darkLight.classList.replace("bx-sun", "bx-moon");
        } else {
            darkLight.classList.replace("bx-moon", "bx-sun");
        }
    });

    submenuItems.forEach((item, index) => {
        item.addEventListener("click", () => {
            item.classList.toggle("show_submenu");
            submenuItems.forEach((item2, index2) => {
            if (index !== index2) {
                item2.classList.remove("show_submenu");
            }
            });
        });
    });

    function resizeCollapse(){
        if (window.innerWidth < 768) {
            sidebar.classList.toggle("close");
            if (sidebar.classList.contains("close")) {
                mainContent.classList.replace("contentText","contentTextBack");
            } else {
                mainContent.classList.replace("contentTextBack","contentText");
            }        
        }
    }
    
    window.addEventListener("resize", resizeCollapse);

});