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
       SDG — HOVER INFORMATION WINDOW (IMAGE VERSION)
    ====================================================== */

    const sdgItems =
        document.querySelectorAll(".sdg-list .sdg-item");

    const sdgOverlay =
        document.getElementById("sdgOverlay");

    const sdgModal =
        document.getElementById("sdgModal");

    const sdgModalImg =
        document.getElementById("sdgModalImg");


    if (
        sdgItems.length &&
        sdgModal &&
        sdgModalImg
    ) {

        function populateSdgModal(item) {
            const sdgNumber = item.dataset.sdg || "";

            // Senarai nombor SDG yang menggunakan format .jpg (selain daripada ni semua guna .png)
            const jpgList = ["09", "13", "17"];
            const extension = jpgList.includes(sdgNumber) ? "jpg" : "png";

            // Tetapkan sumber imej secara dinamik
            sdgModalImg.src = `assets/images/sdg/${sdgNumber}.${extension}`;
            sdgModalImg.alt = item.dataset.title || `SDG ${sdgNumber}`;
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

            // Kosongkan imej bila ditutup
            sdgModalImg.src = "";

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

/* =====================================================
   DRAGGABLE COUNTDOWN WIDGET LOGIC
   ====================================================== */
const widget = document.getElementById('draggableCountdown');
const heroSection = document.querySelector('.hero'); // Pastikan kelas hero padan

// Semak wujudnya widget dan hero seksyen sahaja (header sudah dibuang)
if (widget && heroSection) {
    let isDragging = false;
    let startX, startY, initialX, initialY;

    // Fungsi Drag (Desktop & Mobile) - Diletakkan terus pada keseluruhan widget
    widget.addEventListener('mousedown', dragStart);
    document.addEventListener('mousemove', drag);
    document.addEventListener('mouseup', dragEnd);

    widget.addEventListener('touchstart', dragStartTouch, { passive: true });
    document.addEventListener('touchmove', dragTouch, { passive: false });
    document.addEventListener('touchend', dragEnd);

    function dragStart(e) {
        isDragging = true;
        startX = e.clientX;
        startY = e.clientY;
        setInitialPosition();
    }

    function dragStartTouch(e) {
        isDragging = true;
        startX = e.touches[0].clientX;
        startY = e.touches[0].clientY;
        setInitialPosition();
    }

    function setInitialPosition() {
        const rect = widget.getBoundingClientRect();
        const heroRect = heroSection.getBoundingClientRect();
        initialX = rect.left - heroRect.left;
        initialY = rect.top - heroRect.top;
        widget.style.position = 'absolute';
        widget.style.right = 'auto'; // Lepaskan tetapan CSS asal
    }

    function drag(e) {
        if (!isDragging) return;
        e.preventDefault();
        calculateDrag(e.clientX, e.clientY);
    }

    function dragTouch(e) {
        if (!isDragging) return;
        calculateDrag(e.touches[0].clientX, e.touches[0].clientY);
    }

    function calculateDrag(currentX, currentY) {
        const dx = currentX - startX;
        const dy = currentY - startY;

        let newX = initialX + dx;
        let newY = initialY + dy;

        // Hadkan pergerakan hanya di dalam kawasan Hero seksyen sahaja
        const heroRect = heroSection.getBoundingClientRect();
        const widgetRect = widget.getBoundingClientRect();

        const maxX = heroRect.width - widgetRect.width;
        const maxY = heroRect.height - widgetRect.height;

        newX = Math.max(0, Math.min(newX, maxX));
        newY = Math.max(0, Math.min(newY, maxY));

        widget.style.left = `${newX}px`;
        widget.style.top = `${newY}px`;
    }

    function dragEnd() {
        isDragging = false;
    }

    // Countdown Timer ke 10 November 2026
    const eventDate = new Date('November 10, 2026 00:00:00').getTime();

    function updateCountdown() {
        const now = new Date().getTime();
        const gap = eventDate - now;

        const second = 1000;
        const minute = second * 60;
        const hour = minute * 60;
        const day = hour * 24;

        const d = Math.floor(gap / day);
        const h = Math.floor((gap % day) / hour);
        const m = Math.floor((gap % hour) / minute);
        const s = Math.floor((gap % minute) / second);

        document.getElementById('days').textContent = String(d).padStart(2, '0');
        document.getElementById('hours').textContent = String(h).padStart(2, '0');
        document.getElementById('mins').textContent = String(m).padStart(2, '0');
        document.getElementById('secs').textContent = String(s).padStart(2, '0');
    }

    setInterval(updateCountdown, 1000);
    updateCountdown();
}