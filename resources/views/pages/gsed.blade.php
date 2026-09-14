@extends('layouts.app')

@php
    $pageTitle = 'GSED Ecosystem — SUSTAIN 2026';
@endphp

@section('content')
<style>
/* =========================================================
   GSED PAGE
========================================================= */

.gsed-page {
    background: #f7f8f5;
    min-height: 100vh;
    color: #17231b;
    overflow-x: hidden;
}

/* =========================================================
   HERO
========================================================= */

.gsed-hero {
    min-height: 72vh;
    display: flex;
    align-items: center;
    position: relative;
    padding: 100px 7%;
    background:
        radial-gradient(circle at 80% 20%, rgba(74, 111, 78, 0.12), transparent 30%),
        radial-gradient(circle at 10% 80%, rgba(180, 193, 164, 0.18), transparent 30%),
        #f7f8f5;
}

.gsed-hero-content {
    max-width: 900px;
    position: relative;
    z-index: 2;
}

.gsed-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #55745a;
    margin-bottom: 25px;
}

.gsed-eyebrow::before {
    content: "";
    width: 35px;
    height: 2px;
    background: #55745a;
}

.gsed-hero h1 {
    font-size: clamp(55px, 8vw, 105px);
    line-height: .9;
    letter-spacing: -5px;
    font-weight: 800;
    margin: 0 0 30px;
    color: #18231c;
}

.gsed-hero h1 span {
    color: #66866b;
}

.gsed-hero-description {
    max-width: 700px;
    font-size: 18px;
    line-height: 1.8;
    color: #687168;
    margin: 0;
}

.gsed-principle {
    margin-top: 45px;
    display: inline-block;
    padding: 13px 20px;
    border: 1px solid rgba(85, 116, 90, .25);
    border-radius: 50px;
    color: #49664e;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2px;
}

/* =========================================================
   INTRO
========================================================= */

.gsed-intro {
    padding: 80px 7% 40px;
}

.gsed-intro-inner {
    max-width: 900px;
}

.gsed-section-label {
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #78907b;
    margin-bottom: 15px;
}

.gsed-intro h2 {
    font-size: clamp(34px, 5vw, 58px);
    line-height: 1.05;
    letter-spacing: -2px;
    margin: 0 0 20px;
    color: #1a271e;
}

.gsed-intro p {
    font-size: 17px;
    line-height: 1.8;
    color: #697169;
    max-width: 780px;
}

/* =========================================================
   INSTITUTE GRID
========================================================= */

.gsed-institutes {
    padding: 50px 7% 120px;
}

.gsed-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 22px;
    max-width: 1250px;
    margin: 0 auto;
}

/* =========================================================
   CARD
========================================================= */

.gsed-card {
    min-height: 390px;
    position: relative;
    padding: 42px;
    border-radius: 28px;
    overflow: hidden;
    background: #ffffff;
    border: 1px solid #e7ebe5;
    cursor: pointer;
    transition:
        transform .45s cubic-bezier(.2,.8,.2,1),
        box-shadow .45s ease,
        border-color .45s ease;
}

.gsed-card:hover {
    transform: translateY(-8px);
    border-color: rgba(85, 116, 90, .35);
    box-shadow: 0 25px 60px rgba(31, 51, 36, .10);
}

.gsed-card-number {
    position: absolute;
    top: 35px;
    right: 40px;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2px;
    color: #aab2aa;
}

.gsed-card-code {
    display: inline-block;
    font-size: 12px;
    font-weight: 900;
    letter-spacing: 2px;
    color: #5d7b62;
    margin-bottom: 70px;
}

.gsed-card h3 {
    max-width: 390px;
    font-size: clamp(27px, 3vw, 40px);
    line-height: 1.05;
    letter-spacing: -1.5px;
    margin: 0 0 18px;
    color: #18231c;
}

.gsed-card-focus {
    font-size: 13px;
    line-height: 1.6;
    color: #7b837c;
    max-width: 390px;
}

