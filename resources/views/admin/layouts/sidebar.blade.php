<!--begin::Aside-->
<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
     data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
     data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="{{ route('admin.dashboard')}}">
            <p>AlgoCraftStudios</p>
        </a>
        <!--end::Logo-->
        <!--begin::Aside toggler-->
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
             data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
             data-kt-toggle-name="aside-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
									<path opacity="0.5"
                                          d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                                          fill="black"/>
									<path
                                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                                        fill="black"/>
								</svg>
							</span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Aside toggler-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
             data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
             data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
             data-kt-scroll-offset="0">
            <!--begin::Menu-->
            <div
                class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item">
                    <div class="menu-content pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Ecommerce</span>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ (request()->segment(2) == 'dashboard') ? 'active' : '' }} "
                       href="{{ route('admin.dashboard') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
										<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black"/>
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ (request()->segment(2) == 'maincategory') ? 'active' : '' }} "
                       href="{{ route('maincategory') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
				                                    <span class="svg-icon svg-icon-2">
													    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                  d="M21 18.3V4H20H5C4.4 4 4 4.4 4 5V20C10.9 20 16.7 15.6 19 9.5V18.3C18.4 18.6 18 19.3 18 20C18 21.1 18.9 22 20 22C21.1 22 22 21.1 22 20C22 19.3 21.6 18.6 21 18.3Z"
                                                                  fill="black"></path>
                                                            <path
                                                                d="M22 4C22 2.9 21.1 2 20 2C18.9 2 18 2.9 18 4C18 4.7 18.4 5.29995 18.9 5.69995C18.1 12.6 12.6 18.2 5.70001 18.9C5.30001 18.4 4.7 18 4 18C2.9 18 2 18.9 2 20C2 21.1 2.9 22 4 22C4.8 22 5.39999 21.6 5.79999 20.9C13.8 20.1 20.1 13.7 20.9 5.80005C21.6 5.40005 22 4.8 22 4Z"
                                                                fill="black"></path>
                                                        </svg>
												    </span>                            <!--end::Svg Icon-->
										</span>
                        <span class="menu-title">Main Categories</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ (request()->segment(2) == 'category') ? 'active' : '' }} "
                       href="{{ route('category') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
										   <span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<path
                                                        d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                                                        fill="black"/>
													<path
                                                        d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                                                        fill="black"/>
													<path opacity="0.3"
                                                          d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                                                          fill="black"/>
													<path opacity="0.3"
                                                          d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                                                          fill="black"/>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
                        <span class="menu-title">Categories</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ (request()->segment(2) == 'product') ? 'active' : '' }} "
                       href="{{ route('product') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
										   <span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
														<path opacity="0.3"
                                                              d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                              fill="black"/>
														<path
                                                            d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                            fill="black"/>
													</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
                        <span class="menu-title">Product</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link {{ (request()->segment(2) == 'blog') ? 'active' : '' }} "
                       href="{{ route('blog') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/layouts/lay010.svg-->
												<span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                         <path opacity="0.3" d="M6.89999 21.9C5.89999 21.9 5.1 21.6 4.7 21.1C4.2 20.6 4 19.9 4 18.9V4.90002C4 3.90002 4.2 3.10007 4.7 2.70007C5.2 2.30007 5.89999 2 6.89999 2H13C13.9 2 14.7 2.10007 15.4 2.20007C16.1 2.30007 16.8 2.60002 17.4 2.90002C17.9 3.20002 18.3 3.6 18.7 4C19.1 4.5 19.4 5 19.6 5.5C19.8 6.1 19.9 6.70005 19.9 7.30005C19.9 9.00005 19.2 10.3 17.9 11.3C19.8 12.3 20.8 13.9 20.8 16C20.8 17.2 20.5 18.2001 19.9 19.2001C19.3 20.1001 18.5 20.9 17.4 21.3C16.8 21.6 16.1 21.7 15.3 21.9C14.5 22 13.6 22.1 12.6 22.1H6.89999V21.9ZM12.5 17.7001C15.3 17.7001 15.7 16.6 15.7 15.6C15.7 14.7 15.3 14.3 15 14.1C14.4 13.7 13.6 13.6 12.4 13.6H9.09999V17.7001H12.5ZM11.9 9.59998C12.8 9.59998 13.4 9.50002 13.9 9.40002C14.3 9.30002 14.5 9.00007 14.7 8.70007C14.9 8.40007 14.9 8.10005 14.9 7.80005C14.9 6.90005 14.5 6.6 14.3 6.5C13.7 6.2 12.8 6.09998 11.5 6.09998H9.09999V9.59998H11.9Z"
                                                                            fill="black"/>
                                                    </svg>
                                                </span>
                                            <!--end::Svg Icon-->
											</span>
                        <span class="menu-title">Blog</span>
                    </a>
                </div>

                <div class="menu-item">
                    <div class="menu-content pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Cms</span>
                    </div>
                </div>

                <div class="menu-item">
                    <a class="menu-link {{ (request()->segment(2) == 'site-setting') ? 'active' : '' }} "
                       href="{{ route('admin.site.setting') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/layouts/lay010.svg-->
												<span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black"/>
                                                        <path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black"/>
                                                    </svg>
												</span>
                                            <!--end::Svg Icon-->
											</span>
                        <span class="menu-title">Site Setting</span>
                    </a>
                </div>


                <div class="menu-item">
                    <a class="menu-link {{ (request()->segment(2) == 'social-links') ? 'active' : '' }} "
                       href="{{ route('social.link') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/layouts/lay010.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="7" y="2" width="14" height="16" rx="3" fill="black"/>
                                                            <rect x="3" y="6" width="14" height="16" rx="3" fill="black"/>
                                                    </svg>
												</span>
                                            <!--end::Svg Icon-->
											</span>
                        <span class="menu-title">Social Links</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ (request()->segment(2) == 'footer-links') ? 'active' : '' }} "
                       href="{{ route('footer.link') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/layouts/lay010.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                                            <rect y="6" width="16" height="3" rx="1.5" fill="black"/>
                                                            <rect opacity="0.3" y="12" width="8" height="3" rx="1.5" fill="black"/>
                                                            <rect opacity="0.3" width="12" height="3" rx="1.5" fill="black"/>
                                                    </svg>
												</span>
                                            <!--end::Svg Icon-->
											</span>
                        <span class="menu-title">Footer Links</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link {{ (request()->segment(2) == 'testimonial') ? 'active' : '' }} "
                       href="{{ route('testimonial.index') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/layouts/lay010.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M18.5 5.20007H14.2V19.5C14.2 20.3 14 20.9 13.7 21.3C13.3 21.7 12.9 21.9 12.3 21.9C11.7 21.9 11.2 21.7 10.9 21.3C10.6 20.9 10.3 20.3 10.3 19.5V5.20007H6C5.3 5.20007 4.8 5.10005 4.5 4.80005C4.2 4.50005 4 4.09998 4 3.59998C4 3.09998 4.2 2.70002 4.5 2.40002C4.8 2.10002 5.3 2 6 2H18.7C19.4 2 19.9 2.2 20.2 2.5C20.5 2.8 20.7 3.20007 20.7 3.70007C20.7 4.20007 20.5 4.60002 20.2 4.90002C19.7 5.00002 19.2 5.20007 18.5 5.20007Z" fill="black"/>
                                                    </svg>
												</span>
                                            <!--end::Svg Icon-->
											</span>
                        <span class="menu-title">Testimonials</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link {{ (request()->segment(2) == 'service') ? 'active' : '' }} "
                       href="{{ route('service.index') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/layouts/lay010.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="black"/>
                                                        <path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="black"/>
                                                    </svg>
												</span>
                                            <!--end::Svg Icon-->
											</span>
                        <span class="menu-title">Service</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link {{ (request()->segment(2) == 'banner') ? 'active' : '' }} "
                       href="{{ route('banner.index') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/layouts/lay010.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"/>
                                                        <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"/>
                                                    </svg>
												</span>
                                            <!--end::Svg Icon-->
											</span>
                        <span class="menu-title">Banner</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link {{ (request()->segment(2) == 'home-page') ? 'active' : '' }} "
                       href="{{ route('admin.homepage') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/layouts/lay010.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="black"/>
                                                        <path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="black"/>
                                                    </svg>
												</span>
                                            <!--end::Svg Icon-->
											</span>
                        <span class="menu-title">Home Page</span>
                    </a>
                </div>


                <div class="menu-item">
                    <a class="menu-link {{ (request()->segment(2) == 'custom-page') ? 'active' : '' }} "
                       href="{{ route('custompage') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/layouts/lay010.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect x="2" y="2" width="9" height="9" rx="2" fill="black"/>
                                                        <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"/>
                                                        <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"/>
                                                        <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"/>
                                                    </svg>
												</span>
                                            <!--end::Svg Icon-->
											</span>
                        <span class="menu-title">Custom Page</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ (request()->segment(2) == 'custom-page') ? 'active' : '' }} "
                       href="{{ route('custom-script.index') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen009.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M21 22H14C13.4 22 13 21.6 13 21V3C13 2.4 13.4 2 14 2H21C21.6 2 22 2.4 22 3V21C22 21.6 21.6 22 21 22Z" fill="black"></path>
														<path d="M10 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H10C10.6 2 11 2.4 11 3V21C11 21.6 10.6 22 10 22Z" fill="black"></path>
													</svg>
												</span>
                                            <!--end::Svg Icon-->
											</span>
                        <span class="menu-title">Custom Scripts</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link {{ (request()->segment(2) == 'custom-page') ? 'active' : '' }} "
                       href="{{ route('admin.faqs.index') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black"></path>
														<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black"></path>
													</svg>
												</span>
                                            <!--end::Svg Icon-->
											</span>
                        <span class="menu-title">Faqs</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ (request()->segment(2) == 'promotion') ? 'active' : '' }} "
                       href="{{ route('promotion.index') }}" data-bs-toggle="tooltip" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/layouts/lay010.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="black"/>
                                                        <path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="black"/>
                                                    </svg>
												</span>
                                            <!--end::Svg Icon-->
											</span>
                        <span class="menu-title">Promotions</span>
                    </a>
                </div>


                {{--                --}}
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->

</div>
<!--end::Aside-->
