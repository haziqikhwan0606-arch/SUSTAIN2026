/**
 * =========================================================
 * SUSTAIN 2026
 * Main JavaScript
 * =========================================================
 */

document.addEventListener("DOMContentLoaded", () => {

    /* =====================================================
       HEADER
    ====================================================== */

    const header = document.querySelector(".site-header");

    const handleHeaderScroll = () => {

        if (!header) return;

        if (window.scrollY > 60) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }

    };

    handleHeaderScroll();

    window.addEventListener(
        "scroll",
        handleHeaderScroll,
        { passive: true }
    );


    /* =====================================================
       MOBILE MENU
    ====================================================== */

    const menuToggle = document.querySelector(".menu-toggle");
    const mobileNav = document.querySelector(".mobile-nav");

    if (menuToggle && mobileNav) {

        menuToggle.addEventListener("click", () => {

            const isOpen =
                menuToggle.classList.toggle("active");

            mobileNav.classList.toggle(
                "active",
                isOpen
            );

            document.body.classList.toggle(
                "menu-open",
                isOpen
            );

            menuToggle.setAttribute(
                "aria-expanded",
                String(isOpen)
            );

        });


        /* Close menu after clicking a link */

        mobileNav
            .querySelectorAll("a")
            .forEach(link => {

                link.addEventListener("click", () => {

                    menuToggle.classList.remove("active");

                    mobileNav.classList.remove("active");

                    document.body.classList.remove(
                        "menu-open"
                    );

                    menuToggle.setAttribute(
                        "aria-expanded",
                        "false"
                    );

                });

            });

    }


    /* =====================================================
       SCROLL REVEAL
    ====================================================== */

    const revealElements =
        document.querySelectorAll(
            ".section-label, " +
            ".intro__heading, " +
            ".intro__content, " +
            ".number-item, " +
            ".journey-stage, " +
            ".track-item, " +
            ".experience-card, " +
            ".speakers__placeholder, " +
            ".sdg-list .sdg-item, " +
            ".institute, " +
            ".final-cta__content"
        );


    revealElements.forEach(element => {
        element.classList.add("reveal");
    });


    if ("IntersectionObserver" in window) {

        const revealObserver =
            new IntersectionObserver(
                (entries, observer) => {

                    entries.forEach(entry => {

                        if (!entry.isIntersecting) {
                            return;
                        }

                        entry.target.classList.add(
                            "is-visible"
                        );

                        observer.unobserve(
                            entry.target
                        );

                    });

                },
                {
                    threshold: 0.12,
                    rootMargin: "0px 0px -40px 0px"
                }
            );


        revealElements.forEach(element => {

            revealObserver.observe(element);

        });

    } else {

        revealElements.forEach(element => {

            element.classList.add(
                "is-visible"
            );

        });

    }


        /* =====================================================
       SDG — HOVER INFORMATION WINDOW
    ====================================================== */

    const sdgItems =
        document.querySelectorAll(".sdg-list .sdg-item");

    const sdgOverlay =
        document.getElementById("sdgOverlay");

    const sdgModal =
        document.getElementById("sdgModal");

    const sdgModalNumber =
        document.getElementById("sdgModalNumber");

    const sdgModalTitle =
        document.getElementById("sdgModalTitle");

    const sdgModalDescription =
        document.getElementById("sdgModalDescription");


    if (
        sdgItems.length &&
        sdgModal &&
        sdgModalNumber &&
        sdgModalTitle &&
        sdgModalDescription
    ) {

        function populateSdgModal(item) {

            sdgModalNumber.textContent =
                item.dataset.sdg || "";

            sdgModalTitle.textContent =
                item.dataset.title || "";

            sdgModalDescription.textContent =
                item.dataset.description || "";

        }


        function showSdgModal(item) {

            populateSdgModal(item);

            sdgOverlay?.classList.add(
                "is-visible"
            );

            sdgOverlay?.setAttribute(
                "aria-hidden",
                "false"
            );

            sdgModal.removeAttribute("hidden");

            requestAnimationFrame(() => {

                sdgModal.classList.add(
                    "is-visible"
                );

            });

        }


        function hideSdgModal() {

            sdgModal.classList.remove(
                "is-visible"
            );

            sdgOverlay?.classList.remove(
                "is-visible"
            );

            sdgOverlay?.setAttribute(
                "aria-hidden",
                "true"
            );

            sdgModal.setAttribute(
                "hidden",
                ""
            );

        }


        /* -------------------------------------------------
           ONLY show while cursor is inside the SDG box
        ------------------------------------------------- */

        sdgItems.forEach(item => {

            item.addEventListener(
                "mouseenter",
                () => {

                    showSdgModal(item);

                }
            );

            item.addEventListener(
                "mouseleave",
                () => {

                    hideSdgModal();

                }
            );

        });

    }
    /* =====================================================
       TRACK 01 — INTERACTIVE FOCUS AREAS
    ====================================================== */

    const trackFocusItems =
        document.querySelectorAll(
            ".track-focus--interactive .track-focus__item"
        );

    const trackFocusDisplay =
        document.querySelector(
            ".track-focus--interactive .track-focus__display"
        );

    if (
        trackFocusItems.length &&
        trackFocusDisplay
    ) {

        const displayNumber =
            trackFocusDisplay.querySelector(
                ".track-focus__display-number"
            );

        const displayTitle =
            trackFocusDisplay.querySelector("h5");

        const displayKeywords =
            trackFocusDisplay.querySelector(
                ".track-focus__display-keywords"
            );


        function updateTrackFocus(item) {
    trackFocusDisplay.classList.add("is-changing");

    setTimeout(() => {

        const number = item.dataset.number || "";

        displayNumber.textContent = number;
        displayTitle.innerHTML = item.dataset.display || "";
        displayKeywords.textContent = item.dataset.keywords || "";

        trackFocusDisplay.style.backgroundImage = `
            linear-gradient(
                rgba(10, 12, 11, .62),
                rgba(10, 12, 11, .78)
            ),
            url("/assets/images/tracks/${number}.jpg")
        `;

        trackFocusDisplay.classList.remove("is-changing");

    }, 180);
}


        trackFocusItems.forEach(item => {

            item.addEventListener(
                "mouseenter",
                () => {

                    trackFocusItems.forEach(other => {
                        other.classList.remove(
                            "is-active"
                        );
                    });

                    item.classList.add(
                        "is-active"
                    );

                    updateTrackFocus(item);

                }
            );

        });

    }

    /* =====================================================
       SMOOTH INTERNAL LINKS
    ====================================================== */

    document
        .querySelectorAll('a[href^="#"]')
        .forEach(link => {

            link.addEventListener(
                "click",
                event => {

                    const targetId =
                        link.getAttribute("href");

                    if (
                        !targetId ||
                        targetId === "#"
                    ) {
                        return;
                    }

                    const target =
                        document.querySelector(
                            targetId
                        );

                    if (!target) {
                        return;
                    }

                    event.preventDefault();

                    target.scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    });

                }
            );

        });


    /* =====================================================
       PARALLAX — HERO
    ====================================================== */

    const heroBackground =
        document.querySelector(
            ".hero__background"
        );


    if (
        heroBackground &&
        !window.matchMedia(
            "(prefers-reduced-motion: reduce)"
        ).matches
    ) {

        window.addEventListener(
            "scroll",
            () => {

                const scrollY =
                    window.scrollY;

                if (scrollY > window.innerHeight) {
                    return;
                }

                heroBackground.style.transform =
                    `scale(1.05) translateY(${scrollY * 0.12}px)`;

            },
            { passive: true }
        );

    }


    /* =====================================================
       CURRENT YEAR
    ====================================================== */

    const currentYear =
        new Date().getFullYear();

    document
        .querySelectorAll("[data-current-year]")
        .forEach(element => {

            element.textContent =
                currentYear;

        });

});
    