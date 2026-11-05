
// =====================================
// 1. WAIT FOR THE PAGE TO LOAD
// =====================================

document.addEventListener("DOMContentLoaded", function () {

    console.log("Welcome to Justin's Portfolio!");

    // =====================================
    // 2. AUTOMATIC FOOTER YEAR
    // =====================================

    const yearElement = document.getElementById("year");

    if (yearElement) {
        yearElement.textContent = new Date().getFullYear();
    }


    // =====================================
    // 3. SMOOTH NAVIGATION
    // =====================================

    const navigationLinks = document.querySelectorAll(
        '.navbar a[href^="#"]'
    );

    navigationLinks.forEach(function (link) {

        link.addEventListener("click", function (event) {

            const targetId = this.getAttribute("href");
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                event.preventDefault();

                targetSection.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }

        });

    });


    // =====================================
    // 4. CLOSE MOBILE MENU AFTER CLICK
    // =====================================

    const navbarMenu = document.getElementById("navbarMenu");

    const navbarLinks = document.querySelectorAll(
        ".navbar .nav-link"
    );

    if (navbarMenu && typeof bootstrap !== "undefined") {

        navbarLinks.forEach(function (link) {

            link.addEventListener("click", function () {

                if (navbarMenu.classList.contains("show")) {

                    const menu = bootstrap.Collapse.getOrCreateInstance(
                        navbarMenu
                    );

                    menu.hide();
                }

            });

        });

    }


    // =====================================
    // 5. NAVIGATION LINK HIGHLIGHT
    // =====================================

    navigationLinks.forEach(function (link) {

        link.addEventListener("click", function () {

            navigationLinks.forEach(function (item) {
                item.classList.remove("active");
            });

            this.classList.add("active");

        });

    });


    // =====================================
    // 6. WELCOME MESSAGE
    // =====================================

    console.log("Thank you for visiting my website!");

});
