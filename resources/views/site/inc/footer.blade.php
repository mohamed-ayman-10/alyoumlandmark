<footer class="py-5 bg-card-color">
    <div class="container">
        <div class="row text-light">
            <div class="col-md-3 mb-5 mb-md-0">
                <div class="content text-center">
                    <h4>@lang('Follow us')</h4>
                    <ul class="d-flex align-items-center justify-content-center list-unstyled gap-4">
                        <li class="bg-light rounded" style="width: 26px; height: 27px;">
                            <a href="https://wa.me/{{ App\Models\Setting::query()->first()->facebook }}" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14 0H2C0.897 0 0 0.897 0 2V14C0 15.103 0.897 16 2 16H8V10.5H6V8H8V6C8 5.20435 8.31607 4.44129 8.87868 3.87868C9.44129 3.31607 10.2044 3 11 3H13V5.5H12C11.448 5.5 11 5.448 11 6V8H13.5L12.5 10.5H11V16H14C15.103 16 16 15.103 16 14V2C16 0.897 15.103 0 14 0Z"
                                        fill="#00473C" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 mb-5 mb-md-0">
                <div class="content text-center">
                    <h4>@lang('Let’s chat')</h4>
                    <ul class="d-flex align-items-center justify-content-center list-unstyled gap-4">
                        <li class="bg-light rounded" style="width: 26px; height: 27px;">
                            <a href="https://wa.me/{{ App\Models\Setting::query()->first()->whatsapp }}"
                                target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 18 18" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15.3 2.5875C13.6125 0.9 11.3625 0 9 0C4.05 0 0 4.05 0 9C0 10.575 0.450007 12.15 1.23751 13.5L0 18L4.72501 16.7625C6.07501 17.4375 7.5375 17.8875 9 17.8875C13.95 17.8875 18 13.8375 18 8.8875C18 6.525 16.9875 4.275 15.3 2.5875ZM9 16.425C7.65 16.425 6.30001 16.0875 5.17501 15.4125L4.94999 15.3L2.13749 16.0875L2.92501 13.3875L2.69999 13.05C1.91249 11.8125 1.57499 10.4625 1.57499 9.1125C1.57499 5.0625 4.95 1.6875 9 1.6875C11.025 1.6875 12.825 2.475 14.2875 3.825C15.75 5.2875 16.425 7.0875 16.425 9.1125C16.425 13.05 13.1625 16.425 9 16.425ZM13.05 10.8C12.825 10.6875 11.7 10.125 11.475 10.125C11.25 10.0125 11.1375 10.0125 11.025 10.2375C10.9125 10.4625 10.4625 10.9125 10.35 11.1375C10.2375 11.25 10.125 11.25 9.89999 11.25C9.67499 11.1375 9.00001 10.9125 8.10001 10.125C7.42501 9.5625 6.97501 8.775 6.86251 8.55C6.75001 8.325 6.86251 8.2125 6.97501 8.1C7.08751 7.9875 7.2 7.875 7.3125 7.7625C7.425 7.65 7.42501 7.5375 7.53751 7.425C7.65001 7.3125 7.53751 7.2 7.53751 7.0875C7.53751 6.975 7.08751 5.85 6.86251 5.4C6.75001 5.0625 6.52501 5.0625 6.41251 5.0625C6.30001 5.0625 6.18749 5.0625 5.96249 5.0625C5.84999 5.0625 5.62499 5.0625 5.39999 5.2875C5.17499 5.5125 4.61251 6.075 4.61251 7.2C4.61251 8.325 5.39999 9.3375 5.51249 9.5625C5.62499 9.675 7.08749 12.0375 9.33749 12.9375C11.25 13.725 11.5875 13.5 12.0375 13.5C12.4875 13.5 13.3875 12.9375 13.5 12.4875C13.725 11.925 13.725 11.475 13.6125 11.475C13.5 10.9125 13.275 10.9125 13.05 10.8Z"
                                        fill="#00473C" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 my-auto">
                <p> &copy; Alyoumlandmark 2023 (All Rights Reserved) - Powered By Inomtechs</p>
            </div>
        </div>
    </div>
</footer>
