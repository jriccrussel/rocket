</main>

    <footer>
        <div class="view_pc">
            <div class="width_90 mg_auto flex flex_center container txt_tpad_3 txt_bpad_5">
                <div class="width_15">
                    <a href="#" class="txt_left">
                        <img src="<?php echo get_template_directory_uri();?>/img/common/foot_logo.png" alt="" class="fix_zoom undrag">
                    </a>
                </div>
                <div class="width_75"></div>
                <div class="width_10">
                    <p class="roboto_l font_18 line_h_150 txt_right white">© Lorem 2021</p>
                </div>
            </div>
            <div class="space_2"></div>
        </div>

        <div class="view_tabsp">
            <div class="width_80 mg_auto flex flex_center container txt_tpad_3 txt_bpad_5">
                <div class="width_40">
                    <a href="#" class="txt_left">
                        <img src="<?php echo get_template_directory_uri();?>/img/common/foot_logo.png" alt="" class="fix_zoom undrag">
                    </a>
                </div>
                <div class="width_60">
                    <p class="roboto_l font_100 line_h_150 txt_right white">© Lorem 2021</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="<?php echo get_template_directory_uri();?>/js/smoothScroll.min.js"></script>
    <script>
        /* global smoothScroll */
        (function () {
            'use strict';

            if (typeof smoothScroll === 'undefined') {
                return;
            }

            var setClickEvent = function (selector, func) {
                document.querySelectorAll(selector).forEach(function (elenemt) {
                    elenemt.addEventListener('click', function (event) {
                        func(event);
                    });
                });
            };

            setClickEvent('a[href^="#"]', function (event) {
                event.preventDefault();

                smoothScroll.scrollTo(event.target.getAttribute('href'), 500);
            });
        }());
    </script>
    
</body> 
</html>