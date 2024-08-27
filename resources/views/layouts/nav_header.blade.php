<style>
    .brand_logo {
        max-width: 235px;
    }

    .nav-header {
        border-bottom: 1px solid #dfdfdf63;
    }

    .dlabnav {
        border-right: 1px solid #dfdfdfd6;
    }

    .nav-text:hover,
    .dlabnav .metismenu li a:hover {
        color: #052055;
    }

    .dlabnav .metismenu>li.mm-active>a {
        background: rgb(10 58 38 / 13%);
    }

    .dlabnav .metismenu>li.mm-active>a i {
        color: #0B91D7;
    }

    .dlabnav .metismenu>li.mm-active>a {
        color: #0B91D7 !important;
    }

    .dlabnav .metismenu>li.mm-active>a:after {
        border-top: 0.3125rem solid #0B91D7;
        border-left: 0.3125rem solid #0B91D7;
    }

    .dlabnav .metismenu>li .mm-active>a i {
        color: #0B91D7 !important;
    }
</style>

<!--**********************************Nav header start***********************************-->
<div class="nav-header">
    <a href="javascript:;" class="brand-logo">
        <img class="brand_logo" src="{{ asset('images/mpalogo.PNG') }}" alt="brand-logo">
        {{-- <svg class="logo-abbr" width="60" height="60" viewBox="0 0 60 60" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <rect class="react-logo" width="60" height="60" rx="30" fill="#00A15D" />
            <mask id="mask0" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="60" height="60">
                <rect class="react-logo" width="60" height="60" rx="30" fill="#00A15D" />
            </mask>
            <g mask="url(#mask0)">
                <path
                    d="M130 51.3929L126.5 45.2109C123 38.9626 116 26.6981 109 23.1017C102 19.5715 95 24.875 88 29.3002C81 33.6591 74 37.3053 67 39.0124C60 40.7857 53 40.7857 46 36.3606C39 32.0017 32 23.0519 25 17.7981C18 12.4448 11 10.7874 4 16.9197C-3 23.0519 -10 37.3053 -17 40.7857C-24 44.2662 -31 37.3053 -34.5 33.7088L-38 30.1786V62H-34.5C-31 62 -24 62 -17 62C-10 62 -3 62 4 62C11 62 18 62 25 62C32 62 39 62 46 62C53 62 60 62 67 62C74 62 81 62 88 62C95 62 102 62 109 62C116 62 123 62 126.5 62H130V51.3929Z"
                    fill="url(#paint0_linear)" />
                <path
                    d="M-54 55.7741L-50.5 50.9799C-47 46.1343 -40 36.623 -33 33.8339C-26 31.0962 -19 35.2092 -12 38.641C-5 42.0213 2 44.849 9 46.1728C16 47.5481 23 47.5481 30 44.1164C37 40.736 44 33.7954 51 29.721C58 25.5694 65 24.2841 72 29.0398C79 33.7954 86 44.849 93 47.5481C100 50.2473 107 44.849 110.5 42.0599L114 39.3222V64H110.5C107 64 100 64 93 64C86 64 79 64 72 64C65 64 58 64 51 64C44 64 37 64 30 64C23 64 16 64 9 64C2 64 -5 64 -12 64C-19 64 -26 64 -33 64C-40 64 -47 64 -50.5 64H-54V55.7741Z"
                    fill="url(#paint1_linear)" />
            </g>
            <defs>
                <linearGradient id="paint0_linear" x1="46" y1="13" x2="46" y2="62" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#23D58A" />
                    <stop offset="1" stop-color="#00A15D" />
                </linearGradient>
                <linearGradient id="paint1_linear" x1="30" y1="26" x2="30" y2="64" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#FFED4B" />
                    <stop offset="1" stop-color="#FF8C4B" />
                </linearGradient>
            </defs>
        </svg>

        <div class="brand-title">
            <h2 class="">Workload</h2>
            <span class="brand-sub-title">Project Management Admin</span>
        </div> --}}
    </a>
    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************Nav header end***********************************-->

