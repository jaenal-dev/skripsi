<div class="shadow-header"></div>
<header class="header-navbar fixed">
    <div class="toggle-mobile action-toggle"><i class="fas fa-bars"></i></div>
    <div class="header-wrapper">
        <div class="header-left">
            <div class="theme-switch-icon"></div>
        </div>
        <div class="header-content">
            <div class="notification dropdown">
                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="far fa-envelope"></i>
                </a>
                <ul class="dropdown-menu medium">
                    <li class="menu-header">
                        <a class="dropdown-item" href="#">Message</a>
                    </li>
                    <li class="menu-content ps-menu">
                        <a href="#">
                            <div class="message-image">
                                <img src="{{ asset('assets/images/avatar1.png') }}" class="rounded-circle w-100" alt="user1">
                            </div>
                            <div class="message-content read">
                                <div class="subject">
                                    John
                                </div>
                                <div class="body">
                                    Please call me at 9pm
                                </div>
                                <div class="time">Just now</div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="message-image">
                                <img src="{{ asset('assets/images/avatar2.png') }}" class="rounded-circle w-100" alt="user1">
                            </div>
                            <div class="message-content">
                                <div class="subject">
                                    Michele
                                </div>
                                <div class="body">
                                    Please come to my party
                                </div>
                                <div class="time">3 hours ago</div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="message-image">
                                <img src="{{ asset('assets/images/avatar1.png') }}" class="rounded-circle w-100" alt="user1">
                            </div>
                            <div class="message-content read">
                                <div class="subject">
                                    Brad
                                </div>
                                <div class="body">
                                    I have something to discuss, please call me soon
                                </div>
                                <div class="time">3 hours ago</div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="message-image">
                                <img src="{{ asset('assets/images/avatar2.png') }}" class="rounded-circle w-100" alt="user1">
                            </div>
                            <div class="message-content">
                                <div class="subject">
                                    Anel
                                </div>
                                <div class="body">
                                    Sorry i'm late
                                </div>
                                <div class="time">8 hours ago</div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="message-image">
                                <img src="{{ asset('assets/images/avatar2.png') }}" class="rounded-circle w-100" alt="user1">
                            </div>
                            <div class="message-content">
                                <div class="subject">
                                    Mary
                                </div>
                                <div class="body">
                                    Please answer my question last night
                                </div>
                                <div class="time">Last month</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="notification dropdown">
                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="far fa-bell"></i>
                    <span class="badge">12</span>
                </a>
                <ul class="dropdown-menu medium">
                    <li class="menu-header">
                        <a class="dropdown-item" href="#">Notification</a>
                    </li>
                    <li class="menu-content ps-menu">
                        <a href="#">
                            <div class="message-icon text-danger">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="message-content read">
                                <div class="body">
                                    There's incoming event, don't miss it!!
                                </div>
                                <div class="time">Just now</div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="message-icon text-info">
                                <i class="fas fa-info"></i>
                            </div>
                            <div class="message-content read">
                                <div class="body">
                                    Your licence will expired soon
                                </div>
                                <div class="time">3 hours ago</div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="message-icon text-success">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="message-content">
                                <div class="body">
                                    Successfully register new user
                                </div>
                                <div class="time">8 hours ago</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="dropdown dropdown-menu-end">
                <a href="#" class="user-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="label">
                        <span></span>
                        <div>{{ Auth::user()->name }}</div>
                    </div>
                    @if (Auth::user()->image)
                        <img class="img-user" src="{{ asset('storage/'. auth()->user()->image) }}" alt="{{ Auth::user()->name }}">
                    @else
                        <img class="img-user" src="{{ asset('assets/images/avatar1.png') }}" alt="{{ Auth::user()->name }}">
                    @endif
                </a>
                <ul class="dropdown-menu small">
                    <li class="menu-content ps-menu">
                        <a href="{{ route('profile') }}">
                            <div class="description">
                                <i class="ti-user"></i> Profile
                            </div>
                        </a>
                        <a href="{{ route('password.edit') }}">
                            <div class="description">
                                <i class="ti-settings"></i> Password
                            </div>
                        </a>
                        <div class="d-flex justify-items-center">
                            <div class="description p-2">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="text-muted" style="border: none; background: transparent; margin-left:1.5px;"> <i class="ti-power-off"></i> Logout</button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</header>
