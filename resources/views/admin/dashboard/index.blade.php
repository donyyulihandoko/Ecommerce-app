@extends('layouts.admin')
@section('content')
    <div class="section-content-right">

        <div class="header-dashboard">
            <div class="wrap">
                <div class="header-left">
                    <a href="index-2.html">
                        <img class="" id="logo_header_mobile" alt=""
                            src="{{ asset('admin_assets/images/logo/logo.png') }}" data-light="images/logo/logo.png"
                            data-dark="images/logo/logo.png" data-width="154px" data-height="52px"
                            data-retina="images/logo/logo.png">
                    </a>
                    <div class="button-show-hide">
                        <i class="icon-menu-left"></i>
                    </div>


                    <form class="form-search flex-grow">
                        <fieldset class="name">
                            <input type="text" placeholder="Search here..." class="show-search" name="name"
                                tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <div class="button-submit">
                            <button class="" type="submit"><i class="icon-search"></i></button>
                        </div>
                        <div class="box-content-search" id="box-content-search">
                            <ul class="mb-24">
                                <li class="mb-14">
                                    <div class="body-title">Top selling product</div>
                                </li>
                                <li class="mb-14">
                                    <div class="divider"></div>
                                </li>
                                <li>
                                    <ul>
                                        <li class="product-item gap14 mb-10">
                                            <div class="image no-bg">
                                                <img src="images/products/17.png" alt="">
                                            </div>
                                            <div class="flex items-center justify-between gap20 flex-grow">
                                                <div class="name">
                                                    <a href="product-list.html" class="body-text">Dog Food
                                                        Rachael Ray Nutrish®</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-10">
                                            <div class="divider"></div>
                                        </li>
                                        <li class="product-item gap14 mb-10">
                                            <div class="image no-bg">
                                                <img src="images/products/18.png" alt="">
                                            </div>
                                            <div class="flex items-center justify-between gap20 flex-grow">
                                                <div class="name">
                                                    <a href="product-list.html" class="body-text">Natural
                                                        Dog Food Healthy Dog Food</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-10">
                                            <div class="divider"></div>
                                        </li>
                                        <li class="product-item gap14">
                                            <div class="image no-bg">
                                                <img src="images/products/19.png" alt="">
                                            </div>
                                            <div class="flex items-center justify-between gap20 flex-grow">
                                                <div class="name">
                                                    <a href="product-list.html" class="body-text">Freshpet
                                                        Healthy Dog Food and Cat</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="">
                                <li class="mb-14">
                                    <div class="body-title">Order product</div>
                                </li>
                                <li class="mb-14">
                                    <div class="divider"></div>
                                </li>
                                <li>
                                    <ul>
                                        <li class="product-item gap14 mb-10">
                                            <div class="image no-bg">
                                                <img src="images/products/20.png" alt="">
                                            </div>
                                            <div class="flex items-center justify-between gap20 flex-grow">
                                                <div class="name">
                                                    <a href="product-list.html" class="body-text">Sojos
                                                        Crunchy Natural Grain Free...</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-10">
                                            <div class="divider"></div>
                                        </li>
                                        <li class="product-item gap14 mb-10">
                                            <div class="image no-bg">
                                                <img src="images/products/21.png" alt="">
                                            </div>
                                            <div class="flex items-center justify-between gap20 flex-grow">
                                                <div class="name">
                                                    <a href="product-list.html" class="body-text">Kristin
                                                        Watson</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-10">
                                            <div class="divider"></div>
                                        </li>
                                        <li class="product-item gap14 mb-10">
                                            <div class="image no-bg">
                                                <img src="images/products/22.png" alt="">
                                            </div>
                                            <div class="flex items-center justify-between gap20 flex-grow">
                                                <div class="name">
                                                    <a href="product-list.html" class="body-text">Mega
                                                        Pumpkin Bone</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-10">
                                            <div class="divider"></div>
                                        </li>
                                        <li class="product-item gap14">
                                            <div class="image no-bg">
                                                <img src="images/products/23.png" alt="">
                                            </div>
                                            <div class="flex items-center justify-between gap20 flex-grow">
                                                <div class="name">
                                                    <a href="product-list.html" class="body-text">Mega
                                                        Pumpkin Bone</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </form>

                </div>
                <div class="header-grid">

                    <div class="popup-wrap message type-header">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="header-item">
                                    <span class="text-tiny">1</span>
                                    <i class="icon-bell"></i>
                                </span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton2">
                                <li>
                                    <h6>Notifications</h6>
                                </li>
                                <li>
                                    <div class="message-item item-1">
                                        <div class="image">
                                            <i class="icon-noti-1"></i>
                                        </div>
                                        <div>
                                            <div class="body-title-2">Discount available</div>
                                            <div class="text-tiny">Morbi sapien massa, ultricies at rhoncus
                                                at, ullamcorper nec diam</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="message-item item-2">
                                        <div class="image">
                                            <i class="icon-noti-2"></i>
                                        </div>
                                        <div>
                                            <div class="body-title-2">Account has been verified</div>
                                            <div class="text-tiny">Mauris libero ex, iaculis vitae rhoncus
                                                et</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="message-item item-3">
                                        <div class="image">
                                            <i class="icon-noti-3"></i>
                                        </div>
                                        <div>
                                            <div class="body-title-2">Order shipped successfully</div>
                                            <div class="text-tiny">Integer aliquam eros nec sollicitudin
                                                sollicitudin</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="message-item item-4">
                                        <div class="image">
                                            <i class="icon-noti-4"></i>
                                        </div>
                                        <div>
                                            <div class="body-title-2">Order pending: <span>ID 305830</span>
                                            </div>
                                            <div class="text-tiny">Ultricies at rhoncus at ullamcorper
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#" class="tf-button w-full">View all</a></li>
                            </ul>
                        </div>
                    </div>




                    <div class="popup-wrap user type-header">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="header-user wg-user">
                                    <span class="image">
                                        <img src="images/avatar/user-1.png" alt="">
                                    </span>
                                    <span class="flex flex-column">
                                        <span class="body-title mb-2">Kristin Watson</span>
                                        <span class="text-tiny">Admin</span>
                                    </span>
                                </span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton3">
                                <li>
                                    <a href="#" class="user-item">
                                        <div class="icon">
                                            <i class="icon-user"></i>
                                        </div>
                                        <div class="body-title-2">Account</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-item">
                                        <div class="icon">
                                            <i class="icon-mail"></i>
                                        </div>
                                        <div class="body-title-2">Inbox</div>
                                        <div class="number">27</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-item">
                                        <div class="icon">
                                            <i class="icon-file-text"></i>
                                        </div>
                                        <div class="body-title-2">Taskboard</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-item">
                                        <div class="icon">
                                            <i class="icon-headphones"></i>
                                        </div>
                                        <div class="body-title-2">Support</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html" class="user-item">
                                        <div class="icon">
                                            <i class="icon-log-out"></i>
                                        </div>
                                        <div class="body-title-2">Log out</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="main-content">

            <div class="main-content-inner">

                <div class="main-content-wrap">
                    <div class="tf-section-2 mb-30">
                        <div class="flex gap20 flex-wrap-mobile">
                            <div class="w-half">

                                <div class="wg-chart-default mb-20">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap14">
                                            <div class="image ic-bg">
                                                <i class="icon-shopping-bag"></i>
                                            </div>
                                            <div>
                                                <div class="body-text mb-2">Total Orders</div>
                                                <h4>3</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="wg-chart-default mb-20">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap14">
                                            <div class="image ic-bg">
                                                <i class="icon-dollar-sign"></i>
                                            </div>
                                            <div>
                                                <div class="body-text mb-2">Total Amount</div>
                                                <h4>481.34</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="wg-chart-default mb-20">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap14">
                                            <div class="image ic-bg">
                                                <i class="icon-shopping-bag"></i>
                                            </div>
                                            <div>
                                                <div class="body-text mb-2">Pending Orders</div>
                                                <h4>3</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="wg-chart-default">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap14">
                                            <div class="image ic-bg">
                                                <i class="icon-dollar-sign"></i>
                                            </div>
                                            <div>
                                                <div class="body-text mb-2">Pending Orders Amount</div>
                                                <h4>481.34</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="w-half">

                                <div class="wg-chart-default mb-20">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap14">
                                            <div class="image ic-bg">
                                                <i class="icon-shopping-bag"></i>
                                            </div>
                                            <div>
                                                <div class="body-text mb-2">Delivered Orders</div>
                                                <h4>0</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="wg-chart-default mb-20">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap14">
                                            <div class="image ic-bg">
                                                <i class="icon-dollar-sign"></i>
                                            </div>
                                            <div>
                                                <div class="body-text mb-2">Delivered Orders Amount</div>
                                                <h4>0.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="wg-chart-default mb-20">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap14">
                                            <div class="image ic-bg">
                                                <i class="icon-shopping-bag"></i>
                                            </div>
                                            <div>
                                                <div class="body-text mb-2">Canceled Orders</div>
                                                <h4>0</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="wg-chart-default">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap14">
                                            <div class="image ic-bg">
                                                <i class="icon-dollar-sign"></i>
                                            </div>
                                            <div>
                                                <div class="body-text mb-2">Canceled Orders Amount</div>
                                                <h4>0.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="wg-box">
                            <div class="flex items-center justify-between">
                                <h5>Earnings revenue</h5>
                                <div class="dropdown default">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a href="javascript:void(0);">This Week</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Last Week</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap40">
                                <div>
                                    <div class="mb-2">
                                        <div class="block-legend">
                                            <div class="dot t1"></div>
                                            <div class="text-tiny">Revenue</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap10">
                                        <h4>$37,802</h4>
                                        <div class="box-icon-trending up">
                                            <i class="icon-trending-up"></i>
                                            <div class="body-title number">0.56%</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-2">
                                        <div class="block-legend">
                                            <div class="dot t2"></div>
                                            <div class="text-tiny">Order</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap10">
                                        <h4>$28,305</h4>
                                        <div class="box-icon-trending up">
                                            <i class="icon-trending-up"></i>
                                            <div class="body-title number">0.56%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="line-chart-8" style="min-height: 340px;">
                                <div id="apexchartsy6ad2xe9"
                                    class="apexcharts-canvas apexchartsy6ad2xe9 apexcharts-theme-light"
                                    style="width: 381px; height: 325px;"><svg id="SvgjsSvg1392" width="381"
                                        height="325" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <foreignObject x="0" y="0" width="381" height="325">
                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                style="max-height: 162.5px;"></div>
                                        </foreignObject>
                                        <g id="SvgjsG1581" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-18, 0)"></g>
                                        <g id="SvgjsG1394" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(12, 30)">
                                            <defs id="SvgjsDefs1393">
                                                <linearGradient id="SvgjsLinearGradient1396" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1397" stop-opacity="0.4"
                                                        stop-color="rgba(216,227,240,0.4)" offset="0">
                                                    </stop>
                                                    <stop id="SvgjsStop1398" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1">
                                                    </stop>
                                                    <stop id="SvgjsStop1399" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1">
                                                    </stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMasky6ad2xe9">
                                                    <rect id="SvgjsRect1401" width="363" height="262.42666563796996"
                                                        x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMasky6ad2xe9"></clipPath>
                                                <clipPath id="nonForecastMasky6ad2xe9"></clipPath>
                                                <clipPath id="gridRectMarkerMasky6ad2xe9">
                                                    <rect id="SvgjsRect1402" width="363" height="262.42666563796996"
                                                        x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect1400" width="10" height="258.42666563796996" x="0"
                                                y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke-dasharray="3" fill="url(#SvgjsLinearGradient1396)"
                                                class="apexcharts-xcrosshairs" y2="258.42666563796996" filter="none"
                                                fill-opacity="0.9"></rect>
                                            <line id="SvgjsLine1520" x1="0" y1="259.42666563796996"
                                                x2="0" y2="265.42666563796996" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line id="SvgjsLine1521" x1="29.916666666666668" y1="259.42666563796996"
                                                x2="29.916666666666668" y2="265.42666563796996" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line id="SvgjsLine1522" x1="59.833333333333336" y1="259.42666563796996"
                                                x2="59.833333333333336" y2="265.42666563796996" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line id="SvgjsLine1523" x1="89.75" y1="259.42666563796996"
                                                x2="89.75" y2="265.42666563796996" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line id="SvgjsLine1524" x1="119.66666666666667" y1="259.42666563796996"
                                                x2="119.66666666666667" y2="265.42666563796996" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line id="SvgjsLine1525" x1="149.58333333333334" y1="259.42666563796996"
                                                x2="149.58333333333334" y2="265.42666563796996" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line id="SvgjsLine1526" x1="179.5" y1="259.42666563796996"
                                                x2="179.5" y2="265.42666563796996" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line id="SvgjsLine1527" x1="209.41666666666666" y1="259.42666563796996"
                                                x2="209.41666666666666" y2="265.42666563796996" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line id="SvgjsLine1528" x1="239.33333333333331" y1="259.42666563796996"
                                                x2="239.33333333333331" y2="265.42666563796996" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line id="SvgjsLine1529" x1="269.25" y1="259.42666563796996"
                                                x2="269.25" y2="265.42666563796996" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line id="SvgjsLine1530" x1="299.1666666666667" y1="259.42666563796996"
                                                x2="299.1666666666667" y2="265.42666563796996" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line id="SvgjsLine1531" x1="329.08333333333337" y1="259.42666563796996"
                                                x2="329.08333333333337" y2="265.42666563796996" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line id="SvgjsLine1532" x1="359.00000000000006" y1="259.42666563796996"
                                                x2="359.00000000000006" y2="265.42666563796996" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick">
                                            </line>
                                            <g id="SvgjsG1516" class="apexcharts-grid">
                                                <g id="SvgjsG1517" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1534" x1="0" y1="64.60666640949249"
                                                        x2="359" y2="64.60666640949249" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1535" x1="0" y1="129.21333281898498"
                                                        x2="359" y2="129.21333281898498" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1536" x1="0" y1="193.81999922847746"
                                                        x2="359" y2="193.81999922847746" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1518" class="apexcharts-gridlines-vertical">
                                                </g>
                                                <line id="SvgjsLine1539" x1="0" y1="258.42666563796996"
                                                    x2="359" y2="258.42666563796996" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1538" x1="0" y1="1" x2="0"
                                                    y2="258.42666563796996" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1519" class="apexcharts-grid-borders">
                                                <line id="SvgjsLine1533" x1="0" y1="0" x2="359"
                                                    y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1537" x1="0" y1="258.42666563796996"
                                                    x2="359" y2="258.42666563796996" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1580" x1="0" y1="259.42666563796996"
                                                    x2="359" y2="259.42666563796996" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1403" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG1404" class="apexcharts-series" rel="1"
                                                    seriesName="Total" data:realIndex="0">
                                                    <path id="SvgjsPath1409"
                                                        d="M -5.041666666666666 258.42766563796994 L -5.041666666666666 258.42766563796994 L 4.958333333333334 258.42766563796994 L 4.958333333333334 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M -5.041666666666666 258.42766563796994 L -5.041666666666666 258.42766563796994 L 4.958333333333334 258.42766563796994 L 4.958333333333334 258.42766563796994 Z"
                                                        pathFrom="M -5.041666666666666 258.42766563796994 L -5.041666666666666 258.42766563796994 L 4.958333333333334 258.42766563796994 L 4.958333333333334 258.42766563796994 L 4.958333333333334 258.42766563796994 L 4.958333333333334 258.42766563796994 L 4.958333333333334 258.42766563796994 L -5.041666666666666 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="24.875" j="0" val="0"
                                                        barHeight="0" barWidth="10">
                                                    </path>
                                                    <path id="SvgjsPath1411"
                                                        d="M 24.875 258.42766563796994 L 24.875 258.42766563796994 L 34.875 258.42766563796994 L 34.875 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 24.875 258.42766563796994 L 24.875 258.42766563796994 L 34.875 258.42766563796994 L 34.875 258.42766563796994 Z"
                                                        pathFrom="M 24.875 258.42766563796994 L 24.875 258.42766563796994 L 34.875 258.42766563796994 L 34.875 258.42766563796994 L 34.875 258.42766563796994 L 34.875 258.42766563796994 L 34.875 258.42766563796994 L 24.875 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="54.79166666666667" j="1"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1413"
                                                        d="M 54.79166666666667 258.42766563796994 L 54.79166666666667 258.42766563796994 L 64.79166666666667 258.42766563796994 L 64.79166666666667 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 54.79166666666667 258.42766563796994 L 54.79166666666667 258.42766563796994 L 64.79166666666667 258.42766563796994 L 64.79166666666667 258.42766563796994 Z"
                                                        pathFrom="M 54.79166666666667 258.42766563796994 L 54.79166666666667 258.42766563796994 L 64.79166666666667 258.42766563796994 L 64.79166666666667 258.42766563796994 L 64.79166666666667 258.42766563796994 L 64.79166666666667 258.42766563796994 L 64.79166666666667 258.42766563796994 L 54.79166666666667 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="84.70833333333334" j="2"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1415"
                                                        d="M 84.70833333333334 258.42766563796994 L 84.70833333333334 258.42766563796994 L 94.70833333333334 258.42766563796994 L 94.70833333333334 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 84.70833333333334 258.42766563796994 L 84.70833333333334 258.42766563796994 L 94.70833333333334 258.42766563796994 L 94.70833333333334 258.42766563796994 Z"
                                                        pathFrom="M 84.70833333333334 258.42766563796994 L 84.70833333333334 258.42766563796994 L 94.70833333333334 258.42766563796994 L 94.70833333333334 258.42766563796994 L 94.70833333333334 258.42766563796994 L 94.70833333333334 258.42766563796994 L 94.70833333333334 258.42766563796994 L 84.70833333333334 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="114.62500000000001" j="3"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1417"
                                                        d="M 114.62500000000001 258.42766563796994 L 114.62500000000001 258.42766563796994 L 124.62500000000001 258.42766563796994 L 124.62500000000001 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 114.62500000000001 258.42766563796994 L 114.62500000000001 258.42766563796994 L 124.62500000000001 258.42766563796994 L 124.62500000000001 258.42766563796994 Z"
                                                        pathFrom="M 114.62500000000001 258.42766563796994 L 114.62500000000001 258.42766563796994 L 124.62500000000001 258.42766563796994 L 124.62500000000001 258.42766563796994 L 124.62500000000001 258.42766563796994 L 124.62500000000001 258.42766563796994 L 124.62500000000001 258.42766563796994 L 114.62500000000001 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="144.54166666666669" j="4"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1419"
                                                        d="M 144.54166666666669 258.42766563796994 L 144.54166666666669 6.258617117947973 L 154.54166666666669 6.258617117947973 L 154.54166666666669 258.42766563796994 Z"
                                                        fill="rgba(35,119,252,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 144.54166666666669 258.42766563796994 L 144.54166666666669 6.258617117947973 L 154.54166666666669 6.258617117947973 L 154.54166666666669 258.42766563796994 Z"
                                                        pathFrom="M 144.54166666666669 258.42766563796994 L 144.54166666666669 258.42766563796994 L 154.54166666666669 258.42766563796994 L 154.54166666666669 258.42766563796994 L 154.54166666666669 258.42766563796994 L 154.54166666666669 258.42766563796994 L 154.54166666666669 258.42766563796994 L 144.54166666666669 258.42766563796994 Z"
                                                        cy="6.257617117947973" cx="174.45833333333334" j="5"
                                                        val="273.22" barHeight="252.169048520022" barWidth="10">
                                                    </path>
                                                    <path id="SvgjsPath1421"
                                                        d="M 174.45833333333334 258.42766563796994 L 174.45833333333334 66.342816878776 L 184.45833333333334 66.342816878776 L 184.45833333333334 258.42766563796994 Z"
                                                        fill="rgba(35,119,252,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 174.45833333333334 258.42766563796994 L 174.45833333333334 66.342816878776 L 184.45833333333334 66.342816878776 L 184.45833333333334 258.42766563796994 Z"
                                                        pathFrom="M 174.45833333333334 258.42766563796994 L 174.45833333333334 258.42766563796994 L 184.45833333333334 258.42766563796994 L 184.45833333333334 258.42766563796994 L 184.45833333333334 258.42766563796994 L 184.45833333333334 258.42766563796994 L 184.45833333333334 258.42766563796994 L 174.45833333333334 258.42766563796994 Z"
                                                        cy="66.341816878776" cx="204.375" j="6" val="208.12"
                                                        barHeight="192.08484875919396" barWidth="10"></path>
                                                    <path id="SvgjsPath1423"
                                                        d="M 204.375 258.42766563796994 L 204.375 258.42766563796994 L 214.375 258.42766563796994 L 214.375 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 204.375 258.42766563796994 L 204.375 258.42766563796994 L 214.375 258.42766563796994 L 214.375 258.42766563796994 Z"
                                                        pathFrom="M 204.375 258.42766563796994 L 204.375 258.42766563796994 L 214.375 258.42766563796994 L 214.375 258.42766563796994 L 214.375 258.42766563796994 L 214.375 258.42766563796994 L 214.375 258.42766563796994 L 204.375 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="234.29166666666666" j="7"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1425"
                                                        d="M 234.29166666666666 258.42766563796994 L 234.29166666666666 258.42766563796994 L 244.29166666666666 258.42766563796994 L 244.29166666666666 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 234.29166666666666 258.42766563796994 L 234.29166666666666 258.42766563796994 L 244.29166666666666 258.42766563796994 L 244.29166666666666 258.42766563796994 Z"
                                                        pathFrom="M 234.29166666666666 258.42766563796994 L 234.29166666666666 258.42766563796994 L 244.29166666666666 258.42766563796994 L 244.29166666666666 258.42766563796994 L 244.29166666666666 258.42766563796994 L 244.29166666666666 258.42766563796994 L 244.29166666666666 258.42766563796994 L 234.29166666666666 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="264.2083333333333" j="8"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1427"
                                                        d="M 264.2083333333333 258.42766563796994 L 264.2083333333333 258.42766563796994 L 274.2083333333333 258.42766563796994 L 274.2083333333333 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 264.2083333333333 258.42766563796994 L 264.2083333333333 258.42766563796994 L 274.2083333333333 258.42766563796994 L 274.2083333333333 258.42766563796994 Z"
                                                        pathFrom="M 264.2083333333333 258.42766563796994 L 264.2083333333333 258.42766563796994 L 274.2083333333333 258.42766563796994 L 274.2083333333333 258.42766563796994 L 274.2083333333333 258.42766563796994 L 274.2083333333333 258.42766563796994 L 274.2083333333333 258.42766563796994 L 264.2083333333333 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="294.125" j="9" val="0"
                                                        barHeight="0" barWidth="10">
                                                    </path>
                                                    <path id="SvgjsPath1429"
                                                        d="M 294.125 258.42766563796994 L 294.125 258.42766563796994 L 304.125 258.42766563796994 L 304.125 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 294.125 258.42766563796994 L 294.125 258.42766563796994 L 304.125 258.42766563796994 L 304.125 258.42766563796994 Z"
                                                        pathFrom="M 294.125 258.42766563796994 L 294.125 258.42766563796994 L 304.125 258.42766563796994 L 304.125 258.42766563796994 L 304.125 258.42766563796994 L 304.125 258.42766563796994 L 304.125 258.42766563796994 L 294.125 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="324.0416666666667" j="10"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1431"
                                                        d="M 324.0416666666667 258.42766563796994 L 324.0416666666667 258.42766563796994 L 334.0416666666667 258.42766563796994 L 334.0416666666667 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 324.0416666666667 258.42766563796994 L 324.0416666666667 258.42766563796994 L 334.0416666666667 258.42766563796994 L 334.0416666666667 258.42766563796994 Z"
                                                        pathFrom="M 324.0416666666667 258.42766563796994 L 324.0416666666667 258.42766563796994 L 334.0416666666667 258.42766563796994 L 334.0416666666667 258.42766563796994 L 334.0416666666667 258.42766563796994 L 334.0416666666667 258.42766563796994 L 334.0416666666667 258.42766563796994 L 324.0416666666667 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="353.95833333333337" j="11"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <g id="SvgjsG1406" class="apexcharts-bar-goals-markers">
                                                        <g id="SvgjsG1408" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1410" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1412" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1414" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1416" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1418" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1420" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1422" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1424" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1426" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1428" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1430" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1407"
                                                        class="apexcharts-bar-shadows apexcharts-hidden-element-shown">
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1432" class="apexcharts-series" rel="2"
                                                    seriesName="Pending" data:realIndex="1">
                                                    <path id="SvgjsPath1437"
                                                        d="M 4.958333333333334 258.42766563796994 L 4.958333333333334 258.42766563796994 L 14.958333333333334 258.42766563796994 L 14.958333333333334 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 4.958333333333334 258.42766563796994 L 4.958333333333334 258.42766563796994 L 14.958333333333334 258.42766563796994 L 14.958333333333334 258.42766563796994 Z"
                                                        pathFrom="M 4.958333333333334 258.42766563796994 L 4.958333333333334 258.42766563796994 L 14.958333333333334 258.42766563796994 L 14.958333333333334 258.42766563796994 L 14.958333333333334 258.42766563796994 L 14.958333333333334 258.42766563796994 L 14.958333333333334 258.42766563796994 L 4.958333333333334 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="34.875" j="0" val="0"
                                                        barHeight="0" barWidth="10">
                                                    </path>
                                                    <path id="SvgjsPath1439"
                                                        d="M 34.875 258.42766563796994 L 34.875 258.42766563796994 L 44.875 258.42766563796994 L 44.875 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 34.875 258.42766563796994 L 34.875 258.42766563796994 L 44.875 258.42766563796994 L 44.875 258.42766563796994 Z"
                                                        pathFrom="M 34.875 258.42766563796994 L 34.875 258.42766563796994 L 44.875 258.42766563796994 L 44.875 258.42766563796994 L 44.875 258.42766563796994 L 44.875 258.42766563796994 L 44.875 258.42766563796994 L 34.875 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="64.79166666666667" j="1"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1441"
                                                        d="M 64.79166666666667 258.42766563796994 L 64.79166666666667 258.42766563796994 L 74.79166666666667 258.42766563796994 L 74.79166666666667 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 64.79166666666667 258.42766563796994 L 64.79166666666667 258.42766563796994 L 74.79166666666667 258.42766563796994 L 74.79166666666667 258.42766563796994 Z"
                                                        pathFrom="M 64.79166666666667 258.42766563796994 L 64.79166666666667 258.42766563796994 L 74.79166666666667 258.42766563796994 L 74.79166666666667 258.42766563796994 L 74.79166666666667 258.42766563796994 L 74.79166666666667 258.42766563796994 L 74.79166666666667 258.42766563796994 L 64.79166666666667 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="94.70833333333334" j="2"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1443"
                                                        d="M 94.70833333333334 258.42766563796994 L 94.70833333333334 258.42766563796994 L 104.70833333333334 258.42766563796994 L 104.70833333333334 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 94.70833333333334 258.42766563796994 L 94.70833333333334 258.42766563796994 L 104.70833333333334 258.42766563796994 L 104.70833333333334 258.42766563796994 Z"
                                                        pathFrom="M 94.70833333333334 258.42766563796994 L 94.70833333333334 258.42766563796994 L 104.70833333333334 258.42766563796994 L 104.70833333333334 258.42766563796994 L 104.70833333333334 258.42766563796994 L 104.70833333333334 258.42766563796994 L 104.70833333333334 258.42766563796994 L 94.70833333333334 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="124.62500000000001" j="3"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1445"
                                                        d="M 124.62500000000001 258.42766563796994 L 124.62500000000001 258.42766563796994 L 134.625 258.42766563796994 L 134.625 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 124.62500000000001 258.42766563796994 L 124.62500000000001 258.42766563796994 L 134.625 258.42766563796994 L 134.625 258.42766563796994 Z"
                                                        pathFrom="M 124.62500000000001 258.42766563796994 L 124.62500000000001 258.42766563796994 L 134.625 258.42766563796994 L 134.625 258.42766563796994 L 134.625 258.42766563796994 L 134.625 258.42766563796994 L 134.625 258.42766563796994 L 124.62500000000001 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="154.54166666666669" j="4"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1447"
                                                        d="M 154.54166666666669 258.42766563796994 L 154.54166666666669 6.258617117947973 L 164.54166666666669 6.258617117947973 L 164.54166666666669 258.42766563796994 Z"
                                                        fill="rgba(255,165,0,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 154.54166666666669 258.42766563796994 L 154.54166666666669 6.258617117947973 L 164.54166666666669 6.258617117947973 L 164.54166666666669 258.42766563796994 Z"
                                                        pathFrom="M 154.54166666666669 258.42766563796994 L 154.54166666666669 258.42766563796994 L 164.54166666666669 258.42766563796994 L 164.54166666666669 258.42766563796994 L 164.54166666666669 258.42766563796994 L 164.54166666666669 258.42766563796994 L 164.54166666666669 258.42766563796994 L 154.54166666666669 258.42766563796994 Z"
                                                        cy="6.257617117947973" cx="184.45833333333334" j="5"
                                                        val="273.22" barHeight="252.169048520022" barWidth="10">
                                                    </path>
                                                    <path id="SvgjsPath1449"
                                                        d="M 184.45833333333334 258.42766563796994 L 184.45833333333334 66.342816878776 L 194.45833333333334 66.342816878776 L 194.45833333333334 258.42766563796994 Z"
                                                        fill="rgba(255,165,0,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 184.45833333333334 258.42766563796994 L 184.45833333333334 66.342816878776 L 194.45833333333334 66.342816878776 L 194.45833333333334 258.42766563796994 Z"
                                                        pathFrom="M 184.45833333333334 258.42766563796994 L 184.45833333333334 258.42766563796994 L 194.45833333333334 258.42766563796994 L 194.45833333333334 258.42766563796994 L 194.45833333333334 258.42766563796994 L 194.45833333333334 258.42766563796994 L 194.45833333333334 258.42766563796994 L 184.45833333333334 258.42766563796994 Z"
                                                        cy="66.341816878776" cx="214.375" j="6" val="208.12"
                                                        barHeight="192.08484875919396" barWidth="10"></path>
                                                    <path id="SvgjsPath1451"
                                                        d="M 214.375 258.42766563796994 L 214.375 258.42766563796994 L 224.375 258.42766563796994 L 224.375 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 214.375 258.42766563796994 L 214.375 258.42766563796994 L 224.375 258.42766563796994 L 224.375 258.42766563796994 Z"
                                                        pathFrom="M 214.375 258.42766563796994 L 214.375 258.42766563796994 L 224.375 258.42766563796994 L 224.375 258.42766563796994 L 224.375 258.42766563796994 L 224.375 258.42766563796994 L 224.375 258.42766563796994 L 214.375 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="244.29166666666666" j="7"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1453"
                                                        d="M 244.29166666666666 258.42766563796994 L 244.29166666666666 258.42766563796994 L 254.29166666666666 258.42766563796994 L 254.29166666666666 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 244.29166666666666 258.42766563796994 L 244.29166666666666 258.42766563796994 L 254.29166666666666 258.42766563796994 L 254.29166666666666 258.42766563796994 Z"
                                                        pathFrom="M 244.29166666666666 258.42766563796994 L 244.29166666666666 258.42766563796994 L 254.29166666666666 258.42766563796994 L 254.29166666666666 258.42766563796994 L 254.29166666666666 258.42766563796994 L 254.29166666666666 258.42766563796994 L 254.29166666666666 258.42766563796994 L 244.29166666666666 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="274.2083333333333" j="8"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1455"
                                                        d="M 274.2083333333333 258.42766563796994 L 274.2083333333333 258.42766563796994 L 284.2083333333333 258.42766563796994 L 284.2083333333333 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 274.2083333333333 258.42766563796994 L 274.2083333333333 258.42766563796994 L 284.2083333333333 258.42766563796994 L 284.2083333333333 258.42766563796994 Z"
                                                        pathFrom="M 274.2083333333333 258.42766563796994 L 274.2083333333333 258.42766563796994 L 284.2083333333333 258.42766563796994 L 284.2083333333333 258.42766563796994 L 284.2083333333333 258.42766563796994 L 284.2083333333333 258.42766563796994 L 284.2083333333333 258.42766563796994 L 274.2083333333333 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="304.125" j="9" val="0"
                                                        barHeight="0" barWidth="10">
                                                    </path>
                                                    <path id="SvgjsPath1457"
                                                        d="M 304.125 258.42766563796994 L 304.125 258.42766563796994 L 314.125 258.42766563796994 L 314.125 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 304.125 258.42766563796994 L 304.125 258.42766563796994 L 314.125 258.42766563796994 L 314.125 258.42766563796994 Z"
                                                        pathFrom="M 304.125 258.42766563796994 L 304.125 258.42766563796994 L 314.125 258.42766563796994 L 314.125 258.42766563796994 L 314.125 258.42766563796994 L 314.125 258.42766563796994 L 314.125 258.42766563796994 L 304.125 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="334.0416666666667" j="10"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1459"
                                                        d="M 334.0416666666667 258.42766563796994 L 334.0416666666667 258.42766563796994 L 344.0416666666667 258.42766563796994 L 344.0416666666667 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 334.0416666666667 258.42766563796994 L 334.0416666666667 258.42766563796994 L 344.0416666666667 258.42766563796994 L 344.0416666666667 258.42766563796994 Z"
                                                        pathFrom="M 334.0416666666667 258.42766563796994 L 334.0416666666667 258.42766563796994 L 344.0416666666667 258.42766563796994 L 344.0416666666667 258.42766563796994 L 344.0416666666667 258.42766563796994 L 344.0416666666667 258.42766563796994 L 344.0416666666667 258.42766563796994 L 334.0416666666667 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="363.95833333333337" j="11"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <g id="SvgjsG1434" class="apexcharts-bar-goals-markers">
                                                        <g id="SvgjsG1436" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1438" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1440" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1442" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1444" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1446" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1448" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1450" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1452" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1454" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1456" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1458" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1435"
                                                        class="apexcharts-bar-shadows apexcharts-hidden-element-shown">
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1460" class="apexcharts-series" rel="3"
                                                    seriesName="Delivered" data:realIndex="2">
                                                    <path id="SvgjsPath1465"
                                                        d="M 14.958333333333334 258.42766563796994 L 14.958333333333334 258.42766563796994 L 24.958333333333336 258.42766563796994 L 24.958333333333336 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="2"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 14.958333333333334 258.42766563796994 L 14.958333333333334 258.42766563796994 L 24.958333333333336 258.42766563796994 L 24.958333333333336 258.42766563796994 Z"
                                                        pathFrom="M 14.958333333333334 258.42766563796994 L 14.958333333333334 258.42766563796994 L 24.958333333333336 258.42766563796994 L 24.958333333333336 258.42766563796994 L 24.958333333333336 258.42766563796994 L 24.958333333333336 258.42766563796994 L 24.958333333333336 258.42766563796994 L 14.958333333333334 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="44.875" j="0" val="0"
                                                        barHeight="0" barWidth="10">
                                                    </path>
                                                    <path id="SvgjsPath1467"
                                                        d="M 44.875 258.42766563796994 L 44.875 258.42766563796994 L 54.875 258.42766563796994 L 54.875 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="2"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 44.875 258.42766563796994 L 44.875 258.42766563796994 L 54.875 258.42766563796994 L 54.875 258.42766563796994 Z"
                                                        pathFrom="M 44.875 258.42766563796994 L 44.875 258.42766563796994 L 54.875 258.42766563796994 L 54.875 258.42766563796994 L 54.875 258.42766563796994 L 54.875 258.42766563796994 L 54.875 258.42766563796994 L 44.875 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="74.79166666666667" j="1"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1469"
                                                        d="M 74.79166666666667 258.42766563796994 L 74.79166666666667 258.42766563796994 L 84.79166666666667 258.42766563796994 L 84.79166666666667 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="2"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 74.79166666666667 258.42766563796994 L 74.79166666666667 258.42766563796994 L 84.79166666666667 258.42766563796994 L 84.79166666666667 258.42766563796994 Z"
                                                        pathFrom="M 74.79166666666667 258.42766563796994 L 74.79166666666667 258.42766563796994 L 84.79166666666667 258.42766563796994 L 84.79166666666667 258.42766563796994 L 84.79166666666667 258.42766563796994 L 84.79166666666667 258.42766563796994 L 84.79166666666667 258.42766563796994 L 74.79166666666667 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="104.70833333333334" j="2"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1471"
                                                        d="M 104.70833333333334 258.42766563796994 L 104.70833333333334 258.42766563796994 L 114.70833333333334 258.42766563796994 L 114.70833333333334 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="2"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 104.70833333333334 258.42766563796994 L 104.70833333333334 258.42766563796994 L 114.70833333333334 258.42766563796994 L 114.70833333333334 258.42766563796994 Z"
                                                        pathFrom="M 104.70833333333334 258.42766563796994 L 104.70833333333334 258.42766563796994 L 114.70833333333334 258.42766563796994 L 114.70833333333334 258.42766563796994 L 114.70833333333334 258.42766563796994 L 114.70833333333334 258.42766563796994 L 114.70833333333334 258.42766563796994 L 104.70833333333334 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="134.625" j="3" val="0"
                                                        barHeight="0" barWidth="10">
                                                    </path>
                                                    <path id="SvgjsPath1473"
                                                        d="M 134.625 258.42766563796994 L 134.625 258.42766563796994 L 144.625 258.42766563796994 L 144.625 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="2"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 134.625 258.42766563796994 L 134.625 258.42766563796994 L 144.625 258.42766563796994 L 144.625 258.42766563796994 Z"
                                                        pathFrom="M 134.625 258.42766563796994 L 134.625 258.42766563796994 L 144.625 258.42766563796994 L 144.625 258.42766563796994 L 144.625 258.42766563796994 L 144.625 258.42766563796994 L 144.625 258.42766563796994 L 134.625 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="164.54166666666669" j="4"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1475"
                                                        d="M 164.54166666666669 258.42766563796994 L 164.54166666666669 258.42766563796994 L 174.54166666666669 258.42766563796994 L 174.54166666666669 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="2"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 164.54166666666669 258.42766563796994 L 164.54166666666669 258.42766563796994 L 174.54166666666669 258.42766563796994 L 174.54166666666669 258.42766563796994 Z"
                                                        pathFrom="M 164.54166666666669 258.42766563796994 L 164.54166666666669 258.42766563796994 L 174.54166666666669 258.42766563796994 L 174.54166666666669 258.42766563796994 L 174.54166666666669 258.42766563796994 L 174.54166666666669 258.42766563796994 L 174.54166666666669 258.42766563796994 L 164.54166666666669 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="194.45833333333334" j="5"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1477"
                                                        d="M 194.45833333333334 258.42766563796994 L 194.45833333333334 258.42766563796994 L 204.45833333333334 258.42766563796994 L 204.45833333333334 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="2"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 194.45833333333334 258.42766563796994 L 194.45833333333334 258.42766563796994 L 204.45833333333334 258.42766563796994 L 204.45833333333334 258.42766563796994 Z"
                                                        pathFrom="M 194.45833333333334 258.42766563796994 L 194.45833333333334 258.42766563796994 L 204.45833333333334 258.42766563796994 L 204.45833333333334 258.42766563796994 L 204.45833333333334 258.42766563796994 L 204.45833333333334 258.42766563796994 L 204.45833333333334 258.42766563796994 L 194.45833333333334 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="224.375" j="6" val="0"
                                                        barHeight="0" barWidth="10">
                                                    </path>
                                                    <path id="SvgjsPath1479"
                                                        d="M 224.375 258.42766563796994 L 224.375 258.42766563796994 L 234.375 258.42766563796994 L 234.375 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="2"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 224.375 258.42766563796994 L 224.375 258.42766563796994 L 234.375 258.42766563796994 L 234.375 258.42766563796994 Z"
                                                        pathFrom="M 224.375 258.42766563796994 L 224.375 258.42766563796994 L 234.375 258.42766563796994 L 234.375 258.42766563796994 L 234.375 258.42766563796994 L 234.375 258.42766563796994 L 234.375 258.42766563796994 L 224.375 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="254.29166666666666" j="7"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1481"
                                                        d="M 254.29166666666666 258.42766563796994 L 254.29166666666666 258.42766563796994 L 264.29166666666663 258.42766563796994 L 264.29166666666663 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="2"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 254.29166666666666 258.42766563796994 L 254.29166666666666 258.42766563796994 L 264.29166666666663 258.42766563796994 L 264.29166666666663 258.42766563796994 Z"
                                                        pathFrom="M 254.29166666666666 258.42766563796994 L 254.29166666666666 258.42766563796994 L 264.29166666666663 258.42766563796994 L 264.29166666666663 258.42766563796994 L 264.29166666666663 258.42766563796994 L 264.29166666666663 258.42766563796994 L 264.29166666666663 258.42766563796994 L 254.29166666666666 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="284.2083333333333" j="8"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1483"
                                                        d="M 284.2083333333333 258.42766563796994 L 284.2083333333333 258.42766563796994 L 294.2083333333333 258.42766563796994 L 294.2083333333333 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="2"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 284.2083333333333 258.42766563796994 L 284.2083333333333 258.42766563796994 L 294.2083333333333 258.42766563796994 L 294.2083333333333 258.42766563796994 Z"
                                                        pathFrom="M 284.2083333333333 258.42766563796994 L 284.2083333333333 258.42766563796994 L 294.2083333333333 258.42766563796994 L 294.2083333333333 258.42766563796994 L 294.2083333333333 258.42766563796994 L 294.2083333333333 258.42766563796994 L 294.2083333333333 258.42766563796994 L 284.2083333333333 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="314.125" j="9" val="0"
                                                        barHeight="0" barWidth="10">
                                                    </path>
                                                    <path id="SvgjsPath1485"
                                                        d="M 314.125 258.42766563796994 L 314.125 258.42766563796994 L 324.125 258.42766563796994 L 324.125 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="2"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 314.125 258.42766563796994 L 314.125 258.42766563796994 L 324.125 258.42766563796994 L 324.125 258.42766563796994 Z"
                                                        pathFrom="M 314.125 258.42766563796994 L 314.125 258.42766563796994 L 324.125 258.42766563796994 L 324.125 258.42766563796994 L 324.125 258.42766563796994 L 324.125 258.42766563796994 L 324.125 258.42766563796994 L 314.125 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="344.0416666666667" j="10"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1487"
                                                        d="M 344.0416666666667 258.42766563796994 L 344.0416666666667 258.42766563796994 L 354.0416666666667 258.42766563796994 L 354.0416666666667 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="2"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 344.0416666666667 258.42766563796994 L 344.0416666666667 258.42766563796994 L 354.0416666666667 258.42766563796994 L 354.0416666666667 258.42766563796994 Z"
                                                        pathFrom="M 344.0416666666667 258.42766563796994 L 344.0416666666667 258.42766563796994 L 354.0416666666667 258.42766563796994 L 354.0416666666667 258.42766563796994 L 354.0416666666667 258.42766563796994 L 354.0416666666667 258.42766563796994 L 354.0416666666667 258.42766563796994 L 344.0416666666667 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="373.95833333333337" j="11"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <g id="SvgjsG1462" class="apexcharts-bar-goals-markers">
                                                        <g id="SvgjsG1464" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1466" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1468" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1470" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1472" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1474" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1476" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1478" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1480" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1482" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1484" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1486" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1463"
                                                        class="apexcharts-bar-shadows apexcharts-hidden-element-shown">
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1488" class="apexcharts-series" rel="4"
                                                    seriesName="Canceled" data:realIndex="3">
                                                    <path id="SvgjsPath1493"
                                                        d="M 24.958333333333336 258.42766563796994 L 24.958333333333336 258.42766563796994 L 34.958333333333336 258.42766563796994 L 34.958333333333336 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="3"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 24.958333333333336 258.42766563796994 L 24.958333333333336 258.42766563796994 L 34.958333333333336 258.42766563796994 L 34.958333333333336 258.42766563796994 Z"
                                                        pathFrom="M 24.958333333333336 258.42766563796994 L 24.958333333333336 258.42766563796994 L 34.958333333333336 258.42766563796994 L 34.958333333333336 258.42766563796994 L 34.958333333333336 258.42766563796994 L 34.958333333333336 258.42766563796994 L 34.958333333333336 258.42766563796994 L 24.958333333333336 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="54.875" j="0" val="0"
                                                        barHeight="0" barWidth="10">
                                                    </path>
                                                    <path id="SvgjsPath1495"
                                                        d="M 54.875 258.42766563796994 L 54.875 258.42766563796994 L 64.875 258.42766563796994 L 64.875 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="3"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 54.875 258.42766563796994 L 54.875 258.42766563796994 L 64.875 258.42766563796994 L 64.875 258.42766563796994 Z"
                                                        pathFrom="M 54.875 258.42766563796994 L 54.875 258.42766563796994 L 64.875 258.42766563796994 L 64.875 258.42766563796994 L 64.875 258.42766563796994 L 64.875 258.42766563796994 L 64.875 258.42766563796994 L 54.875 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="84.79166666666667" j="1"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1497"
                                                        d="M 84.79166666666667 258.42766563796994 L 84.79166666666667 258.42766563796994 L 94.79166666666667 258.42766563796994 L 94.79166666666667 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="3"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 84.79166666666667 258.42766563796994 L 84.79166666666667 258.42766563796994 L 94.79166666666667 258.42766563796994 L 94.79166666666667 258.42766563796994 Z"
                                                        pathFrom="M 84.79166666666667 258.42766563796994 L 84.79166666666667 258.42766563796994 L 94.79166666666667 258.42766563796994 L 94.79166666666667 258.42766563796994 L 94.79166666666667 258.42766563796994 L 94.79166666666667 258.42766563796994 L 94.79166666666667 258.42766563796994 L 84.79166666666667 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="114.70833333333334" j="2"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1499"
                                                        d="M 114.70833333333334 258.42766563796994 L 114.70833333333334 258.42766563796994 L 124.70833333333334 258.42766563796994 L 124.70833333333334 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="3"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 114.70833333333334 258.42766563796994 L 114.70833333333334 258.42766563796994 L 124.70833333333334 258.42766563796994 L 124.70833333333334 258.42766563796994 Z"
                                                        pathFrom="M 114.70833333333334 258.42766563796994 L 114.70833333333334 258.42766563796994 L 124.70833333333334 258.42766563796994 L 124.70833333333334 258.42766563796994 L 124.70833333333334 258.42766563796994 L 124.70833333333334 258.42766563796994 L 124.70833333333334 258.42766563796994 L 114.70833333333334 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="144.625" j="3" val="0"
                                                        barHeight="0" barWidth="10">
                                                    </path>
                                                    <path id="SvgjsPath1501"
                                                        d="M 144.625 258.42766563796994 L 144.625 258.42766563796994 L 154.625 258.42766563796994 L 154.625 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="3"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 144.625 258.42766563796994 L 144.625 258.42766563796994 L 154.625 258.42766563796994 L 154.625 258.42766563796994 Z"
                                                        pathFrom="M 144.625 258.42766563796994 L 144.625 258.42766563796994 L 154.625 258.42766563796994 L 154.625 258.42766563796994 L 154.625 258.42766563796994 L 154.625 258.42766563796994 L 154.625 258.42766563796994 L 144.625 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="174.54166666666669" j="4"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1503"
                                                        d="M 174.54166666666669 258.42766563796994 L 174.54166666666669 258.42766563796994 L 184.54166666666669 258.42766563796994 L 184.54166666666669 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="3"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 174.54166666666669 258.42766563796994 L 174.54166666666669 258.42766563796994 L 184.54166666666669 258.42766563796994 L 184.54166666666669 258.42766563796994 Z"
                                                        pathFrom="M 174.54166666666669 258.42766563796994 L 174.54166666666669 258.42766563796994 L 184.54166666666669 258.42766563796994 L 184.54166666666669 258.42766563796994 L 184.54166666666669 258.42766563796994 L 184.54166666666669 258.42766563796994 L 184.54166666666669 258.42766563796994 L 174.54166666666669 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="204.45833333333334" j="5"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1505"
                                                        d="M 204.45833333333334 258.42766563796994 L 204.45833333333334 258.42766563796994 L 214.45833333333334 258.42766563796994 L 214.45833333333334 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="3"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 204.45833333333334 258.42766563796994 L 204.45833333333334 258.42766563796994 L 214.45833333333334 258.42766563796994 L 214.45833333333334 258.42766563796994 Z"
                                                        pathFrom="M 204.45833333333334 258.42766563796994 L 204.45833333333334 258.42766563796994 L 214.45833333333334 258.42766563796994 L 214.45833333333334 258.42766563796994 L 214.45833333333334 258.42766563796994 L 214.45833333333334 258.42766563796994 L 214.45833333333334 258.42766563796994 L 204.45833333333334 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="234.375" j="6" val="0"
                                                        barHeight="0" barWidth="10">
                                                    </path>
                                                    <path id="SvgjsPath1507"
                                                        d="M 234.375 258.42766563796994 L 234.375 258.42766563796994 L 244.375 258.42766563796994 L 244.375 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="3"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 234.375 258.42766563796994 L 234.375 258.42766563796994 L 244.375 258.42766563796994 L 244.375 258.42766563796994 Z"
                                                        pathFrom="M 234.375 258.42766563796994 L 234.375 258.42766563796994 L 244.375 258.42766563796994 L 244.375 258.42766563796994 L 244.375 258.42766563796994 L 244.375 258.42766563796994 L 244.375 258.42766563796994 L 234.375 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="264.29166666666663" j="7"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1509"
                                                        d="M 264.29166666666663 258.42766563796994 L 264.29166666666663 258.42766563796994 L 274.29166666666663 258.42766563796994 L 274.29166666666663 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="3"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 264.29166666666663 258.42766563796994 L 264.29166666666663 258.42766563796994 L 274.29166666666663 258.42766563796994 L 274.29166666666663 258.42766563796994 Z"
                                                        pathFrom="M 264.29166666666663 258.42766563796994 L 264.29166666666663 258.42766563796994 L 274.29166666666663 258.42766563796994 L 274.29166666666663 258.42766563796994 L 274.29166666666663 258.42766563796994 L 274.29166666666663 258.42766563796994 L 274.29166666666663 258.42766563796994 L 264.29166666666663 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="294.2083333333333" j="8"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1511"
                                                        d="M 294.2083333333333 258.42766563796994 L 294.2083333333333 258.42766563796994 L 304.2083333333333 258.42766563796994 L 304.2083333333333 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="3"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 294.2083333333333 258.42766563796994 L 294.2083333333333 258.42766563796994 L 304.2083333333333 258.42766563796994 L 304.2083333333333 258.42766563796994 Z"
                                                        pathFrom="M 294.2083333333333 258.42766563796994 L 294.2083333333333 258.42766563796994 L 304.2083333333333 258.42766563796994 L 304.2083333333333 258.42766563796994 L 304.2083333333333 258.42766563796994 L 304.2083333333333 258.42766563796994 L 304.2083333333333 258.42766563796994 L 294.2083333333333 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="324.125" j="9" val="0"
                                                        barHeight="0" barWidth="10">
                                                    </path>
                                                    <path id="SvgjsPath1513"
                                                        d="M 324.125 258.42766563796994 L 324.125 258.42766563796994 L 334.125 258.42766563796994 L 334.125 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="3"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 324.125 258.42766563796994 L 324.125 258.42766563796994 L 334.125 258.42766563796994 L 334.125 258.42766563796994 Z"
                                                        pathFrom="M 324.125 258.42766563796994 L 324.125 258.42766563796994 L 334.125 258.42766563796994 L 334.125 258.42766563796994 L 334.125 258.42766563796994 L 334.125 258.42766563796994 L 334.125 258.42766563796994 L 324.125 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="354.0416666666667" j="10"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <path id="SvgjsPath1515"
                                                        d="M 354.0416666666667 258.42766563796994 L 354.0416666666667 258.42766563796994 L 364.0416666666667 258.42766563796994 L 364.0416666666667 258.42766563796994 Z"
                                                        fill="none" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="3"
                                                        clip-path="url(#gridRectMasky6ad2xe9)"
                                                        pathTo="M 354.0416666666667 258.42766563796994 L 354.0416666666667 258.42766563796994 L 364.0416666666667 258.42766563796994 L 364.0416666666667 258.42766563796994 Z"
                                                        pathFrom="M 354.0416666666667 258.42766563796994 L 354.0416666666667 258.42766563796994 L 364.0416666666667 258.42766563796994 L 364.0416666666667 258.42766563796994 L 364.0416666666667 258.42766563796994 L 364.0416666666667 258.42766563796994 L 364.0416666666667 258.42766563796994 L 354.0416666666667 258.42766563796994 Z"
                                                        cy="258.42666563796996" cx="383.95833333333337" j="11"
                                                        val="0" barHeight="0" barWidth="10"></path>
                                                    <g id="SvgjsG1490" class="apexcharts-bar-goals-markers">
                                                        <g id="SvgjsG1492" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1494" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1496" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1498" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1500" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1502" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1504" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1506" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1508" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1510" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1512" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                        <g id="SvgjsG1514" className="apexcharts-bar-goals-groups"
                                                            class="apexcharts-hidden-element-shown"
                                                            clip-path="url(#gridRectMarkerMasky6ad2xe9)">
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1491"
                                                        class="apexcharts-bar-shadows apexcharts-hidden-element-shown">
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1405"
                                                    class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                    data:realIndex="0"></g>
                                                <g id="SvgjsG1433"
                                                    class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                    data:realIndex="1"></g>
                                                <g id="SvgjsG1461"
                                                    class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                    data:realIndex="2"></g>
                                                <g id="SvgjsG1489"
                                                    class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                    data:realIndex="3"></g>
                                            </g>
                                            <line id="SvgjsLine1540" x1="0" y1="0" x2="359"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine1541" x1="0" y1="0" x2="359"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1542" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1543" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"><text id="SvgjsText1545"
                                                        font-family="Helvetica, Arial, sans-serif" x="14.958333333333334"
                                                        y="287.42666563796996" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#212529" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1546">Jan</tspan>
                                                        <title>Jan</title>
                                                    </text><text id="SvgjsText1548"
                                                        font-family="Helvetica, Arial, sans-serif" x="44.875"
                                                        y="287.42666563796996" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#212529" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1549">Feb</tspan>
                                                        <title>Feb</title>
                                                    </text><text id="SvgjsText1551"
                                                        font-family="Helvetica, Arial, sans-serif" x="74.79166666666667"
                                                        y="287.42666563796996" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#212529" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1552">Mar</tspan>
                                                        <title>Mar</title>
                                                    </text><text id="SvgjsText1554"
                                                        font-family="Helvetica, Arial, sans-serif" x="104.70833333333334"
                                                        y="287.42666563796996" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#212529" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1555">Apr</tspan>
                                                        <title>Apr</title>
                                                    </text><text id="SvgjsText1557"
                                                        font-family="Helvetica, Arial, sans-serif" x="134.625"
                                                        y="287.42666563796996" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#212529" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1558">May</tspan>
                                                        <title>May</title>
                                                    </text><text id="SvgjsText1560"
                                                        font-family="Helvetica, Arial, sans-serif" x="164.54166666666666"
                                                        y="287.42666563796996" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#212529" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1561">Jun</tspan>
                                                        <title>Jun</title>
                                                    </text><text id="SvgjsText1563"
                                                        font-family="Helvetica, Arial, sans-serif" x="194.45833333333331"
                                                        y="287.42666563796996" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#212529" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1564">Jul</tspan>
                                                        <title>Jul</title>
                                                    </text><text id="SvgjsText1566"
                                                        font-family="Helvetica, Arial, sans-serif" x="224.37499999999997"
                                                        y="287.42666563796996" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#212529" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1567">Aug</tspan>
                                                        <title>Aug</title>
                                                    </text><text id="SvgjsText1569"
                                                        font-family="Helvetica, Arial, sans-serif" x="254.29166666666666"
                                                        y="287.42666563796996" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#212529" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1570">Sep</tspan>
                                                        <title>Sep</title>
                                                    </text><text id="SvgjsText1572"
                                                        font-family="Helvetica, Arial, sans-serif" x="284.20833333333337"
                                                        y="287.42666563796996" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#212529" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1573">Oct</tspan>
                                                        <title>Oct</title>
                                                    </text><text id="SvgjsText1575"
                                                        font-family="Helvetica, Arial, sans-serif" x="314.12500000000006"
                                                        y="287.42666563796996" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#212529" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1576">Nov</tspan>
                                                        <title>Nov</title>
                                                    </text><text id="SvgjsText1578"
                                                        font-family="Helvetica, Arial, sans-serif" x="344.04166666666674"
                                                        y="287.42666563796996" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#212529" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1579">Dec</tspan>
                                                        <title>Dec</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1582" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1583" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1584" class="apexcharts-point-annotations"></g>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                            <span class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(35, 119, 252);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                </div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                </div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                            <span class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(255, 165, 0);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                </div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                </div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 3;">
                                            <span class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(7, 132, 7);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                </div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                </div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 4;">
                                            <span class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(255, 0, 0);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                </div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                </div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tf-section mb-30">

                        <div class="wg-box">
                            <div class="flex items-center justify-between">
                                <h5>Recent orders</h5>
                                <div class="dropdown default">
                                    <a class="btn btn-secondary dropdown-toggle" href="#">
                                        <span class="view-all">View all</span>
                                    </a>
                                </div>
                            </div>
                            <div class="wg-table table-all-user">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 80px">OrderNo</th>
                                                <th>Name</th>
                                                <th class="text-center">Phone</th>
                                                <th class="text-center">Subtotal</th>
                                                <th class="text-center">Tax</th>
                                                <th class="text-center">Total</th>

                                                <th class="text-center">Status</th>
                                                <th class="text-center">Order Date</th>
                                                <th class="text-center">Total Items</th>
                                                <th class="text-center">Delivered On</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-center">Divyansh Kumar</td>
                                                <td class="text-center">1234567891</td>
                                                <td class="text-center">$172.00</td>
                                                <td class="text-center">$36.12</td>
                                                <td class="text-center">$208.12</td>

                                                <td class="text-center">ordered</td>
                                                <td class="text-center">2024-07-11 00:54:14</td>
                                                <td class="text-center">2</td>
                                                <td></td>
                                                <td class="text-center">
                                                    <a href="#">
                                                        <div class="list-icon-function view-icon">
                                                            <div class="item eye">
                                                                <i class="icon-eye"></i>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


            <div class="bottom-page">
                <div class="body-text">Copyright © 2024 SurfsideMedia</div>
            </div>
        </div>

    </div>
@endsection
