<nav class="navbar navbar-expand-lg navbar-light figma-nav fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
                <svg width="15" height="22" viewBox="0 0 15 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5 4C0.5 2.067 2.067 0.5 4 0.5H7.5V7.5H4C2.067 7.5 0.5 5.933 0.5 4Z" stroke="#828282"/>
                    <path d="M0.5 11C0.5 9.067 2.067 7.5 4 7.5H7.5V14.5H4C2.067 14.5 0.5 12.933 0.5 11Z" stroke="#828282"/>
                    <path d="M0.5 18C0.5 16.067 2.067 14.5 4 14.5H7.5V18C7.5 19.933 5.933 21.5 4 21.5C2.067 21.5 0.5 19.933 0.5 18Z" stroke="#828282"/>
                    <path d="M7.5 0.5H11C12.933 0.5 14.5 2.067 14.5 4C14.5 5.933 12.933 7.5 11 7.5H7.5V0.5Z" stroke="#828282"/>
                    <rect x="7.5" y="7.5" width="7" height="7" rx="3.5" stroke="#828282"/>
                    </svg>
                Figma
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <img src="/images/menu.svg" alt="Menu toggle icon">
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{env('FIGMA_TWITTER')}}"><span class="fab fa-twitter"></span> Twitter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{env('FIGMA_DRIBBBLE')}}"><span class="fab fa-dribbble"></span> Dribbble</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{env('FIGMA_INSTAGRAM')}}"><span class="fab fa-instagram"></span> Instagram</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{env('FIGMA_MEDIUM')}}"><span class="fab fa-medium-m"></span> Medium</a>
                </li>
            </ul>
        </div>
    </div>
</nav>