<!--**********************************Chat box start***********************************-->
<div class="chatbox">
    <div class="chatbox-close"></div>
    <div class="custom-tab-1">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active show" id="chat" role="tabpanel">
                <div class="card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box">
                    <div class="card-header chat-list-header text-center">
                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                    <rect fill="#000000" opacity="0.3"
                                        transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                        x="4" y="11" width="16" height="2" rx="1" />
                                </g>
                            </svg></a>
                        <div>
                            <h6 class="mb-1">Chat List</h6>
                            <p class="mb-0">Show All</p>
                        </div>
                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" cx="5" cy="12" r="2" />
                                    <circle fill="#000000" cx="12" cy="12" r="2" />
                                    <circle fill="#000000" cx="19" cy="12" r="2" />
                                </g>
                            </svg></a>
                    </div>
                    <div class="card-body contacts_body p-0 dlab-scroll  " id="DLAB_W_Contacts_Body">
                        <ul class="contacts">
                            <li class="name-first-letter">A</li>
                            <li class="active dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="{{ asset('images/1.jpg') }}" class="rounded-circle user_img" alt="" />
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Archie Parker</span>
                                        <p>Kalid is online</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="{{ asset('images/2.jpg') }}" class="rounded-circle user_img" alt="" />
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Alfie Mason</span>
                                        <p>Taherah left 7 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="{{ asset('images/3.jpg') }}" class="rounded-circle user_img" alt="" />
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>AharlieKane</span>
                                        <p>Sami is online</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="{{ asset('images/4.jpg') }}" class="rounded-circle user_img" alt="" />
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Athan Jacoby</span>
                                        <p>Nargis left 30 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="name-first-letter">B</li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="{{ asset('images/5.jpg') }}" class="rounded-circle user_img" alt="" />
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Bashid Samim</span>
                                        <p>Rashid left 50 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="{{ asset('images/1.jpg') }}" class="rounded-circle user_img" alt="" />
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Breddie Ronan</span>
                                        <p>Kalid is online</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="{{ asset('images/2.jpg') }}" class="rounded-circle user_img" alt="" />
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Ceorge Carson</span>
                                        <p>Taherah left 7 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="name-first-letter">D</li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="{{ asset('images/3.jpg') }}" class="rounded-circle user_img" alt="" />
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Darry Parker</span>
                                        <p>Sami is online</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="{{ asset('images/4.jpg') }}" class="rounded-circle user_img" alt="" />
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Denry Hunter</span>
                                        <p>Nargis left 30 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="name-first-letter">J</li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="{{ asset('images/5.jpg') }}" class="rounded-circle user_img" alt="" />
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Jack Ronan</span>
                                        <p>Rashid left 50 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="{{ 'images/1.jpg' }}" class="rounded-circle user_img" alt="" />
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Jacob Tucker</span>
                                        <p>Kalid is online</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="{{ 'images/1.jpg' }}" class="rounded-circle user_img" alt="" />
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>James Logan</span>
                                        <p>Taherah left 7 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="{{ 'images/1.jpg' }}" class="rounded-circle user_img" alt="" />
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Joshua Weston</span>
                                        <p>Sami is online</p>
                                    </div>
                                </div>
                            </li>
                            <li class="name-first-letter">O</li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="{{ 'images/1.jpg' }}" class="rounded-circle user_img" alt="" />
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Oliver Acker</span>
                                        <p>Nargis left 30 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="{{ 'images/1.jpg' }}" class="rounded-circle user_img" alt="" />
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Oscar Weston</span>
                                        <p>Rashid left 50 mins ago</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card chat dlab-chat-history-box d-none">
                    <div class="card-header chat-list-header text-center">
                        <a href="javascript:void(0);" class="dlab-chat-history-back">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <rect fill="#000000" opacity="0.3"
                                        transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
                                        x="14" y="7" width="2" height="10" rx="1" />
                                    <path
                                        d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
                                </g>
                            </svg>
                        </a>
                        <div>
                            <h6 class="mb-1">Chat with Khelesh</h6>
                            <p class="mb-0 text-success">Online</p>
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="5" cy="12" r="2" />
                                        <circle fill="#000000" cx="12" cy="12" r="2" />
                                        <circle fill="#000000" cx="19" cy="12" r="2" />
                                    </g>
                                </svg></a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i>
                                    View profile</li>
                                <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to
                                    btn-close friends</li>
                                <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to
                                    group</li>
                                <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body msg_card_body dlab-scroll" id="DLAB_W_Contacts_Body3">
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="{{ 'images/1.jpg' }}" class="rounded-circle user_img_msg" alt="" />
                            </div>
                            <div class="msg_cotainer">
                                Hi, how are you samim?
                                <span class="msg_time">8:40 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                Hi Khalid i am good tnx how about you?
                                <span class="msg_time_send">8:55 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="{{ 'images/1.jpg' }}" class="rounded-circle user_img_msg" alt="" />
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="{{ 'images/1.jpg' }}" class="rounded-circle user_img_msg" alt="" />
                            </div>
                            <div class="msg_cotainer">
                                I am good too, thank you for your chat template
                                <span class="msg_time">9:00 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                You are welcome
                                <span class="msg_time_send">9:05 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="{{ 'images/1.jpg' }}" class="rounded-circle user_img_msg" alt="" />
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="{{ 'images/1.jpg' }}" class="rounded-circle user_img_msg" alt="" />
                            </div>
                            <div class="msg_cotainer">
                                I am looking for your next templates
                                <span class="msg_time">9:07 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                Ok, thank you have a good day
                                <span class="msg_time_send">9:10 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="{{ 'images/1.jpg' }}" class="rounded-circle user_img_msg" alt="" />
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="{{ 'images/1.jpg' }}" class="rounded-circle user_img_msg" alt="" />
                            </div>
                            <div class="msg_cotainer">
                                Bye, see you
                                <span class="msg_time">9:12 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="{{ 'images/1.jpg' }}" class="rounded-circle user_img_msg" alt="" />
                            </div>
                            <div class="msg_cotainer">
                                Hi, how are you samim?
                                <span class="msg_time">8:40 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                Hi Khalid i am good tnx how about you?
                                <span class="msg_time_send">8:55 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="{{ 'images/1.jpg' }}" class="rounded-circle user_img_msg" alt="" />
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="{{ 'images/1.jpg' }}" class="rounded-circle user_img_msg" alt="" />
                            </div>
                            <div class="msg_cotainer">
                                I am good too, thank you for your chat template
                                <span class="msg_time">9:00 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                You are welcome
                                <span class="msg_time_send">9:05 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="{{ 'images/1.jpg' }}" class="rounded-circle user_img_msg" alt="" />
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="{{ 'images/1.jpg' }}" class="rounded-circle user_img_msg" alt="" />
                            </div>
                            <div class="msg_cotainer">
                                I am looking for your next templates
                                <span class="msg_time">9:07 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                Ok, thank you have a good day
                                <span class="msg_time_send">9:10 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="{{ 'images/1.jpg' }}" class="rounded-circle user_img_msg" alt="" />
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="{{ 'images/1.jpg' }}" class="rounded-circle user_img_msg" alt="" />
                            </div>
                            <div class="msg_cotainer">
                                Bye, see you
                                <span class="msg_time">9:12 AM, Today</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer type_msg">
                        <div class="input-group">
                            <textarea class="form-control" placeholder="Type your message..."></textarea>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-primary"><i
                                        class="fa fa-location-arrow"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="alerts" role="tabpanel">
                <div class="card mb-sm-3 mb-md-0 contacts_card">
                    <div class="card-header chat-list-header text-center">
                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" cx="5" cy="12" r="2" />
                                    <circle fill="#000000" cx="12" cy="12" r="2" />
                                    <circle fill="#000000" cx="19" cy="12" r="2" />
                                </g>
                            </svg></a>
                        <div>
                            <h6 class="mb-1">Notications</h6>
                            <p class="mb-0">Show All</p>
                        </div>
                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path
                                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                        fill="#000000" fill-rule="nonzero" />
                                </g>
                            </svg></a>
                    </div>
                    <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body1">
                        <ul class="contacts">
                            <li class="name-first-letter">SEVER STATUS</li>
                            <li class="active">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont primary">KK</div>
                                    <div class="user_info">
                                        <span>David Nester Birthday</span>
                                        <p class="text-primary">Today</p>
                                    </div>
                                </div>
                            </li>
                            <li class="name-first-letter">SOCIAL</li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont success">RU</div>
                                    <div class="user_info">
                                        <span>Perfection Simplified</span>
                                        <p>Jame Smith commented on your status</p>
                                    </div>
                                </div>
                            </li>
                            <li class="name-first-letter">SEVER STATUS</li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont primary">AU</div>
                                    <div class="user_info">
                                        <span>AharlieKane</span>
                                        <p>Sami is online</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont info">MO</div>
                                    <div class="user_info">
                                        <span>Athan Jacoby</span>
                                        <p>Nargis left 30 mins ago</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="tab-pane fade" id="notes">
                <div class="card mb-sm-3 mb-md-0 note_card">
                    <div class="card-header chat-list-header text-center">
                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                    <rect fill="#000000" opacity="0.3"
                                        transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                        x="4" y="11" width="16" height="2" rx="1" />
                                </g>
                            </svg></a>
                        <div>
                            <h6 class="mb-1">Notes</h6>
                            <p class="mb-0">Add New Nots</p>
                        </div>
                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path
                                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                        fill="#000000" fill-rule="nonzero" />
                                </g>
                            </svg></a>
                    </div>
                    <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body2">
                        <ul class="contacts">
                            <li class="active">
                                <div class="d-flex bd-highlight">
                                    <div class="user_info">
                                        <span>New order placed..</span>
                                        <p>10 Aug 2020</p>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="user_info">
                                        <span>Youtube, a video-sharing website..</span>
                                        <p>10 Aug 2020</p>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="user_info">
                                        <span>john just buy your product..</span>
                                        <p>10 Aug 2020</p>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="user_info">
                                        <span>Athan Jacoby</span>
                                        <p>10 Aug 2020</p>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************Chat box End***********************************-->
