@extends('layouts.app')

@section('content')
<style>
    .main {
        position: relative;
        text-align: center;
    }
    .img_body {
        width: 100%;
        height: 100%;
        object-fit: cover;
        inset: 0px;
        vertical-align: middle;
        border-style: none;
    }
    .homepage_content{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        height: 150px;
    }
    .input_search {
    }
    .input_start_point:hover .startpoint_list{
        display: block;
    } 
    .dropdown_content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
    }


</style>
<div class="main">
    <h1>Hello {{ $name }}. Phone: {{ $phone }}</h1>
    <img class="img_body" src="https:////static.vexere.com/production/banners/330/140k_leader-board_1920x_jpg.jpg" alt="">
    <div class="homepage_content">
        <h2>Tieu de</h2>
        
        <form action="" method="POST">
            @csrf
            <div class="homepage_search">
                <div class="input_search_group">
                    <div class="input_search input_start_point">
                        <input name="startPoint" type="search" class="form-control rounded" placeholder="Điểm đi" aria-label="Điểm đi"
                        aria-describedby="search-addon" />
                        <ul class="dropdown_content startpoint_list">
                            <li>abcs</li>
                        </ul>
                    </div>
                    <div class="input_search input_end_point">
                        <input name="endPoint" type="search" class="form-control rounded" placeholder="Điểm đến" aria-label="Điểm đến"
                    aria-describedby="search-addon" />
                    </div>
                    <div class="input_search input_destination">
                        <input name="departureDay" type="search" class="form-control rounded" placeholder="Ngày khởi hành" aria-label="Ngày khởi hành"
                    aria-describedby="search-addon" />
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Tìm kiếm</button>
                  </div>
            </div>
        </form>
        
    </div>
    {{-- <div class="homepage_content">
        <h2 class="homepage__Title-bs2n93-3 lnzOcf">Đặt vé dễ dàng, hành trình thuận lợi</h2>
        <div class="homepage__SearchWrapper-bs2n93-4 dbkSRB">
           <div>
              <div class="DesktopSearchWidget2__SearchWidgetContainer-sc-18055jv-8 ewcNyP">
                 <div class="ant-row-flex">
                    <div class="ant-col DesktopSearchWidget2__AreaWrapperCol-sc-18055jv-14 guqEYw ant-col-xs-24 ant-col-md-20">
                       <div class="ant-row-flex">
                          <div class="ant-col DesktopSearchWidget2__InputCol-sc-18055jv-15 DesktopSearchWidget2__FromInputCol-sc-18055jv-16 glDcpS ant-col-xs-24 ant-col-md-9">
                             <div class="DesktopSearchWidget2__SelectWrapper-sc-18055jv-10 jiwoXX">
                                <div class="VXRSelect2__SelectWrapper-tefulz-1 hFpOn">
                                   <input type="text" class="VXRSelect2__Input-tefulz-0 kIHFLr ant-input VXRSelect__input" value="Hà Nội" placeholder="Tỉnh, thành phố nơi đi" data-testid="SearchWidget.from" data-id="SearchWidget.from">
                                   <ul class="VXRSelect2__DropdownWrapper-tefulz-2 cawzQD ant-select-dropdown-menu  ant-select-dropdown-menu-root ant-select-dropdown-menu-vertical">
                                      <li class="ant-select-dropdown-menu-item-group">
                                         <div class="ant-select-dropdown-menu-item-group-title" title="Tỉnh - Thành Phố">Tỉnh - Thành Phố</div>
                                         <ul class="ant-select-dropdown-menu-item-group-list">
                                            <li class="Option__OptionItem-ki12ql-0 bYnKcu ant-select-dropdown-menu-item ">Hà Nội</li>
                                         </ul>
                                      </li>
                                      <li class="ant-select-dropdown-menu-item-group">
                                         <div class="ant-select-dropdown-menu-item-group-title" title="Quận - Huyện">Quận - Huyện</div>
                                         <ul class="ant-select-dropdown-menu-item-group-list">
                                            <li class="Option__OptionItem-ki12ql-0 bYnKcu ant-select-dropdown-menu-item ">Sa Pa</li>
                                         </ul>
                                      </li>
                                   </ul>
                                </div>
                             </div>
                             <div class="DesktopSearchWidget2__Divider-sc-18055jv-7 iQPTej"></div>
                          </div>
                          <div class="ant-col DesktopSearchWidget2__InputCol-sc-18055jv-15 DesktopSearchWidget2__ToInputCol-sc-18055jv-17 jofjjq ant-col-xs-24 ant-col-md-9">
                             <div class="DesktopSearchWidget2__SelectWrapper-sc-18055jv-10 DesktopSearchWidget2__SelectWrapperTo-sc-18055jv-11 kGRRt">
                                <div class="VXRSelect2__SelectWrapper-tefulz-1 hFpOn">
                                   <input type="text" class="VXRSelect2__Input-tefulz-0 kIHFLr ant-input VXRSelect__input" value="Quảng Ninh" placeholder="Tỉnh, thành phố nơi đến" data-testid="SearchWidget.to" data-id="SearchWidget.to">
                                   <ul class="VXRSelect2__DropdownWrapper-tefulz-2 cawzQD ant-select-dropdown-menu  ant-select-dropdown-menu-root ant-select-dropdown-menu-vertical">
                                      <li class="ant-select-dropdown-menu-item-group">
                                         <div class="ant-select-dropdown-menu-item-group-title" title="Tỉnh - Thành Phố">Tỉnh - Thành Phố</div>
                                         <ul class="ant-select-dropdown-menu-item-group-list">
                                            <li class="Option__OptionItem-ki12ql-0 bYnKcu ant-select-dropdown-menu-item ">Hà Nội</li>
                                         </ul>
                                      </li>
                                      <li class="ant-select-dropdown-menu-item-group">
                                         <div class="ant-select-dropdown-menu-item-group-title" title="Quận - Huyện">Quận - Huyện</div>
                                         <ul class="ant-select-dropdown-menu-item-group-list">
                                            <li class="Option__OptionItem-ki12ql-0 bYnKcu ant-select-dropdown-menu-item ">Sa Pa</li>
                                         </ul>
                                      </li>
                                   </ul>
                                </div>
                             </div>
                             <div class="DesktopSearchWidget2__Divider-sc-18055jv-7 iQPTej"></div>
                          </div>
                          <div class="ant-col DesktopSearchWidget2__InputCol-sc-18055jv-15 DesktopSearchWidget2__CalendarCol-sc-18055jv-18 VIFKe ant-col-xs-24 ant-col-md-6">
                             <div class="DesktopSearchWidget2__CalendarInputWrapper-sc-18055jv-12 rimwt">
                                <span class="DesktopSearchWidget2__InputStyled-sc-18055jv-3 hTgVeP ant-input-affix-wrapper ant-input-affix-wrapper-lg">
                                   <span class="ant-input-prefix">
                                      <svg class="DesktopSearchWidget2__IconCalendarStyled-sc-18055jv-2 exjqXt" xmlns="http://www.w3.org/2000/svg" width="18.471" height="20.745" viewBox="0 0 20.471 22.745">
                                         <g fill="#1861c5">
                                            <path d="M18.196 2.275h-1.137V0h-2.274v2.275h-9.1V0H3.412v2.275H2.275A2.264 2.264 0 0 0 .012 4.55L.001 20.472a2.274 2.274 0 0 0 2.275 2.275h15.92a2.274 2.274 0 0 0 2.271-2.276V4.549a2.274 2.274 0 0 0-2.271-2.274zm0 18.2H2.275V7.961h15.921z"></path>
                                            <path d="M13.394 18.954h3.033v-2.148h-3.033v2.148zM8.593 18.954h3.033v-2.148H8.593v2.148zM3.896 18.954h3.033v-2.148H3.896zM13.394 15.552h3.033v-2.148h-3.033v2.148zM8.593 15.659h3.033v-2.148H8.593v2.148zM6.824 13.511H3.791v2.148h3.033zM13.394 12.257h3.033v-2.148h-3.033v2.148zM8.593 12.257h3.033v-2.148H8.593v2.148zM3.896 12.257h3.033v-2.148H3.896z"></path>
                                         </g>
                                      </svg>
                                   </span>
                                   <input type="text" placeholder="Nhập ngày đi" value="28-04-2021" readonly="" data-testid="SearchWidget.date" data-id="SearchWidget.date" class="ant-input ant-input-lg">
                                </span>
                                <div class="DesktopSearchWidget2__CalendarWrapper-sc-18055jv-13 kGhIAC"></div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="ant-col DesktopSearchWidget2__InputCol-sc-18055jv-15 DesktopSearchWidget2__SearchTicketCol-sc-18055jv-19 wNrVb ant-col-xs-24 ant-col-md-4">
                       <div class="DesktopSearchWidget2__ButtonWrapper-sc-18055jv-4 imAAaU"><button data-testid="SearchWidget.search" data-tracking-event="search_tickets" type="button" class="ant-btn DesktopSearchWidget2__ButtonDateStyled-sc-18055jv-5 DesktopSearchWidget2__ButtonSearchStyled-sc-18055jv-6 JdjsQ ant-btn-block"><span>Tìm Chuyến</span></button></div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="ant-row SurveyMoving__RowSurveyStyled-sc-1srflc6-0 fDJJks">
              Bạn đặt xe để  
              <div class="ant-btn-group"><button data-id="1" type="button" class="ant-btn"><span>Du lịch</span></button><button data-id="2" type="button" class="ant-btn"><span>Về quê</span></button><button data-id="3" type="button" class="ant-btn"><span>Công tác</span></button></div>
              <button type="button" class="ant-btn btn--send"><span>Gửi</span></button>
           </div>
        </div>
     </div>
 --}}</div>
@endsection