.gsed-card-arrow {
    position: absolute;
    bottom: 35px;
    right: 40px;
    width: 48px;
    height: 48px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #eef2ed;
    color: #4e6d53;
    font-size: 20px;
    transition: all .4s ease;
}

.gsed-card:hover .gsed-card-arrow {
    background: #5d7b62;
    color: #ffffff;
    transform: rotate(-45deg);
}

/* subtle background circle */

.gsed-card::after {
    content: "";
    position: absolute;
    width: 220px;
    height: 220px;
    border-radius: 50%;
    right: -90px;
    bottom: -100px;
    background: rgba(101, 134, 107, .06);
    transition: transform .6s ease;
}

.gsed-card:hover::after {
    transform: scale(1.5);
}

/* =========================================================
   CARD VARIATIONS
========================================================= */

.gsed-card.cise {
    background: linear-gradient(145deg, #ffffff, #f2f6f1);
}

.gsed-card.cibe {
    background: linear-gradient(145deg, #ffffff, #f5f4ed);
}

.gsed-card.cisfm {
    background: linear-gradient(145deg, #ffffff, #eef4f3);
}

.gsed-card.ciceg {
    background: linear-gradient(145deg, #ffffff, #f3f0e9);
}

/* =========================================================
   BOTTOM ECOSYSTEM
========================================================= */

.gsed-ecosystem {
    padding: 100px 7%;
    background: #18231c;
    color: #ffffff;
}

.gsed-ecosystem-inner {
    max-width: 1200px;
    margin: auto;
}

.gsed-ecosystem h2 {
    font-size: clamp(35px, 5vw, 60px);
    line-height: 1;
    letter-spacing: -2px;
    margin: 0 0 25px;
}

.gsed-ecosystem p {
    max-width: 700px;
    color: #aeb9b0;
    line-height: 1.8;
}

.gsed-flow {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 10px;
    margin-top: 55px;
}

.gsed-flow-item {
    padding: 25px;
    border-top: 1px solid rgba(255,255,255,.18);
}

.gsed-flow-number {
    font-size: 11px;
    color: #829b86;
    letter-spacing: 2px;
    font-weight: 800;
}

.gsed-flow-title {
    margin-top: 25px;
    font-size: 16px;
    font-weight: 700;
}

.gsed-flow-arrow {
    color: #829b86;
    font-size: 18px;
}

/* =========================================================
   MODAL
========================================================= */

.gsed-modal {
    position: fixed;
    inset: 0;
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
    background: rgba(11, 18, 13, .58);
    backdrop-filter: blur(10px);
    opacity: 0;
    visibility: hidden;
    transition: all .35s ease;
}

.gsed-modal.active {
    opacity: 1;
    visibility: visible;
}

.gsed-modal-window {
    width: min(850px, 100%);
    max-height: 85vh;
    overflow-y: auto;
    background: #ffffff;
    border-radius: 28px;
    padding: 50px;
    position: relative;
    transform: translateY(25px) scale(.97);
    transition: all .4s cubic-bezier(.2,.8,.2,1);
}

.gsed-modal.active .gsed-modal-window {
    transform: translateY(0) scale(1);
}

.gsed-modal-close {
    position: absolute;
    top: 25px;
    right: 25px;
    width: 42px;
    height: 42px;
    border: none;
    border-radius: 50%;
    background: #edf1ec;
    color: #334437;
    font-size: 22px;
    cursor: pointer;
    transition: .25s ease;
}

.gsed-modal-close:hover {
    background: #5d7b62;
    color: white;
}

.gsed-modal-code {
    font-size: 12px;
    letter-spacing: 2px;
    font-weight: 900;
    color: #66866b;
    margin-bottom: 15px;
}

.gsed-modal h2 {
    font-size: clamp(32px, 5vw, 52px);
    line-height: 1;
    letter-spacing: -2px;
    margin: 0 50px 20px 0;
    color: #18231c;
}

.gsed-modal-description {
    font-size: 16px;
    line-height: 1.8;
    color: #697169;
    margin-bottom: 35px;
}

.gsed-modal-role {
    padding: 25px;
    border-radius: 18px;
    background: #f4f7f3;
    margin-bottom: 30px;
}

.gsed-modal-role-title {
    font-size: 11px;
    font-weight: 900;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #6d846f;
    margin-bottom: 10px;
}

.gsed-modal-role p {
    margin: 0;
    color: #4f5951;
    line-height: 1.7;
}

.gsed-focus-title {
    font-size: 13px;
    font-weight: 900;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: #26352a;
    margin-bottom: 15px;
}

.gsed-focus-list {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    padding: 0;
    margin: 0;
    list-style: none;
}

.gsed-focus-list li {
    padding: 10px 15px;
    border-radius: 50px;
    background: #f0f3ef;
    color: #536056;
    font-size: 13px;
}

/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 900px) {

    .gsed-grid {
        grid-template-columns: 1fr;
    }

    .gsed-flow {
        grid-template-columns: 1fr 1fr;
    }

    .gsed-card {
        min-height: 350px;
    }
}

@media (max-width: 600px) {

    .gsed-hero {
        padding: 80px 25px;
        min-height: 65vh;
    }

    .gsed-hero h1 {
        letter-spacing: -3px;
    }

    .gsed-intro,
    .gsed-institutes {
        padding-left: 25px;
        padding-right: 25px;
    }

    .gsed-card {
        padding: 30px;
        min-height: 330px;
    }

    .gsed-card-code {
        margin-bottom: 55px;
    }

    .gsed-card-number {
        right: 25px;
    }

    .gsed-card-arrow {
        right: 25px;
        bottom: 25px;
    }

    .gsed-ecosystem {
        padding: 75px 25px;
    }

    .gsed-flow {
        grid-template-columns: 1fr;
    }

    .gsed-modal {
        padding: 15px;
    }

    .gsed-modal-window {
        padding: 35px 25px;
        border-radius: 22px;
    }
}
</style>


<div class="gsed-page">

    <!-- =====================================================
         HERO
    ====================================================== -->

    <section class="gsed-hero">

        <div class="gsed-hero-content">

            <div class="gsed-eyebrow">
                Global Sustainability Economy Development
            </div>

            <h1>
                GSED<span>.</span>
            </h1>

            <p class="gsed-hero-description">
                An overarching sustainability economy ecosystem supporting
                sustainability leadership, professional capabilities,
                institutional transformation and industry collaboration.
            </p>

            <div class="gsed-principle">
                ONE ECOSYSTEM • ONE VISION • INFINITE IMPACT
            </div>

        </div>

    </section>


    <!-- =====================================================
         INTRO
    ====================================================== -->

    <section class="gsed-intro">

        <div class="gsed-intro-inner">

            <div class="gsed-section-label">
                The GSED Ecosystem
            </div>

            <h2>
                Four pillars.<br>
                One sustainability ecosystem.
            </h2>

            <p>
                GSED brings together four specialised Chartered Institutes,
                each addressing a different dimension of sustainability
                transformation. Together, they connect strategy, governance,
                infrastructure, operations, carbon, ESG and finance.
            </p>

        </div>

    </section>


    <!-- =====================================================
         FOUR INSTITUTES
    ====================================================== -->

    <section class="gsed-institutes">

        <div class="gsed-grid">

            <!-- CISE -->
            <article
                id="cise"
                class="gsed-card cise"
                data-institute="cise"
            >

                <span class="gsed-card-number">01</span>

                <div class="gsed-card-code">
                    CISE
                </div>

                <h3>
                    Sustainability Economy
                </h3>

                <p class="gsed-card-focus">
                    Leadership, Governance & Future Economy
                </p>

                <div class="gsed-card-arrow">
                    ↗
                </div>

            </article>


            <!-- CIBE -->
            <article
                id="cibe"
                class="gsed-card cibe"
                data-institute="cibe"
            >

                <span class="gsed-card-number">02</span>

                <div class="gsed-card-code">
                    CIBE
                </div>

                <h3>
                    Built Environment & Engineering
                </h3>

                <p class="gsed-card-focus">
                    Infrastructure, Engineering & Smart Cities
                </p>

                <div class="gsed-card-arrow">
                    ↗
                </div>

            </article>


            <!-- CISFM -->
            <article
                id="cisfm"
                class="gsed-card cisfm"
                data-institute="cisfm"
            >

                <span class="gsed-card-number">03</span>

                <div class="gsed-card-code">
                    CISFM
                </div>

                <h3>
                    Sustainability & Facility Management
                </h3>

                <p class="gsed-card-focus">
                    Facilities, Assets & Operations
                </p>

                <div class="gsed-card-arrow">
                    ↗
                </div>

            </article>


            <!-- CICEG -->
            <article
                id="ciceg"
                class="gsed-card ciceg"
                data-institute="ciceg"
            >

                <span class="gsed-card-number">04</span>

                <div class="gsed-card-code">
                    CICEG
                </div>

                <h3>
                    Carbon, ESG & Green Economy
                </h3>

                <p class="gsed-card-focus">
                    Carbon, ESG & Climate Finance
                </p>

                <div class="gsed-card-arrow">
                    ↗
                </div>

            </article>

        </div>

    </section>


    <!-- =====================================================
         ECOSYSTEM FLOW
    ====================================================== -->

    <section class="gsed-ecosystem">

        <div class="gsed-ecosystem-inner">

            <div class="gsed-section-label">
                From Knowledge To Impact
            </div>

            <h2>
                One ecosystem.<br>
                Connected impact.
            </h2>

            <p>
                GSED connects knowledge, professional development, research
                and industry collaboration into a pathway from understanding
                to implementation and measurable sustainability impact.
            </p>


            <div class="gsed-flow">

                <div class="gsed-flow-item">
                    <div class="gsed-flow-number">01</div>
                    <div class="gsed-flow-title">
                        Knowledge
                    </div>
                </div>

                <div class="gsed-flow-item">
                    <div class="gsed-flow-number">02</div>
                    <div class="gsed-flow-title">
                        Understanding
                    </div>
                </div>

                <div class="gsed-flow-item">
                    <div class="gsed-flow-number">03</div>
                    <div class="gsed-flow-title">
                        Implementation
                    </div>
                </div>

                <div class="gsed-flow-item">
                    <div class="gsed-flow-number">04</div>
                    <div class="gsed-flow-title">
                        Collaboration
                    </div>
                </div>

                <div class="gsed-flow-item">
                    <div class="gsed-flow-number">05</div>
                    <div class="gsed-flow-title">
                        Impact
                    </div>
                </div>

            </div>

        </div>

    </section>

</div>


<!-- =========================================================
     INSTITUTE MODAL
========================================================= -->

<div
    class="gsed-modal"
    id="gsedModal"
    aria-hidden="true"
>

    <div class="gsed-modal-window">

        <button
            type="button"
            class="gsed-modal-close"
            id="gsedModalClose"
            aria-label="Close"
        >
            ×
        </button>

        <div class="gsed-modal-code" id="modalCode"></div>

        <h2 id="modalTitle"></h2>

        <p
            class="gsed-modal-description"
            id="modalDescription"
        ></p>

        <div class="gsed-modal-role">

            <div class="gsed-modal-role-title">
                Strategic Role
            </div>

            <p id="modalRole"></p>

        </div>

        <div class="gsed-focus-title">
            Framework Areas
        </div>

        <ul
            class="gsed-focus-list"
            id="modalFocus"
        ></ul>

    </div>

</div>


<script>
/* =========================================================
   GSED DATA
========================================================= */

const gsedData = {

    cise: {
        code: "CISE",
        title: "Chartered International Institute of Sustainability Economy",

        description:
            "CISE represents the leadership, governance and future-economy pillar within the GSED ecosystem. It focuses on building the people, governance structures and sustainability intelligence required for institutional transformation.",

        role:
            "Supports people, governance, policy and sustainability intelligence for institutional transformation.",

        focus: [
            "Sustainability Leadership",
            "Governance & Policy",
            "Institutional Transformation",
            "Sustainability Intelligence",
            "Education & Capacity Building",
            "Research & Thought Leadership"
        ]
    },


    cibe: {
        code: "CIBE",
        title: "Chartered International Institute of Built Environment & Engineering",

        description:
            "CIBE represents the infrastructure, engineering and smart-cities pillar within GSED. It focuses on developing resilient infrastructure, engineering capability and sustainable built-environment solutions.",

        role:
            "Develops resilient infrastructure, engineering capability and smart built-environment solutions.",

        focus: [
            "Sustainable Infrastructure",
            "Engineering Excellence",
            "Smart Cities & Urban Development",
            "Construction Innovation",
            "Digital Engineering",
            "Infrastructure Governance"
        ]
    },


    cisfm: {
        code: "CISFM",
        title: "Chartered International Institute of Sustainability & Facility Management",

        description:
            "CISFM represents the facilities, assets and operations pillar within GSED. It translates sustainability strategy into the practical management and operation of buildings, facilities, assets and workplaces.",

        role:
            "Connects sustainability policy and strategy with day-to-day organisational operations.",

        focus: [
            "Facility Management Excellence",
            "Asset Lifecycle Management",
            "Smart Buildings",
            "Digital Facility Management",
            "Energy & Resource Efficiency",
            "Workplace Experience",
            "Operational Sustainability"
        ]
    },


    ciceg: {
        code: "CICEG",
        title: "Chartered International Institute of Carbon Exchange, ESG & Green Economy",

        description:
            "CICEG represents the carbon, ESG and climate-finance pillar within GSED. It connects sustainability transformation with business, financial and investment realities.",

        role:
            "Connects carbon, ESG and sustainability initiatives with finance, investment, markets and the transition towards a green economy.",

        focus: [
            "Carbon Markets & Exchange",
            "ESG Excellence & Ratings",
            "Climate Finance & Investment",
            "Carbon Accounting & Verification",
            "Net-Zero Transition",
            "Green Economy & Innovation"
        ]
    }

};


/* =========================================================
   MODAL ELEMENTS
========================================================= */

const modal = document.getElementById("gsedModal");
const modalClose = document.getElementById("gsedModalClose");

const modalCode = document.getElementById("modalCode");
const modalTitle = document.getElementById("modalTitle");
const modalDescription = document.getElementById("modalDescription");
const modalRole = document.getElementById("modalRole");
const modalFocus = document.getElementById("modalFocus");


/* =========================================================
   OPEN MODAL
========================================================= */

function openGsedModal(type) {

    const data = gsedData[type];

    if (!data) {
        return;
    }

    modalCode.textContent = data.code;
    modalTitle.textContent = data.title;
    modalDescription.textContent = data.description;
    modalRole.textContent = data.role;

    modalFocus.innerHTML = "";

    data.focus.forEach(item => {

        const li = document.createElement("li");

        li.textContent = item;

        modalFocus.appendChild(li);

    });

    modal.classList.add("active");
    modal.setAttribute("aria-hidden", "false");

    document.body.style.overflow = "hidden";
}


/* =========================================================
   CLOSE MODAL
========================================================= */

function closeGsedModal() {

    modal.classList.remove("active");
    modal.setAttribute("aria-hidden", "true");

    document.body.style.overflow = "";

}


/* =========================================================
   CARD EVENTS
========================================================= */

document.querySelectorAll(".gsed-card").forEach(card => {

    card.addEventListener("click", function () {

        const type = this.dataset.institute;

        openGsedModal(type);

    });

});


/* =========================================================
   CLOSE EVENTS
========================================================= */

modalClose.addEventListener("click", closeGsedModal);


modal.addEventListener("click", function (event) {

    if (event.target === modal) {
        closeGsedModal();
    }

});


document.addEventListener("keydown", function (event) {

    if (event.key === "Escape") {
        closeGsedModal();
    }

});
</script>
@endsection
