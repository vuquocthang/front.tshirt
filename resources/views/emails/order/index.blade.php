<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#dcf0f8" style="margin:0;padding:0;background-color:#f2f2f2;width:100%!important;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
    <tbody>
        <tr>
            <td align="center" valign="top" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">

                <table border="0" cellpadding="0" cellspacing="0" width="600" style="margin-top:15px">
                    <tbody>
                        

                        <tr style="background:#fff">
                            <td align="left" width="600" height="auto" style="padding:15px">
                                <table>
                                    <tbody>
                                        
                                        <tr>

                                            <td>
                                                <h1 style="font-size:17px;font-weight:bold;color:#444;padding:0 0 5px 0;margin:0">
                                                    Cảm ơn quý khách {{ $order->cus_name }} đã đặt hàng tại Kingclothes.com,</h1>

                                                <p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">
													King clothes rất vui thông báo đơn hàng #{{ $order->id }} của quý khách đã được tiếp nhận và đang trong quá trình xử lý. King clothes sẽ thông báo đến quý khách ngay khi hàng chuẩn bị được giao.
                                                </p> 
												
												@if( $user != null )
												</br>
												<p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">
													Tài khoản của quý khách là bao gồm email : {{ $user->email }} và mật khẩu : {{ $user->rawpw }}. Vui lòng sử dụng tài khoản này để theo dõi đơn hàng.
												</p> 
												@endif

                                                <h3 style="font-size:13px;font-weight:bold;color:#02acea;text-transform:uppercase;margin:20px 0 0 0;border-bottom:1px solid #ddd">
                                                    Thông tin đơn hàng #{{ $order->id }}
                                                    <span style="font-size:12px;color:#777;text-transform:none;font-weight:normal">( {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $order->created_at)->format('d/m/Y H:i:s') }} )</span>
                                                </h3>

                                            </td>

                                        </tr>

                                        <tr>
                                            <td style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">

                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th align="left" width="50%" style="padding:6px 9px 0px 9px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;font-weight:bold">
                                                                Thông tin thanh toán
                                                            </th>
                                                            <th align="left" width="50%" style="padding:6px 9px 0px 9px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;font-weight:bold">
                                                                Địa chỉ giao hàng </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td valign="top" style="padding:3px 9px 9px 9px;border-top:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">
                                                                <span style="text-transform:capitalize">{{ $order->cus_name }}</span>
                                                                <br> <a href="mailto:{{ $order->cus_email }}" target="_blank">{{ $order->cus_email }}</a>
                                                                <br> {{ $order->cus_phone }}
                                                            </td>

                                                            <td valign="top" style="padding:3px 9px 9px 9px;border-top:0;border-left:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">
                                                                <span style="text-transform:capitalize">{{ $order->cus_name }}</span>
                                                                <br> <a href="mailto:{{ $order->cus_email }}" target="_blank">{{ $order->cus_email }}</a>
                                                                <br> {{ $order->cus_address }}
                                                                <br> T: {{ $order->cus_phone }}
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td valign="top" style="padding:7px 9px 0px 9px;border-top:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444" colspan="2">
                                                                <p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">

                                                                    <strong>Phương thức thanh toán: </strong> {{ $order->paymentMethod() }}
                                                                    <br> <strong>Thời gian giao hàng dự kiến:</strong> dự kiến giao hàng vào Thứ năm, 23/08/2018
                                                                    <br>
                                                                    <strong>Phí vận chuyển: </strong> 0&nbsp;₫
                                                                    <br>

                                                                    </p>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">
                                                    <i>Lưu ý: Đối với đơn hàng đã được thanh toán trước, nhân viên giao nhận
                                                        có thể yêu cầu người nhận hàng cung cấp CMND / giấy phép lái xe để
                                                        chụp ảnh hoặc ghi lại thông tin.</i>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 style="text-align:left;margin:10px 0;border-bottom:1px solid #ddd;padding-bottom:5px;font-size:13px;color:#02acea">
                                                    CHI TIẾT ĐƠN HÀNG</h2>

                                                <table cellspacing="0" cellpadding="0" border="0" width="100%" style="background:#f5f5f5">
                                                    <thead>
                                                        <tr>
                                                            <th align="left" bgcolor="#02acea" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Sản phẩm</th>
                                                            <th align="left" bgcolor="#02acea" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                                Đơn giá</th>
                                                            <th align="left" bgcolor="#02acea" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Số lượng</th>
                                                            <th align="left" bgcolor="#02acea" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Giảm giá</th>
                                                            <th align="right" bgcolor="#02acea" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Tổng tạm</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody bgcolor="#eee" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
                                                        
														@foreach( $order->details()->get() as $detail )
														<tr>
                                                            <td align="left" valign="top" style="padding:3px 9px">
                                                                <span class="m_9202999168357762782name">{{ $detail->product()->first()->name }}</span>
                                                                <br> </td>
                                                            <td align="left" valign="top" style="padding:3px 9px">
                                                                @if( $detail->campaign_id != null)
																<span>{{ number_format($detail->campaign()->first()->price) }} ₫</span>
																@else
																<span>{{ number_format( \App\Product::find($detail->product_id)->price ) }} ₫</span>	
																@endif
															</td>
                                                            <td align="left" valign="top" style="padding:3px 9px">{{ $detail->product_quantity }}</td>
                                                            <td align="left" valign="top" style="padding:3px 9px">
                                                                <span>0&nbsp;₫</span>
                                                            </td>
                                                            <td align="right" valign="top" style="padding:3px 9px">
                                                                @if( $detail->campaign_id != null)
																<span>{{ number_format($detail->campaign()->first()->price * $detail->product_quantity) }} ₫</span>
																@else( $detail->campaign_id === null)
																<span>{{ number_format( \App\Product::find($detail->product_id)->price * $detail->product_quantity ) }} ₫</span>
																@endif
															</td>
                                                        </tr>
														@endforeach
													</tbody>
                                                    <tfoot style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
                                                        <tr>
                                                            <td colspan="4" align="right" style="padding:5px 9px">Tổng tạm tính</td>
                                                            <td align="right" style="padding:5px 9px">
                                                                <span>{{ number_format($order->total()) }} ₫</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" align="right" style="padding:5px 9px">Giảm giá</td>
                                                            <td align="right" style="padding:5px 9px">
                                                                <span>0&nbsp;₫</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4" align="right" style="padding:5px 9px">Phí vận chuyển</td>
                                                            <td align="right" style="padding:5px 9px">
                                                                <span>0&nbsp;₫</span>
                                                            </td>
                                                        </tr>

                                                        <tr bgcolor="#eee">
                                                            <td colspan="4" align="right" style="padding:7px 9px">
                                                                <strong>
                                                                    <big>Tổng giá trị đơn hàng</big>
                                                                </strong>
                                                            </td>
                                                            <td align="right" style="padding:7px 9px">
                                                                <strong>
                                                                    <big>
                                                                        <span>{{ number_format($order->total()) }}&nbsp;₫</span>
                                                                    </big>
                                                                </strong>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <div style="margin:auto">
                                                    <a href="#" style="display:inline-block;text-decoration:none;background-color:#00b7f1!important;margin-right:30px;text-align:center;border-radius:3px;color:#fff;padding:5px 10px;font-size:12px;font-weight:bold;margin-left:35%;margin-top:5px" target="_blank" data-saferedirecturl="">Chi tiết đơn hàng tại Kingclothes</a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <br>
                                                <p style="margin:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">
                                                    Trường hợp quý khách có những băn khoăn về đơn hàng, có thể xem thêm mục
                                                    <a href="https://mandrillapp.com/track/click/31005910/hotro.tiki.vn?p=eyJzIjoicFNvOU1TUmNfVVhDQW95ZmtSc1g3ZElYM3U0IiwidiI6MSwicCI6IntcInVcIjozMTAwNTkxMCxcInZcIjoxLFwidXJsXCI6XCJodHRwOlxcXC9cXFwvaG90cm8udGlraS52blxcXC9oY1xcXC92aVxcXC8_dXRtX3NvdXJjZT10cmFuc2FjdGlvbmFsK2VtYWlsJnV0bV9tZWRpdW09ZW1haWwmdXRtX3Rlcm09bG9nbyZ1dG1fY2FtcGFpZ249bmV3K29yZGVyXCIsXCJpZFwiOlwiNWUwNTE5ZGYyZTI4NDMyZTlhOTgxNzc0OWYxN2UyMjNcIixcInVybF9pZHNcIjpbXCIyZmVjOGE0OWEyMzkxMzUwMGIxYzkyNTk1N2VlOGNjZDFhZDBmZWZmXCJdfSJ9" title="Các câu hỏi thường gặp" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://mandrillapp.com/track/click/31005910/hotro.tiki.vn?p%3DeyJzIjoicFNvOU1TUmNfVVhDQW95ZmtSc1g3ZElYM3U0IiwidiI6MSwicCI6IntcInVcIjozMTAwNTkxMCxcInZcIjoxLFwidXJsXCI6XCJodHRwOlxcXC9cXFwvaG90cm8udGlraS52blxcXC9oY1xcXC92aVxcXC8_dXRtX3NvdXJjZT10cmFuc2FjdGlvbmFsK2VtYWlsJnV0bV9tZWRpdW09ZW1haWwmdXRtX3Rlcm09bG9nbyZ1dG1fY2FtcGFpZ249bmV3K29yZGVyXCIsXCJpZFwiOlwiNWUwNTE5ZGYyZTI4NDMyZTlhOTgxNzc0OWYxN2UyMjNcIixcInVybF9pZHNcIjpbXCIyZmVjOGE0OWEyMzkxMzUwMGIxYzkyNTk1N2VlOGNjZDFhZDBmZWZmXCJdfSJ9&amp;source=gmail&amp;ust=1534959256937000&amp;usg=AFQjCNEDk8DmYBbhVvjpN8ys15Pikhlyyw">
                                                        <strong>các câu hỏi thường gặp</strong>.</a>
                                                </p>

												{{--
                                                <p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;border:1px #14ade5 dashed;padding:5px;list-style-type:none">
                                                    Từ ngày 14/2/2015, Tiki sẽ không gởi tin nhắn SMS khi đơn hàng của bạn được xác nhận thành công. Chúng tôi chỉ liên hệ trong trường hợp đơn hàng có thể bị trễ hoặc không liên hệ giao hàng được.
                                                </p> --}}

                                                <p style="margin:10px 0 0 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">
                                                    Bạn cần được hỗ trợ ngay? Chỉ cần email
                                                    <a href="mailto:hotro@kingclothes.com" style="color:#099202;text-decoration:none" target="_blank">
                                                        <strong>hotro@kingclothes.com</strong>
                                                    </a>, hoặc gọi số điện thoại
                                                    <strong style="color:#099202">1800-6963</strong> (8-21h cả T7,CN). Đội ngũ Kingclothes luôn sẵn sàng hỗ trợ bạn bất kì lúc nào.
                                                </p>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <br>

                                                <p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;margin:0;padding:0;line-height:18px;color:#444;font-weight:bold">
                                                    Một lần nữa Kingclothes cảm ơn quý khách.
                                                    <br>

                                                </p>

                                                <p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;text-align:right">

                                                    <strong>
                                                        <a style="color:#00a3dd;text-decoration:none;font-size:14px" href="" target="_blank" data-saferedirecturl="">kingclothes.com</a>
                                                    </strong>
                                                    <br>
                                                </p>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </td>

        </tr>

        <tr>
            <td align="center">
                <table width="600">
                    <tbody>
                        <tr>
                            <td>
                                <p style="font-family:Arial,Helvetica,sans-serif;font-size:11px;line-height:18px;color:#4b8da5;padding:10px 0;margin:0px;font-weight:normal" align="left">
                                    Quý khách nhận được email này vì đã mua hàng tại Kingclothes.
                                    <br> Để chắc chắn luôn nhận được email thông báo, xác nhận mua hàng từ Kingclothes, quý khách vui lòng thêm địa chỉ
                                    <strong><a href="mailto:" target="_blank">hotro@kingclothes.com</a></strong> vào số địa chỉ (Address Book, Contacts) của hộp email.
                                    <br>
                                    <b>Văn phòng Kingclothess:</b> 52 Út Tịch, phường 4, quận Tân Bình, thành phố Hồ Chí Minh, Việt Nam
                                    
								</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>