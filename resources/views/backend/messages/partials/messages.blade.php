<div class="media">
    <a class="pull-left" href="#">
        <img src="//www.gravatar.com/avatar/{{ md5($message->user->email) }} ?s=64"
             alt="{{ $message->user->name }}" class="img-circle">
    </a>
    <div class="media-body">
        <h5 class="media-heading">{{ $message->user->name }}</h5>
        <p>{{ $message->body }}</p>
        <div class="text-muted">
            <small>Posted {{ $message->created_at->diffForHumans() }}</small>
        </div>
    </div>
</div>
<div class="card c-email-app">
    <div class="card-body">
        <div class="toolbar mb-4">
            <div class="btn-group">
                <button class="btn btn-light" type="button">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-closed"></use>
                    </svg>
                </button>
                <button class="btn btn-light" type="button">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                    </svg>
                </button>
                <button class="btn btn-light" type="button">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bookmark"></use>
                    </svg>
                </button>
            </div>
            <div class="btn-group">
                <button class="btn btn-light" type="button">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-share"></use>
                    </svg>
                </button>
                <button class="btn btn-light" type="button">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-share-all"></use>
                    </svg>
                </button>
                <button class="btn btn-light" type="button">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-share-boxed"></use>
                    </svg>
                </button>
            </div>
            <button class="btn btn-light" type="button">
                <svg class="c-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                </svg>
            </button>
            <div class="btn-group">
                <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-tags"></use>
                    </svg><span class="caret"></span>
                </button>
                <div class="dropdown-menu"><a class="dropdown-item" href="#">add label<span class="badge badge-danger"> Home</span></a><a class="dropdown-item" href="#">add label<span class="badge badge-info"> Job</span></a><a class="dropdown-item" href="#">add label<span class="badge badge-success"> Clients</span></a><a class="dropdown-item" href="#">add label<span class="badge badge-warning"> News</span></a></div>
            </div>
            <div class="btn-group float-right">
                <button class="btn btn-light" type="button">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chevron-left"></use>
                    </svg>
                </button>
                <button class="btn btn-light" type="button">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chevron-right"></use>
                    </svg>
                </button>
            </div>
        </div>
        <div class="c-messages"><a class="c-message" href="apps/email/message.html">
                <div class="c-message-actions">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                    </svg>
                </div>
                <div class="c-message-details">
                    <div class="c-message-headers">
                        <div class="c-message-headers-from">Lukasz Holeczek</div>
                        <div class="c-message-headers-date">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-paperclip"></use>
                            </svg> Today, 3:47 PM
                        </div>
                        <div class="c-message-headers-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                    <div class="c-message-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                </div>
            </a><a class="c-message c-message-read" href="apps/email/message.html">
                <div class="c-message-actions">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                    </svg>
                </div>
                <div class="c-message-details">
                    <div class="c-message-headers">
                        <div class="c-message-headers-from">Lukasz Holeczek</div>
                        <div class="c-message-headers-date">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-paperclip"></use>
                            </svg> Today, 3:47 PM
                        </div>
                        <div class="c-message-headers-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                    <div class="c-message-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                </div>
            </a><a class="c-message c-message-read" href="apps/email/message.html">
                <div class="c-message-actions">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                    </svg>
                </div>
                <div class="c-message-details">
                    <div class="c-message-headers">
                        <div class="c-message-headers-from">Lukasz Holeczek</div>
                        <div class="c-message-headers-date">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-paperclip"></use>
                            </svg> Today, 3:47 PM
                        </div>
                        <div class="c-message-headers-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                    <div class="c-message-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                </div>
            </a><a class="c-message" href="apps/email/message.html">
                <div class="c-message-actions">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                    </svg>
                </div>
                <div class="c-message-details">
                    <div class="c-message-headers">
                        <div class="c-message-headers-from">Lukasz Holeczek</div>
                        <div class="c-message-headers-date">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-paperclip"></use>
                            </svg> Today, 3:47 PM
                        </div>
                        <div class="c-message-headers-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                    <div class="c-message-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                </div>
            </a><a class="c-message c-message-read" href="apps/email/message.html">
                <div class="c-message-actions">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                    </svg>
                </div>
                <div class="c-message-details">
                    <div class="c-message-headers">
                        <div class="c-message-headers-from">Lukasz Holeczek</div>
                        <div class="c-message-headers-date">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-paperclip"></use>
                            </svg> Today, 3:47 PM
                        </div>
                        <div class="c-message-headers-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                    <div class="c-message-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                </div>
            </a><a class="c-message" href="apps/email/message.html">
                <div class="c-message-actions">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                    </svg>
                </div>
                <div class="c-message-details">
                    <div class="c-message-headers">
                        <div class="c-message-headers-from">Lukasz Holeczek</div>
                        <div class="c-message-headers-date">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-paperclip"></use>
                            </svg> Today, 3:47 PM
                        </div>
                        <div class="c-message-headers-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                    <div class="c-message-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                </div>
            </a><a class="c-message c-message-read" href="apps/email/message.html">
                <div class="c-message-actions">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                    </svg>
                </div>
                <div class="c-message-details">
                    <div class="c-message-headers">
                        <div class="c-message-headers-from">Lukasz Holeczek</div>
                        <div class="c-message-headers-date">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-paperclip"></use>
                            </svg> Today, 3:47 PM
                        </div>
                        <div class="c-message-headers-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                    <div class="c-message-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                </div>
            </a><a class="c-message c-message-read" href="apps/email/message.html">
                <div class="c-message-actions">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                    </svg>
                </div>
                <div class="c-message-details">
                    <div class="c-message-headers">
                        <div class="c-message-headers-from">Lukasz Holeczek</div>
                        <div class="c-message-headers-date">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-paperclip"></use>
                            </svg> Today, 3:47 PM
                        </div>
                        <div class="c-message-headers-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                    <div class="c-message-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                </div>
            </a><a class="c-message" href="apps/email/message.html">
                <div class="c-message-actions">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                    </svg>
                </div>
                <div class="c-message-details">
                    <div class="c-message-headers">
                        <div class="c-message-headers-from">Lukasz Holeczek</div>
                        <div class="c-message-headers-date">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-paperclip"></use>
                            </svg> Today, 3:47 PM
                        </div>
                        <div class="c-message-headers-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                    <div class="c-message-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                </div>
            </a><a class="c-message c-message-read" href="apps/email/message.html">
                <div class="c-message-actions">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                    </svg>
                </div>
                <div class="c-message-details">
                    <div class="c-message-headers">
                        <div class="c-message-headers-from">Lukasz Holeczek</div>
                        <div class="c-message-headers-date">
                            <svg class="c-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-paperclip"></use>
                            </svg> Today, 3:47 PM
                        </div>
                        <div class="c-message-headers-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                    <div class="c-message-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                </div>
            </a></div>
    </div>
</div>
