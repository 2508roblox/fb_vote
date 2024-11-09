<div>
    <footer class="footer color-scheme-4 gradient section-sections--17738896146628__footer-padding">
        <div class="footer__content-top page-width">
            <div class="footer__blocks-wrapper grid grid--1-col grid--2-col grid--4-col-tablet  scroll-trigger animate--slide-in" data-cascade>
                <div class="footer-block grid__item footer-block--menu scroll-trigger animate--slide-in" data-cascade style="--animation-order: 1;">
                    <ul class="footer-block__details-content list-unstyled">
                        <li><a id="HeaderMenu-home" href="/" class="header__menu-item list-menu__item link link--text focus-inset">
                            <span>Trang chủ</span>
                        </a></li>
                        <li><a id="HeaderMenu-about" href="/about" class="header__menu-item list-menu__item link link--text focus-inset">
                            <span>Giới thiệu</span>
                        </a></li>
                        <li><a id="HeaderMenu-blogs" href="/blogs" class="header__menu-item list-menu__item link link--text focus-inset">
                            <span>Danh mục</span>
                        </a></li>

                        @php
                            use App\Models\BlogCategory;
                            $categories = BlogCategory::all();
                        @endphp

                        @foreach($categories as $category)
                            <li>
                                <a id="HeaderMenu-category-{{ $category->id }}" href="/blog-categories/{{ $category->slug }}" class="header__menu-item list-menu__item link link--text focus-inset">
                                    <span>{{ $category->name }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>

                </div>
                <div class="footer-block grid__item footer-block--menu scroll-trigger animate--slide-in" data-cascade style="--animation-order: 2;">

                </div>
                <div class="footer-block grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 3;">
                    <h2 class="footer-block__heading inline-richtext">Mua sắm tự tin</h2>
                    <div class="footer-block__details-content rte">
                        <p>Picklefox cung cấp thiết bị pickleball chất lượng cao, giá cả minh bạch và trải nghiệm mua sắm an toàn. Chúng tôi ưu tiên chất lượng, cộng đồng và sự hài lòng của khách hàng.<br /><br /> Tìm hiểu thêm  về các biện pháp bảo mật toàn diện và quy trình vận chuyển an toàn của chúng tôi.</p>
                    </div>
                </div>

            </div>
            <div class="footer-block--newsletter scroll-trigger animate--slide-in" data-cascade>
                <div class="footer-block__newsletter">
                    <h2 class="footer-block__heading inline-richtext">Đăng ký để nhận cập nhật sản phẩm mới nhất</h2>
                    <form method="post" action="#" id="ContactFooter" accept-charset="UTF-8" class="footer__newsletter newsletter-form"><input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="contact[tags]" value="newsletter">
                        <div class="newsletter-form__field-wrapper">
                            <div class="field">
                                <input id="NewsletterForm--sections--17738896146628__footer" type="email" name="contact[email]" class="field__input" value="" aria-required="true" autocorrect="off" autocapitalize="off" autocomplete="email" placeholder="Email" required>
                                <label class="field__label" for="NewsletterForm--sections--17738896146628__footer">
                                    Email
                                </label>
                                <button type="submit" class="newsletter-form__button field__button" name="commit" id="Subscribe" aria-label="Subscribe">
                                    <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-arrow" viewBox="0 0 14 10">
                                            <path fill="currentColor" fill-rule="evenodd" d="M8.537.808a.5.5 0 0 1 .817-.162l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708L11.793 5.5H1a.5.5 0 0 1 0-1h10.793L8.646 1.354a.5.5 0 0 1-.109-.546" clip-rule="evenodd" /></svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <ul class="list-unstyled list-social footer__list-social" role="list">
                    <li class="list-social__item">
                        <a href="#" class="link list-social__link">
                            <span class="svg-wrapper"><svg class="icon icon-instagram" viewBox="0 0 20 20">
                                    <path fill="currentColor" fill-rule="evenodd" d="M13.23 3.492c-.84-.037-1.096-.046-3.23-.046-2.144 0-2.39.01-3.238.055-.776.027-1.195.164-1.487.273a2.4 2.4 0 0 0-.912.593 2.5 2.5 0 0 0-.602.922c-.11.282-.238.702-.274 1.486-.046.84-.046 1.095-.046 3.23s.01 2.39.046 3.229c.004.51.097 1.016.274 1.495.145.365.319.639.602.913.282.282.538.456.92.602.474.176.974.268 1.479.273.848.046 1.103.046 3.238.046s2.39-.01 3.23-.046c.784-.036 1.203-.164 1.486-.273.374-.146.648-.329.921-.602.283-.283.447-.548.602-.922.177-.476.27-.979.274-1.486.037-.84.046-1.095.046-3.23s-.01-2.39-.055-3.229c-.027-.784-.164-1.204-.274-1.495a2.4 2.4 0 0 0-.593-.913 2.6 2.6 0 0 0-.92-.602c-.284-.11-.703-.237-1.488-.273ZM6.697 2.05c.857-.036 1.131-.045 3.302-.045a63 63 0 0 1 3.302.045c.664.014 1.321.14 1.943.374a4 4 0 0 1 1.414.922c.41.397.728.88.93 1.414.23.622.354 1.279.365 1.942C18 7.56 18 7.824 18 10.005c0 2.17-.01 2.444-.046 3.292-.036.858-.173 1.442-.374 1.943-.2.53-.474.976-.92 1.423a3.9 3.9 0 0 1-1.415.922c-.51.191-1.095.337-1.943.374-.857.036-1.122.045-3.302.045-2.171 0-2.445-.009-3.302-.055-.849-.027-1.432-.164-1.943-.364a4.15 4.15 0 0 1-1.414-.922 4.1 4.1 0 0 1-.93-1.423c-.183-.51-.329-1.085-.365-1.943C2.009 12.45 2 12.167 2 10.004c0-2.161 0-2.435.055-3.302.027-.848.164-1.432.365-1.942a4.4 4.4 0 0 1 .92-1.414 4.2 4.2 0 0 1 1.415-.93c.51-.183 1.094-.33 1.943-.366Zm.427 4.806a4.105 4.105 0 1 1 5.805 5.805 4.105 4.105 0 0 1-5.805-5.805m1.882 5.371a2.668 2.668 0 1 0 2.042-4.93 2.668 2.668 0 0 0-2.042 4.93m5.922-5.942a.958.958 0 1 1-1.355-1.355.958.958 0 0 1 1.355 1.355" clip-rule="evenodd" /></svg>
                            </span>
                            <span class="visually-hidden">Instagram</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__content-bottom scroll-trigger animate--slide-in" data-cascade>
            <div class="footer__content-bottom-wrapper page-width">
                <div class="footer__column footer__localization isolate"></div>
                <div class="footer__column footer__column--info">
                    <div class="footer__payment">
                        <span class="visually-hidden">Payment methods</span>
                        <ul class="list list-payment" role="list"></ul>
                    </div>
                </div>
            </div>
            <div class="footer__content-bottom-wrapper page-width footer__content-bottom-wrapper--center">
                <div class="footer__copyright caption">
                    @php
                    $setting = \App\Models\Setting::first(); // Retrieve the first setting record
                @endphp

                <small class="copyright__content">
                 <a href="/" title="">{{ $setting->copyright ?? 'Picklefox.com' }}</a>
                </small>

                    {{-- <ul class="policies list-unstyled">
                        <li>
                            <small class="copyright__content"><a href="/policies/refund-policy">Refund policy</a></small>
                        </li>
                        <li>
                            <small class="copyright__content"><a href="/policies/privacy-policy">Privacy policy</a></small>
                        </li>
                        <li>
                            <small class="copyright__content"><a href="/policies/terms-of-service">Terms of service</a></small>
                        </li>
                        <li>
                            <small class="copyright__content"><a href="/policies/shipping-policy">Shipping policy</a></small>
                        </li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </footer>
</div>
