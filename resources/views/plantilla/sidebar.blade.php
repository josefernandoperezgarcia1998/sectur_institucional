<ul class="list-unstyled ps-0">
    <li class="mb-1">
        <a  href="{{ route('dashboard') }}" class="btn align-items-center rounded collapsed">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-3x3-gap-fill" viewBox="0 0 16 16">
                <path d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2z"/>
            </svg>
            Dashboard
        </a>
    </li>
    <li class="mb-1">
        <a href="{{ route('category.index') }}" class="btn align-items-center rounded collapsed">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
            </svg>
            Categorías
        </a>
    </li>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed"
            data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
            Orders
        </button>
        <div class="collapse" id="orders-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">New</a></li>
                <li><a href="#" class="link-dark rounded">Processed</a></li>
                <li><a href="#" class="link-dark rounded">Shipped</a></li>
                <li><a href="#" class="link-dark rounded">Returned</a></li>
            </ul>
        </div>
    </li>
    <li class="border-top my-3"></li>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed"
            data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
            Account
        </button>
        <div class="collapse" id="account-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">New...</a></li>
                <li><a href="#" class="link-dark rounded">Profile</a></li>
                <li><a href="#" class="link-dark rounded">Settings</a></li>
                <li><a href="#" class="link-dark rounded">Sign out</a></li>
            </ul>
        </div>
    </li>
</ul>
{{--                         
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                Dashboard
                            </button>
                            <div class="collapse" id="dashboard-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">Overview</a></li>
                                    <li><a href="#" class="link-dark rounded">Weekly</a></li>
                                    <li><a href="#" class="link-dark rounded">Monthly</a></li>
                                    <li><a href="#" class="link-dark rounded">Annually</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                Orders
                            </button>
                            <div class="collapse" id="orders-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">New</a></li>
                                    <li><a href="#" class="link-dark rounded">Processed</a></li>
                                    <li><a href="#" class="link-dark rounded">Shipped</a></li>
                                    <li><a href="#" class="link-dark rounded">Returned</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                Account
                            </button>
                            <div class="collapse" id="account-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">New...</a></li>
                                    <li><a href="#" class="link-dark rounded">Profile</a></li>
                                    <li><a href="#" class="link-dark rounded">Settings</a></li>
                                    <li><a href="#" class="link-dark rounded">Sign out</a></li>
                                </ul>
                            </div>
                        </li>
                        --}}