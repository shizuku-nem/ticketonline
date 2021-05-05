@extends('layouts.app')

@section('content')

<div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
    </div>
  </div>
<div id="ticket-v2CJzeCRDw3QkaAjE5IgIwMDDMq7QCOgoyOC0wNC0yMDIxSBhQMXgBqAGMjQI" data-company-name="Phú Bình (Quảng Ninh)" data-company-id="34444" data-company-full-trip="true" data-company-selling-config="ONLINE" class="TicketWrapper__TicketContainer-unfwwx-0 gwZizY">
    <div class="ticket_container">
       <div class="ticket_body">
          <div class="image" style="background-image:"><img class="operator lazyloaded" data-src="//static.vexere.com/production/images/1603788369916.jpeg?w=250&amp;h=250" alt="Phú Bình (Quảng Ninh)" src="//static.vexere.com/production/images/1603788369916.jpeg?w=250&amp;h=250"><img class="sticker lazyloaded"></div>
          <div class="TicketPC__RightBody">
             <div class="TicketPC__TripInfo">
                <div class="bus-info">
                   <div class="bus-name">Phú Bình (Quảng Ninh)</div>
                   <div class="bus-rating">
                      <i aria-label="icon: star" class="anticon anticon-star">
                         <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                            <path d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"></path>
                         </svg>
                      </i>
                      <span>5 (1)</span>
                   </div>
                </div>
                <div class="seat-type">Ghế ngồi 16 chỗ</div>
                <div class="from-to">
                   <div class="from-to-content">
                      <div class="content from">
                         <div class="hour">19:00</div>
                         <div class="place">• Nhà Hát Lớn Hà Nội</div>
                      </div>
                      <div class="duration">2h40m</div>
                      <div class="content to">
                         <div class="hour">21:40</div>
                         <div class="place">• Chợ Trung Tâm Uông Bí</div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="TicketPC__FareInfo-sc-1mxgwjh-6 clHleX">
                <div class="fare">
                   <div class="small"></div>
                   <div> 100.000đ</div>
                </div>
                <div></div>
             </div>
             <div class="TicketPC__DetailAndAction-sc-1mxgwjh-7 kWvAfg">
                <div class="info">
                   <div class="seat-available ">15 chỗ trống</div>
                </div>
                <div class="action">
                    <a href="{{ url('/tripinformation') }}" class="btn btn-xs btn-info pull-right">
                        <span>Thông tin chi tiết</span>
                    </a>
                   <button data-tracking-event="selected_route" type="button" class="ant-btn btn-booking "><span>Chọn chuyến</span></button>
                </div>
             </div>
          </div>
       </div>
       <div class="notify-trip">
          <div class="content-has-cop">
             <div>Không cần thanh toán trước</div>
          </div>
       </div>
    </div>
 </div>
@endsection