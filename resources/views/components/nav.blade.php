<nav id="nav">
    <div class="logo">
        <img
            src="./assets/logo-nav-pc.webp"
            alt="logo"
            class="logo-sm"
            id="logo-sm"
        />
        <img
            src="./assets/logo-header-left.webp"
            alt="logo"
            class="logo-big"
            id="logo-big"
        />
    </div>

    <button class="mobile-nav-toggle" area-expanded="false">
        <span class="sr-only">Menu</span>
    </button>
    <div class="nav-box-bg"></div>

    <div class="links" data-visible="false">
        <ul>
            <li>
                <a href="#">Brand</a>
            </li>
            <li>
                <a href="#">News and Events</a>
            </li>
            <li>
                <a href="#">Lifestyle</a>
            </li>
            <li>
                <a href="#">For Owners</a>
            </li>
        </ul>
    </div>
</nav>
<script>
    window.addEventListener("scroll", () => {
        let bigLogo = document.getElementById("logo-big");
        let smallLogo = document.getElementById("logo-sm");
        let nav = document.getElementById("nav");

        const scrolled = window.scrollY;

        if (Math.ceil(scrolled) >= 2) {
            bigLogo.style.display = "none";
            smallLogo.style.display = "block";
            // nav.style.backgroundColor="white";
            nav.className = "nav extra-style";
        } else if (Math.ceil(scrolled) < 2) {
            bigLogo.style.display = "block";
            smallLogo.style.display = "none";
            nav.className = "nav";
        }
    });

    // responsive nav
    const navToggle = document.querySelector(".mobile-nav-toggle");
    const primaryNav = document.querySelector(".links");

    navToggle.addEventListener("click", () => {
        const visibility = primaryNav.getAttribute("data-visible");
        if (visibility === "false") {
            primaryNav.setAttribute("data-visible", true);
            navToggle.setAttribute("area-expanded", true);
        } else {
            primaryNav.setAttribute("data-visible", false);
            navToggle.setAttribute("area-expanded", false);
        }
        console.log(visibility);
    });
</script>
